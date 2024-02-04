<?php
    session_start();
    if(!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin'){
        // var_dump($_SESSION['role']);
        header("location:login.php");
        // exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        h1{
            text-align:center;
            font-family: 'Rubik', sans-serif;
        }
        a{
            font-family: 'Rubik', sans-serif;
            text-align:center;
            text-decoration: underline;
        }
    </style>
</head>
<body>
<?php
        include "includes/partials/header.php";
    ?>

    <div>
        <h1>Dashboard</h1>
    <hr>
        <a href="logout.php" style="color:black; text-decoration: underline; padding-left:10px;">Logout</a>
        <a href="shtiProdukt.php" style="color:black; text-decoration: underline; padding-left:10px;">Shto Produkt</a>
    </div>
   

    <?php
       
        include "products.php";
    ?>    
</body>
</html>