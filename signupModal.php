<!-- Signup Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signupModalLabel">Sign Up</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="signupConfig.php" method="POST" onsubmit="return validateForm()">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="firstname" class="form-label">First Name</label>
              <input type="text" class="form-control" id="firstname" name="firstname" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="lastname" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="lastname" name="lastname" required>
            </div>
          </div>
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" minlength="6" required>
            <small class="form-text text-danger d-none" id="usernameError">Username must be at least 6 characters long.</small>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="tel" class="form-control" id="phone" name="phone" required>
            <small class="form-text text-danger d-none" id="phoneError">Phone number must be exactly 10 digits long.</small>
          </div>
          <div class="mb-3 position-relative">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <div class="mb-3 position-relative">
            <label for="cpassword" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="cpassword" name="cpassword" required>
          </div>
          <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
  // Form validation
  function validateForm() {
    const username = document.getElementById('username').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const usernameError = document.getElementById('usernameError');
    const phoneError = document.getElementById('phoneError');

    let isValid = true;

    // Username validation
    if (username.length < 6) {
      usernameError.classList.remove('d-none');
      isValid = false;
    } else {
      usernameError.classList.add('d-none');
    }


    // Phone number validation
    const phoneRegex = /^\d{10}$/;
    if (!phoneRegex.test(phone)) {
      phoneError.classList.remove('d-none');
      isValid = false;
    } else {
      phoneError.classList.add('d-none');
    }

    return isValid;
  }
</script>
