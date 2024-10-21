<?php include 'header.php' ?>
<!-- Carousel section -->
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <!-- Carousel Item 1 -->
    <div class="carousel-item active mycr">
      <img src="images/caraousel1.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>WBJECA</h5>
        <p>Prepare for your exam</p>
      </div>
    </div>
    <!-- Carousel Item 2 -->
    <div class="carousel-item mycr">
      <img src="images/caraousel2.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <!-- Carousel Item 3 -->
    <div class="carousel-item mycr">
      <img src="images/caraousel3.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- End of Carousel section -->
<!-- Chapter section -->
<div class="container my-4">
  <h1 align="center">Chapters</h1>
  <div class="row gy-3 my-3">
    <?php
      // Retrieve data from database table
      $sql="SELECT ID,name,photo FROM chapters";
      $result = mysqli_query($con,$sql);
      while($row = mysqli_fetch_array($result))
      { 
        // Display chapter data in a card
        ?>
        <div class="col-md-3">
          <div class="card">
            <img src="<?php echo $row['photo'] ?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <p class="card-text"><?php echo $row['name'] ?></p>
              <a href="questions.php?string=<?php echo $row['ID']; ?>" class="btn btn-danger">See Questions</a>
            </div>
          </div>
        </div>
        <?php 
      } 
    ?>
  </div>
</div>
<!--End of Chapter section-->
<?php include 'footer.php' ?>