<?php 
       $login = filter_var(trim($_POST['login']),
       FILTER_SANITIZE_STRING);
       $pass = filter_var(trim($_POST['pass']),
       FILTER_SANITIZE_STRING);

//кэширование пароля
   $pass = md5($pass."qg24gyl361fv");

   //подключение к БД
   require "../blocks/connect.php"
   

   $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");

   $user = $result->fetch_assoc();
   if (count($user) == 0) {
       echo "Такой пользователь не найден";
       exit();
   }

   //создание куки с временем жизни 1 час
  setcookie('user', $user['name'], time() + 3600, "/");


   $mysql->close();

   header('Location: /');
    
?>