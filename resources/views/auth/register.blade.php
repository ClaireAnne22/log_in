<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f2f5;
            margin: 0;
        }

        .container {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .input-group {
            position: relative;
            width: 100%;
            margin-bottom: 15px;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            display: block;
            box-sizing: border-box;
        }

        .password-wrapper {
            position: relative;
        }

        .password-wrapper input {
            padding-right: 40px; /* Space for the button */
        }

        .toggle-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #007bff;
            font-size: 14px;
            background: none;
            border: none;
            outline: none;
            padding: 5px;
        }

        .btn {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .register-text {
            margin-top: 15px;
            font-size: 14px;
            color: #333;
        }

        .register-text a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        .register-text a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Create an Account</h2>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="input-group">
                <input type="text" name="name" placeholder="Full Name" required>
            </div>
            <div class="input-group">
                <input type="email" name="email" placeholder="Email Address" required>
            </div>
            <div class="input-group password-wrapper">
                <input type="password" name="password" id="password" placeholder="Password" required>
                <button type="button" class="toggle-password" onclick="togglePassword('password', this)">Show</button>
            </div>
            <div class="input-group password-wrapper">
                <input type="password" name="password_confirmation" id="confirm_password" placeholder="Confirm Password" required>
                <button type="button" class="toggle-password" onclick="togglePassword('confirm_password', this)">Show</button>
            </div>
            <button type="submit" class="btn">Register</button>
        </form>
        <p class="register-text">Already have an account? <a href="{{ route('login') }}">Login</a></p>
    </div>

    <script>
        function togglePassword(fieldId, button) {
            let passwordField = document.getElementById(fieldId);
            passwordField.type = passwordField.type === "password" ? "text" : "password";
            button.textContent = passwordField.type === "password" ? "Show" : "Hide";
        }
    </script>
</body>
</html>
