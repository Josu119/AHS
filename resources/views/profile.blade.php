<x-layout :cssPaths="$cssPaths" :title="$title">

    <!-- SIDEBAR -->
    <section id="sidebar" class="hide">
        <a href="#" class="brand">
            <img src="{{ asset('images/main/logo.png') }}" alt="" style="width:60px">
        </a>
        <ul class="side-menu top">
            <li>
                <a href="/dashboard">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/bookings">
                    <i class='bx bxs-book-alt'></i>
                    <span class="text">Booking</span>
                </a>
            </li>
            <li>
                <a href="/office_map">
                    <i class='bx bxs-map'></i>
                    <span class="text">Office Map</span>
                </a>
            </li>
            <li>
                <a href="/users">
                    <i class='bx bxs-group'></i>
                    <span class="text">Manage Users</span>
                </a>
            </li>

            <li>
                <a href="/desks">
                    <i class='bx bx-desktop'></i>
                    <span class="text">Manage Desks</span>
                </a>
            </li>
            <li>
                <a href="/roles">
                    <i class='bx bx-user-pin'></i>
                    <span class="text">Manage Roles</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="/faqs">
                    <i class='bx bx-question-mark'></i>
                    <span class="text">FAQs</span>
                </a>
            </li>
            <li>
                <a href="/guide">
                    <i class='bx bxs-component'></i>
                    <span class="text">User Guide</span>
                </a>
            </li>
            <li>
                <a href="#" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->

    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <p>ApexHubSpot</p>

            <form action="#">
                <div class="form-input">

                </div>
            </form>

            {{-- <a href="#" class="notification">
                <i class='bx bxs-bell'></i>
                <span class="num">8</span>
            </a> --}}
            <a href="/profile" class="profile">
                Profile
            </a>
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
