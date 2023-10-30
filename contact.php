<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="contact.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://kit.fontawesome.com/87eb476f03.js" crossorigin="anonymous"></script>


    <style>
      *{
    margin: 0;
    padding: 0;
    /* font-family: 'poppins', 'sans-serif'; */
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

    box-sizing: border-box;
}

body{
    background-color: #f0f2f5;
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
                <li><a href="eve.php"><i class="fa-solid fa-list-ul"></i></i><span>Events</span></a></li>
                <li><a href="calendar.php"><i class="fa-regular fa-calendar-days"></i><span>Calendar</span></a></li>
                <li><a href="aboutus.php"><i class="fa-solid fa-user-group"></i><span>About us</span></a></li>
                <li><a href="contactus.php" class="active-link"><i class="fa-solid fa-globe"></i><span>Contact us</span></a></li>
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
      
      <span class="big-circle"></span>
      <img src="images/dor.jpeg" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <!-- <p class="text">
            <h4></h4>If you have anything just ask us , Go for it!
          </p> -->

          <div class="info">
            <div class="information">
                
              <img src="images/map.jpeg" class="icon" alt="" />
              <p>Don Bosco Institute Of Technology, Kurla</p>
            </div>
             
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.601444145161!2d72.8860211749002!3d19.081253182124417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c8866a456c9f%3A0x8d1745d15baac575!2sDon%20Bosco%20Institute%20of%20Technology%2C%20Mumbai!5e0!3m2!1sen!2sin!4v1696832837372!5m2!1sen!2sin" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <style>
          #gmap_canvas img {
            max-width: none !important;
            background: none !important
          }
        </style>
  
      <script type='text/javascript'>function init_map() { var myOptions = { zoom: 14, center: new google.maps.LatLng(19.075314480255834, 72.88153973865361), mapTypeId: google.maps.MapTypeId.ROADMAP }; map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions); marker = new google.maps.Marker({ map: map, position: new google.maps.LatLng(19.075314480255834, 72.88153973865361) }); infowindow = new google.maps.InfoWindow({ content: '<strong>My Location</strong><br>mumbai<br>' }); google.maps.event.addListener(marker, 'click', function () { infowindow.open(map, marker); }); infowindow.open(map, marker); } google.maps.event.addDomListener(window, 'load', init_map);</script>
        <div class="information">
          <img src="images/message.jpeg" class="icon" alt="" />
          <p>communityconnect@contact14.org</p>
        </div>
        <div class="information">
          <img src="images/call.jpeg" class="icon" alt="" />
          <p>123-456-789</p>
        </div>
      </div>

      <div class="social-media">
        <p>Connect with us here and follow up:</p>
        <div class="social-icons">
          <a href="">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="#">
            <i class="fab fa-linkedin-in"></i>
          </a>
        </div>
      </div>
    </div>
  </div>

            

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          

          <form action="index.html" autocomplete="off">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" placeholder="Username" />
              <!-- <label for=""></label> -->
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" placeholder="Email" />
              <!-- <label for="">Email</label> -->
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" placeholder="Phone"/>
              <!-- <label for="">Phone</label> -->
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input" placeholder="Message"></textarea>
              <!-- <label for="">Message</label> -->
              <span>Message</span>
            </div>
            <input type="submit" value="Send" class="btn" />
          </form>
        </div>
      </div>
    </div>


       

    <script>
        

    </script>

       
  </body>
</html>
