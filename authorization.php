<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="assets/libs/bootstrap-grid/bootstrap-grid.min.css" />
    <link rel="stylesheet" href="assets/libs/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="assets/libs/scrollbar/jquery.scrollbar.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <title>SDAYKAT</title>
  </head>

  <body>
    <header id="header" class="header header-light">
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
            <a href="#" class="header-mob__logo">
              <img src="assets/img/logo-light.svg" class="logo-light" alt="logo-light" />
              <img src="assets/img/logo-dark.svg" class="logo-dark" alt="logo-dark" />
            </a>
            <!-- mobile content and-->

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
                  <li class="header-top__menu-item"><a href="#" class="header-top__menu-link">Франшиза</a></li>
                  <li class="header-top__menu-item"><a href="#" class="header-top__menu-link">Представительства</a></li>
                  <li class="header-top__menu-item"><a href="#" class="header-top__menu-link">Программа лояльности</a></li>
                </ul>
              </div>
            </div>
            <div class="header-top__info">
              <div class="header-top__address">
                <div class="header-top__address-text">ул. Механическая, 101</div>
                <a href="#" class="header-top__address-link">Показать на карте</a>
              </div>
              <div class="header-top__contact">
                <a href="tel:+88005507940" class="header-top__contact-tell"> <p>8 800 550 79 40</p> </a>
                <div class="header-top__contact-text">Звонок бесплатный</div>
              </div>
              <div class="header-top__cabinet">
                <a href="/authorization.html" class="header__cabinet-entry" style="display: none">Личный кабинет</a>
                <div class="header-authorized">
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
            <a href="#" class="header-bottom__logo">
              <img src="assets/img/logo-light.svg" class="logo-light" alt="logo-light" />
              <img src="assets/img/logo-dark.svg" class="logo-dark" alt="logo-dark" />
            </a>
            <div class="header-bottom__menu">
              <ul class="header-bottom__menu-list">
                <li class="header-bottom__menu-item"><a href="#" class="header-bottom__menu-link">Главная</a></li>
                <li class="header-bottom__menu-item"><a href="#" class="header-bottom__menu-link">Цены</a></li>
                <li class="header-bottom__menu-item"><a href="#" class="header-bottom__menu-link">Удаление катализатора</a></li>
                <li class="header-bottom__menu-item"><a href="#" class="header-bottom__menu-link">Оптовикам</a></li>
                <li class="header-bottom__menu-item"><a href="#" class="header-bottom__menu-link">Журнал</a></li>
                <li class="header-bottom__menu-item"><a href="#" class="header-bottom__menu-link">О компании</a></li>
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
            <a href="/authorization.html" class="header__cabinet-entry close-mob-menu-js" style="display: none">Личный кабинет</a>
            <div class="header-mob__authorized">
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
              <a href="#" class="header-mob__menu-link close-mob-menu-js">Главная</a>
            </li>
            <li class="header-mob__menu-item">
              <a href="#" class="header-mob__menu-link close-mob-menu-js">Цены</a>
            </li>
            <li class="header-mob__menu-item">
              <a href="#" class="header-mob__menu-link close-mob-menu-js">Удаление катализатора</a>
            </li>
            <li class="header-mob__menu-item">
              <a href="#" class="header-mob__menu-link close-mob-menu-js">Оптовикам</a>
            </li>
            <li class="header-mob__menu-item">
              <a href="#" class="header-mob__menu-link close-mob-menu-js">Журнал</a>
            </li>
            <li class="header-mob__menu-item">
              <a href="#" class="header-mob__menu-link close-mob-menu-js">О компании</a>
            </li>
            <li class="header-mob__menu-item">
              <a href="#" class="header-mob__menu-link close-mob-menu-js">Франшиза</a>
            </li>
            <li class="header-mob__menu-item">
              <a href="#" class="header-mob__menu-link close-mob-menu-js">Представительства</a>
            </li>
            <li class="header-mob__menu-item">
              <a href="#" class="header-mob__menu-link close-mob-menu-js">Программа лояльности</a>
            </li>
          </ul>
        </div>
      </div>
    </header>

    <main class="page__authorization header-top__indent">
      <div class="container">
        <h1>Вход в личный кабинет клиента</h1>
      </div>
    </main>

    <footer class="footer">
      <div class="container">
        <div class="footer-body">
          <a href="tel:+88005507940" class="footer-tell--mob">8 800 550 79 40</a>
          <div class="footer-tell__text--mob">Звонок бесплатный</div>
          <div class="footer-item footer-contacts">
            <a href="tel:+88005507940" class="footer-tell">8 800 550 79 40</a>
            <div class="footer-tell__text">Звонок бесплатный</div>
            <a href="#" class="footer-privacy">Пользовательское соглашение</a>
            <a href="#" class="footer-privacy">Политика конфиденциальности</a>
            <ul class="footer-social__list">
              <li class="footer-social__item">
                <a href="#" class="footer-social__link social__vk" target="_blank">
                  <svg>
                    <use xlink:href="assets/img/icons/vk-icon.svg#vk-icon"></use>
                  </svg>
                </a>
              </li>
              <li class="footer-social__item">
                <a href="#" class="footer-social__link social__inst" target="_blank">
                  <svg>
                    <use xlink:href="assets/img/icons/inst-icon.svg#inst-icon"></use>
                  </svg>
                </a>
              </li>
              <li class="footer-social__item">
                <a href="#" class="footer-social__link social__odnoklassniki" target="_blank">
                  <svg>
                    <use xlink:href="assets/img/icons/odnoklassniki-icon.svg#odnoklassniki-icon"></use>
                  </svg>
                </a>
              </li>
            </ul>
          </div>
          <div class="footer-item footer-item__about accordion-tab-js">
            <div class="footer-item__title">О компании</div>
            <ul class="footer-item__menu-list accordion-content-js">
              <li class="footer-item__menu-item">
                <a href="#" class="footer-item__menu-link">Миссия и ценности</a>
              </li>
              <li class="footer-item__menu-item">
                <a href="#" class="footer-item__menu-link">Команда</a>
              </li>
              <li class="footer-item__menu-item">
                <a href="#" class="footer-item__menu-link">Вакансии</a>
              </li>
              <li class="footer-item__menu-item">
                <a href="#" class="footer-item__menu-link">Контакты</a>
              </li>
              <li class="footer-item__menu-item">
                <a href="#" class="footer-item__menu-link">Франшиза</a>
              </li>
              <li class="footer-item__menu-item">
                <a href="#" class="footer-item__menu-link">Представительства</a>
              </li>
            </ul>
          </div>
          <div class="footer-item footer-item__clients accordion-tab-js">
            <div class="footer-item__title">Клиентам и партнёрам</div>
            <ul class="footer-item__menu-list accordion-content-js">
              <li class="footer-item__menu-item">
                <a href="#" class="footer-item__menu-link">Цены</a>
              </li>
              <li class="footer-item__menu-item">
                <a href="#" class="footer-item__menu-link">Удаление катализатора</a>
              </li>
              <li class="footer-item__menu-item">
                <a href="#" class="footer-item__menu-link">Оптовикам</a>
              </li>
              <li class="footer-item__menu-item">
                <a href="#" class="footer-item__menu-link">Программа лояльности</a>
              </li>
            </ul>
          </div>
          <div class="footer-item footer-item__journal accordion-tab-js">
            <div class="footer-item__title">Журнал</div>
            <ul class="footer-item__menu-list accordion-content-js">
              <li class="footer-item__menu-item">
                <a href="#" class="footer-item__menu-link">Каталитические системы</a>
              </li>
              <li class="footer-item__menu-item">
                <a href="#" class="footer-item__menu-link">Драгоценные металлы</a>
              </li>
              <li class="footer-item__menu-item">
                <a href="#" class="footer-item__menu-link">Автомобильная отрасль</a>
              </li>
              <li class="footer-item__menu-item">
                <a href="#" class="footer-item__menu-link">Вторичное сырьё</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="footer-copy">© 2020, Sdaykat.ru</div>
      </div>
    </footer>

    <!-- Popup city -->
    <div id="popup-cities" class="popup-cities white-popup mfp-hide">
      <div class="popup-cities__body">
        <div class="selectCity__wrapper">
          <div class="selectCity__title popup-primary__title">Список городов присутствия</div>
          <div class="selectCity__input">
            <input type="text" placeholder="Введите свой город" id="inputCity" />
          </div>
          <ul class="selectCity__list scrollbar scrollbar-js" id="city-list">
            <li class="selectRegion__item">
              <div class="selectRegion__item-title">Свердловкая область</div>
              <ul class="selectRegion__item-list">
                <li class="selectCity__item" data-city="Екатеринбург" data-region="Свердловкая область">Екатеринбург</li>
                <li class="selectCity__item" data-city="Пышма" data-region="Свердловкая область">Пышма</li>
                <li class="selectCity__item" data-city="Первоуральск" data-region="Свердловкая область">Первоуральск</li>
                <li class="selectCity__item" data-city="Реж" data-region="Свердловкая область">Реж</li>
                <li class="selectCity__item" data-city="Артемовский" data-region="Свердловкая область">Артемовский</li>
                <li class="selectCity__item" data-city="Березовский" data-region="Свердловкая область">Березовский</li>
                <li class="selectCity__item" data-city="Сысерть" data-region="Свердловкая область">Сысерть</li>
                <li class="selectCity__item" data-city="Арамиль" data-region="Свердловкая область">Арамиль</li>
                <li class="selectCity__item" data-city="Нижний Тагил" data-region="Свердловкая область">Нижний Тагил</li>
              </ul>
            </li>
            <li class="selectRegion__item">
              <div class="selectRegion__item-title">Челябинская область</div>
              <ul class="selectRegion__item-list">
                <li class="selectCity__item" data-city="Екатеринбург" data-region="Свердловкая область">Екатеринбург</li>
                <li class="selectCity__item" data-city="Пышма" data-region="Свердловкая область">Пышма</li>
                <li class="selectCity__item" data-city="Первоуральск" data-region="Свердловкая область">Первоуральск</li>
                <li class="selectCity__item" data-city="Реж" data-region="Свердловкая область">Реж</li>
                <li class="selectCity__item" data-city="Артемовский" data-region="Свердловкая область">Артемовский</li>
                <li class="selectCity__item" data-city="Березовский" data-region="Свердловкая область">Березовский</li>
                <li class="selectCity__item" data-city="Сысерть" data-region="Свердловкая область">Сысерть</li>
                <li class="selectCity__item" data-city="Арамиль" data-region="Свердловкая область">Арамиль</li>
                <li class="selectCity__item" data-city="Нижний Тагил" data-region="Свердловкая область">Нижний Тагил</li>
              </ul>
            </li>
            <li class="selectRegion__item">
              <div class="selectRegion__item-title">Челябинская область</div>
              <ul class="selectRegion__item-list">
                <li class="selectCity__item" data-city="Екатеринбург" data-region="Свердловкая область">Екатеринбург</li>
                <li class="selectCity__item" data-city="Пышма" data-region="Свердловкая область">Пышма</li>
                <li class="selectCity__item" data-city="Первоуральск" data-region="Свердловкая область">Первоуральск</li>
                <li class="selectCity__item" data-city="Реж" data-region="Свердловкая область">Реж</li>
                <li class="selectCity__item" data-city="Артемовский" data-region="Свердловкая область">Артемовский</li>
                <li class="selectCity__item" data-city="Березовский" data-region="Свердловкая область">Березовский</li>
                <li class="selectCity__item" data-city="Сысерть" data-region="Свердловкая область">Сысерть</li>
                <li class="selectCity__item" data-city="Арамиль" data-region="Свердловкая область">Арамиль</li>
                <li class="selectCity__item" data-city="Нижний Тагил" data-region="Свердловкая область">Нижний Тагил</li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Popup city and-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/libs/scrollbar/jquery.scrollbar.min.js"></script>
    <script src="assets/libs/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/libs/slick/slick.min.js"></script>

    <script src="assets/libs/jquery-mask/jquery.mask.min.js"></script>
    <script src="assets/libs/jquery-libs/jquery-ui.min.js"></script>
    <script src="assets/libs/jquery-libs/jquery.ui.touch-punch.min.js"></script>

    <script src="//api-maps.yandex.ru/2.1/?load=package.standard,package.geoObjects&amp;lang=ru-RU" type="text/javascript"></script>
    <script src="assets/js/map.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>