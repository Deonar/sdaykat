<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Page link -->
  <link rel="stylesheet" href="assets/libs/jquery-libs/jquery-ui.min.css" />
  <link rel="stylesheet" href="assets/libs/slick/slick.css" />

   <!-- Base link -->
   <?php include("inc/base-link.php"); ?>

<title>Бонусы</title>
</head>

<body>
  <?php
  $page = 'bonuses';
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
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
  <script src="assets/js/profile.js?v=<? echo time(); ?>"></script>
</body>

</html>