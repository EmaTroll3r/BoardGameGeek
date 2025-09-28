

function onResponseReturnJson(response) {
    return response.json();
}

function onResponseReturnText(response) {
    return response.text();
}

function formatPublishDate(dateString) {
    const date = new Date(dateString);
    const now = new Date();
    const diffMs = now - date;
    const seconds = parseInt(diffMs / 1000);

    const units = [
        { name: "year",   value: 60 * 60 * 24 * 365 },
        { name: "month",  value: 60 * 60 * 24 * 30 },
        { name: "day",    value: 60 * 60 * 24 },
        { name: "hour",   value: 60 * 60 },
        { name: "minute", value: 60 }
    ];

    for (i=0; i<units.length; i++) {
        
        const amount = parseInt(seconds / units[i].value);
        if (amount > 0)
            if (amount === 1) 
                return '1 ' + units[i].name + ' ago'
            else    
                return amount + ' ' + units[i].name + 's ago'
    }
    return "just now";
}