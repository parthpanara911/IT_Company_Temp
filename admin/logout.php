<?php
include('include/header.php');
?>

<!DOCTYPE html>
<html lang="en">

<body>
    <?php
    // session_start();

    // // stop session
    // session_unset();
    // session_destroy();

    include_once 'components/_logo_header.html';
    ?>
    <!-- <main>
        <div class="containerWperc bcLight my15 dFlexCenter fDirectionColumn aiCenter">
            <span class="dFlexCenter cRed sorry mb3">Sorry!</span>
            <h1 class="unable_enter taCenter mb3">Unable to access this site before login</h1>
            <div class="submit_btn dFlexCenter">
                <a href="login.php" class="aReset tUpr px3 py1 dFlexCenter bcBlue cWhite">log in</a>
            </div>
        </div>
    </main> -->
    <?php

session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: login.php"); // Redirecting To Home Page
}

?>
</body>
</html>