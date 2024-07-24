<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
    <title>Tourist Packages</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
            background-image: url('tour.jpg');
            height: 100%; 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            font-family: Arial, sans-serif;
            background-color: #orange;
            padding: 20px;
             justify-content: center;
        }

        .pck-card {
            background-color: #f2f2f2;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .pck-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
            color: blue;
        }

        .pck-description {
            margin-bottom: 10px;
        }

        .pck-price {
            font-size: 18px;
            font-weight: bold;
        }

        .pck-btn {
            background-color: #117864;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
        }

        /* Additional Styles */
        .container {
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            
        }

        .row {
            margin-right: -15px;
            margin-left: -15px;
        }

        .col-md-4 {
            padding-right: 15px;
            padding-left: 15px;
        }

        .pck-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
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
                        <a class="nav-list-link" href="package.php">Packages</a>
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
    <font color="white">
    
    </font>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="pck-card">
                    <h2 class="pck-title">Platinum</h2>
                    <p class="pck-description">
                    <ul>
                        <li> Luxury accommodation. </li>
                        <li>Access to premium services.</li>
                        <li>Private transport to and from the airport.</li>
                        <li>Personalized tour guide services.</li>
                        <li>VIP treatment and priority access. </li>
                        <li>Extra activities not included in other packages.</li>
                        <li> Spa treatments, shopping vouchers, or special event tickets,etc. </li>
                    </ul>
                    <font color="red">
                    <p>Maximum Number Of People allowed 10 </p>
                    <p>Maximum Days 10</p>
                    </font>
                        </p>
                    <p class="pck-price">LKR 500,000</p>
                    <button class="pck-btn" onclick="redirectToForm('Platinum')" name="buttonValue" value="Platinum">Book Now</button>
                    <script>
                     function redirectToForm(buttonValue) {
                      window.location.href = 'Booking.php?selectedButton=' + buttonValue;}
    
                      </script>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pck-card">
                    <h2 class="pck-title">Gold</h2>
                    <p class="pck-description"> 
                    <ul>
                         <li> Comfortable accommodation. </li>
                        <li>Guided tours of popular attractions.</li>
                         <li>Group transfers to and from the airport.</li>
                        <li>Breakfast or half-board meal plans.</li>
                        <li>Standard transportation options. </li>
                        <li>Extra activities not included in other packages.</li>
                        <li> Independent exploration and Cultural experiences and local activities. </li>
                    </ul>   
                   <font color="red">
                    <p>Maximum Number Of People allowed 6 </p>
                    <p>Maximum Days 8</p>
                    </font>
                        </p>
                    <p class="pck-price">LKR 300,000</p>
                    <button class="pck-btn" onclick="redirectToForm('Gold')" name="buttonValue" value="Gold">Book Now</button>
                    <script>
                     function redirectToForm(buttonValue) {
                      window.location.href = 'Booking.php?selectedButton=' + buttonValue;}
    
                      </script>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pck-card">
                    <h2 class="pck-title">Silver</h2>
                    <p class="pck-description">
                    <ul>
                    <li> Budget-friendly accommodation. </li>
                    <li>Basic transportation options.</li>
                    <li>Guided tours of key sights and attractions.</li>
                    <li>Economy-class transfers to and from the airport.</li>
                    <li>Standard meal options. </li>
                    <li>Limited additional activities.</li>
                    <li>Local guides and personal exploration time will be given. </li> 
                    </ul>
                    <font color="red">
                    <p>Maximum Number Of People allowed 4 </p>
                    <p>Maximum Days 3</p>
                    </font>
                         
                        </p>
                    <p class="pck-price">LKR 100,000</p>
                    <button class="pck-btn" onclick="redirectToForm('Silver')" name="buttonValue" value="Silver">Book Now</button>
                    <script>
                     function redirectToForm(buttonValue) {
                      window.location.href = 'Booking.php?selectedButton=' + buttonValue;}
    
                      </script>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-back">
    <div class="footer-wrap">
        <div class="footer-mar">
            <div class="foo-width-1 footer-pad">
                <div class="footer-text">
                    <h1>EDMON</h1>
                    <p class="footer-para">
                        
                        EDMON is an innovative tour planner designed to enhance your travel experiences. 
                        Whether you're embarking on a solo adventure or planning a group trip, 
                        EDMON offers a comprehensive set of features to simplify and optimize your travel planning process.
                    
                    </p>
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
                    <p>Copyright <i class="far fa-copyright"></i> 2023 EDMON Tours. All Rights Reserved.Designed by Group F.</p>
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
