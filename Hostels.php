<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MyHostel</title>
    <link href="https://unpkg.com/tailwindcss@^2.2.7/dist/tailwind.min.css" rel="stylesheet">
    <script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous">
</script>
<script> 
$(function(){
  $("#footer").load("footer.html"); 
});
</script> 
  </head>
  <body>
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Search Best Hostels in your city</h1>
      <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Search and compare all the hostel present in your area.</p>
    </div>
  <!-- </div> -->

<!-- </section> -->
<!-- <div class="container px-5 py-24 mx-auto"> -->
  <div class="flex flex-wrap w-full mb-20">
    <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Explore Destinations</h1>
      <div class="h-1 w-20 bg-indigo-500 rounded"></div>
    </div>
    <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Explore different cities and countries all around the world on a budget with great pricing </p>
  </div>

<!-- </div> -->
<!-- <section class="text-gray-600 body-font"> -->
  <!-- <div class="container px-5 py-24 mx-auto"> -->
    <div class="flex flex-wrap -m-4">
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="img/city/ahmedabad.jpeg">
        </a>
        <div class="mt-4">
          <h2 class="text-gray-900 title-font text-lg font-medium">Ahmedabad</h2>
        </div>
      </div>
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="img/city/banglore.jpeg">
        </a>
        <div class="mt-4">
          <h2 class="text-gray-900 title-font text-lg font-medium">Banglore</h2>
        </div>
      </div>
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="img/city/hyderabad.jpeg">
        </a>
        <div class="mt-4">
          <h2 class="text-gray-900 title-font text-lg font-medium">Hyderabad</h2>
        </div>
      </div>
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="img/city/delhi.jpeg">
        </a>
        <div class="mt-4">
          <h2 class="text-gray-900 title-font text-lg font-medium">Delhi</h2>
        </div>
      </div>
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="img/city/varanasi.jpeg">
        </a>
        <div class="mt-4">
          <h2 class="text-gray-900 title-font text-lg font-medium">Varanasi</h2>
        </div>
      </div>
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="img/city/kolkata.jpeg">
        </a>
        <div class="mt-4">
          <h2 class="text-gray-900 title-font text-lg font-medium">Kolkata</h2>
        </div>
      </div>
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="img/city/mumbai.jpeg">
        </a>
        <div class="mt-4">
          <h2 class="text-gray-900 title-font text-lg font-medium">Mumbai</h2>
        </div>
      </div>
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="img/city/haridwar.jpeg">
        </a>
        <div class="mt-4">
          <h2 class="text-gray-900 title-font text-lg font-medium">Haridwar</h2>
        </div>
      </div>
    </div>
  </div>
  </section>
  <div id="footer"></div>
  </body>
</html>
