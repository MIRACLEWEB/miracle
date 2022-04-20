<?php
    include '../controller/getwhatever.php';
    $destinationc=new getwhatever();
    $destinationc->supprimerreservation($_GET["id"]);
     header('Location: /vinazine/adminback/views/reservation_sorties.php');
?>