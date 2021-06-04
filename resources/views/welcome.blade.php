<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Home | CovMap</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" />
      <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer ></script> 
    </head>
    <body>
      <section class="h-full w-full border-box  transition-all duration-500 linear" style="background-color: #000000;">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    
            .btn-outline-header-4-4 {
                border: 1px solid #999999;
                color: #999999;
            }
    
            .btn-outline-header-4-4:hover {
                border: 1px solid #FFFFFF;
                color: #FFFFFF;
            }
    
            .btn-outline-header-4-4:hover div path {
                fill: #FFFFFF;
            }
    
            .box-shadow-header-4-4:hover {
                --tw-shadow: inset 0 0px 18px 0 rgba(0, 0, 0, 0.7);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }
    
            .navigation-header-4-4 a:hover,
            .active::after {
                font-weight: 600;
            }
    
            .navigation-header-4-4 a:hover {
                color: #FFFFFF;
            }
    
            .navigation-header-4-4 {
                color: #B9B9B9;
            }
    
            .bg-screen-header-4-4 {
                background-color: #2c2c2c;
            }
    
            .bg-popup-header-4-4 {
                background-color: #000000;
            }
        </style> <!-- Navbar -->
        <div style="font-family: 'Poppins', sans-serif;">
            <header x-data="{ open: false }">
                <div
                    class="mx-auto flex py-12 lg:px-24 md:px-16 sm:px-8 px-8  items-center justify-between lg:justify-start">
                    <a href="#"> <img
                            src="{{asset('assets/img/logo.png')}}"
                            alt="logo"> </a>
                    <div class="flex mr-0 lg:hidden cursor-pointer"> <svg class="w-6 h-6" @click="open = !open" fill="none"
                            stroke="#E7E7E8" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg> </div>
                    <div :class="{'hidden': !open}"
                        class="bg-screen-header-4-4 bg-black fixed w-full hidden h-full top-0 left-0 z-30 bg-opacity-60"
                        @click="open = !open"> </div>
                    <nav class="navigation-header-4-4 lg:mr-auto hidden lg:flex flex-col text-base justify-center z-50 fixed top-8 left-3 right-3 p-8 rounded-md shadow-md bg-white lg:flex-row lg:relative lg:top-0 lg:shadow-none bg-popup-header-4-4 lg:bg-transparent lg:p-0 lg:items-center items-start"
                        :class="{'flex': open, 'hidden': !open}"> <a href="#"> <img class="m-0 lg:hidden mb-3"
                                src="{{asset('assets/img/logo.png')}}"
                                alt="logo"> </a> 
                                
                                <!-- <a
                            class=" text-lg font-semibold leading-6 mx-0 lg:mx-5 my-4 lg:my-0 relative active"
                            style="color: #FFFFFF; font-family: 'Poppins', sans-serif;" href="#">Home</a>  -->
                            <a
                            class=" text-lg font-light leading-6 mx-0 lg:mx-5 my-4 lg:my-0 relative"
                            style="font-family: 'Poppins', sans-serif;" href="#">Test Covid</a> <a
                            class=" text-lg font-light leading-6 mx-0 lg:mx-5 my-4 lg:my-0 relative"
                            style="font-family: 'Poppins', sans-serif;" href="#">Vaksin Covid</a> <a
                            class=" text-lg font-light leading-6 mx-0 lg:mx-5 my-4 lg:my-0 relative"
                            style="font-family: 'Poppins', sans-serif;" href="#">Info Covid</a> <a
                            class=" text-lg font-light leading-6 mx-0 lg:mx-5 my-4 lg:my-0 relative"
                            style="font-family: 'Poppins', sans-serif;" href="#">About Us</a>
                        <div class="flex items-center justify-end w-full lg:hidden mt-3"> 
                            @if (Route::has('login'))
                    @auth
                    <a href="{{url('/dashboard')}}"
                    class=" text-black  text-lg py-3 px-8 rounded-xl focus:outline-none box-shadow-header-4-4  font-semibold"
                    style="background-color: #FFF2DE; font-family: 'Poppins', sans-serif;">
                    Dashboard </a>
                    @else
                    <a href="{{route('login')}}"
                    class="font-light py-3 px-8 focus:outline-none"
                    style="color:#E7E7E8; font-family: 'Poppins', sans-serif;"> Masuk </a>

                        @if (Route::has('register'))
                        <a href="{{route('register')}}"
                        class=" text-black  text-lg py-3 px-8 rounded-xl focus:outline-none box-shadow-header-4-4  font-semibold"
                        style="background-color: #FFF2DE; font-family: 'Poppins', sans-serif;">
                        Daftar </a>
                        @endif
                    @endauth
               
            @endif
                              </div> <svg @click="open = !open"
                            class="w-6 h-6 absolute top-4 right-4  lg:hidden cursor-pointer" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </nav>
                   
                    <div class="hidden lg:inline-flex">
                        @if (Route::has('login'))
                            @auth
                            <a href="{{url('/dashboard')}}"
                            class="inline-flex text-black text-lg leading-7 py-3 px-8 rounded-xl focus:outline-none box-shadow-header-4-4  font-semibold"
                            style="background-color: #FFF2DE; font-family: 'Poppins', sans-serif;">Daftar </a>
                            @else
                            <a href="{{ route('login')}}"
                            class="inline-flex text-black font-light text-lg leading-7 py-3 px-8 focus:outline-none"
                            style="color:#E7E7E8; font-family: 'Poppins', sans-serif;">Masuk </a> 
        
                                @if (Route::has('register'))
                                <a href="{{route('register')}}"
                                class="inline-flex text-black text-lg leading-7 py-3 px-8 rounded-xl focus:outline-none box-shadow-header-4-4  font-semibold"
                                style="background-color: #FFF2DE; font-family: 'Poppins', sans-serif;">Daftar </a>
                                @endif
                            @endauth
                    </div>
                    @endif
                        
                         </div>
                </div>
            </header> <!-- Hero-header-4-4 -->
            <div>
                <div class="mx-auto flex pt-12 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8  lg:flex-row flex-col">
                    <!-- Left Column -->
                    <div
                        class="lg:flex-grow lg:w-1/2 flex flex-col lg:items-start lg:text-left mb-3 md:mb-12 lg:mb-0 items-center text-center">
                        <p class="mb-8 leading-relaxed font-semibold text-sm" style="color: #C3CDFE;">COBA GRATIS</p>
                        <h1 class="lg:block hidden title-font sm:text-5xl lg:text-6xl text-4xl mb-8 font-semibold sm:leading-tight "
                            style="color: #FFFFFF; line-height: 1.2;">Aplikasi terbaik<br> untuk penanganan Covid-19
                        </h1>
                        <h1 class="lg:hidden block title-font sm:text-5xl lg:text-6xl text-4xl mb-8 lg::px-10 md:px-10 sm:px-6 px-0 font-semibold sm:leading-tight "
                            style="color: #FFFFFF; line-height: 1.2;">Aplikasi terbaik untuk penanganan Covid-19 </h1>
                        <div
                            class="inline-block items-center mx-auto lg:mx-0 lg:flex justify-center lg:space-x-8 md:space-x-2  sm:space-x-3 space-x-0">
                            <a href="{{ route('register') }}"
                                class=" inline-flex font-semibold text-black  text-base py-4 px-6 rounded-xl mb-4 lg:mb-0 md:mb-0 focus:outline-none box-shadow-header-4-4"
                                style="background-color: #FFF2DE; font-family: 'Poppins', sans-serif;">Daftar Sekarang</a> <a href="#"
                                class="btn-outline-header-4-4 font-normal text-black  text-base py-4 px focus:outline-none bg-transparent rounded hover:border-transparent"
                                style="font-family: 'Poppins', sans-serif;">
                                <div class="flex items-center">  Cek Info Terkini </div>
                            </a> </div>
                    </div> <!-- Right Column -->
                    <div class="w-full lg:w-1/2 text-center lg:justify-end mt-10 justify-center flex pr-0"> <img
                            id="hero-header-4-4"
                            src="{{asset('assets/img/illus1.svg')}}"
                            alt=""> </div>
                </div>
            </div>
        </div>
    </section>
            <section class="h-full w-full border-box bg-white" style="background-color: #000000;">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
      .btn-outline-content-2-4{
        border: 1px solid #47475C;
        color:#47475C;
      }
      .btn-outline-content-2-4:hover{
        border: 1px solid #E7E7E8;
        color: #E7E7E8;
      }
      .card-header-content-2-4{
        background-color: #0D0D17;
        border: 1px solid #303030;
      }
      .box-shadow-content-2-4:hover{
        --tw-shadow: inset 0 0px 18px 0 rgba(0, 0, 0, 0.7);
          box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
      }
      @media(min-width: 1024px){
        .lg-show-content-2-4{
          display: block;
        }
        .lg-hide-content-2-4{
          display: none;
        }
      }
      @media(max-width: 1024px){
        .lg-show-content-2-4{
          display: none;
        }
        .lg-hide-content-2-4{
          display: block;
        }
      }
  </style>
  <div style="font-family: 'Poppins', sans-serif;">
    <div class="container lg:px-32 md:px-8  sm:px-12 px-5 pt-20 pb-12 mx-auto">
      <!-- Title Text -->
      <div class="flex flex-col text-center w-full mb-12">
        <h1 class="text-4xl font-semibold title-font mb-2.5 text-white"
        >3 Fitur Utama</h1>
        <h2 class="text-base font-light title-font mx-12 lg:w-full md:w-full sm:w-3/6 sm:mx-auto"
        style="color: #E7E7E8;">Kamu dapat dengan mudah mencari info dengan fitur fitur kami</h2>
      </div>

      <!-- 3-Column -->
      <div class="flex lg:flex-row flex-col -m-4">
        <div class="px-14 md:px-0 lg:px-4 lg:w-1/3 md:w-1/3 sm:w-4/6 mx-auto">
          <div class="flex rounded-lg h-full lg:pt-8 lg:pb-8 md:pt-8 md:pb-8 pt-4 pb-12 flex-col">
            <div class="items-center text-center">
              <div class="inline-flex items-center justify-center rounded-full  mb-6 ">
                <img src="{{asset('assets/img/Location.png')}}" alt="" width="65px" height="65px">                  
              </div>
            </div>
            <div class="flex-grow">
              <h4 class="font-medium text-center text-2xl mb-2.5 text-white"
              >Lokasi terdekat</h4>
              <p class="lg-show-content-2-4 leading-relaxed text-base text-center tracking-wide "
              style="color: #999999;">Fitur ini membantu mencari<br> lokasi terdekat untuk test dan vaksin.</p>
              <p class="lg-hide-content-2-4 block leading-relaxed text-base text-center tracking-wide "
              style="color: #999999;">Fitur ini membantu mencari lokasi terdekat untuk test dan vaksin.</p>
            </div>
          </div>
        </div>
        <div class="px-14 md:px-0 lg:px-4 lg:w-1/3 md:w-1/3 sm:w-4/6 mx-auto">
          <div class="flex rounded-lg h-full lg:pt-8 lg:pb-8 md:pt-8 md:pb-8 pt-12 pb-12 flex-col">
            <div class="items-center text-center ">
              <div class="inline-flex items-center justify-center rounded-full mb-6 ">
                <img src="{{asset('assets/img/Operator.png')}}" alt="" width="65px" height="65px">                                 
              </div>
            </div>
            <div class="flex-grow">
              <h4 class="font-medium text-center text-2xl mb-2.5 text-white"
              >Personal Reminder</h4>
              <p class="lg-show-content-2-4 leading-relaxed text-base text-center tracking-wide "
              style="color: #999999;">Dengan personal reminder kamu<br>  tidak akan telat datang ke lokasi pengecekan.</p>
              <p class="lg-hide-content-2-4 leading-relaxed text-base text-center tracking-wide "
              style="color: #999999;">Dengan personal reminder kamu tidak akan telat datang ke lokasi pengecekan.</p>
            </div>
          </div>
        </div>
        <div class="px-14 md:px-0 lg:px-4 lg:w-1/3 md:w-1/3 sm:w-4/6 mx-auto">
          <div class="flex rounded-lg h-full lg:pt-8 lg:pb-8 md:pt-8 md:pb-8 pt-12 pb-6 flex-col">
            <div class="items-center text-center ">
              <div class="inline-flex items-center justify-center rounded-full mb-6 ">
                <img src="{{asset('assets/img/FaQ.png')}}" alt="" width="65px" height="65px">                               
              </div>
            </div>
            <div class="flex-grow">
              <h4 class="font-medium text-center text-2xl mb-2.5 text-white"
              >Real-time Info</h4>
              <p class="lg-show-content-2-4 leading-relaxed text-base text-center tracking-wide "
              style="color: #999999;">Kami memberikan info terkini<br> mengenai segala hal tentang Covid-19.</p>
              <p class="lg-hide-content-2-4 leading-relaxed text-base text-center tracking-wide "
              style="color: #999999;">Kami memberikan info terkini mengenai segala hal tentang Covid-19.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section><section class="h-full w-full px-8 py-20" style="background-color: #000000;">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
            .circle-content-3-4{
                background-color: #FFF2DE;
                color: #000000;
            }
            .caption-content-3-4{
                color:  #999999;
            }
            .btn-fill-content-3-4{
                background-color: #FFF2DE;                transition: 0.3s;
            }
            .btn-fill-content-3-4:hover{
                background-color: #FFD9A0;
                color: #121212;  
                transition: 0.3s;
            }
        </style>
            <div class="flex lg:flex-row flex-col items-center" style="font-family: 'Poppins', sans-serif;">
                <!-- Left Column -->
                <div class="w-full lg:w-1/2 text-center justify-center flex lg:mb-0 mb-12">
                    <img id="hero-content-3-4" src="{{asset('assets/img/illus2.svg')}}" alt="" width="75%" height="75%">
                </div>
                <!-- Right Column -->
                <div class="lg:w-1/2 w-full flex flex-col lg:items-start items-center lg:text-left text-center">
                <h2 class="md:text-4xl text-3xl text-white font-semibold mb-10 tracking-tight">Langkah mudah gunain<br>CovMap!</h2>
                <ul>
                    <li class="mb-8">
                    <h4 class="font-medium text-2xl text-white mb-5 flex lg:flex-row flex-col items-center lg:justify-start justify-center">
                        <span
                        class="circle-content-3-4 h-12 w-12 text-xl flex items-center justify-center lg:mr-5 lg:mb-0 mb-5 rounded-full"
                        >1</span
                        >
                        Buat Akun Kamu.
                    </h4>
                    <p class="text-base leading-7 tracking-wide sm:inline-block hidden caption-content-3-4">
                        Dengan daftar akun kamu bisa mengakses fitur penuh dari CovMap. 
                    </p>
                    <p class="text-base leading-7 tracking-wide inline-block sm:hidden caption-content-3-4">
                      Dengan daftar akun kamu bisa mengakses fitur penuh dari CovMap.
                    </p>
                    </li>
                    <li class="mb-8">
                    <h4 class="font-medium text-2xl text-white mb-5 flex lg:flex-row flex-col items-center lg:justify-start justify-center">
                        <span
                        class="circle-content-3-4 h-12 w-12 text-xl flex items-center justify-center lg:mr-5 lg:mb-0 mb-5 rounded-full"
                        >2</span
                        >
                        Pilih Lokasi dan Service
                    </h4>
                    <p class="text-base leading-7 tracking-wide sm:inline-block hidden caption-content-3-4">
                        Sekarang tinggal kamu pilih lokasi yang terdekat dengan kamu<br>
                        kemudian pilih service yang kamu butuhkan.
                    </p>
                    <p class="text-base leading-7 tracking-wide inline-block sm:hidden caption-content-3-4">
                      Sekarang tinggal kamu pilih lokasi yang terdekat dengan kamu 
                      kemudian pilih service yang kamu butuhkan.
                    </p>
                    </li>
                    <li class="mb-16">
                    <h4 class="font-medium text-2xl text-white mb-5 flex lg:flex-row flex-col items-center lg:justify-start justify-center">
                        <span
                        class="circle-content-3-4 h-12 w-12 text-xl flex items-center justify-center lg:mr-5 lg:mb-0 mb-5 rounded-full"
                        >3</span
                        >
                        Gaada Langkah Ketiga!
                    </h4>
                    <p class="text-base leading-7 tracking-wide sm:inline-block hidden caption-content-3-4">
                        Cukup dua langkah aja kamu udah bisa gunain CovMap tinggal <br>
                        tunggu tanggal pengecekan atau bisa lihat lihat info terkini.
                    </p>
                    <p class="text-base leading-7 tracking-wide inline-block sm:hidden caption-content-3-4">
                      Cukup dua langkah aja kamu udah bisa gunain CovMap 
                      tinggal tunggu tanggal pengecekan atau bisa lihat lihat info terkini.
                    </p>
                    </li>
                </ul>
                <a href="{{route('register')}}"
                    class="btn-fill-content-3-4 px-10 py-4 text-base text-black font-semibold rounded-xl cursor-pointer focus:outline-none tracking-wide"
                >
                    Daftar Sekarang!
                </a>
                </div>
            </div>    
    </section><section class="h-full pt-20 pb-12 lg:px-24 md:px-16 sm:px-8 px-4" style="background-color: #000000">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
      .list-footer-2-4 li a{
        color: #999999;
      }
      .list-footer-2-4 li a:hover{
        color: #FFFFFF;
        cursor: pointer;
      }
      .border-color-footer-2-4{
        color: #999999;
      }
      .footer-link-footer-2-4:hover{
        color: #FFFFFF;
        cursor: pointer;
      }
      .social-media-c-footer-2-4:hover circle, .social-media-p-footer-2-4:hover path{
        fill: #FFFFFF;
        cursor: pointer;
      }
    </style>
    <footer class="h-full" style="font-family: 'Poppins', sans-serif;">
        <div class="pb-24 mx-auto">
          <div class="grid lg:grid-cols-4 md:grid-cols-2">
            <div class="">
              <div class="mb-5">
                <img src="{{asset('assets/img/logo.png')}}" alt="logo">                                                      
              </div>
              <nav class="list-none list-footer-2-4 mr-5">
                <li class="mb-5">
                  <a>Jl. Raya Kb. Jeruk No.27, RT.2/RW.9,<br> Kb. Jeruk, Kec. Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11530</a>
                </li>
                
              </nav>
            </div>
            <div class="">
              <h2 class="title-font font-semibold text-2xl mb-5 text-white">Produk</h2>
              <nav class="list-none list-footer-2-4">
                <li class="mb-5">
                  <a>Test Covid</a>
                </li>
                <li class="mb-5">
                  <a>Vaksin Covid</a>
                </li>
                <li class="mb-5">
                  <a>Info Covid</a>
                </li>
                
              </nav>
            </div>
            <div class="">
            <h2 class="title-font font-semibold text-2xl mb-5 text-white">Tentang Kami</h2>
            <nav class="list-none list-footer-2-4">
              <li class="mb-5">
              <a>Contact Us</a>
              </li>
              <li class="mb-5">
              <a>Blog</a>
              </li>
              <li class="mb-5">
              <a>About Us</a>
              </li>
             
            </nav>
            </div>
            <div class="">
              <h2 class="title-font font-semibold text-2xl mb-5 text-white">Lainnya</h2>
              <nav class="list-none list-footer-2-4">
                <li class="mb-5">
                  <a>Getting Started</a>
                </li>
                <li class="mb-5">
                  <a>Help Center</a>
                </li>
                
              </nav>
            </div>  
          </div>
        </div>
        <div class="border-color-footer-2-4 mx-auto">
          <div class="">              
            <hr style="border-color: #303030;">
          </div>
            <div class="container mx-auto flex  pt-12 flex-col lg:flex-row items-center space-y-5 lg:space-y-0">
              <div class="flex title-font font-medium items-center text-gray-900 mb-4 lg:mb-0 md:mb-0 space-x-5" style="cursor: pointer;">
                <svg class="social-media-c-footer-2-4" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="15" cy="15" r="15" fill="#999999"/>
                  <g clip-path="url(#clip0)">
                  <path d="M17.6648 9.65667H19.1254V7.11267C18.8734 7.078 18.0068 7 16.9974 7C14.8914 7 13.4488 8.32467 13.4488 10.7593V13H11.1248V15.844H13.4488V23H16.2981V15.8447H18.5281L18.8821 13.0007H16.2974V11.0413C16.2981 10.2193 16.5194 9.65667 17.6648 9.65667Z" fill="black"/>
                  </g>
                  <defs>
                  <clipPath id="clip0">
                  <rect width="16" height="16" fill="white" transform="translate(7 7)"/>
                  </clipPath>
                  </defs>
                </svg>
                <svg class="social-media-c-footer-2-4" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="15" cy="15" r="15" fill="#999999"/>
                  <g clip-path="url(#clip0)">
                  <path d="M23 10.039C22.405 10.3 21.771 10.473 21.11 10.557C21.79 10.151 22.309 9.513 22.553 8.744C21.919 9.122 21.219 9.389 20.473 9.538C19.871 8.897 19.013 8.5 18.077 8.5C16.261 8.5 14.799 9.974 14.799 11.781C14.799 12.041 14.821 12.291 14.875 12.529C12.148 12.396 9.735 11.089 8.114 9.098C7.831 9.589 7.665 10.151 7.665 10.756C7.665 11.892 8.25 12.899 9.122 13.482C8.595 13.472 8.078 13.319 7.64 13.078C7.64 13.088 7.64 13.101 7.64 13.114C7.64 14.708 8.777 16.032 10.268 16.337C10.001 16.41 9.71 16.445 9.408 16.445C9.198 16.445 8.986 16.433 8.787 16.389C9.212 17.688 10.418 18.643 11.852 18.674C10.736 19.547 9.319 20.073 7.785 20.073C7.516 20.073 7.258 20.061 7 20.028C8.453 20.965 10.175 21.5 12.032 21.5C18.068 21.5 21.368 16.5 21.368 12.166C21.368 12.021 21.363 11.881 21.356 11.742C22.007 11.28 22.554 10.703 23 10.039Z" fill="black"/>
                  </g>
                  <defs>
                  <clipPath id="clip0">
                  <rect width="16" height="16" fill="white" transform="translate(7 7)"/>
                  </clipPath>
                  </defs>
                </svg>
                <svg class="social-media-p-footer-2-4" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M17.8711 15C17.8711 16.5857 16.5857 17.8711 15 17.8711C13.4143 17.8711 12.1289 16.5857 12.1289 15C12.1289 13.4143 13.4143 12.1289 15 12.1289C16.5857 12.1289 17.8711 13.4143 17.8711 15Z" fill="#999999"/>
                  <path d="M21.7144 9.92039C21.5764 9.5464 21.3562 9.20789 21.0701 8.93002C20.7923 8.64392 20.454 8.42374 20.0797 8.28572C19.7762 8.16785 19.3203 8.02754 18.4805 7.98932C17.5721 7.94789 17.2997 7.93896 14.9999 7.93896C12.6999 7.93896 12.4275 7.94766 11.5193 7.98909C10.6796 8.02754 10.2234 8.16785 9.92014 8.28572C9.54591 8.42374 9.2074 8.64392 8.92976 8.93002C8.64366 9.20789 8.42348 9.54617 8.28523 9.92039C8.16736 10.2239 8.02705 10.6801 7.98883 11.5198C7.9474 12.428 7.93848 12.7004 7.93848 15.0004C7.93848 17.3002 7.9474 17.5726 7.98883 18.481C8.02705 19.3208 8.16736 19.7767 8.28523 20.0802C8.42348 20.4545 8.64343 20.7927 8.92953 21.0706C9.2074 21.3567 9.54568 21.5769 9.91991 21.7149C10.2234 21.833 10.6796 21.9733 11.5193 22.0115C12.4275 22.053 12.6997 22.0617 14.9997 22.0617C17.3 22.0617 17.5723 22.053 18.4803 22.0115C19.3201 21.9733 19.7762 21.833 20.0797 21.7149C20.8309 21.4251 21.4247 20.8314 21.7144 20.0802C21.8323 19.7767 21.9726 19.3208 22.011 18.481C22.0525 17.5726 22.0612 17.3002 22.0612 15.0004C22.0612 12.7004 22.0525 12.428 22.011 11.5198C21.9728 10.6801 21.8325 10.2239 21.7144 9.92039ZM14.9999 19.4231C12.5571 19.4231 10.5768 17.4431 10.5768 15.0002C10.5768 12.5573 12.5571 10.5773 14.9999 10.5773C17.4426 10.5773 19.4229 12.5573 19.4229 15.0002C19.4229 17.4431 17.4426 19.4231 14.9999 19.4231ZM19.5977 11.4361C19.0269 11.4361 18.5641 10.9733 18.5641 10.4024C18.5641 9.83159 19.0269 9.36879 19.5977 9.36879C20.1685 9.36879 20.6313 9.83159 20.6313 10.4024C20.6311 10.9733 20.1685 11.4361 19.5977 11.4361Z" fill="#999999"/>
                  <path d="M15 0C6.717 0 0 6.717 0 15C0 23.283 6.717 30 15 30C23.283 30 30 23.283 30 15C30 6.717 23.283 0 15 0ZM23.5613 18.5511C23.5197 19.468 23.3739 20.094 23.161 20.6419C22.7135 21.7989 21.7989 22.7135 20.6419 23.161C20.0942 23.3739 19.468 23.5194 18.5513 23.5613C17.6328 23.6032 17.3394 23.6133 15.0002 23.6133C12.6608 23.6133 12.3676 23.6032 11.4489 23.5613C10.5322 23.5194 9.90601 23.3739 9.35829 23.161C8.78334 22.9447 8.26286 22.6057 7.83257 22.1674C7.39449 21.7374 7.05551 21.2167 6.83922 20.6419C6.62636 20.0942 6.48056 19.468 6.4389 18.5513C6.39656 17.6326 6.38672 17.3392 6.38672 15C6.38672 12.6608 6.39656 12.3674 6.43867 11.4489C6.48033 10.532 6.6259 9.90601 6.83876 9.35806C7.05505 8.78334 7.39426 8.26263 7.83257 7.83257C8.26263 7.39426 8.78334 7.05528 9.35806 6.83899C9.90601 6.62613 10.532 6.48056 11.4489 6.43867C12.3674 6.39679 12.6608 6.38672 15 6.38672C17.3392 6.38672 17.6326 6.39679 18.5511 6.4389C19.468 6.48056 20.094 6.62613 20.6419 6.83876C21.2167 7.05505 21.7374 7.39426 22.1677 7.83257C22.6057 8.26286 22.9449 8.78334 23.161 9.35806C23.3741 9.90601 23.5197 10.532 23.5616 11.4489C23.6034 12.3674 23.6133 12.6608 23.6133 15C23.6133 17.3392 23.6034 17.6326 23.5613 18.5511Z" fill="#999999"/>
                </svg>
                
              </div>
              <nav class="mx-auto flex flex-wrap items-center text-base justify-center">
                <a class="mr-5 footer-link-footer-2-4">Terms of Service</a>
                <span class="mr-5">|</span>
                <a class="mr-5 footer-link-footer-2-4">Privacy Policy</a>
                <span class="mr-5">|</span>
                <a class="mr-5 footer-link-footer-2-4">Licenses</a>
              </nav>
              <nav class="flex lg:flex-row flex-col items-center text-base justify-center">
                <p>Copyright ©  2021 CovMap</p>
              </nav>
            </div>
        </div>
  </footer>
  </section>
    
    </body>
  </html>
