<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice <?p hp echo 'PHP'; ?> </title>
</head>

<body>

    <?php
    echo '<h1>Hello world !</h1>';
    ?>

    <p>Bonjour, il fait <?php echo 'beau'; ?></p>

    <?php
    $age = 25;
    echo $age;

    $personne = array('nom' => 'Martin', 'prenom' => 'Monique', 'age' => 50);
    echo '<pre>';
    var_dump($personne);
    echo '</pre>';
    ?>

</body>

</html>
