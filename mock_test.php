<?php
	// include the database configuration file
	include 'config.php';

	// start session
	session_start();

	// check if question ids are set in session
	if (!isset($_SESSION['question_ids'])) {
		// redirect to mock test page if question ids are not set
		header('Location: mock.php');
		exit();
	}

	// get question ids from session
	$question_ids = $_SESSION['question_ids'];

	// get the number of questions
	$num_questions = count($question_ids);

	// prepare a query to fetch questions from database using the question ids
	$query = "SELECT * FROM questions WHERE id IN (".implode(",", $question_ids).")";

	// execute the query
	$result = mysqli_query($con, $query);

	// create an array to store the questions
	$questions = array();

	// loop through the query result and store each question in the questions array
	while ($row = mysqli_fetch_assoc($result)) {
		$questions[] = $row;
	}
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Test Questions</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<h1>Test Questions</h1>
			<form action="scorecard.php" method="POST" target="_blank">
			<?php foreach ($questions as $i => $question) { ?>
			<div class="card mb-3">
				<div class="card-body">
					<h5 class="card-title">Question <?php echo ($i+1) ?>:</h5>
					<p class="card-text"><?php echo $question['question_text'] ?></p>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="answer_<?php echo $i ?>" id="answer_<?php echo $i ?>_a" value="A" required>
						<label class="form-check-label" for="answer_<?php echo $i ?>_a">
							<?php echo $question['option_a'] ?>
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="answer_<?php echo $i ?>" id="answer_<?php echo $i ?>_b" value="B" required>
						<label class="form-check-label" for="answer_<?php echo $i ?>_b">
							<?php echo $question['option_b'] ?>
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="answer_<?php echo $i ?>" id="answer_<?php echo $i ?>_c" value="C" required>
						<label class="form-check-label" for="answer_<?php echo $i ?>_c">
							<?php echo $question['option_c'] ?>
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="answer_<?php echo $i ?>" id="answer_<?php echo $i ?>_d" value="D" required>
						<label class="form-check-label" for="answer_<?php echo $i ?>_d">
							<?php echo $question['option_d'] ?>
						</label>
					</div>
				</div>
			</div>
			<?php } ?>
			<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	 	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  	</body>
</html>