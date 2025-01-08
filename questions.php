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
<div class="jumbotron jumbotron-fluid jumbotron-custom" style="background: linear-gradient(145deg, #f3e8ff, #d6b4fc); color: #4b0082;">
  <div class="container text-center">
    <?php
      // Query the database to get the name of the chapter with the specified ID
      $sql = "SELECT name FROM chapters WHERE ID = $chapter_id";
      $result1 = mysqli_query($con, $sql);
      $row = mysqli_fetch_assoc($result1);
    ?>
    <h1 class="display-4 font-weight-bold" style="color: #6a0dad;"><?php echo $row['name']; ?></h1>
  </div>
</div>

<div class="container my-4" style="background: #f3e8ff; border-radius: 15px; padding: 20px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
  <table class="table table-bordered table-hover" style="background: white; border-radius: 10px; overflow: hidden;">
    <thead class="text-white" style="background: #6a0dad;">
      <tr class="text-center">
        <th style="width: 80px;">#</th>
        <th>Question</th>
        <th style="width: 120px;">Answer</th>
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
            <h5 style="color: #4b0082;"><?php echo $row['question_text'] ?></h5>
            <p style="margin: 5px 0;">A. <?php echo $row['option_a'] ?></p>
            <p style="margin: 5px 0;">B. <?php echo $row['option_b'] ?></p>
            <p style="margin: 5px 0;">C. <?php echo $row['option_c'] ?></p>
            <p style="margin: 5px 0;">D. <?php echo $row['option_d'] ?></p>
          </div>
        </td>
        <td class="text-center font-weight-bold text-success"><?php echo $row['correct_answer'] ?></td>
      </tr>
      <?php 
        // Increment the question counter
        $i++;
      } 
      ?>
    </tbody>
  </table>

  <!-- Button to print the page -->
  <div class="text-center mt-4">
    <button class="btn btn-primary px-4 py-2" onclick="window.print()" style="background: #6a0dad; border: none;">Print</button>
  </div>
</div>
<?php 
  // Include the footer.php file which contains the HTML footer section
  include 'footer.php'; 
?>
