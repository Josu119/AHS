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
            <li class="active">
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

        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Create User</h1>
                </div>
            </div>

            <form method="POST" action="/users">
                @csrf {{-- Prevents cross-site scripting attacks --}}
                <div class="table-data">
                    <div class="todo">
                        <div class="head">
                        </div>
                        <ul class="todo-list mb-3">
                            <p class="font-bold">Username</p>
                            <input type="text" name="username" placeholder="Username" style="padding:10px;border-radius: 10px;width:80%" value="{{ old('username') }}" required />
                            @error('username')
                            <p class="text-red-700 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </ul>
                        <ul class="todo-list mb-3">
                            <p class="font-bold">First Name</p>
                            <input type="text" name="first_name" placeholder="First Name" style="padding:10px;border-radius: 10px;width:80%;" value="{{ old('first_name') }}" required />
                            @error('first_name')
                                <p class="text-red-700 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </ul>
                        <ul class="todo-list mb-3">
                            <p class="font-bold">Last Name</p>
                            <input type="text" name="last_name" placeholder="Last Name" style="padding:10px;border-radius: 10px;width:80%;" value="{{ old('last_name') }}" required />
                            @error('last_name')
                                <p class="text-red-700 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </ul>
                        <ul class="todo-list mb-3">
                            <p class="font-bold">Email</p>
                            <input type="text" name="email" placeholder="Email" style="padding:10px;border-radius: 10px;width:80%;" value="{{ old('email') }}" required />
                            @error('email')
                                <p class="text-red-700 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </ul>
                        <ul class="todo-list mb-3">
                            <p class="font-bold">Password</p>
                            <input type="password" name="password" placeholder="Password" style="padding:10px;border-radius: 10px;width:80%;" required />
                            @error('password')
                                <p class="text-red-700 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </ul>
                        <ul class="todo-list mb-3">
                            <p class="font-bold" style="display: inline">Role:</p><br>
                            <select name="role" class="p-1 border-2 rounded-2xl active:rounded-2xl">
                                <option value="user">User</option>
                                <option value="office_manager">Office Manager</option>
                            </select>
                            @error('role')
                            <p class="text-red-700 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </ul>
                        <ul class="todo-list" style="margin-top: 10px;">
                            <button type="submit" class="px-3 py-1 bg-darkOlive text-white rounded-xl">Add User</button>
                            {{-- <button class="px-3 py-1 bg-red-700 text-white rounded-xl">Clear</button> --}}
                        </ul>
                    </div>
                </div>
            </form>

        </main>

    </section>

</x-layout>
