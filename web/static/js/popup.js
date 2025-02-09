document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('loginForm');

    loginForm.addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(loginForm);

        fetch('verify_login.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // If we're in a popup window
                if (window.opener) {
                    // Redirect the opener (parent) window
                    window.opener.location.href = data.redirect_url;
                    // Close the popup
                    window.close();
                } else {
                    // If not in popup, redirect current window
                    window.location.href = data.redirect_url;
                }
            } else {
                alert(data.message || 'Login failed');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred during login');
        });
    });
});