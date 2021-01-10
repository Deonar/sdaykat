<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Page link -->
  <link rel="stylesheet" href="assets/libs/slick/slick.css" />
  <link rel="stylesheet" href="assets/libs/jquery-libs/jquery-ui.min.css" />

  <!-- Base link -->
  <?php include("inc/base-link.php"); ?>

  <title>Керамический фильтр</title>
</head>

<body>
  <?php
  $page = 'prices';
  $header_class = 'header-light';
  include("header.php");
  ?>

  <div class="price-oftype-page header-top__indent">
    <div class="breadcrumbs">
      <div class="container">
        <ul class="breadcrumbs__container">
          <li class="breadcrumbs__item">
            <a href="/prices.php" class="nuxt-link-active breadcrumbs__link t-control">Цены</a>
          </li>
          <li class="breadcrumbs__item">
            <span to="/single-article" class="breadcrumbs__link t-control breadcrumbs__link--disabled">Керамический
              фильтр</span>
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
              <div class="price-oftype__text">Что такое и для чего нужен керамический катализатор? Керамический
                автомобильный катализатор или каталитический преобразователь – это необходимая деталь выхлопной системы
                автомобиля, призванная снизить уровень токсичных газов, образующихся при сгорании топлива.</div>
              <form class="price-oftype__form main-form main-form__light">
                <div class="main-form__wrapper">
                  <label class="main-form__label main-form__label_phone">
                    <span class="main-form__label-error">некорректный номер</span>
                    <input class="main-form__phone mask-phone" type="tel" name="phone"
                      placeholder="+7 (___) ___-__-__" />
                  </label>
                  <div class="main-form__btn">
                    <a href="#popup-thank" class="main-form__submit btn btn_hover primary-btn" type="button">Продать
                      катализатор</a>
                  </div>
                </div>
                <label class="main-form__policy">
                  <input type="checkbox" checked="" class="main-form__checkbox" />
                  <span class="main-form__checkbox-box"></span>
                  <span class="main-form__text small-text"> Я ознакомлен c <a href="/privacy-policy.php">политикой
                      конфиденциальности</a></span>
                </label>
              </form>
            </div>
          </div>
          <div class="price-oftype__slider-wrapper">
            <div class="price-oftype__slider" id="price-oftype__slider">
              <a href="assets/img/catalysts/ceramics-slider.jpg" class="price-oftype__slider-item">
                <img class="slider-item__img" src="assets/img/catalysts/ceramics-slider.jpg" alt="" />
              </a>
              <a href="assets/img/catalysts/ceramics-slider-1.jpg" class="price-oftype__slider-item">
                <img class="slider-item__img" src="assets/img/catalysts/ceramics-slider-1.jpg" alt="" />
                </a>
              <a href="assets/img/catalysts/ceramics-slider-2.jpg" class="price-oftype__slider-item">
                <img class="slider-item__img" src="assets/img/catalysts/ceramics-slider-2.jpg" alt="" />
                </a>
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
              <div class="requirement-item__text">Катализаторы не должны быть влажными, допускается естественная
                влажность 1-2%</div>
            </div>
            <div href="#" class="requirement-item">
              <img src="assets/img/icons/requirement-2.svg" alt="" class="requirement-item__icon" />
              <div class="requirement-item__title">Чистота</div>
              <div class="requirement-item__text">Катализаторы не должны быть влажными, допускается естественная
                влажность 1-2%</div>
            </div>
            <div href="#" class="requirement-item">
              <img src="assets/img/icons/requirement-3.svg" alt="" class="requirement-item__icon" />
              <div class="requirement-item__title">Состояние</div>
              <div class="requirement-item__text">Катализаторы не должны быть влажными, допускается естественная
                влажность 1-2%</div>
            </div>
            <div href="#" class="requirement-item">
              <img src="assets/img/icons/requirement-4.svg" alt="" class="requirement-item__icon" />
              <div class="requirement-item__title">Состав</div>
              <div class="requirement-item__text">Катализаторы не должны быть влажными, допускается естественная
                влажность 1-2%</div>
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
            <a href="/single-price-ofauto.php" class="redemption-button btn light-blue-btn">УЗНАТЬ ТОЧНУЮ СТОИМОСТЬ</a>
          </form>
        </div>
      </div>
    </section>

    <section class="section-wrapper pass-material">
      <div class="container">
        <div class="pass-material__header mb-30">
          <h2 class="h2 title">Как сдать<br />старый катализатор?</h2>
        </div>
        <div class="row">
          <div class="col-12 col-sm-6 col-xl-4 mb-30">
            <div class="pass-material__item pass-material__item_assessment">
              <img src="assets/img/pass-assessment.png" alt="#" />
              <h4 class="h4 pass-material__title">Выездная оценка</h4>
              <p class="pass-material__text">Каждую 10-ю сделку<br />мы возвращаем ретро-бонусы в размере 5% от общей.
              </p>
              <div class="pass-material__btn">
                <a href="#popup-form-manager" class="btn btn_small btn_hover orange-btn popup"> Заказать выезд менеджера
                </a>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-xl-4 mb-30">
            <div class="pass-material__item pass-material__item_offices">
              <img src="assets/img/pass-offices.png" alt="#" />
              <h4 class="h4 pass-material__title">Стационарные офисы</h4>
              <p class="pass-material__text">
                Каждую 10-ю сделку<br />
                мы возвращаем ретро-бонусы в размере 5% от общей.
              </p>
              <div class="pass-material__btn">
                <a href="#map" class="btn btn_small btn_hover light-blue-btn scrollto">Показать на карте</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-xl-4 mb-30">
            <div class="pass-material__item pass-material__item_courier">
              <img src="assets/img/pass-courier.png" alt="#" />
              <h4 class="h4 pass-material__title">Курьерская служба</h4>
              <p class="pass-material__text">
                Каждую 10-ю сделку<br />
                мы возвращаем ретро-бонусы в размере 5% от общей.
              </p>
              <div class="pass-material__btn">
                <a href="#popup-form-courier" class="btn btn_small btn_hover blue-btn popup">Вызвать курьера</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php include("templates/map.php"); ?>

    <section class="bonuses section-wrapper">
      <div class="container">
        <div class="bonuses-body">
          <h2 class="bonuses-title primary-title__light">Программа лояльности</h2>
          <ul class="bonuses-list">
            <li class="bonuses-item">
              <div class="bonuses-item__percent">5%</div>
              <div class="bonuses-item__title">Ретро-бонусы</div>
              <div class="bonuses-item__text">Каждую 10-ю сделку мы возвращаем ретро-бонусы в размере 5% от общей суммы
                этих сделок.</div>
            </li>
            <li class="bonuses-item">
              <div class="bonuses-item__percent">5%</div>
              <div class="bonuses-item__title">Ретро-бонусы</div>
              <div class="bonuses-item__text">Каждую 10-ю сделку мы возвращаем ретро-бонусы в размере 5% от общей суммы
                этих сделок.</div>
            </li>
            <li class="bonuses-item">
              <div class="bonuses-item__percent">10%</div>
              <div class="bonuses-item__title">Ретро-бонусы</div>
              <div class="bonuses-item__text">За каждого приведенного друга через личный кабинет мы начисляем Вам 10% от
                суммы сделки.</div>
            </li>
          </ul>
          <div class="bonuses-options">
            <div class="bonuses-offer">
              <div class="bonuses-offer__title">Постоянным оптовым клиентам готовы предложить индивидуальные условия
                сотрудничества</div>
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

  <!-- popup-thank -->
  <div id="popup-thank" class="popup-thank custom-popup mfp-hide">
    <div class="popup-body">
      <img src="assets/img/icons/thank-icon.svg" alt="" class="popup-img__thank" />
      <div class="popup-primary__title">Спасибо!</div>
      <div class="popup-desc">Ваша заявка отправлена. Мы свяжемся с вами в ближайшее время.</div>
    </div>
  </div>
  <!-- popup-thank and-->

  <!-- popup-form manager -->
  <div id="popup-form-manager" class="popup-form-calculator custom-popup mfp-hide">
    <div class="popup-body">
      <h3 class="popup-primary__title">Выездная оценка</h3>

      <div class="popup-desc">Отправьте заявку для выезда менеджера. Специалист выполнит необходимые замеры для расчёта
        точной стоимости катализатора.</div>
      <form class="popup-form main-form main-form__light">
        <div class="main-form__wrapper">
          <label class="main-form__label main-form__label_phone">
            <span class="main-form__label-error">некорректный номер</span>
            <input class="main-form__phone mask-phone" type="tel" name="phone" placeholder="+7 (___) ___-__-__" />
          </label>
          <div class="main-form__btn">
            <a href="#popup-thank-specialist" class="main-form__submit btn btn_hover orange-btn" type="button">вызвать
              специалиста</a>
          </div>
        </div>
        <label class="main-form__policy">
          <input type="checkbox" checked="" class="main-form__checkbox" />
          <span class="main-form__checkbox-box"></span>
          <span class="main-form__text small-text"> Я ознакомлен c <a href="/privacy-policy.php">политикой
              конфиденциальности</a></span>
        </label>
      </form>
    </div>
  </div>
  <!-- popup-form manager end-->

  <!-- popup-thank-curyer -->
  <div id="popup-thank-curyer" class="popup-thank-specialist custom-popup mfp-hide">
    <div class="popup-body">
      <div class="popup-primary__title">Спасибо!</div>
      <div class="popup-desc">Не забудьте приложить копию паспорта к посылке.</div>
      <img src="assets/img/pasport.png" alt="" class="popup-img__thank-curyer" />
    </div>
  </div>
  <!-- popup-thank end-->

  <!-- popup-form curyer -->
  <div id="popup-form-courier" class="popup-form-calculator custom-popup mfp-hide">
    <div class="popup-body">
      <h3 class="popup-primary__title">Выезд курьера</h3>

      <div class="popup-desc">Отправьте заявку для выезда курьера. Мы свяжемся с вами для уточнения информации.</div>
      <form class="popup-form main-form main-form__light">
        <div class="main-form__wrapper">
          <label class="main-form__label main-form__label_phone">
            <span class="main-form__label-error">некорректный номер</span>
            <input class="main-form__phone mask-phone" type="tel" name="phone" placeholder="+7 (___) ___-__-__" />
          </label>
          <div class="main-form__btn">
            <a href="#popup-thank-curyer" class="main-form__submit btn btn_hover blue-btn" type="button">вызвать
              специалиста</a>
          </div>
        </div>
        <label class="main-form__policy">
          <input type="checkbox" checked="" class="main-form__checkbox" />
          <span class="main-form__checkbox-box"></span>
          <span class="main-form__text small-text"> Я ознакомлен c <a href="/privacy-policy.php">политикой
              конфиденциальности</a></span>
        </label>
      </form>
    </div>
  </div>
  <!-- popup-form curyer end-->

  <!-- popup-thank-specialist -->
  <div id="popup-thank-specialist" class="popup-thank-specialist custom-popup mfp-hide">
    <div class="popup-body">
      <div class="popup-primary__title">Спасибо!</div>
      <div class="popup-desc">К вам подъедет наш специалист</div>
      <img src="assets/img/icons/specialist-icon.svg" alt="" class="popup-img__thank-specialist" />
      <div class="popup-thank-specialist-name">Алексей Иванов</div>
      <div class="popup-desc mb-0">Менеджер выездной оценки</div>
    </div>
  </div>
  <!-- popup-thank end-->

  <?php include("footer.php"); ?>
  <script src="//api-maps.yandex.ru/2.1/?load=package.standard,package.geoObjects&amp;lang=ru-RU"
    type="text/javascript">
  </script>

  <script src="assets/js/map.js"></script>
</body>

</html>