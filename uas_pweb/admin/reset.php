<?php

    include "../database.php";
    include 'session_check.php';

    if (isset($_POST['reset_loket1'])) {
        
        mysqli_query($databaseconn, "DELETE FROM loket1") or die(mysqli_error($databaseconn));
        header("location:admin-loket1.php");

        }
        else {
        echo 'Eror Bray';
    }

    if (isset($_POST['reset_loket2'])) {
        
        mysqli_query($databaseconn, "DELETE FROM loket2") or die(mysqli_error($databaseconn));
        header("location:admin-loket2.php");

        }
        else {
        echo 'Eror Bray';
    }

    if (isset($_POST['reset_loket3'])) {
        
        mysqli_query($databaseconn, "DELETE FROM loket3") or die(mysqli_error($databaseconn));
        header("location:admin-loket3.php");

        }
        else {
        echo 'Eror Bray';
    }

?>