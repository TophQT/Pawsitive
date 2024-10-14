<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=ssdevice-width, initial-scale=1.0">
  <title>Pawsitive - Enter Code</title>
  <link rel="stylesheet" href="/css/scode1.css">
</head>
<body>
<div class="container">
  <!-- Left Image Section -->
  <div class="image-section">
    <img src="{{ asset('images/flamingo.jpg') }}" alt="Flamingo">
  </div>

  <!-- Right Form Section -->
  <div class="form-section">
    <!-- Form Header with Sign In and Sign Up Buttons -->
    <div class="form-header">
      <button class="sign-in-btn">Admin Log In</button>
      <button class="sign-up-btn">Sign up</button>
    </div>

    <!-- Logo -->
    <div class="logo">
      <img src="pawsitive-logo.png" alt="Pawsitive Logo">
    </div>

    <!-- SMS Verification Section -->
    <h2>Forgot Password?</h2>
    <p>Don't worry! It happens. Please enter the code sent to <span> +32 123456789</span> <a href="#">Edit</a></p>

    <!-- Verification Code Input Boxes -->
    <div class="verification-inputs">
      <input type="text" maxlength="1">
      <input type="text" maxlength="1">
      <input type="text" maxlength="1">
      <input type="text" maxlength="1">
      <input type="text" maxlength="1">
      <input type="text" maxlength="1">
    </div>

    <!-- Resend Link with Timer -->
    <div class="resend-link">
      <p>Didn't get the code? <a href="#">Resend it</a> <span class="timer">45s</span></p>
    </div>

    <!-- Login Link -->
    <div class="login-link">
      <p>Already have an account? <a href="#">Log in</a></p>
    </div>
  </div>
</div>

</body>
</html>
