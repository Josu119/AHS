<x-layout :cssPaths="$cssPaths" :title="$title">

    <!-- SIDEBAR -->
    <section id="sidebar" class="hide">
        <a href="#" class="brand">
            <img src="{{ asset('images/main/logo.png') }}" alt="" style="width:60px">
        </a>
        <ul class="side-menu top">
            <li class="active">
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
                    <h1>Dashboard</h1>
                    {{-- <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Home</a>
                        </li>
                    </ul> --}}
                </div>

            </div>

            <ul class="box-info">
                <li>
                    <i class='bx bxs-calendar-check'></i>
                    <span class="text">
                        <h3>100</h3>
                        <p>Total Bookings</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-group'></i>
                    <span class="text">
                        <h3>284</h3>
                        <p>Users</p>
                    </span>
                </li>

            </ul>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Calendar</h3>

                    </div>

                    <!-- <table>
			<thead>
				<tr>
					<th>User</th>
					<th>Date </th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<img src="{{ asset('people.png') }}">
						<p>John Doe</p>
					</td>
					<td>01-10-2021</td>
					<td><span class="status completed">Completed</span></td>
				</tr>
				<tr>
					<td>
						<img src="{{ asset('people.png') }}">
						<p>John Doe</p>
					</td>
					<td>01-10-2021</td>
					<td><span class="status completed">Completed</span></td>
				</tr>
				<tr>
					<td>
						<img src="{{ asset('people.png') }}">
						<p>John Doe</p>
					</td>
					<td>01-10-2021</td>
					<td><span class="status completed">Completed</span></td>
				</tr>
				<tr>
					<td>
						<img src="{{ asset('people.png') }}">
						<p>John Doe</p>
					</td>
					<td>01-10-2021</td>
					<td><span class="status cancelled">Cancelled</span></td>
				</tr>
				<tr>
					<td>
						<img src="{{ asset('people.png') }}">
						<p>John Doe</p>
					</td>
					<td>01-10-2021</td>
					<td><span class="status completed">Completed</span></td>
				</tr>
			</tbody>
		</table> -->
                </div>

                <div class="todo">
                    <div class="head">
                        <h3>Available Desk</h3>


                    </div>
                    <p style="color: green;font-size: 12px;">available</p>
                    <p style="color: red;font-size: 12px;">not-available</p>
                    <ul class="todo-list">


                        <li class="completed">
                            <p>Office 1</p>

                            <p style="color: red;">1A</p>
                            <p style="color: green;">1B</p>
                            <p style="color: green;">1C</p>
                            <p style="color: red;">1D</p>
                        </li>
                        <li class="completed">
                            <p>Office 2</p>
                            <p style="color: red;">2A</p>
                            <p style="color: green;">2B</p>
                            <p style="color: green;">2C</p>
                            <p style="color: red;">2D</p>

                        </li>
                        <li class="completed">
                            <p>Office 3</p>
                            <p style="color: red;">3A</p>
                            <p style="color: red;">3B</p>
                            <p style="color: green;">3C</p>
                            <p style="color: red;">3D</p>

                        </li>
                        <li class="completed">
                            <p>Office 4</p>
                            <p style="color: red;">4A</p>
                            <p style="color: green;">4B</p>
                            <p style="color: green;">4C</p>
                            <p style="color: red;">4D</p>
                            <p style="color: green;">4E</p>
                            <p style="color: red;">4F</p>

                        </li>
                        <li class="completed">
                            <p>Office 5</p>
                            <p style="color: green;">5A</p>
                            <p style="color: green;">5B</p>
                            <p style="color: green;">5C</p>
                            <p style="color: red;">5D</p>
                            <p style="color: green;">5E</p>
                            <p style="color: red;">5F</p>

                        </li>
                        <li class="completed">
                            <p>Office 6</p>
                            <p style="color: green;">6A</p>
                            <p style="color: green;">6B</p>
                            <p style="color: green;">6C</p>
                            <p style="color: red;">6D</p>

                        </li>
                    </ul>
                </div>
            </div>
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Recent Bookings</h3>

                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Date </th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>
                                <td><span class="status completed">Completed</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>
                                <td><span class="status completed">Completed</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>
                                <td><span class="status completed">Completed</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>
                                <td><span class="status completed">Completed</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>
                                <td><span class="status completed">Completed</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- <div class="todo">
					<div class="head">
						<h3>Todos</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
					</ul>
				</div> -->
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->

</x-layout>
