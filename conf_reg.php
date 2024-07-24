 <?php
 
 require './classes/DbConnector.php';
 
 use classes\DbConnector; 
 $dbcon=new DbConnector();
 ?>
<html>
<head>
  <title>Thank You</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color:#f2f1e1;
    }

    .container {
      max-width: 500px;
      margin: 0 auto;
      padding: 80px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      text-align: center;
      margin-top: 200px;
    }
    h1{
        color:blue;
    }
  </style>
</head>
<body>
  <div class="container">
      <?php

            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"]; 
            $password = $_POST["password"];
            $email = $_POST["email"];
            $address=$_POST["address"];
            
       
            
            try {
    $con=$dbcon->getConnection();
    $query = "INSERT INTO traveler(First_Name, Last_Name,Email_Address, Address, Password) VALUES(?, ?, ?, ?,?)";
                $pstmt = $con->prepare($query);
                $pstmt->bindValue(1, $firstname);
                $pstmt->bindValue(2, $lastname);
                $pstmt->bindValue(3, $email);
                 $pstmt->bindValue(4, $address);
                $pstmt->bindValue(5, $password);
                $pstmt->execute();
                if (($pstmt->rowCount())>0){
                    echo "Registeration Successful";
                
                }else{
                    echo"Error";
                }
} catch (PDOException $exc) {
    echo $exc->getMessage();
}
     
      ?>
      
      <p> Please <a href="login.php">Click</a> here to Login </p>
      
  </div>  
</body>
</html>