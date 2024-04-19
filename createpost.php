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
        *{
        margin: 0;
        padding: 0;

    }

    body{
        font-family: Arial, sans-serif;
        font-size: 16px;
        line-height: 1.5;
        background: url('img/pic3.jpg') no-repeat;
        background-size: cover;
        overflow: hidden;
    }


    nav{
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

    h1{
        text-align: center;
        color: black;
        font-family: verdana;
        font-size: 30px;
    }

    form {
        max-width: 400px;
        margin: 0 auto;
        background-color: black;
        padding: 40px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.2);
        border: 2px solid aqua;
        opacity: 0.7;
        padding-bottom: 40px;
    }

    label {
        display: block;
        font-size: 16px;
        color: white;
        font-weight: bold;
        float: left;
        padding: 15px;

    }

    input[type="text"],
    input[type="date"] {
        display: block;
        width: 95%;
        padding: 10px;
        margin-bottom: 5px;
        border-radius: 5px;
        border: none;
        box-shadow:  0 0 10px rgba(0,0,0,0.1);
    }

    input[type="submit"] {
        display: block;
        width: 100%;
        padding: 8px;
        margin-top: 30px;
        background-color: #007bff;
        color: #fff;
        border-radius: 5px;
        border: none;
        cursor: pointer;
        font-size: 18px;
    }

    input[type="submit"]:hover {
        background-color: blue;
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

    <h1> CREATE POST </h1>

    <form action="process.php" method="POST">

    <label> Title of Your Post </label> </br>
    <input type="text" name="title" required placeholder="Add Title Here.."> </p>

    <label> Select Date </label> </br>
    <input type="date" name="mydate" required> </p>

    <label> Add Description </label> </br>
    <textarea cols="51" rows="10" name="desc"></textarea> </p>

    <input type="hidden" name="posted_by" value="<?php echo $name; ?>">

    <input type="submit" name="create_post" value="POST">

    </form>
    
</body>
</html>