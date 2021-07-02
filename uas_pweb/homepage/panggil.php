<?php
    
    include "../database.php";

    if (isset($_POST['panggil_loket1'])) {

        header("location:../homepage/homepage.php");
        }
        else {
        echo 'Eror Bray';
    }

?>