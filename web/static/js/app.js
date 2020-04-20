

var users = [
    {
        name: "Ivan Ivanov",
        email: "ivan@asda.ru",
        age: 22
    },
    {
        name: "Vasya Ivanov",
        email: "Vasya@asda.ru",
        age: 53
    },
    {
        name: "Egor Ivanov",
        email: "aasdd@asda.ru",
        age: 14
    }
];

/**
 * фильтрует массив. Возвращает его
 * @param users
 * @param age
 * @returns {[]}
 */
function filter (users, age = 18) {
    let result = [];

    users.forEach(function (item) {
        if (item.age > age) {
            result.push(item);
        }

    });

    return result;
}


let btn = document.querySelector('.btn-click');
btn.addEventListener('click', function (event) {
    let textNode = document.querySelector('.title-text');
    let input = document.querySelector('.edit-text');
    textNode.innerHTML = 'Hello World!';
    input.classList.toggle('hidden');
});


let input = document.querySelector('.edit-text');
input.addEventListener('keydown', function (event) {
    let textNode = document.querySelector('.title-text');
    textNode.innerHTML = this.value;
});


