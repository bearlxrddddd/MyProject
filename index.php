<?php 
require ('config.php');
$stmt = $pdo ->query('SELECT * FROM users');
$students = $stmt -> fetchAll();
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
    <title></title>
</head>

<body>

    <header id="header" class="header">
        <div class="container">
            <div class="nav">
<!--вывел логотип-->
                <img src="img/logo.avif" alt="Films">
<!--строю меню-->
                <ul class="menu">
                    <li>
                        <a href="#">Recomendations</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                </ul>
<!--Телефон-->
<li>
                <a href="tel:+75553332211" class="tel">
                    + 7 555 333-22-11
                </a>
</li>
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

<body>
    <form method="post">
        <table>
        <th>
            <tr>ID</tr>
            <tr>Name</tr><br>
            <tr></tr>
        </th>
    </table>
        <?php foreach($students as $student){ ?>
        <?php echo $student['id'] ;?>
        <?php echo $student['name'] ;?><br>
        <?php } ?>
    </form>
</body>
