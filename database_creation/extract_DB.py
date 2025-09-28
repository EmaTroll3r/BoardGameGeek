
import os
import subprocess
import shutil
import re

def dump_db(mysqldump_path=r"C:\xampp\mysql\bin\mysqldump", user="root", db="bgg", out="backup.sql", new_console=True):

    if not os.path.isfile(mysqldump_path):
        if os.name == "nt" and not mysqldump_path.lower().endswith(".exe"):
            alt = mysqldump_path + ".exe"
            if os.path.isfile(alt):
                mysqldump_path = alt
        if not os.path.isfile(mysqldump_path):
            basename = os.path.basename(mysqldump_path)
            found = shutil.which(basename) or shutil.which(mysqldump_path)
            if found:
                mysqldump_path = found

    if not os.path.isfile(mysqldump_path):
        raise FileNotFoundError(f"{mysqldump_path} non trovato")

    args = [mysqldump_path, "-u", user, "--password=", db]
    creationflags = getattr(subprocess, "CREATE_NEW_CONSOLE", 0) if new_console and os.name == "nt" else 0
    with open(out, "wb") as f:
        subprocess.run(args, stdout=f, check=True, creationflags=creationflags)


def extract_table_name(s):
    RE_INSERT = re.compile(r'''insert\s+into\s+(?:|"|\[)?([A-Za-z0-9_.]+)(?:|"|\])?''', re.IGNORECASE)
    m = RE_INSERT.search(s)
    return m.group(1) if m else None

def extract_inserts(input_file, output_file=None, keyword="insert into"):
    
    if output_file is None:
        output_file = os.path.join(os.path.dirname(input_file) or ".", "insert.sql")

    if not os.path.isfile(input_file):
        raise FileNotFoundError(f"{input_file} non trovato")

    try:
        if os.path.exists(output_file):
            os.remove(output_file)
    except OSError:
        pass

    key_low = keyword.lower()

    table_order = {
        "languages": "",
        "countries": "",
        "people": "",
        "users": "",
        "tags": "",
        "boardgames": "",
        "boardgame_alternative_names": "",
        "awards": "",
        "award_boardgame": "",
        "boardgame_tag": "",
        "boardgame_person_designer": "",
        "boardgame_person_artist": "",
        "boardgame_person_publisher": "",
        "microbadges": "",
        "user_microbadge": "",
        "media_categories": "",
        "media": "",
        "comments": "",
        "likes": "",
        "user_boardgame_interaction": "",
        "related_boardgames": "",
        "editions": "",
    }
    

    with open(input_file, "r", encoding="utf-8", errors="replace") as f:
        for line in f:
            if key_low in line.lower():
                # print(line)
                processed = line.replace(");", ");\n\n\n").replace("),", "),\n").replace("VALUES ", "VALUES\n").replace("`","")
                table_order[extract_table_name(processed.split('VALUES')[0])] = processed

    # print(table_order)

    with open(output_file, "a", encoding="utf-8") as out:
        for key,value in table_order.items():
            out.write(value)

    return output_file

if __name__ == "__main__":
    try:
        backup_path = r"C:\Cartella\roba-di-ema\scuola\programmazione\Linguaggi\HTML\Bgg-Copy\full_site\database_creation\backup.sql"
        dump_db(out=backup_path)
        
        ins_path = extract_inserts(backup_path)
        print(f"Inserts salvati in: {ins_path}")

        os.remove(backup_path)
    except subprocess.CalledProcessError as e:
        print("Errore durante il dump:", e)
    except Exception as e:
        print("Errore:", e)