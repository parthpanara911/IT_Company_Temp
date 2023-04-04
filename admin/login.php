<?php
include('include/header.php');
?>

<!DOCTYPE html>
<html lang="en">

<body>
    <!-- ----- Navbar section ----- -->
     <?php
    include_once 'components/_logo_header.html';
    ?> 
    <!-- ----- Form section ----- -->
    <main>
        <div class="containerWperc bcLight dFlex jcCenter">
            <form method="post" class="my10">
                <div class="input mb3">
                    <label class="dBlock" for="username">Username</label><br>
                    <input type="text" class="bcLight containerWperc my2 py1" name="user" id="username" placeholder="Enter your username">
                </div>
                <div class="input mb1">
                    <label class="dBlock" for="password">Password</label><br>
                    <input type="password" class="bcLight containerWperc my1 py1" name="pass" id="password" placeholder="Enter your password">
                </div>

              <!-- ----- adding php ----- -->
              <?php
                // ----- integrate php -----
                $server = "localhost";
                $username = "root";
                $password = "";
                $database = "sunflowee";

                // check method
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $exist = false;

                    $first_name_sql = "SELECT * FROM `admin` WHERE username = '$user'";
                    $conn = mysqli_connect($server, $username, $password, $database);
                    $result = mysqli_query($conn, $first_name_sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $first_name = $row["first_name"];
                    }

                    $exist_sql = "select * from `admin` where username = '$user' and password = '$pass'";
                    $result_num_row = mysqli_query($conn, $exist_sql);
                    $num = mysqli_num_rows($result_num_row);

                    if ($num > 0) {
                        $exist = true;
                    }

                    if (!$row and $user == "" and $pass == "") {
                        echo "<p>Must enter username and password</p>";
                    } else {
                        if (!$row and $exist != true and !empty($user) and !empty($pass)) {
                            echo "<p>User not found</p>";
                        }
                        if (!empty($user) and empty($pass)) {
                            echo "<p>Must enter password</p>";
                        }
                        if (empty($user) and !empty($pass)) {
                            echo "<p>Must enter username</p>";
                        }
                        if ($exist == true and !empty($pass) and !empty($user)) {
                            // session start
                            session_start();
                            $_SESSION['user_name'] = $first_name;
                            $_SESSION['loggedin'] = true;
                            header("location: dashboard.php");
                        }
                    }
                }
                ?>
                <div class="submit_btn mt5 dFlex">
                    <button class="px4 tUpr py1 dFlexCenter" type="submit">Log in</button>
                    <a href="signup.php" class="aReset tUpr px3 py1 ml2 dFlexCenter">sign up</a>
                </div>
            </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>