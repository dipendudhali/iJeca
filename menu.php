<?php 
// Fetch chapters from the database
$query = "SELECT ID,name FROM chapters";
$result1 = mysqli_query($con, $query);
$chapters = [];
while ($row = mysqli_fetch_assoc($result1)) {
  // Store chapter details in an array
  $chapters[] = array('id'=>$row['ID'],'name'=>$row['name']);
}
?>
<!-- Navigation Bar-->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">iJeca</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="syllabus.php">Syllabus</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Chapters</a>
          <ul class="dropdown-menu">
            <?php foreach ($chapters as $key => $value){ ?>
            <!-- Display chapter details in dropdown menu -->
            <li><a class="dropdown-item" href="questions.php?string=<?php echo $value['id']; ?>"><?php echo $value['name']; ?></a></li>
            <?php } ?>
          </ul>
        </li>
        <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){ ?>
        <li class="nav-item">
          <a class="nav-link" href="#">Score</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mock.php">Mock Test</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contribute</a>
        </li>
        <?php } ?>
      </ul>
      <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){ ?>
      <!-- Display user's name and logout button if user is logged in -->
      <div class="d-flex ms-auto justify-content-center">
        <p class="text-dark my-0 mx-2">
          Welcome <span class="badge bg-primary"><?php echo $_SESSION['username'] ?></span>
        </p>
      </div>
      <div class="d-flex ms-auto">
        <a href="logout.php" class="btn btn-outline-danger">Logout</a>
      </div>
      <?php }else{ ?>
      <!-- Display login and signup buttons if user is not logged in -->
      <div class="d-flex ms-auto">
        <button type="button" class="btn btn-outline-success mx-2" data-bs-toggle="modal" data-bs-target="#loginModal">Log In</button>
        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#signupModal">Sign Up</button>
      </div>
      <?php } ?>
    </div>
  </div>
</nav>
<!-- Navigation Bar-->
<?php 
    // Include login and signup modals
    include 'loginModal.php';
    include 'signupModal.php';

    // Display success message if user logs in successfully
    if(isset($_GET['loginsuccess']) && $_GET['loginsuccess']=="true"){
      echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
              <strong>Successfully</strong> logged in. Now you can access your profile.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    }

    // Display failure message for login
    if(isset($_GET['loginsuccess']) && $_GET['loginsuccess']=="false"){
        echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
                <strong>Sorry!</strong> ' . $_GET['error'] . '.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
    }

    // Display success message if user signs up successfully
    if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true"){
      echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
              <strong>Successfully</strong> signed up. Please log in to continue.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    }

    // Display failure message for signup
    if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="false"){
        echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
                <strong>Sorry!</strong> ' . $_GET['error'] . '.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
    }
?>
