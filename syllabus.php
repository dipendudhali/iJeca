<?php
  include 'header.php';
  $sql="SELECT * FROM chapters";
  $result = mysqli_query($con,$sql);
?>
    <div class="jumbotron jumbotron-fluid jumbotron-custom">
      <div class="container">
        <h1 class="display-4 text-center">JECA Syllabus</h1>
        <p class="lead text-center">The papers will be based on Undergraduate Computer Application and equivalent courses followed in various Universities in India and on the following topics.</p>
      </div>
    </div>
    <div class="container my-4">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Chapter</th>
            <th>Contents</th>
          </tr>
        </thead>
        <tbody>
          <?php while($row = mysqli_fetch_assoc($result)){ ?>
          <tr>
            
            <th scope="row"><?php echo $row['ID'] ?></th>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['syllabus'] ?></td>
            
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
<?php include 'footer.php'; ?>