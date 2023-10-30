<?php
include('classes/connect.php');

class org
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
            return $this->org_login($data);
        } else {
            return $this->error;
        }
    }

    public function org_login($data)
    {
        if (isset($_POST['ngouser']) && isset($_POST['ngopass'])) {
            $Username = $_POST['ngouser'];
            $Password = $_POST['ngopass'];
            $DB = new Database();
            $conn = $DB->connect();

            $Username = stripcslashes($Username);
            $Password = stripcslashes($Password);
            $Username = mysqli_real_escape_string($conn, $Username);
            $Password = mysqli_real_escape_string($conn, $Password);

            $sql = "select * from ngoprofile where Username = '$Username' and Password = '$Password'";
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
$org = new org();
$data = $_POST; // Data from the form
$result = $org->evaluate($data);
?>
