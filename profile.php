<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="assets/libs/bootstrap-grid/bootstrap-grid.min.css" />
  <link rel="stylesheet" href="assets/libs/magnific-popup/magnific-popup.css" />
  <link rel="stylesheet" href="assets/libs/scrollbar/jquery.scrollbar.css" />
  <link rel="stylesheet" href="assets/libs/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
  <link rel="stylesheet" href="assets/css/main.css?v=2" />
  <title>SDAYKAT</title>
</head>

<body>
  <?php 
  $header_class = 'header-light';
  include("header.php"); 
  ?>
  <div class="profile-page header-top__indent">
    <section class="profile section-wrapper pt-0">
      <div class="container d-flex">
        <div class="tab-wrapper" style="width: 100%">
          <div class="profile-head">
            <div class="profile-tabs">
              <div id="profile-tab" class="profile-tab tab active" data-tab="1">Профиль</div>
              <div id="transactions-tab" class="profile-tab tab" data-tab="2">Сделки</div>
              <div id="analitics-tab" class="profile-tab tab" data-tab="3">Аналитика</div>
            </div>
          </div>
          <div class="profile-body">
            <!-- TAB PROFILE -->
            <div id="profile-tab-content" class="profile-tab__content tab-content" data-tab="1">
              <div id="profile-registration-edit" class="profile-registration-edit profile-blocks">
                <div class="profile-tab__title-mob">
                  <h3 class="profile-tab__title h3">Профиль</h3>
                </div>

                <div class="profile-block">
                  <div class="profile-block__head">
                    <div class="profile-block__head-col">
                      <div class="profile-block__head-title">Данные профиля</div>
                      <div class="profile-block__head-text">Заполните данные о себе. За каждый заполненный пункт мы
                        начисляем % кешбека.</div>
                    </div>
                    <div class="profile-block__head-col">
                      <div class="profile-block__label profile-block__label--yellow">+1% кэшбека</div>
                    </div>
                  </div>
                  <form id="profile-info-edit" class="profile-block__content profile-block__form">
                    <div class="profile-photo__wrapp">
                      <div class="profile-photo__img">
                        <img src="assets/img/icons/icon-photo-none.svg" alt="" />
                      </div>
                      <div class="profile-photo__edit">
                        <button class="profile-photo__edit-button">изменить фотографию</button>
                        <div class="profile-photo__edit-desc">Размер фото не должен превышать 5 MB</div>
                      </div>
                    </div>
                    <div class="profile-list__info">
                      <div class="profile-item">
                        <div class="profile-item__name">Ваш номер</div>
                        <div class="profile-item__content">
                          <input class="profile__custom-input custom-input mask-phone" type="tell" name="profile-phone"
                            placeholder="+7 (___) ___-__-__" />
                        </div>
                      </div>
                      <div class="profile-item align-items-start">
                        <div class="profile-item__name">Тип профиля</div>
                        <div class="profile-item__content">
                          <div class="radio-items">
                            <div class="radio-group">
                              <input class="radio-input" type="radio" id="natural-person" name="radio-group" checked />
                              <label class="radio-label" for="natural-person">Физ. лицо</label>
                            </div>
                            <div class="radio-group">
                              <input class="radio-input" type="radio" id="legal-entity" name="radio-group" />
                              <label class="radio-label" for="legal-entity">Юр. лицо</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="profile-item">
                        <div class="profile-item__name">Ваши ФИО</div>
                        <div class="profile-item__content">
                          <input class="profile__custom-input profile__custom-input--big custom-input" type="text"
                            name="profile-name" placeholder="ФИО" />
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="profile-block">
                  <div class="profile-block__head">
                    <div class="profile-block__head-col">
                      <div class="profile-block__head-title">Паспортные данные</div>
                      <div class="profile-block__head-text">Нужны для ОФД и чеков</div>
                    </div>
                    <div class="profile-block__head-col">
                      <div class="profile-block__label profile-block__label--blue">+1% кэшбека</div>
                    </div>
                  </div>
                  <form id="profile-passport-edit" class="profile-block__content profile-block__form">
                    <div class="profile-passport__wrapp">
                      <div class="profile-item__name">Фото паспорта</div>
                      <div class="profile-item__content">
                        <div class="profile-passport__img">
                          <img src="assets/img/pasport.jpg" alt="" />
                        </div>
                        <div class="profile-passport__edit">
                          <button class="profile-passport__edit-button">Загрузить фото</button>
                          <div class="profile-passport__edit-desc">Загрузите фото лицевой и оборотной стороны</div>
                        </div>
                      </div>
                    </div>
                    <div class="profile-list__info-wrapp">
                      <div class="profile-list__info">
                        <div class="profile-item">
                          <div class="profile-item__name">Серия и номер паспорта</div>
                          <div class="profile-item__content">
                            <input class="profile__custom-input custom-input" type="text" name="profile-passport-siries"
                              placeholder="45 41 217 877" />
                          </div>
                        </div>
                        <div class="profile-item">
                          <div class="profile-item__name">Дата рождения</div>
                          <div class="profile-item__content">
                            <input class="profile__custom-input custom-input" type="text" name="profile-birthday"
                              placeholder="10.08.1995" />
                          </div>
                        </div>
                        <div class="profile-item">
                          <div class="profile-item__name">Место рождения</div>
                          <div class="profile-item__content">
                            <input class="profile__custom-input custom-input" type="text" name="profile-place-of-birth"
                              placeholder="РФ, г. Челябинск" />
                          </div>
                        </div>
                      </div>
                      <div class="profile-list__info">
                        <div class="profile-item">
                          <div class="profile-item__name">Дата выдачи</div>
                          <div class="profile-item__content">
                            <input class="profile__custom-input custom-input" type="text" name="profile-date-of-issue"
                              placeholder="11.02.2020" />
                          </div>
                        </div>
                        <div class="profile-item profile-item__textarea align-items-start">
                          <div class="profile-item__name pt-1">Кем выдан паспорт</div>
                          <div class="profile-item__content">
                            <textarea class="profile__custom-textarea" type="text"
                              name="profile-passport-issued-by"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="profile-block">
                  <div class="profile-block__head">
                    <div class="profile-block__head-col">
                      <div class="profile-block__head-title">Адрес постоянной регистрации</div>
                      <div class="profile-block__head-text">Нужны для ОФД и чеков</div>
                    </div>
                    <div class="profile-block__head-col">
                      <div class="profile-block__label profile-block__label--yellow">+1% кэшбека</div>
                    </div>
                  </div>
                  <form id="profile-address-edit" class="profile-block__content profile-block__form">
                    <div class="profile-list__info-wrapp">
                      <div class="profile-list__info">
                        <div class="profile-item">
                          <div class="profile-item__name">Индекс</div>
                          <div class="profile-item__content">
                            <input class="profile__custom-input custom-input" type="text" name="profile-index"
                              placeholder="454 074" />
                          </div>
                        </div>
                        <div class="profile-item">
                          <div class="profile-item__name">Регион</div>
                          <div class="profile-item__content">
                            <input class="profile__custom-input custom-input" type="text" name="profile-region"
                              placeholder="Уральский" />
                          </div>
                        </div>
                        <div class="profile-item">
                          <div class="profile-item__name">Город</div>
                          <div class="profile-item__content">
                            <input class="profile__custom-input custom-input" type="text" name="profile-city"
                              placeholder="Челябинск" />
                          </div>
                        </div>
                        <div class="profile-item">
                          <div class="profile-item__name">Улица</div>
                          <div class="profile-item__content">
                            <input class="profile__custom-input custom-input" type="text" name="profile-street"
                              placeholder="пр-т Ленина" />
                          </div>
                        </div>
                      </div>
                      <div class="profile-list__info profile-list__info--mob">
                        <div class="profile-item">
                          <div class="profile-item__name">Дом</div>
                          <div class="profile-item__content">
                            <input class="profile__custom-input custom-input" type="text" name="profile-date-of-issue"
                              placeholder="44" />
                          </div>
                        </div>
                        <div class="profile-item">
                          <div class="profile-item__name">Корпус</div>
                          <div class="profile-item__content">
                            <input class="profile__custom-input custom-input" type="text" name="profile-date-of-issue"
                              placeholder="4" />
                          </div>
                        </div>
                        <div class="profile-item">
                          <div class="profile-item__name">Строение</div>
                          <div class="profile-item__content">
                            <input class="profile__custom-input custom-input" type="text" name="profile-date-of-issue"
                              placeholder="1" />
                          </div>
                        </div>
                        <div class="profile-item">
                          <div class="profile-item__name">Квартира</div>
                          <div class="profile-item__content">
                            <input class="profile__custom-input custom-input" type="text" name="profile-date-of-issue"
                              placeholder="41" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <button id="save-info" class="profile__btn-save-info btn btn_hover blue-btn mt-10">сохранить
                  информацию</button>
              </div>
              <div id="profile-registration" class="profile-registration profile-blocks" style="display: none">
                <div class="profile-tab__title-mob">
                  <h3 class="profile-tab__title h3">Профиль</h3>
                  <div class="profile__info-for-edit">Чтобы изменить данные, свяжитесь с менеджером по телефону <a
                      href="tel:+88005507940" class="link">8 800 550 79 40</a></div>
                </div>
                <div class="profile-block">
                  <div class="profile-block__head">
                    <div class="profile-block__head-col">
                      <div class="profile-block__head-title">Данные профиля <span></span></div>
                    </div>
                    <div class="profile-block__head-col">
                      <div class="profile__info-for-edit">
                        Чтобы изменить данные, свяжитесь <br />
                        с менеджером по телефону <a href="tel:+88005507940" class="link">8 800 550 79 40</a>
                      </div>
                    </div>
                  </div>
                  <form id="profile-info" class="profile-block__content profile-block__form">
                    <div class="profile-photo__wrapp">
                      <div class="profile-photo__img">
                        <img src="assets/img/authorized.jpg" alt="" />
                      </div>
                      <div class="profile-photo__edit">
                        <button class="profile-photo__edit-button">изменить фотографию</button>
                        <div class="profile-photo__edit-desc">Размер фото не должен превышать 5 MB</div>
                      </div>
                    </div>
                    <div class="profile-list__info">
                      <div class="profile-item">
                        <div class="profile-item__name">Ваш номер</div>
                        <div class="profile-item__info-profile">+7 999 444 11 01</div>
                      </div>
                      <div class="profile-item">
                        <div class="profile-item__name">Тип профиля</div>
                        <div class="profile-item__info-profile">Физ. лицо</div>
                      </div>
                      <div class="profile-item">
                        <div class="profile-item__name">ФИО</div>
                        <div class="profile-item__info-profile">Сергеев Виктор Геннадьевич</div>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="profile-block">
                  <div class="profile-block__head">
                    <div class="profile-block__head-col">
                      <div class="profile-block__head-title">Паспортные данные <span></span></div>
                    </div>
                  </div>
                  <form id="profile-personal-passport" class="profile-block__content profile-block__form">
                    <div class="profile-passport__wrapp">
                      <div class="profile-item__name mb-20">Фото паспорта</div>
                      <div class="profile-item__content">
                        <div class="profile-passport__img-loaded">
                          <img src="assets/img/pasport.jpg" alt="" />
                        </div>
                        <div class="profile-passport__img-loaded">
                          <img src="assets/img/pasport.jpg" alt="" />
                        </div>
                      </div>
                    </div>

                    <div class="profile-list__info">
                      <div class="profile-item">
                        <div class="profile-item__name">Серия и номер паспорта</div>
                        <div class="profile-item__info-profile">45 41 217 877</div>
                      </div>
                      <div class="profile-item">
                        <div class="profile-item__name">Дата рождения</div>
                        <div class="profile-item__info-profile">10.08.1995</div>
                      </div>
                      <div class="profile-item">
                        <div class="profile-item__name">Место рождения</div>
                        <div class="profile-item__info-profile">РФ, г. Челябинск</div>
                      </div>
                      <div class="profile-item">
                        <div class="profile-item__name">Дата выдачи</div>
                        <div class="profile-item__info-profile">11.02.2020</div>
                      </div>
                      <div class="profile-item">
                        <div class="profile-item__name">Кем выдан паспорт</div>
                        <div class="profile-item__info-profile">УФМС России по Челябинской области</div>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="profile-block">
                  <div class="profile-block__head">
                    <div class="profile-block__head-title">Адрес постоянной регистрации <span></span></div>
                  </div>
                  <form id="profile-personal-address" class="profile-block__content profile-block__form d-flex">
                    <div class="profile-list__info">
                      <div class="profile-item">
                        <div class="profile-item__name">Индекс</div>
                        <div class="profile-item__info-profile">454 074</div>
                      </div>
                      <div class="profile-item">
                        <div class="profile-item__name">Регион</div>
                        <div class="profile-item__info-profile">Уральский</div>
                      </div>
                      <div class="profile-item">
                        <div class="profile-item__name">Город</div>
                        <div class="profile-item__info-profile">Челябинск</div>
                      </div>
                      <div class="profile-item">
                        <div class="profile-item__name">Улица</div>
                        <div class="profile-item__info-profile">пр-т Ленина</div>
                      </div>
                    </div>
                    <div class="profile-list__info">
                      <div class="profile-item">
                        <div class="profile-item__name">Дом</div>
                        <div class="profile-item__info-profile">44</div>
                      </div>
                      <div class="profile-item">
                        <div class="profile-item__name">Корпус</div>
                        <div class="profile-item__info-profile">-</div>
                      </div>
                      <div class="profile-item">
                        <div class="profile-item__name">Строение</div>
                        <div class="profile-item__info-profile">-</div>
                      </div>
                      <div class="profile-item">
                        <div class="profile-item__name">Квартира</div>
                        <div class="profile-item__info-profile">44</div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- TAB PROFILE END-->
            <!-- TAB transactions-->
            <div id="transactions-tab-content" class="transactions profile-tab__content tab-content" data-tab="2"
              style="display: none">
              <div class="transactions-head">
                <div class="profile-tab__title-mob">
                  <h3 class="profile-tab__title h3">Сделки</h3>
                </div>
                <div class="transactions-sort__daterange">
                  <label class="daterange-input__label" for="daterange-input">
                    <img src="assets/img/icons/icon-daterange-input.svg" alt="" />
                  </label>
                  <input id="daterange-input" class="daterange-input" type="text" name="daterange"
                    value="01/01/2018 - 01/15/2021" />
                </div>
                <div class="transactions-sort__ofselect">
                  <div class="select select-custom-js">
                    <div class="select__header">
                      <label class="select__label">Сортировка:</label>
                      <span class="select__current">по объему сырья</span>
                      <input type="hidden" name="search" value="1" />
                    </div>
                    <div class="select__body">
                      <div class="select__item" data-select-value="1">по объему сырья</div>
                      <div class="select__item" data-select-value="2">по сумме</div>
                    </div>
                  </div>
                </div>
              </div>
              <ul class="transactions-blocks">
                <li class="transactions-block">
                  <div class="transactions-block__head accordion-js active">
                    <div class="transactions-block__info">
                      <div class="transactions-block__info-item">10 кг <span>Вес сырья</span></div>
                      <div class="transactions-block__info-item">3 % <span>Кэшбек</span></div>
                      <div class="transactions-block__info-item">320 000 ₽ <span>Сумма выплаты</span></div>
                    </div>
                    <div class="transactions-block__options">
                      <div class="transactions-block__options-time">10.02.2020 / 16:11</div>

                      <div class="transactions-block__options-actions actions-content-show-js">
                        <button class="actions-btn btn">Действия</button>
                        <div class="actions-content">
                          <a href="#" class="actions-link">Заказать хим. анализ</a>
                          <a href="#" class="actions-link">Получить паспорт расчет</a>
                          <a href="#" class="actions-link">Скачать чек</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="transactions-block__content lot-blocks accordion-block-js">
                    <div class="lot-block">
                      <div class="lot-block__head">
                        <div class="lot-block__title">Лот #1</div>
                        <div class="lot-block__info">5 кг / Керамика</div>
                      </div>
                      <div class="lot-block__content">
                        <div class="lot-block__item">Сумма <span>160 000 ₽</span></div>
                        <div class="lot-block__item">Содердание, Pt / Pd / Rh <span>7.1 / 1.3 / 2.5</span></div>
                        <div class="lot-block__item">Авто <span>BMW X5 2020</span></div>
                      </div>
                    </div>
                    <div class="lot-block">
                      <div class="lot-block__head">
                        <div class="lot-block__title">Лот #1</div>
                        <div class="lot-block__info">5 кг / Керамика</div>
                      </div>
                      <div class="lot-block__content">
                        <div class="lot-block__item">Сумма <span>160 000 ₽</span></div>
                        <div class="lot-block__item">Содердание, Pt / Pd / Rh <span>7.1 / 1.3 / 2.5</span></div>
                        <div class="lot-block__item">Авто <span>BMW X5 2020</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="transactions-block__more transactions-block__more--hide accordion-js">свернуть</div>
                </li>
                <li class="transactions-block">
                  <div class="transactions-block__head accordion-js">
                    <div class="transactions-block__info">
                      <div class="transactions-block__info-item">10 кг <span>Вес сырья</span></div>
                      <div class="transactions-block__info-item">3 % <span>Кэшбек</span></div>
                      <div class="transactions-block__info-item">320 000 ₽ <span>Сумма выплаты</span></div>
                    </div>
                    <div class="transactions-block__options">
                      <div class="transactions-block__options-time">10.02.2020 / 16:11</div>

                      <div class="transactions-block__options-actions actions-content-show-js">
                        <button class="actions-btn btn">Действия</button>
                        <div class="actions-content">
                          <a href="#" class="actions-link">Заказать хим. анализ</a>
                          <a href="#" class="actions-link">Получить паспорт расчет</a>
                          <a href="#" class="actions-link">Скачать чек</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="transactions-block__content lot-blocks accordion-block-js" style="display: none">
                    <div class="lot-block">
                      <div class="lot-block__head">
                        <div class="lot-block__title">Лот #1</div>
                        <div class="lot-block__info">5 кг / Керамика</div>
                      </div>
                      <div class="lot-block__content">
                        <div class="lot-block__item">Сумма <span>160 000 ₽</span></div>
                        <div class="lot-block__item">Содердание, Pt / Pd / Rh <span>7.1 / 1.3 / 2.5</span></div>
                        <div class="lot-block__item">Авто <span>BMW X5 2020</span></div>
                      </div>
                    </div>
                    <div class="lot-block">
                      <div class="lot-block__head">
                        <div class="lot-block__title">Лот #1</div>
                        <div class="lot-block__info">5 кг / Керамика</div>
                      </div>
                      <div class="lot-block__content">
                        <div class="lot-block__item">Сумма <span>160 000 ₽</span></div>
                        <div class="lot-block__item">Содердание, Pt / Pd / Rh <span>7.1 / 1.3 / 2.5</span></div>
                        <div class="lot-block__item">Авто <span>BMW X5 2020</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="transactions-block__more transactions-block__more--show accordion-js">Развернуть</div>
                </li>
              </ul>
            </div>
            <!-- TAB transactions END-->
            <!-- TAB ANALITICS-->
            <div id="analitics-tab-content" class="analitics profile-tab__content tab-content" data-tab="3"
              style="display: none">
              <div class="analitics-content">
                <?php include("templates/analitic-delivery.php"); ?>
                <?php include("templates/analitic-pay.php"); ?>
                <?php include("templates/analitic-materials.php"); ?>
              </div>
            </div>
            <!-- TAB ANALITICS END-->
          </div>
        </div>
        <!-- TAB SIDEBAR -->
        <div class="profile-sidebar">
          <div class="profile-head">
            <a href="/index.php" class="profile-exit__btn btn_hover btn gray2-btn">Выйти</a>
          </div>
          <div class="quotes profile-sidebar__item profile-block">
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
                    <div class="curs-metal__valuta">Pd<span class="curs-metal__valuta_up"></span></div>
                    <div class="curs-metal__price">5 658,74 ₽/г</div>
                  </li>
                  <li class="quotes-item">
                    <div class="curs-metal__valuta">Pd<span class="curs-metal__valuta_down"></span></div>
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
                    <div class="curs-metal__valuta">Pd<span class="curs-metal__valuta_up"></span></div>
                    <div class="curs-metal__price">5 658,74 ₽/г</div>
                  </li>
                  <li class="quotes-item">
                    <div class="curs-metal__valuta">Pd<span class="curs-metal__valuta_up"></span></div>
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
          <div class="status profile-block">
            <div class="status-head">
              <img src="assets/img/icons/status-icon.svg" alt="" class="status-icon" />
              <div class="status-title">Серебрянный<span>Ваш статус</span></div>
            </div>
            <div class="status-content">
              <div class="status-range">

                <div class="status-line">
                  <div class="status-line_active" style="width: 30%">
                    <div class="status-block__number">10 Кг</div>
                  </div>
                </div>
                <div class="status-block__info">
                  <p class="status-block_min">0 Кг</p>
                  <p class="status-block_max">Золотой - 30 Кг</p>
                </div>
              </div>
              <div class="status-bonuses">
                <div class="status-bonuses__title">Кэшбек <span class="status-bonuses__percent">3%</span></div>
                <div class="status-bonuses__title">Ретро Бонус <span class="status-bonuses__percent">1%</span></div>
              </div>
              <div class="status-pay">
                <div class="status-pay__title">
                  Выплаты Ретро Бонуса <br />
                  в зависимости от статуса
                </div>
                <ul class="status-pay__list">
                  <li class="status-pay__list-item">Серебрянный<span class="status-bonuses__percent">3%</span></li>
                  <li class="status-pay__list-item">Золотой<span class="status-bonuses__percent">4%</span></li>
                  <li class="status-pay__list-item">Платина<span class="status-bonuses__percent">5%</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- TAB SIDEBAR END-->
      </div>
    </section>
  </div>

  <?php include("footer.php"); ?>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
  <script src="assets/js/analitic.js"></script>
</body>

</html>