

<?php
/*
Template Name: Главная
*/
get_header();

?>
   <!-- main -->
   <main class="main">
            <div class="container">
                <div class="minicart">
                    <ul class="minicart__cart-wrp">
                        <li class="minicart__cart-item">
                            <img class="minicart__cart-img" src="<?php echo get_template_directory_uri()?>/assets/img/mainpage/cart-goods-icon1.jpg" alt="icon">
                            <div class="minicart__cart-goods-count-wrp">
                                <span class="minicart__cart-goods-count">2 &nbsp;</span>
                                <span class="minicart__goods-count-text">шт.</span>
                            </div>
                            <span class="minicart__cart-delete-btn">&times;</span>
                        </li>
                        <li class="minicart__cart-item">
                            <img class="minicart__cart-img" src="<?php echo get_template_directory_uri()?>/assets/img/mainpage/cart-goods-icon2.jpg" alt="icon">
                            <div class="minicart__cart-goods-count-wrp">
                                <span class="minicart__cart-goods-count">6 &nbsp;</span>
                                <span class="minicart__goods-count-text">шт.</span>
                            </div>
                            <span class="minicart__cart-delete-btn">&times;</span>
                        </li>
                        <li class="minicart__cart-item">
                            <img class="minicart__cart-img" src="<?php echo get_template_directory_uri()?>/assets/img/mainpage/cart-goods-icon3.jpg" alt="icon">
                            <div class="minicart__cart-goods-count-wrp">
                                <span class="minicart__cart-goods-count">4 &nbsp;</span>
                                <span class="minicart__goods-count-text">шт.</span>
                            </div>
                            <span class="minicart__cart-delete-btn">&times;</span>
                        </li>
                        <button class="minicart__cart-btntocart">Перейти в корзину</button>
                    </ul>
              </div>
                <div class="main__cont-wrp">
                    <aside class="sidebar main__sidebar">
                        <h3 class="sidebar__title">Каталог</h3>
                        <ul class="sidebar__menu-list">
                            <li class="sidebar__menu-item">
                                <div class="sidebar__menu-icon-wrp">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/mainpage/socket-icon.svg" alt="icon" class="sidebar__menu-icon">
                                </div>
                                <a href="#" class="sidebar__menu-link">Электроустановочные изделия</a>
                            </li>
                            <li class="sidebar__menu-item">
                                 <div class="sidebar__menu-icon-wrp">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/mainpage/switch-icon.svg" alt="icon" class="sidebar__menu-icon">
                                </div>
                                <a href="#" class="sidebar__menu-link">Низковольтное оборудование</a>
                            </li>
                            <li class="sidebar__menu-item">
                                 <div class="sidebar__menu-icon-wrp">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/mainpage/electricpanel-icon.svg" alt="icon" class="sidebar__menu-icon">
                                </div>
                                <a href="#" class="sidebar__menu-link">Щиты, шкафы, боксы</a>
                            </li>
                            <li class="sidebar__menu-item">
                                 <div class="sidebar__menu-icon-wrp">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/mainpage/wire-icon.svg" alt="icon" class="sidebar__menu-icon">
                                </div>
                                <a href="#" class="sidebar__menu-link">Кабель и кабеленесущие системы</a>
                            </li>
                            <li class="sidebar__menu-item">
                                 <div class="sidebar__menu-icon-wrp">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/mainpage/bulb-icon.svg" alt="icon" class="sidebar__menu-icon">
                                </div>
                                <a href="#" class="sidebar__menu-link">Светотехника</a>
                            </li>
                            <li class="sidebar__menu-item">
                                 <div class="sidebar__menu-icon-wrp">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/mainpage/plug-icon.svg" alt="icon" class="sidebar__menu-icon">
                                </div>
                                <a href="#" class="sidebar__menu-link">Вилки, штекеры, разъемы, шнуры</a>
                            </li>
                            <li class="sidebar__menu-item">
                                 <div class="sidebar__menu-icon-wrp">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/mainpage/pliers-icon.svg" alt="icon" class="sidebar__menu-icon">
                                </div>
                                <a href="#" class="sidebar__menu-link">Инструменты и монтажные материалы</a>
                            </li>
                            <li class="sidebar__menu-item">
                                 <div class="sidebar__menu-icon-wrp">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/mainpage/fan-icon.svg" alt="icon" class="sidebar__menu-icon">
                                </div>
                                <a href="#" class="sidebar__menu-link">Системы вентиляции и обогрева</a>
                            </li>
                            <li class="sidebar__menu-item">
                                 <div class="sidebar__menu-icon-wrp">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/mainpage/engine-icon.svg" alt="icon" class="sidebar__menu-icon">
                                </div>
                                <a href="#" class="sidebar__menu-link">Автоматизация и электродвигатели</a>
                            </li>
                            <li class="sidebar__menu-item">
                                 <div class="sidebar__menu-icon-wrp">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/mainpage/shield-icon.svg" alt="icon" class="sidebar__menu-icon shield-icon">
                                </div>
                                <a href="#" class="sidebar__menu-link">Молниезащита и заземление</a>
                            </li>
                        </ul>
                    </aside>
                    <div class="main__right-cont">
                        <div class="swiper swiper1">
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide" style="background-image: url('<?php echo get_template_directory_uri()?>/assets/img/mainpage/bag-slide.png');">
                                    <div class="swiper1__left">
                                        <h2 class="swiper1__discount-title"></h2>
                                        <h3 class="swiper1__promotion-title">АКЦИЯ!</h3>
                                        <p class="swiper1__text">ДАРИМ СУМКУ <br> ДЛЯ ИНСТРУМЕНТА <br> ЗА ПОКУПКУ ОТ 25 000 ₽</p>
                                        <a href="#" class="swiper1__btn">К ПОКУПКАМ</a>
                                    </div>
                                </div>

                                <div class="swiper-slide" style="background-image: url('<?php echo get_template_directory_uri()?>/assets/img/mainpage/engine-slide.png');">
                                    <div class="swiper1__left">
                                        <h2 class="swiper1__discount-title">Скидка 7 %</h2>
                                        <h3 class="swiper1__promotion-title"></h3>
                                        <p class="swiper1__text">ЭЛЕКТРОДВИГАТЕЛЬ CROMPTON</p>
                                        <a href="#" class="swiper1__btn">ПОСМОТРЕТЬ</a>
                                    </div>
                                </div>

                                <div class="swiper-slide" style="background-image: url('<?php echo get_template_directory_uri()?>/assets/img/mainpage/switches-slide.png');">
                                    <div class="swiper1__left">
                                        <h2 class="swiper1__discount-title">Скидка 10 %</h2>
                                        <h3 class="swiper1__promotion-title"></h3>
                                        <p class="swiper1__text">НА ВСЁ ЭЛЕКТРОУСТАНОВОЧНОЕ ОБОРУДОВАНИЕ</p>
                                        <a href="#" class="swiper1__btn">К ПОКУПКАМ</a>
                                    </div>
                                </div>
                            </div>
                            <!-- If we need pagination -->
                            <div class="swiper-pagination"></div>

                        </div>

                        <!-- icons -->
                        <div class="main__icons-wrp">
                            <div class="main__icon-item">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/mainpage/certificate-icon.svg" alt="изображение" class="main__icon-img">
                                <span class="main__icons-text">Весь товар сертифицирован</span>
                            </div>
                            <div class="main__icon-item">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/mainpage/car-icon.svg" alt="изображение" class="main__icon-img">
                                <span class="main__icons-text">Бесплатная доставка от 10 000 рублей</span>
                            </div>
                            <div class="main__icon-item">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/mainpage/wallet-icon.svg" alt="изображение" class="main__icon-img">
                                <span class="main__icons-text">Наличная и безналичная оплата</span>
                            </div>
                            <div class="main__icon-item">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/mainpage/stopwatch-icon.svg" alt="изображение" class="main__icon-img">
                                <span class="main__icons-text">Быстрая доставка по Москве и РФ</span>
                            </div>
                        </div>

                        <!-- popular ----------------------------->
                        <section class="popular">
                            <h2 class="title-h2 popular__title">Популярные категории</h2>
                            <div class="popular__card-wrp">

                                <div class="popular__card-item">
                                    <div class="popular__card-img-wrp">
                                        <img src="<?php echo get_template_directory_uri()?>/assets/img/mainpage/popular1.jpg" alt="изо" class="popular__card-img">
                                    </div>
                                    <div class="popular__card-text-wrp">
                                        <h3 class="popular__card-title">Узо, Автоматические выключатели</р>
                                        <span class="popular__card-price">от 700 ₽/шт</span>
                                        <ul class="popular__card-list">
                                            <li class="popular__card-list-item">
                                                <a href="#" class="popular__card-list-link">Shneider Electric Домовой</a>
                                            </li>
                                            <li class="popular__card-list-item">
                                                <a href="#" class="popular__card-list-link">УЗО Easy 9</a>
                                            </li>
                                            <li class="popular__card-list-item">
                                                <a href="#" class="popular__card-list-link">Недорогие УЗО от ABC</a>
                                            </li>
                                            <li class="popular__card-list-item">
                                                <a href="#" class="popular__card-list-link">Все модели УЗО от Legrand</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                                <div class="popular__card-item">
                                    <div class="popular__card-img-wrp">
                                        <img src="<?php echo get_template_directory_uri()?>/assets/img/mainpage/popular2.jpg" alt="изо" class="popular__card-img">
                                    </div>
                                    <div class="popular__card-text-wrp">
                                        <h3 class="popular__card-title">Розетки и выключатели</р>
                                        <span class="popular__card-price">от 20 ₽/шт</span>
                                        <ul class="popular__card-list">
                                            <li class="popular__card-list-item">
                                                <a href="#" class="popular__card-list-link">Все модели и серии Legrand</a>
                                            </li>
                                            <li class="popular__card-list-item">
                                                <a href="#" class="popular__card-list-link">Серия Legrand Alure</a>
                                            </li>
                                            <li class="popular__card-list-item">
                                                <a href="#" class="popular__card-list-link">Розетки</a>
                                            </li>
                                            <li class="popular__card-list-item">
                                                <a href="#" class="popular__card-list-link">Лучший ассортимент рамок</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                                <div class="popular__card-item">
                                    <div class="popular__card-img-wrp">
                                        <img src="<?php echo get_template_directory_uri()?>/assets/img/mainpage/popular3.jpg" alt="изо" class="popular__card-img">
                                    </div>
                                    <div class="popular__card-text-wrp">
                                        <h3 class="popular__card-title">Кабели и провода</р>
                                        <span class="popular__card-price">от 4 ₽/метр</span>
                                        <ul class="popular__card-list">
                                            <li class="popular__card-list-item">
                                                <a href="#" class="popular__card-list-link">Силовой кабель</a>
                                            </li>
                                            <li class="popular__card-list-item">
                                                <a href="#" class="popular__card-list-link">Кабель связи</a>
                                            </li>
                                            <li class="popular__card-list-item">
                                                <a href="#" class="popular__card-list-link">Кабель специального назначения</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                            </div>
                        </section>

                        <!-- recomend---------------------------- -->
                        <section class="recomend">
                            <h2 class="title-h2 recomend__title">Мы рекомендуем</h2>
                            <div class="recomend__slider-wrp">
                                 <!-- If we need navigation buttons -->
                                 <div class="swiper-pagination">
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                                       <!-- Slider main container -->
                                <div class="swiper swiperRec">
                                    <!-- Additional required wrapper -->
                                    <div class="swiper-wrapper">
                                        <!-- Slides -->
                                        <div class="swiper-slide">

                                            <div class="swiperRec__img-wrp">
                                                <img src="<?php echo get_template_directory_uri()?>/assets/img/mainpage/sliderec1.jpg" alt="slide" class="swiperRec__img">
                                            </div>
                                            <h3 class="swiperRec__goods-title">Розетка щитовая Abb 16A 250V</h3>
                                            <div class="swiperRec__prices-wrp">
                                                <span class="swiperRec__goods-price">250 ₽</span>
                                            </div>
                                            <button class="swiperRec__slide-btn">В корзину</button>
                                        </div>

                                        <div class="swiper-slide">

                                            <div class="swiperRec__img-wrp">
                                                <img src="<?php echo get_template_directory_uri()?>/assets/img/mainpage/sliderec2.jpg" alt="slide" class="swiperRec__img">
                                            </div>
                                            <h3 class="swiperRec__goods-title">Выключатель 2х клавишный алюминий Valena</h3>
                                            <div class="swiperRec__prices-wrp">
                                                <span class="swiperRec__goods-price">220 ₽</span>
                                            </div>
                                            <button class="swiperRec__slide-btn">В корзину</button>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="swiperRec__img-wrp">
                                                <img src="<?php echo get_template_directory_uri()?>/assets/img/mainpage/sliderec3.jpg" alt="slide" class="swiperRec__img">
                                            </div>
                                            <h3 class="swiperRec__goods-title">Сумка монтажника С-04 КВТ 66143</h3>
                                            <div class="swiperRec__prices-wrp">
                                                <span class="swiperRec__goods-price">1150 ₽</span>
                                            </div>
                                            <button class="swiperRec__slide-btn">В корзину</button>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="swiperRec__img-wrp">
                                                <img src="<?php echo get_template_directory_uri()?>/assets/img/mainpage/sliderec4.jpg" alt="slide" class="swiperRec__img">
                                            </div>
                                            <h3 class="swiperRec__goods-title">Счетчик электроэнергии однофазный однотарифный INCOTEX Меркурий 201.5 5(60) А</h3>
                                            <div class="swiperRec__prices-wrp">
                                                <span class="swiperRec__goods-price">22500 ₽</span>
                                            </div>
                                            <button class="swiperRec__slide-btn">В корзину</button>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="swiperRec__img-wrp">
                                                <img src="<?php echo get_template_directory_uri()?>/assets/img/mainpage/sliderec5.jpg" alt="slide" class="swiperRec__img">
                                            </div>
                                            <h3 class="swiperRec__goods-title">Дизельный генератор BISON BS7500DCE, (5500 Вт)</h3>
                                            <div class="swiperRec__prices-wrp">
                                                <span class="swiperRec__goods-price">62350 ₽</span>
                                                <span class="swiperRec__goods-price-discount">75400 ₽</span>
                                            </div>
                                            <button class="swiperRec__slide-btn">В корзину</button>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="swiperRec__img-wrp">
                                                <img src="<?php echo get_template_directory_uri()?>/assets/img/mainpage/sliderec6.jpg" alt="slide" class="swiperRec__img">
                                            </div>
                                            <h3 class="swiperRec__goods-title">Стабилизатор напряжения однофазный Штиль ИнСтаб IS 1000 (инверторный) 220В</h3>
                                            <div class="swiperRec__prices-wrp">
                                                <span class="swiperRec__goods-price">12500 ₽</span>
                                            </div>
                                            <button class="swiperRec__slide-btn">В корзину</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- blogposts -->
                        <section class="blogposts">
                            <div class="blogposts__wrp">
                                <div class="blogposts__item">
                                    <span class="blogposts__date">21.04.2023</span>
                                    <h4 class="blogposts__title">Заголовок 1</h4>
                                    <p class="blogposts__text">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Consequuntur ad,
                                        corporis illo ullam dolorem minus quas numquam
                                        laboriosam.
                                        Enim, sed!
                                    </p>
                                </div>
                                <div class="blogposts__item">
                                    <span class="blogposts__date">23.05.2023</span>
                                    <h4 class="blogposts__title">Заголовок 2</h4>
                                    <p class="blogposts__text">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Consequuntur ad,
                                        corporis illo ullam dolorem minus quas numquam
                                        laboriosam.
                                        Enim, sed!
                                    </p>
                                </div>
                                <div class="blogposts__item">
                                    <span class="blogposts__date">12.08.2023</span>
                                    <h4 class="blogposts__title">Заголовок 3</h4>
                                    <p class="blogposts__text">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Consequuntur ad,
                                        corporis illo ullam dolorem minus quas numquam
                                        laboriosam.
                                        Enim, sed!
                                    </p>
                                </div>
                            </div>
                        </section>

                        <!-- seotext -->
                        <section class="seotext">
                            <div class="seotext__wrp">
                                <div class="seotext__img-wrp">
                                    <img class="seotext__img" loading="lazy" src="<?php echo get_template_directory_uri()?>/assets/img/mainpage/seotext.png" alt="img">
                                </div>
                                <div class="seotext__text-wrp">
                                    <h2 class="seotext__title title-h2">Интернет-магазин электротоваров "Электромир"</h2>
                                    <div class="seotext__text">
                                        <p>
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                            Voluptas sit iure nihil repudiandae! Eaque vitae reprehenderit
                                            dolorum quam labore animi natus odit, neque deleniti enim praesentium,
                                            quod recusandae! Facilis repudiandae labore tenetur.
                                            Laboriosam rem fugiat dignissimos minus! Ipsum, magnam quo.
                                        </p>
                                        <p>
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                            Voluptas sit iure nihil repudiandae! Eaque vitae reprehenderit
                                            dolorum quam labore animi natus odit, neque deleniti enim praesentium,
                                            quod recusandae! Facilis repudiandae labore tenetur.
                                            Laboriosam rem fugiat dignissimos minus! Ipsum, magnam quo.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
            <!-- container end -->
        </main>
<?php get_footer()?>