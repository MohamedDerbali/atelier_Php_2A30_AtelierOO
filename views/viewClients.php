<?php
include "../models/client.php";
include "../controllers/clientC.php";
include "../models/connection.php";
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
    <?php 
    $client = new client("john", "Doe", "123", 12345678, "tunis", new \DateTime("09/10/2001"));
    $clientC = new clientC();
    echo '<h1>Liste des clients</h1>';
    $clientC->showClient($client);
    $clientC->addClient($client, $pdo);
    ?>
</body>
</html>