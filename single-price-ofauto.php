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

  <div class="price-ofauto-page header-top__indent">
    <div class="breadcrumbs">
      <div class="container">
        <ul class="breadcrumbs__container">
          <li class="breadcrumbs__item">
            <a href="/prices.php" class="nuxt-link-active breadcrumbs__link t-control">Цены</a>
          </li>
          <li class="breadcrumbs__item">
            <span to="#" class="breadcrumbs__link t-control breadcrumbs__link--disabled">Цены по марке авто BMW</span>
          </li>
        </ul>
      </div>
    </div>
    <section class="price-ofauto section-wrapper pt-0">
      <div class="container container--desc">
        <div class="price-ofauto__body">
          <div class="price-ofauto__content">
            <div class="price-ofauto__head">
              <div class="price-ofauto__logo">
                <img src="assets/img/brands/bmw_single.png" alt="bmw" />
              </div>
              <div class="price-ofauto__title-wrapp">
                <h2 class="price-ofauto__title primary-title">Цены по марке авто BMW</h2>
                <div class="price-ofauto__range price__range">от<span>4 000 ₽</span>до <span>27 000 ₽</span></div>
              </div>
            </div>
            <div class="price-ofauto__text">Сдать старый катализатор дорого можно в Sdaykat.ru. Мы занимается приемом
              катализаторов бу, как от физических, так и от юридических лиц. Воспользуйтесь удобным сервисом, свяжитесь
              с нами любым удобным вам способом: по бесплатному телефону 8-800 или напишите в чат на сайте или оставьте
              заявку в форме обратной связи.</div>
          </div>
          <form class="price-ofauto__form main-form main-form__light" action="#">
            <h3 class="price-ofauto__form-title h3">Узнайте точную стоимость катализатора</h3>
            <div class="price-ofauto__form-text">Отправьте заявку. Наши менеджеры свяжутся с вами.</div>
            <div class="main-form__wrapper">
              <label class="main-form__label main-form__label_phone">
                <span class="main-form__label-error">некорректный номер</span>
                <input class="main-form__phone mask-phone" type="tel" name="phone" placeholder="+7 (___) ___-__-__" />
              </label>
              <div class="main-form__btn">
                <button type="submit" data-target="#popup-thank-specialist" class="main-form__submit primary-btn btn btn_hover">Узнать стоимось</button>
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
    </section>
    <section class="requirement section-wrapper">
      <div class="container">
        <div class="requirement-body">
          <h2 class="requirement-title primary-title">Требования<br>к принимаемому сырью</h2>
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
    <section class="redemption-ofauto__prices section-wrapper">
      <div class="container">
        <div class="redemption-ofauto__body">
          <h2 class="redemption-ofauto__title primary-title">Наши цены на выкуп катализаторов BMW</h2>
          <ul class="redemption-ofauto__list">
            <li class="redemption-ofauto__item">
              <div class="redemption-ofauto__item-title">X1</div>
              <ul class="redemption-ofauto__price-list">
                <li class="redemption-ofauto__price-row">
                  <div class="redemption-ofauto__year">2011 г</div>
                  <div class="redemption-ofauto__price">до 45 000 ₽</div>
                </li>
                <li class="redemption-ofauto__price-row">
                  <div class="redemption-ofauto__year">2011 г</div>
                  <div class="redemption-ofauto__price">до 45 000 ₽</div>
                </li>
                <li class="redemption-ofauto__price-row">
                  <div class="redemption-ofauto__year">2011 г</div>
                  <div class="redemption-ofauto__price">до 45 000 ₽</div>
                </li>
                <li class="redemption-ofauto__price-row">
                  <div class="redemption-ofauto__year">2011 г</div>
                  <div class="redemption-ofauto__price">до 45 000 ₽</div>
                </li>
                <li class="redemption-ofauto__price-row">
                  <div class="redemption-ofauto__year">2011 г</div>
                  <div class="redemption-ofauto__price">до 45 000 ₽</div>
                </li>
              </ul>
            </li>
            <li class="redemption-ofauto__item">
              <div class="redemption-ofauto__item-title">X1</div>
              <ul class="redemption-ofauto__price-list">
                <li class="redemption-ofauto__price-row">
                  <div class="redemption-ofauto__year">2011 г</div>
                  <div class="redemption-ofauto__price">до 45 000 ₽</div>
                </li>
                <li class="redemption-ofauto__price-row">
                  <div class="redemption-ofauto__year">2011 г</div>
                  <div class="redemption-ofauto__price">до 45 000 ₽</div>
                </li>
                <li class="redemption-ofauto__price-row">
                  <div class="redemption-ofauto__year">2011 г</div>
                  <div class="redemption-ofauto__price">до 45 000 ₽</div>
                </li>
                <li class="redemption-ofauto__price-row">
                  <div class="redemption-ofauto__year">2011 г</div>
                  <div class="redemption-ofauto__price">до 45 000 ₽</div>
                </li>
                <li class="redemption-ofauto__price-row">
                  <div class="redemption-ofauto__year">2011 г</div>
                  <div class="redemption-ofauto__price">до 45 000 ₽</div>
                </li>
              </ul>
            </li>
            <li class="redemption-ofauto__item">
              <div class="redemption-ofauto__item-title">X1</div>
              <ul class="redemption-ofauto__price-list">
                <li class="redemption-ofauto__price-row">
                  <div class="redemption-ofauto__year">2011 г</div>
                  <div class="redemption-ofauto__price">до 45 000 ₽</div>
                </li>
                <li class="redemption-ofauto__price-row">
                  <div class="redemption-ofauto__year">2011 г</div>
                  <div class="redemption-ofauto__price">до 45 000 ₽</div>
                </li>
                <li class="redemption-ofauto__price-row">
                  <div class="redemption-ofauto__year">2011 г</div>
                  <div class="redemption-ofauto__price">до 45 000 ₽</div>
                </li>
                <li class="redemption-ofauto__price-row">
                  <div class="redemption-ofauto__year">2011 г</div>
                  <div class="redemption-ofauto__price">до 45 000 ₽</div>
                </li>
                <li class="redemption-ofauto__price-row">
                  <div class="redemption-ofauto__year">2011 г</div>
                  <div class="redemption-ofauto__price">до 45 000 ₽</div>
                </li>
              </ul>
            </li>
            <li class="redemption-ofauto__item">
              <div class="redemption-ofauto__item-title">X1</div>
              <ul class="redemption-ofauto__price-list">
                <li class="redemption-ofauto__price-row">
                  <div class="redemption-ofauto__year">2011 г</div>
                  <div class="redemption-ofauto__price">до 45 000 ₽</div>
                </li>
                <li class="redemption-ofauto__price-row">
                  <div class="redemption-ofauto__year">2011 г</div>
                  <div class="redemption-ofauto__price">до 45 000 ₽</div>
                </li>
                <li class="redemption-ofauto__price-row">
                  <div class="redemption-ofauto__year">2011 г</div>
                  <div class="redemption-ofauto__price">до 45 000 ₽</div>
                </li>
              </ul>
            </li>
            <li class="redemption-ofauto__item">
              <div class="redemption-ofauto__item-title">X1</div>
              <ul class="redemption-ofauto__price-list">
                <li class="redemption-ofauto__price-row">
                  <div class="redemption-ofauto__year">2011 г</div>
                  <div class="redemption-ofauto__price">до 45 000 ₽</div>
                </li>
                <li class="redemption-ofauto__price-row">
                  <div class="redemption-ofauto__year">2011 г</div>
                  <div class="redemption-ofauto__price">до 45 000 ₽</div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section class="calculator-price calculator-price__ofauto section-wrapper">
      <div class="container">
        <div class="calculator-body">
          <div class="calculator-settings">
            <h2 class="calculator-title primary-title__light">
              Расчитайте оптовую <br />
              стоимость сырья
            </h2>
            <div class="calculator-options options-calculator">
              <div class="options-item">
                <div class="select select-dropdown container-search-js">
                  <div class="select__header-search">
                    <label class="select__label">Модель авто</label>
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
                    </div>
                  </div>
                </div>
              </div>
              <div class="options-item">
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
              </div>
            </div>
          </div>
          <div class="calculator-form">
            <h3 class="calculator-form__title primary-title__h3">
              Стоимость катализатора
              <br />
              BMW X5 2020 г
            </h3>
            <div class="calculator-form__price" style="display: none">28 000 ₽</div>
            <div class="calculator-form__warning form-warning-js">Выберите модель и год выпуска авто для оценки точной
              стоимости</div>
            <form class="calculator-form__body main-form main-form__light" action="#">
              <div class="main-form__wrapper">
                <label class="main-form__label main-form__label_phone">
                  <span class="main-form__label-error">некорректный номер</span>
                  <input class="main-form__phone mask-phone" type="tel" name="phone" placeholder="+7 (___) ___-__-__" />
                </label>
                <div class="main-form__btn">
                  <button type="submit" data-target="#popup-thank-specialist" class="main-form__submit btn btn_hover primary-btn">Продать катализатор</button>
                </div>
              </div>
              <label class="main-form__policy">
                <input type="checkbox" checked="" class="main-form__checkbox" />
                <span class="main-form__checkbox-box"></span>
                <span class="main-form__text small-text"> Я ознакомлен c <a href="/privacy-policy.php">политикой
                    конфиденциальности</a></span>
              </label>
            </form>
            <div class="calculator-form__tell-label">Или свяжитесь с нами по номеру</div>
            <a href="tel:+88005507940" class="calculator-form__tell">8 800 550 79 40</a>
          </div>
          <a href="#popup-form-calculator" class="calculator-calculate-btn btn popup">УЗНАТЬ СТОИМОСТЬ</a>
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
                <a href="#popup-form-manager" class="btn btn_hover btn_small orange-btn popup"> Заказать выезд менеджера
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
                <a href="#map" class="btn btn_hover btn_small light-blue-btn scrollto">Показать адреса</a>
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
                <a href="#popup-form-courier" class="btn btn_hover btn_small blue-btn popup">Вызвать курьера</a>
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
      <div class="popup-desc">Ваш отклик отправлен</div>
    </div>
  </div>
  <!-- popup-thank end-->

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

  <!-- popup-form manager -->
  <div id="popup-form-manager" class="popup-form-calculator custom-popup mfp-hide">
    <div class="popup-body">
      <h3 class="popup-primary__title">Выездная оценка</h3>

      <div class="popup-desc">Отправьте заявку для выезда менеджера. Специалист выполнит необходимые замеры для расчёта
        точной стоимости катализатора.</div>
      <form class="popup-form main-form main-form__light" action="#">
        <div class="main-form__wrapper">
          <label class="main-form__label main-form__label_phone">
            <span class="main-form__label-error">некорректный номер</span>
            <input class="main-form__phone mask-phone" type="tel" name="phone" placeholder="+7 (___) ___-__-__" />
          </label>
          <div class="main-form__btn">
            <button type="submit" data-target="#popup-thank-specialist" class="main-form__submit btn btn_hover orange-btn">вызвать
              специалиста</button>
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
      <form class="popup-form main-form main-form__light" action="#">
        <div class="main-form__wrapper">
          <label class="main-form__label main-form__label_phone">
            <span class="main-form__label-error">некорректный номер</span>
            <input class="main-form__phone mask-phone" type="tel" name="phone" placeholder="+7 (___) ___-__-__" />
          </label>
          <div class="main-form__btn">
            <button type="submit" data-target="#popup-thank-curyer" class="main-form__submit btn btn_hover blue-btn">вызвать
              специалиста</button>
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

  <!-- popup-form-calculator -->
  <div id="popup-form-calculator" class="popup-form-calculator custom-popup mfp-hide">
    <div class="popup-body">
      <h3 class="popup-secondery__title">
        Предварительная <br />
        стоимость сырья
      </h3>
      <div class="calculator-form__price">28 000 ₽</div>
      <div class="popup-desc">Отправьте заявку для выезда менеджера. Специалист выполнит необходимые замеры для расчёта
        точной стоимости катализатора.</div>
      <form class="popup-form main-form main-form__light" action="#">
        <div class="main-form__wrapper">
          <label class="main-form__label main-form__label_phone">
            <span class="main-form__label-error">некорректный номер</span>
            <input class="main-form__phone mask-phone" type="tel" name="phone" placeholder="+7 (___) ___-__-__" />
          </label>
          <div class="main-form__btn">
            <button type="submit" data-target="#popup-thank-specialist" class="main-form__submit btn btn_hover orange-btn">вызвать
              специалиста</button>
          </div>
        </div>
        <label class="main-form__policy">
          <input type="checkbox" checked="" class="main-form__checkbox" />
          <span class="main-form__checkbox-box"></span>
          <span class="main-form__text small-text"> Я ознакомлен c <a href="/privacy-policy.php">политикой
              конфиденциальности</a></span>
        </label>
      </form>
      <div class="calculator-form__tell-label">Или свяжитесь с нами по номеру</div>
      <a href="tel:+88005507940" class="calculator-form__tell">8 800 550 79 40</a>
    </div>
  </div>
  <!-- popup-form-calculator end-->

  <?php include("footer.php"); ?>
  <script src="//api-maps.yandex.ru/2.1/?load=package.standard,package.geoObjects&amp;lang=ru-RU"
    type="text/javascript"></script>

  <script src="assets/js/map.js"></script>
</body>

</html>