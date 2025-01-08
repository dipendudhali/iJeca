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
		header('Location: mock_test');
		exit();
	}
?>
<!-- HTML Form -->
<div class="container mock d-flex justify-content-center align-items-center flex-column py-5" 
    style="background: linear-gradient(145deg, #f3e8ff, #d6b4fc); border-radius: 15px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
    <h1 class="text-center mb-4" style="color: #4b0082; font-weight: bold;">Select Questions</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" style="width: 100%; max-width: 400px;">
        <!-- Chapter Selection -->
        <div class="mb-4">
            <label for="chapter" class="form-label" style="font-weight: bold; color: #4b0082;">Chapter:</label>
            <select class="form-select" id="chapter" name="chapter" required style="border-radius: 10px; padding: 10px;">
                <option value="">Select a chapter</option>
                <?php foreach ($chapters as $key => $value) { ?>
                <option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
                <?php } ?>
            </select>
        </div>
        <!-- Number of Questions -->
        <div class="mb-4">
            <label for="num_questions" class="form-label" style="font-weight: bold; color: #4b0082;">Number of Questions:</label>
            <input type="number" class="form-control" id="num_questions" name="num_questions" required min="1" max="10"
                style="border-radius: 10px; padding: 10px;">
        </div>
        <!-- Hidden Input for Action -->
        <input type="hidden" name="action" value="start_test">
        <!-- Submit Button -->
        <div class="text-center">
            <button type="submit" class="btn btn-primary px-4 py-2" 
                style="background: #6a0dad; border: none; font-weight: bold; border-radius: 8px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);">
                Start Test
            </button>
        </div>
    </form>
</div>

<!-- Include footer file -->
<?php include 'footer.php'; ?>