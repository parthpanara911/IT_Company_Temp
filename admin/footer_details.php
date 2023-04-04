<?php include('../config/connection.php');
include('include/sidebar.php');
include('include/topbar.php');
include('include/header.php');
?>

<div id="form-container">
    <form method="post" class="" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="HHpy79biZP0vPZojt2bksMaoZRnP4tx9CpKKlLrb">
        <div class="form-group">
            <label>Phone Number</label>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Phone Number" name="contact" value="+91 " required="">
            </div>
        </div>
        <div class="form-group">
            <label>Email</label>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Email" name="email" value="" required="">
            </div>
        </div>

        <div class="form-group">
            <label>Address</label>
            <div class="input-group">
                <textarea class="form-control" id="gg" name="address" width=""></textarea>
            </div>
        </div>


        <div class="form-group">
            <label for="" class="bmd-label-floating">Footer copyright</label>
            <input type="text" name="copyright" placeholder="copyright" class="form-control" value="" required="">
        </div>

        <div class="form-group">
            <label for="" class="bmd-label-floating">Twitter Link</label>
            <input type="text" name="twitter" placeholder="twitter" class="form-control" value="https://twitter.com/Sunfloweebiz" required="">
        </div>

        <div class="form-group">
            <label for="" class="bmd-label-floating">Facebook Link</label>
            <input type="text" name="facebook" placeholder="facebook" class="form-control" value="https://www.facebook.com/sunfloweebiztech" required="">
        </div>

        <div class="form-group">
            <label for="" class="bmd-label-floating">Instagram Link</label>
            <input type="text" name="instagram" placeholder="instagram" class="form-control" value="https://www.instagram.com/sunfloweebiztech/" required="">
        </div>

        <div class="form-group">
            <label for="" class="bmd-label-floating">LinkedIn Link</label>
            <input type="text" name="linkedin" placeholder="linkedin" class="form-control" value="https://www.linkedin.com/company/sunfloweebiztech" required="">
        </div>


        <div class="form-group">
            <label>Logo</label>
            <img class="author-box-picture" src="assets/dist/img/footer_logo.png" >
            <div class="input-group">
                <input type="file" class="form-control" id="" placeholder="Image" accept= ".png, .jpg, .jpeg, .pdf"  name="footer_logo" required value="<?php echo $result['footer_logo']; ?>">
            </div>
        </div>



        <button type="submit" name="update" class="btn btn-success mt-3">Update</button>

    </form>

</div>


<?php

if (isset($_POST['update'])) {

    move_uploaded_file($_FILES['footer_logo']['tmp_name'], "assets/dist/img/" . $_FILES['footer_logo']['name']);

    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $copyright = $_POST['copyright'];
    $twitter = $_POST['twitter'];
    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];
    $linkedin = $_POST['linkedin'];
    $file = $_FILES['footer_logo']['name'];



    if (strlen($file) > 0) {
        $flogo = $file;
    }

    $sql = "UPDATE `footer-details` SET `contact`='$contact',`email`='$email',`address`='$address',`copyright`='$copyright',`twitter`='$twitter',`facebook`='$facebook',`instagram`='$instagram',`linkedin`='$linkedin',`footer_logo`='$file'  WHERE id=1";
    $result = mysqli_query($con, $sql);


    if ($result) {
        echo "<script>alert('Footer fields is updated');window.location.href='../index.php';</script>";
    } else {
        echo "<script>alert('Footer fields not updated');</script>";
    }
}
?>