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

  <link rel="stylesheet" href="assets/css/main.css?v=2" />
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
    </div>
  </div>

  <?php include("footer.php"); ?>
</body>

</html>