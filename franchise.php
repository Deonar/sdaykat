<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="assets/libs/bootstrap-grid/bootstrap-grid.min.css" />
    <link rel="stylesheet" href="assets/libs/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="assets/libs/scrollbar/jquery.scrollbar.css" />
    <link rel="stylesheet" href="assets/libs/jquery-libs/jquery-ui.min.css" />
    <link rel="stylesheet" href="assets/libs/slick/slick.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <title>SDAYKAT</title>
  </head>

  <body>
    
    <?php include("header.php"); ?>

    <main class="main main_franchise">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-6">
            <h1 class="main-title">Оптово-розничный бизнес по выкупу каталитического сырья</h1>
            <!-- Phone form  -->
            <form class="main-form">
              <div class="main-form__wrapper">
                <label class="main-form__label main-form__label_phone">
                  <input class="main-form__phone mask-phone" type="tel" name="phone" placeholder="+7 (___) ___-__-__" />
                </label>

                <div class="main-form__btn">
                  <a href="#popup-thank" class="main-form__submit btn btn_hover gray-btn popup" type="button">получить консультацию</a>
                </div>
              </div>
              <label class="main-form__policy">
                <input type="checkbox" checked="" class="main-form__checkbox" />
                <span class="main-form__checkbox-box"></span>
                <span class="main-form__text small-text"> Я ознакомлен c <a href="/privacy-policy.php">политикой конфиденциальности</a></span>
              </label>
            </form>
            <!-- Phone form end -->
          </div>
          <div class="col-6"></div>
        </div>
      </div>
    </main>

    <section class="franchise-sentence">
      <div class="container">
        <div class="franchise-sentence__head">
          <div class="franchise-sentence__content">
            <h2 class="franchise-sentence__title primary-title">Что предлагаем?</h2>
            <div class="franchise-sentence__text">Еще 15 лет назад об электромобилях никто не говорил всерьез, но сегодня уже каждый знает, что это, а многие готовы приобрести за любые деньги. Речь, конечно, не о России. Но к примеру, в Норвегии к 2025 году планируют и вовсе отказаться от машин с ДВС, их будет просто невозможно купить на территории страны.</div>
          </div>
          <img src="assets/img/catalysts/catalist-destroy.png" alt="" class="franchise-sentence__img" />
        </div>
        <ul class="franchise-sentence__list">
          <li class="franchise-sentence__item">
            <img src="assets/img/icons/dollar-icon.svg" alt="" class="franchise-sentence__item-img" />
            <div class="franchise-sentence__item-title">PushAll взнос: 0₽</div>
            <div class="franchise-sentence__item-text">Подробная аналитика по всем сделкам, выгрузка необходимой документации.</div>
          </li>
          <li class="franchise-sentence__item">
            <img src="assets/img/icons/percent-dark-icon.svg" alt="" class="franchise-sentence__item-img" />
            <div class="franchise-sentence__item-title">Royalty: 10% от прибыли</div>
            <div class="franchise-sentence__item-text">Подробная аналитика по всем сделкам, выгрузка необходимой документации.</div>
          </li>
          <li class="franchise-sentence__item">
            <img src="assets/img/icons/man-icon.svg" alt="" class="franchise-sentence__item-img" />
            <div class="franchise-sentence__item-title">Преимущество</div>
            <div class="franchise-sentence__item-text">Подробная аналитика по всем сделкам, выгрузка необходимой документации.</div>
          </li>
        </ul>
      </div>
    </section>

    <section class="franchise-map section-wrapper">
      <div class="container">
        <h2 class="franchise-map__title primary-title">Кому предлагаем франшизу?</h2>
        <div class="franchise-map__sub-title">Предпринимателям в городах <span>от 300 000</span> населения</div>
        <div class="franchise-map__wrapp">
          <div class="franchise-map__info">
            <div class="franchise-map__select select select-dropdown container-search-js">
              <div class="select__header-search">
                <label class="select__label">Регионы / области</label>
                <div class="custom-input__wrapper">
                  <input type="text" class="custom-input input-search-js" placeholder="Геолокация" />
                </div>
              </div>

              <div class="select__body">
                <div class="scrollbar-inner scrollbar-js">
                  <div class="select__item-search">Абакан</div>
                  <div class="select__item-search">Абинск</div>
                  <div class="select__item-search">Александров</div>
                  <div class="select__item-search">Балашов</div>
                  <div class="select__item-search">Белгород</div>
                  <div class="select__item-search">Беломорск</div>
                  <div class="select__item-search">Воронеж</div>
                  <div class="select__item-search">Выборг</div>
                </div>
              </div>
            </div>
            <div class="tab-wrapper">
              <div class="franchise-map__info-tabs">
                <div class="franchise-map__info-tab tab active" data-tab="1">Занятые города</div>
                <div class="franchise-map__info-tab tab" data-tab="2">Свободные города</div>
              </div>
              <div class="franchise-map__info-content tab-content" data-tab="1">
                <div class="franchise-map__region">Челябинска область</div>
                <ul class="franchise-map__cityes">
                  <li class="franchise-map__city">Челябинск</li>
                  <li class="franchise-map__city">Магнитогорск</li>
                  <li class="franchise-map__city">Златоуст</li>
                  <li class="franchise-map__city">Чебаркуль</li>
                  <li class="franchise-map__city">Миасс</li>
                </ul>
              </div>
              <div class="franchise-map__info-content tab-content" data-tab="2" style="display: none">
                <div class="franchise-map__region">Московская область</div>
                <ul class="franchise-map__cityes">
                  <li class="franchise-map__city">Челябинск</li>
                  <li class="franchise-map__city">Магнитогорск</li>
                  <li class="franchise-map__city">Златоуст</li>
                  <li class="franchise-map__city">Чебаркуль</li>
                  <li class="franchise-map__city">Миасс</li>
                  <li class="franchise-map__city">Чебаркуль</li>
                  <li class="franchise-map__city">Миасс</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="franchise-map__body">
            <div class="franchise-map__svg" id="franchise-map">
              <?php include('templates/map-franchise.php') ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="franchise-office section-wrapper">
      <div class="container">
        <div class="franchise-office__wrapp">
          <div class="franchise-office__content">
            <div class="franchise-office__title primary-title">Открытие стационарного офисав городах с населением от 300.000 +</div>
            <div class="franchise-office__items">
              <div class="franchise-office__item">
                <img src="assets/img/icons/requirement-1.svg" alt="" class="franchise-office__item-icon" />
                <div class="franchise-office__item-title">Помещение</div>
                <div class="franchise-office__item-text">Подробная аналитика по всем сделкам, выгрузка необходимой документации.</div>
              </div>
              <div class="franchise-office__item">
                <img src="assets/img/icons/requirement-1.svg" alt="" class="franchise-office__item-icon" />
                <div class="franchise-office__item-title">Помещение</div>
                <div class="franchise-office__item-text">Подробная аналитика по всем сделкам, выгрузка необходимой документации.</div>
              </div>
              <div class="franchise-office__item">
                <img src="assets/img/icons/requirement-1.svg" alt="" class="franchise-office__item-icon" />
                <div class="franchise-office__item-title">Помещение</div>
                <div class="franchise-office__item-text">Подробная аналитика по всем сделкам, выгрузка необходимой документации.</div>
              </div>
              <div class="franchise-office__item">
                <img src="assets/img/icons/requirement-1.svg" alt="" class="franchise-office__item-icon" />
                <div class="franchise-office__item-title">Помещение</div>
                <div class="franchise-office__item-text">Подробная аналитика по всем сделкам, выгрузка необходимой документации.</div>
              </div>
            </div>
          </div>
          <div class="franchise-office__form-wrapp">
            <form class="franchise-office__form main-form main-form__light">
              <h3 class="price-ofauto__form-title h3">Получите бесплатную консультацию</h3>
              <div class="price-ofauto__form-text">Отправьте заявку. Наши менеджеры свяжутся с вами.</div>
              <div class="main-form__wrapper">
                <label class="main-form__label main-form__label_phone">
                  <input class="main-form__phone mask-phone" type="tel" name="phone" placeholder="+7 (___) ___-__-__" />
                </label>
                <div class="main-form__btn">
                  <a href="#popup-thank" class="main-form__submit btn btn_hover gray-btn popup" type="button">Получить консультацию</a>
                </div>
              </div>
              <label class="main-form__policy">
                <input type="checkbox" checked="" class="main-form__checkbox" />
                <span class="main-form__checkbox-box"></span>
                <span class="main-form__text small-text"> Я ознакомлен c <a href="/privacy-policy.php">политикой конфиденциальности</a></span>
              </label>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="about-block">
      <div class="container">
        <div class="about-block__header">
          <h2 class="h2 title">О компании SDAYKAT</h2>
        </div>
        <div class="row">
          <div class="col-12 col-lg-7">
            <div class="about-block__content">
              <p class="big-text mb-20">Еще 15 лет назад об электромобилях никто не говорил всерьез, но сегодня уже каждый знает, что это, а многие готовы приобрести за любые деньги.</p>
              <p class="small-text mb-20 opacity-7">Еще 15 лет назад об электромобилях никто не говорил всерьез, но сегодня уже каждый знает, что это, а многие готовы приобрести за любые деньги.</p>
            </div>
            <div class="about-block__btn">
              <a href="/about.php#vacancy" class="btn white-btn">4 вакансии</a>
              <a href="/about.php" class="btn transparent-btn btn_arrow">Узнать больше о компании
                <span class="arrow-move">
                  <span class="arrow-move-clip">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background: new 0 0 512 512" xml:space="preserve">
                      <path d="M506.134,241.843c-0.006-0.006-0.011-0.013-0.018-0.019l-104.504-104c-7.829-7.791-20.492-7.762-28.285,0.068    c-7.792,7.829-7.762,20.492,0.067,28.284L443.558,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h423.557    l-70.162,69.824c-7.829,7.792-7.859,20.455-0.067,28.284c7.793,7.831,20.457,7.858,28.285,0.068l104.504-104    c0.006-0.006,0.011-0.013,0.018-0.019C513.968,262.339,513.943,249.635,506.134,241.843z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background: new 0 0 512 512" xml:space="preserve">
                      <path d="M506.134,241.843c-0.006-0.006-0.011-0.013-0.018-0.019l-104.504-104c-7.829-7.791-20.492-7.762-28.285,0.068    c-7.792,7.829-7.762,20.492,0.067,28.284L443.558,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h423.557    l-70.162,69.824c-7.829,7.792-7.859,20.455-0.067,28.284c7.793,7.831,20.457,7.858,28.285,0.068l104.504-104    c0.006-0.006,0.011-0.013,0.018-0.019C513.968,262.339,513.943,249.635,506.134,241.843z"></path>
                    </svg>
                  </span> </span></a>
            </div>
          </div>
          <div class="col-12 col-lg-5">
            <div class="about-info">
              <div class="about-info__top">
                <div class="big-price mr-10">3 000</div>
                <h5>постоянных<br />клиентов</h5>
              </div>
              <div class="separater-line opacity-3 mt-20 mb-20"></div>
              <div class="about-info__bottom">
                <div class="about-info_col">
                  <h2>250 тонн</h2>
                  <h5>ежемесячный сбор сырья</h5>
                </div>
                <div class="separater-line-ver opacity-3"></div>
                <div class="about-info_col">
                  <h2>12 партнёров</h2>
                  <h5>по всей стране</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="franchise-benefit section-wrapper">
      <div class="container">
        <div class="franchise-benefit__title primary-title">Что вы получаете при покупке франшизы у нас?</div>
        <div class="franchise-benefit__sub-title">Мы предоставляем Вам бизнес по выкупу каталитического сырья <span> “под ключ”</span>, с окупаемостью <span> до 6 месяцев.</span></div>
        <ul class="franchise-benefit__items">
          <li class="franchise-benefit__item">
            <img src="assets/img/icons/requirement-1.svg" alt="" class="franchise-benefit__item-icon" />
            <div class="franchise-benefit__item-title">Трафик</div>
            <div class="franchise-benefit__item-text">Подробная аналитика по всем сделкам, выгрузка необходимой документации.</div>
          </li>
          <li class="franchise-benefit__item">
            <img src="assets/img/icons/requirement-1.svg" alt="" class="franchise-benefit__item-icon" />
            <div class="franchise-benefit__item-title">Трафик</div>
            <div class="franchise-benefit__item-text">Подробная аналитика по всем сделкам, выгрузка необходимой документации.</div>
          </li>
          <li class="franchise-benefit__item">
            <img src="assets/img/icons/requirement-1.svg" alt="" class="franchise-benefit__item-icon" />
            <div class="franchise-benefit__item-title">Трафик</div>
            <div class="franchise-benefit__item-text">Подробная аналитика по всем сделкам, выгрузка необходимой документации.</div>
          </li>
          <li class="franchise-benefit__item">
            <img src="assets/img/icons/requirement-1.svg" alt="" class="franchise-benefit__item-icon" />
            <div class="franchise-benefit__item-title">Трафик</div>
            <div class="franchise-benefit__item-text">Подробная аналитика по всем сделкам, выгрузка необходимой документации.</div>
          </li>
          <li class="franchise-benefit__item">
            <img src="assets/img/icons/requirement-1.svg" alt="" class="franchise-benefit__item-icon" />
            <div class="franchise-benefit__item-title">Трафик</div>
            <div class="franchise-benefit__item-text">Подробная аналитика по всем сделкам, выгрузка необходимой документации.</div>
          </li>
          <li class="franchise-benefit__item">
            <img src="assets/img/icons/requirement-1.svg" alt="" class="franchise-benefit__item-icon" />
            <div class="franchise-benefit__item-title">Трафик</div>
            <div class="franchise-benefit__item-text">Подробная аналитика по всем сделкам, выгрузка необходимой документации.</div>
          </li>
        </ul>
      </div>
    </section>

    <section class="franchise-calculator calculator-price section-wrapper">
      <div class="container">
        <div class="calculator-body">
          <div class="calculator-settings">
            <h2 class="calculator-title primary-title__light">
              Сколько прибыли
              <br />
              получает регион
            </h2>

            <div class="calculator-options options-calculator">
              <div class="options-item__label">Население:</div>
              <div class="options-item">
              <div id="calculate-range-people" class="options-item__range custom-range"></div>
                <div class="calculator-result__input">
                <input id="calculate-input-people" class="calculator-input" type="text" placeholder="20" />
                  <label class="calculator-result__label">чел</label>
                </div>
              </div>
              <div class="options-item__label">Объем сырья в регионе:</div>
              <div class="options-item">
              <div id="calculate-range-size" class="options-item__range custom-range"></div>
                <div class="calculator-result__input">
                <input id="calculate-input-size" class="calculator-input" type="text" placeholder="20" />
                  <label class="calculator-result__label">Кг</label>
                </div>
              </div>
            </div>
          </div>
          <div class="calculator-form">
            <h3 class="calculator-form__title primary-title__h3">Возможная прибыль региона</h3>
            <div class="calculator-form__price">28 000 ₽</div>
            <form class="calculator-form__body main-form main-form__light">
              <div class="main-form__wrapper">
                <label class="main-form__label main-form__label_phone">
                  <input class="main-form__phone mask-phone" type="tel" name="phone" placeholder="+7 (___) ___-__-__" />
                </label>
                <div class="main-form__btn">
                  <a href="#popup-thank" class="main-form__submit btn btn_hover gray-btn popup" type="button">стать партнером sdaykat</a>
                </div>
              </div>
              <label class="main-form__policy">
                <input type="checkbox" checked="" class="main-form__checkbox" />
                <span class="main-form__checkbox-box"></span>
                <span class="main-form__text small-text"> Я ознакомлен c <a href="/privacy-policy.php">политикой конфиденциальности</a></span>
              </label>
            </form>
            <div class="calculator-form__tell-label">Или свяжитесь с нами по номеру</div>
            <a href="tel:+88005507940" class="calculator-form__tell">8 800 550 79 40</a>
          </div>
          <a href="#popup-form-calculator" class="calculator-calculate-btn btn popup">рассчитать СТОИМОСТЬ</a>
        </div>
      </div>
    </section>

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

    <!-- popup-form-calculator -->
    <div id="popup-form-calculator" class="popup-form-calculator custom-popup mfp-hide">
      <div class="popup-body">
        <h3 class="popup-secondery__title">
          Возможная прибыль <br />
          региона
        </h3>
        <div class="calculator-form__price">2 000 000 ₽</div>
        <form class="popup-form main-form main-form__light">
          <div class="main-form__wrapper">
            <label class="main-form__label main-form__label_phone">
              <input class="main-form__phone mask-phone" type="tel" name="phone" placeholder="+7 (___) ___-__-__" />
            </label>
            <div class="main-form__btn">
              <a href="#popup-thank-specialist" class="main-form__submit btn btn_hover orange-btn popup" type="button">вызвать специалиста</a>
            </div>
          </div>
          <label class="main-form__policy">
            <input type="checkbox" checked="" class="main-form__checkbox" />
            <span class="main-form__checkbox-box"></span>
            <span class="main-form__text small-text"> Я ознакомлен c <a href="/privacy-policy.php">политикой конфиденциальности</a></span>
          </label>
        </form>
        <div class="calculator-form__tell-label">Или свяжитесь с нами по номеру</div>
        <a href="tel:+88005507940" class="calculator-form__tell">8 800 550 79 40</a>
      </div>
    </div>
    <!-- popup-form-calculator end-->

    <!-- popup-thank -->
    <div id="popup-thank" class="popup-thank custom-popup mfp-hide">
      <div class="popup-body">
        <img src="assets/img/icons/thank-icon.svg" alt="" class="popup-img__thank" />
        <div class="popup-primary__title">Спасибо!</div>
        <div class="popup-desc">Ваша заявка отправлена. Мы свяжемся с вами в ближайшее время.</div>
      </div>
    </div>
    <!-- popup-thank end-->

    <?php include("footer.php"); ?>