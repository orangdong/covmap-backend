<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Register | CovMap</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" />
      <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer ></script> 
    </head>
    <body class="h-full w-full border-box transition-all duration-500 linear" style="background-color:#232130;">
      
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
      .input-empty-3-6{
        border: 1px solid #292738;
        background-color: #252332;
        color: #D8D7DF;
      }
      .input-empty-3-6:focus-within{
        border: 1px solid #FFB341;
        color: #D8D7DF;
      }
      .input-empty-3-6 input::placeholder {
        color: #4E4B62;
      }
      .input-empty-3-6:focus-within input::placeholder {
        color: #D8D7DF;
        outline: none;
      }      
      .input-empty-3-6:focus-within .icon-empty-3-6 path{
        transition: 0.3;
        fill: #FFB341;
      }
      .input-empty-3-6 .icon-toggle-empty-3-6 path{
        transition: 0.3;
        fill: #FFB341;
      }
      .centered-empty-3-6{
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
      }
      .width-left-empty-3-6{
        width: 0%;
      }
      .width-right-empty-3-6{
        width: 100%;
      }
      .forgot-password-empty-3-6{
        color: #737182;
        transition: 0.3s;
      }
      .forgot-password-empty-3-6:hover{
        color: #D8D7DF;
      }
      .btn-fill-empty-3-6{
        background-color: #FFB341;
      }
      .btn-fill-empty-3-6:hover{
        background-image: linear-gradient(#DF9A31, #DF9A31);;
      }
      @media(min-width: 1024px){
        .width-left-empty-3-6{
        width: 48%;
      }
      .width-right-empty-3-6{
        width: 52%;
      }
      }
    </style>
    <div style="font-family: 'Poppins', sans-serif;">                          
    <div class="flex flex-col items-center h-full lg:flex-row ">
      <div class="relative hidden lg:block h-full width-left-empty-3-6">
        <img class="absolute object-fill centered-empty-3-6" width="80%" src="{{asset('/assets/img/login.svg')}}" alt="">                      
      </div>
      <div
          class="flex w-full h-full px-8 width-right-empty-3-6 sm:px-16 py-32 lg:mx-0 mx-auto items-left justify-left" style="background-color: #211F2D;">
          <div class="w-full sm:w-7/12 md:w-8/12 lg:w-9/12 xl:w-7/12 mx-auto lg:mx-0">
            <div class=" items-center justify-center lg:hidden flex">
              <img src="{{asset('/assets/img/login.svg')}}" class="mb-5" alt="">  
            </div>
            <h3 class="text-3xl font-semibold mb-3" style="color: #D8D7DF;">Daftarkan Akun Kamu</h3>
            <p class="leading-7 text-sm mb-4" style="color: #737182;">Kamu harus mendaftar akun di CovMap<br>
              sebelum akses semua fitur.</p>
              <x-jet-validation-errors class="mb-4" />

              <form method="POST" action="{{ route('register') }}">
                  @csrf
              <div class="mb-7">
                <label
                    class="block text-lg font-medium" style="color: #D8D7DF;">Nama</label>
                <div class="flex w-full px-5 py-4 mt-3 text-base font-light rounded-xl input-empty-3-6">                    
                  <input type="text" name="name" id="name" placeholder="Nama Kamu"
                  class="w-full focus:outline-none text-base font-light"
                  autocomplete required
                  style="background-color: #252332;">
                </div>
              </div>
              <div class="mb-7">
                <label
                    class="block text-lg font-medium" style="color: #D8D7DF;">Email Address</label>
                <div class="flex w-full px-5 py-4 mt-3 text-base font-light rounded-xl input-empty-3-6">
                  <svg class="mr-4 icon-empty-3-6" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5 5C3.34315 5 2 6.34315 2 8V16C2 17.6569 3.34315 19 5 19H19C20.6569 19 22 17.6569 22 16V8C22 6.34315 20.6569 5 19 5H5ZM5.49607 7.13174C5.01655 6.85773 4.40569 7.02433 4.13168 7.50385C3.85767 7.98337 4.02427 8.59422 4.50379 8.86823L11.5038 12.8682C11.8112 13.0439 12.1886 13.0439 12.4961 12.8682L19.4961 8.86823C19.9756 8.59422 20.1422 7.98337 19.8682 7.50385C19.5942 7.02433 18.9833 6.85773 18.5038 7.13174L11.9999 10.8482L5.49607 7.13174Z" fill="#4E4B62"/>
                  </svg>                     
                  <input type="email" name="email" id="email" placeholder="Your Email Address"
                  class="w-full focus:outline-none text-base font-light"
                  autocomplete required
                  style="background-color: #252332;">
                </div>
              </div>
              <div class="mt-4">
                <label
                    class="block text-lg font-medium" style="color: #D8D7DF;">Password</label>
                <div class="flex items-center w-full px-5 py-4 mt-3 text-base font-light rounded-xl input-empty-3-6">
                  <svg class="mr-4 icon-empty-3-6" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.81592 4.25974C7.12462 5.48872 7 6.95088 7 8H6C4.34315 8 3 9.34315 3 11V19C3 20.6569 4.34315 22 6 22H18C19.6569 22 21 20.6569 21 19V11C21 9.34315 19.6569 8 18 8L17 7.99998C17 6.95087 16.8754 5.48871 16.1841 4.25973C15.829 3.62845 15.3194 3.05012 14.6031 2.63486C13.8875 2.22005 13.021 2 12 2C10.979 2 10.1125 2.22005 9.39691 2.63486C8.68058 3.05012 8.17102 3.62845 7.81592 4.25974ZM9.55908 5.24026C9.12538 6.01128 9 7.04912 9 8H15C15 7.04911 14.8746 6.01129 14.4409 5.24027C14.2335 4.87155 13.9618 4.57488 13.6 4.36514C13.2375 4.15495 12.729 4 12 4C11.271 4 10.7625 4.15495 10.4 4.36514C10.0382 4.57488 9.76648 4.87155 9.55908 5.24026ZM14 14C14 14.7403 13.5978 15.3866 13 15.7324V17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17V15.7324C10.4022 15.3866 10 14.7403 10 14C10 12.8954 10.8954 12 12 12C13.1046 12 14 12.8954 14 14Z" fill="#4E4B62"/>
                  </svg>                                                               
                  <input type="password" name="password" id="password" placeholder="Your Password" minlength="6"
                  class="w-full focus:outline-none text-base font-light" required
                  style="background-color: #252332;">
                                    
                </div>
              </div>
              <div class="mt-4">
                <label
                    class="block text-lg font-medium" style="color: #D8D7DF;">Confirm Password</label>
                <div class="flex items-center w-full px-5 py-4 mt-3 text-base font-light rounded-xl input-empty-3-6">
                  <svg class="mr-4 icon-empty-3-6" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.81592 4.25974C7.12462 5.48872 7 6.95088 7 8H6C4.34315 8 3 9.34315 3 11V19C3 20.6569 4.34315 22 6 22H18C19.6569 22 21 20.6569 21 19V11C21 9.34315 19.6569 8 18 8L17 7.99998C17 6.95087 16.8754 5.48871 16.1841 4.25973C15.829 3.62845 15.3194 3.05012 14.6031 2.63486C13.8875 2.22005 13.021 2 12 2C10.979 2 10.1125 2.22005 9.39691 2.63486C8.68058 3.05012 8.17102 3.62845 7.81592 4.25974ZM9.55908 5.24026C9.12538 6.01128 9 7.04912 9 8H15C15 7.04911 14.8746 6.01129 14.4409 5.24027C14.2335 4.87155 13.9618 4.57488 13.6 4.36514C13.2375 4.15495 12.729 4 12 4C11.271 4 10.7625 4.15495 10.4 4.36514C10.0382 4.57488 9.76648 4.87155 9.55908 5.24026ZM14 14C14 14.7403 13.5978 15.3866 13 15.7324V17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17V15.7324C10.4022 15.3866 10 14.7403 10 14C10 12.8954 10.8954 12 12 12C13.1046 12 14 12.8954 14 14Z" fill="#4E4B62"/>
                  </svg>                                                               
                  <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" minlength="6"
                  class="w-full focus:outline-none text-base font-light" required
                  style="background-color: #252332;">
                                    
                </div>
              </div>
              <button type="submit"
                class="btn-fill-empty-3-6 block w-full px-4 py-3 mt-9 font-medium text-xl text-white transform rounded-xl hover:bg-gray-800 hover:to-black focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2"
                >Daftar</button>
            </form>
            <p class="mt-8 text-center text-sm" style="color: #737182;">Sudah punya akun? 
            <a href="{{ route('login')}}" class="font-medium hover:underline" style="color: #FFB341;">Masuk</a></p>
          </div>
      </div>
    </div>                                                                  
    </div>
       
    </body>
</html>
