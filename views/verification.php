<?php
include "../models/client.php";
include "../controllers/clientC.php";
if(isset($_POST["lastName"])&&!empty($_POST["lastName"])&&
isset($_POST["firstName"])&&!empty($_POST["firstName"])&&
isset($_POST["phone"])&&!empty($_POST["phone"])&&
isset($_POST["Dof"])&&!empty($_POST["Dof"])&&
isset($_POST["address"])&&!empty($_POST["address"])){
    $client = new client($_POST["lastName"], $_POST["firstName"],$_POST["password"],$_POST["phone"], $_POST["address"], new \DateTime($_POST["Dof"]));
    $clientC = new clientC();
    $clientC->showClient($client);
}
else{
    echo '<p style="color: red;">Error</p>';
}
?>