<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pet</title>
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
            overflow-x: hidden;
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
            margin: 50px 5% 50px 5%;
            width: 90%;
            height: 60px;
            padding: 0 20px;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 100%;
            padding: 0;
            width: 100%;
        }

        .logo img {
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
            transition: color 0.3s;
        }

        .nav ul li a:hover {
            color: #00ADEF; /* Change color on hover */
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
            transition: background-color 0.3s;
        }

        .book-now:hover {
            background-color: #007bb5; /* Darken on hover */
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

        .edit-pet-section {
            display: flex;
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 1100px;
            margin: 0 auto;
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
            padding-left: 20px;
        }

        .form-section h1 {
            font-size: 2.2rem;
            margin-bottom: 30px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .upload-label {
            display: inline-block;
            margin-bottom: 15px;
            color: #333;
            font-weight: bold;
        }

        .image-upload {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            transition: background-color 0.3s;
            padding: 10px;
            border: 1px dashed #ddd; /* Dashed border for the upload area */
            border-radius: 8px;
        }

        .image-upload:hover {
            background-color: #f9f9f9; /* Light gray on hover */
        }

        .image-upload img {
            width: 50px;
            height: 50px;
            border-radius: 8px;
            object-fit: cover;
        }

        .image-upload span {
            flex-grow: 1;
            text-align: left;
            font-size: 15px;
        }

        .file-upload {
            display: none;
        }

        .input-row {
            display: flex;
            justify-content: space-between;
            gap: 30px;
        }

        .gender-toggle {
            display: flex;
            gap: -15px;
        }

        .gender-btn {
            padding: 10px 20px;
            border: 1px solid #ddd;
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
            transition: border-color 0.3s;
        }

        .form-group input:focus, 
        .form-group textarea:focus {
            border-color: #00ADEF; /* Highlight border on focus */
            outline: none;
        }

        textarea {
            resize: none;
        }

        .submit-container {
            display: flex;
            justify-content: flex-end;
            margin-top: 80px;
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

        @media (max-width: 768px) {
            .edit-pet-section {
                flex-direction: column; /* Stack on smaller screens */
            }

            .pet-image, .form-section {
                max-width: 100%; /* Full width on small screens */
            }

            .nav ul {
                flex-direction: column; /* Stack nav items on small screens */
                margin-left: 0;
            }

            .nav ul li {
                margin: 5px 0; /* Space out nav items */
            }
        }
        /* Color Picker Form Group Styling */
.color-picker-group {
    display: flex;
    align-items: center;
    gap: 20px;
}

.color-picker-wrapper {
    display: flex;
    align-items: center;
    gap: 15px;
}

.color-picker-wrapper input[type="color"] {
    width: 50px;
    height: 40px;
    cursor: pointer;
    padding: 0;
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
        <section class="edit-pet-section">
            <div class="pet-image">
                <!-- Image preview -->
                @if($pet->image)
                    <img src="{{ asset('storage/' . $pet->image) }}" alt="{{ $pet->name }}">
                @else
                    <img src="{{ asset('images/default_pet.png') }}" alt="Default Pet Image">
                @endif
            </div>
            <div class="form-section">
                <h1>Edit Pet</h1>

                <!-- Edit Pet Form -->
                <form action="{{ route('pets.update', $pet->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label class="upload-label">Change Pet Image:</label>
                        <div class="image-upload">
                            <label for="image">
                                <img src="{{ asset($pet->image ? 'storage/' . $pet->image : 'images/default_pet.png') }}" alt="Pet Image" id="imagePreview">
                                <span>Upload a new image</span>
                            </label>
                            <input type="file" name="image" id="image" class="file-upload" accept="image/*" onchange="previewImage(event)">
                        </div>
                    </div>

                    <div class="input-row">
                        <div class="form-group">
                            <label for="pet_name" class="upload-label">Pet Name:</label>
                            <input type="text" id="pet_name" name="name" value="{{ old('name', $pet->name) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="weight" class="upload-label">Weight:</label>
                            <input type="number" id="weight" name="weight" value="{{ old('weight', $pet->weight) }}" required>
                        </div>
                    </div>

                    <div class="input-row">
                        <div class="form-group">
                            <label for="breed" class="upload-label">Breed:</label>
                            <input type="text" id="breed" name="breed" value="{{ old('breed', $pet->breed) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="gender" class="upload-label">Gender:</label>
                            <div class="gender-toggle">
                                <button type="button" class="gender-btn {{ $pet->gender === 'Male' ? 'active' : '' }}" onclick="setGender('Male')">Male</button>
                                <button type="button" class="gender-btn {{ $pet->gender === 'Female' ? 'active' : '' }}" onclick="setGender('Female')">Female</button>
                                <input type="hidden" name="gender" id="gender" value="{{ old('gender', $pet->gender) }}">
                            </div>
                        </div>
                    </div>

<!-- Color Picker Form Group -->
<div class="form-group color-picker-group">
    <label for="color" class="upload-label">Color:</label>
    <div class="color-picker-wrapper">
        <input type="color" id="color" name="color" value="{{ old('color', $pet->color) }}" required onchange="updateColorPreview()">
    </div>
</div>

                    <div class="form-group">
                        <label for="dob" class="upload-label">Date of Birth:</label>
                        <input type="date" id="dob" name="dob" value="{{ old('dob', $pet->dob) }}" required>
                    </div>

                    <div class="form-group">
                        <label for="message" class="upload-label">Additional Message:</label>
                        <textarea id="message" name="message" rows="4">{{ old('message', $pet->message) }}</textarea>
                    </div>

                    <div class="submit-container">
                        <button type="submit" class="submit-btn">Update Pet</button>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <script>
        function previewImage(event) {
            const imagePreview = document.getElementById('imagePreview');
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        }

        function setGender(gender) {
            document.getElementById('gender').value = gender;
            const buttons = document.querySelectorAll('.gender-btn');
            buttons.forEach(button => {
                button.classList.remove('active');
                if (button.textContent === gender) {
                    button.classList.add('active');
                }
            });
        }

        function updateColorPreview() {
        const colorInput = document.getElementById('color');
        const colorPreview = document.getElementById('color-preview');
        colorPreview.style.backgroundColor = colorInput.value; // Set the preview to the selected color
    }
    </script>
</body>
</html>
