// form submissions: handled by validation.js
// for authentication related functionality

// logout functionality
$(document).on('click', '#logoutBtn', function(e) {
    e.preventDefault();
    
    if (confirm('Are you sure you want to logout?')) {
        $.ajax({
            type: 'POST',
            url: '/website-popmart/db/logout_process.php',
            success: function(response) {
                // reload the page to update the header
                location.reload();
            },
            error: function() {
                alert('Error logging out. Please try again.');
            }
        });
    }
});

// if user it logged in, it prompts login modal to add to cart
$(document).on('click', 'a[href$="/cart.php"], a[href$="cart.php"], .add-to-cart', function(e) {
    if (window.IS_LOGGED_IN) return; // allow when logged in
    e.preventDefault();
    // inline feedback if login modal is already open
    if ($('#loginModal').length) {
        $('#loginModal').modal('show');
        // gentle note in the login modal
        const $box = $('#loginFeedback');
        if ($box.length) {
            $box.html('<div class="alert alert-warning py-2 px-3 mb-0" role="alert">Please log in to add items to your cart.</div>');
        }
    } else {
        // fallback: navigate to index where modal exists
        window.location.href = '/website-popmart/index.php#login';
    }
});
