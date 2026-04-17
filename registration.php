<?php 
require ('config.php');
require ('functions.php');

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/reg.css">



          <form action="" method="post">
        <label>ФИО</label>
        <input type="text">
        <label>Логин</label>
        <input type="password" name="password">
        <label>Email</label>
        <input type="email">
        <label>Изображение пользователя</label>
        <input type="file" name="avatar">
        <label>Пароль</label>
        <input type="password">
        <label>Подтверждение пароля</label>
        <input type="password" name="password" required>
        <button>Зарегистрироваться</button>
        <p>
            у вас есть аккаунт? - <a href="autorization.php">Авторизуйтесь</a>
        </p>
        <a href="/">назад</a>
    </form>