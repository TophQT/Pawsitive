<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=ssdevice-width, initial-scale=1.0">
  <title>Pawsitive - Verify Phone</title>
  <link rel="stylesheet" href="/css/vf1.css">
</head>
<body>
  <div class="container">
    <!-- Left Image Section -->
    <div class="image-section">
      <img src="{{ asset('images/catstretch.jpg') }}" alt="Stretching Cat">
    </div>

    <!-- Right Form Section -->
    <div class="form-section">
      <div class="form-header">
        <button class="sign-in-btn">Sign in</button>
        <button class="sign-up-btn">Sign up</button>
      </div>

      <div class="logo">
        <img src="pawsitive-logo.png" alt="Pawsitive Logo">
      </div>

      <h2>Verify your phone number with code</h2>
      <p>We'll send you a code. It helps keep your account secure</p>

      <div class="phone-input">
        <select>
          <option value="+32">🇧🇪 +32</option>
          <!-- Add more country codes as needed -->
        </select>
        <input type="text" placeholder="Phone number">
      </div>

      <button class="send-code-btn">Send Code</button>

      <p class="login-link">Already have an account? <a href="#">Log in</a></p>
    </div>
  </div>
</body>
</html>
