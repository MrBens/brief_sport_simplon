
$(function (){ 

    window.onscroll = function() {
        if (window.pageYOffset > 550) {
            $('.navbar').css({'background-color':'black'})
        }else{
            $('.navbar').css({ 'background-color': 'transparent' })
        }
    }
    
    const toggleClass = (target, regex, minLength = 0, maxLength = 0) => {
        value = $(target).val()
        if (value.match(regex) && value != '' && value.length >= minLength && value.length <= maxLength) {
            $(target).removeClass('is-invalid')
            $(target).addClass('is-valid')
        } else if (!value.match(regex) || value == '' || value.length != minLength || value.length > maxLength) {
            $(target).removeClass('is-valid')
            $(target).addClass('is-invalid')
        }
        
    }

    function checkInput(){
        if (this.id == 'nom') toggleClass(this, /^[a-z]+/i, 0, 255)
        else if (this.id == 'prenom') toggleClass(this, /^[A-Za-z]+\-{0,1}[A-Za-z]+$/g, 0, 255)
        else if (this.id == 'mail') toggleClass(this, /[a-z0-9\.]+@[a-z]+\.[a-z]+$/i, 0, 255)
        else if (this.id == 'num') toggleClass(this, /[^A-Za-z][0-9]+$/g, 10, 10)
        else if (this.id == 'sujet') toggleClass(this, /^[a-z]+/i, 0, 255)
        else if (this.id == 'message') toggleClass(this, /^[a-z]+/i, 0, 255)
    }

    $('#contactInputs').on('input', checkInput)
    $('#contactMessage').on('input', checkInput)
    $('#contactForm').on('submit', (e) => {
        if ($(".is-valid").length != 6) {
            e.preventDefault()
            alert("Veuillez remplir tout les champs")
        }
    })

    $('.toggler-container').on('click', () => $('.toggler-container').toggleClass('active'))
});