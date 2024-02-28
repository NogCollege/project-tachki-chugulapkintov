let buttons = document.querySelectorAll('.cv');

let category = new Map([
  ['suv', document.querySelectorAll('.cat-suv')],
  ['business', document.querySelectorAll('.cat-business')],
  ['sport', document.querySelectorAll('.cat-sport')],
  ['premium', document.querySelectorAll('.cat-premium')],
  ['comfort', document.querySelectorAll('.cat-comfort')]
]);

let allCards = document.querySelectorAll('.block__grid');

function DisplayCards(cat) {
 
  allCards.forEach((card) => {
    card.style.display = 'none';
    
    
})
console.log(category.get(cat))
category.get(cat).forEach((card) => {
    card.style.display = 'flex';
    console.log('tes');
  })
}

for (let button of buttons) {
  button.addEventListener("click", function(evt) {
    evt.preventDefault();
    if (!button.classList.contains("cv_active")) {
      buttons.forEach((button) => {
        button.classList.remove("cv_active") 
        this.classList.add("cv_active") 
      })
      DisplayCards(this.dataset.category);
      
    }
  })
}

document.querySelector('.cv_all').addEventListener('click', function(evt) {
  evt.preventDefault();
  allCards.forEach((card) => {
    card.style.display = 'flex';
  })
  buttons.forEach((button) => {
    button.classList.remove("cv_active")
  })
})