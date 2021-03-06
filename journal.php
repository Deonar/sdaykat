<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Base link -->
  <?php include("inc/base-link.php"); ?>

  <title>Журнал</title>
</head>

<body>

  <?php 
  $page = "journal";
  $header_class = 'header-light';
  include("header.php"); 
  ?>

  <div class="journal-page header-top__indent">
    <section class="page-head">
      <div class="container">
        <h1 class="page-title">Журнал SDAYKAT</h1>
        <div class="page-text">Оснащение автомобильными катализаторами позволяет производить автомобили в соответствии с
          современными нормами экологичности.</div>
      </div>
    </section>

    <section class="popular-article article-section">
      <div class="container">
        <h3 class="article-section__title primary-title__h3 mb-30">Популярные статьи</h3>
        <div class="row article article__big-items">
          <div class="col-12 col-sm-6">
            <a href="/single-article.php" class="article__item">
              <div class="article__item-img">
                <img src="assets/img/article/article_4.jpg" alt="Каталитические системы" />
              </div>
              <span class="article__label article__label_white"> Каталитические системы </span>
              <div class="article__item-bottom">
                <h2 class="article__item-title primary-title primary-title__light">Сколько стоит старый катализатор?
                </h2>
                <p class="article__text">В пунктах приема металлолома не принимают катализаторы из-за их опасности.</p>
                <div class="article__bottom">
                  <span class="article__date">12.02.2020</span>
                  <span class="article__views">
                    <svg>
                      <use xlink:href="assets/img/icons/icon-views-light.svg#icon-views"></use>
                    </svg>
                    500
                  </span>
                </div>
              </div>
            </a>
          </div>
          <div class="col-12 col-sm-6">
            <a href="/single-article.php" class="article__item">
              <div class="article__item-img">
                <img src="assets/img/article/article_5.jpg" alt="Каталитические системы" />
              </div>
              <span class="article__label article__label_blue"> Автомобильная отрасль </span>
              <div class="article__item-bottom">
                <h2 class="article__item-title primary-title primary-title__light">Сколько стоит старый катализатор?
                </h2>
                <p class="article__text">В пунктах приема металлолома не принимают катализаторы из-за их опасности.</p>
                <div class="article__bottom">
                  <span class="article__date">12.02.2020</span>
                  <span class="article__views">
                    <svg>
                      <use xlink:href="assets/img/icons/icon-views-light.svg#icon-views"></use>
                    </svg>
                    500
                  </span>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="row no-gutters article article__small-items">
          <div class="col-12 col-sm-4">
            <a href="/single-article.php" class="article__item">
              <span class="article__label article__label_black">Драгоценные металлы</span>
              <h4 class="article__item-title h4">Сколько стоит старый катализатор?</h4>
              <p class="article__text">В пунктах приема металлолома не принимают катализаторы из-за их опасности.</p>
              <div class="article__bottom">
                <span class="article__date">12.02.2020</span>
                <span class="article__views"><img src="assets/img/icons/icon-views.svg" alt="" />500</span>
              </div>
            </a>
          </div>
          <div class="col-12 col-sm-4">
            <a href="/single-article.php" class="article__item">
              <span class="article__label article__label_blue"> Автомобильная отрасль </span>
              <h4 class="article__item-title h4">Сколько стоит старый катализатор?</h4>
              <p class="article__text">В пунктах приема металлолома не принимают катализаторы из-за их опасности.</p>
              <div class="article__bottom">
                <span class="article__date">12.02.2020</span>
                <span class="article__views"><img src="assets/img/icons/icon-views.svg" alt="" />500</span>
              </div>
            </a>
          </div>
          <div class="col-12 col-sm-4">
            <a href="/single-article.php" class="article__item">
              <span class="article__label article__label_yellow"> Вторичное сырье </span>
              <h4 class="article__item-title h4">Сколько стоит старый катализатор?</h4>
              <p class="article__text">В пунктах приема металлолома не принимают катализаторы из-за их опасности.</p>
              <div class="article__bottom">
                <span class="article__date">12.02.2020</span>
                <span class="article__views"><img src="assets/img/icons/icon-views.svg" alt="" />500</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Каталитические системы -->
    <section class="article-section" id="art-catalytic-systems">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-30">
          <h3 class="article-section__title primary-title__h3">Каталитические системы</h3>
          <a href="/single-section-journal.php" class="link"> все статьи </a>
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
              <span class="article__label article__label_white"> Каталитические системы </span>
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
              <span class="article__label article__label_white"> Каталитические системы </span>
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

    <!-- Драгоценные металлы -->
    <section class="article-section" id="art-precious-metal">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-30">
          <h3 class="article-section__title primary-title__h3">Драгоценные металлы</h3>
          <a href="/single-section-journal.php" class="link"> все статьи </a>
        </div>
        <div class="row article">
          <a href="/single-article.php" class="col-12 col-sm-4 article__item">
            <div class="article__img">
              <span class="article__label article__label_black"> Драгоценные металлы </span>
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
              <span class="article__label article__label_black"> Драгоценные металлы </span>
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
              <span class="article__label article__label_black"> Драгоценные металлы </span>
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

    <!-- Автомобильная отрасль -->
    <section class="article-section" id="art-car">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-30">
          <h3 class="article-section__title primary-title__h3">Автомобильная отрасль</h3>
          <a href="/single-section-journal.php" class="link"> все статьи </a>
        </div>
        <div class="row article">
          <a href="/single-article.php" class="col-12 col-sm-4 article__item">
            <div class="article__img">
              <span class="article__label article__label_blue"> Автомобильная отрасль </span>
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
              <span class="article__label article__label_blue"> Автомобильная отрасль </span>
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
              <span class="article__label article__label_blue"> Автомобильная отрасль </span>
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

    <!-- Вторичное сырье -->
    <section class="article-section" id="art-secondary-material">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-30">
          <h3 class="article-section__title primary-title__h3">Вторичное сырье</h3>
          <a href="/single-section-journal.php" class="link"> все статьи </a>
        </div>
        <div class="row article">
          <a href="/single-article.php" class="col-12 col-sm-4 article__item">
            <div class="article__img">
              <span class="article__label article__label_orange"> Вторичное сырье </span>
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
              <span class="article__label article__label_orange"> Вторичное сырье </span>
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
              <span class="article__label article__label_orange"> Вторичное сырье </span>
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
  </div>

  <?php include("footer.php"); ?>
</body>

</html>