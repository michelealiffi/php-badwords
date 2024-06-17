<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:32,height:32/https://www.filepicker.io/api/file/iperH9IBTIalnkREa5pL" rel="icon" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP Badwords</title>
</head>
<body class='bg-dark'>
    <h1 class='text-center text-white'>Hello PHP World!</h1>
    <form class='text-center' action="gestore.php" method="GET" >
        <input class='form-control w-25 text-center' type="text" placeholder="Scrivi il tuo nome" name="nome">
        <input class='form-control w-25 text-center' type="text" placeholder="Scrivi il tuo cognome" name="cognome">
        <input class='form-control w-25 text-center' type="text" placeholder="Scrivi qualcosa da censurare" name="censura">
        <textarea class='form-control w-25 text-center' name="testolungo" placeholder="Scrivi qualcosa bannabile" id=""></textarea>
        <button class='btn btn-primary text-white' type="submit">Invia</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>