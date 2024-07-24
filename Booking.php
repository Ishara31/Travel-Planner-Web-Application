<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
    <title>Package Registration Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">


	<link rel="stylesheet" type="text/css" href="style.css">
        
        
        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
        body,html{
            height: 100%;
            margin: 0;
        }
   body {
            font-family: Arial, sans-serif;
                background-color: #f2f2f2;
                    background-image: linear-gradient(45deg, #ff8a00, #e52e71);

            height: 100%; 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            
 
}

.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 30px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    background-color: #D3D3D3;
   
}

h2 {
    text-align: center;
    margin-bottom: 30px;
}

.form-group {
    margin-bottom: 20px;
   
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

input[type="text"],
input[type="tel"],
input[type="email"],
textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="date"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.btn-submit {
    background-color:blue;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
}
.php_dis{
    color:blue;
    font-weight: bold;
    font-size: 16px;
}
.header-back .navbar-light .navbar-nav .active{
        color: #5f5f5f !important;
    }
     
    </style>    
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
    <br>
    
    <div class="container">
        <h2> <u>Package Registration Form</u></h2>
       
        <form method="POST" action="backend_booking.php">
            <div class="php_dis">
            <p>
       <?php
    if (isset($_GET['selectedButton'])) {
      $selectedButton = $_GET['selectedButton'];
      echo "Selected Package: " . $selectedButton;
    }
     ?>
            </p>
        </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="dateToVisit">Arrival Date</label>
                <input type="date" id="dateToVisit" name="dateToVisit" required>
            </div>

            <div class="form-group">
                <label for="dateToLeave">Depature Date</label>
                <input type="date" id="dateToLeave" name="dateToLeave" required>
            </div>
            
             <div class="form-group">
            <label for="number_of_people">Number of People:</label>
           <input type="number" min="1" max="10" name="number_of_people" id="number_of_people" required>
            </div>
            
            <div class="form-group">
            <label for="number_of_people">Number of Children Under Age 18:</label>
           <input type="number" min="0" max="10" name="number_of_children" id="number_of_children" required>
           </div>


            <button type="submit" class="btn-submit">Submit</button>
        </form>
    </div>
    
    </div>
<div class="footer-back">
    <div class="footer-wrap">
        <div class="footer-mar">
            <div class="foo-width-1 footer-pad">
                <div class="footer-text">
                    <h1>Company</h1>
                    <p class="footer-para">  EDMON is an innovative tour planner designed to enhance your travel experiences. 
                        Whether you're embarking on a solo adventure or planning a group trip, 
                        EDMON offers a comprehensive set of features to simplify and optimize your travel planning process.</p>
                </div>
            </div>
            <div class="foo-width-2 footer-pad">
                <div class="footer-text">
                    <h1>Site Link</h1>
                    <a href="contactus.html">Contact Us</a>

                </div>
            </div>
            <div class="foo-width-3 footer-pad">
                <div class="footer-text">
                    <h1>Contact Us</h1>
                    <p class="address">10th Floor,<br>
                        EDMON Tour Planner,<br>
                        Kandy,<br>
                        Sri Lanka.<br>
                        (+94) 77 1234567
                    </p>
                    <div class="media-icon">
                        <img src="facebook.png" alt="social media icons">
                        <img src="instagram.png" alt="social media icons">
                        <img src="twitter.png" alt="social media icons">
                        <img src="youtube.png" alt="social media icons">
                    </div>
                </div>
            </div>

            <div class="footer-border">
                <div class="footer-bottom">
                    <p>Copyright <i class="far fa-copyright"></i> 2023 EDMON Tour Planner. All Rights Reserved. Designed by Group F.
                       </p>
                </div>
            </div>

        </div>
    </div>
</div>
</body>
<script>
    function menuToggle() {
        document.getElementById('nav-menu').classList.toggle('show');
    }
</script>
</html>
