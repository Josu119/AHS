<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>


<!-- <nav class="relative container mx-auto p-4 text-center md:p-6">

        <div class="flex items-center justify-between">
            <a href="/" class="pt-2">
                <h3 class="font-bold text-2xl text-congressBlue lg:text-3xl" style="display:flex">
                    <img class="display: inline-block h-8 pb-2 lg:h-10 lg:pb-3" src="{{ asset('images/ahs-ape.svg') }}"
                        alt="A">pexHubSpot
                </h3>
            </a>
            
            <div class="hidden space-x-6 text-xl md:flex lg:text-2xl">
                <a href="#features" class="hover:text-cornflowerBlue" style="font-size:20px">About Hotdesking</a>      
                <a href="#team" class="hover:text-cornflowerBlue" style="font-size:20px">Our Team</a>
            </div>

            <a href="/users/register"
                class="hidden p-3 px-6 pt-2 text-white bg-congressBlue hover:bg-cornflowerBlue rounded-full baseline text-lg md:block lg:text-xl">
                Get Started
            </a>
        </div>
    </nav> -->

    <header class="text-gray-400 body-font bg-gray-900" style="position: static;">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a href="/" class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
      <img class="inline-block h-16 mr-2" src="{{ asset('images/ahs-ape.svg') }}" alt="A">
      <span class="text-2xl">pexHubSpot</span>
    </a>

    <nav class="ml-4 md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
      <a href="#features" class="mr-5 hover:text-gray-100 text-white" style="font-size:20px">About Hotdesking</a>
      <a href="#team" class="mr-5 hover:text-gray-100 text-white" style="font-size:20px">Our Team</a>
    </nav>

    <a href="/users/register" class="hidden md:block ml-4 inline-flex items-center bg-indigo-600 border-0 py-2 px-4 focus:outline-none hover:bg-indigo-700 rounded text-white text-lg mt-4 md:mt-0">
      Get Started
    </a>
  </div>
</header>






    
</body>
</html>