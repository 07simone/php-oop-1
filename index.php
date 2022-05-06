<?php 
include('./data/movie.php');

$pirati = new Movie ('I pirati dei caraibi', 'Jhonny Deep', 2015, 80000000);
$fantasy= new Movie ('Harry Potter', 'J.K. Rowling', 1999,250000000);
$comedy = new Movie ('Tre uomini e una gamba', 'Aldo Giovanni e Giacomo', 1996,10000000);
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
    <div class="container">
        <p>
            <?php var_dump($pirati->getTitle(),$pirati->getAuthor(),$pirati->getyearOfRelease(),$pirati->getTakings())?>
        </p>
        <p>
            <?php var_dump($fantasy) ?>
        </p>
        <p>
            <?php var_dump($comedy) ?> 
        </p>
    </div>
    
</body>
</html>