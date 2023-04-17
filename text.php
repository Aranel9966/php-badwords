<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $text = $_POST["text"];
    $censorship = $_POST["censorship"];
    ?>
    <h1>Testo </h1>
    <div>
    <h3>Testo non filtrato: </h3>
        <?php
            echo $text . "<br>";
            echo "lunghezza testo: ".strlen($text) ." caratteri". "<br>";
        ?> 
    </div>

    <div>
    <h3>Testo filtrato: </h3>
        <?php
            echo $textChanged= str_replace("$censorship","***","$text") . "<br>";
            echo "lunghezza testo: ".strlen($textChanged) -4 ." caratteri";
        ?>
    </div>


</body>
</html>