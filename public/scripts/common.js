

function onResponseReturnJson(response) {
    return response.json();
}

function onResponseReturnText(response) {
    return response.text();
}

function formatPublishDate(dateString) {
    return dateString.split("T")[0];
}