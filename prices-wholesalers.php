<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="assets/libs/bootstrap-grid/bootstrap-grid.min.css" />
    <link rel="stylesheet" href="assets/libs/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="assets/libs/scrollbar/jquery.scrollbar.css" />
    <link rel="stylesheet" href="assets/libs/slick/slick.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <title>SDAYKAT</title>
  </head>

  <body>
  <?php include("header.php"); ?>

    <main class="main main_price-wholesale">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-8">
            <h1 class="main-title">Бесплатно удалим катализатор<br />и выкупим сырье</h1>
            <!-- Phone form  -->
            <form class="main-form">
              <div class="main-form__wrapper">
                <label class="main-form__label main-form__label_phone">
                  <input class="main-form__phone mask-phone" type="tel" name="phone" placeholder="+7 (___) ___-__-__" />
                </label>
                <div class="main-form__btn">
                  <a href="#popup-thank-specialist" class="main-form__submit btn btn_hover orange-btn popup" id="intro-submit-btn" type="button">Продать сырье</a>
                </div>
              </div>
              <label class="main-form__policy">
                <input type="checkbox" checked="" class="main-form__checkbox" />
                <span class="main-form__checkbox-box"></span>
                <span class="main-form__text small-text"> Я ознакомлен c <a href="#">политикой конфиденциальности</a></span>
              </label>
            </form>
            <!-- Phone form end -->
          </div>
          <div class="d-none d-lg-block col-12 col-lg-4">
            <div class=" curs-metal">
              <div class="curs-metal__title">
                <h3>
                  <b>Честные выплаты до <span class="text-orange">75%</span> по LME</b>
                </h3>
                <div class="curs-metal__icon">
                  <img src="assets/img/icons/icon-metal.svg" alt="" />
                </div>
              </div>
              <div class="curs-metal-list">
                <div class="curs-metal-list__item d-flex justify-content-between text-placeholder">
                  <div class="small-text">Сегодня</div>
                  <div class="small-text">Вчера</div>
                </div>
                <div class="curs-metal-list__item">
                  <div class="curs-metal__valuta">Pd<span class="curs-metal__valuta_up"></span></div>
                  <div class="d-flex justify-content-between">
                    <div class="h4">5 658,74 ₽/г</div>
                    <div class="h5 text-placeholder">5 648,74 ₽/г</div>
                  </div>
                </div>
                <div class="curs-metal-list__item">
                  <div class="curs-metal__valuta">Pd<span class="curs-metal__valuta_up"></span></div>
                  <div class="d-flex justify-content-between">
                    <div class="h4">5 658,74 ₽/г</div>
                    <div class="h5 text-placeholder">5 648,74 ₽/г</div>
                  </div>
                </div>
                <div class="curs-metal-list__item">
                  <div class="curs-metal__valuta">Pd<span class="curs-metal__valuta_down"></span></div>
                  <div class="d-flex justify-content-between">
                    <div class="h4">5 658,74 ₽/г</div>
                    <div class="h5 text-placeholder">5 648,74 ₽/г</div>
                  </div>
                </div>
              </div>
              <div class="curs-metal__link text-center"><a href="#" class="link"> проверить на lme.com </a></div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <section class="prices-ofmetal section-wrapper">
      <div class="container">
        <div class="prices-ofmetal__head">
          <h2 class="prices-ofmetal__title primary-title">Актуальная ценовая политика</h2>
          <a href="#" class="prices-ofmetal__btn btn btn_hover gray2-btn">CКАЧАТЬ ПРАЙС (.PDF)</a>
        </div>
        <ul class="prices-ofmetal__list">
          <li class="prices-ofmetal__item item-ofmetal">
            <div class="item-ofmetal__head">
              <div class="item-ofmetal__title">PT</div>
              <div class="item-ofmetal__name">Платина</div>
            </div>
            <div class="item-ofmetal__row">
              <div class="item-ofmetal__quantity">3 - 50 кг</div>
              <div class="item-ofmetal__percent">65%</div>
            </div>
            <div class="item-ofmetal__row">
              <div class="item-ofmetal__quantity">50 - 100 кг</div>
              <div class="item-ofmetal__percent">65%</div>
            </div>
            <div class="item-ofmetal__row">
              <div class="item-ofmetal__quantity">50 - 100 кг</div>
              <div class="item-ofmetal__percent">65%</div>
            </div>
            <div class="item-ofmetal__row">
              <div class="item-ofmetal__quantity">100 - 200 кг</div>
              <div class="item-ofmetal__percent">65%</div>
            </div>
            <div class="item-ofmetal__row">
              <div class="item-ofmetal__quantity">50 - 100 кг</div>
              <div class="item-ofmetal__addservice">с безналичным расчетом</div>
              <div class="item-ofmetal__percent">65%</div>
            </div>
          </li>
          <li class="prices-ofmetal__item item-ofmetal">
            <div class="item-ofmetal__head">
              <div class="item-ofmetal__title">PT</div>
              <div class="item-ofmetal__name">Платина</div>
            </div>
            <div class="item-ofmetal__row">
              <div class="item-ofmetal__quantity">3 - 50 кг</div>
              <div class="item-ofmetal__percent">65%</div>
            </div>
            <div class="item-ofmetal__row">
              <div class="item-ofmetal__quantity">50 - 100 кг</div>
              <div class="item-ofmetal__percent">65%</div>
            </div>
            <div class="item-ofmetal__row">
              <div class="item-ofmetal__quantity">50 - 100 кг</div>
              <div class="item-ofmetal__percent">65%</div>
            </div>
            <div class="item-ofmetal__row">
              <div class="item-ofmetal__quantity">100 - 200 кг</div>
              <div class="item-ofmetal__percent">65%</div>
            </div>
            <div class="item-ofmetal__row">
              <div class="item-ofmetal__quantity">50 - 100 кг</div>
              <div class="item-ofmetal__addservice">с безналичным расчетом</div>
              <div class="item-ofmetal__percent">65%</div>
            </div>
          </li>
          <li class="prices-ofmetal__item item-ofmetal">
            <div class="item-ofmetal__head">
              <div class="item-ofmetal__title">PT</div>
              <div class="item-ofmetal__name">Платина</div>
            </div>
            <div class="item-ofmetal__row">
              <div class="item-ofmetal__quantity">3 - 50 кг</div>
              <div class="item-ofmetal__percent">65%</div>
            </div>
            <div class="item-ofmetal__row">
              <div class="item-ofmetal__quantity">50 - 100 кг</div>
              <div class="item-ofmetal__percent">65%</div>
            </div>
            <div class="item-ofmetal__row">
              <div class="item-ofmetal__quantity">50 - 100 кг</div>
              <div class="item-ofmetal__percent">65%</div>
            </div>
            <div class="item-ofmetal__row">
              <div class="item-ofmetal__quantity">100 - 200 кг</div>
              <div class="item-ofmetal__percent">65%</div>
            </div>
            <div class="item-ofmetal__row">
              <div class="item-ofmetal__quantity">50 - 100 кг</div>
              <div class="item-ofmetal__addservice">с безналичным расчетом</div>
              <div class="item-ofmetal__percent">65%</div>
            </div>
          </li>
        </ul>
      </div>
    </section>

    <section class="calculator-price section-wrapper">
      <div class="container">
        <div class="calculator-body">
          <div class="calculator-settings">
            <h2 class="calculator-title primary-title__light">
              Расчитайте оптовую <br />
              стоимость сырья
            </h2>
            <div class="calculator-result__weight">
              <div class="calculator-result__title">Общий вес сырья:</div>
              <div class="calculator-result__input">
                <input class="calculator-input" type="text" placeholder="20" />
                <label class="calculator-result__label">Кг</label>
              </div>
            </div>
            <div class="calculator-options options-calculator">
              <div class="options-item">
                <div class="options-item__percent">65%</div>
                <div class="options-item__material">PT</div>
                <img src="assets/img/icons/important-icon.svg" alt="" class="options-item__icon" />
                <input type="range" class="options-item__range" min="0" max="20" value="6" name="pd" step="0.1" />
                <div class="calculator-result__input">
                  <input class="calculator-input" type="text" placeholder="20" />
                  <label class="calculator-result__label">Г/ Кг</label>
                </div>
              </div>
              <div class="options-item">
                <div class="options-item__percent">65%</div>
                <div class="options-item__material">PT</div>
                <img src="assets/img/icons/important-icon.svg" alt="" class="options-item__icon" />
                <input type="range" class="options-item__range" min="0" max="20" value="6" name="pd" step="0.1" />
                <div class="calculator-result__input">
                  <input class="calculator-input" type="text" placeholder="20" />
                  <label class="calculator-result__label">Г/ Кг</label>
                </div>
              </div>
              <div class="options-item">
                <div class="options-item__percent">65%</div>
                <div class="options-item__material">PT</div>
                <img src="assets/img/icons/important-icon.svg" alt="" class="options-item__icon" />
                <input type="range" class="options-item__range" min="0" max="20" value="6" name="pd" step="0.1" />
                <div class="calculator-result__input">
                  <input class="calculator-input" type="text" placeholder="20" />
                  <label class="calculator-result__label">Г/ Кг</label>
                </div>
              </div>
            </div>
          </div>
          <div class="calculator-form">
            <h3 class="calculator-form__title primary-title__h3">
              Общая <br />
              стоимость сырья
            </h3>
            <div class="calculator-form__price">28 000 ₽</div>
            <form class="calculator-form__body main-form main-form__light">
              <div class="main-form__wrapper">
                <label class="main-form__label main-form__label_phone">
                  <input class="main-form__phone mask-phone" type="tel" name="phone" placeholder="+7 (___) ___-__-__" />
                </label>
                <div class="main-form__btn">
                  <a href="#popup-thank-specialist" class="main-form__submit btn btn_hover primary-btn popup" id="intro-submit-btn" type="button">Продать катализатор</a>
                </div>
              </div>
              <label class="main-form__policy">
                <input type="checkbox" checked="" class="main-form__checkbox" />
                <span class="main-form__checkbox-box"></span>
                <span class="main-form__text small-text"> Я ознакомлен c <a href="#">политикой конфиденциальности</a></span>
              </label>
            </form>
            <div class="calculator-form__tell-label">Или свяжитесь с нами по номеру</div>
            <a href="tel:+88005507940" class="calculator-form__tell">8 800 550 79 40</a>
          </div>
          <a href="#popup-form-calculator" class="calculator-calculate-btn btn popup">рассчитать СТОИМОСТЬ</a>
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
              <a href="#" class="bonuses-offer__link">узнать больше</a>
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
          Предварительная <br />
          стоимость сырья
        </h3>
        <div class="calculator-form__price">28 000 ₽</div>
        <div class="popup-desc">Отправьте заявку для выезда менеджера. Специалист выполнит необходимые замеры для расчёта точной стоимости катализатора.</div>
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
            <span class="main-form__text small-text"> Я ознакомлен c <a href="#">политикой конфиденциальности</a></span>
          </label>
        </form>
        <div class="calculator-form__tell-label">Или свяжитесь с нами по номеру</div>
        <a href="tel:+88005507940" class="calculator-form__tell">8 800 550 79 40</a>
      </div>
    </div>
    <!-- popup-form-calculator end-->

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