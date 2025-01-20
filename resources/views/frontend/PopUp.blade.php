<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popup Login/Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <style>
        /* Popup styles */
        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            justify-content: center;
            align-items: center;
        }

        .popup-content {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            position: relative;
            width: 300px;
            max-width: 90%;
        }

        .popup .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            font-size: 20px;
        }

        .popup h3 {
            text-align: center;
            margin-bottom: 20px;
        }

        .popup form input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        .popup form button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .popup form button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <!-- Popup Modal -->
    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close-btn" onclick="closePopup()">&times;</span>
            <h3>Login / Register</h3>

            <!-- Tabs for Login/Signup -->
            <div id="loginForm">
                <form action="/login" method="POST">
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit">Login</button>
                </form>
                <p class="text-center">Don't have an account? <a href="javascript:void(0);" onclick="switchToRegister()">Sign Up</a></p>
            </div>

            <div id="registerForm" style="display:none;">
                <form action="/register" method="POST">
                    <input type="text" name="name" placeholder="Full Name" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit">Register</button>
                </form>
                <p class="text-center">Already have an account? <a href="javascript:void(0);" onclick="switchToLogin()">Login</a></p>
            </div>
        </div>
    </div>

    <!-- JavaScript to control Popup -->
    <script>
        // Show the popup on page load
        window.onload = function() {
            document.getElementById("popup").style.display = "flex";
        };

        // Close the popup
        function closePopup() {
            document.getElementById("popup").style.display = "none";
        }

        // Switch between login and register forms
        function switchToRegister() {
            document.getElementById("loginForm").style.display = "none";
            document.getElementById("registerForm").style.display = "block";
        }

        function switchToLogin() {
            document.getElementById("loginForm").style.display = "block";
            document.getElementById("registerForm").style.display = "none";
        }
    </script>
</body>

</html>
