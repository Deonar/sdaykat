<?php
if (!isset($header_class)) {
  $header_class = '';
}
?>

<!-- Preloader -->
<div id="dr-preloader">
  <div class="dr-preloader">
    <div class="dr-preloader-child dr-preloader-double-bounce-1"></div>
    <div class="dr-preloader-child dr-preloader-double-bounce-2"></div>
  </div>
</div>
<!-- Preloader end-->

<header id="header" class="header <?php echo ($header_class); ?>">
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
          <div class="header-top__location active">
            <div class="header-top__location-link">Челябинск</div>
            <div class="location-popup">
              <div class="location-popup__body">
                <div class="location-popup__title">Вы находитесь в Челябинске?</div>
                <span class="location-popup__btn closeLocationPopup gray2-btn">Верно</span>
                <a href="#popup-cities" class="location-popup__search-city popup closeLocationPopup">Изменить город</a>
              </div>
            </div>
          </div>
          <div class="header-top__menu">
            <ul class="header-top__menu-list">
              <li class="header-top__menu-item"><a href="/franchise.php"
                  class="header-top__menu-link <?php echo ($page == 'franchise') ? 'active' : '';?>">Франшиза</a></li>
              <li class="header-top__menu-item"><a href="/representative.php"
                  class="header-top__menu-link <?php echo ($page == 'representative') ? 'active' : '';?>">Представительства</a>
              </li>
              <li class="header-top__menu-item"><a href="/loyalty-program.php"
                  class="header-top__menu-link <?php echo ($page == 'loyalty-program') ? 'active' : '';?>">Программа
                  лояльности</a></li>
            </ul>
          </div>
        </div>
        <div class="header-top__info">
          <div class="header-top__address">
            <div class="header-top__address-text">ул. Механическая, 101</div>
            <a href="/representative.php#map" class="header-top__address-link">Показать на карте</a>
          </div>
          <div class="header-top__contact">
            <a href="tel:+88005507940" class="header-top__contact-tell">
              <p>8 800 550 79 40</p>
            </a>
            <div class="header-top__contact-text">Звонок бесплатный</div>
          </div>
          <div class="header-top__cabinet">
            <a href="/authorization.php" class="header__cabinet-entry" id="sing-in">Личный кабинет</a>
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
                      <a href="/profile.php#profile-tab" class="popup-authorized__menu-link open-profile-js"
                        data-tab-profile="profile-tab">Профиль</a>
                    </li>
                    <li class="popup-authorized__menu-item">
                      <a href="/profile.php#transactions-tab" class="popup-authorized__menu-link open-profile-js"
                        data-tab-profile="transactions-tab">Сделки</a>
                    </li>
                    <li class="popup-authorized__menu-item">
                      <a href="/profile.php#analitic-tab" class="popup-authorized__menu-link open-profile-js"
                        data-tab-profile="analitic-tab">Аналитика</a>
                    </li>
                  </ul>
                  <div class="popup-authorized__btn btn gray2-btn  popup-btn" id="log-out">Выйти</div>
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
            <li class="header-bottom__menu-item"><a href="/"
                class="header-bottom__menu-link <?php echo ($page == 'home') ? 'active' : '';?>">Главная</a></li>
            <li class="header-bottom__menu-item"><a href="/prices.php"
                class="header-bottom__menu-link <?php echo ($page == 'prices') ? 'active' : '';?>">Цены</a></li>
            <li class="header-bottom__menu-item"><a href="/delete-catalysts.php"
                class="header-bottom__menu-link <?php echo ($page == 'delete-catalysts') ? 'active' : '';?>">Удаление
                катализатора</a></li>
            <li class="header-bottom__menu-item"><a href="/prices-wholesalers.php"
                class="header-bottom__menu-link <?php echo ($page == 'prices-wholesalers') ? 'active' : '';?>">Оптовикам</a>
            </li>
            <li class="header-bottom__menu-item"><a href="/journal.php"
                class="header-bottom__menu-link <?php echo ($page == 'journal') ? 'active' : '';?>">Журнал</a></li>
            <li class="header-bottom__menu-item"><a href="/about.php"
                class="header-bottom__menu-link <?php echo ($page == 'about') ? 'active' : '';?>">О компании</a>
            </li>
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
        <a href="/authorization.php" class="header__cabinet-entry close-mob-menu-js" id="sing-in_mob">Личный
          кабинет</a>
        <div class="header-mob__authorized" style="display: none">
          <div class="authorized-logo">
            <img src="assets/img/icons/authorized-icon.svg" alt="" class="authorized-logo__img" />
            <div class="authorized-login">+7 999 444 11 01</div>
          </div>
          <ul class="authorized-menu">
            <li class="authorized-menu__item">
              <a href="/profile.php#profile-tab" class="authorized-menu__link close-mob-menu-js open-profile-js"
                data-tab-profile="profile-tab">профиль</a>
            </li>
            <li class="authorized-menu__item">
              <a href="/profile.php#analitic-tab" class="authorized-menu__link close-mob-menu-js open-profile-js"
                data-tab-profile="analitic-tab">аналитика</a>
            </li>
            <li class="authorized-menu__item">
              <a href="/profile.php#transactions-tab" class="authorized-menu__link close-mob-menu-js open-profile-js"
                data-tab-profile="transactions-tab">сделки</a>
            </li>
            <li class="authorized-menu__item">
              <a href="/bonuses.php" class="authorized-menu__link close-mob-menu-js">бонусы</a>
            </li>
          </ul>
          <a href="#" class="authorized-btn close-mob-menu-js" id="log-out_mob">Выйти</a>
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
      <div class="quotes">
        <div class="tab-wrapper">
          <div class="quotes__head">
            <div class="profile-block__head-title">Катировки</div>
            <div class="quotes__tabs">
              <div class="quotes__tab tab active" data-tab="RUB">RUB</div>
              <div class="quotes__tab tab" data-tab="USD">USD</div>
            </div>
          </div>
          <div class="quotes__content tab-content" data-tab="RUB">
            <ul class="quotes-items">
              <li class="quotes-item">
                <div class="curs-metal__valuta">Pd<span class="curs-metal__valuta_up"></span></div>
                <div class="curs-metal__price">5 658,74 ₽/г</div>
              </li>
              <li class="quotes-item">
                <div class="curs-metal__valuta">Pt<span class="curs-metal__valuta_up"></span></div>
                <div class="curs-metal__price">5 658,74 ₽/г</div>
              </li>
              <li class="quotes-item">
                <div class="curs-metal__valuta">Rh<span class="curs-metal__valuta_down"></span></div>
                <div class="curs-metal__price">5 658,74 ₽/г</div>
              </li>
            </ul>
            <ul class="quotes-items">
              <li class="quotes-item">
                <div class="curs-metal__valuta">EUR<span class="curs-metal__valuta_up"></span></div>
                <div class="curs-metal__price">55 ₽</div>
              </li>
              <li class="quotes-item">
                <div class="curs-metal__valuta">USD<span class="curs-metal__valuta_up"></span></div>
                <div class="curs-metal__price">56 ₽</div>
              </li>
            </ul>
          </div>
          <div class="quotes__content tab-content" data-tab="USD" style="display: none">
            <ul class="quotes-items">
              <li class="quotes-item">
                <div class="curs-metal__valuta">Pd<span class="curs-metal__valuta_down"></span></div>
                <div class="curs-metal__price">785,74 ₽/г</div>
              </li>
              <li class="quotes-item">
                <div class="curs-metal__valuta">Pt<span class="curs-metal__valuta_up"></span></div>
                <div class="curs-metal__price">5 658,74 ₽/г</div>
              </li>
              <li class="quotes-item">
                <div class="curs-metal__valuta">Rh<span class="curs-metal__valuta_up"></span></div>
                <div class="curs-metal__price">658,74 ₽/г</div>
              </li>
            </ul>
            <ul class="quotes-items">
              <li class="quotes-item">
                <div class="curs-metal__valuta">EUR<span class="curs-metal__valuta_up"></span></div>
                <div class="curs-metal__price">35 ₽</div>
              </li>
              <li class="quotes-item">
                <div class="curs-metal__valuta">USD<span class="curs-metal__valuta_up"></span></div>
                <div class="curs-metal__price">96 ₽</div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

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
<!-- Popup city end-->