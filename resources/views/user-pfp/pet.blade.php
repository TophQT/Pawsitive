<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="styles.css">
    <style>
/* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Inter', sans-serif;
    background-color: #DBDEEF;
    color: #000000;
    line-height: 1.6;
    overflow-x: hidden; /* Prevent horizontal scrolling */
}

/* Container */
.container {
    max-width: 1128px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Header Section */
.header {
    background-color: #FFFFFF;
    box-shadow: 0px 4px 30px rgba(0, 0, 0, 0.1);
    border-radius: 30px;
    margin-left: 5%;
    margin-right: 8%;
    margin-bottom: 50px;
    margin-top: 50px;
    width: 90%;
    height: 60px; /* Set header height */
    padding: 0 20px; /* Adjusted padding */
}

.header-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 100%; /* Ensure the content is vertically aligned */
    padding: 0; /* Removed excess padding */
    width: 100%; /* Ensure the container width adjusts properly */
}

.logo img {
    margin-left: 10px;
    width: 50px;
}

.nav ul {
    list-style: none;
    display: flex;
    gap: 40px;
    margin-left: 250px;
}

.nav ul li a {
    text-decoration: none;
    font-size: 16px;
    color: #474747;
    font-weight: 400;
}

.nav ul li a.active {
    font-weight: 700;
    background: linear-gradient(90deg, #03C4E7 0%, #0047FF 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

        .user-actions {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .book-now {
            background-color: #00ADEF;
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 20px;
            cursor: pointer;
            width: 120px;
            height: 40px;
            margin-left: 110px;
        }

        .user-info {
            display: flex;
            align-items: center;
            margin-right: 90px;
        }

        .user-avatar {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            margin-right: 10px;
        }
        
        main {
            margin: 50px auto;
            padding: 0 50px;
            max-width: 1200px;
            display: flex;
            justify-content: center;
        }

        .add-pet-section {
            display: flex;
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 1100px; /* Set the modal width to 900px */
            margin: 0 auto; /* Centers the section */
        }

        .pet-image {
            flex: 1;
            max-width: 50%;
        }

        .pet-image img {
            width: 100%;
            height: auto;
            border-radius: 15px;
            object-fit: cover;
        }

        .form-section {
            flex: 1;
            max-width: 50%;
            padding-left: 20px; /* Add padding to separate from the image */
        }

        .form-section h1 {
            font-size: 2.2rem;
            margin-bottom: 30px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 25px; /* Increased space between form elements */
        }

        .upload-label {
            display: inline-block;
            margin-bottom: 15px;
            color: #333;
            font-weight: bold;
        }

        .image-upload {
            display: flex;
            align-items: center; /* Align items vertically in the center */
            gap: 10px; /* Adjust gap between image and text */
            cursor: pointer;
        }

        .image-upload img {
            width: 50px; /* Adjust the width */
            height: 50px; /* Adjust the height */
            border-radius: 8px;
            object-fit: cover; /* Ensures the image fits within the container */
        }

        .image-upload span {
            margin-right: 250px;
            flex-grow: 1; /* Make the text take up the remaining space */
            text-align: left; /* Align text to the left */
            font-size: 15px;
        }

        .file-upload {
            display: none; /* Hide the file input */
        }

        .input-row {
            display: flex;
            justify-content: space-between;
            gap: 30px; /* Increased space between the two columns */
        }

        .gender-toggle {
            display: flex;
            gap: -15px;
        }

        .gender-btn {
            padding: 10px 20px;
            border: 0px solid #ddd;
            border-radius: 8px;
            background: white;
            cursor: pointer;
            transition: background 0.3s;
        }

        .gender-btn.active {
            background: #00ADEF;
            color: white;
        }

        .gender-btn:hover {
            background: #f0f0f0;
        }

        .form-group input, 
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
        }

        textarea {
            resize: none;
        }

        .gender-group .radio-group {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .radio-group label {
            margin-right: 10px;
        }

        .submit-container {
            display: flex;
            justify-content: flex-end; /* Aligns the button to the right */
            margin-top: 80px; /* Adds space above the button */
        }

        .submit-btn {
            background: linear-gradient(90deg, #00ADEF 0%, #06D6A0 100%);
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: background 0.3s ease;
        }

        .submit-btn:hover {
            background: linear-gradient(90deg, #06D6A0 0%, #00ADEF 100%);
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header class="header">
        <div class="container header-container">
            <div class="logo">
                <img src="{{ asset('images/pawsitive_logo.jpg') }}" alt="Pawsitive Logo">
            </div>
            <nav class="nav">
                <ul>
                    <li><a href="#" class="active">Home</a></li>
                    <li><a href="{{ route('services.index') }}">Services</a></li>
                    <li><a href="{{ route('petcare.index') }}">PetCare</a></li>
                </ul>
            </nav>
            <button class="book-now">Book Now</button>
            <div class="user-info">
                <img class="user-avatar" src="{{ asset('images/bg.png') }}" alt="User">
                <div>
                    <span>Bogart</span><br>
                    <small>Pet Lover</small>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="add-pet-section">
            <div class="pet-image">
                <img src="{{ asset('images/dogo.jpg') }}" alt="Dog Image">
            </div>
            <div class="form-section">
                <h1>Add Pet</h1>

                <!-- Form to submit pet data -->
                <form action="{{ route('pets.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf <!-- CSRF protection -->

                    <div class="form-group">
                        <div class="image-upload" onclick="document.getElementById('file-upload').click();">
                            <!-- Updated form input for the pet image -->
                            <input type="file" id="file-upload" name="image" accept="image/*" class="file-upload"> <!-- Changed to 'image' -->
                            <img id="upload-preview" src="{{ asset('images/upload.png') }}" alt="Upload Pet Image" class="pet-image" />
                            <span>Upload Pet Image</span>
                        </div>
                    </div>

                    <div class="input-row">
                        <div class="form-group">
                            <label for="dog-name">Dog Name</label>
                            <input type="text" id="dog-name" name="name" placeholder="Dog's Name..." required>
                        </div>
                        <div class="form-group">
                            <label for="dog-weight">Dog Weight (Kg)</label>
                            <input type="number" id="dog-weight" name="weight" placeholder="Dog's Weight..." required>
                        </div>
                    </div>

                    <div class="input-row">
                        <div class="form-group">
                            <label for="dog-breed">Dog Breed</label>
                            <input type="text" id="dog-breed" name="breed" placeholder="Dog's Breed..." required>
                        </div>
                        <div class="form-group gender-group">
                            <label>Gender</label>
                            <div class="gender-toggle">
                                <button type="button" id="male" class="gender-btn active">Male</button>
                                <button type="button" id="female" class="gender-btn">Female</button>
                                <input type="hidden" id="gender" name="gender" value="male">
                            </div>
                        </div>
                    </div>

                    <div class="input-row">
                        <div class="form-group">
                            <label for="dob">Date of Birth</label>
                            <input type="date" id="dob" name="dob" required>
                        </div>
                        <div class="form-group">
                            <label for="color">Color</label>
                            <div style="display: flex; align-items: center;">
                                <input type="color" id="color" name="color" value="#f16749" style="display: none;">
                                <div id="color-display" style="width: 30px; height: 30px; border: 1px solid #ddd; border-radius: 4px; margin-left: 10px; background-color: #f16749; cursor: pointer;"></div>
                                <span id="color-hex" style="margin-left: 10px; font-weight: bold;">#f16749</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message">Any Other Message</label>
                        <textarea id="message" name="message" placeholder="Your Message Here..."></textarea>
                    </div>

                    <div class="submit-container">
                        <button type="submit" class="submit-btn">Done</button>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <script>
        document.getElementById('file-upload').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('upload-preview').src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });

        // Open color picker when color-display is clicked
        document.getElementById('color-display').addEventListener('click', function() {
            document.getElementById('color').click();
        });

        // Update color-display and hex value when a color is picked
        document.getElementById('color').addEventListener('input', function(event) {
            const selectedColor = event.target.value;
            document.getElementById('color-display').style.backgroundColor = selectedColor;
            document.getElementById('color-hex').textContent = selectedColor;
        });

        // Gender toggle functionality
        document.querySelectorAll('.gender-btn').forEach(button => {
            button.addEventListener('click', function() {
                document.querySelectorAll('.gender-btn').forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');
                document.getElementById('gender').value = button.id;
            });
        });
    </script>
</body>
</html>