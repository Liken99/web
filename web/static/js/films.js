/**
 * Отправляет Ajax запрос.
 *
 * @param url
 * @param type
 * @param callback
 */
function sendAjax(url, type, callback) {
    let xhr = new XMLHttpRequest();
    xhr.open(type, url);
    xhr.send();
    xhr.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            let data = JSON.parse(this.responseText);
            callback(data);
        }
    };
}


sendAjax('http://localhost:1001/api/v1/films', 'GET', function (data) {
    let list = document.querySelector('.films-list');
    data.forEach(function (item) {
        var node = document.createElement('article');
        node.innerHTML = item.title;
        list.append(node);
    });

});

let counter = getCounter();
let counterText = document.querySelector('.count');
let on = true;
let interval = setInterval(function () {
    if (on){
        counter ++;
        counterText.innerHTML = counter;
        setCounter(counter);
    }

}, 10);

let btnTimer = document.querySelector('.btn-timer');
btnTimer.addEventListener('click', function () {
    on = !on;
    this.classList.toggle('btn-danger');
    this.classList.toggle('btn-success');

    this.innerHTML = on ? 'Включить' : 'Выключить';
});

setTimeout(function () {
    //location.reload();

}, 1000);


let btnClear = document.querySelector('.btn-clear');
btnClear.addEventListener('click', function () {
    counter = 0;

});

/**
 * Возврпт счетчика
 */
function getCounter () {
    let number = localStorage.getItem('counter');
    if (number === null) {
        number = 0;
    }

    return parseInt(number);

}


function setCounter(number) {
    localStorage.setItem('counter',number);

}