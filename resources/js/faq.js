const navMobileBtn = document.querySelector('.nav__mobile-icon');
const navMobile = document.querySelectorAll('.nav__item-mobile');
const navLanguageBtn = document.querySelector(`.nav__language-chosen`);
const navLanguageOption = document.querySelectorAll(`.nav__language-btn`);
const navLanguagePolish = document.querySelector(`.nav__language--pl`);
const navLanguageEnglish = document.querySelector(`.nav__language--eng`);
const navLanguageContainer = document.querySelector(`.nav__language-btn-container`);
const answers = document.querySelectorAll(`.faq-box__question-answer`)
const questionBtn = document.querySelectorAll(`.faq-box__btn`)
const questionIcon = document.querySelectorAll(`.faq-box__icon`)


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

const showAnswer = (e) => {
	e.target.closest(`div`).nextElementSibling.classList.toggle(`faq-box__question-answer--visible`)

	if (e.target.closest(`.faq-box__icon`).classList.contains('fa-angles-down')) {
		e.target.closest(`.faq-box__icon`).classList.add('fa-angle-up')
		e.target.closest(`.faq-box__icon`).classList.remove('fa-angles-down')
	} else {
		e.target.closest(`.faq-box__icon`).classList.add('fa-angles-down')
		e.target.closest(`.faq-box__icon`).classList.remove('fa-angle-up')

	}
}


const showMoreInfo2 = (e) => {
	e.target.closest(`.team-card__about-me`).nextElementSibling.classList.toggle('team-card__more--visible')
}



questionBtn.forEach((btn) => {
	btn.addEventListener(`click`, showAnswer)
})
navMobileBtn.addEventListener(`click`, handleNav);
navLanguageBtn.addEventListener(`click`, handleLanguageNav);
navLanguageContainer.addEventListener(`click`, changeLanguage);

