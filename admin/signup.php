<?php
// session start
session_start();
include('include/header.php');

// ----- integrate php -----
$server = "localhost";
$username = "root";
$password = "";
$database = "sunflowee";

// check method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['user'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $exist = false;

    // add-data query
    $conn = mysqli_connect($server, $username, $password, $database);
    $sql = "INSERT INTO `admin` (`username`, `first_name`, `last_name`, `email`, `password`) VALUES ('$user', '$first_name', '$last_name', '$email', '$pass')";

    $exist_sql = "select * from `admin` where username = '$user' and password = '$pass'";
    $result_num_row = mysqli_query($conn, $exist_sql);
    $num = mysqli_num_rows($result_num_row);

    if ($num > 0) {
        $exist = true;
    }

    if ($user == "" and $first_name == "" and $last_name == "" and $email == "" and $pass == "" and $cpass == "") {
        echo "<p>Must enter all details</p>";
    } else {
        if ($pass == $cpass) {
            if ($exist == false) {
                $result = mysqli_query($conn, $sql);
                // // session start
                // session_start();
                $_SESSION['user_name'] = $first_name;
                $_SESSION['loggedin'] = true;
                header("location:login.php");
            } else {
                echo "<p>User already exist</p>";
            }
        } else {
            echo "<p>Password and Confirm Password do not match</p>";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<body>
    <!-- ----- Navbar section ----- -->
    <?php
    include_once 'components/_comp_header.html';
    ?>
    <!-- ----- Form section ----- -->
    <main>
        <div class="containerWperc bcLight dFlex jcCenter">
            <form method="post" class="my10">
                <div class="input mb3">
                    <label class="dBlock" for="username">Username</label>
                    <input type="text" class="bcLight containerWperc my2 py1" name="user" id="username" placeholder="Enter your username">
                </div>
                <div class="input mb3">
                    <label class="dBlock" for="fname">First Name</label>
                    <input type="text" class="bcLight containerWperc my2 py1" name="first_name" id="fname" placeholder="Enter your first name">
                </div>
                <div class="input mb3">
                    <label class="dBlock" for="lname">Last Name</label>
                    <input type="text" class="bcLight containerWperc my2 py1" name="last_name" id="lname" placeholder="Enter your second name">
                </div>
                <div class="input mb3">
                    <label class="dBlock" for="rmail">Email</label>
                    <input type="email" class="bcLight containerWperc my2 py1" name="email" id="email" placeholder="Enter your email">
                </div>
                <div class="input mb3">
                    <label class="dBlock" for="password">Password</label>
                    <input type="password" class="bcLight containerWperc my2 py1" name="pass" id="password" placeholder="Enter your password">
                </div>
                <div class="input mb1">
                    <label class="dBlock" for="cpassword">Confirm Password</label>
                    <input type="password" class="bcLight containerWperc my1 py1" name="cpass" id="cpassword" placeholder="Enter your confirm password">
                </div>

                <div class="submit_btn mt5 dFlex">
                    <button class="px4 tUpr py1 dFlexCenter" type="submit">sign up</button>
                </div>
            </form>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>