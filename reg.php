<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>

    <style>

    body {
        font-family: Arial, sans-serif;
        background: url('img/pic3.jpg') no-repeat;
        background-size: cover;
        overflow: hidden;
    }

    h1{
        text-align: center;
        color: black;
        font-family: verdana;
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
        padding-bottom: 20px;
    }

    label {
        display: block;
        font-size: 16px;
        margin-bottom: 5px;
        color: white;
        font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        display: block;
        width: 95%;
        padding: 10px;
        margin-bottom: 15px;
        border-radius: 5px;
        border: none;
        box-shadow:  0 0 10px rgba(0,0,0,0.1);
    }

    input[type="submit"] {
        display: block;
        width: 100%;
        padding: 10px;
        margin-top: 50px;
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

    p{
        font-weight: bold;
        font-family: sans-serif;
        text-align: center;
    }


</style>

</head>
<body>
    <h1>Registration Form</h1>

    <form action="process.php" method="POST">

        <label>Name: </label> <br>
        <input type="text" name="nm" required></p>

        <label>Email: </label> <br>
        <input type="email" name="email" required></p>

        <label>Password: </label> <br>
        <input type="password" name="pass" required></p>

        <label>Phone Number: </label> <br>
        <input type="text" name="pn" required></p>

        <input type="submit" name="reg_button" value="REGISTER">

        <p><a href="index.php">Click Here To Login!</a></p>

    </form>


    
</body>
</html>