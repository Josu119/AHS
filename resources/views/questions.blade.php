<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accordion FAQ</title>
    <style>
    /* Style the buttons that are used to open and close the accordion panel */
    .accordion {
        background-color: transparent;
        color: #444;
        cursor: pointer;
        padding: 20px;
        width: 100%;
        text-align: left;
        /* font-style: italic; */
        font-weight: bold;
        border: none;
        outline: none;
        transition: 0.4s;
        border-radius: 15px;
        font-family: 'Arial', sans-serif; /* Example font styling */
        font-size: 18px; /* Example font size */
    }

    /* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
    .active, .accordion:hover {
        background-color: #ccc;
    }

    /* Style the accordion panel. Note: hidden by default */
    .panel {
        padding: 0 18px;
        background-color: transparent;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
    }

    /* Style the paragraphs inside the panel for indentation */
    .panel p {
        padding-left: 20px;
        text-indent: -20px; /* Negative text-indent to counteract the left padding */
        font-size: 20px; /* Example font size */
        font-style: oblique;
        font-weight: light;
    }

    /* Make the accordion icon slightly larger */
    .accordion:after {
        content: '\0076'; 
        font-size: 26px; /* Increased font size */
        color: #777;
        float: right;
        margin-left: 5px;
    }

    .active:after {
        content: "\005E";
    }
</style>


</head>
<body>

    <!-- FAQ items with accordion structure -->
    <button class="accordion">What is hotdesking and how does it work in our system?</button>
    <div class="panel">
        <p>Hotdesking is a flexible office arrangement where employees do not have assigned desks, but instead can choose from a pool of available workstations each day. In our system, employees can book a desk through our online platform or mobile app.</p>
    </div>

    <button class="accordion">How do I reserve a hotdesk in our system?</button>
    <div class="panel">
        <p>To reserve a hotdesk, employees can log into our system using their credentials and access the hotdesking feature. They can view the availability of desks for a specific date and time, and select a desk that suits their requirements. Once they have made a reservation, the desk will be reserved under their name for the designated time slot.</p>
    </div>

    <button class="accordion">Can I reserve a hotdesk in advance?</button>
    <div class="panel">
        <p>Yes, our system allows employees to reserve hotdesks in advance. They can book a desk for a future date and time, ensuring they have a workspace available when they need it. However, it is important to note that reservations are subject to availability, so it is advisable to book in advance to secure a desired desk.</p>
    </div>

    <button class="accordion">Can I cancel my hotdesk booking?</button>
    <div class="panel">
        <p>Yes, you can usually cancel your booking through our website's booking management system. However, cancellation and modification policies may vary, so it's advisable to check our website's terms and conditions or contact our customer support for assistance.</p>
    </div>

    <button class="accordion">How long can I use a hotdesk?</button>
    <div class="panel">
        <p>In our hotdesking system, employees can use a desk for the designated time slot they have reserved. The time could be a few hours, half a day, or a full day, depending on their preference and availability. If employees need to extend their usage beyond the reserved time, they can check for availability and make an additional reservation if necessary.</p>
    </div>

    <button class="accordion">Can I personalize my hotdesk?</button>
    <div class="panel">
        <p>As hotdesking promotes flexibility and shared workspaces, personalization options may vary. However, employees are generally allowed to bring personal items such as laptops, documents, and small desk accessories to their chosen desk for the day. It is important to ensure that personal items are removed at the end of the day to keep the desk clean and ready for the next user.</p>
    </div>

    <button class="accordion">Can I choose the same hotdesk every day?</button>
    <div class="panel">
        <p>While our hotdesking system offers flexibility and the ability to choose from available desks, it does not guarantee the same desk every day. The availability of desks and the overall concept of hotdesking is based on a first-come, first-served basis. Employees can choose any available desk each day, depending on their needs and preferences.</p>
    </div>

    <button class="accordion">How can I find an available hotdesk quickly?</button>
    <div class="panel">
        <p>Our hotdesking system provides real-time information on desk availability through our online platform or mobile app. Employees can easily view the available desks for a specific date and time, and select the one that suits them best. This ensures a hassle-free and efficient process in finding a suitable hotdesk quickly.</p>
    </div>

    <button class="accordion">What if I encounter issues with my hotdesk reservation?</button>
    <div class="panel">
        <p>If employees encounter any issues related to their hotdesk reservations, such as a desk being occupied despite the reservation or any technical difficulties with the system, they should contact the designated support team or the office administrator for assistance. They will help resolve any concerns and ensure a seamless experience with the hotdesking system.</p>
    </div>

    <button class="accordion">Can I collaborate with colleagues while using a hotdesk?</button>
    <div class="panel">
        <p>Absolutely! Our hotdesking system is designed to promote collaboration and flexibility within the office space. Employees can utilize common areas, meeting rooms, or designated collaboration spaces to work together, have discussions, or share ideas. The hotdesk setup allows for easy interaction and encourages a dynamic work environment.</p>
    </div>

    <script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            /* Check if the clicked panel is active */
            var isActive = this.classList.contains("active");

            /* Close all panels */
            closeAllPanels();

            /* If the clicked panel was not active, open it */
            if (!isActive) {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }

    function closeAllPanels() {
        var panels = document.getElementsByClassName("panel");
        for (var j = 0; j < panels.length; j++) {
            var panel = panels[j];
            if (panel.style.maxHeight) {
                /* Remove "active" class from the corresponding accordion button */
                panel.previousElementSibling.classList.remove("active");
                panel.style.maxHeight = null;
            }
        }
    }
</script>



</body>
</html>