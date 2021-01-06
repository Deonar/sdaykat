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

    <div class="bonuses-mobile-page header-top__indent">
      <div class="section-wrapper pt-0">
        <div class="container">
          <h3 class="profile-tab__title h3">Бонусы</h3>
          <div class="status profile-block">
            <div class="status-head">
              <img src="assets/img/icons/status-icon.svg" alt="" class="status-icon" />
              <div class="status-title">Серебрянный<span>Ваш статус</span></div>
            </div>
            <div class="status-content">
              <div class="status-range">
                <div class="status-block__number" style="margin-left: 30%">10 Кг</div>
                <div class="status-line">
                  <div class="status-line_active" style="width: 30%"></div>
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
      </div>
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
    <!-- Popup city end-->

    <?php include("footer.php"); ?>
  </body>
</html>
