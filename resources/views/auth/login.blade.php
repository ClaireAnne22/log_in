<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
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
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 320px;
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
            width: calc(100% - 20px);
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        .password-wrapper {
            display: flex;
            align-items: center;
            position: relative;
        }

        .password-wrapper input {
            width: 100%;
            padding-right: 40px;
        }

        .toggle-password {
            position: absolute;
            right: 10px;
            cursor: pointer;
            color: #007bff;
            font-size: 14px;
            background: none;
            border: none;
            outline: none;
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
            color: #555;
        }

        a {
            color: #007bff;
            text-decoration: none;
            font-size: 14px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="input-group">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-group password-wrapper">
                <input type="password" name="password" id="password" placeholder="Password" required>
                <button type="button" class="toggle-password" onclick="togglePassword()">Show</button>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
        <p class="register-text">Don't have an account? <a href="{{ route('register') }}">Register</a></p>
    </div>

    <script>
        function togglePassword() {
            let passwordField = document.getElementById("password");
            let toggleButton = document.querySelector(".toggle-password");
            if (passwordField.type === "password") {
                passwordField.type = "text";
                toggleButton.textContent = "Hide";
            } else {
                passwordField.type = "password";
                toggleButton.textContent = "Show";
            }
        }
    </script>
</body>
</html>
