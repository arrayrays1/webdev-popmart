<!-- LOGIN MODAL -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content login-modal">
      <div class="modal-body text-center p-5">
        <h2 class="fw-bold mb-2">WELCOME TO</h2>
        <div class="mb-4">
          <img src="/website-popmart/img/pop-mart-logo.png" alt="Popmart Logo" class="login-logo">
        </div>

        <form id="loginForm" class="text-start" novalidate>
          <div class="mt-3 position-relative">
            <label for="loginEmail" class="form-label fw-semibold">Email</label>
            <input type="text" id="loginEmail" name="loginEmail" class="form-control pe-5" placeholder="name@email.com" required>
            <i class="bi bi-envelope login-icon right"></i>
          </div>

          <div class="mt-3 position-relative">
            <label for="loginPassword" class="form-label fw-semibold">Password</label>
            <input type="password" id="loginPassword" name="loginPassword" class="form-control pe-5" placeholder="Enter your password" autocomplete="off" required>
            <i class="bi bi-eye toggle-password"></i>
          </div>
          
          <div id="loginFeedback" class="mt-3"></div>


          <button type="submit" class="btn btn-danger w-100 rounded-pill mt-4">Login</button>
        </form>

        <p class="mt-3 mb-0 small">
          Don’t have an account?
          <a href="#" data-bs-toggle="modal" data-bs-target="#signupModal" data-bs-dismiss="modal"
             class="text-decoration-none fw-semibold text-primary">Sign Up here</a>
        </p>
      </div>
    </div>
  </div>
</div>

<!-- SIGNUP MODAL -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content signup-modal">
      <div class="modal-body text-center p-5">
        <div class="mb-2">
          <img src="/website-popmart/img/pop-mart-logo.png" alt="Popmart Logo" class="login-logo">
        </div>
        <h2 class="fw-bold mb-4">Create your account</h2>

        <form id="signupForm" class="text-start" novalidate>
          <div class="row g-2">
            <div class="mt-3 position-relative">
              <label for="firstName" class="form-label">First Name</label>
              <input type="text" class="form-control" id="firstName" name="firstName" placeholder="first name" required>
            </div>
            <div class="mt-3 position-relative">
              <label for="lastName" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="lastName" name="lastName" placeholder="last name" required>
            </div>
          </div>

          <div class="mt-3 position-relative">
            <label for="signupEmail" class="form-label">Email Address</label>
            <input type="text" class="form-control" id="signupEmail" name="signupEmail" placeholder="someone@email.com" required>
          </div>

          <div class="mt-3 position-relative">
            <label for="contactNumber" class="form-label">Contact Number</label>
            <div class="input-group">
              <span class="input-group-text bg-light" id="countryCode">+63</span>
              <input type="text" class="form-control" id="contactNumber" name="contactNumber" placeholder="9XXXXXXXXX" maxlength="10" inputmode="numeric" required>
            </div>
          </div>

          <div class="mt-3 position-relative">
            <label for="signupPassword" class="form-label">Password</label>
            <input type="password" class="form-control pe-5" id="signupPassword" name="signupPassword" placeholder="Enter your password" autocomplete="off" required>
            <i class="bi bi-eye toggle-password icon-eye"></i>
          </div>

          <div class="mt-3 position-relative">
            <label for="confirmPassword" class="form-label">Re-type your password</label>
            <input type="password" class="form-control pe-5" id="confirmPassword" name="confirmPassword" placeholder="Re-enter your password" autocomplete="off" required>
            <i class="bi bi-eye toggle-password icon-eye"></i>
          </div>

          <div id="signupFeedback" class="mt-3"></div>

          <button type="submit" class="btn btn-danger w-100 rounded-pill mt-4">Sign Up</button>
        </form>

        <p class="mt-3 mb-0 small">
          Already have an account?
          <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-dismiss="modal" class="text-decoration-none fw-semibold text-primary">Login Here</a>
        </p>
      </div>
    </div>
  </div>
</div>