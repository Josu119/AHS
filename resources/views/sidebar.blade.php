<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Responsive Popable Sidebar</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
</head>

<body class="bg-gray-200">

    <div class="flex h-screen">
        <!-- Sidebar -->
        <section id="sidebar" class="bg-gray-800 text-white w-64 px-4 py-6 hidden md:block">
            <!-- Brand -->
            <span class="brand opacity-0">
                <!-- Your brand content here -->
            </span>
            
            <!-- Sidebar content -->
            <ul class="side-menu top">
                <li class="active">
                    <a href="">
                        @if (auth()->user()->role == 'user')
                        <i class='bx bxs-home bx-sm'></i>
                        <span class="text">Home</span>
                        @else
                        <i class='bx bxs-dashboard bx-sm'></i>
                        <span class="text">Dashboard</span>
                        @endif
                    </a>
                </li>
                @unless (auth()->user()->role == 'user')
                <li>
                    <a href="/bookings">
                        <i class='bx bxs-book-alt bx-sm'></i>
                        <span class="text">Booking</span>
                    </a>
                </li>
                @endunless
                <li>
                    <a href="/office_map">
                        <i class='bx bxs-map bx-sm'></i>
                        <span class="text">Office Map</span>
                    </a>
                </li>
                @unless (auth()->user()->role !== 'admin')
                <li>
                    <a href="/users">
                        <i class='bx bxs-group bx-sm'></i>
                        <span class="text">Manage Users</span>
                    </a>
                </li>
                @endunless
                <li>
                    <a href="/desks/available">
                        <i class='bx bx-desktop bx-sm'></i>
                        <span class="text">Manage Desks</span>
                    </a>
                </li>
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

        <!-- Content -->
        <div class="flex-1">
            <!-- Toggle button (visible on mobile) -->
            <button id="toggleSidebarBtn" class="md:hidden block px-4 py-2 bg-gray-800 text-white">
                Toggle Sidebar
            </button>

            <!-- Main content -->
            <div class="p-6">
                <h1 class="text-3xl font-semibold">Main Content</h1>
                <p>Lorem ipsum...</p>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const toggleSidebarBtn = document.getElementById("toggleSidebarBtn");
            const sidebar = document.getElementById("sidebar");

            toggleSidebarBtn.addEventListener("click", function () {
                if (sidebar.classList.contains("hidden")) {
                    sidebar.classList.remove("hidden");
                } else {
                    sidebar.classList.add("hidden");
                }
            });
        });
    </script>

</body>

</html>
