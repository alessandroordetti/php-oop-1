<?php
include('./data/movie.php');

$ilPadrino = new Movie ('Il Padrino', 'Francis Ford Coppola', 'English', 'Marlon Brando, Al Pacino', 	1972)

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

    <?php var_dump($ilPadrino) ?>


</body>
</html>