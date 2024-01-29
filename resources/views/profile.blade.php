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
            <li>
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
                    <div class="profile">
                        <div class="user">
                            <p style="font-size: 30px;">John Doe Meng</p>
                            <p style="font-size: 20px; color: rgb(29, 58, 91);">Administrator</p>
                        </div>
                    </div>
                    <div style="border: 1px solid #3a425f;  margin-top: 20px;"> </div>

                    <div class="info" style="font-size: 20px; margin-top: 20px;">
                        <div style="margin-bottom: 15px;">
                            <label for="Name" style="padding-right: 5px;">Name:</label> <input type="text"
                                id="email" placeholder="John Doe Meng" size="40">
                            <i id="clickableicon" class="fa-solid fa-pencil"></i>
                        </div>

                        <div>
                            <label for="Email" style="padding-right: 9px;">Email:</label> <input type="text"
                                id="email" placeholder="johndmeng@gmail.com" size="40">
                            <i id="clickableicon" class="fa-solid fa-pencil"></i>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </section>

</x-layout>
