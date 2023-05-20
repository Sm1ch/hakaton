// const btnChoice = document.querySelector('.choice__contant')
// const page1 = document.querySelector('.choice_1')
// const page2 = document.querySelector('.choice_2')

// btnChoice.addEventListener('click', (e) => {
// 	if(e.target) {
// 		page1.classList.add('choice_unactiv')
// 		page2.classList.remove('choice_unactiv')
// 	}
// })

let myElement = document.querySelector('.chips');

window.addEventListener("scroll", () => {
  if (window.pageYOffset >= 10) { // Set the y-offset value where you want the element to become fixed.
    myElement.classList.add('fixed');
  } else {
    myElement.classList.remove('fixed');
  }
});
