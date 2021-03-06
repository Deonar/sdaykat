<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Base link -->
  <?php include("inc/base-link.php"); ?>

  <title>Представительства</title>
</head>

<body>
  <?php
  $regions = array(
    [
      'id' => 17,
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
      'id' => 0,
      'title' => "Свердловкая<br>область",
      'img' => 'sverdlovsk',
      'cities' => [
        "Екатеринбург",
        "Пышма",
        "Первоуральск",
        "Реж",
        "Артемовский",
        "Березовский",
        "Сысерть",
        "Арамиль",
        "Нижний Тагил"
      ]
    ],
    [
      'id' => 3,
      'title' => "Челябинская<br>область",
      'img' => 'chelabinsk',
      'cities' => [
        "Челябинск",
        "Магнитогорск",
        "Златоуст",
        "Чебаркуль",
        "Миасс",
        "Копейск",
        "Троицк",
        "Коркино",
        "Октябрьский"
      ]
    ],
    [
      'id' => 10,
      'title' => "Республика<br>Удмуртия",
      'img' => 'udmurtya',
      'cities' => [
        "Ижевск",
        "Воткинск",
        "Чайковский",
        "Сарапул",
        "Нефтекамск",
        "Можга",
        "Игра",
        "Ува"
      ]
    ],
    [
      'id' => 12,
      'title' => "Республика<br>Татарстан",
      'img' => 'tatarstan',
      'cities' => [
        "Казань",
        "Набережные Челны",
        "Нижнекамск",
        "Альметьевск",
        "Бугульма",
        "Зеленодольск",
      ]
    ],
    [
      'id' => -1,
      'title' => "Тюменская<br>область",
      'img' => 'tymen',
      'cities' => [
        "Тюмень",
        "Тобольск",
        "Ишим",
        "Ялуторовск",
        "Заводоуковск",
        "Боровский",
        "Голышманово",
        "Винзили",
        "Сумкино",
        "Богандинский",
      ]
    ],
    [
      'id' => 5,
      'title' => "Республика<br>Башкортостан",
      'img' => 'bashcorstan',
      'cities' => [
        "Благовещенск",
        "Верхнеяркеево",
        "Бугульма",
        "Уфа",
        "Стерлитамак",
        "Салават",
        "Нефтекамск",
        "Белорецк",
        "Ишимбай",
        "Бирск",
        "Чишмы",
      ]
    ],
    [
      'id' => 16,
      'title' => "Нижегородская<br>область",
      'img' => 'nizegorsk',
      'cities' => [
        "Городец",
        "Нижний Новгород",
        "Дзержинск",
        "Арзамас",
        "Саров",
        "Первомайск",
        "Шахунья",
      ]
    ],
    [
      'id' => 7,
      'title' => "Саратовская область",
      'img' => 'saratov',
      'cities' => [
        "Саратов",
        "Энгельс",
        "Балаково",
        "Балашов",
        "Вольск",
        "Пугачев",
        "Ртищево",
        "Пугачев",
      ]
    ],
    [
      'id' => 8,
      'title' => "Самарская<br>область",
      'img' => 'samara',
      'cities' => [
        "Самара",
        "Тольятти",
        "Сызрань",
        "Чапаевск",
        "Отрадный",
      ]
    ],
    [
      'id' => 14,
      'title' => "Пензенская<br>область",
      'img' => 'penza',
      'cities' => [
        "Пенза",
        "Кузнецк",
        "Заречный",
        "Каменка",
        "Нижний Ломов",
        "Городище",
        "Сурск",
      ]
    ],
  );
  ?>
  <?php
  $page = 'representative';
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
        <div class="page-text">Оснащение автомобильными катализаторами позволяет производить автомобили в соответствии с
          современными нормами экологичности.</div>
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
  <script src="//api-maps.yandex.ru/2.1/?load=package.standard,package.geoObjects&amp;lang=ru-RU" type="text/javascript">
  </script>

  <script src="assets/js/map.js"></script>
</body>

</html>