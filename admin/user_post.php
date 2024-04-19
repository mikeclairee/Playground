<?php

    include "../conn.php";
    session_start();

    $email = $_SESSION['email'];

    $getadminname = mysqli_query($conn, "SELECT * FROM admin
    WHERE email='$email' ");

    while($row=mysqli_fetch_object($getadminname)){
        $admin_name = $row -> admin_name;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $admin_name; ?></title>

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
        background: url('img/pic2.webp') no-repeat;
        background-size: cover;
        color: #333;

    }

    header {
        background-color: #333;
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 8px;
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
        color: white;
    }

    nav a:hover {
        background-color: #333;
        color: #fff;
    }

     section h1{
        font-size: 50px;
        border-bottom: 2px solid #333;
        color: #333;
        font-family: courier;
        margin-bottom: 20px;
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


        
    section h2 {
        font-size: 25px;
        font-family: sans-serif;
        margin-bottom: 10px;
    }
    </style>

</head>
<body>
    <header>
    <h1>Welcome Admin <?php echo $admin_name; ?></h1>
    </header>

    <hr> </hr>

    <nav>
    <a href="adminhome.php">HOME</a>
    <a href="user_post.php">USER'S POST</a>
    <a href="index.php">LOGOUT</a>
    </nav>

    <section>
    <h1>All Post by the Users</h1>
    <hr> </hr>

    <?php

    $getuserpost = mysqli_query($conn, "SELECT * FROM post");
    while($row1=mysqli_fetch_array($getuserpost)){

        ?>

        <h2>Title: <?php echo $row1['title'];?> </h2>
        <h2>Date: <?php echo $row1['mydate'];?> </h2>
        <h2>Description: <?php echo $row1['description'];?> </h2>
        <h2>Posted By: <?php echo $row1['posted_by'];?> </h2>

        <hr> </hr>

        <?php
    }
    ?>
    </section>
    
</body>
</html>