<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="cal.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <script src="https://kit.fontawesome.com/87eb476f03.js" crossorigin="anonymous"></script>
    <style>

      *{
    margin: 0;
    padding: 0;
    /* font-family: 'poppins', 'sans-serif'; */
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

    /* box-sizing: border-box; */
}

/* body{
    background-color: #f0f2f5;
    color: #5f5f5f;
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
    </style>
  </head>
  <body>

  <nav class="navbar">
        <div class="navbar-left">
            <!-- <a href="index.html" class="logo"><img src=""></a>
         -->
            <div class="search-box">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Search">
            </div>
        
        </div>
        <div class="navbar-center">
            <ul>
                <li><a href="index.php"><i class="fa-solid fa-house"></i><span>Home</span></a></li>
                <li><a href="eve.php"><i class="fa-solid fa-list-ul"></i><span>Events</span></a></li>
                <li><a href="calendar.php" class="active-link"><i class="fa-regular fa-calendar-days"></i></i><span>Calendar</span></a></li>
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

    <div class="container">
      <div class="header">
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

/*
1. Add Event     
3. Update Local Storage
*/
    </script>
  </body>
</html>

