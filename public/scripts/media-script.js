const main = document.querySelector("#main");
const mediaContainer = document.querySelector("#media-container");

const headerLink = document.querySelector('#media-header-link');
const headerImg = document.querySelector('#media-header-img');
const headerTitle = document.querySelector('#media-header-title');
const headerNPost = document.querySelector('#media-header-nPost');
const cancelButton = document.querySelector('#media-comments-form-button-cancel');
const form = document.querySelector('#media-comments-form');

media_id = main.dataset.mediaId;
user_id = main.dataset.userId;


fetch(BASE_URL + 'getMediaData/' + media_id)
.then(onResponseReturnJson)
.then(buildPage)

function fetchLikeMedia(event){
    fetch(BASE_URL + 'toggleLikeMedia/' + media_id)    
    .then(onResponseReturnText)
    .then(toggleLikeButton)
}

function toggleLikeButton(response){
    if(response == "OK"){
        const likeButton = document.querySelector("#media-item-like-button");
        const likeNumber = document.querySelector("#media-item-likeButton-number");

        likeButton.classList.toggle('media-item-like-button-active')

        if(likeButton.classList.contains('media-item-like-button-active'))
            likeNumber.dataset.value = parseInt(likeNumber.dataset.value) + 1;
        else        
            likeNumber.dataset.value = parseInt(likeNumber.dataset.value) - 1;
    }else{
        alert(response)
    }
}


function createMediaItem(item, isHeader) {

    console.log(item)
    
    const userLink = BASE_URL + "user/" + item.uploader.id;

    const mediaItem = document.createElement('div');
    mediaItem.classList.add('media-item');
    mediaItem.dataset.comment_id = item.id;
    if(isHeader)
        mediaItem.classList.add('media-gray-background');
    else if(item.uploader.id == user_id)
        mediaItem.classList.add('media-green-background');

    const itemWrap = document.createElement('div');
    itemWrap.classList.add('media-item-wrapper');

    const authorWrap = document.createElement('div');
    authorWrap.classList.add('media-item-author');
    
    const imgLink = document.createElement('a');
    imgLink.href = userLink;
    
    const img = document.createElement('img');
    img.classList.add('media-item-author-img');
    img.src = item.uploader.avatar_url;
    img.alt = item.uploader.username;

    const container = document.createElement('div');
    container.classList.add('media-item-container');

    const header = document.createElement('div');
    header.classList.add('media-item-header');

    const nameLink = document.createElement('a');
    nameLink.classList.add('media-item-header-name');
    nameLink.href = userLink;
    nameLink.textContent = item.uploader.username;

    const dateDiv = document.createElement('div');
    dateDiv.classList.add('media-item-header-date');
    dateDiv.textContent = formatPublishDate(item.created_at);

    if(isHeader && item.media_type=="file"){
        var fileWrap = document.createElement('div');
        fileWrap.id = 'media-item-file-wrapper';
        fileWrap.classList.add('media-item');

        const itemIcon = document.createElement('i');
        itemIcon.id = "media-item-icon";
        itemIcon.classList.add('fa-regular','fa-file');

        const fileType = document.createElement('div');
        fileType.id = 'media-item-file-type';
        fileType.textContent = item.format;

        fileWrap.appendChild(itemIcon);
        fileWrap.appendChild(fileType);

    }else if(isHeader && item.uri){
        var itemImg = document.createElement('img');
        itemImg.id = "media-item-img";
        itemImg.src = item.uri;
        itemImg.alt = item.title;
    }
    
    const textDiv = document.createElement('div');
    textDiv.classList.add('media-item-text');
    if(isHeader)
        textDiv.textContent = item.description;
    else
        textDiv.textContent = item.text_comment;

    if(isHeader){
        var likeWrap = document.createElement('div');
        likeWrap.id = 'media-item-likeButton-wrapper';

        const likeIcon = document.createElement('i');
        likeIcon.id = 'media-item-like-button';
        likeIcon.classList.add('fa-regular', 'fa-thumbs-up');

        const likeNum = document.createElement('div');
        likeNum.id = 'media-item-likeButton-number';
        likeNum.classList.add('media-item-likeButton-number');
        likeNum.dataset.value = item.n_likes;

        likeIcon.addEventListener('click', fetchLikeMedia);

        likeWrap.appendChild(likeIcon);
        likeWrap.appendChild(likeNum);
    }


    if(item.uploader.id == user_id){
        var deleteButton = document.createElement('i');
        deleteButton.classList.add('fa-solid','fa-trash','media-delete-button');
        // console.log(item)
        deleteButton.dataset.comment_id = item.id;

        deleteButton.addEventListener('click',onDeleteButtonClick)
    }

    imgLink.appendChild(img);
    authorWrap.appendChild(imgLink);
    itemWrap.appendChild(authorWrap);

    header.appendChild(nameLink);
    header.appendChild(dateDiv);

    container.appendChild(header);

    if(isHeader && item.media_type=="file")
        container.appendChild(fileWrap);
    else if(isHeader && item.uri)
        container.appendChild(itemImg);    
    container.appendChild(textDiv);

    if(isHeader)
        container.appendChild(likeWrap);
    
    itemWrap.appendChild(container);

    mediaItem.appendChild(itemWrap);

    if(item.uploader.id == user_id)
        mediaItem.appendChild(deleteButton);

    return mediaItem;
}



function buildPage(data){

    // console.log(data);

    
    document.title = data.media.title + " | BoardGameGeek";

    headerLink.href = BASE_URL + 'game/' + data.boardgame.id;
    headerImg.src = data.boardgame.image_url;
    headerImg.alt = data.boardgame.name;
    headerTitle.textContent = data.media.title
    headerNPost.dataset.value = data.media.comments_count;

    mediaContainer.appendChild(createMediaItem(data.media, true));

    if(data.currentUserLike != null){
        const likeButton = document.querySelector("#media-item-like-button");
        likeButton.classList.toggle('media-item-like-button-active');
    }

    for(let i=0;i<data.comments.length;i++){
        const item = createMediaItem(data.comments[i]);
        mediaContainer.appendChild(item);
    }
}

function onCancelButtonClick(event){
    form.reset()
}

function addNewComment(json){
    if(json.status == "OK"){
        form.reset();
        mediaContainer.appendChild(createMediaItem(json.newComment));
        headerNPost.dataset.value = parseInt(headerNPost.dataset.value) + 1;
    }
}

function onFormSubmit(event){
    
    event.preventDefault();

    const token = document.head.querySelector('meta[name="csrf-token"]').content;

    const formData = new FormData();
    formData.append('comment', form.comment.value);
    formData.append('media_id', media_id);

    fetch(BASE_URL + "postComment", { method: 'post', 
                                        body: formData, 
                                        headers: {'X-CSRF-TOKEN': token}})
    .then(onResponseReturnJson)
    .then(addNewComment);

}

function onDeleteButtonClick(event){
    const target = event.currentTarget;
    fetch(BASE_URL + "deleteComment/" + target.dataset.comment_id)
    .then(onResponseReturnJson)
    .then(removeComment);
}   

function removeComment(json){

    if(json.status == "OK"){
        const deletedComment = document.querySelector(`[data-comment_id="${json.comment_id}"]`);
        if(deletedComment){
            deletedComment.remove();
            
            headerNPost.dataset.value = parseInt(headerNPost.dataset.value) - 1;
        }
    }
}

cancelButton.addEventListener('click', onCancelButtonClick);
form.addEventListener('submit',onFormSubmit)
