<?php

 require './classes/DbConnector.php';
 
 use classes\DbConnector; 
 $dbcon=new DbConnector();
 

$name=$_POST["name"];
$email=$_POST["email"];
$subject=$_POST["subject"];
$message=$_POST["message"];


try {
    $con=$dbcon->getConnection();
    $query = "INSERT INTO user_message(Name, Email_Address, Subject, Message) VALUES(?, ?, ?, ?)";
                $pstmt = $con->prepare($query);
                $pstmt->bindValue(1, $name);
                $pstmt->bindValue(2, $email);
                $pstmt->bindValue(3, $subject);
                $pstmt->bindValue(4, $message);
                $pstmt->execute();
                if (($pstmt->rowCount())>0){
                    header("Location:Home.html");
                    die;
                }else{
                    echo"Error";
                }
} catch (PDOException $exc) {
    echo $exc->getMessage();
}
   

?>