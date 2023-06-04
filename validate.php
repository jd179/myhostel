
<?php

// require("PHPMailer/src/PHPMailer.php");
// require("PHPMailer/src/SMTP.php");
    
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $emailid = $_POST['emailid'];
    $password = $_POST['password'];
    //$password = md5($password);
    $pno = $_POST['pno'];
    
    
        $conn = new mysqli("localhost", "root","", "db1");
        if($conn->connect_error){
            die('Connection Failed : '.$conn->connect_error);
        }else{
    
    $stmt = $conn->prepare("insert into dbt1(fname,lname,emailid,password,pno)
            values(?,?,?,?,?)");
            $stmt->bind_param("ssssi",$fname,$lname,$emailid,$password,$pno);
            $stmt->execute(); 
            // echo "Registration Successfully....";
            echo '<script>

     alert("Registered Successfully Please Login ");

      let url = "http://localhost/de/MyHostel-main/login.html";
      window.location.href = url;
        </script>';
            $stmt->close();
            $conn->close();
        }

        // header('location:http://localhost/de/');

       
    
    
    // if(isset($_POST['submit'])){
    
                                                            
    
    // $to = $_POST['email'];
    //                   $subject = "Registered Succesfully";
                      
    //                   $message = "<b>Welcome to our Website , you are successfully Registered
    //                                to our Website . The Other Email Ids $email1 and $email2 will also get an email 
    //                                that they are registered as your SOS email by you.
                                   
    //                                PLEASE IGNORE THIS , THIS WEBSITE IS UNDER DEVELOPMENT AND DUE
    //                                TO TESTING THIS EMAIL HAS BEEN SENT TO YOU.</b>";
                      
                      
    //                    $mail = new PHPMailer\PHPMailer\PHPMailer();
    //                    $mail->IsSMTP(); // enable SMTP
    
    //                 //   $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    //                    $mail->SMTPAuth = true; // authentication enabled
    //                    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    //                    $mail->Host = "smtp.gmail.com";
    //                    $mail->Port = 465; // or 587
    //                    $mail->IsHTML(true);
    //                    $mail->Username = "teamcodeterror03@gmail.com";
    //                    $mail->Password = "akpviclbosvxnkci";
    //                    $mail->SetFrom("teamcodeterror03@gmail.com");
    //                    $mail->Subject = "$subject";
    //                    $mail->Body = "$message";
    //                    $mail->AddAddress("$to");
    
    //     if(!$mail->Send()) {
    //      //  echo "Mailer Error: " . $mail->ErrorInfo;
           
    //     } else {
    //        echo "Message has been sent";
    //        header('location:loginform.php');
    //     }
                      
                      
    
    
    // $to1 = $_POST['email1'];
    // $to2 = $_POST['email2'];
    //                   $subject1 = "Registered Succesfully";
                      
    //                   $message1 = "<b>Hello , you are registered as SOS by your Friend $name.
    //                              For any Information regarding us that why this email is sent to you, please ask $name.
                                 
    //                              PLEASE IGNORE THIS , THIS WEBSITE IS UNDER DEVELOPMENT AND DUE
    //                                TO TESTING THIS EMAIL HAS BEEN SENT TO YOU.</b>";
                      
                      
    //                   $mail = new PHPMailer\PHPMailer\PHPMailer();
    //                    $mail->IsSMTP(); // enable SMTP
    
    //                    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    //                    $mail->SMTPAuth = true; // authentication enabled
    //                    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    //                    $mail->Host = "smtp.gmail.com";
    //                    $mail->Port = 465; // or 587
    //                    $mail->IsHTML(true);
    //                    $mail->Username = "teamcodeterror03@gmail.com";
    //                    $mail->Password = "akpviclbosvxnkci";
    //                    $mail->SetFrom("teamcodeterror03@gmail.com");
    //                    $mail->Subject = "$subject1";
    //                    $mail->Body = "$message1";
    //                    $mail->AddAddress("$to1");
    //                    $mail->AddAddress("$to2");
    
    //     if(!$mail->Send()) {
    //       // echo "Mailer Error: " . $mail->ErrorInfo;
           
    //     } else {
    //        echo "Message has been sent";
           
    //     }
    
    //     header('location:loginform.php');
    //       }
    
?>


