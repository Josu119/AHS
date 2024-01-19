<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ApexHubSpot</title>
    @vite('resources/css/app.css')
</head>
<body class="font-semibold landing">
    {{-- NavBar --}}
    <nav class="relative container mx-auto p-4 text-center md:p-6">
        {{-- Flex Container --}}
        <div class="flex items-center justify-between">
            {{-- Logo --}}
            <a href="/" class="pt-2">
                <h1 class="font-bold text-2xl text-congressBlue lg:text-3xl">
                    <img class="display: inline-block h-8 pb-2 lg:h-10 lg:pb-3" src="{{asset('images/ahs-ape.svg')}}" alt="A">pexHubSpot
                </h1>
            </a>

            {{-- Menu --}}
            <div class="hidden space-x-6 text-xl md:flex lg:text-2xl">
                <a href="#features" class="hover:text-cornflowerBlue">About Hotdesking</a>
                <a href="#team" class="hover:text-cornflowerBlue">Our Team</a>
            </div>

            {{-- Button --}}
            <a href="/register" class="hidden p-3 px-6 pt-2 text-white bg-congressBlue hover:bg-cornflowerBlue rounded-full baseline text-lg md:block lg:text-xl">
                Get Started
            </a>
        </div>
    </nav>

    {{-- Hero Section --}}
    <section id="hero">
        {{-- Flex Container --}}
        <div class="container flex flex-col-reverse item-center px-6 mx-auto mt-0 md:mt-10 space-y-0 md:flex-row">
            {{-- Left Item --}}
            <div class="flex flex-col mb-32 space-y-6 md:space-y-12 md:w-1/2">
                <h1 class="max-w-md text-4xl text-center md:text-5xl md:text-left">
                    Where <span class="text-darkOlive">Flexibility</span> Meets <span class="text-mulberryWood">Productivity</span> in Every Seat
                </h1>
                <p class="max-w-sm mx-auto text-xl text-center text-mainBlue md:text-left">
                    Step into the future of work with hotdesking, where the landscape of productivity transforms. Unleash your productivity, any seat, anytime.
                </p>
                <div class="flex justify-center md:justify-start">
                    <a href="/register" class="p-3 px-6 pt-2 text-white bg-congressBlue hover:bg-cornflowerBlue rounded-full baseline text-lg md:block lg:text-xl">
                        Get Started
                    </a>
                </div>
            </div>

            {{-- Image --}}
            <div class="md:1/2">
                <img src="{{asset('images/hero.png')}}" alt=" " class="h-72 mx-auto md:w-96 md:h-auto">
            </div>
        </div>
    </section>

    {{-- Features Section --}}
    <section id="features" class="pt-7">
        {{-- Flex Container --}}
        <div class="container flex flex-col item-center px-4 mx-auto mt-7 space-y-0 md:flex-row">
            {{-- Definition --}}
            <div class="flex flex-col mb-32 space-y-7 md:w-1/2">
                <h1 class="max-w-md text-4xl text-center md:text-left">
                    What is Hotdesking?
                </h1>
                <p class="max-w-sm mx-auto text-xl text-center text-mainBlue md:text-left">
                    Hotdesking is a flexible office arrangement where employees do not have assigned desks, but instead can choose from a pool of available workstations each day. In our system, employees can book a desk through our online platform or mobile app.
                </p>
            </div>
            {{-- Offer --}}
            <div class="flex flex-col mb-32 space-y-10 md:w-1/2">
                <h1 class="max-w-md text-4xl text-center md:text-left">
                    Service We Offer
                </h1>
                <p class="max-w-sm mx-auto text-xl text-center text-mainBlue md:text-left">
                    To reserve a hotdesk, employees can log into our system using their credentials and access the hotdesking feature. They can view the availability of desks for a specific date and time, and select a desk that suits their requirements. Once they have made a reservation, the desk will be reserved under their name for the designated time slot.

                </p>
                <p class="max-w-sm mx-auto text-xl text-center text-mainBlue md:text-left">
                    In our hotdesking system, employees can use a desk for the designated time slot they have reserved. The time could be a few hours, half a day, or a full day, depending on their preference and availability.
                </p>
            </div>
        </div>
    </section>
</body>
</html>