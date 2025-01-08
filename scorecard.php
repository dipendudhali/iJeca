<?php
    // Include configuration file and start session
    include 'config.php';
    session_start();

    // Redirect to mock test page if question ids not set in session
    if (!isset($_SESSION['question_ids'])) {
        header('Location: mock.php');
        exit();
    }

    // Get question ids from session and count the number of questions
    $question_ids = $_SESSION['question_ids'];
    $num_questions = count($question_ids);

    // Initialize variables to keep track of correct answers and selected answers
    $correct_answers = 0;
    $selected_answers = array();

    // Loop through each question and check selected answer against correct answer
    for ($i = 0; $i < $num_questions; $i++) {
        // Get question id and selected answer from POST data
        $question_id = $question_ids[$i];
        $selected_answer = $_POST['answer_'.$i];
        $selected_answers[] = $selected_answer;

        // Retrieve question data from database using question id
        $query = "SELECT * FROM questions WHERE id = $question_id";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_assoc($result);
        $questions[$i] = $row;

        // Get correct answer for this question
        $correct_answer = $row['correct_answer'];

        // Increment correct_answers counter if selected answer is correct
        if ($selected_answer == $correct_answer) {
            $correct_answers++;
        }
    }

    // Calculate the score as a percentage
    $score = ($correct_answers / $num_questions) * 100;
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Scorecard</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <style>
            @media print {
                .container {
                    width: 21cm;
                    height: 29.7cm;
                    margin: auto;
                    padding: 20px;
                }

                .table {
                    font-size: 16px;
                }

                .print-btn {
                    display: none;
                }
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Scorecard</h1>
            <p>Your score is: <?php echo $score ?>%</p>
            <table class="table">
                <thead>
                    <tr>
                        <th>Question</th>
                        <th>Selected Answer</th>
                        <th>Correct Answer</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < $num_questions; $i++) { ?>
                    <tr>
                        <td><?php echo $questions[$i]['question_text'] ?></td>
                        <td><?php echo $selected_answers[$i] ?></td>
                        <td><?php echo $questions[$i]['correct_answer'] ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="print-btn">
                <button class="btn btn-primary" onclick="window.print()">Print</button>
                <button class="btn btn-secondary" onclick="window.location.href='index'">Back to Home</button>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>