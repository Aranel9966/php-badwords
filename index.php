<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>   
    <form action="text.php" method="post">
        <label for="text">Inserire testo</label>
        <textarea placeholder="Testo" name="text"></textarea>
        <label for="text">Inserire censura</label>
        <input type="text" placeholder="Censura" name="censorship">
        <button type="submit">invia </button>
    </form>
</body>
</html>