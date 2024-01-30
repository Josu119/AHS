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
                <a href="/desks/available">
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
            <li class="active">
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
        <section>
            <div class="background-section">
                <div class="faqs-section">
                    <h2>User Guide</h2>

                    <div class="faq-item" onclick="toggleAnswer(this)">
                        <h3>Creating an Account:</h3>
                        <p>To access the hotdesk booking system, you need to create a user account. Follow these
                            steps:<br>
                            a. Open the website and click on the "Sign Up" or "Register" option.<br>
                            b. Fill out the required information, such as your name, email address, and password.<br>
                            c. Click on the "Create Account" button to complete the registration process.</p>
                    </div>

                    <div class="faq-item" onclick="toggleAnswer(this)">
                        <h3>Logging In:</h3>
                        <p>Once you have registered, follow these steps to log in:<br>
                            a. Visit the website's homepage.<br>
                            b. Click on the "Login" option.<br>
                            c. Enter your registered email address and password.<br>
                            d. Click on the "Login" button.</p>
                    </div>

                    <div class="faq-item" onclick="toggleAnswer(this)">
                        <h3>How to Book?:</h3>
                        <p>Booking a hotdesk, you can use the following steps:<br>
                            a. On the website's home, Fing Booking.<br>
                            b. enter desk number. <br>
                            c. Specify the desired date and time.<br>
                            d. Then click "Book Now"</p>
                    </div>
                </div>
            </div>
        </section>
    </section>

</x-layout>
