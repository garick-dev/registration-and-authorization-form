<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="./css/style.css" />
    <title>Good Job Coworking</title>
  </head>
  <body>
    <div class="top-outer">
      <?php 
        if($_COOKIE['user'] == ''):
      ?>
      <div class="top-outer__img">
        <img src="/img/logo-coworking.png" alt="" />
      </div>
      <div class="top-outer__nav">
        <nav class="menu">
          <li class="menu_li">
            <a class="menu_a" href="#">Рабочие места</a>
          </li>
          <li class="menu_li">
            <a class="menu_a" href="#">Услуги</a>
          </li>
          <li class="menu_li">
            <a class="menu_a" href="#">Тарифы</a>
          </li>
          <li class="menu_li">
            <a class="menu_a" href="#">Галерея</a>
          </li>
          <li class="menu_li">
            <a class="menu_a" href="#">Отзывы</a>
          </li>
          <li class="menu_li">
            <a class="menu_a" href="#">Контакты</a>
          </li>
        </nav>
      </div>
      <div class="top-outer-btn">
        <div class="form-button js-button-reg">
          <span>Зарегистрироваться</span>
        </div>
        <div class="overlay js-overlay-reg">
          <div class="popup form-reg">
            <h1>Форма регистрации</h1>
            <form action="/validation-form/check.php" method="POST">
              <input
                type="text"
                class="form-control"
                name="login"
                id="login"
                placeholder="Введите логин"
              />
              <br />
              <input
                type="text"
                class="form-control"
                name="name"
                id="name"
                placeholder="Введите имя"
              />
              <br />
              <input
                type="password"
                class="form-control"
                name="pass"
                id="pass"
                placeholder="Введите пароль"
              />
              <br />
              <button class="btn btn-success" type="submit">
                Зарегистрироваться
              </button>
            </form>
          </div>
          <div class="close-popup js-close-popup-reg"></div>
        </div>
        <div class="form-button js-button-auto">
          <span>Авторизоватся</span>
        </div>
        <div class="overlay js-overlay-auto">
          <div class="popup form-auto">
            <h1>Форма авторизации</h1>
            <form action="/validation-form/auth.php" method="POST">
              <input
                type="text"
                class="form-control"
                name="login"
                id="login"
                placeholder="Введите логин"
              />
              <br />
              <input
                type="password"
                class="form-control"
                name="pass"
                id="pass"
                placeholder="Введите пароль"
              />
              <br />
              <button class="btn btn-success" type="submit">
                Авторизоватся
              </button>
            </form>
          </div>
          <div class="close-popup js-close-popup-auto"></div>
        </div>
      </div>
      <?php else: ?>
      <p>
        Добро пожаловать 
        <?=$_COOKIE['user']?> в личный кабинет. В данный момент ведутся технические работы, подождите немного. Чтобы выйти нажмите
        <a href="/exit.php"> здесь.</a>
      </p>
      <?php endif;?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="./js/form.js"></script>
  </body>
</html>
