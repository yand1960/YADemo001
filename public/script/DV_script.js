if (document.getElementById("activeSort")) {
    document.getElementById("activeSort").style.backgroundColor = 'gray';
}

function bindEvent(e) {
    console.log('bind - ok! id = ', e);
    let url = '/derevoxp/bind/';
    let xhr = new XMLHttpRequest();
    xhr.open('GET', url + 'id=' + e);
    xhr.send();
}

function deleteEvent(e) {
    console.log('delete - ok! id = ', e);
    let url = '/derevoxp/admin/delete/';
    let xhr = new XMLHttpRequest();
    xhr.open('GET', url + e);
    xhr.send();
}

