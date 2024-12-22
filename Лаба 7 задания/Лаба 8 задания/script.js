const slides = document.querySelector('.slides');
const slideCount = document.querySelectorAll('.slide').length;
const leftArrow = document.querySelector('.left-arrow');
const rightArrow = document.querySelector('.right-arrow');

let currentIndex = 0;

function updateSlider() {
  slides.style.transform = `translateX(-${currentIndex * (100 / slideCount)}%)`;
}

// Логика для переключения влево
leftArrow.addEventListener('click', () => {
  currentIndex = (currentIndex > 0) ? currentIndex - 1 : slideCount - 1;
  updateSlider();
});

// Логика для переключения вправо
rightArrow.addEventListener('click', () => {
  currentIndex = (currentIndex < slideCount - 1) ? currentIndex + 1 : 0;
  updateSlider();
});
