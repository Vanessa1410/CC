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
                <li><a href="reg.php"><i class="fa-solid fa-right-from-bracket"></i><span>Logout</span></a></li>
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
    <!-- Shared posts will be dynamically added here -->
    <div class="container" style="padding-left: 16%;">
        <div class="row">
            <?php
            $imageUrls = [
                // "https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg",
                // Add more image URLs here
                // 
                "https://img.etimg.com/thumb/msid-73767873,width-650,imgsize-316023,,resizemode-4,quality-100/women-rural_istock.jpg",
                "https://s3.youthkiawaaz.com/wp-content/uploads/2022/11/29195317/Education-top-10-blog-banner-4.webp",// Add as many image URLs as needed
                "https://synergyindia.foundation/wp-content/uploads/2023/07/education.jpeg",
                "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTht9Um9hLIePAyNERX2O_aqL0Kw0mzh8DFPA&usqp=CAU",
                "data:image/jpeg;base64,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",
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