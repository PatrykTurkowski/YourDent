const navMobileBtn = document.querySelector('.nav__mobile-icon');
const navMobile = document.querySelectorAll('.nav__item-mobile');
const navLanguageBtn = document.querySelector(`.nav__language-chosen`);
const navLanguageOption = document.querySelectorAll(`.nav__language-btn`);
const navLanguagePolish = document.querySelector(`.nav__language--pl`);
const navLanguageEnglish = document.querySelector(`.nav__language--eng`);
const navLanguageContainer = document.querySelector(`.nav__language-btn-container`);

const myProfileBtn = document.querySelector(`.profile__my-profile-btn`)
const editBtn = document.querySelector(`.profile__edit-btn`)
const historyBtn = document.querySelector(`.profile__history-btn`)
const changePassBtn = document.querySelector(`.profile__change-pass-btn`)
const myProfile = document.querySelector(`.profile__my-profile-box`)
const changeData = document.querySelector(`.profile__change-data-box`)
const visitHistory = document.querySelector(`.profile__visit-history-box`)
const changePassBox = document.querySelector(`.profile__reset-box`)

const resetPassbtn = document.querySelector(`.profile__reset-btn`)
const oldPassInput = document.querySelector(`#oldPassword`)
const newPassInput = document.querySelector(`#changePassword`)
const repeatPasswordInput = document.querySelector(`#changePasswordRepeat`)
const allInputs = document.querySelectorAll(`.profile__reset-input`)
const oldPassAlert = document.querySelector(`.profile__reset-alert--old`)
const repeatPassAlert = document.querySelector(`.profile__reset-alert--change`)
const allAlerts = document.querySelectorAll(`.profile__reset-alert`)
const corectAllert = document.querySelector(`.profile__reset-alert-corect`)

const emailInput = document.querySelector(`#changeEmail`)
const emailAlert = document.querySelector(`.profile__change-alert-email`)
const changeBtn = document.querySelector(`.profile__change-btn`)


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



// NAWIGACJA PANELU PROFILU
const showMyProfile = () => {
	myProfile.classList.remove(`profile__hidden`);
	// myProfile.classList.add(`profile__visible`);
	changeData.classList.remove(`profile__visible`);
	changeData.classList.add(`profile__hidden`);
	visitHistory.classList.remove(`profile__visible`);
	visitHistory.classList.add(`profile__hidden`);
	changePassBox.classList.remove(`profile__visible`)
	changePassBox.classList.add(`profile__hidden`)
}

const showEditPanel = () => {
	myProfile.classList.remove(`profile__visible`)
	myProfile.classList.add(`profile__hidden`);
	changeData.classList.remove(`profile__hidden`);
	changeData.classList.add(`profile__visible`);
	visitHistory.classList.remove(`profile__visible`);
	visitHistory.classList.add(`profile__hidden`);
	changePassBox.classList.remove(`profile__visible`)
	changePassBox.classList.add(`profile__hidden`)
}

const showHistory = () => {
	myProfile.classList.remove(`profile__visible`)
	myProfile.classList.add(`profile__hidden`);
	changeData.classList.remove(`profile__visible`);
	changeData.classList.add(`profile__hidden`);
	visitHistory.classList.remove(`profile__hidden`);
	visitHistory.classList.add(`profile__visible`);
	changePassBox.classList.remove(`profile__visible`)
	changePassBox.classList.add(`profile__hidden`)
}

const showReset = () => {
	myProfile.classList.remove(`profile__visible`)
	myProfile.classList.add(`profile__hidden`);
	changeData.classList.remove(`profile__visible`);
	changeData.classList.add(`profile__hidden`);
	visitHistory.classList.remove(`profile__visible`);
	visitHistory.classList.add(`profile__hidden`);
	changePassBox.classList.remove(`profile__hidden`)
	changePassBox.classList.add(`profile__visible`)
}







// WALIDACJA ZMIANY HASŁA
// const checkValue = () => {
// 	allInputs.forEach(input => {
// 		if(input.value == "") {
// 			input.nextElementSibling.classList.add(`profile__reset-alert--visible`)
// 			input.nextElementSibling.textContent = `Podane pole nie może być puste.`
// 		} else {
// 			input.nextElementSibling.classList.remove(`profile__reset-alert--visible`)
// 		}
// 	})
// }

// const passwordChecker = () => {
//     if(newPassInput.value == repeatPasswordInput.value && repeatPasswordInput.value !== ""){
//         newPassInput.value = ``
// 		repeatPasswordInput.value = ``
//         repeatPassAlert.classList.remove(`profile__reset-alert--visible`)
//     } else if(newPassInput.value == repeatPasswordInput.value && repeatPasswordInput.value == "") {
// 		repeatPassAlert.classList.add(`profile__reset-alert--visible`)
// 		repeatPassAlert.textContent = `Podane pole nie może być puste.`
// 	}
// 	else {
//         repeatPassAlert.classList.add(`profile__reset-alert--visible`)
// 		repeatPassAlert.textContent = 'Podane hasła nie są taki same.'
//     }
// }

// const checkPassInputs = () => {
// 	checkValue()
// 	passwordChecker()

// 	let allertCount = 0

// 	allAlerts.forEach(alert =>  {
// 		if(alert.classList.contains(`profile__reset-alert--visible`)) {
// 			allertCount++
// 		} 
// 	})

// 	if(allertCount === 0) {
// 		corectAllert.classList.add(`profile__reset-alert-corect--visible`)
// 		allInputs.forEach(input => input.value = ``)
// 	} else {
// 		corectAllert.classList.remove(`profile__reset-alert-corect--visible`)
// 	}
// }


// EMAIL

const checkCorrectEmail = () => {
	const correctEmail = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/g

	if (emailInput.value.match(correctEmail)) {
		emailAlert.classList.remove(`profile__change-alert-email--visible`)
	} else {
		emailAlert.classList.add(`profile__change-alert-email--visible`)
	}
}


// const checkCorrectEmail = () => {
// 	const correctEmail = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/g

// 	if(emailRegister.value.match(correctEmail)){
// 		// emailRegister.value = ''
// 		emailRegisterAllert.classList.remove(`register__alert-email--visible`)
// 		emailRegisterAllert.classList.remove(`register__alert--visible`)
// 	} else {
// 		emailRegisterAllert.classList.add(`register__alert-email--visible`)
// 		emailRegisterAllert.textContent = 'Proszę wpisać poprawny adres email.'







myProfileBtn.addEventListener(`click`, showMyProfile)
editBtn.addEventListener(`click`, showEditPanel)
historyBtn.addEventListener(`click`, showHistory)
changePassBtn.addEventListener(`click`, showReset)

changeBtn.addEventListener(`click`, checkCorrectEmail)

// resetPassbtn.addEventListener(`click`, checkPassInputs)

navMobileBtn.addEventListener(`click`, handleNav);
navLanguageBtn.addEventListener(`click`, handleLanguageNav);
navLanguageContainer.addEventListener(`click`, changeLanguage);