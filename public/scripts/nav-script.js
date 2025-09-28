
const navItems = document.querySelectorAll('.nav-links-item');
const navMenu = document.querySelector('#nav-menu-container');
const quickbar = document.querySelector('#quickbar-wrapper');
const usernameContent = document.querySelector('#nav-username-content');
const searchButton = document.querySelector('#nav-search-button');
const searchInput = document.querySelector('#nav-search-input');

function showSubmenu(event) {
    event.currentTarget.classList.toggle('nav-show-Submenu');
}

function hideAllSubMenu() {
    for (let item of navItems) {
        item.classList.remove('nav-show-Submenu');
    }
}

function toggleQuickbar() {
    quickbar.classList.toggle('quickbar-hide');
}

function onText(text) {
    usernameContent.dataset.username = text || "Sign In";
}

function searchBoardgame(){
    const q = searchInput.value.trim();
    
    if(!q) 
        return;
    
    window.location.href = BASE_URL + 'search/' + q;
}



for(let item of navItems) {
    item.addEventListener('click', showSubmenu);
}


fetch(BASE_URL + 'getSessionUsername')
.then(onResponseReturnText)
.then(onText)



document.addEventListener('click', hideAllSubMenu,{ capture: true});
navMenu.addEventListener('click', toggleQuickbar);
searchButton.addEventListener('click',searchBoardgame)
    
