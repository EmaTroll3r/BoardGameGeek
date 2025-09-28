const quickbarContent = document.querySelector('#quickbar-content')

fetch(BASE_URL + 'getHotGames/15')
.then(onResponseReturnJson)
.then(populateQuickbar);

function addQuickbarItem(itemData, container, addFinalSeparator) {
    const quickbarItem = document.createElement('a');
    quickbarItem.className = 'quickbar-item';
    quickbarItem.href = BASE_URL + 'game/' + itemData.id;

    if (addFinalSeparator) {
        quickbarItem.classList.add('quickbar-item-separator');
    }
    
    const img = document.createElement('img');
    img.src = itemData.image_url;
    img.className = 'quickbar-item-image';
    img.alt = itemData.name;
    
    const wrapper = document.createElement('div');
    wrapper.className = 'quickbar-item-wrapper';
    
    const name = document.createElement('div');
    name.className = 'quickbar-item-name';
    name.textContent = itemData.name;
    
    const year = document.createElement('div');
    year.className = 'quickbar-item-year';
    year.textContent = itemData.year_published;
    
    wrapper.appendChild(name);
    wrapper.appendChild(year);
    
    quickbarItem.appendChild(img);
    quickbarItem.appendChild(wrapper);
    
    container.appendChild(quickbarItem);
}

function populateQuickbar(data) {

    // console.log(data);
    for (let i = 0; i < data.length; i++) {
        addQuickbarItem(data[i], quickbarContent, i < data.length - 1);
    }
}
