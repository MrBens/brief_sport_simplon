const contactForm = document.querySelector("#contact-form"), contactInputs = document.querySelectorAll("#contact-form input"), navBar = document.querySelector('.navbar')
const contactMessage = document.querySelector("#contact-form #message"), togglerContainer = document.querySelector('.toggler-container');

window.onscroll = function () {
    if (window.pageYOffset > 550 && window.location.href.includes('index.php') || window.pageYOffset > 150 && !window.location.href.includes('index.php')) {
        navBar.style.backgroundColor = 'black'
        console.log(window.location.href);
    }else {
        navBar.style.backgroundColor = 'transparent'
    }
}

togglerContainer.addEventListener('click', e => togglerContainer.classList.toggle('active'))

const toggleClass = (target, regex, minLength = 0, maxLength = 0) => {
    value = target.value
    if (value.match(regex) && value != '' && value.length >= minLength && value.length <= maxLength){
        target.classList.remove('is-invalid')
        target.classList.add('is-valid')
    } else if (!value.match(regex) || value == '' || value.length != minLength || value.length > maxLength){
        target.classList.remove('is-valid')
        target.classList.add('is-invalid')
    }
}

function checkInput(target) {
    if (target.id == 'nom') toggleClass(target, /^[a-z]+/i, 0, 255)
    else if (target.id == 'prenom') toggleClass(target, /^[A-Za-z]+\-{0,1}[A-Za-z]+$/g, 0, 255)
    else if (target.id == 'mail') toggleClass(target, /[a-z0-9\.]+@[a-z]+\.[a-z]+$/i, 0, 255)
    else if (target.id == 'num') toggleClass(target, /[^A-Za-z][0-9]+$/g, 10, 10)
    else if (target.id == 'sujet') toggleClass(target, /^[a-z]+/i, 0, 255)
    else if (target.id == 'message') toggleClass(target, /^[a-z]+/i, 0, 255)
}

if (window.location.href.includes('contact.php')) {
    contactInputs.forEach(input => input.addEventListener('input', e => checkInput(e.target)))
    contactMessage.addEventListener('input', e => checkInput(e.target))
    
    contactForm.addEventListener('submit', e => {
        validatedInputs = document.querySelectorAll(".is-valid")
        if (validatedInputs.length != 6) {
            e.preventDefault()
            alert("Veuillez remplir tout les champs")
        }
    });
}