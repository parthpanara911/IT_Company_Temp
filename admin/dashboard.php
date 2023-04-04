<?php
include('../config/connection.php');
include('include/header.php');
include('include/topbar.php');
include('include/sidebar.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2"><!-- Main Sidebar Container -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="contact-part sidebar-dark-primary">
      <a class="nav-link active" id="links">
        <!-- <i class="fa fa-users" aria-hidden="true"></i> -->
        <div class="c-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
        </div>
        <span>
          <?php
          $sql='SELECT * FROM `contact`';
          $result=mysqli_query($con,$sql);
          if($total=mysqli_num_rows($result)){
            echo $total;
          }
          else{
            echo "<script>alert('No data found');</script>";         
          }
          ?>
        </span>
        <p>
          Total Contact
        </p>
      </a>
    </div>
    <!-- <div class="contact-box">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                    </div>
                                    <div class="">
                                        <p class="w-value">4</p>
                                        <h5 class="">Total Contact</h5>
                                    </div>
                                </div> -->
  </section>
</div>

<?php
include('include/footer.php');
?>