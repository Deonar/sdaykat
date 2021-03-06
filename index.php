<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

  <!-- Page link -->
  <link rel="stylesheet" href="assets/libs/slick/slick.css" />

  <!-- Base link -->
  <?php include("inc/base-link.php"); ?>

  <title>Главная</title>
</head>

<body>
  <?php $page = 'home';
  include("header.php"); ?>

  <main class="main main_front-page">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-8">
          <h1 class="main-title">
            Получите до <b class="text-orange">75 000₽</b><br />
            за старый катализатор<br /><b class="text-orange">в Челябинске</b>
          </h1>
          <!-- Phone form  -->
          <form class="main-form" action="#">
            <div class="main-form__wrapper">
              <label class="main-form__label main-form__label_phone">
                <span class="main-form__label-error">некорректный номер</span>
                <input class="main-form__phone mask-phone" type="tel" name="phone" id="client-phone" placeholder="+7 (___) ___-__-__" />
              </label>
              <div class="main-form__btn">
                <button type="submit" data-target="#popup-thank-specialist" id="action-btn" class="main-form__submit btn btn_hover primary-btn">Продать катализатор</button>
              </div>
            </div>
            <label class="main-form__policy">
              <input type="checkbox" checked="" id="check" class="main-form__checkbox" />
              <span class="main-form__checkbox-box"></span>
              <span class="main-form__text small-text"> Я ознакомлен c <a href="/privacy-policy.php">политикой
                  конфиденциальности</a></span>
            </label>
          </form>
          <!-- Phone form end -->

          <div class="d-none d-lg-block">
            <div class="separater-line opacity-3 mt-30 mb-20"></div>
            <div class="info-block">
              <div class="info-block__item">
                <div class="info-block__icon opacity-7 mb-10">
                  <img src="assets/img/icons/icon-up-rub.svg" alt="" />
                </div>
                <h4 class="info-block__title mb-10">Высокие цены</h4>
                <p class="opacity-7">
                  Выплачиваем до 75 000 ₽<br />
                  за старый катализатор
                </p>
              </div>
              <div class="info-block__item">
                <div class="info-block__icon opacity-7 mb-10">
                  <img src="assets/img/icons/icon-percent.svg" alt="" />
                </div>
                <h4 class="info-block__title mb-10">Программа лояльности</h4>
                <p class="opacity-7">
                  Выплачиваем до 75 000 ₽<br />
                  за старый катализатор
                </p>
              </div>
              <div class="info-block__item">
                <div class="info-block__icon opacity-7 mb-10">
                  <img src="assets/img/icons/icon-filial.svg" alt="" />
                </div>
                <h4 class="info-block__title mb-10">3 точки в Челябинске</h4>
                <p class="opacity-7">
                  Выплачиваем до 75 000 ₽<br />
                  за старый катализатор
                </p>
              </div>
            </div>
          </div>

        </div>
        <div class="d-none d-lg-block col-12 col-lg-4">
          <?php include("templates/curs-metal.php"); ?>
        </div>
      </div>
    </div>
  </main>

  <section class="section-wrapper catalysts">
    <div class="container">
      <h2 class="h2 title">
        Какие типы<br />
        катализаторов скупаем?
      </h2>
      <div class="catalysts__wrapper">
        <a href="/single-price-oftype.php" class="catalysts__item">
          <div class="catalysts__img">
            <img src="assets/img/catalysts/ceramics.png" alt="" />
          </div>
          <h4 class="catalysts__title">Керамический фильтр</h4>
          <p class="catalysts__text">Оставляете заявку. Вместе выбираем подходящие время и дату приезда.</p>
          <div class="catalysts__link link"> Узнать стоимость </div>
        </a>
        <a href="/single-price-oftype.php" class="catalysts__item">
          <div class="catalysts__img">
            <img src="assets/img/catalysts/filter.png" alt="" />
          </div>
          <h4 class="catalysts__title">Сажевый фильтр</h4>
          <p class="catalysts__text">Оставляете заявку. Вместе выбираем подходящие время и дату приезда.</p>
          <div class="catalysts__link link"> Узнать стоимость </div>
        </a>
        <a href="/single-price-oftype.php" class="catalysts__item">
          <div class="catalysts__img">
            <img src="assets/img/catalysts/import.png" alt="" />
          </div>
          <h4 class="catalysts__title">Металл импортный</h4>
          <p class="catalysts__text">Оставляете заявку. Вместе выбираем подходящие время и дату приезда.</p>
          <div class="catalysts__link link"> Узнать стоимость </div>
        </a>
        <a href="/single-price-oftype.php" class="catalysts__item">
          <div class="catalysts__img">
            <img src="assets/img/catalysts/native.png" alt="" />
          </div>
          <h4 class="catalysts__title">Металл отечественный</h4>
          <p class="catalysts__text">Оставляете заявку. Вместе выбираем подходящие время и дату приезда.</p>
          <div class="catalysts__link link"> Узнать стоимость </div>
        </a>
      </div>
    </div>
  </section>

  <?php include("templates/brands.php"); ?>

  <section class="section-wrapper delete-catalysts">
    <div class="container">
      <h2 class="h2 title d-block d-md-none mb-30">Когда нужно удалять<br />катализатор?</h2>
      <div class="delete-catalysts__wrapper">
        <h2 class="h2 title d-none d-md-block">Когда нужно удалять<br />катализатор?</h2>
        <div class="row">
          <div class="col-12 col-sm-6 col-lg-4 mb-30">
            <div class="delete-catalysts__icon mb-20">
              <img src="assets/img/icons/icon-sky.svg" alt="" />
            </div>
            <p class="delete-catalysts__text">Уменьшается приемистость мотора, появление ядовитого<br />запаха выхлопных
              газов</p>
          </div>
          <div class="col-12 col-sm-6 col-lg-4 mb-30">
            <div class="delete-catalysts__icon mb-20">
              <img src="assets/img/icons/icon-engine.svg" alt="" />
            </div>
            <p class="delete-catalysts__text">Загорается лампочка Check Engine, появляются ошибки Р0430</p>
          </div>
          <div class="col-12 col-sm-6 col-lg-4 mb-30">
            <div class="delete-catalysts__icon mb-20">
              <img src="assets/img/icons/icon-vibration.svg" alt="" />
            </div>
            <p class="delete-catalysts__text">Возникает вибрация<br />под водительским сидением</p>
          </div>
          <div class="col-12 col-sm-6 col-lg-4 mb-30">
            <div class="delete-catalysts__icon mb-20">
              <img src="assets/img/icons/icon-tachometer.svg" alt="" />
            </div>
            <p class="delete-catalysts__text">"Плаванье" стрелки тахометра<br />на холостом ходу</p>
          </div>
          <div class="col-12 col-sm-6 col-lg-4 mb-30">
            <div class="delete-catalysts__icon mb-20">
              <img src="assets/img/icons/icon-transmission.svg" alt="" />
            </div>
            <p class="delete-catalysts__text">Автоматическая коробка передач,<br />неровно переключает скорости</p>
          </div>
          <div class="col-12 col-sm-6 col-lg-4 mb-30">
            <div class="delete-catalysts__icon mb-20">
              <img src="assets/img/icons/icon-fuel.svg" alt="" />
            </div>
            <p class="delete-catalysts__text">Расход топлива<br />увеличился</p>
          </div>
        </div>
        <a href="/delete-catalysts.php" class="btn btn_arrow light-blue-btn mt-30">Узнать больше
          <span class="arrow-move">
            <span class="arrow-move-clip">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background: new 0 0 512 512" xml:space="preserve">
                <path d="M506.134,241.843c-0.006-0.006-0.011-0.013-0.018-0.019l-104.504-104c-7.829-7.791-20.492-7.762-28.285,0.068    c-7.792,7.829-7.762,20.492,0.067,28.284L443.558,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h423.557    l-70.162,69.824c-7.829,7.792-7.859,20.455-0.067,28.284c7.793,7.831,20.457,7.858,28.285,0.068l104.504-104    c0.006-0.006,0.011-0.013,0.018-0.019C513.968,262.339,513.943,249.635,506.134,241.843z">
                </path>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background: new 0 0 512 512" xml:space="preserve">
                <path d="M506.134,241.843c-0.006-0.006-0.011-0.013-0.018-0.019l-104.504-104c-7.829-7.791-20.492-7.762-28.285,0.068    c-7.792,7.829-7.762,20.492,0.067,28.284L443.558,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h423.557    l-70.162,69.824c-7.829,7.792-7.859,20.455-0.067,28.284c7.793,7.831,20.457,7.858,28.285,0.068l104.504-104    c0.006-0.006,0.011-0.013,0.018-0.019C513.968,262.339,513.943,249.635,506.134,241.843z">
                </path>
              </svg>
            </span>
          </span>
        </a>
      </div>
    </div>
  </section>

  <section class="section-wrapper pass-material">
    <div class="container">
      <div class="pass-material__header mb-30">
        <h2 class="h2 title">Как сдать<br />старый катализатор?</h2>
      </div>
      <div class="row">
        <div class="col-12 col-sm-6 col-xl-4 mb-30">
          <div class="pass-material__item pass-material__item_assessment">
            <img src="assets/img/pass-assessment.png" alt="#" />
            <h4 class="h4 pass-material__title">Выездная оценка</h4>
            <p class="pass-material__text">Каждую 10-ю сделку<br />мы возвращаем ретро-бонусы в размере 5% от общей.</p>
            <div class="pass-material__btn">
              <a href="#popup-form-manager" class="btn btn_small btn_hover orange-btn popup"> Заказать выезд менеджера
              </a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-4 mb-30">
          <div class="pass-material__item pass-material__item_offices">
            <img src="assets/img/pass-offices.png" alt="#" />
            <h4 class="h4 pass-material__title">Стационарные офисы</h4>
            <p class="pass-material__text">
              Каждую 10-ю сделку<br />
              мы возвращаем ретро-бонусы в размере 5% от общей.
            </p>
            <div class="pass-material__btn">
              <a href="#map" class="btn btn_small btn_hover light-blue-btn scrollto">Показать адреса</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-4 mb-30">
          <div class="pass-material__item pass-material__item_courier">
            <img src="assets/img/pass-courier.png" alt="#" />
            <h4 class="h4 pass-material__title">Курьерская служба</h4>
            <p class="pass-material__text">
              Каждую 10-ю сделку<br />
              мы возвращаем ретро-бонусы в размере 5% от общей.
            </p>
            <div class="pass-material__btn">
              <a href="#popup-form-courier" class="btn btn_small btn_hover blue-btn popup">Вызвать курьера</a>
            </div>
          </div>
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
            <p class="big-text mb-20">Еще 15 лет назад об электромобилях никто не говорил всерьез, но сегодня уже каждый
              знает, что это, а многие готовы приобрести за любые деньги.</p>
            <p class="small-text mb-20 opacity-7">Еще 15 лет назад об электромобилях никто не говорил всерьез, но
              сегодня уже каждый знает, что это, а многие готовы приобрести за любые деньги.</p>
          </div>
          <div class="about-block__btn">
            <a href="/about.php#vacancy" class="about-block__button btn ">4 вакансии</a>
            <a href="/about.php" class="btn transparent-btn btn_arrow">Узнать больше о компании
              <span class="arrow-move">
                <span class="arrow-move-clip">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background: new 0 0 512 512" xml:space="preserve">
                    <path d="M506.134,241.843c-0.006-0.006-0.011-0.013-0.018-0.019l-104.504-104c-7.829-7.791-20.492-7.762-28.285,0.068    c-7.792,7.829-7.762,20.492,0.067,28.284L443.558,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h423.557    l-70.162,69.824c-7.829,7.792-7.859,20.455-0.067,28.284c7.793,7.831,20.457,7.858,28.285,0.068l104.504-104    c0.006-0.006,0.011-0.013,0.018-0.019C513.968,262.339,513.943,249.635,506.134,241.843z">
                    </path>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background: new 0 0 512 512" xml:space="preserve">
                    <path d="M506.134,241.843c-0.006-0.006-0.011-0.013-0.018-0.019l-104.504-104c-7.829-7.791-20.492-7.762-28.285,0.068    c-7.792,7.829-7.762,20.492,0.067,28.284L443.558,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h423.557    l-70.162,69.824c-7.829,7.792-7.859,20.455-0.067,28.284c7.793,7.831,20.457,7.858,28.285,0.068l104.504-104    c0.006-0.006,0.011-0.013,0.018-0.019C513.968,262.339,513.943,249.635,506.134,241.843z">
                    </path>
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

  <section class="features">
    <div class="container">
      <div class="features__header">
        <h2 class="h2 title">Ключевые особенности</h2>
      </div>
      <div class="row">
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="features__img">
            <img src="assets/img/icons/icon-map.svg" alt="#" />
          </div>
          <h4 class="features__title">Присутствие в 16 регионах страны</h4>
          <p class="features__text">
            Проводим необходимые работы<br />
            для удаления катализатора.
          </p>
        </div>

        <div class="col-12 col-sm-6 col-lg-3">
          <div class="features__img">
            <img src="assets/img/icons/icon-people.svg" alt="#" />
          </div>
          <h4 class="features__title">
            Личный<br />
            кабинет клиента
          </h4>
          <p class="features__text">
            При наличии качественного<br />
            содержания возможна доплата<br />
            на месте.
          </p>
        </div>

        <div class="col-12 col-sm-6 col-lg-3">
          <div class="features__img">
            <img src="assets/img/icons/icon-percent-cyan.svg" alt="#" />
          </div>
          <h4 class="features__title">
            Программа<br />
            лояльности
          </h4>
          <p class="features__text">
            Оставляете заявку. Вместе<br />
            выбираем подходящие время<br />
            и дату приезда.
          </p>
        </div>

        <div class="col-12 col-sm-6 col-lg-3">
          <div class="features__img">
            <img src="assets/img/icons/icon-metal-cyan.svg" alt="#" />
          </div>
          <h4 class="features__title">Честные<br />выплаты по LME</h4>
          <p class="features__text">
            Оставляете заявку. Вместе<br />
            выбираем подходящие время<br />
            и дату приезда.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="section-wrapper reviews">
    <div class="container">
      <h2 class="h2 title">Отзывы</h2>
      <div class="reviews__wrapper" id="reviews-slider">
        <div class="reviews-slide__item">
          <div class="reviews__item">
            <div class="reviews__top">
              <div>
                <h4>Николай</h4>
                <span class="small-text">г. Уфа</span>
              </div>
              <ul class="stars-rating__wrapper">
                <li class="stars-rating__item stars-rating_on"></li>
                <li class="stars-rating__item stars-rating_on"></li>
                <li class="stars-rating__item stars-rating_on"></li>
                <li class="stars-rating__item stars-rating_on"></li>
                <li class="stars-rating__item stars-rating_off"></li>
              </ul>
            </div>
            <p class="reviews__text">Пункты приемы находятся в следующих городах: Казань, Челябинск, Уфа. Вы всегда
              можете самостоятельно сдать сырьё, адреса и время работы...</p>
            <div class="reviews__bottom">
              <a href="#" class="link">Прочитать весь отзыв</a>
              <div class="reviews__icon">
                <img src="assets/img/reviews/yandex.png" alt="#" />
              </div>
            </div>
          </div>
        </div>
        <div class="reviews-slide__item">
          <div class="reviews__item">
            <div class="reviews__top">
              <div>
                <h4>Николай</h4>
                <span class="small-text">г. Уфа</span>
              </div>
              <ul class="stars-rating__wrapper">
                <li class="stars-rating__item stars-rating_on"></li>
                <li class="stars-rating__item stars-rating_on"></li>
                <li class="stars-rating__item stars-rating_on"></li>
                <li class="stars-rating__item stars-rating_on"></li>
                <li class="stars-rating__item stars-rating_off"></li>
              </ul>
            </div>
            <p class="reviews__text">Пункты приемы находятся в следующих городах: Казань, Челябинск, Уфа. Вы всегда
              можете самостоятельно сдать сырьё, адреса и время работы...</p>
            <div class="reviews__bottom">
              <a href="#" class="link">Прочитать весь отзыв</a>
              <div class="reviews__icon">
                <img src="assets/img/reviews/yandex.png" alt="#" />
              </div>
            </div>
          </div>
        </div>
        <div class="reviews-slide__item">
          <div class="reviews__item">
            <div class="reviews__top">
              <div>
                <h4>Николай</h4>
                <span class="small-text">г. Уфа</span>
              </div>
              <ul class="stars-rating__wrapper">
                <li class="stars-rating__item stars-rating_on"></li>
                <li class="stars-rating__item stars-rating_on"></li>
                <li class="stars-rating__item stars-rating_on"></li>
                <li class="stars-rating__item stars-rating_on"></li>
                <li class="stars-rating__item stars-rating_off"></li>
              </ul>
            </div>
            <p class="reviews__text">Пункты приемы находятся в следующих городах: Казань, Челябинск, Уфа. Вы всегда
              можете самостоятельно сдать сырьё, адреса и время работы...</p>
            <div class="reviews__bottom">
              <a href="#" class="link">Прочитать весь отзыв</a>
              <div class="reviews__icon">
                <img src="assets/img/reviews/yandex.png" alt="#" />
              </div>
            </div>
          </div>
        </div>
        <div class="reviews-slide__item">
          <div class="reviews__item">
            <div class="reviews__top">
              <div>
                <h4>Николай</h4>
                <span class="small-text">г. Уфа</span>
              </div>
              <ul class="stars-rating__wrapper">
                <li class="stars-rating__item stars-rating_on"></li>
                <li class="stars-rating__item stars-rating_on"></li>
                <li class="stars-rating__item stars-rating_on"></li>
                <li class="stars-rating__item stars-rating_on"></li>
                <li class="stars-rating__item stars-rating_off"></li>
              </ul>
            </div>
            <p class="reviews__text">Пункты приемы находятся в следующих городах: Казань, Челябинск, Уфа. Вы всегда
              можете самостоятельно сдать сырьё, адреса и время работы...</p>
            <div class="reviews__bottom">
              <a href="#" class="link">Прочитать весь отзыв</a>
              <div class="reviews__icon">
                <img src="assets/img/reviews/yandex.png" alt="#" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-wrapper">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center mb-30">
        <h2 class="h2 title">Журнал Sdaykat</h2>
        <a href="/journal.php" class="link"> все статьи </a>
      </div>
      <div class="row article">
        <a href="/single-article.php" class="col-12 col-sm-4 article__item">
          <div class="article__img">
            <span class="article__label article__label_white"> Каталитические системы </span>
            <img src="assets/img/article/article_1.jpg" class="img-responsive" alt="Каталитические системы" />
          </div>
          <h4 class="article__title">Сколько стоит старый катализатор?</h4>
          <p class="article__text">В пунктах приема металлолома не принимают катализаторы из-за их опасности.</p>
          <div class="article__bottom">
            <span class="article__date">12.02.2020</span>
            <span class="article__views"><img src="assets/img/icons/icon-views.svg" alt="" />500</span>
          </div>
        </a>
        <a href="/single-article.php" class="col-12 col-sm-4 article__item">
          <div class="article__img">
            <span class="article__label article__label_blue"> Каталитические системы </span>
            <img src="assets/img/article/article_2.jpg" class="img-responsive" alt="Каталитические системы" />
          </div>
          <h4 class="article__title">Сколько стоит старый катализатор?</h4>
          <p class="article__text">В пунктах приема металлолома не принимают катализаторы из-за их опасности.</p>
          <div class="article__bottom">
            <span class="article__date">12.02.2020</span>
            <span class="article__views"><img src="assets/img/icons/icon-views.svg" alt="" />500</span>
          </div>
        </a>
        <a href="/single-article.php" class="col-12 col-sm-4 article__item">
          <div class="article__img">
            <span class="article__label article__label_orange"> Каталитические системы </span>
            <img src="assets/img/article/article_3.jpg" class="img-responsive" alt="Каталитические системы" />
          </div>
          <h4 class="article__title">Сколько стоит старый катализатор?</h4>
          <p class="article__text">В пунктах приема металлолома не принимают катализаторы из-за их опасности.</p>
          <div class="article__bottom">
            <span class="article__date">12.02.2020</span>
            <span class="article__views"><img src="assets/img/icons/icon-views.svg" alt="" />500</span>
          </div>
        </a>
      </div>
    </div>
  </section>

  <?php include("templates/map.php"); ?>

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

  <!-- popup-form manager -->
  <div id="popup-form-manager" class="popup-form-calculator custom-popup mfp-hide">
    <div class="popup-body">
      <h3 class="popup-primary__title">Выездная оценка</h3>

      <div class="popup-desc">Отправьте заявку для выезда менеджера. Специалист выполнит необходимые замеры для расчёта
        точной стоимости катализатора.</div>
      <form class="popup-form main-form main-form__light" action="#">
        <div class="main-form__wrapper">
          <label class="main-form__label main-form__label_phone">
            <span class="main-form__label-error">некорректный номер</span>
            <input class="main-form__phone mask-phone" type="tel" name="phone" placeholder="+7 (___) ___-__-__" />
          </label>
          <div class="main-form__btn">
            <button  type="submit" data-target="#popup-thank-specialist" class="main-form__submit btn btn_hover orange-btn">вызвать специалиста</button>
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
  <!-- popup-form manager end-->

  <!-- popup-thank-curyer -->
  <div id="popup-thank-curyer" class="popup-thank-specialist custom-popup mfp-hide">
    <div class="popup-body">
      <div class="popup-primary__title">Спасибо!</div>
      <div class="popup-desc">Не забудьте приложить копию паспорта к посылке.</div>
      <img src="assets/img/pasport.png" alt="#" class="popup-img__thank-curyer" />
    </div>
  </div>
  <!-- popup-thank end-->

  <!-- popup-form curyer -->
  <div id="popup-form-courier" class="popup-form-calculator custom-popup mfp-hide">
    <div class="popup-body">
      <h3 class="popup-primary__title">Выезд курьера</h3>

      <div class="popup-desc">Отправьте заявку для выезда курьера. Мы свяжемся с вами для уточнения информации.</div>
      <form class="popup-form main-form main-form__light" action="#">
        <div class="main-form__wrapper">
          <label class="main-form__label main-form__label_phone">
            <span class="main-form__label-error">некорректный номер</span>
            <input class="main-form__phone mask-phone" type="tel" name="phone" placeholder="+7 (___) ___-__-__" />
          </label>
          <div class="main-form__btn">
            <button type="submit" data-target="#popup-thank-curyer" class="main-form__submit btn btn_hover blue-btn">вызвать специалиста</button>
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
  <!-- popup-form curyer end-->

  <?php include("footer.php"); ?>
  <script src="//api-maps.yandex.ru/2.1/?load=package.standard,package.geoObjects&amp;lang=ru-RU" type="text/javascript">
  </script>

  <script src="assets/js/map.js"></script>
</body>

</html>