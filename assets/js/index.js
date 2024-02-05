const header = document.querySelector('.header');
const burgerWrp = document.querySelector('.burger__wrp');
const burger = document.querySelectorAll('.burger');
const mainMenu = document.querySelector('.mainMenu');
const catalogAndSearchWrp = document.querySelector('.catalog-and-search-wrp');
const sidebarMenuLink = document.querySelectorAll('.sidebar__menu-link');


burgerWrp.addEventListener('click', () => {
    burger.forEach(item => {
        item.classList.toggle('active');
    })
    catalogAndSearchWrp.classList.toggle('active');
	document.body.style.overflow = 'hidden';
})

window.addEventListener('click', (e) => {
    if(!e.target.closest('.catalog-and-search-wrp') && !e.target.closest('.burger')) {
        burger.forEach(item => {
            item.classList.remove('active');
        })
        catalogAndSearchWrp.classList.remove('active');
		document.body.style.overflow = '';
    }
})

// Закрытие меню при клике по пункту====================
sidebarMenuLink.forEach(item => {
	item.addEventListener('click', () => {
		catalogAndSearchWrp.classList.remove('active');
		document.body.style.overflow = '';
		burger.forEach(item => {
            item.classList.remove('active');
        })
	})
})



// PopUp с формой
const overlay = document.querySelector('.overlay');
const cross = document.querySelector('.cross');
const popupBtns = document.querySelectorAll('.popup-btn');

popupBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        overlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    })
})
if(cross !== null && cross !== undefined) {
    cross.addEventListener('click', () => {
        overlay.classList.remove('active');
        document.body.style.overflow = '';
    })
}


overlay.addEventListener('click', (e) => {
    if(!e.target.closest('.form')) {
        overlay.classList.remove('active');
        document.body.style.overflow = '';
    }
})




// Корзина в хедере
const cartLink = document.querySelector('.cartLink');
const minicart = document.querySelector('.minicart');
const headerCartWrp = document.querySelector('.minicart__cart-wrp');

cartLink.addEventListener('click', () => {
	if(!headerCartWrp.classList.contains('active')) {
		headerCartWrp.style.height = `${headerCartWrp.scrollHeight + 30}px`;
		headerCartWrp.classList.add('active');
	} else {
		headerCartWrp.style.height = '';
		headerCartWrp.classList.remove('active');
	}
})


// Перемещение при адаптиве меню каталога и поиска
const headerSearchWrp = document.querySelector('.header__search-wrp');
const mainContWrp = document.querySelector('.main__cont-wrp');
const headerSearchForm = document.querySelector('.header__search-form');
const sidebar = document.querySelector('.sidebar');
const headerContainer = document.querySelector('.header__container');

function moveHeaderSearch() {
	if(window.innerWidth < 1000) {
		catalogAndSearchWrp.insertAdjacentElement('beforeend', sidebar);
		catalogAndSearchWrp.insertAdjacentElement('afterbegin', headerSearchForm);
	} else {
		mainContWrp.insertAdjacentElement('afterbegin', sidebar);
		headerSearchWrp.insertAdjacentElement('beforeend', headerSearchForm);
	}

	// Перемещение верхнего меню ----------------------------
	if(window.innerWidth < 710) {
		headerSearchForm.insertAdjacentElement('afterend', mainMenu);
	} else {
		headerContainer.insertAdjacentElement('afterbegin', mainMenu);
	}
}
moveHeaderSearch();


// Функция при сужении окна===========================
window.addEventListener('resize', () => {
	moveHeaderSearch();
})

// Скрытие-показ заголовков слайдера на главном экране главной страницы
const swiper1DiscountTitle = document.querySelectorAll('.swiper1__discount-title');
const swiper1PromotionTitle = document.querySelectorAll('.swiper1__promotion-title');

function hideShoweTitleSwiper1(titles) {
	titles.forEach(item => {
		if(!item.textContent) {
			item.style.display = 'none';
		}
	})
}
hideShoweTitleSwiper1(swiper1DiscountTitle);
hideShoweTitleSwiper1(swiper1PromotionTitle);

// swiper1------------------------------------
const swiper = new Swiper('.swiper1', {
	// Optional parameters
	direction: 'horizontal',
	// loop: true,
	effect: 'fade',

	// If we need pagination
	pagination: {
	  el: '.swiper-pagination',
	  clickable: true,
	},
	autoplay: {
		delay: 3000,
	},


  });

// ТЕСТОВАЯ РАБОТА С МИНИАТЮРАМИ
const minWrp = document.querySelector('.minWrp');
const minWrpMin = document.querySelectorAll('.minWrp__min');
const swiperSlide = document.querySelectorAll('.swiper1 .swiper-slide');



// Задаем активной миниатюре класс для подсветки
swiper.on('activeIndexChange', () => {
	Array.from(minWrpMin).find(el => {
		if(swiper.activeIndex === Number(el.dataset.index)) {
			el.classList.add('active');
		} else {
			el.classList.remove('active');
		}
	})
})




// swiperRec------------------------------------
const swiperRec = new Swiper('.swiperRec', {
	// Optional parameters
	direction: 'horizontal',
	slidesPerView: 4,
	spaceBetween: 1,
	loop: true,

	// If we need pagination
	pagination: {
	  el: '.swiper-pagination',
	},

	// Navigation arrows
	navigation: {
	  nextEl: '.swiper-button-next',
	  prevEl: '.swiper-button-prev',
	},

	breakpoints: {

		300: {
		  slidesPerView: 1,
		},

		440: {
			slidesPerView: 2,
		  },

		650: {
		  slidesPerView: 3,
		},
		1225: {
			slidesPerView: 4,
		  }
	  }

  });




// Маска телефона
let maskCode = '+7 (___) ___-__-__';

function maskPhone(selector, masked = maskCode) {
	const elems = document.querySelectorAll(selector);

	function mask(event) {
		const keyCode = event.keyCode;
		const template = masked,
			def = template.replace(/\D/g, ""),
			val = this.value.replace(/\D/g, "");
		//console.log(template);
		let i = 0,
			newValue = template.replace(/[_\d]/g, function (a) {
				return i < val.length ? val.charAt(i++) || def.charAt(i) : a;
			});
		i = newValue.indexOf("_");
		if (i !== -1) {
			newValue = newValue.slice(0, i);
		}
		let reg = template.substr(0, this.value.length).replace(/_+/g,
			function (a) {
				return "\\d{1," + a.length + "}";
			}).replace(/[+()]/g, "\\$&");
		reg = new RegExp("^" + reg + "$");
		if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) {
			this.value = newValue;
		}
		if (event.type === "blur" && this.value.length < 5) {
			this.value = "";
		}

	}

	for (const elem of elems) {
		elem.addEventListener("input", mask);
		elem.addEventListener("focus", mask);
		elem.addEventListener("blur", mask);
	}

}
// use
maskPhone('.input-tel');


