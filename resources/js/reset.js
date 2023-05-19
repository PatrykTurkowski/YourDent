const navMobileBtn = document.querySelector('.nav__mobile-icon');
const navMobile = document.querySelectorAll('.nav__item-mobile');
const navLanguageBtn = document.querySelector(`.nav__language-chosen`);
const navLanguageOption = document.querySelectorAll(`.nav__language-btn`);
const navLanguagePolish = document.querySelector(`.nav__language--pl`);
const navLanguageEnglish = document.querySelector(`.nav__language--eng`);
const navLanguageContainer = document.querySelector(`.nav__language-btn-container`);
const newPassword = document.querySelector(`#newPass`)
const newPasswordRepeat = document.querySelector(`#newPassRep`)
const newPassAllert = document.querySelector(`.password__text-new`)
const newPassBtn = document.querySelector(`.new-password__btn`)

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


// RESET ZAPOMNIANEGO HASŁA
const newPasswordReset = () => {
    if(newPassword.value == newPasswordRepeat.value && newPassword.value !== "" &&newPasswordRepeat.value !== ""){
        newPassAllert.textContent = `Hasło zostało zmienione.`
        newPassAllert.classList.add(`password__done`)
		newPassAllert.classList.remove(`password__failure`)
        newPassword.value = ``
		newPasswordRepeat.value = ``
    } else if(newPassword.value === "" || newPasswordRepeat.value === "") {
		newPassAllert.textContent = `Podane pola nie mogą być puste.`
		newPassAllert.classList.remove(`password__done`)
        newPassAllert.classList.add(`password__failure`)
		newPassword.value = ``
		newPasswordRepeat.value = ``
		
	} else {
        newPassAllert.textContent = `Podane hasła nie są takie same.`
		newPassAllert.classList.remove(`password__done`)
        newPassAllert.classList.add(`password__failure`)
		newPassword.value = ``
		newPasswordRepeat.value = ``
    }
}


navMobileBtn.addEventListener(`click`, handleNav);
navLanguageBtn.addEventListener(`click`, handleLanguageNav);
navLanguageContainer.addEventListener(`click`, changeLanguage);
newPassBtn.addEventListener(`click`, newPasswordReset)