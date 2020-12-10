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
    <title>Форма регистрации</title>
  </head>
  <body>
    <div class="container mt-4">
      <?php 
        if($_COOKIE['user'] == ''):
      ?>
      <div class="row">
        <div class="col">
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
              Зарегистрировать
            </button>
          </form>
        </div>
        <div class="col">
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
            <button class="btn btn-success" type="submit">Авторизоватся</button>
          </form>
        </div>
        <?php else: ?>
          <p>Hello <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="/exit.php"> здесь.</a></p>
        <?php endif;?>
      </div>
    </div>
  </body>
</html>
