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
            background: url('{{ asset('images/flamingo.jpg') }}') no-repeat center center;
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
            max-width: 350px;
            width: 100%;
            padding: 20px;
            text-align: center;
            background-color: #fff;
        }

        .logo {
            margin-bottom: 20px;
        }

        .logo img {
            width: 180px;
            height: auto;
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

        .form-content {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            background-color: #fff;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
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
            border-radius: 8px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #0066FF;
        }

        .form-footer {
            margin-top: 10px;
            text-align: left;
        }

        .form-footer a {
            color: #00ADEF;
            text-decoration: none;
            font-size: 14px;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }

        /* Modal Overlay */
        .modal-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6); /* Dark overlay */
            
            z-index: 1;
        }

        /* Modal Styles */
        .modal {
            display: none; /* Hidden by default */
            position: absolute;
            bottom: 130px; /* Slightly above the form */
            left: 530px;
            right: 0;
            transform: translateX(50%); /* Shift right to make it slightly off-center */
            z-index: 2; /* Higher than the blur overlay */
            background-color: white;
            border-radius: 25px; /* Smoothly rounded corners */
            padding: 20px;
            width: 350px; /* Modal width */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }

        .modal-content a {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 15px 0;
            text-decoration: none;
            font-size: 18px;
            padding: 10px 15px;
            background-color: white;
            color: #333;
            font-weight: 500;
            border-radius: 12px;
            transition: background-color 0.2s ease-in-out;
        }

        .modal-content a i:first-child {
            color: #00ADEF;
            font-size: 20px;
            margin-right: 25px;
        }

        .modal-content a i:last-child {
            color: #00ADEF;
            font-size: 20px;
            margin-left: 30px;
        }

        .modal-content hr {
            border: none;
            border-top: 1px solid #ccc;
            margin: 15px 0;
        }

        .modal-content a:hover {
            background-color: #f0f0f0;
        }

        /* Close Button for Modal (optional) */
        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 18px;
            cursor: pointer;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="image-section"></div>
        <div class="form-section">
            <div class="form-box">
                <div class="logo">
                    <img src="{{ asset('images/pawsitive-logo.png') }}" alt="Pawsitive Logo">
                </div>

                <div class="tabs">
                    <a href="#" class="active">Admin Log In</a>
                </div>

                <div class="form-content">
                    <form action="#">
                        <div class="form-group">
                            <input type="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <button type="submit">Sign In</button>
                        </div>
                    </form>

                    <div class="form-footer">
                        <a href="#" id="forgotPassword">Forgot password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Overlay -->
    <div id="modalOverlay" class="modal-overlay"></div>

    <!-- Modal -->
    <div id="resetModal" class="modal">
        <div class="modal-content">
            <a href="#"><i class="fas fa-comment-alt"></i> <strong>Password Reset via SMS</strong> <i class="fas fa-chevron-right"></i></a>
            <hr>
            <a href="#"><i class="fas fa-envelope"></i> <strong>Password Reset via Email</strong> <i class="fas fa-chevron-right"></i></a>
        </div>
    </div>

    <script>
        // Get elements
        const modal = document.getElementById('resetModal');
        const modalOverlay = document.getElementById('modalOverlay');
        const forgotPasswordLink = document.getElementById('forgotPassword');
        const closeModal = document.getElementById('closeModal');

        // Show modal and overlay on clicking "Forgot password?"
        forgotPasswordLink.addEventListener('click', function(e) {
            e.preventDefault();
            modal.style.display = 'flex';
            modalOverlay.style.display = 'block'; // Show the overlay
        });

        // Close modal and overlay when clicking outside the modal content
        window.addEventListener('click', function(e) {
            if (e.target == modalOverlay) {
                modal.style.display = 'none';
                modalOverlay.style.display = 'none'; // Hide the overlay
            }
        });
    </script>
</body>
</html>
