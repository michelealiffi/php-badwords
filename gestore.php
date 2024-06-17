<?php
    $first_name = $_GET["nome"];
    $last_name = $_GET["cognome"];
    $censura = $_GET["censura"];
    $text_long = $_GET["testolungo"];
    $censurato = str_replace("$censura","***","$censura");
    $complete_name = $first_name . " " . $last_name;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:32,height:32/https://www.filepicker.io/api/file/iperH9IBTIalnkREa5pL" rel="icon" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP Badwords</title>
</head>
<body>
    <div class='text-center bg-dark text-white'>
        <h1>Hello, <?php echo $first_name . " " . $last_name ?></h1>
        <h1>Your name is long <?php echo strlen($first_name) , ", and your last name " , strlen($last_name) ?></h1>
        <h1>Your complete name is long, <?php echo strlen($complete_name) ?></h1>
        <hr>
        <h1><?php echo strlen($censura) ?></h1>
        <h1><?php echo str_replace("$censura","***","$censura") ?></h1>
        <h1><?php echo strlen($censurato) ?></h1>
        <hr>
        <h1><?php echo strlen($text_long) ?></h1>
        <h1><?php echo str_replace(["cane","cavallo","bambino"],"***","$text_long") ?></h1>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>