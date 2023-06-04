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
      <a href="index.php" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">

        <span>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" />
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
        <a class="mr-5 hover:text-gray-900" href="contact.php">Contact Us</a>
        <a class="mr-5 hover:text-gray-900" href="profile.php">My Account</a>
        <a class="mr-5 hover:text-gray-900" href="logout.php">Logout</a>
      </nav>
      <?php }
    else
    {  ?>
      <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
        <a class="mr-5 hover:text-gray-900" href="index.php">Home</a>
        <a class="mr-5 hover:text-gray-900" href="Hostel&PG.php">Hostels And PG</a>
        <a class="mr-5 hover:text-gray-900" href="contact.php">Contact Us</a>
        <a class="mr-5 hover:text-gray-900" href="login.php">Login</a>
        <a href="signup.php">
          <button
            class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Sign
            Up
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="w-4 h-4 ml-1" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </button>
        </a>
        <?php  }?>

    </div>
  </header>
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap w-full mb-20">
      <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Explore Ahmedabad Hostels</h1>
        <div class="h-1 w-20 bg-indigo-500 rounded"></div>
      </div>
      <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Explore different Hostels and Cities all around
        the
        world on a budget with great pricing </p>
    </div>


    <div class="container mx-auto flex px-5 py-20 md:flex-row flex-col items-center">
      <div
        class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
        <p class="mb-8 leading-relaxed">Ahmadabad's no. 1 paying guest for boys & girls...is <b>"Patel paying guest".</b>
           we provide <b> all facility like homely facility..</b> personally bed, cupboard, bed sheet, pillow with cover. 
           led t.v with cable, freeze, r.o water system. wi-fi, free electricity,* laundry facillity A.C FACILITY*
           (electricity extra) morning break fast, deluxe lunch, unlimited diner... every week sweet & farsan.. 
           specially home made test.. house keeping facility, <b>good security for girls & boys call 9228220838 or 75 67666766"</b>
        </p>
      </div>
      <div class="xl:w-1/3 md:w-1/2 p-4">
        <p class="block relative h-50 rounded overflow-hidden">
            <img class="h-80 rounded w-full object-cover object-center mb-6" src="img/colleges/ahmedabad/patel_pg.jpeg"
              alt="content">
          </p>
          <div class="mt-4">
            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Satellite(jodhpur)</h3>
            <h2 class="text-gray-900 title-font text-lg font-medium">Patel PG</h2>
            <p class="mt-1">Startiing from 8000/- pp.</p>
          </div>
      </div>
    </div>
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
      <div class="xl:w-1/3 md:w-1/2 p-4">
      <a class="block relative h-50 rounded overflow-hidden">
          <img class="h-80 rounded w-full object-cover object-center mb-6" src="img/colleges/ahmedabad/perfect_pg.jpeg"
            alt="content">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Bodakdev</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">Perfect PG</h2>
          <p class="mt-1">Startiing from 9000/- pp.</p>
        </div>
      </div>
      <div
        class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center ">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Get Your Rooms Now
          <br class="hidden lg:inline-block">
        </h1>
        <p class="mb-8 leading-relaxed">Discover popular Hostels for best experience.</p>
        <div class="flex justify-center">
          <a href="form.php"><button href="form.php"
              class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Book
              Now!</button></a>
        </div>
      </div>
    </div>
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
      <div
        class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Hostels around
          <br class="hidden lg:inline-block">the world
        </h1>
        <p class="mb-8 leading-relaxed">Take a Hotel from us and experience the most amazing services!</p>
        <div class="flex justify-center">
          <a href="Hostel&PG.php"><button
              class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Different
              Areas</button></a>
        </div>
      </div>
      <div class="xl:w-1/3 md:w-1/2 p-4">
      <a class="block relative h-50 rounded overflow-hidden">
          <img class="h-80 rounded w-full object-cover object-center mb-6"
            src="img/colleges/ahmedabad/skygirls&boys_pg.jpeg" alt="content">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">NAVRANGPURA</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">SKY Girls & Boys PG</h2>
          <p class="mt-1">Startiing from 9500/- pp.</p>
        </div>
      </div>
    </div>
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
      <div class="xl:w-1/3 md:w-1/2 p-4">
      <a class="block relative h-50 rounded overflow-hidden">
          <img class="h-80 rounded w-full object-cover object-center mb-6" src="img/colleges/ahmedabad/38mangal.jpeg"
            alt="content">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">JODHPUR GAM</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">38 MANGAL BHAVAN BOY'S HOSTEL</h2>
          <p class="mt-1">Startiing from 12000/- pp.</p>
        </div>
      </div>
      <div
        class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center ">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Get Your Rooms Now
          <br class="hidden lg:inline-block">
        </h1>
        <p class="mb-8 leading-relaxed">Discover popular Hostels for best experience.</p>
        <div class="flex justify-center">
          <a href="form.php"><button href="form.php"
              class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Book
              Now!</button></a>
        </div>
      </div>
    </div>
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
      <div
        class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Hostels around
          <br class="hidden lg:inline-block">the world
        </h1>
        <p class="mb-8 leading-relaxed">Take a Hotel from us and experience the most amazing services!</p>
        <div class="flex justify-center">
          <a href="Hostel&PG.php"><button
              class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Different
              Areas</button></a>
        </div>
      </div>
      <div class="xl:w-1/3 md:w-1/2 p-4">
      <a class="block relative h-50 rounded overflow-hidden">
          <img class="h-80 rounded w-full object-cover object-center mb-6" src="img/colleges/ahmedabad/nlshah.jpeg"
            alt="content">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">SATELLITE</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">N.L SHAH BOY'S HOSTEL</h2>
          <p class="mt-1">Startiing from 15000/- pp.</p>
        </div>
      </div>
    </div>
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
      <div class="xl:w-1/3 md:w-1/2 p-4">
      <a class="block relative h-50 rounded overflow-hidden">
          <img class="h-80 rounded w-full object-cover object-center mb-6" src="img/colleges/ahmedabad/motherhouse.jpeg"
            alt="content">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">THALTEJ</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">Mother's House Hostel</h2>
          <p class="mt-1">Startiing from 18000/- pp.</p>
        </div>
      </div>
      <div
        class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center ">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Get Your Rooms Now
          <br class="hidden lg:inline-block">
        </h1>
        <p class="mb-8 leading-relaxed">Discover popular Hostels for best experience.</p>
        <div class="flex justify-center">
          <a href="form.php"><button href="form.php"
              class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Book
              Now!</button></a>
        </div>
      </div>
    </div>
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
      <div
        class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Hostels around
          <br class="hidden lg:inline-block">the world
        </h1>
        <p class="mb-8 leading-relaxed">Take a Hotel from us and experience the most amazing services!</p>
        <div class="flex justify-center">
          <a href="Hostel&PG.php"><button
              class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Different
              Areas</button></a>
        </div>
      </div>
      <div class="xl:w-1/3 md:w-1/2 p-4">
      <a class="block relative h-50 rounded overflow-hidden">
          <img class="h-80 rounded w-full object-cover object-center mb-6" src="img/colleges/ahmedabad/lrjain.jpeg"
            alt="content">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Memnagar</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">L.R. Jain Hostel</h2>
          <p class="mt-1">Startiing from 13000/- pp.</p>
        </div>
      </div>
    </div>
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
      <div class="xl:w-1/3 md:w-1/2 p-4">
      <a class="block relative h-50 rounded overflow-hidden">
          <img class="h-80 rounded w-full object-cover object-center mb-6" src="img/colleges/ahmedabad/shivangi.jpeg"
            alt="content">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">ELLISBRIDGE</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">Shivangi Hostel</h2>
          <p class="mt-1">Startiing from 11000/- pp.</p>
        </div>
      </div>
      <div
        class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center ">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Get Your Rooms Now
          <br class="hidden lg:inline-block">
        </h1>
        <p class="mb-8 leading-relaxed">Discover popular Hostels for best experience.</p>
        <div class="flex justify-center">
          <a href="form.php"><button href="form.php"
              class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Book
              Now!</button></a>
        </div>
      </div>
    </div>
  </div>
  <center>
    <a href="form.php"><button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Inquery Form</button></a>
  </center>
  <div id="footer"></div>
</body>

</html>