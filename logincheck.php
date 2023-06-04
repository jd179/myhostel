<?php
include('connection.php');
session_start();
if(isset($_POST['submit']))
{
    

    $useremail = $_POST['email'];
    $password = $_POST['password'];
    // $password = md5($password);


    $ret=mysqli_query($conn,"SELECT * FROM `dbt1` WHERE `emailid`  = '$useremail' and `password` = '$password';");
if($ret==true){
    
   $row=mysqli_num_rows($ret);
if($row>0){
    echo '<script>
    alert("Login Succesfull");
      let url = "http://localhost/MyHostel";
      window.location.href = url;
    
    
    </script>';
        $row1=mysqli_fetch_array($ret);
        $name =  $row1['fname'];
        $email1 =  $row1['emailid'];

        $_SESSION['username'] = $email1;
        
      // header('location:http://localhost/de/');
}
else{

    echo '<script>

    alert("Wrong Email/Password or you are not Registered");

      let url = "http://localhost/MyHostel/login.php";
      window.location.href = url;
    
    
    </script>';
   // echo "Not Logged in";
   // header('location:http://localhost/de/');
}
    }
}
?>