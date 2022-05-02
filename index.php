<?php

/*
    Descrizione:
    Creare una variabile con un paragrafo di testo a vostra scelta.
    Stampare a schermo il paragrafo e la sua lunghezza.
    Una parola da censurare viene passata dall'utente tramite parametro GET.
    Stampare di nuovo il paragrafo e la sua lunghezza,
    dopo aver sostituito con tre asterischi (***)
    tutte le occorrenze della parola da censurare.
*/

$paragrafo ='Godi, fanciullo mio; stato soave,
Stagion lieta è cotesta.
Altro dirti non vo’; ma la tua festa
Ch’anco tardi a venir non ti sia grave';

$parola_censurata = $_GET['parolaDaCensurare'];

$paragrafo_censurato= str_replace($parola_censurata, '***', $paragrafo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h1>Paragrafo Originale:</h1>
    <p><?php echo($paragrafo) ?></p>
    <h3>Il paragrafo è lungo <?php echo strlen($paragrafo) ?></h3>
    <hr>
    <h1>Paragrafo Censurato:</h1>
    <p><?php echo($paragrafo_censurato) ?></p>
    <h3>Il paragrafo censurato è lungo <?php echo strlen($paragrafo_censurato) ?></h3>
</body>
</html>