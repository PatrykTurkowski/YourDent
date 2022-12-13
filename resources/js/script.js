const navMobileBtn = document.querySelector('.nav__mobile-icon');
const navMobile = document.querySelectorAll('.nav__item-mobile');
const offerCardOne = document.querySelector(`.offer__card-img--one`);
const offerCardTwo = document.querySelector(`.offer__card-img--two`);
const offerCardThree = document.querySelector(`.offer__card-img--three`);
const aboutUsImg = document.querySelector(`.about-us__img`);
const navLanguageBtn = document.querySelector(`.nav__language-chosen`);
const navLanguageOption = document.querySelectorAll(`.nav__language-btn`);
const navLanguagePolish = document.querySelector(`.nav__language--pl`);
const navLanguageEnglish = document.querySelector(`.nav__language--eng`);
const navLanguageContainer = document.querySelector(`.nav__language-btn-container`);

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

const changeImg = () => {
	if (window.innerWidth >= 992) {
		offerCardOne.setAttribute(`src`, `./dist/img/dentist-offer-one_1920.jpg`);
		offerCardTwo.setAttribute(`src`, `./dist/img/dentist-offer-two_1920.jpg`);
		offerCardThree.setAttribute(
			`src`,
			`./dist/img/dentist-offer-three_1920.jpg`
		);
	} else {
		offerCardOne.setAttribute(`src`, `./dist/img/dentist-offer-one_640.jpg`);
		offerCardTwo.setAttribute(`src`, `./dist/img/dentist-offer-two_640.jpg`);
		offerCardThree.setAttribute(
			`src`,
			`./dist/img/dentist-offer-three_640.jpg`
		);
	}

	if (window.innerWidth >= 850) {
		aboutUsImg.setAttribute(`src`, `./dist/img/doctor_1920.jpg`);
	} else {
		aboutUsImg.setAttribute(`src`, `./dist/img/doctor_640.jpg`);
	}
};

navMobileBtn.addEventListener(`click`, handleNav);
navLanguageBtn.addEventListener(`click`, handleLanguageNav);
navLanguageContainer.addEventListener(`click`, changeLanguage);
window.addEventListener(`resize`, changeImg);
window.addEventListener(`DOMContentLoaded`, changeImg)
