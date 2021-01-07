<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="assets/libs/bootstrap-grid/bootstrap-grid.min.css" />
  <link rel="stylesheet" href="assets/libs/magnific-popup/magnific-popup.css" />
  <link rel="stylesheet" href="assets/libs/scrollbar/jquery.scrollbar.css" />

  <link rel="stylesheet" href="assets/css/main.css" />
  <title>SDAYKAT</title>
</head>

<body>
  <?php
  $regions = array(
    [
      'id' => 20,
      'title' => "Московская<br>область",
      'img' => 'moscow',
      'cities' => [
        "Одинцово",
        "Коломна",
        "Электросталь",
        "Красногорск",
        "Люберцы",
        "Мытищи",
        "Химки",
        "Подольск",
        "Балашиха"
      ]
    ],
    [
      'id' => 3,
      'title' => "Свердловкая<br>область",
      'img' => 'sverdlovsk',
      'cities' => [
        "Одинцово",
        "Коломна",
        "Электросталь",
        "Красногорск",
        "Люберцы",
        "Мытищи",
        "Химки",
        "Подольск",
        "Балашиха"
      ]
    ],
    [
      'id' => 3,
      'title' => "Свердловкая<br>область",
      'img' => 'sverdlovsk',
      'cities' => [
        "Одинцово",
        "Коломна",
        "Электросталь",
        "Красногорск",
        "Люберцы",
        "Мытищи",
        "Химки",
        "Подольск",
        "Балашиха"
      ]
    ],
    [
      'id' => 3,
      'title' => "Свердловкая<br>область",
      'img' => 'sverdlovsk',
      'cities' => [
        "Одинцово",
        "Коломна",
        "Электросталь",
        "Красногорск",
        "Люберцы",
        "Мытищи",
        "Химки",
        "Подольск",
        "Балашиха"
      ]
    ],
  );
  ?>
  <?php
  $header_class = 'header-light';
  include("header.php");
  ?>

  <div class="representative-page header-top__indent">
    <section class="page-head">
      <div class="container">
        <h1 class="page-title">
          Представительства <br />
          SDAYKAT
        </h1>
        <div class="page-text">Оснащение автомобильными катализаторами позволяет производить автомобили в соответствии с современными нормами экологичности.</div>
      </div>
    </section>
    <section class="representative-map section-wrapper pt-0">
      <div class="container">
        <div class="representative-map__svg" id="representative-map">
          <?php include('templates/map-representative.php') ?>
        </div>
        <ul class="representative-list" id="representative-list">
        <?php foreach ($regions as $key => $region) { ?>
          <li class="representative-item accordion-tab-js" data-id="<?php echo ($region['id']) ?>">
            <div class="representative-item__head">
              <div class="representative-item__img">
                <img src="assets/img/map/<?php echo ($region['img']) ?>.svg" alt="" />
              </div>
              <h3 class="representative-item__title h3">
              <?php echo ($region['title']) ?>
              </h3>
            </div>
            <div class="representative-list__cities-wrapp accordion-content-js">
              <ul class="representative-list__cities">
              <?php foreach ($region['cities'] as $key => $city) { ?>
                <li class="representative-list__cities-item"><?php echo $city ?></li>
                <?php } ?>
              </ul>
            </div>
          </li>
          <?php } ?>
        </ul>
      </div>
    </section>
    <?php include("templates/map.php"); ?>
  </div>

  <?php include("footer.php"); ?>

  <script src="assets/js/map-representative.js"></script>
</body>

</html>