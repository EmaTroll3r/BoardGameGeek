import random
from datetime import datetime, timedelta

def generate_likes_sql():
    users = list(range(1, 12))  # user_id da 1 a 11
    media_ids = list(range(1, 556))  # media_id da 1 a 555
    
    # Seleziona circa 70% dei media per avere likes
    media_with_likes = random.sample(media_ids, int(len(media_ids) * 0.7))
    
    likes = []
    like_id = 1
    
    for media_id in media_with_likes:
        # Ogni media selezionato ha tra 5 e 11 likes (tutti gli utenti)
        num_likes = random.randint(5, 11)
        selected_users = random.sample(users, num_likes)
        
        for user_id in selected_users:
            # Timestamp casuale negli ultimi 2 anni
            days_ago = random.randint(0, 730)
            timestamp = datetime.now() - timedelta(days=days_ago)
            ts_str = timestamp.strftime('%Y-%m-%d %H:%M:%S')
            
            likes.append(f"({like_id}, {media_id}, {user_id}, '{ts_str}', '{ts_str}')")
            like_id += 1
    
    # Genera SQL
    sql = "INSERT INTO likes (id, media_id, user_id, created_at, updated_at) VALUES\n"
    sql += ",\n".join(likes) + ";"
    
    with open("likes_data.sql", "w", encoding="utf-8") as f:
        f.write(sql)
    
    print(f"Generati {len(likes)} likes per {len(media_with_likes)} media")
    print(f"File salvato: likes_data.sql")

if __name__ == "__main__":
    generate_likes_sql()