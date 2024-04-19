<?php

    include "conn.php";
    session_start();

    $e=$_SESSION['email'];

    $getname=mysqli_query($conn,"SELECT * FROM user WHERE email='$e'");
    while($row=mysqli_fetch_object($getname)){

        $name=$row -> name;

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name;?></title>

    <style>

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        font-size: 16px;
        line-height: 1.5;
        background: url('img/pic3.jpg') no-repeat;
        background-size: cover;
        color: #333;

    }

    nav {
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

    nav a {
        display: inline-block;
        padding: 10px 20px;
        text-decoration: none;
        color: #333;
    }

    nav a:hover {
        background-color: #333;
        color: #fff;
    }


    section {
        flex-direction: column;
        text-align: center;
        margin: 10px auto;
        width: 90%;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        padding: 30px;
        }

    section h1{
        font-size: 50px;
        border-bottom: 2px solid #333;
        color: #333;
        font-family: courier;
        margin-bottom: 20px;
    }
        
    section h2 {
        font-size: 25px;
        font-family: sans-serif;
        margin-bottom: 10px;
    }
        
    section h3 {
        font-size: 20px;
        font-family: sans-serif;
        margin-bottom: 20px;
    }
        
        
    

    </style>

</head>
<body>
    
    <nav>
        <a href="userhome.php"> HOME </a>
        <a href="#"> GALLERY </a>
        <a href="#"> GROUP PROJECT </a>
        <a href="createpost.php"> CREATE POST </a>
        <a href="update_profile.php"> UPDATE PROFILE </a>
        <a href="index.php"> LOGOUT </a>
    </nav>

    <hr> </hr>

    <section>
    <h1> This is My Post </h1>

    <?php

        $getpost = mysqli_query($conn, "SELECT * FROM post WHERE posted_by='$name' ");
        while($row1=mysqli_fetch_array($getpost)) {

            ?>

            <h2>Title: <?php echo $row1['title']; ?> </h2>
            <h2>Date: <?php echo $row1['mydate']; ?> </h2>
            <h3>Description: <?php echo $row1['description']; ?> </h3>

            <hr> </hr>

            <?php

        }

    ?>
    </section>

</body>
</html>