<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Pawsitive</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            height: 100vh;
        }

        .image-section {
            flex: 1;
            background: url('{{ asset('images/arf.jpg') }}') no-repeat center center;
            background-size: cover;
        }

        .form-section {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #fff;
            padding: 20px;
        }

        .form-box {
            max-width: 350px; /* Adjust the max width for a tighter layout */
            width: 100%;
            padding: 20px;
            text-align: center;
            background-color: #fff;
        }

        .logo {
            margin-bottom: 1px;
        }

        .logo img {
            width: 90px;
            height: auto;
            margin-bottom: 15px;
        }

        .logo h2 {
            font-family: 'Poppins', sans-serif;
            color: black;
            font-size: 27px;
            font-weight: 600;
            margin-top: -5px;
        }

        .tabs {
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
        }

        .tabs a {
            padding: 10px 30px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
            margin: 0;
            border-radius: 0;
            flex: 1;
        }

        .tabs a:first-child {
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
        }

        .tabs a:last-child {
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
        }

        .tabs a.active {
            background: linear-gradient(to right, #00ADEF, #0066FF);
            color: white;
        }

        .tabs a:hover {
            background: #00ADEF;
            color: white;
        }

        .tabs a {
            background-color: #f0f0f0;
            color: #333;
        }

        .form-content {
            border: 1px solid #ccc; /* Adds a border */
            border-radius: 10px; /* Rounds the corners for a smooth design */
            padding: 20px;
            background-color: #fff;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group input {
            width: 100%;
            padding: 12px; /* Adjusted for better spacing */
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 8px; /* Rounded input fields */
            font-size: 16px;
            box-sizing: border-box;
        }

        .form-group button {
            width: 100%;
            padding: 12px;
            background: linear-gradient(to right, #00ADEF, #0066FF);
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 8px; /* Rounded button */
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #0066FF;
        }

        .form-footer {
            margin-top: 10px;
        }

        .form-footer a {
            color: #00ADEF;
            text-decoration: none;
            font-size: 14px;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }
        .signup-form {
            display: flex;
            flex-direction: column;
        }

        .input-group {
            display: flex;
            justify-content: space-between;
            gap: 10px; /* Space between input fields inside the group */
            margin-bottom: 15px; /* Space below the input group */
        }

        .input-group input {
            width: 48%;
        }

        input, button {
            padding: 15px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }

        input::placeholder {
            color: #999;
        }

        .checkbox-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .checkbox-group input {
            margin-right: -105px;
            margin-bottom: 2px;
        }

        .terms {
            font-size: 14px;
            margin-bottom: 20px;
        }

        .create-account-btn {
            background-color: #1A73E8;
            color: white;
            border: none;
            cursor: pointer;
            height: 50px;
        }

        .google-btn {
            background-color: white;
            color: #555;
            border: 1px solid #ddd;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 50px;
        }

        .google-btn img {
            width: 18px;
            margin-right: 10px;
        }

        .footer {
            text-align: center;
        }

        .footer a {
            color: #1A73E8;
            text-decoration: none;
        }

        .button-container {
            display: flex;
            gap: 10px; /* Space between the buttons */
        }

        .button-container button {
            flex: 1; /* Ensure buttons take up equal space */
        }

        </style>
</head>
<body>
    <div class="container">
        <div class="image-section"></div>
        <div class="form-section">
            <div class="form-box">

                <div class="tabs">
                    <a href="{{ route('custom-auth.login') }}">Sign In</a>
                    <a href="#" class="active">Sign Up</a>
                </div>

                <div class="logo">
                    <img src="{{ asset('images/pawsitive-logo.png') }}" alt="Logo">
                    <h2>Create Account</h2>
                </div>
                <form class="signup-form" method="POST" action="{{ route('custom-auth.signup.submit') }}">
                    @csrf <!-- Include CSRF token for form protection -->
                    <div class="input-group">
                        <input type="text" name="first_name" placeholder="First Name" required>
                        <input type="text" name="last_name" placeholder="Last Name" required>
                    </div>
                    <input type="email" name="email" placeholder="Email or Phone Number" required>
                    <div class="input-group">
                        <input type="password" name="password" placeholder="Password" required>
                        <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
                    </div>
                    <div class="checkbox-group">
                        <a href="{{ route('custom-auth.forgot1') }}" class="forgot-password">Forgot Password?</a>
                    </div>
                    <div class="terms">
                        <input type="checkbox" id="terms" required>
                        <label for="terms">I agree to all the <a href="#">Terms and Privacy Policy</a></label>
                    </div>
                    <div class="button-container">
                        <button type="submit" class="create-account-btn">Create Account</button>
                        <button type="button" class="google-btn">
                            <img src="{{ asset('images/google-icon.png') }}" alt="Google Icon">
                            Sign in with Google
                        </button>
                    </div>
                </form>
                <div class="footer">
                    <p>Already have an account? <a href="{{ route('custom-auth.login') }}">Log in</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
