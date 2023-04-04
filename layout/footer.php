<?php
include('config/connection.php');

$sql = "SELECT * FROM `footer-details` where id=1";
$data = mysqli_query($con, $sql);
$result = mysqli_fetch_array($data);

$flogo = $result['footer_logo'];
?>

  <!--====================  footer area ====================-->
        <div class="footer-area-wrapper bg-gray">
            <div class="footer-area section-space--ptb_80">
                <div class="container">
                    <div class="row footer-widget-wrapper">
                        <div class="col-lg-4 col-md-6 col-sm-6 footer-widget">
                            <div class="footer-widget__logo mb-30">
                                <img src="assets/dist/img/<?php echo $result['footer_logo'];?>" alt="Sunflowee Logo">
                            </div>
                            <ul class="footer-widget__list">
                                <li class="hover-style-link"><?php echo $result['address']; ?></li>
                                <li><a href="#" class="hover-style-link"><?php echo $result['email']; ?></a></li>
                                <li><a href="tel:<?php echo $result['contact']; ?>" class="hover-style-link">Call us:<?php echo $result['contact']; ?></a></li>
                                <li><a href="https://hasthemes.com/" class="hover-style-link text-color-primary">www.sunflowee.xperts.com</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                            <h6 class="footer-widget__title mb-20">IT Services</h6>
                            <ul class="footer-widget__list">
                                <li><a href="#" class="hover-style-link">App Development</a></li>
                                <li><a href="#" class="hover-style-link">Web Development</a></li>
                                <li><a href="#" class="hover-style-link">Marketing</a></li>
                                <li><a href="#" class="hover-style-link">Business</a></li>
                                <li><a href="#" class="hover-style-link">Trending Technologies</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                            <h6 class="footer-widget__title mb-20">Quick links</h6>
                            <ul class="footer-widget__list">
                                <li><a href="#" class="hover-style-link">About</a></li>
                                <!-- <li><a href="#" class="hover-style-link">Terms of Payment</a></li> -->
                                <li><a href="#" class="hover-style-link">Privacy Policy</a></li>
                                <li><a href="#" class="hover-style-link">Why to choose Us</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                            <h6 class="footer-widget__title mb-20">Support</h6>
                            <ul class="footer-widget__list">
                                <!-- <li><a href="#" class="hover-style-link">Forum Support</a></li> -->
                                <li><a href="#" class="hover-style-link">Help & FAQ</a></li>
                                <li><a href="#" class="hover-style-link">Contact Us</a></li>
                                <!-- <li><a href="#" class="hover-style-link">Pricing and plans</a></li> -->
                                <li><a href="#" class="hover-style-link">Cookies Policy</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                            <div class="footer-widget__title section-space--mb_50"></div>
                            <ul class="footer-widget__list">
                                <li><a href="https://play.google.com/store" class="image_btn"><img class="img-fluid" src="assets/images/icons/aeroland-button-google-play.webp" alt=""></a></li>
                                <li><a href="https://www.apple.com/in/app-store" class="image_btn"><img class="img-fluid" src="assets/images/icons/aeroland-button-app-store.webp" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright-area section-space--pb_30">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 text-center text-md-start">
                            <span class="copyright-text">&copy;<?php echo $result['copyright']; ?></a></span>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <ul class="list ht-social-networks solid-rounded-icon">

                                <li class="item">
                                    <a href="<?php echo $result['twitter']; ?>" target="_blank" aria-label="Twitter" class="social-link hint--bounce hint--top hint--primary">
                                        <i class="fab fa-twitter link-icon"></i>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="<?php echo $result['facebook']; ?>" target="_blank" aria-label="Facebook" class="social-link hint--bounce hint--top hint--primary">
                                        <i class="fab fa-facebook-f link-icon"></i>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="<?php echo $result['instagram']; ?>" target="_blank" aria-label="Instagram" class="social-link hint--bounce hint--top hint--primary">
                                        <i class="fab fa-instagram link-icon"></i>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="<?php echo $result['linkedin']; ?>" target="_blank" aria-label="Linkedin" class="social-link hint--bounce hint--top hint--primary">
                                        <i class="fab fa-linkedin link-icon"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  End of footer area  ====================-->

        </div>
        <!--====================  scroll top ====================-->
        <a href="#" class="scroll-top" id="scroll-top">
            <i class="arrow-top fal fa-long-arrow-up"></i>
            <i class="arrow-bottom fal fa-long-arrow-up"></i>
        </a>
        <!--====================  End of scroll top  ====================-->

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


