const navMobileBtn = document.querySelector('.nav__mobile-icon');
const navMobile = document.querySelectorAll('.nav__item-mobile');
const navLanguageBtn = document.querySelector(`.nav__language-chosen`);
const navLanguageOption = document.querySelectorAll(`.nav__language-btn`);
const navLanguagePolish = document.querySelector(`.nav__language--pl`);
const navLanguageEnglish = document.querySelector(`.nav__language--eng`);
const navLanguageContainer = document.querySelector(`.nav__language-btn-container`);
const emailRegister = document.querySelector(`#regEmail`)
const emailRegisterAllert = document.querySelector(`.register__alert-email`)
const passwordRegister = document.querySelector('#regPassword')
const passwordRegisterRepeat = document.querySelector('#confRegPassword')
const passwordRegisterAllert = document.querySelector(`.register__alert-password`)
const registerBtn = document.querySelector(`.register__btn`)
const registerInputs = document.querySelectorAll(`.register__input`)
const registerAlerts = document.querySelectorAll(`.register__alert`)
const postCodeInput = document.querySelector(`#postCode`)
const postCodeAlert = document.querySelector('.register__alert-postcode')
const rulesInput = document.querySelector(`#rules`)
const rulesLabel = document.querySelector(`.register__input-checkbox-info`)
const popup = document.querySelector('.register__popup')
const popupBtn = document.querySelector(`.register__popup-btn`)


// NAWIGACJA
const handleNav = () => {
	navMobile.forEach((link) => {
		link.classList.toggle(`nav__active`);
	});
    removeLanguageBox()
};

const removeLanguageBox = () => {
    navLanguageOption.forEach((language) => {
		language.classList.remove(`nav__language-btn-active`);
	});

}

const handleLanguageNav = () => {
	navLanguageOption.forEach((language) => {
		language.classList.toggle(`nav__language-btn-active`);
	});
	navMobile.forEach((link) => {
		link.classList.remove(`nav__active`);
	});
};

const changeLanguage = (e) => {
	const chosenLanguage = e.target.innerText;
	navLanguageBtn.textContent = chosenLanguage;

    removeLanguageBox()
};


// REJESTRACJA WALIDACJA

const checkEmail = () => {
	const correctEmail = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/g

	if(emailRegister.value.match(correctEmail)){
		// emailRegister.value = ''
		emailRegisterAllert.classList.remove(`register__alert-email--visible`)
		emailRegisterAllert.classList.remove(`register__alert--visible`)
	} else {
		emailRegisterAllert.classList.add(`register__alert-email--visible`)
		emailRegisterAllert.textContent = 'Proszę wpisać poprawny adres email.'
	}
}


const passwordChecker = () => {
    if(passwordRegister.value == passwordRegisterRepeat.value){
        passwordRegister.value = ``
		passwordRegisterRepeat.value = ``
        passwordRegisterAllert.classList.remove(`register__alert-password--visible`)
    } else {
        passwordRegisterAllert.classList.add(`register__alert-password--visible`)
		passwordRegisterAllert.textContent = 'Podane hasła nie są taki same.'
    }
}


const checkPostalCode = () => {
	const plPostCodeRegexp = /^[0-9]{2}-[0-9]{3}/

	if(plPostCodeRegexp.test(postCodeInput.value)) {
		postCodeInput.nextElementSibling.classList.remove('register__alert-postcode--visible')

	}
	 else {
		postCodeAlert.classList.add('register__alert-postcode--visible')
		postCodeAlert.textContent = 'Proszę wpisać poprawny kod pocztowy w formacie (XX-XXX).'
	} 
}

const checkEmpty = () => {
    registerInputs.forEach(input => {
        if(input.value == "") {
            input.nextElementSibling.classList.add('register__alert--visible')
			input.nextElementSibling.textContent = 'Proszę uzupełnić to pole.'
        } else {
            input.nextElementSibling.classList.remove('register__alert--visible')
        }
    })
}

const checkRules = () => {
	if(rulesInput.checked) {
		rulesLabel.classList.remove(`register__input-checkbox-info--red`)
	} else {
		rulesLabel.classList.add(`register__input-checkbox-info--red`)
	}

}

const checkAlerts = () => {
	let alertCount = 0

	registerAlerts.forEach(alert => {
		if(alert.classList.contains('register__alert--visible') || alert.classList.contains('register__alert-postcode--visible') || alert.classList.contains('register__alert-password--visible') || alert.classList.contains('register__alert-email--visible') || rulesLabel.classList.contains('register__input-checkbox-info--red')){
			alertCount++
		}
	})

	if(alertCount === 0) {
		popup.classList.add('register__popup-show')
		registerInputs.forEach(input => input.value = '')
		rulesInput.checked = false
		// console.log('DZIAŁA');
	}

	// console.log(alertCount);
}

const removePopup = () => {
	popup.classList.remove('register__popup-show')
}



const registerActivator = () => {
	checkEmail()
	checkPostalCode()
	checkEmpty()
    passwordChecker()
	checkRules()
	checkAlerts()
}

navMobileBtn.addEventListener(`click`, handleNav);
navLanguageBtn.addEventListener(`click`, handleLanguageNav);
navLanguageContainer.addEventListener(`click`, changeLanguage);
registerBtn.addEventListener(`click`, registerActivator)
popupBtn.addEventListener(`click`, removePopup)