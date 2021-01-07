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

    <div class="page-404 header-top__indent">
      <div class="container">
        <div class="page-404__wrapp">
          <div class="page-404__img">
            <img src="assets/img/404.svg" alt="404" />
          </div>
          <div class="page-404__content">
            <div class="page-404__title h4">Ошибка :(</div>
            <div class="page-404__text">Страница не найдена. Возможно мы удалили страницу, потому что она не нужна или заменили на новую.</div>
            <a href="/index.php" class="page-404__link link">вернуться назад</a>
          </div>
        </div>
      </div>
    </div>

    <?php include("footer.php"); ?>
  </body>
</html>
