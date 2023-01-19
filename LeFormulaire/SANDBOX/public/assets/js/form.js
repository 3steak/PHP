console.log('hello');

// number 
let reNumber = new RegExp('[0-9]')

//  Mail 
let reMail = new RegExp('[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})');


// Sans caractère spéciaux
let reMinMaj = new RegExp("[a-zA-ZÀ-ÿ]");

// Code postal 
let rePostalCode = new RegExp('/^(?:(?:(?:0[1-9]|[1-8]\d|9[0-5])(?:\d{3})?)|97[1-8]|98[4-9]|2[abAB])$/gm');

//-----------   Regexpassword    ---------------

// force1 maj min 8 characters
let rePasswordforce1 = new RegExp("^(?=.*[a-z])(?=.*[A-Z])");
// force 2 maj min 0-9  8 characters
let rePasswordforce2 = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])");
// force 3 maj min 0-9 8 characters && @
let rePasswordforce3 = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])");



let lastname = document.getElementById('lastname');
let firstname = document.getElementById('firstname');
let postalcode = document.getElementById('postalcode');
let nativecountry = document.getElementById('nativeCountry');


//  Display .help a l'entrée du password

let password = document.getElementById('password');
let confirmPassword = document.getElementById('confirmPassword');
let passwordHelp = document.getElementById('passwordHelp');
let passwordforce = document.getElementById('passwordforce');
let passwordDif = document.getElementById('passwordDif');

password.addEventListener("focus", () => {
    passwordHelp.classList.toggle("d-none");
})

//  ENVOI HTML SI MATCH AVEC DIFFERENTE REGEX
let testPassword = () => {
    if (rePasswordforce3.test(password.value)) {
        passwordforce.innerHTML = "Password is peferct";
    } else if (rePasswordforce2.test(password.value)) {
        passwordforce.innerHTML = "Humm yes ok";
    } else {
        passwordforce.innerHTML = "Password can be better";
    }
};

//  ENVOI HTML SI PASSWORD = PASSWORD ou non 
let diffpassword = () => {
    if (password.value === confirmPassword.value) {
        passwordDif.innerHTML = "Match !";
    } else {
        passwordDif.innerHTML = "Please enter the same password";
    }
}

//  TEST PASSWORD FORCE AND PASSWORD = PASSWORD
confirmPassword.addEventListener('input', (e) => {
    diffpassword();
})
password.addEventListener('input', (e) => {
    testPassword();
})

