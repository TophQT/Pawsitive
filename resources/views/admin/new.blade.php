<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="/css/new.css">
</head>
<body>
    <div class="container">
        <!-- Left Section with Flamingo Image -->
        <div class="image-section">
            <img src="{{ asset('images/flamingo.jpg') }}" alt="Flamingo">
        </div>

        <!-- Right Section with Form -->
        <div class="form-section">
            <div class="form-container">
                <img src="{{ asset('images/pawsitive-logo.png') }}" alt="Logo" class="logo">
                <h2>Create new password</h2>
                <form action="#">
                    <div class="input-group">
                        <label for="password">Choose Password</label>
                        <p class="instruction">At least 8 <strong>characters</strong>, containing a <strong>letter</strong> and a <strong>number</strong></p>
                        <input type="password" id="password" placeholder="Password">
                    </div>
                    <div class="input-group">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" id="confirm-password" placeholder="Password">
                    </div>
                    <button type="submit" class="confirm-button">Confirm</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
