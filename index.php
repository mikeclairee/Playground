<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

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
        margin-top: 4%;
    }

    label {
        display: block;
        font-size: 19px;
        margin-bottom: 5px;
        color: white;
        font-weight: bold;
        padding-top: 10px;
    }


    input[type="email"],
    input[type="password"] {
        display: block;
        width: 95%;
        padding: 10px;
        padding-bottom: 20px;
        padding-top: 20px;
        margin-bottom: 15px;
        border-radius: 5px;
        border: none;
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

    <h1> Welcome to My Login Page! </h1>

    <form action="process.php" method="POST">

        <label>Email: </label><br>
        <input type="email" name="login_email" 
        required placeholder="Enter Email Here!.."></p>

        <label>Password: </label><br>
        <input type="password" name="login_pass" 
        required placeholder="Enter Password Here!.."></p>

        <input type="submit" name="login" value="LOGIN">

        <p><a href="reg.php">Click Here To Register!</a></p>

    </form>

    
</body>
</html>