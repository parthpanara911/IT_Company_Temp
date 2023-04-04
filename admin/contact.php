<?php
include('include/header.php');
include('include/sidebar.php');
include('include/topbar.php');
include('../config/connection.php');

$sql = "SELECT * FROM contact";
// error_reporting(0);
$data = mysqli_query($con, $sql);

$total = mysqli_num_rows($data);   // How many rows are present in the table

if ($total > 0) {
?>
  <center>
    <table border="1" cellspacing="3" width="50%">
      <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Email</th>
        <th>PhoneNumber</th>
        <th>Message</th>
        <th>Action</th>
      </tr>

      <?php
      $i = 1;
      while ($result = mysqli_fetch_array($data)) { // Data is show in array format

      ?>
        <tr>
          <td><?php echo $i++; ?></td>

          <td>
            <?php echo $result['name']; ?>
          </td>
          <td>
            <?php echo $result['email']; ?>
          </td>
          <td>
            <?php echo $result['phone']; ?>
          </td>
          <td><?php echo $result['message']; ?> </td>

          <td><a class="btn btn-danger" href="contact_delete.php?id=<?php echo $result['id']; ?>">Delete</a>
          </td>
        </tr>
      <?php
      }
      ?>
    </table>
  </center>

<?php
} else {
  echo "<h2>No records found</h2>";
}
?>

<?php
include('include/footer.php');
?>