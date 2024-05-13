<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS.css">
    <style> 
        body {
            font-family: Source Sans Pro;
            background-image: url('https://i.ibb.co/W6bQnXw/background.jpg'); /* Background image URL */
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
        }
        .logo {
            display: flex;
            margin-bottom: 10px;
            margin-top: 10px;
            max-width: 40%;
            height: auto;
            border: none;
        }
        .login-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color:white; /* Semi-transparent white background */
            padding: 40px;
            border-radius: 10px;
            width: 400px; /* Adjust the width as needed */
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        .login-container .form-group {
            margin-bottom: 20px;
        }
        .login-container .form-control {
            width: 100%;
            height: 40px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
            padding: 10px;
        }
        .login-container .btn-login {
            width: 100%;
            height: 40px;
            border-radius: 5px;
            font-size: 16px;
        }
        .login-container .btn-google {
            background-color: #DB4437;
            color: white;
            border: none;
            margin-top: 10px;
            background-image: url('https://i.ibb.co/xF3j3rZ/google-logo.png'); /* Google logo URL */
            background-size: 24px; /* Adjust size as needed */
            background-repeat: no-repeat;
            background-position: 10px 50%; /* Position the logo */
            padding-left: 40px; /* Add padding for the logo */
        }
        .login-container .btn-google:hover {
            background-color: #C13505;
        }
    </style>
</head>
<body>
    <div id="page-wrapper" class="d-print-block">
        <div class="navbar navbar-light bg-white navbar-expand shadow" aria-label="Site navigation">
            <img src="//khub.clc.pshs.edu.ph/pluginfile.php/1/theme_moove/logo/1705109989/moodle-lg.png" class="logo mr-1" alt="PSHS-CLC">
        </div>
        <div class="login-container">
            <h2>Login</h2>
            <form id="login-form">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
                </div>
                <button type="submit" onclick="window.location.href='/dashboard';" class="btn btn-primary">Login</button>
            </form>
            <button class="btn btn-google" onclick="displayValues()">Display Values</button>
        </div>
    </div>
    <script>
        function displayValues() {
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            alert(`Name: ${name}\nEmail: ${email}\nPassword: ${password}`);
        }
    </script>
</body>
</html>


