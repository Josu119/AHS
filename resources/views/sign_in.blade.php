<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In - AHS</title>
    @vite('resources/css/app.css')
</head>
<body class="font-semibold">
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

            {{-- Button --}}
            <a href="/register" class="p-3 px-6 pt-2 text-white bg-congressBlue hover:bg-cornflowerBlue rounded-full baseline text-lg lg:text-xl">
                Create an Account
            </a>
        </div>
    </nav>

    <section>
        <div class="container mx-auto w-auto rounded-md text-center md:bg-slate-200 md:shadow-xl md:p-4 md:w-96">
            <h2 class="text-base uppercase">
                sign in
            </h2>
            <form action="">
                <input type="text" name="usernameOrEmail" placeholder="Username or Email" class="bg-slate-200 p-2 mt-3 w-64 rounded-md focus:border-2 focus:border-black md:bg-white md:w-80">
                <input type="password" name="password" placeholder="Password" class="bg-slate-200 p-2 mt-3 w-64 rounded-md focus:border-2 focus:border-black md:bg-white md:w-80"><br>
                <input type="submit" name="submit" value="ENTER" class="p-2 mt-3 w-64 rounded-md text-white bg-congressBlue hover:cursor-pointer hover:bg-cornflowerBlue md:w-80">
            </form>
        </div>
    </section>
</body>
</html>