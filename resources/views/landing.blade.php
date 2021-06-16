<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Marketask</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" />
      <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer ></script> 
    </head>
    <body>
       <section class="h-full w-full border-box transition-all duration-500 linear" style="background-color: #141432">
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

      .header-2-3 .btn-outline {
        border: 1px solid #707092;
        color: #707092;
        transition: 0.3s;
      }

      .header-2-3 .btn-outline:hover {
        border: 1px solid #ffffff;
        color: #ffffff;
        transition: 0.3s;
      }

      .header-2-3 .btn-outline:hover div path {
        fill: #ffffff;
        transition: 0.3s;
      }

      .header-2-3 .box-shadow:hover {
        --tw-shadow: inset 0 0px 25px 0 rgba(20, 20, 50, 0.7);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
          var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
      }

      .header-2-3 .navigation a:hover,
      .header-2-3 .active {
        font-weight: 600;
        transition: 0.2s;
      }

      .header-2-3 .navigation a:hover,
      .header-2-3 .navigation .active,
      .header-2-3 .btn-log {
        color: #e7e7e8;
        transition: 0.2s;
      }

      .header-2-3 .navigation {
        color: #707092;
      }

      .header-2-3 .bg-screen {
        background-color: #707092;
      }

      .header-2-3 .bg-popup {
        background-color: #141432;
      }

      .header-2-3 .btn-try,
      .header-2-3 .btn-fill {
        background-color: #524eee;
        transition: 0.3s;
      }

      .header-2-3 .small-text {
        color: #fb6262;
      }

      .header-2-3 .title-font {
        color: #cbcbd2;
        line-height: 1.2;
      }
    </style>
    <!-- Navbar -->
    <div class="header-2-3" style="font-family: 'Poppins', sans-serif">
      <header x-data="{ open: false }">
        <div class="mx-auto flex py-12 lg:px-24 md:px-16 sm:px-8 px-8 items-center justify-between lg:justify-start">
          <a href="#">
            <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-3.png"
              alt="" />
          </a>
          <div class="flex mr-0 lg:hidden cursor-pointer">
            <svg class="w-6 h-6" @click="open = !open" fill="none" stroke="#E7E7E8" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </div>
          <div :class="{'hidden': !open}"
            class="bg-screen bg-black fixed w-full hidden h-full top-0 left-0 z-30 bg-opacity-60" @click="open = !open">
          </div>
          <nav
            class="navigation lg:mr-auto hidden lg:flex flex-col text-base justify-center z-50 fixed top-8 left-3 right-3 p-8 rounded-md shadow-md bg-white lg:flex lg:flex-row lg:relative lg:top-0 lg:shadow-none bg-popup lg:bg-transparent lg:p-0 lg:items-center items-start"
            :class="{'flex': open, 'hidden': !open}">
            <a href="#">
              <img class="m-0 lg:hidden mb-3"
                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-3.png"
                alt="" />
            </a>
            <a class="text-lg font-semibold leading-6 mx-0 lg:mx-5 my-4 lg:my-0 relative active" href="#">Home</a>
            <a class="text-lg font-light leading-6 mx-0 lg:mx-5 my-4 lg:my-0 relative" href="#">Feature</a>
            <a class="text-lg font-light leading-6 mx-0 lg:mx-5 my-4 lg:my-0 relative" href="#">About Us</a>
            <a class="text-lg font-light leading-6 mx-0 lg:mx-5 my-4 lg:my-0 relative" href="#">Contact</a>
            <div class="flex items-center justify-end w-full lg:hidden mt-3">
              <button class="btn-log font-light py-3 px-8 focus:outline-none">
                Log In
              </button>
              <button
                class="btn-try text-white text-lg py-3 px-8 rounded-xl focus:outline-none box-shadow font-semibold">
                Register
              </button>
            </div>
            <svg @click="open = !open" class="w-6 h-6 absolute top-4 right-4 lg:hidden cursor-pointer" fill="none"
              stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
          </nav>
          <div class="hidden lg:inline-flex">
            <button class="btn-log inline-flex text-black font-light text-lg leading-7 py-3 px-8 focus:outline-none">
              Log In
            </button>
            <button
              class="btn-try inline-flex text-white text-lg leading-7 py-3 px-8 rounded-xl focus:outline-none box-shadow font-semibold">
              Register
            </button>
          </div>
        </div>
      </header>

      <!-- Hero -->
      <div>
        <div class="mx-auto flex pt-12 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 lg:flex-row flex-col">
          <!-- Left Column -->
          <div
            class="lg:flex-grow lg:w-1/2 flex flex-col lg:items-start lg:text-left mb-3 md:mb-12 lg:mb-0 items-center text-center">
    
            <h1 class="title-font sm:text-5xl lg:text-6xl text-4xl mb-8 font-semibold sm:leading-tight">
              MARKETASK: The best way<br class="lg:block hidden" />
              to organize your online learning
            </h1>
            <div
              class="inline-block items-center mx-auto lg:mx-0 lg:flex justify-center lg:space-x-8 md:space-x-2 sm:space-x-3 space-x-0">
              <button
                class="btn-fill inline-flex font-semibold text-white text-base py-4 px-6 rounded-xl mb-4 lg:mb-0 md:mb-0 focus:outline-none box-shadow">
                Yuk coba sekarang
              </button>
            </div>
          </div>
          <!-- Right Column -->
          <div class="w-full lg:w-1/2 text-center justify-center flex pr-0">
            <img id="hero"
              src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-1.png"
              alt="" />
          </div>
        </div>
      </div>
    </div>
  </section><section class="h-full w-full border-box bg-white" style="background-color: #141432">
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

      .content-2-3 .btn-outline {
        border: 1px solid #707092;
        color: #707092;
        transition: 0.2s;
      }

      .content-2-3 .btn-outline:hover {
        border: 1px solid #ffffff;
        color: #ffffff;
        transition: 0.2s;
      }

      .content-2-3 .card-header {
        background-color: #292952;
        border: 1px solid #4c4c6d;
      }

      .content-2-3 .btn-fill {
        background-color: #524eee;
        transition: 0.2s;
      }

      .content-2-3 .btn-fill:hover {
        --tw-shadow: inset 0 0px 25px 0 rgba(20, 20, 50, 0.7);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
          var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        transition: 0.2s;
      }

      .content-2-3 .text-purple {
        color: #707092;
      }
    </style>
    <div class="content-2-3" style="font-family: 'Poppins', sans-serif">
      <div class="container lg:px-32 md:px-8 sm:px-12 px-5 pt-20 pb-12 mx-auto">
        <!-- Title Text -->
        <div class="flex flex-col text-center w-full mb-12">
          <h1 class="text-4xl font-semibold title-font mb-2.5 text-white">
            3 Fitur Utama
          </h1>
          <h2 class="text-base font-light title-font mx-12 lg:w-full md:w-full sm:w-3/6 sm:mx-auto text-purple">
            Kamu dapat menyelesaikan tugasmu dengan mudah
          </h2>
        </div>

        <!-- 3-Column -->
        <div class="flex lg:flex-row flex-col -m-4">
          <div class="px-14 md:px-0 lg:px-4 lg:w-1/3 md:w-1/3 sm:w-4/6 mx-auto">
            <div class="flex rounded-lg h-full lg:pt-8 lg:pb-8 md:pt-8 md:pb-8 pt-4 pb-12 flex-col">
              <div class="items-center text-center">
                <div class="inline-flex items-center justify-center rounded-full mb-6">
                  <img
                    src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-8.png"
                    alt="" />
                </div>
              </div>
              <div class="flex-grow">
                <h4 class="font-medium text-center text-2xl mb-2.5 text-white">
                  Upload tugasmu
                </h4>
                <p class="leading-relaxed text-base text-center tracking-wide text-purple">
                  This can easily help you to<br /> grow up your business fast
                </p>
              </div>
            </div>
          </div>
          <div class="px-14 md:px-0 lg:px-4 lg:w-1/3 md:w-1/3 sm:w-4/6 mx-auto">
            <div class="flex rounded-lg h-full lg:pt-8 lg:pb-8 md:pt-8 md:pb-8 pt-12 pb-12 flex-col">
              <div class="items-center text-center">
                <div class="inline-flex items-center justify-center rounded-full mb-6">
                  <img
                    src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-9.png"
                    alt="" />
                </div>
              </div>
              <div class="flex-grow">
                <h4 class="font-medium text-center text-2xl mb-2.5 text-white">
                  Real-Time Analytic
                </h4>
                <p class="leading-relaxed text-base text-center tracking-wide text-purple">
                  With real-time analytics, you<br /> can check data in real time
                </p>
              </div>
            </div>
          </div>
          <div class="px-14 md:px-0 lg:px-4 lg:w-1/3 md:w-1/3 sm:w-4/6 mx-auto">
            <div class="flex rounded-lg h-full lg:pt-8 lg:pb-8 md:pt-8 md:pb-8 pt-12 pb-6 flex-col">
              <div class="items-center text-center">
                <div class="inline-flex items-center justify-center rounded-full mb-6">
                  <img
                    src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-10.png"
                    alt="" />
                </div>
              </div>
              <div class="flex-grow">
                <h4 class="font-medium text-center text-2xl mb-2.5 text-white">
                  Very Full Secured
                </h4>
                <p class="leading-relaxed text-base text-center tracking-wide text-purple">
                  With real-time analytics, we<br /> will guarantee your data
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><section class="h-full pt-20 pb-12 lg:px-24 md:px-16 sm:px-8 px-4 transition-all duration-500 linear"
    style="background-color: #141432">

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    .footer-2-3 .list-footer li a{
      color: #707092;
    }
    .footer-2-3 .list-footer li a:hover{
      color: #FFFFFF;
    }
    .footer-2-3 .border-color{
      color: #707092;
    }
    .footer-2-3 .footer-link:hover{
      color: #FFFFFF;
    }
    .footer-2-3 .social-media-c:hover circle,
    .footer-2-3 .social-media-p:hover path{
      fill: #FFFFFF;
    }
  </style>

  <footer class="footer-2-3" style="font-family: 'Poppins', sans-serif;">
            </div>
            <nav class="mx-auto flex flex-wrap items-center text-base justify-center space-x-5">
              <a href="" class="footer-link">Terms of Service</a>
              <span>|</span>
              <a href="" class="footer-link">Privacy Policy</a>
              <span>|</span>
              <a href="" class="footer-link">Licenses</a>
            </nav>
            <nav class="flex lg:flex-row flex-col items-center text-base justify-center">
              <p>Copyright ©  2021 Analystic Max</p>
            </nav>
          </div>
      </div>
  </footer>
  </section>    
    </body>
  </html>