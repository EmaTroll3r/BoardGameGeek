const max_slit_items = 5;
const maxApiResults = 5;


// <img src="https://cf.geekdo-images.com/7k_nOxpO9OGIjhLq2BUZdA__opengraph/img/10P2KjknnofwYAqlJkBUXpz0I40=/0x0:4259x2236/fit-in/1200x630/filters:strip_icc()/pic3163924.jpg" alt="Scythe">
// <div id="home-explore-main-text" class="item">
//     <div id="home-explore-main-title" class="item-title">Scythe: One of the best worker placement games ever</div>
//     <div id="home-explore-main-author" class="item-author">by&nbsp;<a class="home-author" href="#">EmaTroll3r</a></div>
// </div>

function createMainNews(item){
    const wrapper = document.createElement('div');

    const a_img = document.createElement('a');
    a_img.href = BASE_URL + 'media/' + item.id

    const img = document.createElement('img');
    img.id = 'home-explore-main-img';
    img.src = item.boardgame.thumbnail_url;
    img.alt = item.boardgame.name;

    const text = document.createElement('div');
    text.id = 'home-explore-main-text';
    text.classList.add('item');

    const a_title = document.createElement('a');
    a_title.href = BASE_URL + 'media/' + item.id;

    const title = document.createElement('div');
    title.id = 'home-explore-main-title';
    title.classList.add('item-title');
    title.textContent = item.title;

    const author = document.createElement('div');
    author.id = 'home-explore-main-author';
    author.classList.add('item-author');
    author.innerHTML = 'by&nbsp;';

    const a_author = document.createElement('a');
    a_author.href = BASE_URL + 'user/' + item.uploader.id;
    a_author.classList.add('home-author');
    a_author.textContent = item.uploader.username;

    author.appendChild(a_author);

    a_title.appendChild(title);

    text.appendChild(a_title);
    text.appendChild(author);

    a_img.appendChild(img);

    wrapper.appendChild(a_img);
    wrapper.appendChild(text);

    return wrapper;
}

function createTopNews(item){
    const newsItem = document.createElement('div');
    newsItem.classList.add('home-explore-articles-item','item');

    const a_img = document.createElement('a');
    a_img.href = BASE_URL + "media/" + item.id;

    const img = document.createElement('img');
    img.classList.add('home-explore-articles-item-img')
    img.src = item.boardgame.image_url;
    img.alt = item.boardgame.name

    const text = document.createElement('div');
    text.classList.add('home-explore-articles-item-text');

    const a_title = document.createElement('a');
    a_title.classList.add('home-explore-articles-item-title','item-title');
    a_title.textContent = item.title;
    a_title.href = BASE_URL + "media/" + item.id;

    const author = document.createElement('div');
    author.classList.add('home-explore-articles-item-author','item-author');
    author.innerHTML = 'by&nbsp;'

    const a_author = document.createElement('a');
    a_author.classList.add('home-author');
    a_author.textContent = item.uploader.username;
    a_author.href = BASE_URL + 'user/' + item.uploader.id;


    author.appendChild(a_author);

    a_img.appendChild(img);

    text.appendChild(a_title);
    text.appendChild(author);

    newsItem.append(a_img);
    newsItem.append(text);

    return newsItem
}

function createHomeSectionItem(item, n, page_name) {
    const sectionItem = document.createElement('a');
    if(item.href)
        sectionItem.href = item.href;
    else
        sectionItem.href = BASE_URL + page_name + item.id;
    sectionItem.classList.add('home-section-item', 'item');

    const img = document.createElement('img');
    img.classList.add('home-section-item-img')
    img.src = item.thumbnail_url;
    img.alt = item.name;

    const textContainer = document.createElement('div');
    textContainer.classList.add('home-section-item-text');
    
    const title = document.createElement('div');
    title.classList.add('home-section-item-title', 'item-title');
    title.textContent = `${n} - ${item.name}`;

    if(item.small_description){
        var description = document.createElement('div');
        description.classList.add('home-section-item-description', 'item-description');
        description.textContent = item.small_description;
    }

    if(item.publishers && item.expires){
        var info = document.createElement('div');
        info.classList.add('home-section-item-info');
        info.textContent = `${item.publishers[0].name} - Ends ${item.expires}`;
    }else if(item.expires){
        var info = document.createElement('div');
        info.classList.add('home-section-item-info');
        info.textContent = `Ends ${item.expires}`;
    }else if(item.info){
        var info = document.createElement('div');
        info.classList.add('home-section-item-info');
        info.textContent = item.info;
    }

    if(item.external_link){
        var link = document.createElement('a');
        link.href = item.external_link;
        link.classList.add('home-section-item-outer-link', 'home-author');
        link.textContent = 'Visit Project';
    }

    if(item.author){
        var authorContainer = document.createElement('div');
        authorContainer.classList.add('home-section-item-author', 'item-author');
        authorContainer.innerHTML = `by&nbsp;`;

        const authorLink = document.createElement('a');
        authorLink.classList.add('home-author');
        authorLink.href = '#';
        authorLink.textContent = item.author;
        
        authorContainer.appendChild(authorLink);

        if(item.n_likes && item.n_comments){
            const likeCommentsContainer = document.createElement('div');
            likeCommentsContainer.classList.add('home-likeComments-icons');

            const likeIcon = document.createElement('i');
            likeIcon.classList.add('fa-regular', 'fa-thumbs-up', 'home-likeComments-icon');

            const likeCount = document.createElement('div');
            likeCount.classList.add('home-split-number');
            likeCount.textContent = item.n_likes;

            const commentIcon = document.createElement('i');
            commentIcon.classList.add('fa-regular', 'fa-message', 'home-likeComments-icon');

            const commentCount = document.createElement('div');
            commentCount.classList.add('home-split-number');
            commentCount.textContent = item.n_comments;

            likeCommentsContainer.appendChild(likeIcon);
            likeCommentsContainer.appendChild(likeCount);
            likeCommentsContainer.appendChild(commentIcon);
            likeCommentsContainer.appendChild(commentCount);

            authorContainer.appendChild(likeCommentsContainer);
        }

    }



    textContainer.appendChild(title);

    if(info)
        textContainer.appendChild(info);
    
    if(description)
        textContainer.appendChild(description);

    if(link)
        textContainer.appendChild(link);

    if(authorContainer)
        textContainer.appendChild(authorContainer);

    sectionItem.appendChild(img);
    sectionItem.appendChild(textContainer);

    return sectionItem;
}

function createHomeSplitItem(item, page_name) {
    // console.log(item)
    const splitItem = document.createElement('a');
    if(item.href)
        splitItem.href = item.href;
    else
        splitItem.href = BASE_URL + page_name + item.id;
    splitItem.classList.add('home-split-item', 'item');

    const img = document.createElement('img');
    img.src = item.boardgame.image_url;
    img.alt = item.title;

    const textContainer = document.createElement('div');
    textContainer.classList.add('home-split-item-text');

    const title = document.createElement('div');
    title.classList.add('home-split-item-title', 'item-title');
    title.textContent = item.title;

    const authorContainer = document.createElement('div');
    authorContainer.classList.add('home-split-item-author', 'item-author');

    const authorText = document.createTextNode('by\u00A0');
    const authorLink = document.createElement('a');
    authorLink.classList.add('home-author');
    authorLink.href = BASE_URL + 'user/' + item.uploader.id;
    authorLink.textContent = item.uploader.username;

    const likeCommentsContainer = document.createElement('div');
    likeCommentsContainer.classList.add('home-likeComments-icons');

    const likeIcon = document.createElement('i');
    likeIcon.classList.add('fa-regular', 'fa-thumbs-up', 'home-likeComments-icon');

    const likeCount = document.createElement('div');
    likeCount.classList.add('home-split-number');
    likeCount.textContent = item.n_likes;

    const commentIcon = document.createElement('i');
    commentIcon.classList.add('fa-regular', 'fa-message', 'home-likeComments-icon');

    const commentCount = document.createElement('div');
    commentCount.classList.add('home-split-number');
    commentCount.textContent = item.n_comments;

    likeCommentsContainer.appendChild(likeIcon);
    likeCommentsContainer.appendChild(likeCount);
    likeCommentsContainer.appendChild(commentIcon);
    likeCommentsContainer.appendChild(commentCount);

    authorContainer.appendChild(authorText);
    authorContainer.appendChild(authorLink);
    authorContainer.appendChild(likeCommentsContainer);

    textContainer.appendChild(title);
    textContainer.appendChild(authorContainer);

    splitItem.appendChild(img);
    splitItem.appendChild(textContainer);

    return splitItem;
}


const mainNewsContainer = document.querySelector('#home-explore-main-container');
const exploreContainer = document.querySelector('#home-explore-articles-container');

const hotnessContent = document.querySelector('#hot-section > .home-section-content');
const crowdfundingContent = document.querySelector('#crowdfunding-section > .home-section-content');
const videoContent = document.querySelector('#videos-section > .home-section-content');
const bestsellerContent = document.querySelector('#bestseller-section > .home-section-content');
const givewayContent = document.querySelector('#giveway-section > .home-section-content');
const mostPlayedContent = document.querySelector('#mostPlayed-section > .home-section-content');
const geeklistContent = document.querySelector('#geeklist-section > .home-section-content');
const hotVideosContent = document.querySelector('#hotVideos-section > .home-section-content');
const booksContent = document.querySelector('#hotBooks-section > .home-section-content');
const bgNewsContent = document.querySelector('#home-news-split > .home-split-content');
const discussionContent = document.querySelector('#home-discussion-split > .home-split-content');
const blogsContent = document.querySelector('#home-blogs-split > .home-split-content');
const forumsContent = document.querySelector('#home-forums-split > .home-split-content');


fetch(BASE_URL + 'home/listBoardgames')
.then(onResponseReturnJson)
.then(buildPage)

function buildPage(data){
    // console.log("videos", data.videos)
    console.log(data)
    
    mainNewsContainer.appendChild(createMainNews(data.topNews[0]));

    for(let i=1;i<data.topNews.length; i++){
        const item = data.topNews[i];
        const newsItem = createTopNews(item);
        exploreContainer.appendChild(newsItem);

        if (i + 1 < data.topNews.length) {
            const hrItem = document.createElement('hr');
            hrItem.classList.add('home-explore-articles-item-hr');
            exploreContainer.appendChild(hrItem);
        }
    }

    for (let i=0; i < data.boardGames.length; i++) {
        const item = data.boardGames[i];
        //console.log("Loaded " + item.name)
        const sectionItem = createHomeSectionItem(item, i + 1, 'game/');
        hotnessContent.appendChild(sectionItem);
    }

    for (let i=0; i < data.crowdfunding.length; i++) {
        const item = data.crowdfunding[i];
        //console.log("Loaded " + item.name)
        const sectionItem = createHomeSectionItem(item, i + 1, 'game/');
        crowdfundingContent.appendChild(sectionItem);
    }

    for (let i=0; i < data.videos.length; i++) {
        const item = data.videos[i];
        //console.log("Loaded " + item.name)
        const sectionItem = createHomeSectionItem(item, i + 1, 'game/');
        videoContent.appendChild(sectionItem);
    }

    for (let i=0; i < data.bestseller.length; i++) {
        const item = data.bestseller[i];
        //console.log("Loaded " + item.name)
        const sectionItem = createHomeSectionItem(item, i + 1, 'game/');
        bestsellerContent.appendChild(sectionItem);
    }

    for (let i=0; i < data.giveway.length; i++) {
        
        const item = data.giveway[i];
        //console.log("Loaded " + item.name)
        const sectionItem = createHomeSectionItem(item, i + 1, 'game/');
        givewayContent.appendChild(sectionItem);
    }

    for (let i=0; i < data.mostPlayed.length; i++) {
        const item = data.mostPlayed[i];
        //console.log("Loaded " + item.name)
        const sectionItem = createHomeSectionItem(item, i + 1, 'game/');
        mostPlayedContent.appendChild(sectionItem);
    }

    for (let i=0; i < data.geeklist.length; i++) {
        const item = data.geeklist[i];
        //console.log("Loaded " + item.name)
        const sectionItem = createHomeSectionItem(item, i + 1, 'game/');
        geeklistContent.appendChild(sectionItem);
    }

    for (let i=0; i < data.books.length; i++) {
        const item = data.books[i];
        //console.log("Loaded " + item.name)
        const sectionItem = createHomeSectionItem(item, i + 1, 'game/');
        booksContent.appendChild(sectionItem);
    }


    for (let i=0; i < data.boardGameNews.length; i++) {
        const item = data.boardGameNews[i];
        //console.log("Loaded " + item.name)
        const sectionItem = createHomeSplitItem(item, 'media/');
        bgNewsContent.appendChild(sectionItem);

        if (i + 1 < max_slit_items) {
            const hrItem = document.createElement('hr');
            hrItem.classList.add('home-split-item-hr');
            bgNewsContent.appendChild(hrItem);
        }
    }

    for (let i=0; i < data.hotDiscussion.length; i++) {
        const item = data.hotDiscussion[i];
        //console.log("Loaded " + item.name)
        const sectionItem = createHomeSplitItem(item, 'media/');
        discussionContent.appendChild(sectionItem);

        if (i + 1 < max_slit_items) {
            const hrItem = document.createElement('hr');
            hrItem.classList.add('home-split-item-hr');
            discussionContent.appendChild(hrItem);
        }
    }

    for (let i=0; i < data.blogs.length; i++) {
        const item = data.blogs[i];
        //console.log("Loaded " + item.name)
        const sectionItem = createHomeSplitItem(item, 'media/');
        blogsContent.appendChild(sectionItem);

        if (i + 1 < max_slit_items) {
            const hrItem = document.createElement('hr');
            hrItem.classList.add('home-split-item-hr');
            blogsContent.appendChild(hrItem);
        }
    }

    for (let i=0; i < data.forums.length; i++) {
        const item = data.forums[i];
        //console.log("Loaded " + item.name)
        const sectionItem = createHomeSplitItem(item, 'media/');
        forumsContent.appendChild(sectionItem);

        if (i + 1 < max_slit_items) {
            const hrItem = document.createElement('hr');
            hrItem.classList.add('home-split-item-hr');
            forumsContent.appendChild(hrItem);
        }
    }
}

