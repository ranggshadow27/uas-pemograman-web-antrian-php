<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="5" />
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <?php 
        include '../database.php';
        include 'session_check.php';

        $query1 = mysqli_query($databaseconn, "SELECT COUNT(nomor_antrian) as jumlahAntrianloket1 FROM loket1");
        $data1 = mysqli_fetch_array($query1);
        $antrian1 = $data1['jumlahAntrianloket1'];

        $query2 = mysqli_query($databaseconn, "SELECT COUNT(nomor_antrian) as jumlahAntrianloket2 FROM loket2");
        $data2 = mysqli_fetch_array($query2);
        $antrian2 = $data2['jumlahAntrianloket2'];

        $query3 = mysqli_query($databaseconn, "SELECT COUNT(nomor_antrian) as jumlahAntrianloket3 FROM loket3");
        $data3 = mysqli_fetch_array($query3);
        $antrian3 = $data3['jumlahAntrianloket3'];
    ?>
</head>
<body>
    <br />
    <center>
        <h2>ADMIN PANEL</h2>
        <div class="containers">
        <h4>User Active :
            <span class="user_login">
                <?php echo $_SESSION['username']; ?>
            </span>|
            <a class="link" href="../logout.php">Logout</a>
        </h4>
        </div>
    </center>
    <div class="containers">
        <div class="banner loket1">
            <p>Loket 1 Perakitan Komputer :
                <br />
                <br />
                <?php
                echo $antrian1
                ?> Antrian
            </p>
        </div>
        <div>
            <a class="button" href="admin-loket1.php">Kelola Antrian</a>
        </div>
        <hr>
        <div class="banner loket2">
            <p>Loket 2 Pembelian :
                <br />
                <br />
                <?php
                echo $antrian2
                ?> Antrian
            </p>
        </div>
        <div>
            <a class="button" href="admin-loket2.php">Kelola Antrian</a>
        </div>
        <hr>
        <div class="banner loket3">
            <p>Loket 3 Customer Service :
                <br />
                <br />
                <?php
                echo $antrian3
                ?> Antrian
            </p>
        </div>
        <div>
            <a class="button" href="admin-loket3.php">Kelola Antrian</a>
        </div>
        <hr>
        <div>
            <a class="button" href="../antrian/home.php">Home</a>
        </div>
    </div>
</body>
</html>