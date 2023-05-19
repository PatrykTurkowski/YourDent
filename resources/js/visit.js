const navMobileBtn = document.querySelector('.nav__mobile-icon');
const navMobile = document.querySelectorAll('.nav__item-mobile');
const navLanguageBtn = document.querySelector(`.nav__language-chosen`);
const navLanguageOption = document.querySelectorAll(`.nav__language-btn`);
const navLanguagePolish = document.querySelector(`.nav__language--pl`);
const navLanguageEnglish = document.querySelector(`.nav__language--eng`);
const navLanguageContainer = document.querySelector(`.nav__language-btn-container`);
const selectDoctor = document.querySelector(`#doctors`)
const selectVisit = document.querySelector(`#services`)
const alertDoctor = document.querySelector(`.visit__alert--doctors`);
const alertVisit = document.querySelector(`.visit__alert--services`)
const showDatesBtn = document.querySelector(`.visit__date-btn`)




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



const checkDoctor = () => {
let doctor = selectDoctor.selectedIndex;

	if(doctor === 0) {
		alertDoctor.classList.add(`visit__alert--show`)
		} else {
			alertDoctor.classList.remove(`visit__alert--show`)
		}
}


const checkVisit = () => {
	let visit = selectVisit.selectedIndex;

	if(visit === 0) {
		alertVisit.classList.add(`visit__alert--show`)
	} else {
		alertVisit.classList.remove(`visit__alert--show`)
	}
}


const sumUp = () => {
	checkDoctor()
	checkVisit()
}







showDatesBtn.addEventListener(`click`, sumUp)
navMobileBtn.addEventListener(`click`, handleNav);
navLanguageBtn.addEventListener(`click`, handleLanguageNav);
navLanguageContainer.addEventListener(`click`, changeLanguage);