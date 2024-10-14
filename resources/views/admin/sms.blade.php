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
    <img src="{{ asset('images/catstretch.jpg') }}" alt="Stretching cat">
  </div>

  <!-- Right Form Section -->
  <div class="form-section">
    <!-- Form Header with Sign In and Sign Up Buttons -->


    <!-- Logo -->
    <div class="logo">
      <img src="{{ asset('images/pawsitive-logo.png') }}" alt="Pawsitive Logo">
    </div>

    <!-- SMS Verification Section -->
    <h2>We just sent an SMS</h2>
    <p>Enter the security code we sent to +32 123456789 <a href="#">Edit</a></p>

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

  </div>
</div>

</body>
</html>
