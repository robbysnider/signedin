<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
    <style>
        .fb-login-button {
            background-color: #1877f2;
            border: none;
            border-radius: 3px;
            color: white;
            cursor: pointer;
            font-family: Helvetica, Arial, sans-serif;
            font-size: 14px;
            font-weight: bold;
            padding: 7px 12px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
        }
    </style>
</head>
<body>
    <h1>Hello World</h1>
    <button onclick="openLoginPopup()" class="fb-login-button">Login with Facebook</button>

    <script>
        function openLoginPopup() {
            const width = 430;
            const height = 400;
            const left = (window.innerWidth - width) / 2;
            const top = (window.innerHeight - height) / 2;

            window.open('login.php', 'FacebookLogin', 
                `width=${width},height=${height},left=${left},top=${top},resizable=no`);
        }
    </script>
</body>
</html>
