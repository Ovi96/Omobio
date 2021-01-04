<?php
session_start();
include_once('database/connection.php');

$fetchedemail = $_POST['uemail'];
$fetchedpassword = $_POST['upass'];

$sql = "SELECT * FROM user WHERE email='$fetchedemail' AND password='$fetchedpassword'";

if($result = mysqli_query($conn, $sql)){
    if($rowcount = mysqli_num_rows($result) == 1)
    {
        $_SESSION['email'] = $fetchedemail;
        
        header("location:list.php");
       
    }
    else{
        ?>
               <script language="JavaScript">
                   alert('Login Failed!');
                 document.location='src/App.js';
               </script>
               <?php
        
    }

}
else{
	echo "Failed to connect to MySQL";
}



?>
