let slideIndex = 0

function changeSlide(n) {
  showSlides(slideIndex += n)
}

function showSlides(n) {
  const slides = document.querySelectorAll('.slide')

  if (n >= slides.length) {
    slideIndex = 0
  }

  if (n < 0) {
    slideIndex = slides.length - 1
  }

  slides.forEach((slide, index) => {
    if (index === slideIndex) {
      slide.classList.remove('opacity-0')
    } else {
      slide.classList.add('opacity-0')
    }
  })

}