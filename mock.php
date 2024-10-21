<?php

	// Turn on output buffering
	ob_start();
	
	// Include header file
	include 'header.php';
	
	// Redirect to login page if not logged in
	if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  		header("Location: index.php?loginsuccess=false&error=Please log in to continue"); 
  		exit;
	}
	
	// Get chapters from database
	$chapters = array();
	$query = "SELECT ID,name FROM chapters";
	$result1 = mysqli_query($con, $query);
	while ($row = mysqli_fetch_assoc($result1)) {
		$chapters[] = array('id'=>$row['ID'],'name'=>$row['name']);
	}

	// Start test action
	if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'start_test') {
		$chapter = $_POST['chapter'];
		$num_questions = $_POST['num_questions'];
		$query = "SELECT * FROM questions WHERE chapter_id = '".$chapter."' ORDER BY RAND() LIMIT $num_questions";
		$result = mysqli_query($con, $query);
		$question_ids = array();
		while ($row = mysqli_fetch_assoc($result)) {
			$question_ids[] = $row['id'];
		}
		$_SESSION['question_ids'] = $question_ids;
		header('Location: mock_test.php');
		exit();
	}
?>
<!-- HTML Form -->
<div class="container mock d-flex justify-content-center align-items-center flex-column">
    <h1>Select Questions</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <div class="mb-3">
            <label for="chapter" class="form-label">Chapter:</label>
            <select class="form-select" id="chapter" name="chapter" required>
                <option value="">Select a chapter</option>
                <?php foreach ($chapters as $key => $value){ ?>
                <option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="num_questions" class="form-label">Number of Questions:</label>
            <input type="number" class="form-control" id="num_questions" name="num_questions" required min="1" max="10">
        </div>
        <input type="hidden" name="action" value="start_test">
        <button type="submit" class="btn btn-primary">Start Test</button>
    </form>
</div>
<!-- Include footer file -->
<?php include 'footer.php'; ?>