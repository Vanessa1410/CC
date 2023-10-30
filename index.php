<?php
include("classes/connect.php");

$DB = new Database();
$samplengos = $DB->getsamplengos();  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Connect</title>
    <!-- <link rel="stylesheet" href="cal.css"> -->
    <script src="https://kit.fontawesome.com/87eb476f03.js" crossorigin="anonymous"></script>
</head>
<style>
    *{
    margin: 0;
    padding: 0;
    /* font-family: 'poppins', 'sans-serif'; */
    font-family: Roboto, -apple-system, 'Helvetica Neue', 'Segoe UI', Arial, sans-serif;
    box-sizing: border-box;
    }

    body{
        background-color: #57B894;
        /* background: #57B894; */
        color: #5f5f5f;
    }

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

    .navbar-left{
        display: flex;
        align-items: center;
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

    /* -----navbar ends----- */

    .back-img{
        /* background: url('https://rajivgandhingo.files.wordpress.com/2017/12/about-us-bal-utsav-bangalore-india.jpg') no-repeat; */
        background: url('https://www.smilefoundationindia.org/wp-content/uploads/2022/09/Banner1-scaled.jpg');
        
        width: 100%;
        height: 100vh;
        background-size: cover;
        background-position: center;
        position: relative;
        background-repeat: no-repeat;
        /* opacity: 0.4; */
    }
    
    .back-img::before{
        content: '';
        position: absolute;
        height: 100%;
        width: 100%;
        /* background: rgba(0, 0, 0, 0.4 ); */
        
    }
    
  img{
    height:200px;
    width:100%;
     }
  
  div [class^="col-"]{
    /* margin-left: 10px; */
    position:static;
    padding-left:5px;
    padding-right:5px;
    border: 5%;
    float:left;
    width: 27%;
    /* padding: 0 10px; */
  }

.container{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

  .card{
    transition:0.5s;
    cursor:pointer; 
    background-color: #fff; 
    width: 250px; /* Set the desired width for the cards */
    height: 400px; /* Set the desired height for the cards */
    margin: 10px; /* Set the margin between the cards */
    padding: 10px; /* Set padding inside the cards */
    font-size: 16px; /* Set the font size for text within the cards */
    border: 1px solid #ccc; /* Add a border to the cards */
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2); /* Add a shadow for a card effect */
    text-align: center; /* Center-align the text within the cards */

  }
  .card image{
    max-width: 100%;
    max-height: 200px; /* Set the maximum height for the image within the cards */
  }
  .card-title{  
    font-size:15px;
    transition:1s;
    cursor:pointer;
  }
  .card-title i{  
    font-size:15px;
    transition:1s;
    cursor:pointer;
    color:#ffa710
  }
  .card-title i:hover{
    transform: scale(1.25) rotate(100deg); 
    color:#18d4ca;
    
  }
  .card:hover{
    transform: scale(1.05);
    box-shadow: 10px 10px 15px rgba(0,0,0,0.3);
  }
  .card-text{
    height:80px;  
  }
  
  .card::before, .card::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    transform: scale3d(0, 0, 1);
    transition: transform .3s ease-out 0s;
    background: rgba(255, 255, 255, 0.1);
    content: '';
    pointer-events: none;
  }
  .card::before {
    transform-origin: left top;
  }
  .card::after {
    transform-origin: right bottom;
  }
  .card:hover::before, .card:hover::after, .card:focus::before, .card:focus::after {
    transform: scale3d(1, 1, 1);
  } 
</style>
<body>
    
    <nav class="navbar">
        <div class="navbar-left">
            <!-- <a href="index.html" class="logo"><img src=""></a> -->
        
            <div class="search-box">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Search">
            </div>
        
        </div>
        <div class="navbar-center">
            <ul>
                <li><a href="index.php" class="active-link"><i class="fa-solid fa-house"></i><span>Home</span></a></li>
                <li><a href="eve.php"><i class="fa-solid fa-list-ul"></i></i><span>Events</span></a></li>
                <li><a href="calendar.php"><i class="fa-regular fa-calendar-days"></i><span>Calendar</span></a></li>
                <li><a href="aboutus.php"><i class="fa-solid fa-user-group"></i><span>About us</span></a></li>
                <li><a href="contact.php"><i class="fa-solid fa-globe"></i><span>Contact us</span></a></li>
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

<!-- -----navbar close----- -->
    <section>
        <div class="back-img"></div>
    </section>

    <!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://niti.gov.in/sites/default/files/2022-11/Education.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://i0.wp.com/ketto.blog/wp-content/uploads/2023/04/How-education-crowdfunding-can-impact-students-from-government-schools-2.png?fit=1024%2C576&ssl=1" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> -->
    <!-- <main> -->
    <section id="events">
                
                <h2 style="margin-left: 40%; padding: 10px; color: white; font-size:25px">NGO Profiles</h2>
        
                <div class="event-list">
                    <!-- Events will be dynamically added here -->
                </div>
            </section>
        </section>

        <section>
    <!-- NGO profiles will be added here -->
    <div class="container" style="padding-left: 16%;">
        <div class="row">
            <?php
            $imageUrls = [
                // "https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg"//
                "https://img.etimg.com/thumb/msid-73767873,width-650,imgsize-316023,,resizemode-4,quality-100/women-rural_istock.jpg",
                "https://s3.youthkiawaaz.com/wp-content/uploads/2022/11/29195317/Education-top-10-blog-banner-4.webp",// Add as many image URLs as needed
                "https://synergyindia.foundation/wp-content/uploads/2023/07/education.jpeg",
                "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTht9Um9hLIePAyNERX2O_aqL0Kw0mzh8DFPA&usqp=CAU",
                // "https://www.smilefoundationindia.org/blog/wp-content/uploads/2022/11/Education-Survey-2022-1024x768.jpg",//
                "https://www.livemint.com/rf/Image-621x414/LiveMint/Period2/2016/06/04/Photos/Processed/skilldevelopment-kIgD--621x414@LiveMint.JPG",
                "https://www.globalgiving.org/pfil/18237/pict_large.jpg",
                "https://www.worldbank.org/content/dam/photos/780x439/2018/jan-3/pi-education-780x439.jpg",
                "https://www.globalgiving.org/pfil/1877/ph_1877_95493.jpg",
                "https://images.pexels.com/photos/764681/pexels-photo-764681.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500",
             ];

            if ($samplengos) {
                $index = 0; // Initialize an index to cycle through image URLs
                foreach ($samplengos as $row) {
                    // Use the current image URL from the array
                    $imageUrl = $imageUrls[$index];

                    echo '<div class="col-md-3 col-sm-6">
                            <div class="card card-block" style="padding(40px,30px,30px,26px)">
                                <h4 class="card-title text-right"><i class="material-icons">' . $row['Orgname'] . '</i></h4>
                                <img src="' . $imageUrl . '" alt="Photo of ' . $row['City'] . '">
                                <h5 class="card-title mt-3 mb-3">' . $row['City'] . '</h5>
                                <p class="card-text">' . $row['Description'] . '</p>
                                <p class="card-text">' . $row['Contact'] . '</p>
                            </div>
                        </div>';

                    // Increment the index, or reset it when it reaches the end of the array
                    $index = ($index + 1) % count($imageUrls);
                }
            }
            ?>
        </div>
    </div>
</section>

 <!-- </main> -->

<!-- <div class="container-cal">
      <div class="header-cal">
        <div id="month"></div>
        <div>
          <button id="btnBack"><i class="fa fa-angle-left"></i></button>
          <button id="btnNext"><i class="fa fa-angle-right"></i></button>
        </div>
      </div>
      <div class="weekdays">
        <div>Sun</div>
        <div>Mon</div>
        <div>Tue</div>
        <div>Wed</div>
        <div>Thu</div>
        <div>Fri</div>
        <div>Sat</div>
      </div>
      <div id="calendar"></div>
    </div>
    <div id="modal"></div>
    <div id="addEvent">
      <h2>Add Event</h2>
      <input type="text" id="txtTitle" placeholder="Event Title" />
      <button id="btnSave">Save</button>
      <button class="btnClose">Close</button>
    </div>

    <div id="viewEvent">
      <h2>Event</h2>
      <p id="eventText">This is Sample Event</p>
      <button id="btnDelete">Delete</button>
      <button class="btnClose">Close</button>
    </div>

    <script>
        const holidays = [
  {
    hdate: "01-01-2023",
    holiday: "New Year Day",
  },
  {
    hdate: "15-01-2023",
    holiday: "Pongal",
  },
  {
    hdate: "16-01-2023",
    holiday: "Thiruvalluvar Day",
  },
  {
    hdate: "17-01-2023",
    holiday: "Uzhavar Thirunal",
  },
  {
    hdate: "26-01-2023",
    holiday: "Republic Day",
  },
  {
    hdate: "05-02-2023",
    holiday: "Thai Poosam",
  },
  {
    hdate: "22-03-2023",
    holiday: "Telugu New Year Day",
  },
  {
    hdate: "01-04-2023",
    holiday: "Annual closing of Accounts for Commercial Banks and Co-operative Banks",
  },
  {
    hdate: "04-04-2023",
    holiday: "Mahaveer Jayanthi",
  },
  {
    hdate: "07-04-2023",
    holiday: "Good Friday",
  },
  {
    hdate: "14-04-2023",
    holiday: "Tamil New Years Day and Dr.B.R.Ambedkars Birthday",
  },
  {
    hdate: "22-04-2023",
    holiday: "Ramzan (Idul Fitr)",
  },
  {
    hdate: "01-05-2023",
    holiday: "May Day",
  },
  {
    hdate: "29-06-2023",
    holiday: "Bakrid(Idul Azha)",
  },
  {
    hdate: "29-07-2023",
    holiday: "Muharram",
  },
  {
    hdate: "15-08-2023",
    holiday: "Independence Day",
  },
  {
    hdate: "06-09-2023",
    holiday: "Krishna Jayanthi",
  },
  {
    hdate: "17-09-2023",
    holiday: "Vinayakar Chathurthi",
  },
  {
    hdate: "28-09-2023",
    holiday: "Milad-un-Nabi",
  },
  {
    hdate: "02-10-2023",
    holiday: "Gandhi Jayanthi",
  },
  {
    hdate: "23-10-2023",
    holiday: "Ayutha Pooja",
  },
  {
    hdate: "24-10-2023",
    holiday: "Vijaya Dasami",
  },
  {
    hdate: "12-11-2023",
    holiday: "Deepavali",
  },
  {
    hdate: "25-12-2023",
    holiday: "Christmas",
  },
];
const calendar = document.querySelector("#calendar");
const monthBanner = document.querySelector("#month");
let navigation = 0;
let clicked = null;
let events = localStorage.getItem("events") ? JSON.parse(localStorage.getItem("events")) : [];
const weekdays = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

function loadCalendar() {
  const dt = new Date();

  if (navigation != 0) {
    dt.setMonth(new Date().getMonth() + navigation);
  }
  const day = dt.getDate();
  const month = dt.getMonth();
  const year = dt.getFullYear();
  monthBanner.innerText = `${dt.toLocaleDateString("en-us", {
    month: "long",
  })} ${year}`;
  calendar.innerHTML = "";
  const dayInMonth = new Date(year, month + 1, 0).getDate();
  const firstDayofMonth = new Date(year, month, 1);
  const dateText = firstDayofMonth.toLocaleDateString("en-us", {
    weekday: "long",
    year: "numeric",
    month: "numeric",
    day: "numeric",
  });

  const dayString = dateText.split(", ")[0];
  const emptyDays = weekdays.indexOf(dayString);

  for (let i = 1; i <= dayInMonth + emptyDays; i++) {
    const dayBox = document.createElement("div");
    dayBox.classList.add("day");
    const monthVal = month + 1 < 10 ? "0" + (month + 1) : month + 1;
    const dateVal = i - emptyDays < 10 ? "0" + (i - emptyDays) : i - emptyDays;
    const dateText = `${dateVal}-${monthVal}-${year}`;
    if (i > emptyDays) {
      dayBox.innerText = i - emptyDays;
      //Event Day
      const eventOfTheDay = events.find((e) => e.date == dateText);
      //Holiday
      const holidayOfTheDay = holidays.find((e) => e.hdate == dateText);

      if (i - emptyDays === day && navigation == 0) {
        dayBox.id = "currentDay";
      }

      if (eventOfTheDay) {
        const eventDiv = document.createElement("div");
        eventDiv.classList.add("event");
        eventDiv.innerText = eventOfTheDay.title;
        dayBox.appendChild(eventDiv);
      }
      if (holidayOfTheDay) {
        const eventDiv = document.createElement("div");
        eventDiv.classList.add("event");
        eventDiv.classList.add("holiday");
        eventDiv.innerText = holidayOfTheDay.holiday;
        dayBox.appendChild(eventDiv);
      }

      dayBox.addEventListener("click", () => {
        showModal(dateText);
      });
    } else {
      dayBox.classList.add("plain");
    }
    calendar.append(dayBox);
  }
}
function buttons() {
  const btnBack = document.querySelector("#btnBack");
  const btnNext = document.querySelector("#btnNext");
  const btnDelete = document.querySelector("#btnDelete");
  const btnSave = document.querySelector("#btnSave");
  const closeButtons = document.querySelectorAll(".btnClose");
  const txtTitle = document.querySelector("#txtTitle");

  btnBack.addEventListener("click", () => {
    navigation--;
    loadCalendar();
  });
  btnNext.addEventListener("click", () => {
    navigation++;
    loadCalendar();
  });
  modal.addEventListener("click", closeModal);
  closeButtons.forEach((btn) => {
    btn.addEventListener("click", closeModal);
  });
  btnDelete.addEventListener("click", function () {
    events = events.filter((e) => e.date !== clicked);
    localStorage.setItem("events", JSON.stringify(events));
    closeModal();
  });

  btnSave.addEventListener("click", function () {
    if (txtTitle.value) {
      txtTitle.classList.remove("error");
      events.push({
        date: clicked,
        title: txtTitle.value.trim(),
      });
      txtTitle.value = "";
      localStorage.setItem("events", JSON.stringify(events));
      closeModal();
    } else {
      txtTitle.classList.add("error");
    }
  });
}

const modal = document.querySelector("#modal");
const viewEventForm = document.querySelector("#viewEvent");
const addEventForm = document.querySelector("#addEvent");

function showModal(dateText) {
  clicked = dateText;
  const eventOfTheDay = events.find((e) => e.date == dateText);
  if (eventOfTheDay) {
    //Event already Preset
    document.querySelector("#eventText").innerText = eventOfTheDay.title;
    viewEventForm.style.display = "block";
  } else {
    //Add new Event
    addEventForm.style.display = "block";
  }
  modal.style.display = "block";
}

//Close Modal
function closeModal() {
  viewEventForm.style.display = "none";
  addEventForm.style.display = "none";
  modal.style.display = "none";
  clicked = null;
  loadCalendar();
}

buttons();
loadCalendar();

</script> -->


</body>
</html>