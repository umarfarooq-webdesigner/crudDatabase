<?php
    session_start();
    require 'db_connection.php';
?>




<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <script src="https://cdn.tailwindcss.com"></script>
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="content_style.css">

   <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />

   <!-- font family -->
   <link href="https://fonts.googleapis.com/css2?family=Bruno+Ace+SC&display=swap" rel="stylesheet">

</head>

<body>

   <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-ambers-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-amber-500 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
      <span class="sr-only">Open sidebar</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
         <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
         </path>
      </svg>
   </button>

   <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
      <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
         <ul class="space-y-2 font-medium">
            <!-- home -->
            <li>
               <a href="index.php" class="flex items-center p-2 text-amber-500 rounded-lg dark:text-amber-500 hover:bg-gray-100 dark:hover:bg-gray-700">

                  <svg aria-hidden="true" class="w-6 h-6 text-amber-500 transition duration-75 dark:text-amber-500 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
                  </svg>
                  <span class="ml-3">Home</span>
               </a>
            </li>
            <!-- registration form -->
            <li>
               <a href="home.php" class="flex items-center p-2 text-amber-500 rounded-lg dark:text-amber-500 hover:bg-gray-100 dark:hover:bg-gray-700">
                  <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-amber-500 transition duration-75 dark:text-amber-500 group-hover:text-gray-900 dark:group-hover:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6">
                     <path fill-rule="evenodd" d="M4.125 3C3.089 3 2.25 3.84 2.25 4.875V18a3 3 0 003 3h15a3 3 0 01-3-3V4.875C17.25 3.839 16.41 3 15.375 3H4.125zM12 9.75a.75.75 0 000 1.5h1.5a.75.75 0 000-1.5H12zm-.75-2.25a.75.75 0 01.75-.75h1.5a.75.75 0 010 1.5H12a.75.75 0 01-.75-.75zM6 12.75a.75.75 0 000 1.5h7.5a.75.75 0 000-1.5H6zm-.75 3.75a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5H6a.75.75 0 01-.75-.75zM6 6.75a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h3a.75.75 0 00.75-.75v-3A.75.75 0 009 6.75H6z" clip-rule="evenodd" />
                  </svg>
                  <span class="flex-1 ml-3 whitespace-nowrap">Registration Form</span>
               </a>
            </li>
            <!-- student details  -->
            <li>
               <a href="students_detail.php" class="flex items-center p-2 text-amber-500 rounded-lg dark:text-amber-500 hover:bg-gray-100 dark:hover:bg-gray-700">
                  <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-amber-500 transition duration-75 dark:text-amber-500 group-hover:text-gray-900 dark:group-hover:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6">
                     <path fill-rule="evenodd" d="M4.5 3.75a3 3 0 00-3 3v10.5a3 3 0 003 3h15a3 3 0 003-3V6.75a3 3 0 00-3-3h-15zm4.125 3a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5zm-3.873 8.703a4.126 4.126 0 017.746 0 .75.75 0 01-.351.92 7.47 7.47 0 01-3.522.877 7.47 7.47 0 01-3.522-.877.75.75 0 01-.351-.92zM15 8.25a.75.75 0 000 1.5h3.75a.75.75 0 000-1.5H15zM14.25 12a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H15a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5h3.75a.75.75 0 000-1.5H15z" clip-rule="evenodd" />
                  </svg>
                  <span class="flex-1 ml-3 whitespace-nowrap">Student Details</span>
               </a>
            </li>
            <!-- main page  -->
            <li>
               <a href="index.html" class="flex items-center p-2 text-amber-500 rounded-lg dark:text-amber-500 hover:bg-gray-100 dark:hover:bg-gray-700">
                  <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-amber-500 transition duration-75 dark:text-amber-500 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                  </svg>
                  <span class="flex-1 ml-3 whitespace-nowrap">Main Page</span>
               </a>
            </li>
            <!-- Sign In -->
            <li>
               <a href="#" class="flex items-center p-2 text-amber-500 rounded-lg dark:text-amber-500 hover:bg-gray-100 dark:hover:bg-gray-700">
                  <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-amber-500 transition duration-75 dark:text-amber-500 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path>
                  </svg>
                  <span class="flex-1 ml-3 whitespace-nowrap">Sign In</span>
               </a>
            </li>
            <!-- Sign up -->
            <li>
               <a href="#" class="flex items-center p-2 text-amber-500 rounded-lg dark:text-amber-500 hover:bg-gray-100 dark:hover:bg-gray-700">
                  <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-amber-500 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path>
                  </svg>
                  <span class="flex-1 ml-3 whitespace-nowrap">Sign Up</span>
               </a>
            </li>
            <!-- CRUD -->
            <li>
               <h1 class="auto_typing text-amber-500 text-center font-bold uppercase mt-20">CRUD</h1>
            </li>

         </ul>
      </div>
   </aside>





   <div class="p-4 sm:ml-64">
      <div class="p-2 border-2 border-gray-200 border-solid rounded-lg dark:border-gray-700">
         <!-- component -->

         <!-- <body class="font-mono bg-gray-400"> -->
         <!-- Container -->
         <div class="flex justify-center px-1 w-full">
            <!-- Row -->
            <div class="w-full xl:w-11/12 lg:w-11/12 flex">
               <!-- Col -->
               <div class="w-full h-full bg-gray-400 hidden lg:block lg:w-6/12 bg-cover rounded-l-lg" style="background-image: url('../assets/students.webp')"></div>
               <!-- Col -->
               <div class="w-full lg:w-6/12 bg-gray-100 p-5 rounded-lg lg:rounded-l-none">
               <?php include('message.php'); ?>

                  <h3 class="pt-4 text-2xl text-center pb-6 font-bold">Create an Account!</h3>

                  <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded" action="code.php" method="POST">
                     <div class="mb-4 md:flex md:justify-between">

                        <div class="mb-4 md:mr-2 md:mb-0">
                           <label class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
                              First Name <span class="text-rose-600 text-lg">*</span>
                           </label>
                           <input class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="firstName" name="firstName" type="text" required placeholder="Mark"/>
                        </div>

                        <div class="md:ml-2">
                           <label class="block mb-2 text-sm font-bold text-gray-700" for="lastName">
                              Last Name <span class="text-rose-600 text-lg">*</span>
                           </label>
                           <input class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="lastName" name="lastName" type="text" required placeholder="Otto" />
                        </div>

                     </div>

                     <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                           Email <span class="text-rose-600 text-lg">*</span>
                        </label>
                        <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="email" type="email" name="email" required placeholder="someoneexample249@gmail.com" />
                     </div>

                     <div class="mb-4 ">
                        <label class="block mb-1 text-sm font-bold text-gray-700" for="address">
                           Gender <span class="text-rose-600 text-lg">*</span>
                        </label>
                        <div class="flex lg:gap-4 sm:gap-2">
                           <div class="inline-flex items-center">
                              <label class="relative flex cursor-pointer items-center rounded-full p-3" for="ripple-on" data-ripple-dark="true">
                                 <input id="ripple-on" name="ripple" type="radio" class="before:content[''] peer relative h-4 w-4 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-pink-500 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-pink-500 checked:before:bg-pink-500 hover:before:opacity-10" checked />
                                 <div class="pointer-events-none absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 text-pink-500 opacity-0 transition-opacity peer-checked:opacity-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 16 16" fill="currentColor">
                                       <circle data-name="ellipse" cx="8" cy="8" r="8"></circle>
                                    </svg>
                                 </div>
                              </label>
                              <label class="mt-px cursor-pointer select-none font-light text-gray-700" for="ripple-on">
                                 Male
                              </label>
                           </div>
                           <div class="inline-flex items-center">
                              <label class="relative flex cursor-pointer items-center rounded-full p-3" for="ripple-off">
                                 <input id="ripple-off" name="ripple" type="radio" class="before:content[''] peer relative h-4 w-4 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-pink-500 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-pink-500 checked:before:bg-pink-500 hover:before:opacity-10" />
                                 <div class="pointer-events-none absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 text-pink-500 opacity-0 transition-opacity peer-checked:opacity-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 16 16" fill="currentColor">
                                       <circle data-name="ellipse" cx="8" cy="8" r="8"></circle>
                                    </svg>
                                 </div>
                              </label>
                              <label class="mt-px cursor-pointer select-none font-light text-gray-700" for="ripple-off">
                                 Female
                              </label>
                           </div>

                           <div class="inline-flex items-center">
                              <label class="relative flex cursor-pointer items-center rounded-full p-3" for="ripple-off">
                                 <input id="ripple-off" name="ripple" type="radio" class="before:content[''] peer relative h-4 w-4 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-pink-500 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-pink-500 checked:before:bg-pink-500 hover:before:opacity-10" />
                                 <div class="pointer-events-none absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 text-pink-500 opacity-0 transition-opacity peer-checked:opacity-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 16 16" fill="currentColor">
                                       <circle data-name="ellipse" cx="8" cy="8" r="8"></circle>
                                    </svg>
                                 </div>
                              </label>
                              <label class="mt-px cursor-pointer select-none font-light text-gray-700" for="ripple-off">
                                 Other
                              </label>
                           </div>


                        </div>
                     </div>

                     <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="address">
                           Address
                        </label>
                        <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="address" type="text" name="address" placeholder="Captan Jamal Road, Lahore." />
                     </div>

                     <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="phone">
                           Phone <span class="text-rose-600 text-lg">*</span>
                        </label>
                        <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="phone" type="number" name="phone" required placeholder="+92 123456789" />
                     </div>

                     <div class="mb-4 md:flex md:justify-between">
                        <div class="mb-4 md:mr-2 md:mb-0">
                           <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                              Password <span class="text-rose-600 text-lg">*</span>
                           </label>
                           <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="password" type="password" name="password" required placeholder="******************" />
                        </div>

                        <div class="md:ml-2">
                           <label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
                              Confirm Password <span class="text-rose-600 text-lg">*</span>
                           </label>
                           <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="c_password" type="password" required placeholder="******************" />
                        </div>
                     </div>

                     <div class="mb-6 text-center">

                        <button class="w-full px-4 py-2 font-bold text-white bg-amber-500 rounded-full hover:bg-amber-700 focus:outline-none focus:shadow-outline" type="submit" name="save_student_data">
                           Register Account
                        </button>

                     </div>
                     <hr class="mb-6 border-t" />
                     <div class="text-center">
                        <a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800" href="#">
                           Forgot Password?
                        </a>
                     </div>
                     <div class="text-center">
                        <a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800" href="./index.html">
                           Already have an account? Login!
                        </a>
                     </div>
                  </form>
               </div>
            </div>
         </div>
</body>
</div>




</div>


</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<script src="script.js"></script>



</body>

</html>