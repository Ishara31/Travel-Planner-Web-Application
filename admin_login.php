<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
        
        
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f1e1;
             
            margin: 0;
            padding: 0;
            background-image: url('tour.jpg');
            height: 100%; 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .container {
             margin-top: 200px;
            max-width: 350px;
            margin: 45px auto;
            padding: 50px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .headingg {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 24px;
          
        }

        form {
            margin-bottom: 20px;
        }

        form input,
        form textarea {
            display: block;
            width: 100%;
            margin: 0 auto 15px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }

        form input[type="submit"] {
            display: block;
            width: 100%;
            margin: 0 auto;
            background-color: #117864;
            color: #fff;
            cursor: pointer;
            border: none;
            padding: 10px 100px;
            font-size: 17px;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        form input[type="submit"]:hover {
            background-color: lightblue;
        }

        p {
            text-align: center;
            font-size: 16px;
            color:#117864;
        }

        a {
            color: #4CAF50;
            text-decoration: underline;
        }

        .error {
            color: #ff0000;
            margin-bottom: 10px;
            font-size: 14px;
        }

        @media only screen and (max-width: 480px) {
            .container {
                max-width: 90%;
                margin: 30px auto;
                padding: 40px;
            }

            form input[type="submit"] {
                padding: 10px 40px;
                font-size: 16px;
            }
        }
        
        .header-back .navbar-light .navbar-nav .active{
        color: #5f5f5f !important;
    
    </style>
    <script>
        function validateForm() {
            var username = document.forms["loginForm"]["username"].value;
            var password = document.forms["loginForm"]["password"].value;
            var errorContainer = document.getElementById("errorContainer");
            var errorMessage = "";

            if (username.trim() === "") {
                errorMessage += "Username is required.\n";
            }

            if (password.trim() === "") {
                errorMessage += "Password is required.\n";
            }

            if (errorMessage !== "") {
                errorContainer.innerText = errorMessage;
                return false;
            }

            return true;
        }
    </script>
</head>

<div class="header-back">
    <div class="nav-back">
        <div class="nav-wrap">
            <div class="nav-logo">
                <a href="Home.html">
                    <img src="logo.jpg" alt="logo">
                </a>
            </div>
            <div class="menu-icon-wrap">
                <img src="menu.png" class="menu-icon" alt="menu img" onclick="menuToggle()">
            </div>
            <div class="nav-menu" id="nav-menu">
                <ul class="nav-menu-item" id="nav-menu-item">
                    <li class="nav-list-item">
                        <a class="nav-list-link active" href="Home.html">Home</a>
                    </li>
                    <li class="nav-list-item">
                        <a class="nav-list-link" href="Package.php">Packages</a>
                    </li>
                    <li class="nav-list-item">
                        <a class="nav-list-link" href="Hotel.html">Hotels</a>
                    </li>
                    <li class="nav-list-item">
                        <a class="nav-list-link" href="emergencey.html">Emergency Services</a>
                    </li>
                    <li class="nav-list-item">
                        <a class="nav-list-link" href="contactus.html">Contact Us</a>
                    </li>
                    <li class="nav-list-item pr-0">
                        <a class="nav-list-link" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<body>
    <div class="container">
        <h2 class="headingg"> Admin Login</h2>
       
        <form action="admin_login_backend.php" method="POST" onsubmit="return validateForm()">
            <input type="email" name="email" placeholder="Email Address" required autocomplete="off">
            <input type="password" name="password" placeholder="Password" required autocomplete="off">
            <input type="submit"  onclick="window.location.href = 'Admin_packages.php';" value="Login">
        </form>
        
        <p><a href="forget_password.php">Forget Password</a></p>
           <?php
        if (isset($_GET["error"])) {
            if (($_GET["error"]) == 1) {

                echo"<p style='color:red;'>Username or Passowrd Incorrect.</p>";
            }
        }
    ?>
    </div>
</body>
</html>