// pour  faire un refresh ou une temporisatiion  du contenue
<?php ob_start();?>

//contenue du haut dela page!
    <h1>voici ma page de contact</h1>
    <p>vous  pouvez  me contacter via tout les moyens qui vous seront indiquer dans cette page</p>

    //fin de la temporisation !!
<?php
    $content= ob_get_clean();
    require "../commons/template.php";
?>
