/* ================= SCRIPTS ================= */


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