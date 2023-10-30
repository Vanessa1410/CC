<?php
include('classes/connect.php');

class log
{
    private $error = "";
    public function evaluate($data)
    {
        foreach ($data as $key => $value) {
            if (empty($value)) {
                $this->error = $this->error . $key . " is empty!<br>";
            }
        }

        if ($this->error == "") {
            return $this->vol_login($data);
        } else {
            return $this->error;
        }
    }

    public function vol_login($data)
    {
        if (isset($_POST['user']) && isset($_POST['pass'])) {
            $Username = $_POST['user'];
            $Password = $_POST['pass'];
            $DB = new Database();
            $conn = $DB->connect();

            $Username = stripcslashes($Username);
            $Password = stripcslashes($Password);
            $Username = mysqli_real_escape_string($conn, $Username);
            $Password = mysqli_real_escape_string($conn, $Password);

            $sql = "select * from volprofile where Username = '$Username' and Password = '$Password'";
            $result = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($result);

            if ($count == 1) {
                echo "<h1><center> Login successful </center></h1>";
                // Redirect to another page on successful login
                header("Location: index.php");
            } else {
                header("Location: login.php?error=1");
                
            }
        } else {
            header("Location: login.php?error=2");
            
        }
    }
}

// Instantiate the class and call the evaluate method
$log = new log();
$data = $_POST; // Data from the form
$result = $log->evaluate($data);
?>
