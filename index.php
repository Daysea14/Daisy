<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>


    <!--Bootstrap CCDN-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <!--icon CDN-->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

     <!--overriding-->

    <style>
        h1{
            font-family: algerian;
            font-size: 50px;
            font-weight: bold;
        }

        label{
            font-family: algerian;
            font-size: 15px;
            background-color: transparent;
            padding: 25px 30px;
            width: 20%;
            height: 35px;
            opacity: 0.8;
        }

        input{
            font-family: algerian;
            font-size: 15px;
            box-shadow: 5px 10px 8px black;
            width: 20%;
            height: 35px;
        }

        a{
            font-family: times new roman;
            font-size: 20px;
        }
    </style>

</head>
<body>

    <h1 class ="title text-center text-dark"> LOGIN Form </h1>

<a href="index.php" class="text-danger"> Click to Login </a> </p> 
<a href="reg.php" class="text-danger"> Click to Register </a></p>
    
    <form action="process.php" method="POST">

        <div class="container-fluid p-5 bg-white text-primary text-center">

            <label>Email </label> </br>
            <input type="email" name="email" required > </p>
    
            <label>Password </label> </br>
            <input type="password" name="pass" required > </p>

            <input type="submit" name="login" value="LOGIN">
    </form>

</body>
</html>