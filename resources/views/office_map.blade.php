<x-layout :cssPaths="$cssPaths" :title="$title">

    <!-- SIDEBAR -->
    <section id="sidebar" class="hide">
        <span class="brand opacity-0">
            <img src="{{ asset('images/main/logo.png') }}" alt="" style="width:60px">
        </span>
        <ul class="side-menu top">
            <li>
                <a href="/dashboard">
                    <i class='bx bxs-dashboard bx-sm'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/bookings">
                    <i class='bx bxs-book-alt bx-sm'></i>
                    <span class="text">Booking</span>
                </a>
            </li>
            <li class="active">
                <a href="/office_map">
                    <i class='bx bxs-map bx-sm'></i>
                    <span class="text">Office Map</span>
                </a>
            </li>
            <li>
                <a href="/users">
                    <i class='bx bxs-group bx-sm'></i>
                    <span class="text">Manage Users</span>
                </a>
            </li>

            <li>
                <a href="/desks">
                    <i class='bx bx-desktop bx-sm'></i>
                    <span class="text">Manage Desks</span>
                </a>
            </li>
            {{-- <li>
                <a href="/roles">
                    <i class='bx bx-user-pin bx-sm'></i>
                    <span class="text">Manage Roles</span>
                </a>
            </li> --}}
        </ul>
        <ul class="side-menu">
            <li>
                <a href="/faqs">
                    <i class='bx bx-question-mark bx-sm'></i>
                    <span class="text">FAQs</span>
                </a>
            </li>
            <li>
                <a href="/guide">
                    <i class='bx bxs-component bx-sm'></i>
                    <span class="text">User Guide</span>
                </a>
            </li>
            <li>
                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="logout">
                        <i class='bx bxs-log-out-circle bx-sm'></i>
                        <span class="text">Logout</span>
                    </button>
                </form>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->

    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu bx-sm'></i>
            <h1 class="font-bold text-md text-congressBlue lg:text-xl flex">
                <img class="inline-block h-7 pb-2 lg:h-9 lg:pb-3" src="{{ asset('images/ahs-ape.svg') }}"
                    alt="A">pexHubSpot
            </h1>

            <form action="#">
                <div class="form-input">

                </div>
            </form>

            {{-- <a href="#" class="notification">
                <i class='bx bxs-bell'></i>
                <span class="num">8</span>
            </a> --}}
            @auth
            <a href="/profile" class="profile">
                {{ auth()->user()->username }}
            </a>
            @else
            <a href="/profile" class="profile font-bold">Profile</a>
            @endauth
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Office Map</h1>
                </div>
            </div>
        </main>

    </section>
    <div style="position: absolute;z-index: 1;margin-left: 30px;">
        <img src="{{ asset('images/floor-plan.png') }}" alt="Floor Plan" class="floor-plan">
        {{-- <svg class="floor-plan" width="700" height="450" xmlns="http://www.w3.org/2000/svg">
            <!-- Define a pattern for the background image -->
            <defs>
                <pattern id="bg-pattern" width="100%" height="100%" patternContentUnits="objectBoundingBox">
                    <image href="{{ asset('images/main/officesample.jpg') }}" width="1" height="1"
                        preserveAspectRatio="none"></image>
                </pattern>
            </defs>

            <!-- Living Room -->
            <rect class="room living-room" width="300" height="200" x="0" y="0" onclick="changeColor(this)" />
            <text class="room-label" x="100" y="105">OFFICE 1</text>


            <!-- Bedroom -->
            <rect class="room bedroom" width="170" height="100" x="298" y="0" onclick="changeColor(this)" />
            <text class="room-label" x="330" y="60">OFFICE 2</text>


            <rect class="room bedroom" width="170" height="100" x="298" y="100" onclick="changeColor(this)" />
            <text class="room-label" x="330" y="150">OFFICE 3</text>

            <rect class="room bedroom" width="235" height="200" x="467" y="0" onclick="changeColor(this)" />
            <text class="room-label" x="530" y="105">OFFICE 4</text>



            <!-- Kitchen -->
            <rect class="room kitchen" width="300" height="220" x="0" y="230" onclick="changeColor(this)" />
            <text class="room-label" x="100" y="345">OFFICE 5</text>


            <!-- Bathroom -->
            <rect class="room bathroom" width="330" height="220" x="370" y="230" onclick="changeColor(this)" />
            <text class="room-label" x="480" y="345">OFFICE 6</text>

        </svg>
        <button
            style="position: absolute;margin-left:2%;z-index: 1;margin-top: 1px;background-color: aliceblue;cursor: pointer;padding: 5px;border-radius: 10px;">Update
            Office Plan</button>
        <div class="box">
            <div
                style="background-color: rgb(156, 163, 163);height: 30px;width: 100px;text-align: center;font-size: larger;border-radius: 5px;border:1px solid black">
                Office
            </div>
        </div> --}}
    </div>

    <div>

    </div>

</x-layout>
