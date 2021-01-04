<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="assets/libs/bootstrap-grid/bootstrap-grid.min.css" />
    <link rel="stylesheet" href="assets/libs/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="assets/libs/slick/slick.css" />
    <link rel="stylesheet" href="assets/libs/jquery-libs/jquery-ui.min.css" />
    <link rel="stylesheet" href="assets/libs/scrollbar/jquery.scrollbar.css" />

    <link rel="stylesheet" href="assets/css/main.css" />
    <title>SDAYKAT</title>
  </head>

  <body>
    <?php 
    $header_class = 'header-light';
    include("header.php"); 
    ?>

    <div class="price-oftype-page header-top__indent">
      <div class="breadcrumbs">
        <div class="container">
          <ul class="breadcrumbs__container">
            <li class="breadcrumbs__item">
              <a href="/journal.html" class="nuxt-link-active breadcrumbs__link t-control">Журнал</a>
            </li>
            <li class="breadcrumbs__item">
              <a href="/single-section-journal.html" class="nuxt-link-active breadcrumbs__link t-control">Каталитические системы</a>
            </li>
            <li class="breadcrumbs__item">
              <span to="/single-article" class="breadcrumbs__link t-control breadcrumbs__link--disabled">Сколько стоит удаленный катализатор</span>
            </li>
          </ul>
        </div>
      </div>
      <section class="price-oftype section-wrapper pt-0">
        <div class="container container--desc">
          <div class="price-oftype__body">
            <div class="price-oftype__content">
              <div class="container container--mob">
                <h2 class="price-oftype__title primary-title">Цены на керамические фильтры</h2>
                <div class="price-oftype__range price__range">от<span>4 000 ₽</span>до <span>27 000 ₽</span></div>
                <div class="price-oftype__text">Что такое и для чего нужен керамический катализатор? Керамический автомобильный катализатор или каталитический преобразователь – это необходимая деталь выхлопной системы автомобиля, призванная снизить уровень токсичных газов, образующихся при сгорании топлива.</div>
                <form class="price-oftype__form main-form main-form__light">
                  <div class="main-form__wrapper">
                    <label class="main-form__label main-form__label_phone">
                      <input class="main-form__phone mask-phone" type="tel" name="phone" placeholder="+7 (___) ___-__-__" />
                    </label>
                    <div class="main-form__btn">
                      <a href="#popup-thank" class="main-form__submit btn btn_hover primary-btn popup" type="button">Продать катализатор</a>
                    </div>
                  </div>
                  <label class="main-form__policy">
                    <input type="checkbox" checked="" class="main-form__checkbox" />
                    <span class="main-form__checkbox-box"></span>
                    <span class="main-form__text small-text"> Я ознакомлен c <a href="#">политикой конфиденциальности</a></span>
                  </label>
                </form>
              </div>
            </div>
            <div class="price-oftype__slider-wrapper">
              <div class="price-oftype__slider" id="price-oftype__slider">
                <div class="price-oftype__slider-item">
                  <img class="slider-item__img" src="assets/img/catalysts/ceramics-slider.jpg" alt="" />
                </div>
                <div class="price-oftype__slider-item">
                  <img class="slider-item__img" src="assets/img/catalysts/ceramics-slider-1.jpg" alt="" />
                </div>
                <div class="price-oftype__slider-item">
                  <img class="slider-item__img" src="assets/img/catalysts/ceramics-slider-2.jpg" alt="" />
                </div>
              </div>
              <button class="slider-item__preview-btn"></button>
            </div>
          </div>
        </div>
      </section>
      <section class="requirement section-wrapper">
        <div class="container">
          <div class="requirement-body">
            <h2 class="requirement-title primary-title">Требования к принимаемому сырью</h2>
            <div class="requirement-list">
              <div href="#" class="requirement-item">
                <img src="assets/img/icons/requirement-1.svg" alt="" class="requirement-item__icon" />
                <div class="requirement-item__title">Влажность</div>
                <div class="requirement-item__text">Катализаторы не должны быть влажными, допускается естественная влажность 1-2%</div>
              </div>
              <div href="#" class="requirement-item">
                <img src="assets/img/icons/requirement-2.svg" alt="" class="requirement-item__icon" />
                <div class="requirement-item__title">Чистота</div>
                <div class="requirement-item__text">Катализаторы не должны быть влажными, допускается естественная влажность 1-2%</div>
              </div>
              <div href="#" class="requirement-item">
                <img src="assets/img/icons/requirement-3.svg" alt="" class="requirement-item__icon" />
                <div class="requirement-item__title">Состояние</div>
                <div class="requirement-item__text">Катализаторы не должны быть влажными, допускается естественная влажность 1-2%</div>
              </div>
              <div href="#" class="requirement-item">
                <img src="assets/img/icons/requirement-4.svg" alt="" class="requirement-item__icon" />
                <div class="requirement-item__title">Состав</div>
                <div class="requirement-item__text">Катализаторы не должны быть влажными, допускается естественная влажность 1-2%</div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="redemption section-wrapper">
        <div class="container">
          <div class="redemption-body">
            <div class="redemption-title primary-title primary-title__light">Наши цены на выкуп катализаторов</div>
            <div id="redemption-slider" class="redemption-slider">
              <div class="redemption-slider__item">
                <ul class="redemption-list">
                  <li class="redemption-list__item">
                    <a href="/single-price-ofauto.php" class="redemption-list__link">
                      <div class="redemption-auto">Audi</div>
                      <div class="redemption-range">от 4 000 до 45 000 ₽</div>
                    </a>
                  </li>
                  <li class="redemption-list__item">
                    <a href="/single-price-ofauto.php" class="redemption-list__link">
                      <div class="redemption-auto">Audi</div>
                      <div class="redemption-range">от 4 000 до 45 000 ₽</div>
                    </a>
                  </li>
                  <li class="redemption-list__item">
                    <a href="/single-price-ofauto.php" class="redemption-list__link">
                      <div class="redemption-auto">Audi</div>
                      <div class="redemption-range">от 4 000 до 45 000 ₽</div>
                    </a>
                  </li>
                  <li class="redemption-list__item">
                    <a href="/single-price-ofauto.php" class="redemption-list__link">
                      <div class="redemption-auto">Audi</div>
                      <div class="redemption-range">от 4 000 до 45 000 ₽</div>
                    </a>
                  </li>
                  <li class="redemption-list__item">
                    <a href="/single-price-ofauto.php" class="redemption-list__link">
                      <div class="redemption-auto">Mercedes Benz</div>
                      <div class="redemption-range">от 4 000 до 45 000 ₽</div>
                    </a>
                  </li>
                  <li class="redemption-list__item">
                    <a href="/single-price-ofauto.php" class="redemption-list__link">
                      <div class="redemption-auto">Audi</div>
                      <div class="redemption-range">от 4 000 до 45 000 ₽</div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="redemption-slider__item">
                <ul class="redemption-list">
                  <li class="redemption-list__item">
                    <a href="/single-price-ofauto.php" class="redemption-list__link">
                      <div class="redemption-auto">Audi</div>
                      <div class="redemption-range">от 4 000 до 45 000 ₽</div>
                    </a>
                  </li>
                  <li class="redemption-list__item">
                    <a href="/single-price-ofauto.php" class="redemption-list__link">
                      <div class="redemption-auto">Audi</div>
                      <div class="redemption-range">от 4 000 до 45 000 ₽</div>
                    </a>
                  </li>
                  <li class="redemption-list__item">
                    <a href="/single-price-ofauto.php" class="redemption-list__link">
                      <div class="redemption-auto">Audi</div>
                      <div class="redemption-range">от 4 000 до 45 000 ₽</div>
                    </a>
                  </li>
                  <li class="redemption-list__item">
                    <a href="/single-price-ofauto.php" class="redemption-list__link">
                      <div class="redemption-auto">Audi</div>
                      <div class="redemption-range">от 4 000 до 45 000 ₽</div>
                    </a>
                  </li>
                  <li class="redemption-list__item">
                    <a href="/single-price-ofauto.php" class="redemption-list__link">
                      <div class="redemption-auto">Mercedes Benz</div>
                      <div class="redemption-range">от 4 000 до 45 000 ₽</div>
                    </a>
                  </li>
                  <li class="redemption-list__item">
                    <a href="/single-price-ofauto.php" class="redemption-list__link">
                      <div class="redemption-auto">Audi</div>
                      <div class="redemption-range">от 4 000 до 45 000 ₽</div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="redemption-slider__item">
                <ul class="redemption-list">
                  <li class="redemption-list__item">
                    <a href="/single-price-ofauto.php" class="redemption-list__link">
                      <div class="redemption-auto">Audi</div>
                      <div class="redemption-range">от 4 000 до 45 000 ₽</div>
                    </a>
                  </li>
                  <li class="redemption-list__item">
                    <a href="/single-price-ofauto.php" class="redemption-list__link">
                      <div class="redemption-auto">Audi</div>
                      <div class="redemption-range">от 4 000 до 45 000 ₽</div>
                    </a>
                  </li>
                  <li class="redemption-list__item">
                    <a href="/single-price-ofauto.php" class="redemption-list__link">
                      <div class="redemption-auto">Audi</div>
                      <div class="redemption-range">от 4 000 до 45 000 ₽</div>
                    </a>
                  </li>
                  <li class="redemption-list__item">
                    <a href="/single-price-ofauto.php" class="redemption-list__link">
                      <div class="redemption-auto">Audi</div>
                      <div class="redemption-range">от 4 000 до 45 000 ₽</div>
                    </a>
                  </li>
                  <li class="redemption-list__item">
                    <a href="/single-price-ofauto.php" class="redemption-list__link">
                      <div class="redemption-auto">Mercedes Benz</div>
                      <div class="redemption-range">от 4 000 до 45 000 ₽</div>
                    </a>
                  </li>
                  <li class="redemption-list__item">
                    <a href="/single-price-ofauto.php" class="redemption-list__link">
                      <div class="redemption-auto">Audi</div>
                      <div class="redemption-range">от 4 000 до 45 000 ₽</div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <form class="redemption-form">
              <div class="select select-dropdown container-search-js">
                <div class="select__header-search">
                  <label class="select__label">Марка авто</label>
                  <span class="select__arrow">
                    <input type="text" class="custom-input input-search-js" placeholder="Mazda" />
                  </span>
                </div>

                <div class="select__body">
                  <div class="scrollbar-inner scrollbar-js">
                    <div class="select__item-search">Mazda</div>
                    <div class="select__item-search">Mercedes-Benz</div>
                    <div class="select__item-search">Mitsubishi</div>
                    <div class="select__item-search">Mini</div>
                    <div class="select__item-search">ВАЗ</div>
                    <div class="select__item-search">Газ</div>
                    <div class="select__item-search">Волга</div>
                    <div class="select__item-search">Нива</div>
                    <div class="select__item-search">Mazda</div>
                    <div class="select__item-search">Mercedes-Benz</div>
                    <div class="select__item-search">Mitsubishi</div>
                    <div class="select__item-search">Mini</div>
                    <div class="select__item-search">ВАЗ</div>
                    <div class="select__item-search">Газ</div>
                    <div class="select__item-search">Волга</div>
                    <div class="select__item-search">Нива</div>
                  </div>
                </div>
              </div>
              <div class="redemption-price__title">
                Стоимость катализатора <br />
                BMW
              </div>
              <div class="redemption-price__range price__range">от <span>4 000 ₽</span> до <span>45 000 ₽</span></div>
              <a href="#" class="redemption-button btn light-blue-btn">УЗНАТЬ ТОЧНУЮ СТОИМОСТЬ</a>
            </form>
          </div>
        </div>
      </section>
      <section class="bonuses section-wrapper">
        <div class="container">
          <div class="bonuses-body">
            <h2 class="bonuses-title primary-title__light">Программа лояльности</h2>
            <ul class="bonuses-list">
              <li class="bonuses-item">
                <div class="bonuses-item__percent">5%</div>
                <div class="bonuses-item__title">Ретро-бонусы</div>
                <div class="bonuses-item__text">Каждую 10-ю сделку мы возвращаем ретро-бонусы в размере 5% от общей суммы этих сделок.</div>
              </li>
              <li class="bonuses-item">
                <div class="bonuses-item__percent">5%</div>
                <div class="bonuses-item__title">Ретро-бонусы</div>
                <div class="bonuses-item__text">Каждую 10-ю сделку мы возвращаем ретро-бонусы в размере 5% от общей суммы этих сделок.</div>
              </li>
              <li class="bonuses-item">
                <div class="bonuses-item__percent">10%</div>
                <div class="bonuses-item__title">Ретро-бонусы</div>
                <div class="bonuses-item__text">За каждого приведенного друга через личный кабинет мы начисляем Вам 10% от суммы сделки.</div>
              </li>
            </ul>
            <div class="bonuses-options">
              <div class="bonuses-offer">
                <div class="bonuses-offer__title">Постоянным оптовым клиентам готовы предложить индивидуальные условия сотрудничества</div>
                <a href="/loyalty-program.php" class="bonuses-offer__link">узнать больше</a>
              </div>
              <ul class="bonuses-programs">
                <li class="bonuses-programs__item">
                  <div class="bonuses-programs__item-num">01</div>
                  <div class="bonuses-programs__item-text">Индивидуальный расчет стоимости</div>
                </li>
                <li class="bonuses-programs__item">
                  <div class="bonuses-programs__item-num">02</div>
                  <div class="bonuses-programs__item-text">Персональная программа лояльности</div>
                </li>
              </ul>
              <a href="/loyalty-program.php" class="bonuses-more-btn">узнать больше</a>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- Popup city -->
    <div id="popup-cities" class="popup-cities white-popup mfp-hide">
      <div class="popup-cities__body">
        <div class="selectCity__wrapper">
          <div class="selectCity__title popup-primary__title">Список городов присутствия</div>
          <div class="selectCity__input">
            <input type="text" placeholder="Введите свой город" id="inputCity" />
          </div>
          <ul class="selectCity__list scrollbar scrollbar-js" id="city-list">
            <li class="selectRegion__item-ofmetal">
              <div class="selectRegion__item-ofmetal-title">Свердловкая область</div>
              <ul class="selectRegion__item-ofmetal-list">
                <li class="selectCity__item-ofmetal" data-city="Екатеринбург" data-region="Свердловкая область">Екатеринбург</li>
                <li class="selectCity__item-ofmetal" data-city="Пышма" data-region="Свердловкая область">Пышма</li>
                <li class="selectCity__item-ofmetal" data-city="Первоуральск" data-region="Свердловкая область">Первоуральск</li>
                <li class="selectCity__item-ofmetal" data-city="Реж" data-region="Свердловкая область">Реж</li>
                <li class="selectCity__item-ofmetal" data-city="Артемовский" data-region="Свердловкая область">Артемовский</li>
                <li class="selectCity__item-ofmetal" data-city="Березовский" data-region="Свердловкая область">Березовский</li>
                <li class="selectCity__item-ofmetal" data-city="Сысерть" data-region="Свердловкая область">Сысерть</li>
                <li class="selectCity__item-ofmetal" data-city="Арамиль" data-region="Свердловкая область">Арамиль</li>
                <li class="selectCity__item-ofmetal" data-city="Нижний Тагил" data-region="Свердловкая область">Нижний Тагил</li>
              </ul>
            </li>
            <li class="selectRegion__item-ofmetal">
              <div class="selectRegion__item-ofmetal-title">Челябинская область</div>
              <ul class="selectRegion__item-ofmetal-list">
                <li class="selectCity__item-ofmetal" data-city="Екатеринбург" data-region="Свердловкая область">Екатеринбург</li>
                <li class="selectCity__item-ofmetal" data-city="Пышма" data-region="Свердловкая область">Пышма</li>
                <li class="selectCity__item-ofmetal" data-city="Первоуральск" data-region="Свердловкая область">Первоуральск</li>
                <li class="selectCity__item-ofmetal" data-city="Реж" data-region="Свердловкая область">Реж</li>
                <li class="selectCity__item-ofmetal" data-city="Артемовский" data-region="Свердловкая область">Артемовский</li>
                <li class="selectCity__item-ofmetal" data-city="Березовский" data-region="Свердловкая область">Березовский</li>
                <li class="selectCity__item-ofmetal" data-city="Сысерть" data-region="Свердловкая область">Сысерть</li>
                <li class="selectCity__item-ofmetal" data-city="Арамиль" data-region="Свердловкая область">Арамиль</li>
                <li class="selectCity__item-ofmetal" data-city="Нижний Тагил" data-region="Свердловкая область">Нижний Тагил</li>
              </ul>
            </li>
            <li class="selectRegion__item-ofmetal">
              <div class="selectRegion__item-ofmetal-title">Челябинская область</div>
              <ul class="selectRegion__item-ofmetal-list">
                <li class="selectCity__item-ofmetal" data-city="Екатеринбург" data-region="Свердловкая область">Екатеринбург</li>
                <li class="selectCity__item-ofmetal" data-city="Пышма" data-region="Свердловкая область">Пышма</li>
                <li class="selectCity__item-ofmetal" data-city="Первоуральск" data-region="Свердловкая область">Первоуральск</li>
                <li class="selectCity__item-ofmetal" data-city="Реж" data-region="Свердловкая область">Реж</li>
                <li class="selectCity__item-ofmetal" data-city="Артемовский" data-region="Свердловкая область">Артемовский</li>
                <li class="selectCity__item-ofmetal" data-city="Березовский" data-region="Свердловкая область">Березовский</li>
                <li class="selectCity__item-ofmetal" data-city="Сысерть" data-region="Свердловкая область">Сысерть</li>
                <li class="selectCity__item-ofmetal" data-city="Арамиль" data-region="Свердловкая область">Арамиль</li>
                <li class="selectCity__item-ofmetal" data-city="Нижний Тагил" data-region="Свердловкая область">Нижний Тагил</li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Popup city and-->
    <!-- popup-thank -->
    <div id="popup-thank" class="popup-thank custom-popup mfp-hide">
      <div class="popup-body">
        <img src="assets/img/icons/thank-icon.svg" alt="" class="popup-img__thank" />
        <div class="popup-primary__title">Спасибо!</div>
        <div class="popup-desc">Ваша заявка отправлена. Мы свяжемся с вами в ближайшее время.</div>
      </div>
    </div>
    <!-- popup-thank and-->

    <?php include("footer.php"); ?>
