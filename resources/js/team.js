const navMobileBtn = document.querySelector('.nav__mobile-icon');
const navMobile = document.querySelectorAll('.nav__item-mobile');
const navLanguageBtn = document.querySelector(`.nav__language-chosen`);
const navLanguageOption = document.querySelectorAll(`.nav__language-btn`);
const navLanguagePolish = document.querySelector(`.nav__language--pl`);
const navLanguageEnglish = document.querySelector(`.nav__language--eng`);
const navLanguageContainer = document.querySelector(`.nav__language-btn-container`);
const teamBtn = document.querySelectorAll(`.team-card__about-me`)
const moreInfo = document.querySelectorAll(`.team-card__more`)

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


// const showMoreInfo = (e) => {
// 	console.log(e.target);
// 	moreInfo.forEach((info) => {
// 		info.closest('.team-card__more').classList.toggle(`team-card__more--visible`)
// 		console.log(info.closest('.team-card__more'));
// 	} )
// }

const showMoreInfo2 = (e) => {
	e.target.closest(`.team-card__about-me`).nextElementSibling.classList.toggle('team-card__more--visible')
}



teamBtn.forEach((btn) => {
	btn.addEventListener(`click`, showMoreInfo2)})
	
navMobileBtn.addEventListener(`click`, handleNav);
navLanguageBtn.addEventListener(`click`, handleLanguageNav);
navLanguageContainer.addEventListener(`click`, changeLanguage);
