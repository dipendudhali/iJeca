<!-- Modal Start -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <!-- Modal dialog -->
  <div class="modal-dialog modal-dialog-centered">
    <!-- Modal content -->
    <div class="modal-content bg-light">
      <!-- Modal header -->
      <div class="modal-header text-center">
        <h1 class="modal-title display-5" id="loginModalLabel">User LogIn</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <!-- Modal body -->
      <div class="modal-body py-4">
        <!-- User image -->
        <img src="https://cdn-icons-png.flaticon.com/512/6522/6522516.png" class="bd-placeholder-img rounded-circle mx-auto d-block" width="140" height="140" role="img" alt="...">
        <!-- Login form -->
        <form action="loginConfig.php" method="post">
          <div class="mb-3">
            <label for="login_identifier" class="form-label fw-bold">Username, email, or phone:</label>
            <input type="text" class="form-control border-2 rounded-pill" id="login_identifier" name="login_identifier" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label fw-bold">Password</label>
            <input type="password" class="form-control border-2 rounded-pill" id="password" name="password">
          </div>
          <button type="submit" class="btn btn-primary btn-lg btn-block rounded-pill">Log In</button>
        </form>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal End -->