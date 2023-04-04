<?php
include('config/connection.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx" dir="ltr">

<?php include('layout/head.php'); ?>

<body>

    <?php include 'layout/nav.php'; ?>
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h2 class="breadcrumb-title">Contact us</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Contact us </li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->


    <div id="main-wrapper">
        <div class="site-wrapper-reveal">
            <!--====================  Conact us Section Start ====================-->
            <div class="contact-us-section-wrappaer section-space--pt_100 section-space--pb_70">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-lg-6">
                            <div class="conact-us-wrap-one mb-30">
                                <h3 class="heading">To make requests for <br>further information, <br><span class="text-color-primary">contact us</span> via our social channels. </h3>
                                <div class="sub-heading">We just need a couple of hours! <br> No more than 2 working days since receiving your issue ticket.</div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-lg-6">
                            <div class="contact-form-wrap">

                                <!-- <form id="contact-form" action="http://whizthemes.com/mail-php/jowel/mitech/php/mail.php" method="post"> -->
                                <form method="post">
                                    <div class="contact-form">
                                        <div class="contact-input">
                                            <div class="contact-inner">
                                                <input name="name" type="text" placeholder="Name" required>
                                            </div>
                                            <div class="contact-inner">
                                                <input name="email" type="email" placeholder="Email" required>
                                            </div>
                                        </div>
                                        <div class="contact-inner">
                                            <input name="phone" type="number" placeholder="Phone Number" required>
                                        </div>
                                        <div class="contact-inner contact-message">
                                            <textarea name="message" placeholder="Please describe what you need." required></textarea>
                                        </div>
                                        <div class="submit-btn mt-20">
                                            <button class="ht-btn ht-btn-md" name="submit" type="submit">Send message</button>
                                            <p class="form-messege"></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====================  Conact us Section End  ====================-->

            <!--====================  Conact us info Start ====================-->
            <div class="contact-us-info-wrappaer section-space--pb_100">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="conact-info-wrap mt-30">
                                <h5 class="heading mb-20">India</h5>
                                <ul class="conact-info__list">
                                    <li>308, I-The Address, Nr Sola Flyover, Besides HCG hospital, Ahmedabad, 380059.</li>
                                    <li><a href="#" class="hover-style-link text-color-primary">info@sunfloweebiztech.com</a></li>
                                    <li><a href="#" class="hover-style-link text-black font-weight--bold">Call us: +91 9099367675</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="conact-info-wrap mt-30">
                                <h5 class="heading mb-20">USA</h5>
                                <ul class="conact-info__list">
                                    <li>Sonora Avenue Iselin, NJ 08830</li>
                                    <li><a href="#" class="hover-style-link text-color-primary">info@sunfloweebiztech.com</a></li>
                                    <li><a href="#" class="hover-style-link text-black font-weight--bold">Call us: +1 (980) 446-9127</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="conact-info-wrap mt-30">
                                <h5 class="heading mb-20">United Kingdom</h5>
                                <ul class="conact-info__list">
                                    <li>17,Aldenhan Road,WD19 4AB, United Kingdom</li>
                                    <li><a href="#" class="hover-style-link text-color-primary">info@sunfloweebiztech.com</a></li>
                                    <li><a href="#" class="hover-style-link text-black font-weight--bold">Call us: +44 7840 513333</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--====================  Conact us info End  ====================-->






            <!--========== Call to Action Area Start ============-->
            <div class="cta-image-area_one section-space--ptb_80 cta-bg-image_two">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-8 col-lg-7">
                            <div class="cta-content md-text-center">
                                <h3 class="heading">We run all kinds of IT services that vow your <span class="text-color-primary"> success</span></h3>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="cta-button-group--two text-center">
                                <a href="#" class="btn btn--white btn-one"><span class="btn-icon me-2"><i class="far fa-comment-alt-dots"></i></span> Let's talk</a>
                                <a href="#" class="btn btn--secondary btn-two "><span class="btn-icon me-2"><i class="far fa-info-circle"></i></span> Get info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--========== Call to Action Area End ============-->




        </div>

    </div>

    <!--====================  scroll top ====================-->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fal fa-long-arrow-up"></i>
        <i class="arrow-bottom fal fa-long-arrow-up"></i>
    </a>
    <!--====================  End of scroll top  ====================-->

    <!--====================  mobile menu overlay ====================-->
    <div class="mobile-menu-overlay" id="mobile-menu-overlay">
        <div class="mobile-menu-overlay__inner"> -->
            <div class="mobile-menu-overlay__header">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-8"> -->
                            <!-- logo -->
                            <div class="logo">
                                <a href="index.php">
                                    <img src="assets/images/logo/logo-dark.webp" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-4">
                            <!-- mobile menu content -->
                            <div class="mobile-menu-content text-end">
                                <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-overlay__body">
                <nav class="offcanvas-navigation">

                </nav>
            </div>
        </div>
    </div>
    <!-- ====================  End of mobile menu overlay  ==================== -->

    <!--====================  search overlay ====================-->
    <div class="search-overlay" id="search-overlay">

        <div class="search-overlay__header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6 ms-auto col-4">
                        <!-- search content -->
                        <div class="search-content text-end">
                            <span class="mobile-navigation-close-icon" id="search-close-trigger"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-overlay__inner">
            <div class="search-overlay__body">
                <div class="search-overlay__form">
                    <form action="#">
                        <input type="text" placeholder="Search">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of search overlay  ====================-->


    <?php include('layout/script.php'); ?>


    <?php include ('layout/footer.php');?>


</body>


<!-- Mirrored from htmldemo.net/mitech/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Feb 2023 09:28:43 GMT -->

</html>


<?php


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $query = "INSERT INTO contact(name,email,phone,message) VALUES ('$name','$email','$phone','$message')";

    $result = mysqli_query($con, $query);

    if ($result) {
        echo "<script>alert('User Registration Successfully'); </script>";
        // window.location.href='admin/login.php';
    } else {
        echo "User Registration Failed";
    }
}else{
    echo "No records found";
}
?>