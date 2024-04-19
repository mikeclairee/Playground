<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

    <style>

    body {
        font-family: Arial, sans-serif;
        background: url('img/pic2.webp') no-repeat;
        background-size: cover;
        overflow: hidden;
    }

    h1{
        text-align: center;
        color: white;
        font-family: verdana;
    }

    form {
        max-width: 400px;
        margin: 0 auto;
        background-color: gray;
        padding: 40px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.2);
        border: 2px solid black;
        opacity: 0.7;
        padding-bottom: 50px;
        margin-top: 5%;
    }

    label {
        display: block;
        font-size: 19px;
        margin-bottom: 5px;
        color: black;
        font-weight: bold;
        padding-top: 10px;
    }


    input[type="text"],
    input[type="password"] {
        display: block;
        width: 95%;
        padding: 10px;
        padding-bottom: 20px;
        padding-top: 20px;
        margin-bottom: 15px;
        border-radius: 5px;
        border: 2px solid black;
        box-shadow:  0 0 10px rgba(0,0,0,0.1);
    }

    input[placeholder="Enter Email Here!.."],
    input[placeholder="Enter Password Here!.."] {
        font-size: 15px;
    }

    input[type="submit"] {
        display: block;
        width: 100%;
        padding: 10px;
        margin-top: 60px;
        background-color: black;
        font-weight: bold;
        color: white;
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

    <h1> Login Page for Admin</h1>

    <form action="adminprocess.php" method="POST">

        <label>Email</label> </br>
        <input type="text" name="email" required placeholder="Email here..."> </p>

        <label>Password</label> </br>
        <input type="password" name="pass" required placeholder="Password here..."> </p>

        <input type="submit" name="admin_login" value="LOGIN">

    </form>
    
</body>
</html>