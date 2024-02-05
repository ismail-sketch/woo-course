window.addEventListener('DOMContentLoaded', () => {
    'use strict'

const filtersSectionTitle = document.querySelector('.filters__section-title');
const filtersWrp = document.querySelector('.filters__wrp');
const tickImg = document.querySelector('.filters__section-title-right img');

if(filtersWrp !== null) {
    function isFiltersActive() {
        if(!filtersWrp.classList.contains('active')) {
            filtersWrp.classList.add('active');
            filtersWrp.style.height = filtersWrp.scrollHeight + 'px';
            tickImg.classList.add('active');
        } else {
            filtersWrp.classList.remove('active');
            filtersWrp.style.height = '';
            tickImg.classList.remove('active');
        }
    }
    isFiltersActive();

    filtersSectionTitle.addEventListener('click', () => {
        isFiltersActive();
    })

}



// productSlider
const swiperProd = new Swiper('.productSlider', {
	// Optional parameters
	direction: 'horizontal',
	slidesPerView: 1,
	spaceBetween: 1,

	// breakpoints: {

	// 	300: {
	// 	  slidesPerView: 1,
	// 	},

	// 	440: {
	// 		slidesPerView: 2,
	// 	  },

	// 	650: {
	// 	  slidesPerView: 3,
	// 	},
	// 	1225: {
	// 		slidesPerView: 4,
	// 	  }
	//   }

  });


  // ТЕСТОВАЯ РАБОТА С МИНИАТЮРАМИ
const minWrp = document.querySelector('.minWrp');
const minWrpMin = document.querySelectorAll('.minWrp__min');


// По клику на миниатюры листаем слайдер
if(minWrp && minWrp !== null) {
	minWrp.addEventListener('click', (e) => {
		if(e.target.closest('.minWrp__min')) {
			const index = Number(e.target.dataset.index);
			swiperProd.slideTo(index);
		}

	})

	// Задаем активной миниатюре класс для подсветки
	swiperProd.on('activeIndexChange', () => {
		Array.from(minWrpMin).find(el => {
			if(swiperProd.activeIndex === Number(el.dataset.index)) {
				el.classList.add('active');
			} else {
				el.classList.remove('active');
			}
		})
	})
}


// Изменение расположения карточек товара====================
const shopChangeViewBgIcon1 = document.querySelector('.shop__change-view-bg-icon1');
const shopChangeViewBgIcon2 = document.querySelector('.shop__change-view-bg-icon2');
const shopCardsWrp = document.querySelector('.shop__cards-wrp');
const shopCardItem = document.querySelectorAll('.shop__card-item');

if(shopChangeViewBgIcon2 !== null && shopChangeViewBgIcon1 !== null) {
	shopChangeViewBgIcon2.addEventListener('click', () => {
		shopCardsWrp.classList.add('active');
		shopChangeViewBgIcon2.classList.add('active');
		shopChangeViewBgIcon1.classList.remove('active');
		shopCardItem.forEach(item => {
			item.classList.add('active');
		})
	})

	shopChangeViewBgIcon1.addEventListener('click', () => {
		shopCardsWrp.classList.remove('active');
		shopChangeViewBgIcon2.classList.remove('active');
		shopChangeViewBgIcon1.classList.add('active');
		shopCardItem.forEach(item => {
			item.classList.remove('active');
		})
	})

	function stopChangeCards() {
		if(window.innerWidth <= 670) {
			shopCardsWrp.classList.remove('active');
			shopChangeViewBgIcon2.classList.remove('active');
			shopChangeViewBgIcon1.classList.add('active');
			shopCardItem.forEach(item => {
			item.classList.remove('active');
		})
		}
	}
	stopChangeCards();
	window.addEventListener('resize', stopChangeCards);

}


});
// конец DOMContentLoaded