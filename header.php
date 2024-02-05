<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <title>Электромир</title>

    <?php wp_head()?>
</head>
<body>
   <div class="wrapper">

        <header class="header">
            <div class="container header__container">
                <nav class="mainMenu">
                    <ul class="mainMenu__wrp">
                        <li class="mainMenu__item">
                            <a href="#" class="mainMenu__link">Доставка</a>
                        </li>
                        <li class="mainMenu__item">
                            <a href="#" class="mainMenu__link">Оплата</a>
                        </li>
                        <li class="mainMenu__item">
                            <a href="#" class="mainMenu__link">Вопрос-Ответ</a>
                        </li>
                        <li class="mainMenu__item">
                            <a href="shop.html" class="mainMenu__link">Магазин</a>
                        </li>
                        <li class="mainMenu__item">
                            <a href="#" class="mainMenu__link">Блог</a>
                        </li>
                    </ul>
                </nav>
               <div class="header__cont-wrp">
                    <a class="header__logo">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/mainpage/logo.svg" alt="logo">
                    </a>
                    <div class="burger__wrp">
                        <span class="burger burger1"></span>
                        <span class="burger burger2"></span>
                        <span class="burger burger3"></span>
                    </div>

                    <div class="tel header__tel">
                        <div class="tel__time-work">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/mainpage/clock-icon.svg" alt="clock-icon">
                            <span class="tel__work">Работаем с 9 до 22</span>
                        </div>
                        <a href="tel:88002292526" class="tel__number">
                            <img class="tel__icon" src="<?php echo get_template_directory_uri()?>/assets/img/mainpage/tel-icon.svg" alt="phone-icon">
                            <span>8 800 229-25-26</span>
                        </a>
                    </div>
                    <div class="header__search-wrp">
                        <form action="#" class="header__search-form">
                            <input placeholder="Введите запрос" type="text" class="header__search-input">
                            <button class="header__search-btn">
                                <img class="header__search-icon" src="<?php echo get_template_directory_uri()?>/assets/img/mainpage/search-icon.svg" alt="icon">
                               <span>Найти</span>
                            </button>
                        </form>
                    </div>
                    <div class=" header-cart">
                        <div class="cartLink">
                            <span class="cartLink__counter">12</span>
                            <img class="cartLink__icon" src="<?php echo get_template_directory_uri()?>/assets/img/mainpage/cart-icon.svg" alt="cart">
                            <span class="cartLink__title">Корзина</span>
                        </div>
                    </div>
                </div>
               </div>
        </header>
        <div>

        </div>
         <!-- Для перемещения поиска и меню каталога -->
         <div class="catalog-and-search-wrp"></div>