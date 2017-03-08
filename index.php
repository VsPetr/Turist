<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <h1>Hello world</h1>
    <link rel="stylesheet" href="/styles.css">
</head>
<body>
<?php
    spl_autoload_register(function ($className) {
        include $className . '.php';
    });

    //include_once 'Figure.php';
    $square = new Square($_POST['square_a']);
    $rectangle = new Rectangle($_POST['rectangle_a'],$_POST['rectangle_b']);
    $circle = new Circle($_POST['circle_a']);
    /*header('Location: /index.php', true, 301);
    /*function echoOut($Square){
        echo "{$Square->area}\n";
    };*/
    echo nl2br('Квадрат: '.$square->getArea().PHP_EOL);
    echo nl2br('Прямоугольник: ' .$rectangle->getArea().PHP_EOL);
    echo nl2br('Круг: ' .$circle->getArea().PHP_EOL);
?>
<form action = "/index.php" method="post">
    <p>Квадрат</p>
    <input type="text" name="square_a">
    <p>Прямоугольник</p>
    <p>Сторона а</p>
    <input type="text" name="rectangle_a">
    <p>Сторона в</p>
    <input type="text" name="rectangle_b">
    <p>Круг</p>
    <input type="text" name="circle_a">
    <p></p>
    <input type="submit">
</form>
</body>
</html>

