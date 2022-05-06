<?php 
include('./data/movie.php');

$pirati = new Movie ('I pirati dei caraibi', 'Jhonny Deep', 2015);
$fantasy= new Movie ('Harry Potter', 'J.K. Rowling', 1999);
$comedy = new Movie ('Tre uomini e una gamba', 'Aldo Giovanni e Giacomo', 1996);
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
            <?php var_dump($pirati) ?>
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