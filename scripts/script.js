const buttons = document.querySelectorAll("[data-carousel-button]")

buttons.forEach(button => {
    button.addEventListener('click', () =>{
        const offset = button.dataset.carouselButton === "next" ? 1 : -1
        const slides = button.closest("[data-carousel]").querySelector("[data-slides]")
        const activeSlides = slides.querySelector("[data-active]")
        let newIndex = [...slides.children].indexOf(activeSlides) + offset
        if (newIndex < 0) newIndex = slides.children.length - 1
        if (newIndex >= slides.children.length) newIndex = 0
        slides.children[newIndex].dataset.active = true
        delete activeSlides.dataset.active
     })
});


//Fade-in Function
window.addEventListener('scroll', reveal);

function reveal (){
    var reveals = document.getElementsByClassName('reveal');
    for (var i = 0; i <reveals.length;i++){
        var windowheight = window.innerHeight;
        var revealtop = reveals[i].getBoundingClientRect().top;
        var revealpoint = 150;

        if(revealtop < windowheight - revealpoint){
            reveals[i].classList.add('active');
        }
        else{
            reveals[i].classList.remove('active');
        }
    }
}

//slide-motion
const nextButton = document.querySelector("[data-carousel-button='next']");
const autoSlideInterval = 4000; // Adjust the interval (in milliseconds) between auto slides

const autoSlide = setInterval(() => {
  nextButton.click();
}, autoSlideInterval);

 //Stop auto slide on user interaction
document.addEventListener('click', () => {
clearInterval(autoSlide);
});