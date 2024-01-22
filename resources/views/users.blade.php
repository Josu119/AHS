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

            <a href="#" class="notification">
                <i class='bx bxs-bell'></i>
                <span class="num">8</span>
            </a>
            <a href="/profile" class="profile">
                <img src="{{ asset('images/main/monk.jpg') }}">
            </a>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Manage User</h1>
                </div>
            </div>

            <div class="table-data">
                <div class="order">
                    <div class="head">


                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Email </th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="{{ asset('images/main/Alex Gonley.jpg') }}">
                                    <p>John Doe</p>
                                </td>
                                <td>Johndoe@laverdad.com</td>
                                <td><span class="status cancelled">Delete</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="{{ asset('images/main/Alex Gonley.jpg') }}">
                                    <p>John Doe</p>
                                </td>
                                <td>Johndoe@laverdad.com</td>
                                <td><span class="status cancelled">Delete</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="{{ asset('images/main/Alex Gonley.jpg') }}">
                                    <p>John Doe</p>
                                </td>
                                <td>Johndoe@laverdad.com</td>
                                <td><span class="status cancelled">Delete</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="{{ asset('images/main/Alex Gonley.jpg') }}">
                                    <p>John Doe</p>
                                </td>
                                <td>Johndoe@laverdad.com</td>
                                <td><span class="status cancelled">Delete</span></td>
                            </tr>


                        </tbody>
                    </table>
                </div>

                <div class="todo">
                    <div class="head">
                        <h3></h3>
                        <p>Add User</p>
                        <i class='bx bx-plus'></i>

                    </div>
                    <ul class="todo-list">
                        <input type="text" placeholder="Enter Name"
                            style="padding:10px;border-radius: 10px;width:80%">
                    </ul>
                    <ul class="todo-list">
                        <input type="text" placeholder="Enter Email"
                            style="padding:10px;border-radius: 10px;width:80%;margin-top: 10px;">
                    </ul>
                    <ul class="todo-list">
                        <input type="text" placeholder="Enter Password"
                            style="padding:10px;border-radius: 10px;width:80%;margin-top: 10px;">
                    </ul>
                    <button>Generate Random Password</button>
                    <ul class="todo-list" style="margin-top: 10px;">
                        <button style="padding: 5px 10px; background-color: green;">Add</button>
                        <button style="padding: 5px 10px;background-color: red;">Cancel</button>
                    </ul>
                </div>
            </div>

        </main>

    </section>

</x-layout>
