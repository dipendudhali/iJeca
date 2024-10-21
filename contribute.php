<?php

  include 'header.php';
  if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
      header("Location: index.php?loginsuccess=false&error=Please log in to continue"); // redirect to login page if not logged in
      exit();
  }

  
?>

<div class="container ">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Update Table</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" action="update_faculty_action.php">
      <div class="card-body">
        <div class="form-group">
          <label for="question_text">Question</label>
          <input type="text" class="form-control" name="question_text" id="question_text">
        </div>
        <div class="form-group">
          <label for="option_a">Option A</label>
          <input type="text" class="form-control" name="option_a" id="option_a">
        </div>
        <div class="form-group">
          <label for="option_a">Option A</label>
          <input type="text" class="form-control" name="option_a" id="option_a">
        </div>
        <div class="form-group">
          <label for="option_a">Option A</label>
          <input type="text" class="form-control" name="option_a" id="option_a">
        </div>
        <div class="form-group">
          <label for="option_a">Option A</label>
          <input type="text" class="form-control" name="option_a" id="option_a">
        </div>
        <div class="form-group">
          <input type="hidden" name="table_name" value="<?php echo $table_name ?>">
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary" value="Update">Update</button>
      </div>
    </form>
  </div>
</div>

<?php include 'footer.php';