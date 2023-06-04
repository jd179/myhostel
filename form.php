<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>MyHostel</title>
  <link href="https://unpkg.com/tailwindcss@^2.2.7/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous">
    </script>
  <script>
    $(function () {
      $("#footer").load("footer.html");
    });
  </script>
</head>

<body>
<header class="text-gray-600 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a href="index.php"class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
      
      <span>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" />
        </svg>
        
      </span>
      <span class="ml-3 text-xl">MyHostel</span>
    </a>
    <?php

    if(isset($_SESSION['username'])){
    
      $useremail = $_SESSION['username'];
     $query="select * from dbt1 where emailid = '$useremail'";  
     $connect=mysqli_query($conn,$query);  
     $num=mysqli_num_rows($connect); //check in database any data have or not
    
    ?>
    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
        <a class="mr-5 hover:text-gray-900" href="index.php">Home</a>
        <a class="mr-5 hover:text-gray-900" href="Hostel&PG.php">Hostels AND PG</a>
        <a class="mr-5 hover:text-gray-900" href="form.php">Reservation</a>
        <a class="mr-5 hover:text-gray-900" href="contact.php">Contact Us</a>
        <a class="mr-5 hover:text-gray-900" href="profile.php"> My account</a>
        <a class="mr-5 hover:text-gray-900" href="logout.php">Logout</a>
    </nav>
        
        <?php }
            
            
            else 
            {  ?>
            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
          <a class="mr-5 hover:text-gray-900" href="index.php">Home</a>
          <a class="mr-5 hover:text-gray-900" href="Hostel&PG.php">Hostels AND PG</a>
          
          <a class="mr-5 hover:text-gray-900" href="contact.php">Contact Us</a>
          <a class="mr-5 hover:text-gray-900" href="login.php">Login</a>
          
          <a href="signup.php"><button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Sign Up
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
            </button></a>
          <?php  }?>

  </div>
</header>
<section class="text-gray-600 body-font relative">
    <form action="validation.php" method="post">


    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-12">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Inquery Form</h1>
          <p class="lg:w-2/3 mx-auto leading-relaxed text-base">We are requesting you to fill your details.</p>
      </div>
      <div class="lg:w-1/2 md:w-2/3 mx-auto">
        <div class="flex flex-wrap -m-2">
          <div class="p-2 w-1/2">
            <div class="relative">
              <label for="firstName" class="leading-7 text-sm text-gray-600">First Name</label>
                <input type="text" id="firstName" name="fname" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"/>
              </div>
          </div>
          <div class="p-2 w-1/2">
            <div class="relative">
              <label for="lastName" class="leading-7 text-sm text-gray-600">Last Name</label>
                <input type="text" id="lastName" name="lname" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"/>
              </div>
          </div>
          <div class="p-2 w-1/2">
            <div class="relative">
              <label for="age" class="leading-7 text-sm text-gray-600">Age</label>
                <input type="text" id="age" name="age" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"/>
              </div>
          </div>
          <div class="p-2 w-1/2">
            <div class="relative">
                <label for="gender" class="leading-7 text-sm text-gray-600">Gender</label>
                <div class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                  <label for="male">
                    <input type="radio" name="gender" value="male" id="male"/>&nbsp Male</label>&nbsp
                  <label for="female">
                    <input type="radio" name="gender" value="female" id="female"/>&nbsp Female</label>&nbsp
                  <label for="others">
                    <input type="radio" name="gender" value="others" id="others"/>&nbsp Others</label>
                </div>
            </div>
          </div>
          <div class="p-2 w-1/2">
            <div class="relative">
              <label for="number" class="leading-7 text-sm text-gray-600">Phone Number</label>
                <input type="number" id="number" name="pno" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"/>
              </div>
          </div>
          <div class="p-2 w-1/2">
            <div class="relative">
              <label for="address" class="leading-7 text-sm text-gray-600">Address</label>
                <input type="textarea" id="address" name="address" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"/>
              </div>
          </div>
          <div class="p-2 w-1/2">
            <div class="relative">
              <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                <input type="text" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"/>
              </div>
          </div>
          <div class="p-2 w-1/2">
            <div class="relative">
              <label for="rt" class="leading-7 text-sm text-gray-600">Room Type</label>
                <div class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                  <label for="ac" class="leading-7 text-sm text-gray-600">
                    <input type="radio" name="rt" value="ac" id="ac"/>&nbsp AC Room</label>&nbsp
                  <label for="rt" class="leading-7 text-sm text-gray-600">
                    <input type="radio" name="rt" value="nac" id="nac"/>&nbsp Non-AC Room</label>&nbsp
                </div>
            </div>
          </div>
          <div class="p-2 w-1/2">
            <div class="relative">
              <label for="hname" class="leading-7 text-sm text-gray-600">Choose a hostel</label>
              <select name="hname" id="hname" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                  <option value="pg1">Patel PG</option>
                  <option value="pg2">Perfect PG</option>
                  <option value="pg3">SKY Girls & Boys PG</option>
                  <option value="pg4">38 MANGAL BHAVAN BOY'S HOSTEL</option>
                  <option value="pg1">N.L SHAH BOY'S HOSTEL</option>
                  <option value="pg1">Mother's House Hostel</option>
                  <option value="pg1">L.R. Jain Hostel</option>
                  <option value="pg1">Shivangi Hostel</option>
              </select>
            </div>
          </div>

        </div><br><br>
        <center>
          <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Submit</button>
        </center>
      </div>
    </div>
    </form>
</section>
<div id="footer"></div>
</body>
</html>