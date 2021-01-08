<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Page link -->
  <link rel="stylesheet" href="assets/libs/slick/slick.css" />

  <!-- Base link -->
  <?php include("inc/base-link.php"); ?>

  <title>О компании</title>
</head>

<body>
  <?php $page = 'about';
  include("header.php"); ?>

  <?php
  $vacancies = array(
    [
      'icon' => 'vacansy-icon-1.svg',
      'title' => "Менеджер выездной оценки",
      'salary' => 'от 40 000 ₽/мес',
      'text' => 'Вакансия подразумевает что работник будет обрабатывать заявки, которые будут приходить ему на телефон (ничего самому искать не надо). ',
    ],
    [
      'icon' => 'vacansy-icon-2.svg',
      'title' => "Менеджер стационарного офиса",
      'salary' => 'от 40 000 ₽/мес',
      'text' => 'Вакансия подразумевает что работник будет обрабатывать заявки, которые будут приходить ему на телефон (ничего самому искать не надо). ',
    ],
    [
      'icon' => 'vacansy-icon-3.svg',
      'title' => "Цеховик",
      'salary' => 'от 40 000 ₽/мес',
      'text' => 'Вакансия подразумевает что работник будет обрабатывать заявки, которые будут приходить ему на телефон (ничего самому искать не надо). ',
    ],
    [
      'icon' => 'vacansy-icon-4.svg',
      'title' => "Промоутер",
      'salary' => 'от 40 000 ₽/мес',
      'text' => 'Вакансия подразумевает что работник будет обрабатывать заявки, которые будут приходить ему на телефон (ничего самому искать не надо). ',
    ],
    [
      'icon' => 'vacansy-icon-5.svg',
      'title' => "Программисты PHP",
      'salary' => 'от 40 000 ₽/мес',
      'text' => 'Вакансия подразумевает что работник будет обрабатывать заявки, которые будут приходить ему на телефон (ничего самому искать не надо). ',
    ],
    [
      'icon' => 'vacansy-icon-5.svg',
      'title' => "Программист JS",
      'salary' => 'от 40 000 ₽/мес',
      'text' => 'Вакансия подразумевает что работник будет обрабатывать заявки, которые будут приходить ему на телефон (ничего самому искать не надо). ',
    ],
    [
      'icon' => 'vacansy-icon-5.svg',
      'title' => "QA-специалист",
      'salary' => 'от 40 000 ₽/мес',
      'text' => 'Вакансия подразумевает что работник будет обрабатывать заявки, которые будут приходить ему на телефон (ничего самому искать не надо). ',
    ],
    [
      'icon' => 'vacansy-icon-6.svg',
      'title' => "Менеджер по продажам",
      'salary' => 'от 40 000 ₽/мес',
      'text' => 'Вакансия подразумевает что работник будет обрабатывать заявки, которые будут приходить ему на телефон (ничего самому искать не надо). ',
    ],
  );
  ?>



  <main class="main main_about-page">
    <div class="container">
      <h1 class="main-title">О компании<br />SDAYKAT</h1>
    </div>
  </main>

  <section class="about-company section-wrapper">
    <div class="container">
      <div class="row about-company__row-statistics section-wrapper pt-0">
        <div class="col-sm-12 col-lg-6">
          <div class="about-company__histoty">
            <p>Еще 15 лет назад об электромобилях никто не говорил всерьез, но сегодня уже каждый знает, что это, а
              многие готовы приобрести за любые деньги.</p>
          </div>
          <div class="about-company__text">
            <p>Устройство, обеспечивающее чистоту выхлопных газов двигателя внутреннего сгорания, находится под капотом
              автомобиля и называется каталитическим нейтрализатором / катколлектором / катализатором. Внешняя оболочка
              состоит из металла, а внутри катализатора располагается огромное количество сот. Примерно 60 микроканалов
              на 1 квадратный сантиметр функционируют ради фильтрации токсичных выбросов, защищая окружающую среду.</p>
          </div>
        </div>
        <div class="col-sm-12 col-lg-6">
          <div class="about-company__statistics">
            <div class="about-company__quantity-people">3 000 <span>постоянных клиентов</span></div>
            <div class="about-company__statistics-block">
              <div class="about-company__statistics-item">250 тонн <span>ежемесячный сбор сырья</span></div>
              <div class="about-company__statistics-item">12 партнёров <span>по всей стране</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="row about-company__row-target section-wrapper pb-0" id="mission">
        <div class="col-12 col-sm-6 col-xl-6">
          <div class="about-company__target">
            <div class="about-company__target-title">Наша миссия</div>
            <div class="about-company__target-text">Сделать рынок каталитического сырья более простым и понятным
              обывателям и предложить самые лояльные и привлекательные условия по сотрудничеству.</div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-6">
          <div class="about-company__target">
            <div class="about-company__target-title">Наша миссия</div>
            <div class="about-company__target-text">Сделать рынок каталитического сырья более простым и понятным
              обывателям и предложить самые лояльные и привлекательные условия по сотрудничеству.</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="about-team section-wrapper" id="about-team">
    <div class="container">
      <h2 class="about-section__title primary-title">
        Команда SDAYKAT <br />
        в Челябинске
      </h2>
      <div class="row about-team__row">
        <div class="col-sm-12 col-md-6 col-lg-3">
          <div class="about-team__item">
            <div class="about-team__item-photo">
              <img src="assets/img/team/team-1.png" alt="" />
            </div>
            <div class="about-team__item-name">Имя Фамилия</div>
            <div class="about-team__item-desc">Менеджер выездной оценки</div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
          <div class="about-team__item">
            <div class="about-team__item-photo">
              <img src="assets/img/team/team-2.png" alt="" />
            </div>
            <div class="about-team__item-name">Имя Фамилия</div>
            <div class="about-team__item-desc">Менеджер выездной оценки</div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
          <div class="about-team__item">
            <div class="about-team__item-photo">
              <img src="assets/img/team/team-3.png" alt="" />
            </div>
            <div class="about-team__item-name">Имя Фамилия</div>
            <div class="about-team__item-desc">Менеджер выездной оценки</div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
          <div class="about-team__item">
            <div class="about-team__item-photo">
              <img src="assets/img/team/team-4.png" alt="" />
            </div>
            <div class="about-team__item-name">Имя Фамилия</div>
            <div class="about-team__item-desc">Менеджер выездной оценки</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="steps about-company__garant section-wrapper">
    <div class="container">
      <div class="steps__body">
        <h2 class="about-section__title primary-title">Наши гарантии</h2>
        <ul class="steps__list">
          <li class="steps__item">
            <div class="steps__item-num">01</div>
            <div class="steps__item-title">Честные выплаты до 75% по LME</div>
            <div class="steps__item-text">Собственная CRM-система, интегрированная с LME и ЦБ РФ, расчитывающая
              стоимость по курсу предыдущего дня.</div>
            <a href="https://www.lme.com/" target="_blank" class="steps__item-link link">проверить НА lme.COM <img
                src="assets/img/icons/icon-arrow-box.svg" alt="" /></a>
          </li>
          <li class="steps__item">
            <div class="steps__item-num">02</div>
            <div class="steps__item-title">Честные показания приборов</div>
            <div class="steps__item-text">Наши клиенты получают качественную бесплатную услугу, а мы — благодарные
              отзывы, дополнительный пиар и еще больше клиентов.</div>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <section class="vacancy" id="vacancy">
    <div class="container">
      <h2 class="about-section__title primary-title">
        Актуальные вакансии <br />
        в Челябинске
      </h2>
      <div class="row vacancy-row">
        <?php foreach ($vacancies as $key => $vacancy) { ?>
        <div class="col-sm-12 col-md-6">
          <div class="vacancy-item">
            <img src="assets/img/icons/vacansy/<?php echo ($vacancy['icon']) ?>" class="vacancy-item__icon" alt="" />
            <h3 class="vacancy-item__title h3"><?php echo ($vacancy['title']) ?></h3>
            <div class="vacancy-item__price"><?php echo ($vacancy['salary']) ?></div>
            <div class="vacancy-item__text"><?php echo ($vacancy['text']) ?></div>
            <a href="#popup-vacancy" class="vacancy-item__link link popup">откликнуться на вакансию</a>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>

  <!-- Popup vacansy -->
  <div id="popup-vacancy" class="popup-vacancy custom-popup mfp-hide">
    <div class="popup-body">
      <h3 class="popup-secondery__title">
        Менеджер выездной <br />
        оценки
      </h3>
      <div class="popup-vacancy__price">от 40 000 ₽/мес</div>
      <div class="popup-desc">
        Менеджер свяжется с вами <br />
        в ближайшее время
      </div>
      <form class="popup-form main-form main-form__light">
        <div class="main-form__wrapper">
          <label class="main-form__label main-form__label_phone">
            <span class="main-form__label-error" style="display:none;">некорректный номер</span>
            <input class="main-form__phone mask-phone" type="tel" name="phone" placeholder="+7 (___) ___-__-__" />
          </label>
          <div class="main-form__btn">
            <a href="#popup-thank" class="main-form__submit btn btn_hover border-gray-btn popup" type="button">отправить
              отклик</a>
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
  <!-- Popup vacancy end-->

  <!-- popup-thank -->
  <div id="popup-thank" class="popup-thank custom-popup mfp-hide">
    <div class="popup-body">
      <img src="assets/img/icons/thank-icon.svg" alt="" class="popup-img__thank" />
      <div class="popup-primary__title">Спасибо!</div>
      <div class="popup-desc">Ваш отклик отправлен</div>
    </div>
  </div>
  <!-- popup-thank end-->

  <?php include("footer.php"); ?>
</body>

</html>