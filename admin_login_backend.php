 <?php
 
    $host = "localhost";  
    $user = "visagan";  
    $password = "visagan";  
    $db_name = "travel_planner";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  


$email = $_POST["email"];
$loginpassword = $_POST["password"];
$sql = "select *from Admin where Email_Address = '$email' and Password = '$loginpassword'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count === 1) {
    header("Location:Admin.php");
    die;
} else {
    header("Location:admin_login.php?error=1");
    die;
}
?>

 
