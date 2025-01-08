<?php
  include 'header.php';
  $sql="SELECT * FROM chapters";
  $result = mysqli_query($con,$sql);
?>
<div class="jumbotron jumbotron-fluid jumbotron-custom" style="background: linear-gradient(145deg, #f3e8ff, #d6b4fc); color: #4b0082;">
  <div class="container text-center">
    <h1 class="display-4 font-weight-bold" style="color: #6a0dad;">JECA Syllabus</h1>
    <p class="lead">The papers will be based on Undergraduate Computer Application and equivalent courses followed in various Universities in India and on the following topics.</p>
  </div>
</div>

<div class="container my-4" style="background: #f3e8ff; border-radius: 15px; padding: 20px;">
  <table class="table table-striped table-hover" style="background: white; border-radius: 10px; overflow: hidden;">
    <thead class="text-white" style="background: #6a0dad;">
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
