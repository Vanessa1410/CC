<?php

// echo "here";
include("classes/connect.php");
include("classes/reg.php");

$Firstname = "";
$Lastname = "";
$Gender = "";
$Age = 0;
$City = "";
$Email = "";
$Username = "";
$Password = "";        

if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $reg = new reg();
    $result = $reg->evaluate($_POST);
    
    if($result != ""){
      // echo "<div>";
      // echo "<br>The following  errors occured<br><br>";
      // 
      echo $result;
      // echo "</div>";
    }
      if(isset($_POST['submit']))
        {
        $Firstname =$_POST['Firstname'];
        $Lastname =$_POST['Lastname'];
        $Gender =$_POST['Gender'];
        $Age =$_POST['Age'];
        $City =$_POST['City'];
        $Email =$_POST['Email'];
        $Username =$_POST['Username'];
        $Password =$_POST['Password'];
        }
        // $Urladdress = strtolower($Firstname) . "." . strtolower($Lastname);
        // $VolID = $this->create_VolID();

        // $query = "insert into volprofile 
        // (VolID,Firstname,Lastname,Gender,Age,City,Email,Username,Password,Urladdress) 
        // values 
        // ('$VolID','$Firstname','$Lastname','$Gender','$Age','$City','$Email','$Username','$Password','$Urladdress')";
        
        // return $query;
        // // echo $data;
        // echo $query;

    // $reg = new reg();
    // $reg->evaluate($_POST);
    // echo $result;

    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
  }

  
  
  // $Password = "";
  // $result = "";


// echo "<pre>";
// print_r();
// echo "<pre>"
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="reg.css">
</head>
<style>
    *,
*::before,
*::after {
	box-sizing: border-box;
}

body {
	margin: 0;
	font-family: Roboto, -apple-system, 'Helvetica Neue', 'Segoe UI', Arial, sans-serif;
	background: #57B894;
}

/* box+textonleft */
.forms-section {
	display: flex;
	flex-direction: row;
	justify-content: center;
	align-items: center;
    margin-left: 5%;
	margin-top: -1%;
}

.section-title {
	font-size: 40px;
	letter-spacing: 1px;
	color: #fff;
	justify-content: center;
	margin-left: 30%;
}

.forms {
	display: flex;
	align-items: flex-start;
	margin-top: 30px;
	margin-right: -20%;
	margin-left: 7%;
	width: 100%;
    
}

.form-wrapper {
	animation: hideLayer .3s ease-out forwards;
    /* margin-right: -50%; */
}

.form-wrapper.is-active {
	animation: showLayer .3s ease-in forwards;
}

@keyframes showLayer {
	50% {
		z-index: 1;
	}
	100% {
		z-index: 1;
	}
}

@keyframes hideLayer {
	0% {
		z-index: 1;
	}
	49.999% {
		z-index: 1;
	}
}

.switcher {
	position: relative;
	cursor: pointer;
	display: block;
	margin-right: auto;
	margin-left: auto;
	padding: 0;
	text-transform: uppercase;
	font-family: inherit;
	font-size: 16px;
	letter-spacing: .5px;
	color: #4C0827;
	background-color: transparent;
	border: none;
	outline: none;
	transform: translateX(0);
	transition: all .3s ease-out;
}

.form-wrapper.is-active .switcher-login {
	color: #fff;
	transform: translateX(90px);
}

.form-wrapper.is-active .switcher-signup {
	color: #fff;
	transform: translateX(-90px);
}

.underline {
	position: absolute;
	bottom: -5px;
	left: 0;
	overflow: hidden;
	pointer-events: none;
	width: 100%;
	height: 2px;
}

.underline::before {
	content: '';
	position: absolute;
	top: 0;
	left: inherit;
	display: block;
	width: inherit;
	height: inherit;
	background-color: currentColor;
	transition: transform .2s ease-out;
}

.switcher-login .underline::before {
	transform: translateX(101%);
}

.switcher-signup .underline::before {
	transform: translateX(-101%);
}

.form-wrapper.is-active .underline::before {
	transform: translateX(0);
}

.form {
	overflow: visible;
	min-width: 260px;
	margin-top: 50px;
	padding: 25px;
  border-radius: 10px;
	transform-origin: top;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);

}

.form-login {
	animation: hideLogin .3s ease-out forwards;
    width: 150%;
}

.form-wrapper.is-active .form-login {
	animation: showLogin .3s ease-in forwards;
}

@keyframes showLogin {
	0% {
		background: #d7e7f1;
		transform: translate(40%, 10px);
	}
	50% {
		transform: translate(0, 0);
	}
	100% {
		background-color: #fff;
		transform: translate(35%, -20px);
	}
}

@keyframes hideLogin {
	0% {
		background-color: #fff;
		transform: translate(35%, -20px);
	}
	50% {
		transform: translate(0, 0);
	}
	100% {
		background: #d7e7f1;
		transform: translate(40%, 10px);
	}
}

.form .form-signup {
    display: flex;
    flex-flow: row wrap;
    align-items: center;
    
}

.form-signup {
	animation: hideSignup .3s ease-out forwards;
    width: 200%;
    display: flex;
    /* padding-left: 4%; */ 
    /* padding-right: 4%;
    /* flex-flow: row wrap;
    align-items: center; */
    /* flex-wrap: nowrap; */
    /* position: fixed; */
    /* flex-wrap: wrap; */
}

.form-wrapper.is-active .form-signup {
	animation: showSignup .3s ease-in forwards;
}

@keyframes showSignup {
	0% {
		background: #d7e7f1;
		transform: translate(-40%, 10px) scaleY(.8);
	}
	50% {
		transform: translate(0, 0) scaleY(.8);
	}
	100% {
		background-color: #fff;
		transform: translate(-35%, -20px) scaleY(1);
	}
}

@keyframes hideSignup {
	0% {
		background-color: #fff;
		transform: translate(-35%, -20px) scaleY(1);
	}
	50% {
		transform: translate(0, 0) scaleY(.8);
	}
	100% {
		background: #d7e7f1;
		transform: translate(-40%, 10px) scaleY(.8);
	}
}

.form fieldset {
	position: relative;
	opacity: 0;
	margin: 0;
	padding: 0;
	border: 0;
	transition: all .3s ease-out;
    /* flex-wrap: wrap; */
}

.form-login fieldset {
	transform: translateX(-50%);
}

.form-signup fieldset {
	transform: translateX(50%);

}

.form-wrapper.is-active fieldset {
	opacity: 1;
	transform: translateX(0);
	transition: opacity .4s ease-in, transform .35s ease-in;
}

.form legend {
	position: absolute;
	overflow: flex;
	width: 1px;
	height: 1px;
	clip: rect(0 0 0 0);
}

.input-block {
	margin-bottom: 5px;
    width: 50%;
    flex: 1;
    margin-right: 25px;
}

.input-block label {
	font-size: 15px;
  color: #0a0a0a;
}

.input-block input {
	display: block;
	width: 100%;
	margin-top: 8px;
	padding-right: 15px;
	padding-left: 15px;
	font-size: 13px;
	line-height: 20px;
	color: #3b4465;
  background: #eef9fe;
  border: 1px solid #cddbef;
  border-radius: 2px;
}

.form [type='submit'] {
	opacity: 0;
	display: block;
	min-width: 120px;
	margin: 30px auto 10px;
	font-size: 18px;
	line-height: 40px;
	border-radius: 25px;
	border: none;
	transition: all .3s ease-out;
}

.form-wrapper.is-active .form [type='submit'] {
	opacity: 1;
	transform: translateX(0);
	transition: all .4s ease-in;
}

.btn-login {
	color: whitesmoke;
	background: #57B894;
	box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
	transform: translateX(-30%);
}

.btn-signup {
	color: whitesmoke;
	background: #57B894;
	box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
	transform: translateX(30%);
}

.list li {
   display: inline; 
}

.column-container {
    flex: 1; /* Each column takes up equal space */
    padding: 0px; /* Add padding between columns if desired */
}

.column-container .column1 {
    display: flex;
    flex-flow: row wrap;
    align-items: center;
}

.column-container .column2 {
    display: flex;
    flex-flow: row wrap;
    align-items: center;
}

.column-container .column3 {
    display: flex;
    flex-flow: row wrap;
    align-items: center;
}

.column-container .column4 {
    display: flex;
    flex-flow: row wrap;
    align-items: center;
	
}
.note {
	font-size: 12px;
	color: #777;
	margin-left: 35%;
}

.required {
    color: red;
    font-size: 16px;
    margin-left: 5px;
  }
  
  .highlight {
    color: #4C0827;
    font-weight: 750;
}

select {
	padding: 4px;
	font-size: 14px;
	border: 1px solid #ccc;
	border-radius: 2px;
}

/* Style the arrow icon */
select::-ms-expand {
	display: none;
}

/* Style for the container (optional) */
.gender-container {
	margin-bottom: 10px;
	padding-right: 45px;
}

/* Style for the label (optional) */
.gender-label {
	font-size: 16px;
	font-weight: normal;
	margin-bottom: 5px;
	display: block; /* Make label a block-level element */
}

.sub-heading {
	color: whitesmoke;
    font-weight: 500;
	font-size: 19px;
	margin-left: 35%;
	margin-top: 1%;
}

.input-block.invalid input {
    border-color: #ff0000; /* Change border color to red */
    background-color: #ffcccc; /* Change background color to light red */
    color: #ff0000; /* Change text color to red */
}

.input-block.invalid label {
    color: #ff0000; /* Change label color to red */
}

.validation-message {
    color: red;
    font-size: 11px;
    margin-top: 4px; /* Adjust as needed */
}

 
</style>
<body>
  <h1 class="section-title"><span class="highlight">C</span>onnect. <span class="highlight">C</span>ollaborate. <span class="highlight">C</span>hange.</h1>
    <!-- Register on <span class="highlight">Community Connect</span> -->
  <p class="sub-heading">Ready to make a difference? Choose your role: </p>
<section class="forms-section">
    <div class="forms">
      <div class="form-wrapper is-active">
        <button type="button" class="switcher switcher-login">
          Volunteer
          <span class="underline"></span>
        </button>
        <form class="form form-login" method="post" action="index.php" id="registration-form-vol">
          <fieldset>
            <legend>Please, enter your email and password for login.</legend>
            <div class="column-container">
              <!-- Column 1 -->
              <div class="column1">
                      <div class="input-block">
                      <label for="vsignup-fname">First name<span class="required">*</span></label>
                      <input value="<?php echo $Firstname ?>" name="Firstname" id="vsignup-fname" type="text" required>
                      <div class="validation-message" id="vfname-validation-message"></div>
                    </div>
                      <div class="input-block">
                          <label for="vsignup-lname">Last name<span class="required">*</span></label>
                          <input value="<?php echo $Lastname ?>" name="Lastname" id="vsignup-lname" type="text" required>
                          <div class="validation-message" id="vlname-validation-message"></div>
                        </div>
                  </div>
                  <!-- Column 2 -->
              <div class="column2">
                  <div class="input-block">
                    <label for="vsignup-age">Age<span class="required">*</span></label>
                    <input value="<?php echo $Age ?>" name="Age" id="vsignup-age" type="text" required>
                    <div class="validation-message" id="vage-validation-message"></div>
                  </div>
                  <div class="gender-container">
                    <label class="gender-label" for="gender">Gender<span class="required">*</span></label>
                    <select id="text" name="Gender">
                        <option><?php echo $Gender ?></option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                  </div>
                    <div class="input-block">
                        <label for="signup-vcity">City<span class="required">*</span></label>
                        <input value="<?php echo $City ?>" name="City" id="signup-vcity" type="text" required>
                        <div class="validation-message" id="vcity-validation-message"></div>
                    </div>
              </div>
              <!-- Column 3 -->
              <div class="column3">
                  <div class="input-block">
                      <label for="signup-vemail">E-mail<span class="required">*</span></label>
                      <input value="<?php echo $Email ?>" name="Email" id="signup-vemail" type="email" required>
                  </div>
                  <div class="input-block">
                    <label for="signup-vusername">Username<span class="required">*</span></label>
                    <input value="<?php echo $Username ?>" name="Username" id="signup-vusername" type="text" placeholder="Eg; 134RajMalhotra" required>
                    <div class="validation-message" id="vuser-validation-message"></div>
                  </div>
              </div>
              <p class="note">(Note: Choose a username that is concise and easy to remember. <br>This will serve as your login credential and will also help others find you easily)</p>
              <!-- Column 4 -->
              <div class="column4">
                  <div class="input-block">
                      <label for="signup-vpassword">Password<span class="required">*</span></label>
                      <input id="signup-vpassword" type="password" required>
                      <div class="validation-message" id="vpassword-validation-message"></div>
                  </div>
                  <div class="input-block">
                      <label for="signup-vconfpassword">Confirm Password<span class="required">*</span></label>
                      <input value="<?php echo $Password ?>" name="Password" id="signup-vconfpassword" type="password" required>
                      <div class="validation-message" id="vconfirmPassword-validation-message"></div>
                    </div>
              </div>    
          </div>
      
          </fieldset>
          <button value="Register" name="submit" type="submit" class="btn-login">Register</button>
          <p class="note"><span>Already registered? </span>
          <b onclick="toggle()" class="pointer">Sign in here</b></p>
        </form>
      </div>


      <div class="form-wrapper">
        <button type="button" class="switcher switcher-signup">
          Organization
          <span class="underline"></span>
        </button>
        <form class="form form-signup" method="post" action="reg.php">
            <fieldset>
                <legend>Please, enter your email, password and password confirmation for sign up.</legend>
            <div class="column-container">
                <!-- Column 1 -->
                <div class="column1">
                        <div class="input-block">
                        <label for="signup-orgname">Organization name<span class="required">*</span></label>
                        <input name="orgname" id="signup-orgname" type="text" required>
                        <!-- <div class="validation-message" id="orgname-validation-message"></div> -->
                        </div>
                        </div>
                        <div class="input-block">
                            <label for="signup-ngoid">NGO Unique ID<span class="required">*</span></label>
                            <input name="ngoid" id="signup-ngoid" type="text" required>
                            <!-- <div class="validation-message" id="ngoid-validation-message"></div> -->
                        </div>
                        <div class="input-block">
                            <label for="signup-inception">Inception Year<span class="required">*</span></label>
                            <input name="startyear" id="signup-inception" type="text" required>
                            <!-- <div class="validation-message" id="inception-validation-message"></div> -->
                        </div>
                    </div>
                    <!-- Column 2 -->
                <div class="column2">
                        <div class="input-block">
                            <label for="signup-orgcontact">Contact<span class="required">*</span></label>
                            <input name="orgcontact" id="signup-orgcontact" type="text" required>
                            <!-- <div class="validation-message" id="contact-validation-message"></div> -->
                        </div>
                        <div class="input-block">
                            <label for="signup-address">Address<span class="required">*</span></label>
                            <input name="address" id="signup-address" type="text" required>
                            
                        </div>
                        <div class="input-block">
                            <label for="signup-orgcity">City<span class="required">*</span></label>
                            <input name="orgcity" id="signup-orgcity" type="text" required>
                            <!-- <div class="validation-message" id="orgcity-validation-message"></div> -->
                        </div>
                </div>
                <!-- Column 3 -->
                <div class="column3">
                    <div class="input-block">
                        <label for="signup-orgemail">E-mail<span class="required">*</span></label>
                        <input name="orgemail" id="signup-orgemail" type="email" required>

                    </div>
                    
                  <div class="input-block">
                      <label for="signup-orgusername">Username<span class="required">*</span></label>
                      <input name="orgusername" id="signup-orgusername" type="text" placeholder="Eg; Smile_fndt" required>
                      <!-- <div class="validation-message" id="orguser-validation-message"></div> -->
                    </div>
                </div>
                <p class="note">(Note: Choose a username that is concise and easy to remember. <br>This will serve as your login credential and will also help others find you easily)</p>
                  <!-- Column 4 -->
                <div class="column4">
                    <div class="input-block">
                        <label for="signup-orgpassword">Password<span class="required">*</span></label>
                        <input name="orgpassword1" id="signup-orgpassword" type="password" required>
                        <!-- <div class="validation-message" id="password-validation-message"></div> -->
                    </div>
                    <div class="input-block">
                        <label for="signup-orgconfpassword">Confirm Password<span class="required">*</span></label>
                        <input name="orgpassword2" id="signup-orgconfpassword" type="password" required>
                        <!-- <div class="validation-message" id="confirmPassword-validation-message"></div> -->
                    </div>
                </div>    
            </div>
            </fieldset>
            <button type="submit" class="btn-signup">Register</button>
            <p class="note"><span>Already registered? </span>
            <b onclick="toggle()" class="pointer">Sign in here</b></p> 
        </form>
      </div>
    </div>
  </section>
      
  <!-- <script src="reg.js"></script> -->

<script>
  
const switchers = [...document.querySelectorAll('.switcher')]

switchers.forEach(item => {
    item.addEventListener('click', function() {
        switchers.forEach(item => item.parentElement.classList.remove('is-active'))
        this.parentElement.classList.add('is-active')
    })
})


const orgNameInput = document.getElementById('signup-orgname');
const orgNameValidationMessage = document.getElementById('orgname-validation-message');

orgNameInput.addEventListener('input', function () {
    const orgName = this.value;
    const isValid = /^[a-zA-Z0-9\s]+$/.test(orgName);

    if (!isValid) {
        this.setCustomValidity('Should contain only letters and numbers');
        orgNamevalidationMessage.textContent = 'Should contain only letters and numbers'; // Display the validation message
    } else {
        this.setCustomValidity('');
        orgNamevalidationMessage.textContent = ''; // Hide the validation message
    }
});

const ngoIdInput = document.getElementById('signup-ngoid');
const ngoIdValidationMessage = document.getElementById('ngoid-validation-message');

ngoIdInput.addEventListener('input', function () {
    const ngoId = this.value;

    // Check if the input contains any lowercase letters
    const hasLowercaseLetters = /[a-z]/.test(ngoId);

    // Check if the input contains a slash '/'
    const hasSlash = /\//.test(ngoId);

    let feedback = '';

    if (hasLowercaseLetters) {
        feedback += 'NGO Unique ID cannot contain lowercase letters. ';
    }

    if (!hasSlash) {
        feedback += 'NGO Unique ID must contain a slash "/". ';
    }

    const isValidLength = /^[A-Z0-9\/]{1,16}$/.test(ngoId);

    if (!isValidLength) {
        feedback += 'NGO Unique ID should be 16 characters or less. ';
    }

    if (feedback) {
        this.setCustomValidity(feedback.trim());
        ngoIdvalidationMessage.textContent = feedback.trim(); // Display the validation message
    } else {
        this.setCustomValidity('');
        ngoIdvalidationMessage.textContent = ''; // Hide the validation message
    }
});

const inceptionYearInput = document.getElementById('signup-inception');
const inceptionvalidationMessage = inceptionYearInput.nextElementSibling; // Get the next element (which is the validation message)

inceptionYearInput.addEventListener('input', function () {
    const inceptionYear = this.value;
    const currentYear = new Date().getFullYear();
    const isValidYear = /^\d{4}$/.test(inceptionYear);

    if (!isValidYear || inceptionYear < 1800 || inceptionYear > currentYear) {
        this.setCustomValidity(`Invalid year`);
        inceptionvalidationMessage.textContent = `Invalid year`;
    } else {
        this.setCustomValidity('');
        inceptionvalidationMessage.textContent = '';
    }
});

const contactInput = document.getElementById('signup-orgcontact');
const validationMessage = contactInput.nextElementSibling; // Get the next element (which is the validation message)

contactInput.addEventListener('input', function () {
    const contactNumber = this.value;
    const isValidNumber = /^\d{10}$/.test(contactNumber);

    if (!isValidNumber) {
        this.setCustomValidity('Contact Number should contain exactly 10 digits.');
        validationMessage.textContent = 'Contact Number should contain exactly 10 digits.';
    } else {
        this.setCustomValidity('');
        validationMessage.textContent = '';
    }
});

contactInput.addEventListener('keypress', function (e) {
    const charCode = e.charCode;
    if (charCode < 48 || charCode > 57) {
        e.preventDefault();
        validationMessage.textContent = 'Only digits are allowed.';
    } else {
        validationMessage.textContent = '';
    }
});

const cityInput = document.getElementById('signup-orgcity');
const orgcityvalidationMessage = cityInput.nextElementSibling; // Get the next element (which is the validation message)

cityInput.addEventListener('input', function () {
    const cityName = this.value;
    const isValidCity = /^[A-Za-z\s]+$/.test(cityName);

    if (!isValidCity) {
        this.setCustomValidity('Invalid entry');
        orgcityvalidationMessage.textContent = 'Invalid entry';
    } else {
        this.setCustomValidity('');
        orgcityvalidationMessage.textContent = '';
    }
});

const usernameInput = document.getElementById('signup-orgusername');
const orguservalidationMessage = usernameInput.nextElementSibling; // Get the next element (which is the validation message)

usernameInput.addEventListener('input', function () {
    const username = this.value;
    const isValidLength = username.length <= 15;

    if (!isValidLength) {
        this.setCustomValidity('Username cannot exceed 15 characters.');
        validationMessage.textContent = 'Username cannot exceed 15 characters.';
    } else {
        this.setCustomValidity('');
        validationMessage.textContent = '';
    }
});

const passwordInput = document.getElementById('signup-orgpassword');
const confirmPasswordInput = document.getElementById('signup-orgconfpassword');
const passwordValidationMessage = passwordInput.nextElementSibling;
const confirmPasswordValidationMessage = confirmPasswordInput.nextElementSibling;

passwordInput.addEventListener('input', function () {
    const password = this.value;
    const isValidPassword = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$/.test(password);

    if (!isValidPassword) {
        this.setCustomValidity('Password must contain at least 6 characters, including at least one uppercase letter, one lowercase letter, one number, and one special character.');
        passwordValidationMessage.textContent = 'Password must contain at least 6 characters, including at least one uppercase letter, one lowercase letter, one number, and one special character.';
    } else {
        this.setCustomValidity('');
        passwordValidationMessage.textContent = '';
    }
});

confirmPasswordInput.addEventListener('input', function () {
    const confirmPassword = this.value;
    const isValidMatch = confirmPassword === passwordInput.value;

    if (!isValidMatch) {
        this.setCustomValidity('Passwords do not match.');
        confirmPasswordValidationMessage.textContent = 'Passwords do not match.';
    } else {
        this.setCustomValidity('');
        confirmPasswordValidationMessage.textContent = '';
    }
});

document.addEventListener('DOMContentLoaded', function() {
    const fnameInput = document.getElementById('vsignup-fname');
    const vfnameValidationMessage = document.getElementById('vfname-validation-message');

    fnameInput.addEventListener('input', function() {
        const lettersOnlyRegex = /^[A-Za-z]+$/;
        const fnameValue = fnameInput.value;

        if (!lettersOnlyRegex.test(fnameValue)) {
            vfnameValidationMessage.textContent = 'Only letters are allowed.';
        } else {
            vfnameValidationMessage.textContent = '';
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const lnameInput = document.getElementById('vsignup-lname');
    const vlnameValidationMessage = document.getElementById('vlname-validation-message');

    lnameInput.addEventListener('input', function() {
        const lettersOnlyRegex = /^[A-Za-z]+$/;
        const lnameValue = lnameInput.value;

        if (!lettersOnlyRegex.test(lnameValue)) {
            vlnameValidationMessage.textContent = 'Only letters are allowed.';
        } else {
            vlnameValidationMessage.textContent = '';
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const ageInput = document.getElementById('vsignup-age');
    const vageValidationMessage = document.getElementById('vage-validation-message');

    ageInput.addEventListener('input', function() {
        const ageRegex = /^(1[5-9]|[2-9][0-9]|100)$/;
        const ageValue = ageInput.value;

        if (!ageRegex.test(ageValue)) {
            vageValidationMessage.textContent = 'Please enter a valid age(between 15-100)';
        } else {
            vageValidationMessage.textContent = '';
        }
    });
});

const vcityInput = document.getElementById('signup-vcity');
const vcityvalidationMessage = cityInput.nextElementSibling; // Get the next element (which is the validation message)

cityInput.addEventListener('input', function () {
    const cityName = this.value;
    const isValidCity = /^[A-Za-z\s]+$/.test(cityName);

    if (!isValidCity) {
        this.setCustomValidity('Invalid entry');
        vcityvalidationMessage.textContent = 'Invalid entry';
    } else {
        this.setCustomValidity('');
        vcityvalidationMessage.textContent = '';
    }
});

const vusernameInput = document.getElementById('signup-vusername');
const vuservalidationMessage = vusernameInput.nextElementSibling; // Get the next element (which is the validation message)

vusernameInput.addEventListener('input', function () {
    const vusername = this.value;
    const isValidLength = vusername.length <= 15;

    if (!isValidLength) {
        this.setCustomValidity('Username cannot exceed 15 characters.');
        vuservalidationMessage.textContent = 'Username cannot exceed 15 characters.';
    } else {
        this.setCustomValidity('');
        vuservalidationMessage.textContent = '';
    }
});

const vpasswordInput = document.getElementById('signup-vpassword');
const vconfirmPasswordInput = document.getElementById('signup-vconfpassword');
const vpasswordValidationMessage = vpasswordInput.nextElementSibling;
const vconfirmPasswordValidationMessage = vconfirmPasswordInput.nextElementSibling;

vpasswordInput.addEventListener('input', function () {
    const vpassword = this.value;
    const isValidPassword = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$/.test(password);

    if (!isValidPassword) {
        this.setCustomValidity('Password must contain at least 6 characters, including at least one uppercase letter, one lowercase letter, one number, and one special character.');
        vpasswordValidationMessage.textContent = 'Password must contain at least 6 characters, including at least one uppercase letter, one lowercase letter, one number, and one special character.';
    } else {
        this.setCustomValidity('');
        vpasswordValidationMessage.textContent = '';
    }
});

vconfirmPasswordInput.addEventListener('input', function () {
    const vconfirmPassword = this.value;
    const isValidMatch = vconfirmPassword === vpasswordInput.value;

    if (!isValidMatch) {
        this.setCustomValidity('Passwords do not match.');
        vconfirmPasswordValidationMessage.textContent = 'Passwords do not match.';
    } else {
        this.setCustomValidity('');
        vconfirmPasswordValidationMessage.textContent = '';
    }
});

function resetForm() {
      document.getElementById("registration-form-vol").reset();
    }





</script>

</body>
</html>