<?php
if (!$header_class) {
    $header_class = '';
}
?>
<div id="dr-preloader">
    <div class="dr-preloader">
        <div class="dr-preloader-child dr-preloader-double-bounce-1"></div>
        <div class="dr-preloader-child dr-preloader-double-bounce-2"></div>
    </div>
</div>
<header id="header" class="header  <?php echo ($header_class); ?> ">
    <div class="header-body">
        <div class="container">
            <div class="header-top">
                <!-- mobile content -->
                <div class="header-burger__wrapper" id="header-burger">
                    <div class="header-burger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <a href="/" class="header-mob__logo">
                    <img src="assets/img/logo-light.svg" class="logo-light" alt="logo-light" />
                    <img src="assets/img/logo-dark.svg" class="logo-dark" alt="logo-dark" />
                </a>
                <!-- mobile content end-->

                <div class="header-top__nav">
                    <div class="header-top__location">
                        <a href="#" class="header-top__location-link">Челябинск</a>
                        <div class="location-popup">
                            <div class="location-popup__body">
                                <div class="location-popup__title">Вы находитесь в Челябинске?</div>
                                <button id="closeLocationPopup" class="location-popup__btn popup-btn">Верно</button>
                                <a href="#popup-cities" class="location-popup__search-city popup">Изменить город</a>
                            </div>
                        </div>
                    </div>
                    <div class="header-top__menu">
                        <ul class="header-top__menu-list">
                            <li class="header-top__menu-item"><a href="/franchise.php" class="header-top__menu-link">Франшиза</a></li>
                            <li class="header-top__menu-item"><a href="/representative.php" class="header-top__menu-link">Представительства</a></li>
                            <li class="header-top__menu-item"><a href="/loyalty-program.php" class="header-top__menu-link">Программа лояльности</a></li>
                        </ul>
                    </div>
                </div>
                <div class="header-top__info">
                    <div class="header-top__address">
                        <div class="header-top__address-text">ул. Механическая, 101</div>
                        <a href="#" class="header-top__address-link">Показать на карте</a>
                    </div>
                    <div class="header-top__contact">
                        <a href="tel:+88005507940" class="header-top__contact-tell">
                            <p>8 800 550 79 40</p>
                        </a>
                        <div class="header-top__contact-text">Звонок бесплатный</div>
                    </div>
                    <div class="header-top__cabinet">
                        <a href="/authorization.php" class="header__cabinet-entry">Личный кабинет</a>
                        <div class="header-authorized" style="display: none">
                            <div class="header-authorized__login">+7 999 444 11 01</div>
                            <img src="assets/img/authorized.jpg" alt="" class="header-authorized__logo" />
                            <div class="header-authorized__popup">
                                <div class="popup-authorized">
                                    <div class="popup-authorized__status-wrapp">
                                        <img src="assets/img/icons/status-icon.svg" alt="" class="popup-authorized__status-logo" />
                                        <div class="popup-authorized__status-content">
                                            <div class="popup-authorized__status">Серебрянный</div>
                                            <div class="popup-authorized__status-text">Ваш статус</div>
                                        </div>
                                    </div>
                                    <ul class="popup-authorized__menu">
                                        <li class="popup-authorized__menu-item">
                                            <a href="#" class="popup-authorized__menu-link">Профиль</a>
                                        </li>
                                        <li class="popup-authorized__menu-item">
                                            <a href="#" class="popup-authorized__menu-link">Сделки</a>
                                        </li>
                                        <li class="popup-authorized__menu-item">
                                            <a href="#" class="popup-authorized__menu-link">Аналитика</a>
                                        </li>
                                    </ul>
                                    <div class="popup-authorized__btn popup-btn">Выйти</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <a href="/" class="header-bottom__logo">
                    <img src="assets/img/logo-light.svg" class="logo-light" alt="logo-light" />
                    <img src="assets/img/logo-dark.svg" class="logo-dark" alt="logo-dark" />
                </a>
                <div class="header-bottom__menu">
                    <ul class="header-bottom__menu-list">
                        <li class="header-bottom__menu-item"><a href="/" class="header-bottom__menu-link">Главная</a></li>
                        <li class="header-bottom__menu-item"><a href="/prices.php" class="header-bottom__menu-link">Цены</a></li>
                        <li class="header-bottom__menu-item"><a href="/delete-catalysts.php" class="header-bottom__menu-link">Удаление катализатора</a></li>
                        <li class="header-bottom__menu-item"><a href="/prices-wholesalers.php" class="header-bottom__menu-link">Оптовикам</a></li>
                        <li class="header-bottom__menu-item"><a href="/journal.php" class="header-bottom__menu-link">Журнал</a></li>
                        <li class="header-bottom__menu-item"><a href="/about.php" class="header-bottom__menu-link">О компании</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="mobMenu" class="header-mob__body">
            <div class="header-mob__head">
                <div class="header-mob__location">
                    <a href="#popup-cities" class="header-mob__location-link popup">Челябинск</a>
                    <div class="header-mob__location-street">ул. Механическая, 101</div>
                </div>
                <button class="header-mob__body-close close-mob-menu-js"></button>
            </div>
            <div class="header-mob__cabinet">
                <a href="/authorization.php" class="header__cabinet-entry close-mob-menu-js">Личный кабинет</a>
                <div class="header-mob__authorized" style="display: none">
                    <div class="authorized-logo">
                        <img src="assets/img/icons/authorized-icon.svg" alt="" class="authorized-logo__img" />
                        <div class="authorized-login">+7 999 444 11 01</div>
                    </div>
                    <ul class="authorized-menu">
                        <li class="authorized-menu__item">
                            <a href="" class="authorized-menu__link close-mob-menu-js">профиль</a>
                        </li>
                        <li class="authorized-menu__item">
                            <a href="" class="authorized-menu__link close-mob-menu-js">аналитика</a>
                        </li>
                        <li class="authorized-menu__item">
                            <a href="" class="authorized-menu__link close-mob-menu-js">сделки</a>
                        </li>
                        <li class="authorized-menu__item">
                            <a href="" class="authorized-menu__link close-mob-menu-js">бонусы</a>
                        </li>
                    </ul>
                    <a href="#" class="authorized-btn close-mob-menu-js">Выйти</a>
                </div>
            </div>
            <ul class="header-mob__menu">
                <li class="header-mob__menu-item">
                    <a href="/" class="header-mob__menu-link close-mob-menu-js">Главная</a>
                </li>
                <li class="header-mob__menu-item">
                    <a href="/prices.php" class="header-mob__menu-link close-mob-menu-js">Цены</a>
                </li>
                <li class="header-mob__menu-item">
                    <a href="/delete-catalysts.php" class="header-mob__menu-link close-mob-menu-js">Удаление катализатора</a>
                </li>
                <li class="header-mob__menu-item">
                    <a href="/prices-wholesalers.php" class="header-mob__menu-link close-mob-menu-js">Оптовикам</a>
                </li>
                <li class="header-mob__menu-item">
                    <a href="/journal.php" class="header-mob__menu-link close-mob-menu-js">Журнал</a>
                </li>
                <li class="header-mob__menu-item">
                    <a href="/about.php" class="header-mob__menu-link close-mob-menu-js">О компании</a>
                </li>
                <li class="header-mob__menu-item">
                    <a href="/franchise.php" class="header-mob__menu-link close-mob-menu-js">Франшиза</a>
                </li>
                <li class="header-mob__menu-item">
                    <a href="/representative.php" class="header-mob__menu-link close-mob-menu-js">Представительства</a>
                </li>
                <li class="header-mob__menu-item">
                    <a href="/loyalty-program.php" class="header-mob__menu-link close-mob-menu-js">Программа лояльности</a>
                </li>
            </ul>
        </div>
    </div>
</header>