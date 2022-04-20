
<?php
    include '../controller/getwhatever.php';
    $destinationc=new getwhatever();
    $destinationc->supprimerdestination($_GET["id"]);
     header('Location: /vinazine/adminback/views/listedestination.php');
?>