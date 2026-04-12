document.addEventListener('DOMContentLoaded', () => {

    let regexNumero = /^\+?[0-9]+$/
    let regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/

    function verifier(balise, min, regex) {
        if (balise.value.length < min || (regex && !regex.test(balise.value))) {
            balise.classList.add("error")
        } 
        else {
            balise.classList.remove("error")
        }
    }

    let champs = [
        { balise: document.querySelector('input[name="prenom"]'),     min: 2 },
        { balise: document.querySelector('input[name="nom"]'),        min: 2 },
        { balise: document.querySelector('input[name="email"]'),      min: 5, regex: regexEmail },
        { balise: document.querySelector('input[name="tel"]'),        min: 10, regex: regexNumero },
        { balise: document.querySelector('textarea[name="message"]'), min: 2 }
    ]

    champs.forEach(champ => {
        ['blur', 'change'].forEach(event => {
            champ.balise.addEventListener(event, () => verifier(champ.balise, champ.min, champ.regex))
        })
    })

})          