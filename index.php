<?php
include 'header.php'; // Ensure this file contains the session check logic
// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  echo "
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                title: 'Login Required',
                text: 'Please log in to give the mock test.',
                icon: 'warning', // You can use 'info', 'error', 'success', or 'question'
                confirmButtonText: 'OK',
                confirmButtonColor: '#6a0dad', // Customize the button color
                background: '#f3e8ff', // Add a custom background color
                color: '#4b0082', // Customize text color
                backdrop: `
                    rgba(0, 0, 0, 0.4)
                    url('https://i.gifer.com/3P3.gif')  // Optional animated background
                    left top
                    no-repeat
                `
            });
        });
    </script>";
}
?>

<!-- Rest of the index.php code -->
<div class="container my-4" style="background-color: #f3e8ff; border-radius: 15px; padding: 20px;">
  <h1 align="center" style="color: #6a0dad;">Chapters</h1>
  <div class="row gy-3 my-3">
    <?php
      $sql = "SELECT ID, name, photo FROM chapters";
      $result = mysqli_query($con, $sql);
      while ($row = mysqli_fetch_array($result)) { 
    ?>
        <div class="col-md-3">
          <div class="card shadow-sm" style="border-radius: 10px; overflow: hidden; border: none;">
            <img src="<?php echo $row['photo']; ?>" class="card-img-top" alt="..." style="border-bottom: 4px solid #6a0dad;" />
            <div class="card-body" style="background-color: #e9d5ff; color: #4b0082;">
              <p class="card-text" style="font-weight: bold;"><?php echo $row['name']; ?></p>
              <a href="questions.php?string=<?php echo $row['ID']; ?>" class="btn btn-danger" style="background-color: #6a0dad; border: none; color: #fff; font-weight: bold;">See Questions</a>
            </div>
          </div>
        </div>
    <?php } ?>
  </div>
</div>
<?php include 'footer.php'; ?>
