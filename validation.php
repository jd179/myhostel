<?php
	require("PHPMailer/src/PHPMailer.php");
	require("PHPMailer/src/SMTP.php");
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$pno = $_POST['pno'];
	$email = $_POST['email'];
	$rt = $_POST['rt'];
	$hname = $_POST['hname'];
	$address = $_POST['address'];

	// Database connection
	$conn = new mysqli('localhost','root','','db');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
        header('location:form.php');
	} else {
		$stmt = $conn->prepare("insert into form(fname, lname, age, gender, pno, email, rt, hname, address) values( ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssissss", $fname, $lname, $age, $gender, $pno, $email, $rt , $hname, $address);
		$execval = $stmt->execute();
		echo $execval;
		header('location:index.php');
		$stmt->close();
		$conn->close();
	




    
                                                            
    
    $to = $_POST['email'];
                      $subject = "Registered Succesfully";
                      
                      $message = "<b>Welcome to our Website</b>";
                      
                      
                       $mail = new PHPMailer\PHPMailer\PHPMailer();
                       $mail->IsSMTP(); // enable SMTP
    
                    //   $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
                       $mail->SMTPAuth = true; // authentication enabled
                       $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
                       $mail->Host = "smtp.gmail.com";
                       $mail->Port = 465; // or 587
                       $mail->IsHTML(true);
                       $mail->Username = "myhostel007@gmail.com";
                       $mail->Password = "bbordsnpiiektafp";
                       $mail->SetFrom("myhostel007@gmail.com");
                       $mail->Subject = "$subject";
                       $mail->Body = "$message";
                       $mail->AddAddress("$to");
    
        if(!$mail->Send()) {
           echo "Mailer Error: " . $mail->ErrorInfo;
           
        } else {
           echo "Message has been sent";
           header('location:http://localhost/MyHostel/');
        }
          }
	?>