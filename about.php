<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Popmart - Products</title>
  <link rel="icon" type="image/x-icon" href="favicon.png">

  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  
  <!-- bootstrap icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <!-- bootstrap CSS -->
  <link href="./dist/styles.css" rel="stylesheet">
</head>
<body>

  <!-- ================= NAVBAR ================= -->
  <nav id="mainNavbar" class="navbar navbar-expand-lg navbar-light custom-navbar fixed-top">
    <div class="container">
      <!-- BRAND LOGO -->
      <a class="navbar-brand" href="bootstrap.php">
        <img src="img/pop-mart-logo.png" alt="E-Shop Logo" width="150" height="40" class="d-inline-block align-text-top">
      </a>

      <!-- HAMBURGER MENU -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- NAVIGATION LINKS -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto nav-links">
          <li class="nav-item"><a class="nav-link" href="bootstrap.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>
          <li class="nav-item"><a class="nav-link active" href="about.php">About</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
          <li class="nav-item"><a class="nav-link" href="cart.php"> <i class="bi bi-cart"></i> Cart</a></li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginModal"><i class="bi bi-person-circle"></i> Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- ================= BANNER ================= -->
  <section class="contact-div text-center mt-5 pt-5">
    <img src="img/about-banner.png" alt="Popmart about banner" class="img-fluid contact-banner" style="width: 100%;">
  </section>

  <!-- ================= ABOUT POP MART ================= -->
  <section class="about-section py-5">
    <div class="container">
      <div class="row align-items-center">

        <!-- IMAGE -->
        <div class="col-lg-6 mb-4 mb-lg-0">
          <img src="img/aboutUs-1.png" alt="About Popmart" class="img-fluid rounded shadow">
        </div>

        <!-- TEXT -->
        <div class="col-lg-6">
          <h2 class="section-title">About POP MART</h2>
          <p>POP MART is a rising global force in pop culture and entertainment.</p>
          <p>Our purpose is to celebrate daily moments and inspire through designer toys and fun experiences.</p>
          <p>Our focus is IP incubation & operations, designer toys & retail, theme parks & experiences, also digital entertainment.</p>
          <p>POP MART has over 500 stores in 30+ countries and regions, more than 2,300 ROBOSHOPs and e-commerce.</p>
          <p>We manage & represent incredible artists from all over the world. Our roster spans dozens of iconic characters, like MOLLY, DIMOO, SKULLPANDA, THE MONSTERS, HIRONO and more. With our IP characters, we create iconic cross-overs.</p>
          <p>Our mission is to light up passion & bring joy around the world.</p>
          <p><strong>POP MART is not just a brand, it’s a galaxy of creative possibilities.</strong></p>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= POP LAND ================= -->
  <section class="popland-section py-5 bg-light">
    <div class="container">
      <div class="row align-items-center">

        <!-- TEXT -->
        <div class="col-lg-6 order-2 order-lg-1">
          <h2 class="section-title">01. POP LAND</h2>
          <p>Opened in SEP 2023, POP LAND is our first immersive IP theme park, offering a special offline experience that celebrates beauty in simple daily moments and encourages everyone to stay in touch with their inner child.</p>
        </div>

        <!-- IMAGE -->
        <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
          <img src="img/01-1.png" alt="POP LAND" class="img-fluid rounded shadow">
        </div>
      </div>
    </div>
  </section>

  <!-- ================= POP TOY SHOW ================= -->
  <section class="poptoy-section py-5">
    <div class="container">
      <div class="row align-items-center">

        <!-- IMAGE -->
        <div class="col-lg-6 mb-4 mb-lg-0">
          <img src="img/03-1.png" alt="POP TOY SHOW" class="img-fluid rounded shadow">
        </div>

        <!-- TEXT -->
        <div class="col-lg-6">
          <h2 class="section-title">02. POP TOY SHOW</h2>
          <p>Launched in 2017, POP TOY SHOW (PTS) has rapidly grown to become the largest and most beloved international POP TOY exhibition. It has attracted more than 500 global artists and 350,000 visitors to date.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= OUR PRODUCTS ================= -->
  <section class="py-5 custom-products">
    <div class="container">
      <h1 class="text-center mb-4 custom-h1-products">OUR PRODUCTS</h1>
      <div class="row justify-content-center">

        <!-- SMISKI -->
        <div class="col-md-4">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="img/products-img-banner/smiski.png" alt="SMISKI" class="img-fluid">
                <p class="text-title">SMISKI</p>
              </div>
              <div class="flip-card-back">
                <h5>SMISKI</h5>
                <p>Small, glow-in-the-dark figurines that love to hide in corners.</p>
                <button class="custom-card-button" onclick="window.location.href='products-tab/products-smiski.php'">View</button>
              </div>
            </div>
          </div>
        </div>

        <!-- MOFUSAND -->
        <div class="col-md-4">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="img/products-img-banner/mofusand.png" alt="MOFUSAND" class="img-fluid">
                <p class="text-title">MOFUSAND</p>
              </div>
              <div class="flip-card-back">
                <h5>MOFUSAND</h5>
                <p>Adorable cats in quirky costumes, popular in Japan and beyond.</p>
                <button class="custom-card-button" onclick="window.location.href='products-tab/products-mofusand.php'">View</button>
              </div>
            </div>
          </div>
        </div>

        <!-- SONNY ANGEL -->
        <div class="col-md-4">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="img/products-img-banner/sonny-angel.png" alt="SONNY ANGEL" class="img-fluid">
                <p class="text-title">SONNY ANGEL</p>
              </div>
              <div class="flip-card-back">
                <h5>SONNY ANGEL</h5>
                <p>Mini collectible angels that come in surprise blind boxes.</p>
                <button class="custom-card-button" onclick="window.location.href='products-tab/products-sAngel.php'">View</button>
              </div>
            </div>
          </div>
        </div>

        <!-- MIFFY -->
        <div class="col-md-4">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="img/products-img-banner/miffy.png" alt="MIFFY" class="img-fluid">
                <p class="text-title">MIFFY</p>
              </div>
              <div class="flip-card-back">
                <h5>MIFFY</h5>
                <p>The classic Dutch bunny character, simple yet beloved worldwide.</p>
                <button class="custom-card-button" onclick="window.location.href='products-tab/products-miffy.php'">View</button>
              </div>
            </div>
          </div>
        </div>

        <!-- HIRONO -->
        <div class="col-md-4">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="img/products-img-banner/hirono.png" alt="HIRONO" class="img-fluid">
                <p class="text-title">HIRONO</p>
              </div>
              <div class="flip-card-back">
                <h5>HIRONO</h5>
                <p>Figures inspired by contemporary art, reflecting deep emotions.</p>
                <button class="custom-card-button" onclick="window.location.href='products-tab/products-hirono.php'">View</button>
              </div>
            </div>
          </div>
        </div>

        <!-- CRYBABY -->
        <div class="col-md-4">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="img/products-img-banner/crybaby.png" alt="CRYBABY" class="img-fluid">
                <p class="text-title">CRYBABY</p>
              </div>
              <div class="flip-card-back">
                <h5>CRYBABY</h5>
                <p>Playful art toys that bring a mix of cuteness and attitude.</p>
                <button class="custom-card-button" onclick="window.location.href='products-tab/products-crybaby.php'">View</button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>



<!-- LOGIN MODAL -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content login-modal">
      <div class="modal-body text-center p-5">
        <h2 class="fw-bold mb-2">WELCOME TO</h2>
        <div class="mb-4">
          <img src="img/pop-mart-logo.png" alt="Popmart Logo" class="login-logo">
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
          <img src="img/pop-mart-logo.png" alt="Popmart Logo" class="login-logo">
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

  <!-- ================= FOOTER ================= -->
  <footer class="custom-footer text-center py-3">
    <p class="mb-0">© 2025 POPMART | Designed for demo purposes</p>
  </footer>


<!-- jquery and javascript -->
<script src="./dist/jquery.min.js"></script>
<script src="./dist/bootstrap.bundle.min.js"></script>

<!-- jquery validation for online -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"></script> -->

<!-- jquery validations locally -->
<script src="./dist/jquery.validate.min.js"></script>
<script src="./dist/additional-methods.min.js"></script>

<!-- ================= SCRIPTS ================= -->

<script>
// defines contact form validation: name, email, message
$(function () {
  $.validator.addMethod("validName", function (value, element) {
    // if there are extra spaces, invalid
    if (/^\s|\s$/.test(value)) return false;
    const trimmed = $.trim(value);

    // if less than 2 characters, invalid
    if (trimmed.length < 2) return false;
    return this.optional(element) || /^[A-Za-z]+(?: [A-Za-z]+)*$/.test(trimmed);
  }, "Please enter a valid name (letters only, no extra spaces).");

  //email
  $.validator.addMethod("validCustomEmail", function (value, element) {
    // if there are extra spaces, invalid
    if (/^\s|\s$/.test(value)) return false;
    value = $.trim(value);

    // allowed characters: letters, numbers, '_', '.', '@', '-'
    if (!/^[A-Za-z0-9._@-]+$/.test(value)) return false;

    // must contain exactly one '@' and end with .com
    if ((value.match(/@/g) || []).length !== 1) return false;
    if (!/\.com$/i.test(value)) return false;

    // split into local and domain fpr checking (full domain includes the .com)
    const parts = value.split("@");
    if (parts.length !== 2) return false;
    const localPart = parts[0]; // only one @ is allowed
    const domainFull = parts[1];            // e.g. "xyz.com" or "xyz.com.com"
    const domainTrimmed = domainFull.replace(/\.com$/i, ""); // remove final .com

    // both sides must have at least one valid character
    if (!localPart || !domainTrimmed) return false;

    // domain must only contain valid domain characters and not start/end with '.' or '-'
    if (!/^[A-Za-z0-9.-]+$/.test(domainTrimmed)) return false;
    if (/^\./.test(domainTrimmed) || /\.$/.test(domainTrimmed)) return false;
    if (/^\-/.test(domainTrimmed) || /\-$/.test(domainTrimmed)) return false;
    if (/\.\./.test(domainTrimmed)) return false; // no consecutive dots

    // invalid ".com.com" / any ".com." inside domainFull
    if (/\.com\./i.test(domainFull)) return false;

    // domain (trimmed) must contain at least one letter (rejects if both numerix)
    if (!/[A-Za-z]/.test(domainTrimmed)) return false;

    // should not have consecutive dots
    if (/^\./.test(localPart) || /\.$/.test(localPart) || /\.\./.test(localPart)) return false;

    // mwessage if invalid
    return true;
  }, "Email may contain letters, numbers, and _@.- only; must include '@' and end with '.com'.");

// applies contact form validation
  $("#contactForm").validate({
    onkeyup: function (element) { $(element).valid(); },
    onfocusout: function (element) { $(element).valid(); },

    rules: {
      name: {
        required: true,
        validName: true
      },
      email: {
        required: true,
        validCustomEmail: true
      },
      message: {
        required: true,
        minlength: 10,
        normalizer: function (value) { return $.trim(value); }
      }
    },

    messages: {
      name: { required: "Please enter your name." },
      email: {
        required: "Please enter your email address.",
        validCustomEmail: "Please enter a valid email (letters, numbers, '_''@''.''-' and must end with .com)."
      },
      message: {
        required: "Please enter your message.",
        minlength: "Your message must be at least 10 characters long."
      }
    },

    errorElement: "div",
    errorClass: "text-danger small",
    errorPlacement: function (error, element) {
      $(error).hide().insertAfter(element).fadeIn(120);
    },
    highlight: function (element) {
      $(element).addClass("is-invalid").removeClass("is-valid");
    },
    unhighlight: function (element) {
      $(element).removeClass("is-invalid").addClass("is-valid");
    },

    submitHandler: function (form) {
      const $msg = $('<div class="alert alert-success mt-3" role="alert">Message successfully sent!</div>');
      $msg.hide().insertBefore(form).fadeIn(180).delay(1400).fadeOut(300, function() { $(this).remove(); });
      form.reset();
      $(form).find('.is-valid').removeClass('is-valid');
    }
  });
});
</script>

<script>
$(function () {
  // defines validation rules (for login & signup)
  $.validator.addMethod("validName", function (value, element) {
    if (/^\s|\s$/.test(value)) return false;
    const trimmed = $.trim(value);
    if (trimmed.length < 2) return false;
    return this.optional(element) || /^[A-Za-z]+(?: [A-Za-z]+)*$/.test(trimmed);
  }, "Please enter a valid name (letters only, no extra spaces).");

  $.validator.addMethod("validCustomEmail", function (value, element) {
    // if there are extra spaces, invalid
    if (/^\s|\s$/.test(value)) return false;
    value = $.trim(value);

    // allowed characters: letters, numbers, '_', '.', '@', '-'
    if (!/^[A-Za-z0-9._@-]+$/.test(value)) return false;

    // must contain exactly one '@' and end with .com
    if ((value.match(/@/g) || []).length !== 1) return false;
    if (!/\.com$/i.test(value)) return false;

    // split into local and domain (full domain includes the .com)
    const parts = value.split("@");
    if (parts.length !== 2) return false;
    const localPart = parts[0]; // only one @ is allowed
    const domainFull = parts[1];            // e.g. "xyz.com" or "xyz.com.com"
    const domainTrimmed = domainFull.replace(/\.com$/i, ""); // remove final .com

    // both sides must have at least one valid character
    if (!localPart || !domainTrimmed) return false;

    // domain must only contain valid domain characters and not start/end with '.' or '-'
    if (!/^[A-Za-z0-9.-]+$/.test(domainTrimmed)) return false;
    if (/^\./.test(domainTrimmed) || /\.$/.test(domainTrimmed)) return false;
    if (/^\-/.test(domainTrimmed) || /\-$/.test(domainTrimmed)) return false;
    if (/\.\./.test(domainTrimmed)) return false; // no consecutive dots

    // invalid ".com.com" / any ".com." inside domainFull
    if (/\.com\./i.test(domainFull)) return false;

    // domain (trimmed) must contain at least one letter (rejects if both numerix)
    if (!/[A-Za-z]/.test(domainTrimmed)) return false;

    // should not have consecutive dots
    if (/^\./.test(localPart) || /\.$/.test(localPart) || /\.\./.test(localPart)) return false;

    // mwessage if invalid
    return true;
  }, "Email may contain letters, numbers, and _@.- only; must include '@' and end with '.com'.");

  //contact number: must start with 9 and have 10 digits
  $.validator.addMethod("validContact", function (value, element) {
    return /^9\d{9}$/.test(value);
  }, "Enter a 10-digit number starting with 9.");

  //password: at least 8 characters, one uppercase, one number
  $.validator.addMethod("strongPassword", function (value, element) {
    return /^(?=.*[A-Z])(?=.*\d).{8,}$/.test(value);
  }, "At least 8 characters, one uppercase and one number.");

// applies sign up form validation
  $("#signupForm").validate({
    onkeyup: function (el) { $(el).valid(); },
    onfocusout: function (el) { $(el).valid(); },
    rules: {
      firstName: { required: true, validName: true },
      lastName: { required: true, validName: true },
      signupEmail: { required: true, validCustomEmail: true },
      contactNumber: { required: true, validContact: true },
      signupPassword: { required: true, strongPassword: true },
      confirmPassword: { required: true, equalTo: "#signupPassword" } //password matching logic
    },
    messages: {
      firstName: { required: "Please enter your first name." },
      lastName: { required: "Please enter your last name." },
      signupEmail: { required: "Please enter your email address." },
      contactNumber: { required: "Please enter your contact number." },
      signupPassword: { required: "Please enter your password." },
      confirmPassword: { required: "Please confirm your password.", equalTo: "Passwords do not match." }
    },
    errorElement: "div",
    errorClass: "text-danger small",
    errorPlacement: function (error, element) {
      //positioning of error messages
    const container = element.closest('.position-relative, .input-group');
    if (container.length) {
      error.insertAfter(container);
    } else {
      error.insertAfter(element);
    }
    $(error).hide().fadeIn(120);
  },
    highlight: function (el) {
      $(el).addClass("is-invalid").removeClass("is-valid");
    },
    unhighlight: function (el) {
      $(el).removeClass("is-invalid").addClass("is-valid");
    },
    submitHandler: function (form) {
      const msg = $('<div class="alert alert-success mt-3" role="alert">Account created successfully!</div>');
      msg.hide().insertBefore(form).fadeIn(200).delay(1500).fadeOut(300, function(){ $(this).remove(); });
      form.reset();
      $(form).find('.is-valid').removeClass('is-valid');
    }
  });

  // login form validation
  $("#loginForm").validate({
    onkeyup: function (el) { $(el).valid(); },
    onfocusout: function (el) { $(el).valid(); },
    rules: {
      loginEmail: { required: true, validCustomEmail: true },
      loginPassword: { required: true }
    },
    messages: {
      loginEmail: { required: "Please enter your email." },
      loginPassword: { required: "Please enter your password." }
    },
    errorElement: "div",
    errorClass: "text-danger small",
    errorPlacement: function (error, element) {
    // positioning of error messages
    const container = element.closest('.position-relative, .input-group');
    if (container.length) {
      error.insertAfter(container);
    } else {
      error.insertAfter(element);
    }
    $(error).hide().fadeIn(120);
  },
    highlight: function (el) {
      $(el).addClass("is-invalid").removeClass("is-valid");
    },
    unhighlight: function (el) {
      $(el).removeClass("is-invalid").addClass("is-valid");
    },
    submitHandler: function (form) {
      $('#loginModal').modal('hide');
      alert('Login successful!');
      form.reset();
      $(form).find('.is-valid').removeClass('is-valid');
    }
  });

  // password toggle
  $(document).on('click', '.toggle-password', function () {
    const input = $(this).closest('.position-relative').find('input');
    const type = input.attr('type') === 'password' ? 'text' : 'password';
    input.attr('type', type);
    $(this).toggleClass('bi-eye bi-eye-slash');
  });

  //contact num filter (for signup)
  $('#contactNumber').on('input', function () {
    this.value = this.value.replace(/\D/g, '').slice(0, 10);
    $(this).valid();
  });
});
</script>


<script>
  //scroll hide/show navbar
  let lastScrollTop = 0;
  const navbar = document.getElementById("mainNavbar");

  window.addEventListener("scroll", function () {
    let scrollTop = window.scrollY;

    if (scrollTop > lastScrollTop) {
      navbar.classList.add("navbar-hidden");
    } else {
      navbar.classList.remove("navbar-hidden");
    }

    lastScrollTop = scrollTop;
  });

  document.addEventListener("DOMContentLoaded", () => {
  const banner = document.querySelector(".contact-banner");

  // resets the class to trigger animation each timethe  page loads
  banner.classList.remove("show");
  setTimeout(() => {
    banner.classList.add("show");
  }, 100); 
});
</script>

</body>
</html>