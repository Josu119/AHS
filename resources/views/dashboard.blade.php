


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
       <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}">
        <title>ApexHubSpot</title>
    <!-- My CSS -->
      <link rel="stylesheet" href="{{asset('css/homepage.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


   
    
</head>

<body>

    <!-- SIDEBAR -->
    <section id="sidebar" class="hide">
        <span class="brand opacity-0">
          
        </span>
        <ul class="side-menu top">
           <li class="active">
    <a href="/dashboard">
        <?php if (auth()->user()->role == 'user'): ?>
            <i class='bx bxs-home bx-sm'></i>
            <span class="text">Home</span>
        <?php else: ?>
            <i class='bx bxs-dashboard bx-sm'></i>
            <span class="text">Dashboard</span>
        <?php endif; ?>
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
          @unless (auth()->user()->role == 'user' || auth()->user()->role == 'office_manager')
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
                    <button type="submit" class="logout" style="color:red;border:none;margin-left:10px">
                        <i class='bx bxs-log-out-circle bx-sm'></i>
                        
                    </button><span class="text" style="position:absolute;margin-left:15px">Logout</span>
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
             <h1 class="font-bold text-md text-congressBlue lg:text-xl flex" style="color:darkblue;margin-bottom:14px">
                <img class="inline-block h-7 pb-2 lg:h-9 lg:pb-3" src="{{ asset('images/ahs-ape.svg') }}"
                    alt="A" style="position:relative;height:25px;">pexHubSpot
            </h1>

            <form action="#">
                <div class="form-input">

                </div>
            </form>

            @auth
            <a href="/profile" class="profile" style="background-color:black;padding:5px 20px;color:white;border-radius:10px;border:1px solid black;">
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

             @unless (auth()->user()->role == 'user')
  <p style="font-size:30px">Dashboard</p>
            <ul class="box-info">
                
                
                <li>
                    <i class='bx bxs-calendar-check'></i>
                    <span class="text">
                        <h3>{{ $totalBookings }}</h3>
                        <p>Total Bookings</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-group'></i>
                    <span class="text">
                        <h3>{{ $totalUsers }}</h3>
                        <p>Total Users</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-group'></i>
                    <span class="text">
                        <h3>{{ $adminCount }}</h3>
                        <p>Total Admin</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-group' style="background-color:lightblue"></i>
                    <span class="text">
                        <h3>{{ $managerCount }}</h3>
                        <p>Office Manager</p>
                    </span>
                </li>
                 <li>
                    <i class='bx bxs-group' style="background-color:pink"></i>
                    <span class="text">
                        <h3>{{ $normal }}</h3>
                        <p>Normal Users</p>
                    </span>
                </li>

                
                  <li>
                    <i class='bx bx-table' style="background-color:lightgreen"></i>
                    <span class="text">
                        <h3>{{ $available }}</h3>
                        <p>Available Desk</p>
                    </span>
                </li>
                 


            </ul>
            @endunless




<br>




             <div class="table-data">
                <div class="order">
                    <div class="head">

                    <p style="font-size:30px">Good Day  {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}, Book Your Desk Now</p><br>
                  <a href="/desks/available" style="background-color:darkblue;color:white;font-size:30px;padding:10px;border-radius:10px">Book Now</a>

                    </div>
       
                </div>
            </div>
         

           
    <!-- CONTENT -->


 <script src="{{ asset('js/booking.js') }}"></script>

    <script src="{{asset('javascript/homepage.js')}}"></script>
</body>

</html>
