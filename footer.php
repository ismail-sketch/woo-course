
<footer class="footer">
                <div class="container">
                <div class="footer__cont-top-wrp">
                    <div class="footer__contacts">
                        <h4 class="footer__title">Контакты</h4>

                        <span class="footer__small-title">Номер телефона</span>
                        <a href="tel:88002292526" class="footer__phone">8 800 229-25-26</a>

                        <span class="footer__small-title">Электронная почта</span>
                        <a href="mailto:info@elmir.ru" class="footer__email">info@elmir.ru</a>

                        <span class="footer__small-title">Адрес магазина</span>
                        <p class="footer__adress">123060 г.Москва <br> ул.Электрическая, д.45</p>
                    </div>

                    <div class="footer__orders">
                        <h4 class="footer__title">Принимаем заказы</h4>

                        <span class="footer__small-title">Понедельник-Пятница</span>
                        <span href="tel:88002292526" class="footer__order-time">с 9:00 до 18:00</span>

                        <span class="footer__small-title">Суббота, Воскресенье</span>
                        <span class="footer__weekend">выходной</span>
                    </div>

                    <div class="footer__clients">
                        <h4 class="footer__title">Покупатели</h4>
                        <ul class="footer__clients-list">
                            <li class="footer__clients-item">
                                <a href="" class="footer__clients-link">Доставка</a>
                            </li>
                            <li class="footer__clients-item">
                                <a href="" class="footer__clients-link">Оплата</a>
                            </li>
                            <li class="footer__clients-item">
                                <a href="" class="footer__clients-link">Гарантия и возврат</a>
                            </li>
                            <li class="footer__clients-item">
                                <a href="" class="footer__clients-link">Вопрос-Ответ</a>
                            </li>
                            <li class="footer__clients-item">
                                <a href="" class="footer__clients-link">Контакты</a>
                            </li>
                            <li class="footer__clients-item">
                                <a href="" class="footer__clients-link">Политика конфиденциальности</a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer__icons-wrp">
                        <h4 class="footer__title">Мы в соцсетях</h4>
                        <div class="footer__socials-wrp">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/mainpage/vk.png" alt="изо" class="footer__socials-img">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/mainpage/instagram.png" alt="изо" class="footer__socials-img">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/mainpage/facebook.png" alt="изо" class="footer__socials-img">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/mainpage/youtube.png" alt="изо" class="footer__socials-img">
                        </div>
                        <div class="footer__pay-wrp">
                            <h4 class="footer__title">Принимаем к оплате</h4>
                            <div class="footer__pay-img-wrp">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/mainpage/visa.png" alt="изо" class="footer__pay-img">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/mainpage/mastercard.png" alt="изо" class="footer__pay-img">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/mainpage/mir.png" alt="изо" class="footer__pay-img">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/mainpage/yamoney.png" alt="изо" class="footer__pay-img">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/mainpage/webmoney.png" alt="изо" class="footer__pay-img">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/mainpage/sber.png" alt="изо" class="footer__pay-img">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/mainpage/alfabank.png" alt="изо" class="footer__pay-img">
                            </div>
                        </div>
                    </div>
            </div>
            <!-- footer__cont-top-wrp end -->
        </div>
        <!-- container end -->
            <!-- footer__cont-bottom-wrp -->

                <div class="footer__cont-bottom-wrp">
                    <div class="container footer__container-bottom">
                        <div class="footer__bottom-left">
                            <span class="copyright">©</span>
                            <p class="copyright-text">&laquo;Электромир&raquo;. Все права защищены</p>
                        </div>
                        <div class="footer__bottom-right">
                            <span class="webdev-name">Разработчик Геннадий Вебер</span>
                        </div>
                    </div>
                </div>
            <!-- footer__cont-bottom-wrp end -->

            <!-- Попап с формой -->
            <div>
                <div class="overlay">
                <form class="form" action="#">
                    <span class="cross">&#10006;</span>
                    <label for="input__name"></label>
                    <input type="text" id="input__name" name="name" class="input__name" placeholder="Ваше имя">

                    <label for="input__tel"></label>
                    <input type="text" id="input__tel" name="tel" class="input__tel input-tel" placeholder="Ваш телефон">
                    <button class="form__btn">Отправить</button>
                </form>
            </div>
            <!-- <button class="popup-btn">Нажать</button> -->
        </div>

        </footer>

   </div>

    <?php wp_footer()?>
</body>

</html>