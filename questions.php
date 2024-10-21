<?php
  // Include the header.php file which contains the HTML header section
  include 'header.php';

  // Get the chapter ID from the URL query parameter
  $chapter_id = $_REQUEST['string'];
  $i = 1;

  // Query the database to get all the questions for the specified chapter ID
  $sql = "SELECT question_text, option_a, option_b, option_c, option_d, correct_answer FROM questions WHERE chapter_id = $chapter_id";
  $result = mysqli_query($con, $sql);
?>
<!-- HTML code for the main content section -->
<div class="jumbotron jumbotron-fluid jumbotron-custom">
  <div class="container">
    <?php
      // Query the database to get the name of the chapter with the specified ID
      $sql = "SELECT name FROM chapters WHERE ID = $chapter_id";
      $result1 = mysqli_query($con, $sql);
      $row = mysqli_fetch_assoc($result1);
    ?>
    <h1 class="display-4 text-center"><?php echo $row['name']; ?></h1>
  </div>
</div>
<div class="container my-4">
  <table class="table table-striped table-hover">
    <thead class="text-center">
      <tr>
        <th style="width:100px">#</th>
        <th>Question</th>
        <th>Answer</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        // Loop through each question and display it in a row of the table
        while ($row = mysqli_fetch_assoc($result)) { 
      ?>
        <tr>
          <th scope="row" class="text-center"><?php echo $i ?></th>
          <td>
            <div>
              <!-- Display the question text and answer options -->
              <h5><?php echo $row['question_text'] ?></h5>
              <p>A. <?php echo $row['option_a'] ?></p>
              <p>B. <?php echo $row['option_b'] ?></p>
              <p>C. <?php echo $row['option_c'] ?></p>
              <p>D. <?php echo $row['option_d'] ?></p>
            </div>
          </td>
          <td class="text-center"><?php echo $row['correct_answer'] ?></td>
        </tr>
      <?php 
        // Increment the question counter
        $i++;
      } 
      ?>
    </tbody>
  </table>
  <!-- Button to print the page -->
  <div class="print-btn">
    <button class="btn btn-primary" onclick="window.print()">Print</button>
  </div>
</div>
<?php 
  // Include the footer.php file which contains the HTML footer section
  include 'footer.php'; 
?>