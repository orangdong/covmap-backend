<div class="h-full w-full border-box  transition-all duration-500 linear" style="background-color: #000000;">
  <header x-data="{ open: false }">
    <div
        class="mx-auto flex py-12 lg:px-24 md:px-16 sm:px-8 px-8  items-center justify-between lg:justify-start">
        <a href="{{route('dashboard')}}"> <img height="50px" width="50px"
                src="{{asset('assets/img/logo.png')}}"
                alt="logo"></a>
        <div class="flex mr-0 lg:hidden cursor-pointer"> <svg class="w-6 h-6" @click="open = !open" fill="none"
                stroke="#E7E7E8" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"></path>
            </svg> </div>
        <div :class="{'hidden': !open}"
            class="bg-screen-header-4-4 bg-black fixed w-full hidden h-full top-0 left-0 z-30 bg-opacity-60"
            @click="open = !open"> </div>
        <nav class="navigation-header-4-4 lg:mr-auto hidden flex-col text-base justify-center z-50 fixed top-8 left-3 right-3 p-8 rounded-md shadow-md bg-white lg:flex lg:flex-row lg:relative lg:top-0 lg:shadow-none bg-popup-header-4-4 lg:bg-transparent lg:p-0 lg:items-center items-start"
            :class="{'flex': open, 'hidden': !open}"> <a style="font-size: 18px;color: white; font-weight: 600; text-decoration: none; text-align: center" href="{{route('dashboard')}}"> <img height="50px" width="50px" class="m-0 lg:hidden mb-3"
                    src="{{asset('assets/img/logo.png')}}" alt="logo">CovMap </a> 
                    
                    <!-- <a
                class=" text-lg font-semibold leading-6 mx-0 lg:mx-5 my-4 lg:my-0 relative active"
                style="color: #FFFFFF; font-family: 'Poppins', sans-serif;" href="#">Home</a>  -->
                <a
                class=" text-lg font-light leading-6 mx-0 lg:mx-5 my-4 lg:my-0 relative"
                style="font-family: 'Poppins', sans-serif;" href="{{route('search')}}?service=test">Test Covid</a> <a
                class=" text-lg font-light leading-6 mx-0 lg:mx-5 my-4 lg:my-0 relative"
                style="font-family: 'Poppins', sans-serif;" href="{{route('search')}}?service=vaccine">Vaksin Covid</a> <a
                class=" text-lg font-light leading-6 mx-0 lg:mx-5 my-4 lg:my-0 relative"
                style="font-family: 'Poppins', sans-serif;" href="{{route('info')}}">Info Covid</a> <a
                class=" text-lg font-light leading-6 mx-0 lg:mx-5 my-4 lg:my-0 relative"
                style="font-family: 'Poppins', sans-serif;" href="#">About Us</a>
            <div class="flex items-center justify-end w-full lg:hidden mt-3"> <a href="{{url('user/profile')}}"
                    class="font-light py-3 px-8 focus:outline-none"
                    style="color:#E7E7E8; font-family: 'Poppins', sans-serif;text-decoration: underline"> Edit Profile </a></div> <svg @click="open = !open"
                class="w-6 h-6 absolute top-4 right-4  lg:hidden cursor-pointer" fill="none"
                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                </path>
            </svg>
        </nav>
        <div class="hidden lg:inline-flex"> <a href="{{url('user/profile')}}"
                class="inline-flex text-black font-light text-lg leading-7 py-3 px-8 focus:outline-none"
                style="color:#E7E7E8; font-family: 'Poppins', sans-serif;text-decoration: underline">Edit Profile </a> </div>
    </div>
  </header> 
</div>

