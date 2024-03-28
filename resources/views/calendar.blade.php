<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real-Time Calendar</title>
    <style>
        ul {list-style-type: none;}
        body {font-family: Verdana, sans-serif;}

        /* Month header */
        .month {
            padding: 60px 25px;
            width: 100%;
            background: #1abc9c;
            /* background: rgba(0, 0, 0, 0.2); */
            text-align: center;
        }

        /* Month list */
        .month ul {
            margin: 0;
            padding: 0;
        }

        .month ul li {
            color: white;
            font-size: 20px;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        /* Previous button inside month header */
        .month .prev {
            float: left;
            padding-top: 10px;
            cursor: pointer;
        }

        /* Next button */
        .month .next {
            float: right;
            padding-top: 10px;
            cursor: pointer;
        }

        /* Weekdays (Mon-Sun) */
        .weekdays {
            margin: 0;
            padding: 10px 0;
            background-color:#ddd;
        }

        .weekdays li {
            display: inline-block;
            width: 13.6%;
            color: #666;
            text-align: center;
        }

        /* Days (1-31) */
        .days {
            padding: 10px 0;
            background: #eee;
            margin: 0;
        }

        .days li {
            list-style-type: none;
            display: inline-block;
            width: 13.6%;
            text-align: center;
            margin-bottom: 5px;
            font-size: 20px;
            color: #777;
        }

        /* Highlight the "current" day */
        .days li .active {
            padding: 5px;
            background: #1abc9c;
            color: white !important;
            border-radius: 50%;
        }
    </style>
</head>
<body>

    <div class="month">
        <ul>
            <li class="prev" onclick="prevMonth()">&#10094;</li>
            <li class="next" onclick="nextMonth()">&#10095;</li>
            <li id="currentMonth"></li>
        </ul>
    </div>

    <ul class="weekdays">
        <li>Mo</li>
        <li>Tu</li>
        <li>We</li>
        <li>Th</li>
        <li>Fr</li>
        <li>Sa</li>
        <li>Su</li>
    </ul>

    <ul class="days" id="daysList">
        <!-- Days will be dynamically generated here -->
    </ul>

    <script>
        let currentDate = new Date();

        function generateCalendar() {
            const currentMonth = currentDate.getMonth();
            const currentYear = currentDate.getFullYear();

            const monthNames = ["January", "February", "March", "April", "May", "June",
                                "July", "August", "September", "October", "November", "December"];

            document.getElementById("currentMonth").textContent = `${monthNames[currentMonth]} ${currentYear}`;

            const daysList = document.getElementById("daysList");
            daysList.innerHTML = "";

            const firstDayOfMonth = new Date(currentYear, currentMonth, 1).getDay();
            const lastDayOfMonth = new Date(currentYear, currentMonth + 1, 0).getDate();

            for (let i = 0; i < firstDayOfMonth; i++) {
                const li = document.createElement("li");
                daysList.appendChild(li);
            }

            for (let i = 1; i <= lastDayOfMonth; i++) {
                const li = document.createElement("li");
                li.textContent = i;
                if (i === currentDate.getDate() && currentMonth === currentDate.getMonth() && currentYear === currentDate.getFullYear()) {
                    if (currentMonth === new Date().getMonth() && currentYear === new Date().getFullYear()) {
                        li.innerHTML = `<span class="active">${i}</span>`;
                    }
                }
                daysList.appendChild(li);
            }
        }

        function prevMonth() {
            if (currentDate.getMonth() > 0) {
                currentDate.setMonth(currentDate.getMonth() - 1);
            } else {
                currentDate.setFullYear(currentDate.getFullYear() - 1);
                currentDate.setMonth(11);  // December
            }

            generateCalendar();
        }

        function nextMonth() {
            if (currentDate.getMonth() < 11) {
                currentDate.setMonth(currentDate.getMonth() + 1);
            } else {
                currentDate.setFullYear(currentDate.getFullYear() + 1);
                currentDate.setMonth(0);  // January
            }

            generateCalendar();
        }

        // Generate the initial calendar
        generateCalendar();
    </script>

</body>
</html>
