 <?php
 
 require './classes/DbConnector.php';
 
 use classes\DbConnector; 
 $dbcon=new DbConnector();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
    <title>Conformation Of Registration</title>
    <link rel="stylesheet" href="conf.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="style.css">
        
        
        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
    <font color="blue">
    <br><br>
  
</font>
    <div class="container">
        <?php
        // Check if the form was submitted and process the data
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve form data
            $email = $_POST['email'];        
            $dateToVisit = $_POST['dateToVisit'];
            $dateToLeave=$_POST['dateToLeave'];
            $numOfPeople=$_POST['number_of_people'];
            $numOfChildren=$_POST['number_of_children'];
            
                      try {
                $con=$dbcon->getConnection();
                $query = "INSERT INTO register(Email_Address, Number_Of_People, Number_Of_Children, Arrival_Date, Depature_Date) VALUES(?, ?, ?, ?,?)";
                $pstmt = $con->prepare($query);
                $pstmt->bindValue(1, $email);
                $pstmt->bindValue(2, $numOfPeople);
                $pstmt->bindValue(3, $numOfChildren);
                 $pstmt->bindValue(4, $dateToVisit);
                $pstmt->bindValue(5, $dateToLeave);
                $pstmt->execute();
                if (($pstmt->rowCount())>0){
                    echo '<div class="confirmation">
                <h2>Registration Successful</h2>
                <p>Thank you for registering! Your travel information has been successfully submitted.</p>
                <h3><u>Registration Details:</u></h3>              
                <p><strong>Email Address:</strong> ' . $email . '</p>                            
                <p><strong>Number Of People:</strong> ' . $numOfPeople . '</p>
                <p><strong>Number Of Children Under Age 18:</strong> ' . $numOfChildren . '</p>     
                <p><strong>Date to Visit Sri Lanka:</strong> ' . $dateToVisit . '</p>
                <p><strong>Date to Leave Sri Lanka:</strong> ' . $dateToLeave . '</p>
                    
               
                

                
            </div>';
                
                }else{
                    echo"Error";
                }
} catch (PDOException $exc) {
    echo $exc->getMessage();
        }
  
           


                

                
           
        } 
        ?>
         <button  onclick="window.location.href = 'Hotel.html';" class="btn-book-hotel">Proceed to Book Hotel</button>
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
