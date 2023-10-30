<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Details</title>
    <link rel="stylesheet" type="text/css" href="eve.css">
    <script src="https://kit.fontawesome.com/87eb476f03.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        *{
            margin: 0px;
            padding: 0px;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            /* box-sizing: border-box; */
        }
        /* CSS for table layout */
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        /* Reset some default styles */
body, h1, h2, form {
    margin: 0px;
    padding: 0px;
}

/* body{
    overflow: hidden;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

    background:  #6FD0AC  url("../img/bg.jpg") no-repeat center center fixed;
    
    background-size: cover;
    position: fixed;
    padding: 0px;
    margin: 0px;
    width: 100%;
    height: 100%;
    
    -webkit-font-smoothing: antialiased;

} */
a{
    text-decoration: none;
    color: #5f5f5f;
}

.navbar{
   display: flex;
   align-items: center;
   justify-content: space-between;
   background: #fff;
   padding: 6px 6%;
   position: sticky;
   top: 0;
   z-index: 100;
   box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1); 
}

/* .logo img{
    width: 30px;
    margin-right: 15px;
    display: block;
} */

.navbar-center ul li{
    display: inline-block;
    list-style: none;

}

.navbar-center ul li a{
    display: flex;
    align-items: center;
    font-size: 14px;
    margin: 5px 8px;
    padding-right: 5px;
    position: relative;
}

.navbar-center ul li a i{
    width: 30px; 
}

.navbar-center ul li a::after{
    content: '';
    width: 0;
    height: 2px;
    background: #57B894;
    position: absolute;
    bottom: -13px;
    transition: width 0.3s ;
}

.navbar-center ul li a:hover::after,
.navbar-center ul li a.active-link::after
{
    width: 100%;
}

.nav-profile-img{
    width: 40px;
    border-radius: 50%;
    display: block;
    cursor: pointer;
    position: relative;
}

.online{
    position: relative ;
}

.online::after{
    content: '';
    width: 7px;
    height: 7px;
    border: 2px solid #fff;
    border-radius: 50%;
    right: 0px;
    top: 0px;
    background: #41db51;
    position: absolute;
}

.search-box{
    background: #f0f2f5;
    width: 250px;
    border-radius: 20px;
    display: flex;
    align-items: center;
    padding: 0 15px;
}



.search-box i{
    width: 14px;
}

.search-box input{
    width: 100%;
    background: transparent;
    padding: 8px;
    outline: none;
    border: 0;
}

/* Style the body */
body {
    /* font-family: Arial, sans-serif; */
    background-color: #57B894; /* Green color */
    /* margin: 55px;
    padding: 80px;
    text-align: center; */

}

/* Style the h1 */
h1 {
    color: #333;
    margin-bottom: 20px;
}



/* Style the form */
.form-con {
    padding: 79px;
    margin: 20px;
}

.form-con form {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    text-align: left;
}

/* Style the input boxes with shadows */
input[type="text"],
input[type="date"],
textarea {
    width: 87%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 20px;
    margin-bottom: 30px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add a shadow */
}

/* Style the file input */
input[type="file"] {
    margin-top: 5px;
}

/* Style the submit button */
input[type="submit"] {
    background-color:  #57B894; /* Green color */
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    
}

input[type="submit"]:hover {
    background-color:  #57B894; /* Darker green on hover */
}

/* Style the "Choose File" button with shadows */
input[type="file"] {
    background-color: #57B894; /* Green color */
    color: #fff;
    border: none;
    padding: 9px 16px;
    border-radius: 20px;
    cursor: pointer;
    font-size: 16px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add a shadow */
}

input[type="file"]:hover {
    background-color: #57B894; /* Darker green on hover */
}


table {
    border-collapse: collapse;
    width: 100%;
    background-color: #fff; /* Set the background color for the entire table to white */
}

th, td {
    border: 1px solid #ccc;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

/* Set the background color for event rows to white */
tr.event-row {
    background-color: #fff;
}

.search-box input{
     width: 100%;
     background: transparent;
     padding: 8px;
     outline: none;
     border: 0;
 }



    </style>
</head>

<body>

<nav class="navbar">
        <!-- <div class="navbar-left"> -->
            <!-- <a href="index.html" class="logo"><img src=""></a>
         -->
            <div class="search-box" style="padding: 0px 3px 0px 3px;">
                                           
                                            
            <!-- style="padding: 0px 3px 0px 3px; -->
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" style="margin-bottom: 3px;" placeholder="Search">
                <!-- style="margin-bottom: 3px;" -->
            </div>
        
        <!-- </div> -->
        <div class="navbar-center">
            <ul>
                <li><a href="index.php"><i class="fa-solid fa-house"></i><span>Home</span></a></li>
                <li><a href="eve.php" class="active-link"><i class="fa-solid fa-list-ul"></i><span>Events</span></a></li>
                <li><a href="calendar.php"><i class="fa-regular fa-calendar-days"></i></i><span>Calendar</span></a></li>
                <li><a href="aboutus.php"><i class="fa-solid fa-user-group"></i><span>About us</span></a></li>
                <li><a href="contactus.php"><i class="fa-solid fa-globe"></i><span>Contact us</span></a></li>
                <li><a href="signup.php"><i class="fa-solid fa-right-from-bracket"></i><span>Logout</span></a></li>

                <!-- <li><a href="#"><img src="images/"><span>Home</span></a></li> -->

            </ul>
        </div>
        <!-- <div class="navbar-right">
            <div class="online">
                <img src="images/user-1.png" class="nav-profile-img">
            </div>
           
        </div> -->
    </nav>

    <div class="form-con">
    <h1>Add Events</h1>
    <form action="#" method="post" enctype="multipart/form-data" id="eventForm">
        <label for="eventTitle">Event Title:</label>
        <input type="text" id="eventTitle" name="eventTitle" required><br><br>

        <label for="eventOrganizer">Event Organizer:</label>
        <input type="text" id="eventOrganizer" name="eventOrganizer" required><br><br>

        <label for="eventDate">Event Date:</label>
        <input type="date" id="eventDate" name="eventDate" required><br><br>

        <label for="eventDescription">Event Description:</label><br>
        <textarea id="eventDescription" name="eventDescription" rows="4" cols="50" required></textarea><br><br>

        <label for="eventAttachment">Attachment:</label>
        <input type="file" name="eventAttachment" id="eventAttachment" accept=".pdf, .doc, .docx"><br><br>

        <input type="submit" value="Submit">
    </form>

    <table>
    <h1>Upcoming Events</h1>
        <thead>
            <tr>
                <th>Event Title</th>
                <th>Event Organizer</th>
                <th>Event Date</th>
                <th>Event Description</th>
                <th>Attachment</th>
            </tr>
        </thead>
        <tbody id="eventDetailsTable">
            <!-- Event details will be displayed here -->
        </tbody>
    </table>
    </div>

    <script>
        const eventForm = document.getElementById('eventForm');
        const eventDetailsTable = document.getElementById('eventDetailsTable');
        let eventCounter = 0; // To track the number of events

        eventForm.addEventListener('submit', function (e) {
            e.preventDefault();

            // Create a new row in the table for event details
            const eventRow = document.createElement('tr');

            // Get values from form inputs
            const eventTitle = eventForm.querySelector('#eventTitle').value;
            const eventOrganizer = eventForm.querySelector('#eventOrganizer').value;
            const eventDate = eventForm.querySelector('#eventDate').value;
            const eventDescription = eventForm.querySelector('#eventDescription').value;
            const eventAttachment = eventForm.querySelector('#eventAttachment').files[0];

            // Create and append table cells for each event detail
            const titleCell = document.createElement('td');
            titleCell.textContent = eventTitle;

            const organizerCell = document.createElement('td');
            organizerCell.textContent = eventOrganizer;

            const dateCell = document.createElement('td');
            dateCell.textContent = eventDate;

            const descriptionCell = document.createElement('td');
            descriptionCell.textContent = eventDescription;

            const attachmentCell = document.createElement('td');
            if (eventAttachment) {
                const attachmentLink = document.createElement('a');
                attachmentLink.textContent = eventAttachment.name;
                attachmentLink.href = URL.createObjectURL(eventAttachment);
                attachmentLink.target = '_blank';
                attachmentCell.appendChild(attachmentLink);
            }

            eventRow.appendChild(titleCell);
            eventRow.appendChild(organizerCell);
            eventRow.appendChild(dateCell);
            eventRow.appendChild(descriptionCell);
            eventRow.appendChild(attachmentCell);

            // Append the eventRow to the table
            eventDetailsTable.appendChild(eventRow);

            // Reset the form
            eventForm.reset();

            // Increment the event counter
            eventCounter++;
        });
    </script>
</body>
</html>
