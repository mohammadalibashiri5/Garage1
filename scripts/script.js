
//Slide Function
const buttons = document.querySelectorAll("[data-carousel-button]");
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
// Form Validation  

/***Submit Function */
const red = '#e8392c';
const form = document.getElementById('myForm');
form.addEventListener('submit', function (e) {
  e.preventDefault();
  if (validateFirstName() && validateLastName() && validateEmail() && validateNumber()) {
    // Perform any necessary form processing or AJAX submission

    // Display success message
    var successMessage = document.getElementById('success-message');
    successMessage.classList.remove('d-none');
    successMessage.style.display = 'block';

    // Reset the form after successful submission
    form.reset();
  }
});

function validateFirstName() {
  const firstName = document.getElementById('first-name');
console.log(firstName);
  if(checkIfEmpty(firstName) === false && checkOnlyLetters(firstName) === true ){
  return true;

  }
  else {
    return false
  }
}

function validateLastName() {
  const lastName = document.getElementById('last-name');
  if(checkIfEmpty(lastName) === false && checkOnlyLetters(lastName) === true){
  return true;
  }
  else{
    return false
  }
}

function validateEmail() {
  const mail = document.getElementById('email');
if(checkIfEmpty(mail) === false && checkMail(mail) === true){
return true;
}else{
    return false
}
  
}

function validateNumber() {
  const number = document.getElementById('number');

  if(checkIfEmpty(number) === false && checkOnlyNumbers(number) === true){
    return true;
  }else{
    return false
  }
  
}

function checkIfEmpty(field) {
    
  if (isEmpty(field.value.trim())) {
    setInvalid(field, `Votre ${field.name} ne doit pas être vide`);
    return true;
  } else {
    setValid(field);
    return false;
  }
}

function isEmpty(value) {
  if (value === '') {
    return true;
  } else {
    return false;
  }
}

function setInvalid(field, message) {
  field.nextElementSibling.innerHTML = message;
  field.nextElementSibling.style.color = red;
}

function setValid(field) {
  field.nextElementSibling.innerHTML = 'span';
}

function checkOnlyLetters(field) {
  let re = /^[a-zA-Z]+$/;
  if (re.test(field.value)) {
    setValid(field);
    return true;
  } else {
    setInvalid(field, `Votre ${field.name} doit contenir que des lettres !`);
    return false;
  }
}

function checkMail(field) {
  let re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!re.test(field.value)) {
    setInvalid(field, `Veuillez saisir une adresse mail valide!`);
    return false;
  } else {
    setValid(field);
    return true;
  }
}
  function checkOnlyNumbers(field){
    let re =/^0\d{9}$/gm;
    if(re.test(field.value)){
        var numberExample = document.querySelector(".exemple");
        numberExample.style.display = "none";
        return true;
    }else{
        if(checkOnlyLetters(field)){
            setInvalid(field, `${field.name} doit contenir que de 10 chiffres !`);
        }
        var numberExample = document.querySelector(".exemple");
        numberExample.style.display = "inline";
        }
    }

function showHelperText() {
  var numberExample = document.querySelector('.exemple');
  numberExample.style.display = 'inline';
}

function hideHelperText() {
  var numberExample = document.querySelector('.exemple');
  numberExample.style.display = 'none';
}