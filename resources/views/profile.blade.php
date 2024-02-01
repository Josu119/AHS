


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




    <section id="sidebar" class="hide">
        <span class="brand opacity-0">
          
        </span>
        <ul class="side-menu top">
             <li >
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
    @unless (auth()->user()->role == 'user' || auth()->user()->role == 'office_manager')

                     <img src="{{ asset('images/admin.jpg') }}" alt="" style="height:100px;border-radius:50px">
@endunless

 @unless (auth()->user()->role == 'admin' || auth()->user()->role == 'office_manager')

                     <img src="{{ asset('images/dummy.png') }}" alt="" style="height:100px;border-radius:50px">
@endunless

 @unless (auth()->user()->role == 'admin' || auth()->user()->role == 'user')

                     <img src="{{ asset('images/manager.jpg') }}" alt="" style="height:100px;border-radius:50px">
@endunless


                    <div class="profile">

                    
                        <div class="user">
                            @auth
                            @php
                                if (auth()->user()->role == 'admin') {$role = 'Administrator';}
                                elseif (auth()->user()->role == 'office_manager') {$role = 'Office Manager';}
                                elseif (auth()->user()->role == 'user') {$role = 'User';}
                            @endphp
                            <p style="font-size: 30px;"> {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}!</p>
                            <p style="font-size: 20px; color: rgb(29, 58, 91);">{{ $role }}</p>
                            @else
                            <p style="font-size: 30px;">Hello, user!</p>
                            <p style="font-size: 20px; color: rgb(29, 58, 91);">Guest</p>
                            @endauth
                        </div>
                    </div>
                    <div style="border: 1px solid #3a425f;" class="mt-2"></div>
                    @auth
                    <p>{{ auth()->user()->email }}</p>
                    @endauth
                </div>
            </div>

  <div>
        @if(session()->has('success'))
        <div style="color:white;background-color:#7EE27C;width:250px;padding:10px;border-radius:20px">
            {{session('success')}}
        </div>

        @endif
    </div>


             <div class="table-data">
                <div class="order">
                    <div class="head">
                      
                      
                         
                    

                            <table>
        <tr>
           
            <th>Date</th>
            <th>Desk Number</th>
            <th>Status</th>
             <th>Action</th>
          
          
            
        </tr>

      
   @foreach ($bookings as $booking)

        <tr>
           
            <td>{{$booking->date}}</td>
            <td>Desk {{$booking->desk_number}}</td>
          
            <td style="color:{{$booking->status ? 'green' : 'red'}}">{{$booking->status ? 'Accepted' : 'Cancelled'}}</td>

 
    <td>
        <form method="post" action="{{route('booking.destroy',$booking->id)}}">
            @csrf
            @method('DELETE')
      
        <input type="submit" value="Cancel" style="background-color: #ef7364; color: #fff; padding: 5px 10px; border: none; border-radius: 3px; cursor: pointer;"/>
    </form>
    </td>
        
        </tr>
@endforeach

    </table>
                       
                    </div>
                    
                  
                </div>

            </div>
          
        </main>

    </section>

 <script src="{{ asset('js/booking.js') }}"></script>

    <script src="{{asset('javascript/homepage.js')}}"></script>
</body>

</html>