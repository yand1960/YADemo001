if (document.getElementById("activeSort")) {
    document.getElementById("activeSort").style.backgroundColor = 'gray';
}

function bindEvent(id, token) {
    let url = '/derevoxp/bind/';
    let xhr = new XMLHttpRequest();
    xhr.open('GET', url + id + "/" + token);
    xhr.onload = function () {
        let result = xhr.responseText;
        if (result) {
            window.location.href = '/derevoxp/';
        }
    }
    xhr.send();
}

function unbindEvent(id, token) {
    let url = '/derevoxp/unbind/';
    let xhr = new XMLHttpRequest();
    xhr.open('GET', url + id + "/" + token);
    xhr.onload = function () {
        let result = xhr.responseText;
        if (result) {
            window.location.href = '/derevoxp/';
        }
    }
    xhr.send();
}

function deleteEvent(e) {
    let url = '/derevoxp/admin/delete/';
    let xhr = new XMLHttpRequest();
    xhr.open('GET', url + e);
    xhr.onload = function () {
        let result = xhr.responseText;
        if (result) {
            window.location.href = '/derevoxp/admin/';
        }
    }
    xhr.send();
}

