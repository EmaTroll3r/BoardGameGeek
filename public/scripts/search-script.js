const main = document.querySelector("#main");
const table = document.querySelector('#search-table');
const searchOrderButtons = document.querySelectorAll(".search-oder-button");

const q = main.dataset.q;
const currentOrderBy = main.dataset.orderby.trim();
const currentOrderDir = main.dataset.orderdir.trim();
console.log('q',q,'\ncurrentOrderBy',currentOrderBy, '\ncurrentOrderDir',currentOrderDir)

fetch(BASE_URL + 'searchBoardgames/' + q + "/" + currentOrderBy + "/" + currentOrderDir)
.then(onResponseReturnJson)
.then(buildPage)


function createRow(item){

    const boardgame_link = BASE_URL + 'game/' + item.id;

    const tr = document.createElement('tr');
    tr.classList.add('search-table-row');

    const tds = []
    for(let i=0; i<10;i++){
        td = document.createElement('td');
        td.classList.add('search-table-cell');
    
        tds.push(td);
    }

    tds[0].classList.add('cell-with-value','cell-value-bold');
        tds[0].textContent = item.bgg_ELO;
    

    tds[1].classList.add('cell-with-img')
        const a_img = document.createElement('a')
        a_img.href = boardgame_link;

        const img = document.createElement('img');
        img.classList.add('cell-img');
        // img.src = item.image_url;
        img.src = item.thumbnail_url;
        img.alt = item.name;

        a_img.appendChild(img);
        tds[1].appendChild(a_img)

    
    tds[2].classList.add('cell-with-title')
        const title_container = document.createElement('div');
        title_container.classList.add('cell-title-container')

        const title_wrapper = document.createElement('div');
        title_wrapper.classList.add('cell-title-wrapper')

        const a_title = document.createElement('a');
        a_title.classList.add('cell-title-name','underlined-link');
        a_title.href = boardgame_link;
        a_title.textContent = item.name;

        const year = document.createElement('div');
        year.classList.add('cell-title-year');
        year.textContent = '(' + item.year_published + ')';
        
        const description = document.createElement('div');
        description.classList.add('cell-title-description');
        description.textContent = item.small_description;

        title_wrapper.appendChild(a_title);
        title_wrapper.appendChild(year);

        title_container.appendChild(title_wrapper);
        title_container.appendChild(description);

        tds[2].appendChild(title_container);

    tds[3].classList.add('cell-with-value','cell-value-bold');
        if(item.current_user_interaction.length !== 0 && item.current_user_interaction[0].rating !== null)
            tds[3].textContent = item.current_user_interaction[0].rating;
        else
            tds[3].textContent = "N/A";

    tds[4].classList.add('cell-with-value','cell-value-bold');
        if(item.current_user_interaction.length !== 0)
            tds[4].textContent = item.current_user_interaction[0].liked === 1 ? 'yes': 'no'
        else
            tds[4].textContent = 'no'

    tds[5].classList.add('cell-with-value');
        tds[5].textContent = item.average_rating;

    tds[6].classList.add('cell-with-value');
        tds[6].textContent = item.num_ratings;

    tds[7].classList.add('cell-with-value');
        tds[7].textContent = item.n_likes;

    tds[8].classList.add('cell-with-value');
        tds[8].textContent = item.complexity_rating;

    tds[9].classList.add('cell-with-value');
        tds[9].textContent = item.n_expansions;

   
    for(let i=0; i<10;i++){
        tr.appendChild(tds[i]);
    }

    return tr
}


function buildPage(data){

    console.log(data)

    if(currentOrderBy === "default"){
        for(let i=0; i<data.start_with.length;i++){
            table.appendChild(createRow(data.start_with[i]));
        }

        for(let i=0; i<data.contains.length;i++){
            table.appendChild(createRow(data.contains[i]));
        }
    }else{
        
        for(let i=0; i<data.length;i++){
            table.appendChild(createRow(data[i]));
        }
    }
}

function orderTableBy(event){
    const target = event.currentTarget;
    const newOrderBy = target.dataset.orderBy;
    
    if(newOrderBy === currentOrderBy){
        const newOrderDir = currentOrderDir === 'desc' ? 'asc': 'desc';
        window.location.href = BASE_URL + "search/" + q + "/" + newOrderBy + "/" + newOrderDir;
    }else{
        window.location.href = BASE_URL + "search/" + q + "/" + newOrderBy + "/" + currentOrderDir;
    }
}


for(let i=0;i<searchOrderButtons.length;i++){
    searchOrderButtons[i].addEventListener('click', orderTableBy)
}

if(currentOrderBy !== "deafult"){
    for(let i=0;i<searchOrderButtons.length;i++){
        if (searchOrderButtons[i].dataset.orderBy === currentOrderBy){
            searchOrderButtons[i].dataset.orderDir = currentOrderDir;
        }
    }
}
