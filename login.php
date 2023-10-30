<?php

include("classes/connect.php");

if (isset($_GET['error'])) {
  $errorMessage = '';
  if ($_GET['error'] == 1) {
      $errorMessage = 'Login failed. Invalid username or password.';
  } elseif ($_GET['error'] == 2) {
      $errorMessage = 'Login failed. User not found.';
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>

<section class="forms-section">
    <h1 class="section-title">Welcome Back!</h1>
    <?php if (isset($errorMessage)): ?>
    <div style="color: red;"><?php echo $errorMessage; ?></div>
    <?php endif; ?>
    <div class="forms">
      <div class="form-wrapper is-active">
        <button type="button" class="switcher switcher-login">
          VOLUNTEER
          <span class="underline"></span>
        </button>
        <form class="form form-login" action="authentication.php" onsubmit="return validation()" method="POST" name="login-form">
          <fieldset>
            <legend>Please, enter your email and password for login.</legend>
            <div class="input-block">
              <label for="vlogin-username">Username</label>
              <input id="vlogin-username" type="text" name="user" required>
            </div>
            <div class="input-block">
              <label for="vlogin-password">Password</label>
              <input id="vlogin-password" type="password" name="pass" required>
            </div>
          </fieldset>
          <div id="error-message" class="error-message"></div>
          <button type="submit" class="btn-login">Login</button>
        </form>
      </div>
      <div class="form-wrapper">
        <button type="button" class="switcher switcher-signup">
          ORGANIZATION
          <span class="underline"></span>
        </button>
        <form class="form form-signup" action="authenticate_org.php" onsubmit="return validation()" method="POST" name="org-form">
          <fieldset>
            <legend>Please, enter your email, password and password confirmation for sign up.</legend>
            <div class="input-block">
              <label for="signup-username">Username</label>
              <input id="signup-email" type="text" name="ngouser" required>
            </div>
            
            <div class="input-block">
              <label for="signup-password">Password</label>
              <input id="signup-password" type="password" name="ngopass" required>
            </div>
          </fieldset>
          <button type="submit" class="btn-signup">Sign Up</button>
        </form>
      </div>
    </div>
  </section>

  <script>
        const switchers = [...document.querySelectorAll('.switcher')];

        switchers.forEach(item => {
            item.addEventListener('click', function () {
                switchers.forEach(item => item.parentElement.classList.remove('is-active'));
                this.parentElement.classList.add('is-active');
            });
        });

        // document.getElementById('login-form').addEventListener('submit', function (event) {
        //     event.preventDefault();
        //     const Username = document.getElementById('vlogin-username').value;
        //     const Password = document.getElementById('vlogin-password').value;

            // Send the credentials to the server for validation
        //     validateCredentials(Username, Password);
        // });

        // function validateCredentials(Username, Password) {
            // You can use AJAX or fetch to send the data to the server for validation
        //     
        function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
    </script>
</body>

</html>