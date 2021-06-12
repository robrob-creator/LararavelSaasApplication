<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Workkit</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Font Awesome if you need it
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
  -->
    <link
      href="https://unpkg.com/tailwindcss/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <!--Replace with your tailwind.css once created-->
    <link
      href="https://unpkg.com/@tailwindcss/custom-forms/dist/custom-forms.min.css"
      rel="stylesheet"
    />
    <!--Tailwind Custom Forms - use to standardise form fields - https://github.com/tailwindcss/custom-forms-->

    <style>
      @import url("https://rsms.me/inter/inter.css");
      html {
        font-family: Montserrat;
      }

      .gradient {
        background-image: url("/images/bg.png");
            background-repeat: no-repeat;
            background-size: 100% 19%;
      }

      button,
      .gradient2 {
        background-color: #f39f86;
        background-image: linear-gradient(315deg, #f39f86 0%, #f9d976 74%);
      }

      /* Browser mockup code
 * Contribute: https://gist.github.com/jarthod/8719db9fef8deb937f4f
 * Live example: https://updown.io
 */

      .browser-mockup {
        border-top: 2em solid rgba(230, 230, 230, 0.7);
        position: relative;
        height: 60vh;
      }

      .browser-mockup:before {
        display: block;
        position: absolute;
        content: "";
        top: -1.25em;
        left: 1em;
        width: 0.5em;
        height: 0.5em;
        border-radius: 50%;
        background-color: #f44;
        box-shadow: 0 0 0 2px #f44, 1.5em 0 0 2px #9b3, 3em 0 0 2px #fb5;
      }

      .browser-mockup > * {
        display: block;
      }

      /* Custom code for the demo */
    </style>
  </head>
  <body
    class="text-gray-700 bg-white"
    style="font-family: 'Source Sans Pro', sans-serif"
  >
    <!--Nav-->
    <nav>
      <div
        class="container mx-auto px-6 py-2 flex justify-between items-center"
      >
        <a class="font-bold text-2xl lg:text-4xl" href="#">
         WORKKIT
        </a>
        <div class="block lg:hidden">
          <button
            class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-800 hover:border-teal-500 appearance-none focus:outline-none"
          >
            <svg
              class="fill-current h-3 w-3"
              viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg"
            >
              <title>Menu</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
          </button>
        </div>
        <div class="hidden lg:block">
          <ul class="inline-flex">
            <li>
              <a class="px-4 font-bold" href="{{ route('login') }}">Login</a>
            </li>
            <li>
              <a class="px-4 hover:text-gray-800"href="{{ route('register') }}">Register</a>
            </li>
           
          </ul>
        </div>
      </div>
    </nav>
    <!--Hero-->
    <div
      class="py-20"
      style="background-image: url('/images/bg.png');background-repeat: no-repeat;background-size: 100% 100%"
    >
      <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold mb-2 text-blue-400">
          The Saas Workkit
        </h2>
        <h3 class="text-2xl mb-8 text-gray-300">
          Team service platform
        </h3>
        <a href="{{ route('login') }}">
        <button
          class="bg-white font-bold rounded-full py-4 px-8 shadow-lg uppercase tracking-wider"
         
        >
          Login
        </button>
        </a>
      </div>
    </div>
   
    <!-- Testimonials -->
    <section class="bg-gray-100">
      <div class="container mx-auto px-6 py-20">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-8">
          Benifits
        </h2>
        <div class="flex flex-wrap">
          <div class="w-full md:w-1/3 px-2 mb-4">
            <div class="bg-white rounded shadow py-2">
              <p class="text-gray-800 text-base px-6 mb-5">
                Makes work a lot faster and easier.
              </p>
              <p class="text-gray-500 text-xs md:text-sm px-6">
                Work
              </p>
            </div>
          </div>
          <div class="w-full md:w-1/3 px-2 mb-4">
            <div class="bg-white rounded shadow py-2">
              <p class="text-gray-800 text-base px-6 mb-5">
               Makes Communication faster througout the team
              </p>
              <p class="text-gray-500 text-xs md:text-sm px-6">
                Communication
              </p>
            </div>
          </div>
          <div class="w-full md:w-1/3 px-2 mb-4">
            <div class="bg-white rounded shadow py-2">
              <p class="text-gray-800 text-base px-6 mb-5">
                Helps develop teamwork across to its teamns and users
              </p>
              <p class="text-gray-500 text-xs md:text-sm px-6">
                James Doe
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Call to Action-->
    <section style="background-color: #022449">
      <div class="container mx-auto px-6 text-center py-20">
        <h2 class="mb-6 text-4xl font-bold text-center text-white">
         Join Us
        </h2>
        <h3 class="my-4 text-2xl text-white">
         What are you waiting for register now!
        </h3>
        <a  a href="{{ route('register') }}">
        <button
          class="bg-white font-bold rounded-full mt-6 py-4 px-8 shadow-lg uppercase tracking-wider"
        >
         Register
        </button>
        </a>
      </div>
    </section>
    <!--Footer-->
    <footer class="bg-gray-100">
      <div class="container mx-auto px-6 pt-10 pb-6">
        <div class="flex flex-wrap">
          <div class="w-full md:w-1/4 text-center md:text-left ">
            <h5 class="uppercase mb-6 font-bold">Links</h5>
            <ul class="mb-4">
              <li class="mt-2">
                <a
                  href="#"
                  class="hover:underline text-gray-600 hover:text-orange-500"
                  >FAQ</a
                >
              </li>
              <li class="mt-2">
                <a
                  href="#"
                  class="hover:underline text-gray-600 hover:text-orange-500"
                  >Help</a
                >
              </li>
              <li class="mt-2">
                <a
                  href="#"
                  class="hover:underline text-gray-600 hover:text-orange-500"
                  >Support</a
                >
              </li>
            </ul>
          </div>
          <div class="w-full md:w-1/4 text-center md:text-left ">
            <h5 class="uppercase mb-6 font-bold">Legal</h5>
            <ul class="mb-4">
              <li class="mt-2">
                <a
                  href="#"
                  class="hover:underline text-gray-600 hover:text-orange-500"
                  >Terms</a
                >
              </li>
              <li class="mt-2">
                <a
                  href="#"
                  class="hover:underline text-gray-600 hover:text-orange-500"
                  >Privacy</a
                >
              </li>
            </ul>
          </div>
          <div class="w-full md:w-1/4 text-center md:text-left ">
            <h5 class="uppercase mb-6 font-bold">Social</h5>
            <ul class="mb-4">
              <li class="mt-2">
                <a
                  href="#"
                  class="hover:underline text-gray-600 hover:text-orange-500"
                  >Facebook</a
                >
              </li>
              <li class="mt-2">
                <a
                  href="#"
                  class="hover:underline text-gray-600 hover:text-orange-500"
                  >Linkedin</a
                >
              </li>
              <li class="mt-2">
                <a
                  href="#"
                  class="hover:underline text-gray-600 hover:text-orange-500"
                  >Twitter</a
                >
              </li>
            </ul>
          </div>
          <div class="w-full md:w-1/4 text-center md:text-left ">
            <h5 class="uppercase mb-6 font-bold">Company</h5>
            <ul class="mb-4">
              <li class="mt-2">
                <a
                  href="#"
                  class="hover:underline text-gray-600 hover:text-orange-500"
                  >Official Blog</a
                >
              </li>
              <li class="mt-2">
                <a
                  href="#"
                  class="hover:underline text-gray-600 hover:text-orange-500"
                  >About Us</a
                >
              </li>
              <li class="mt-2">
                <a
                  href="#"
                  class="hover:underline text-gray-600 hover:text-orange-500"
                  >Contact</a
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </body>
  </html>