<?php 
require ('config.php');
require ('functions.php');

?>

<!doctype html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title></title>
</head>

<body>
<a href="/registration.php">Регистрация</a>
<a href="/autorization.php">Вход</a>
    <header id="header" class="header">
        <div class="container">
            <div class="navigation">
<!--вывел логотип-->
                <img src="img/logo.avif" alt="Какая то картинка по фильму">

<!-- просмотр баннеров фильмов -->

<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="баннер" class="d-block w-100" alt="баннер">
    </div>
    <div class="carousel-item">
      <img src="баннер" class="d-block w-100" alt="баннер">
    </div>
    <div class="carousel-item">
      <img src="баннер" class="d-block w-100" alt="баннер">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Предыдущий</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Следующий</span>
  </button>
</div>

<!--строю меню-->
                <ul class="menu">
                    <li>
                        <a href="#">Какие то рекомендации</a>
                    </li>
                    <li>
                        <a href="#">О чем то</a>
                    </li>
                </ul><br>

            </div>
        </div>
    </header>

    <section id="about" class="about">
        <div class="container">

        </div>
    </section>

    <footer id="footer" class="footer">
        <div class="container">

        </div>
    </footer>


</body>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <!-- insert -->
            <div class="container mt-5">
            <div class="row post-list">

            </div>
        </div>
<div class="row col-4">

    <div>
        <div class="form-group">
            <label for="title"> Заголовок </label>
<input type="text" class="form-control" id="title">
        </div>
        <div class="form-group">
            <label for="body">Содержимое</label>
<textarea class="form-control" id="body"></textarea>
        </div><br>
        <button class="btn btn-primary" onclick="insert()">Добавить </button>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
            <div class="card-body"><?php foreach ($movies as $movie) {?>
                <h5 class="card-id"><?php echo $movie['id']; ?></h5>
                <p class="card-name "><?php echo $movie['name']; ?></p>
                <?php } ?>
                <a href="#" class="card-link">Подробнее</a>
                <a href="#" class="card-link" onclick="Remove('${user$user.id}')">Удалить</a>
                <a href="#" class="card-link" onclick="select('${user$user.id}','${user$user.name}')">Изменить</a>

                </div>
        </div>
<!-- Вывод пользователей -->
<body>
    <form method="post">
        <table>
        <th>
            <tr>ID</tr>
            <tr>Name</tr><br>
            <tr></tr>
        </th>
    </table>
        <?php foreach($users as $user){ ?>
        <?php echo $user['id'] ;?>
        <?php echo $user['name'] ;?><br>
        <?php } ?>
    </form>
</body>

