<?php


$word = $_GET['word'];

$par = $_GET['paragraph'];




$censured = str_replace($word, '***', $par);


$lenght_parag = strlen($par);

$lenght_censured = strlen($censured);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- original -->

    <h1>Paragrafo Originale</h1>

    <p><?php echo $par; ?></p>


    <i>Il paragrafo originale era lungo <?php echo $lenght_parag; ?> caratteri</i>

    <!-- censured -->

    <h1>Paragrafo Censurato</h1>

    <p><?php echo $censured; ?></p>

    <i>Il paragrafo censurat era lungo <?php echo $lenght_censured; ?> characters</i>
</body>

</html>