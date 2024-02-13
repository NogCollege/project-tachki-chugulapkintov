let buttons = document.querySelectorAll('.button-cat')

let category = new Map([
    ['suv', document.querySelectorAll('.cat-suv')],
    ['business', document.querySelectorAll('.cat-business')],
    ['sport', document.querySelectorAll('.cat-sport')],
    ['premium', document.querySelectorAll('.cat-premium')],
    ['comfort', document.querySelectorAll('.cat-comfort')]
    ]);

    let allCards = document.querySelectorAll('.catalog-list-item')

    function DisplayCards(cat) {
        allCards.forEach((card) => {
        card.style.display = 'none'
        })
        category.get(cat).forEach((card) => {
        card.style.display = 'block'
        })
        }

        for (let button of buttons) {
            button.addEventListener("click", function() {
            if (!button.classList.contains("button-active")) {
            console.log("Нажатие на неактивную кнопку")
            buttons.forEach((button) => {
            button.classList.remove("button-active") // убираем класс у всех кнопок
            this.classList.add("button-active") // добавляем класс к нажатой кнопке
            })
            DisplayCards(this.dataset.category)
            } else {
            console.log("Нажатие на активную кнопку")
            }
            })
            }

            document.querySelector('.button-all').addEventListener('click', function(evt) {
                evt.preventDefault();
                allCards.forEach((card) => {
                card.style.display = 'block';
                })
                buttons.forEach((button) => {
                button.classList.remove("button-active")
                })
                })