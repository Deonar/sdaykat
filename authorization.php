<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Page link -->

  <!-- Base link -->
  <?php include("inc/base-link.php"); ?>

  <title>Профиль</title>
</head>

<body>
  <?php
  $page = 'authorization';
  $header_class = 'header-light';
  include("header.php");
  ?>

  <main class="page__authorization header-top__indent">
    <section class="authorization entry-cabinet section-wrapper pt-0">
      <div class="container">
        <div class="entry-cabinet__body">
          <div id="entry-cabinet__entry" class="entry-cabinet__entry">
            <img src="assets/img/icons/requirement-9.svg" alt="" class="entry-cabinet__entry-img" />
            <form class="authorization__form main-form">
              <h3 class="authorization__form-title h3">
                Вход в личный <br />
                кабинет клиента
              </h3>
              <div class="authorization__form-text">
                Для входа в личный кабинет, введите <br />
                Ваше номер телефона
              </div>
              <div class="main-form__wrapper">
                <label class="main-form__label main-form__label_phone">
                  <span class="main-form__label-error">некорректный номер</span>
                  <input class="main-form__phone mask-phone" type="tel" name="phone" placeholder="+7 (___) ___-__-__" />
                </label>
                <div class="main-form__btn">
                  <button id="entry-account" class="authorization__btn btn btn_hover" type="button">войти в
                    аккаунт</button>

                  <a href="/profile.php#profile-tab" id="registration-account" class="authorization__btn authorization__btn-link  btn open-profile-js" data-tab-profile="profile-tab" type="button">Зарегистрироваться</a>
                </div>
              </div>
            </form>
          </div>
          <form action="#" id="authorization-confirm" class="authorization-confirm" style="display: none">
            <button id="change-number" class="authorization-confirm__change-number" type="button">Изменить
              номер</button>
            <div class="authorization-confirm__body">
              <p class="authorization-confirm__title">
                Введите код из СМС, <br />
                oтправленный на ваш номер
              </p>
              <div class="authorization-confirm__input-wrap">
                <input id="otc-1" autocomplete="one-time-code" name="code_number" pattern="[0-9]*" required="" class="authorization-confirm__input" maxlength="1" type="number" inputtype="numeric" placeholder="|">
                <input min="0" max="9" name="code_number" pattern="[0-9]*" required="" class="authorization-confirm__input" maxlength="1" type="number" inputtype="numeric" placeholder="|"/>
                <input min="0" max="9" name="code_number" pattern="[0-9]*" required="" class="authorization-confirm__input" maxlength="1" type="number" inputtype="numeric" placeholder="|"/>
                <input min="0" max="9" name="code_number" pattern="[0-9]*" required="" class="authorization-confirm__input" maxlength="1" type="number" inputtype="numeric" placeholder="|"/>
              </div>
              <button type="submit" class="authorization-confirm__btn btn btn_hover primary-btn">Подтвердить</button>
              <span id="authorization-confirm__sms" class="authorization-confirm__sms">Отправить повторное смс
                через:</span>
              <span id="authorization-confirm__sms-timer" class="authorization-confirm__sms-timer ">00:<span class="authorization-confirm__sms-timer seconds"> 15</span></span>
              <span id="send-sms" id="authorization-confirm__sms-send" class="authorization-confirm__sms-send" style="display: none">Отправить смс</span>
            </div>
          </form>
          <div class="entry-cabinet__conditions">
            <h2 class="authorization__title primary-title">Зачем нужен личный кабинет?</h2>
            <div class="requirement-list">
              <div href="#" class="requirement-item">
                <img src="assets/img/icons/requirement-10.svg" alt="" class="requirement-item__icon" />
                <div class="requirement-item__title">Доступ онлайн 24/7</div>
                <div class="requirement-item__text">Получайте моментальную оценку сырья из личного кабинета, управляйте
                  своим балансом удаленно.</div>
              </div>
              <div href="#" class="requirement-item">
                <img src="assets/img/icons/requirement-11.svg" alt="" class="requirement-item__icon" />
                <div class="requirement-item__title">Аналитика</div>
                <div class="requirement-item__text">Подробная аналитика по всем сделкам, выгрузка необходимой
                  документации.</div>
              </div>
              <div href="#" class="requirement-item">
                <img src="assets/img/icons/requirement-10.svg" alt="" class="requirement-item__icon" />
                <div class="requirement-item__title">Доступ онлайн 24/7</div>
                <div class="requirement-item__text">Получайте моментальную оценку сырья из личного кабинета, управляйте
                  своим балансом удаленно.</div>
              </div>
              <div href="#" class="requirement-item">
                <img src="assets/img/icons/requirement-11.svg" alt="" class="requirement-item__icon" />
                <div class="requirement-item__title">Аналитика</div>
                <div class="requirement-item__text">Катализаторы не должны быть влажными, допускается естественная
                  влажность 1-2%</div>
              </div>
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
              <div class="bonuses-item__text">Каждую 10-ю сделку мы возвращаем ретро-бонусы в размере 5% от общей суммы
                этих сделок.</div>
            </li>
            <li class="bonuses-item">
              <div class="bonuses-item__percent">5%</div>
              <div class="bonuses-item__title">Ретро-бонусы</div>
              <div class="bonuses-item__text">Каждую 10-ю сделку мы возвращаем ретро-бонусы в размере 5% от общей суммы
                этих сделок.</div>
            </li>
            <li class="bonuses-item">
              <div class="bonuses-item__percent">10%</div>
              <div class="bonuses-item__title">Ретро-бонусы</div>
              <div class="bonuses-item__text">За каждого приведенного друга через личный кабинет мы начисляем Вам 10% от
                суммы сделки.</div>
            </li>
          </ul>
          <div class="bonuses-options">
            <div class="bonuses-offer">
              <div class="bonuses-offer__title">Постоянным оптовым клиентам готовы предложить индивидуальные условия
                сотрудничества</div>
              <a href="/loyalty-program.php" class="bonuses-offer__link">узнать больше</a>
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
  </main>

  <?php include("footer.php"); ?>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
  <script src="assets/js/profile.js"></script>
</body>

</html>