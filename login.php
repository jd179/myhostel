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

  </div>
</header>
    <section class="text-gray-600 body-font"> 
    <div class="container px-5 py-24 mx-auto flex flex-wrap items-center"> 
      <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0"> 
        <h1 class="title-font font-medium text-3xl text-gray-900">Already an existing user??</h1> 
        <p class="leading-relaxed mt-4">Write your user name and password here.</p> 
      </div> 
      <div class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0"> 
        <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Log In</h2> 
      <form action="logincheck.php" method="post"> 
        <div class="relative mb-4"> 
          <label for="full-name" class="leading-7 text-sm text-gray-600">Email Id</label> 
          <input type="email" id="full-name" name="email" 
            class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"> 
        </div> 
        <div class="relative mb-4"> 
          <label for="password" class="leading-7 text-sm text-gray-600">Password</label> 
          <input type="password" id="password" name="password" 
            class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"> 
        </div> 
        <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" name="submit">Login</button> 
        <p class="text-xs text-gray-500 mt-3">If you don't remember your password then sign up <a class="text-indigo-500" href="signup.html">here</a></p> 
      </div> 
    </div> 
  </form> 
  <div id="footer"></div> 
  </section> 
  </body> 
</html>