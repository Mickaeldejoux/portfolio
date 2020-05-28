
// pour  faire un refresh ou une temporisatiion  du contenue
<?php ob_start();?>

//contenue du haut dela page!

   <h1>bienvenue sur mon ecv </h1>

   //fin de la temporisation 
<?php
    $content= ob_get_clean();
    require "../commons/template.php";
?>
