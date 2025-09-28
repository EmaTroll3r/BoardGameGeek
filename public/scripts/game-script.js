
const rankItems = document.querySelectorAll('.game-infoPanel-rank-item a');
const gameImage = document.querySelector('#game-infoPanel-mainImage');
const averageRating = document.querySelector('#game-infoPanel-info-rating-value');
const gameTitle = document.querySelector('#game-infoPanel-info-title');
const gameYear = document.querySelector('#game-infoPanel-info-year');
const gameDescription = document.querySelector('#game-infoPanel-info-description');
const infoAnalysisRating = document.querySelector('#game-infoPanel-info-AnalysisCounts-ratingsCounts-value');
const infoAnalysisComments = document.querySelector('#game-infoPanel-info-AnalysisCounts-commentsCounts-value');
const n_players = document.querySelector('#game-infoPanel-gameplay-players-value');
const n_playersCommunity = document.querySelector('#game-infoPanel-gameplay-playersCommunity-value');
const n_playersBest = document.querySelector('#game-infoPanel-gameplay-playersBest-value');
const playingTime = document.querySelector('#game-infoPanel-gameplay-time-value');
const minAge = document.querySelector('#game-infoPanel-gameplay-age-value');
const minAgeCommunity = document.querySelector('#game-infoPanel-gameplay-ageCommunity-value');
const weight = document.querySelector('#game-infoPanel-gameplay-weight-value');
const alternativeNames = document.querySelector('#game-infoPanel-credits-item-alternativeNames');
const designers = document.querySelector('#game-infoPanel-credits-item-designers');
const artists = document.querySelector('#game-infoPanel-credits-item-artists');
const publishers = document.querySelector('#game-infoPanel-credits-item-publishers');
const likesButton = document.querySelector('#game-infoPanel-button-likes-value');
const mediaContainer = document.querySelector('#game-media-container');
const mainDescription = document.querySelector('#game-description-main-content');
const awards = document.querySelector('#game-description-honors-content');
const owners = document.querySelector('#game-description-stats-owners');
const bggID = document.querySelector('#game-description-stats-bggItemId-value');
const tagsType = document.querySelector('#game-description-tags-type + .game-description-tags-wrapper');
const tagsCategory = document.querySelector('#game-description-tags-category + .game-description-tags-wrapper');
const tagsMechanism = document.querySelector('#game-description-tags-mechanism + .game-description-tags-wrapper');
const tagsFamily = document.querySelector('#game-description-tags-family + .game-description-tags-wrapper');
const videos = document.querySelectorAll('.game-videos-column');
const seeAllButtonVideo = document.querySelector('#game-videos-buttons-seeAll');
const reviewHotContainer = document.querySelector('#game-list-section-hotReviews');
const reviewRecentContainer = document.querySelector('#game-list-section-recentReviews');
const seeAllButtonTextReview = document.querySelector('#game-reviews-buttons-SeeAllTextReview');
const seeAllButtonVideoReview = document.querySelector('#game-reviews-buttons-SeeAllVideoReview');
const releatedBoardgamesContainer = document.querySelector('#game-suggestions-content');
const seeAllButtonReleatedGames = document.querySelector('#game-suggestions-buttons-seeAll');
const forumHotContainer = document.querySelector('#game-forums-hot');
const forumRecentContainer = document.querySelector('#game-forums-recents');
const seeAllButtonForum = document.querySelector('#game-forums-buttons-seeAll');
const filesTopContainer = document.querySelector('#game-files-topFiles');
const filesRecentsContainer = document.querySelector('#game-files-recents');
const seeAllButtonFiles = document.querySelector('#game-files-buttons-seeAll');
const expansionsNumber = document.querySelector('#game-expansions-item-number');
const versionsNumber = document.querySelector('#game-versions-item-number');
const bggNewsNumber = document.querySelector('#game-bggNews-item-number');
const expansionsRowExpansions = document.querySelector("#game-expansions-item-expansions");
const expansionsRowVersions = document.querySelector("#game-expansions-item-versions");
const expansionsRowBggNews = document.querySelector("#game-expansions-item-news");
const gameBuyContainer = document.querySelector('#game-buy-stores-content');

const ratingStars = document.querySelectorAll('.game-infoPanel-rating-star');
const likeImg = document.querySelector('#game-infoPanel-button-likes-img');


gameId = parseInt(document.querySelector("#main").dataset.id);
fetch(BASE_URL + 'getGameData/' + gameId)
.then(onResponseReturnJson)
.then(buildPage);


function addPersonLink(container, name, linkUrl, addSeparator) {
    const link = document.createElement('a');
    link.className = 'underlined-link';
    link.href = linkUrl;
    link.textContent = name;
    
    container.appendChild(link);

    if (addSeparator) {
        const separator = document.createElement('span');
        separator.innerHTML = ',&nbsp;';
        container.appendChild(separator);
    }
}

function addImage(imageUrl, imageLink, mediaContainer) {

    const link = document.createElement('a');
    link.className = 'game-media-item';
    link.href = imageLink;
    

    const img = document.createElement('img');
    img.src = imageUrl;
    img.alt = 'Media';
    

    link.appendChild(img);
    mediaContainer.appendChild(link);
}

function addDescription(text,container) {
    const paragraph = document.createElement('p');
    paragraph.innerHTML = text.replace(/\n/g, '<br>');    
    container.appendChild(paragraph);
}

function addAwardItem(awardText, awardLink, container) {
    const newAwardItem = document.createElement('a');
    newAwardItem.href = awardLink;
    newAwardItem.className = 'game-description-honors-item dotted-underlined-link';
    newAwardItem.textContent = awardText;

    container.appendChild(newAwardItem);
}

function setOfficialLink(officialLink, name) {
    const primaryLink = document.querySelector('#game-description-officialLinks-primaryLink');
    const secondaryLink = document.querySelector('#game-description-officialLinks-secondaryLink');
    primaryLink.href = officialLink;
    primaryLink.target = "_blank";
    primaryLink.textContent = name;
    secondaryLink.href = officialLink;
    secondaryLink.textContent = "(" + officialLink.replace("https://", "").split('/')[0] + ")";
    secondaryLink.target = "_blank";
}


function formatBigNumber(value) {
    if (value >= 1000 && value < 10000) {
        return (value / 1000).toFixed(1) + 'K';
    }
    else if (value >= 10000) {
        return parseInt(value / 1000) + 'K';
    }
    return value.toString();
}

function addClassificationTag(tagText, tagLink, container) {

    const newTag = document.createElement('a');
    newTag.className = 'game-description-tags-item underlined-link';
    newTag.href = tagLink || '#';
    newTag.textContent = tagText;
    
    container.appendChild(newTag);
}

function addVideoItem(videoData, container) {

    // console.log(videoData)
    const videoWrapper = document.createElement('a');
    videoWrapper.className = 'game-videos-column-wrapper';
    videoWrapper.href = BASE_URL + "media/" + videoData.id || '#';
    
    const img = document.createElement('img');
    img.className = 'game-videos-img';
    // img.src = videoData.thumbnail;
    img.src = videoData.uri;
    img.alt = videoData.title;
    
    const mainText = document.createElement('a');
    mainText.className = 'game-videos-mainText game-bold-blue-title-link underlined-link';
    mainText.href = BASE_URL + "media/" + videoData.id || '#';
    mainText.textContent = videoData.title;
    
    const descriptionWrapper = document.createElement('div');
    descriptionWrapper.className = 'game-videos-description-wrapper';
    
    const tag = document.createElement('a');
    tag.className = 'game-tag';
    tag.href = '#';
    tag.textContent = videoData.category.name;

    const author = document.createElement('a');
    author.className = 'game-videos-description-author game-videos-description-text game-permanent-blueLink';
    author.href = '#';
    author.textContent = videoData.uploader.username;
    
    const separator1 = document.createElement('hr');
    separator1.className = 'game-list-description-separator-hr';
    
    const publishDate = document.createElement('a');
    publishDate.className = 'game-videos-description-publishDate game-videos-description-text game-permanent-blueLink';
    publishDate.href = '#';
    publishDate.textContent = formatPublishDate(videoData.created_at);

    const separator2 = document.createElement('hr');
    separator2.className = 'game-list-description-separator-hr';

    const language = document.createElement('div');
    language.className = 'game-videos-description-language game-videos-description-text';
    language.textContent = videoData.language.name;

    descriptionWrapper.appendChild(tag);
    descriptionWrapper.appendChild(author);
    descriptionWrapper.appendChild(separator1);
    descriptionWrapper.appendChild(publishDate);
    descriptionWrapper.appendChild(separator2);
    descriptionWrapper.appendChild(language);
    
    const iconsContainer = document.createElement('div');
    iconsContainer.className = 'game-icons-container game-permanent-blueLink';
    
    const likeIcon = document.createElement('i');
    likeIcon.className = 'fa-solid fa-thumbs-up game-icon';
    const likeNumber = document.createElement('div');
    likeNumber.className = 'game-icon-number';
    likeNumber.textContent = videoData.n_likes || '0';

    const iconSeparator = document.createElement('hr');
    iconSeparator.className = 'game-icons-container-vertical-hr';

    const commentIcon = document.createElement('i');
    commentIcon.className = 'fa-solid fa-message game-icon';
    const commentNumber = document.createElement('div');
    commentNumber.className = 'game-icon-number';
    commentNumber.textContent = videoData.n_comments || '0';

    iconsContainer.appendChild(likeIcon);
    iconsContainer.appendChild(likeNumber);
    iconsContainer.appendChild(iconSeparator);
    iconsContainer.appendChild(commentIcon);
    iconsContainer.appendChild(commentNumber);

    videoWrapper.appendChild(img);
    videoWrapper.appendChild(mainText);
    videoWrapper.appendChild(descriptionWrapper);
    videoWrapper.appendChild(iconsContainer);

    container.appendChild(videoWrapper);
}

function addForumItem(reviewData, container, addFinalSeparator) {

    // console.log(reviewData.uploader.n_published_media);
    const reviewItem = document.createElement('div');
    reviewItem.className = 'game-list-section-item';
    
    const iconsContainer = document.createElement('a');
    iconsContainer.className = 'game-icons-container game-permanent-blueLink';
    iconsContainer.href = BASE_URL + "media/" + reviewData.id;
    
    const likeIcon = document.createElement('i');
    likeIcon.className = 'fa-solid fa-thumbs-up game-icon';
    const likeNumber = document.createElement('div');
    likeNumber.className = 'game-icon-number';
    likeNumber.textContent = reviewData.n_likes || '0';
    
    const iconSeparator = document.createElement('hr');
    iconSeparator.className = 'game-icons-container-vertical-hr';
    
    const commentIcon = document.createElement('i');
    commentIcon.className = 'fa-solid fa-message game-icon';
    const commentNumber = document.createElement('div');
    commentNumber.className = 'game-icon-number';
    commentNumber.textContent = reviewData.n_comments || '0';
    
    iconsContainer.appendChild(likeIcon);
    iconsContainer.appendChild(likeNumber);
    iconsContainer.appendChild(iconSeparator);
    iconsContainer.appendChild(commentIcon);
    iconsContainer.appendChild(commentNumber);
    
    let authorImg;
    if (reviewData.uploader.avatar_url) {
        authorImg = document.createElement('a');
        authorImg.className = 'game-list-section-item-authorImg';
        authorImg.href = BASE_URL + "user/" + reviewData.uploader.id;
        const img = document.createElement('img');
        img.src = reviewData.uploader.avatar_url;
        img.alt = reviewData.uploader.username;
        authorImg.appendChild(img);
    }
    
    const reviewContent = document.createElement('div');
    reviewContent.className = 'game-list-section-item-content';
    
    const reviewTitle = document.createElement('a');
    reviewTitle.className = 'game-list-section-item-title game-bold-blue-title-link underlined-link';
    reviewTitle.href = BASE_URL + "media/" + reviewData.id;
    reviewTitle.textContent = reviewData.title;
    
    const authorWrapper = document.createElement('div');
    authorWrapper.className = 'game-list-section-item-wrapper';
    
    let tag;
    if (reviewData.tag) {
        tag = document.createElement('a');
        tag.className = 'game-tag';
        tag.href = BASE_URL + "forums/" + gameId + "/" + reviewData.tag;
        tag.textContent = reviewData.tag;
    }

    const authorName = document.createElement('a');
    authorName.className = 'game-list-section-item-author game-videos-description-text game-permanent-blueLink';
    authorName.href = BASE_URL + "user/" + reviewData.uploader.id;
    authorName.textContent = reviewData.uploader.username;
    
    const space = document.createElement('span');
    space.innerHTML = '&nbsp;';
    
    let publishedMedia;
    if (reviewData.uploader.n_published_media){
        publishedMedia = document.createElement('div');
        publishedMedia.className = 'game-list-section-item-NpublishedMedia game-videos-description-text';
        publishedMedia.dataset.nPublishedMedia =  reviewData.uploader.n_published_media;
    }   

    const separator = document.createElement('hr');
    separator.className = 'game-list-description-separator-hr';
    
    const publishDate = document.createElement('a');
    publishDate.className = 'game-list-section-item-publishDate game-videos-description-text game-permanent-blueLink';
    publishDate.href = BASE_URL + "media/" + reviewData.id;
    publishDate.textContent = formatPublishDate(reviewData.created_at);
    
    if (reviewData.tag)
        authorWrapper.appendChild(tag);
    authorWrapper.appendChild(authorName);
    authorWrapper.appendChild(space);
    if (reviewData.uploader.n_published_media)
        authorWrapper.appendChild(publishedMedia);
    authorWrapper.appendChild(separator);
    authorWrapper.appendChild(publishDate);
    
    reviewContent.appendChild(reviewTitle);
    reviewContent.appendChild(authorWrapper);
    
    reviewItem.appendChild(iconsContainer);

    if(reviewData.uploader.avatar_url)
        reviewItem.appendChild(authorImg);
    
    reviewItem.appendChild(reviewContent);
    
    container.appendChild(reviewItem);

    if (addFinalSeparator) {
        const finalSeparator = document.createElement('hr');
        finalSeparator.className = 'game-list-section-item-hr';
        container.appendChild(finalSeparator);
    }
}

function addReleatedGameItem(suggestionData, container) {
    const suggestionItem = document.createElement('a');
    suggestionItem.className = 'game-suggestions-item';
    suggestionItem.href = BASE_URL + "game/" + suggestionData.id;
    
    const img = document.createElement('img');
    img.className = 'game-suggestions-item-img';
    img.src = suggestionData.image_url;
    img.alt = suggestionData.name;
    
    const content = document.createElement('div');
    content.className = 'game-suggestions-item-content';
    
    const title = document.createElement('div');
    title.className = 'game-suggestions-item-text game-bold-blue-title-link underlined-link';
    title.textContent = suggestionData.name;
    
    const iconsContainer = document.createElement('div');
    iconsContainer.className = 'game-suggestions-item-icons game-icons-container';
    
    const crownWrapper = document.createElement('div');
    crownWrapper.className = 'game-suggestions-item-icons-wrapper';
    
    const crownIcon = document.createElement('i');
    crownIcon.className = 'fa-solid fa-crown game-icon';
    
    const crownNumber = document.createElement('div');
    crownNumber.className = 'game-icon-number';
    crownNumber.textContent = suggestionData.bgg_ELO || '0';
    
    crownWrapper.appendChild(crownIcon);
    crownWrapper.appendChild(crownNumber);
    
    const heartWrapper = document.createElement('div');
    heartWrapper.className = 'game-suggestions-item-icons-wrapper';
    
    const heartIcon = document.createElement('i');
    heartIcon.className = 'fa-solid fa-heart game-icon';
    
    const heartNumber = document.createElement('div');
    heartNumber.className = 'game-icon-number';
    heartNumber.textContent = suggestionData.n_likes || '0';
    
    heartWrapper.appendChild(heartIcon);
    heartWrapper.appendChild(heartNumber);
    
    iconsContainer.appendChild(crownWrapper);
    iconsContainer.appendChild(heartWrapper);
    
    content.appendChild(title);
    content.appendChild(iconsContainer);
    
    suggestionItem.appendChild(img);
    suggestionItem.appendChild(content);
    
    container.appendChild(suggestionItem);
}

function addFileItem(fileData, container, addFinalSeparator) {

    // console.log(fileData)
    const item = document.createElement('div');
    item.className = 'game-list-section-item';

    const icons = document.createElement('a');
    icons.className = 'game-icons-container game-permanent-blueLink';
    icons.href = BASE_URL + "media/" + fileData.id || '#';

    const likeIcon = document.createElement('i');
    likeIcon.className = 'fa-solid fa-thumbs-up';
    const likeNum = document.createElement('div');
    likeNum.className = 'game-icon-number';
    likeNum.textContent = fileData.n_likes || '0';

    const iconSep = document.createElement('hr');
    iconSep.className = 'game-icons-container-vertical-hr';

    const commentIcon = document.createElement('i');
    commentIcon.className = 'fa-solid fa-message';
    const commentNum = document.createElement('div');
    commentNum.className = 'game-icon-number';
    commentNum.textContent = fileData.n_comments || '0';

    icons.appendChild(likeIcon);
    icons.appendChild(likeNum);
    icons.appendChild(iconSep);
    icons.appendChild(commentIcon);
    icons.appendChild(commentNum);

    const content = document.createElement('div');
    content.className = 'game-list-section-item-content';

    const titleWrapper = document.createElement('div');
    titleWrapper.className = 'game-list-section-item-title-wrapper';

    const fileType = document.createElement('a');
    fileType.className = 'game-list-section-item-fileTypeTag game-permanent-blueLink';
    fileType.href = BASE_URL + "media/" + fileData.id;
    fileType.textContent = fileData.format || 'pdf';

    const title = document.createElement('a');
    title.className = 'game-list-section-item-title game-bold-blue-title-link underlined-link';
    title.href = BASE_URL + "media/" + fileData.id;
    title.textContent = fileData.title;

    titleWrapper.appendChild(fileType);
    titleWrapper.appendChild(title);

    const desc = document.createElement('div');
    desc.className = 'game-list-section-item-description';
    desc.textContent = fileData.description;

    const infoWrapper = document.createElement('div');
    infoWrapper.className = 'game-list-section-item-wrapper';

    const author = document.createElement('a');
    author.className = 'game-list-section-item-author game-videos-description-text game-permanent-blueLink';
    author.href = BASE_URL + "user/" + fileData.uploader.id;
    author.textContent = fileData.uploader.username;

    const sep1 = document.createElement('hr');
    sep1.className = 'game-list-description-separator-hr';

    const pubDate = document.createElement('a');
    pubDate.className = 'game-list-section-item-publishDate game-videos-description-text game-permanent-blueLink';
    pubDate.href = BASE_URL + "media/" + fileData.id;
    pubDate.textContent = formatPublishDate(fileData.created_at);

    const sep2 = document.createElement('hr');
    sep2.className = 'game-list-description-separator-hr';

    const lang = document.createElement('div');
    lang.className = 'game-list-section-item-language game-videos-description-text';
    lang.textContent = fileData.language.name;

    infoWrapper.appendChild(author);
    infoWrapper.appendChild(sep1);
    infoWrapper.appendChild(pubDate);
    infoWrapper.appendChild(sep2);
    infoWrapper.appendChild(lang);

    content.appendChild(titleWrapper);
    content.appendChild(desc);
    content.appendChild(infoWrapper);

    item.appendChild(icons);
    item.appendChild(content);

    container.appendChild(item);

    if (addFinalSeparator) {
        const finalSeparator = document.createElement('hr');
        finalSeparator.className = 'game-list-section-item-hr';
        container.appendChild(finalSeparator);
    }
}


function buildPage(data) {
    
    console.log(data)

    document.title = data.boardgame.name + " | BoardGameGeek";

    gameImage.src = data.boardgame.image_url;
    
    for (let item of rankItems) {
        item.dataset.value = data.boardgame.bgg_ELO;
    }

    averageRating.dataset.value = data.boardgame.average_rating;
    
    gameTitle.dataset.value = data.boardgame.name;

    gameYear.dataset.value = "(" + data.boardgame.year_published + ")";

    gameDescription.dataset.value = data.boardgame.small_description;

    infoAnalysisRating.dataset.value = formatBigNumber(data.boardgame.num_ratings);
    infoAnalysisComments.dataset.value = formatBigNumber(data.boardgame.num_comments);

    if (data.boardgame.min_players === data.boardgame.max_players) {
        n_players.dataset.value = data.boardgame.min_players;
        n_playersCommunity.dataset.value = data.boardgame.min_players;
        n_playersBest.dataset.value = data.boardgame.min_players;
    }else {
        n_players.dataset.value = data.boardgame.min_players + ' - ' + data.boardgame.max_players;
        n_playersCommunity.dataset.value = data.boardgame.min_players + ' - ' + data.boardgame.max_players;
        n_playersBest.dataset.value = data.boardgame.min_players + ' - ' + data.boardgame.max_players;
    }

    playingTime.dataset.value = data.boardgame.playing_time

    minAge.dataset.value = data.boardgame.min_age + '+';
    minAgeCommunity.dataset.value = data.boardgame.min_age + '+';

    weight.dataset.value = data.boardgame.complexity_rating;

    for (let i=0; i < data.alternative_names.length; i++) {
        addPersonLink(alternativeNames, data.alternative_names[i].name, '#', i < data.alternative_names.length - 1);
    }

    for (let i=0; i < data.designers.length; i++) {
        const link = BASE_URL + "person/" + data.designers[i].id
        addPersonLink(designers, data.designers[i].name, link, i < data.designers.length - 1);
    }    

    for (let i=0; i < data.artists.length; i++) {
        const link = BASE_URL + "person/" + data.artists[i].id
        addPersonLink(artists, data.artists[i].name, link, i < data.artists.length - 1);
    }    

    for (let i=0; i < data.publishers.length; i++) {
        const link = BASE_URL + "person/" + data.publishers[i].id
        addPersonLink(publishers, data.publishers[i].name, link, i < data.publishers.length - 1);
    }    

    likesButton.dataset.value = formatBigNumber(data.boardgame.n_likes);

    for(let i=0; i < data.images.length; i++) {
        const link = BASE_URL + "media/" + data.images[i].id;
        addImage(data.images[i].uri, link, mediaContainer);
    }

    const moreLink = document.querySelector("#game-media-seeAll");
    moreLink.dataset.totalImages = data.images_count;
    moreLink.href = BASE_URL + "images/" + data.boardgame.id;
    moreLink.classList.remove('hidden');

    addDescription(data.boardgame.description, mainDescription);
    
    
    for(let i=0; i < data.awards.length; i++) {
        const link = BASE_URL + "award/" + data.awards[i].id + "/" + data.awards[i].year_won;
        addAwardItem(data.awards[i].year_won + ' ' + data.awards[i].award.name, link, awards);
    }

    setOfficialLink(data.boardgame.official_link, data.boardgame.official_link_alt);

    owners.dataset.value = formatBigNumber(data.boardgame.owners);

    bggID.dataset.value = data.boardgame.id;

    for(let i=0; i < data.tags.length; i++) {
        let tagContainer;
        if (data.tags[i].category_type === 'type') {
            tagContainer = tagsType;
        }else if (data.tags[i].category_type === 'category') {
            tagContainer = tagsCategory;
        }else if (data.tags[i].category_type === 'mechanism') {
            tagContainer = tagsMechanism;
        }else if (data.tags[i].category_type === 'family') {
            tagContainer = tagsFamily;
        }

        const link = BASE_URL + "tag/" + data.tags[i].id;
        addClassificationTag(data.tags[i].name, link, tagContainer);
    }


    // fetch(BASE_URL + 'getEbayItem/' + data.name + '/5')
    fetch(BASE_URL + 'getEbayItem/s/5')
    .then(onResponseReturnJson)
    .then(ebayPricing);

    for(let i=0; i<videos.length; i++){
        addVideoItem(data.hot_videos[i], videos[i]);
    }

    // console.log(data.videos_count)
    seeAllButtonVideo.dataset.gameTotal = data.videos_count;
    seeAllButtonVideo.href = BASE_URL + "videos/" + data.boardgame.id;

    // console.log(data.hot_forums[0])
    for (let i=0; i < data.hot_forums.length; i++) {
        addForumItem(data.hot_forums[i], reviewHotContainer, i < data.hot_forums.length - 1);
    }
    
    for (let i=0; i < data.forums.length; i++) {
        addForumItem(data.forums[i], reviewRecentContainer, i < data.forums.length - 1);
    }

    seeAllButtonTextReview.dataset.gameTotal = data.forums_count;
    seeAllButtonTextReview.href = BASE_URL + "forums/" + data.boardgame.id + "/Reviews"

    seeAllButtonVideoReview.dataset.gameTotal = data.videos_count;    
    seeAllButtonVideoReview.href = BASE_URL + "videos/" + data.boardgame.id + "/Reviews";

    for( let i=0; i < data.related_boardgames.length; i++) {
        addReleatedGameItem(data.related_boardgames[i].boardgame_details, releatedBoardgamesContainer);
    }

    seeAllButtonReleatedGames.dataset.gameTotal = data.related_boardgames_count;


    for (let i=0; i < data.hot_forums.length; i++) {
        addForumItem(data.hot_forums[i], forumHotContainer, i < data.hot_forums.length - 1);
    }

    for (let i=0; i < data.forums.length; i++) {
        addForumItem(data.forums[i], forumRecentContainer, i < data.forums.length - 1);
    }

    seeAllButtonForum.dataset.gameTotal = data.forums_count;
    seeAllButtonForum.href = BASE_URL + "forums/" + data.boardgame.id;


    for (let i = 0; i < data.hot_files.length; i++) {
        addFileItem(data.hot_files[i], filesTopContainer, i < data.hot_files.length - 1);
    }

    for (let i = 0; i < data.files.length; i++) {
        addFileItem(data.files[i], filesRecentsContainer, i < data.files.length - 1);
    }

    seeAllButtonFiles.dataset.gameTotal = data.files_count;
    seeAllButtonFiles.href = BASE_URL + "files/" + data.boardgame.id;

    expansionsNumber.dataset.value = data.boardgame.n_expansions;
    expansionsRowExpansions.href = BASE_URL + "expansions/" + data.boardgame.id;
    versionsNumber.dataset.value = data.boardgame.n_versions;
    expansionsRowVersions.href = BASE_URL + "versions/" + data.boardgame.id;

    bggNewsNumber.dataset.value = data.news_count;
    expansionsRowBggNews.href = BASE_URL + "bggNews/" + data.boardgame.id;

    if(data.interaction){
        if(data.interaction.rating){
            for(let i=0; i<data.interaction.rating;i++){
                ratingStars[i].classList.add('game-infoPanel-rating-star-active')
            }
        }
        // console.log(data.interaction.liked)
        if(data.interaction.liked === 1){
            likeImg.classList.add('game-infoPanel-button-likes-img-active')
            console.log('added')
        }
    }
}

function addGameBuyItem(itemData, container, addSeparator) {
    const buyItem = document.createElement('a');
    buyItem.className = 'game-buy-item';
    buyItem.href = itemData.url || '#';
    buyItem.target = '_blank';

    const logo = document.createElement('img');
    logo.className = 'game-buy-stores-item-logo';
    logo.src = itemData.logo || 'https://upload.wikimedia.org/wikipedia/commons/4/48/EBay_logo.png';
    logo.alt = itemData.storeName || 'Store';

    const content = document.createElement('div');
    content.className = 'game-buy-item-content';

    const text = document.createElement('div');
    text.className = 'game-buy-item-text';
    text.textContent = itemData.storeName || 'eBay';

    const price = document.createElement('div');
    price.className = 'game-buy-item-price';
    price.textContent = itemData.price || '€ 0.00';

    content.appendChild(text);
    content.appendChild(price);

    buyItem.appendChild(logo);
    buyItem.appendChild(content);

    container.appendChild(buyItem);

    if (addSeparator !== false) {
        const hr = document.createElement('hr');
        container.appendChild(hr);
    }
}

function ebayPricing(items){

    if(items.itemSummaries){
        for (let i = 0; i < items.itemSummaries.length; i++) {
            
            // console.log(items.itemSummaries[i])
            const itemData = {
                url: items.itemSummaries[i].itemWebUrl,
                logo: 'https://upload.wikimedia.org/wikipedia/commons/4/48/EBay_logo.png',
                storeName: 'eBay',
                price: items.itemSummaries[i].price.value + ' ' + items.itemSummaries[i].price.currency
            };

            addGameBuyItem(itemData, gameBuyContainer, i < items.itemSummaries.length - 1);
            // console.log('added')
        }
    }
}


function rateBoardgame(data){
    
    if(data.status === "OK"){
        const rateValue = data.rateValue;
        for(let i=0; i<rateValue;i++){
            ratingStars[i].classList.add('game-infoPanel-rating-star-active')
        }
        for(let i=ratingStars.length - 1; i>=rateValue;i--){
            ratingStars[i].classList.remove('game-infoPanel-rating-star-active')
        }
    }
    
}


function onRatingStarsClick(event){
    const target = event.currentTarget;
    const rateValue = target.dataset.gameInfopanelRatingStar;

    fetch(BASE_URL + 'rateBoardgame/' + gameId + '/' + rateValue)
    .then(onResponseReturnJson)
    .then(rateBoardgame);
}

function toggleLikeBoardgame(data){
    
    if(data.status === "OK"){
        likeImg.classList.toggle('game-infoPanel-button-likes-img-active');

        if(likeImg.classList.contains('game-infoPanel-button-likes-img-active'))
            likesButton.dataset.value = parseInt(likesButton.dataset.value) + 1;
        else        
            likesButton.dataset.value = parseInt(likesButton.dataset.value) - 1;
    }

}

function onLikeButtonClick(event){
    
    fetch(BASE_URL + 'toggleLikeBoardgame/' + gameId)
    .then(onResponseReturnJson)
    .then(toggleLikeBoardgame);
}

for(let i=0;i<ratingStars.length;i++){
    ratingStars[i].addEventListener('click', onRatingStarsClick);
}

likeImg.addEventListener('click', onLikeButtonClick);