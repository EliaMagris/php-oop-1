<?php
include_once __DIR__ . '/movie/classi.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>scrivi un tuo film</h2>

    <form method="GET">
        <input type="text" placeholder="title" name="title">
        <input type="text" placeholder="genre" name="genre">
        <input type="number" placeholder="year" name="year">
        <input type="number" placeholder="rating personale" name="rating">
        <button>Invia</button>
    </form>

    <?php
    if (!empty($_GET) && !empty($_GET['title']) && !empty($_GET['genre']) && !empty($_GET['year']) && !empty($_GET['rating'])) {
        $title = $_GET['title'];
        $genre = $_GET['genre'];
        $year = $_GET['year'];
        $rating = $_GET['rating'];

        $movie1 = new Movie($title, $genre, $year, $rating);
        echo "<pre>";
        print_r($movie1);
        echo "</pre>";
        echo $movie1->isOK();
    }
    ?>
</body>

</html>