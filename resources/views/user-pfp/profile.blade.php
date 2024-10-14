<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
    margin-left: -90px;
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
    width: 150px;
    height: 40px;
    margin-left: 70px;
}

/* Add space between icon and text */
.book-now i {
    margin-right: 5px; /* Adjust the value to increase or decrease space */
}

        .user-info {
            display: flex;
            align-items: center;
        }

        .user-avatar {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            margin-right: 10px;
        }
        
        .container {
    width: 80%;
    margin: 30px auto;
}

.profile-section {
    background-color: white;
    border-radius: 15px;
    padding: 30px;
    box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
}

.profile-header {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.profile-header .avatar {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    margin-right: 20px;
}

.profile-info {
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}

.profile-info h2 {
    font-size: 24px;
    font-weight: 600;
}

.profile-info p {
    font-size: 16px;
    color: #777;
}

.edit-btn {
    background-color: #00A6E1;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 14px;
}

.profile-details {
    display: flex;
    justify-content: flex-start;
    gap: 20px;
    margin-top: 20px;
}

.input-group {
    width: 48%;
    display: flex;
    flex-direction: column;
}

.input-group label {
    font-size: 14px;
    color: #777;
    margin-bottom: 8px;
}

.input-group input {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-size: 16px;
    color: #333;
}

.email-section {
    margin-top: 20px;
}

.email-section p {
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 10px;
}

.email-section .email {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #F9F9F9;
    padding: 12px;
    border-radius: 8px;
    margin-bottom: 10px;
    font-size: 14px;
}

.email-section .email input {
    border: none;
    background: none;
    font-size: 14px;
    color: #333;
}

.add-email-btn {
    background-color: #EDF5FF;
    color: #00A6E1;
    padding: 10px 20px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 14px;
    font-weight: 600;
}

/* New background and padding for the wrapper */
.content-wrapper {
    background-color: white;
    border-radius: 15px;
    padding: 30px;
    box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
}

/* Cards section margin adjusted to ensure spacing inside the wrapper */
.cards-section {
    display: flex;
    justify-content: space-between;
    gap: 20px;
    flex-wrap: wrap;
    margin-top: 20px; /* Adjust to create space between profile and cards */
}

/* Card layout */
.card {
    display: flex;
    background-color: white;
    border-radius: 12px;
    padding: 20px;
    box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.1);
    width: calc(50% - 10px); /* Ensure two cards per row */
    margin-bottom: 20px;
    align-items: center; /* Align image and content vertically centered */
}

/* Card image */
.card-image {
    flex-shrink: 0; /* Prevent the image from shrinking */
    width: 120px; /* Set a fixed width for the image container */
    margin-right: 20px; /* Add spacing between the image and the text */
}

.card-image img {
    width: 100%;
    height: auto; /* Keep the image proportional */
    border-radius: 10px;
}

/* Card content */
.card-content {
    flex-grow: 1; /* Allow the text to take up the remaining space */
    text-align: left;
}

.card-content h3 {
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 5px;
}

.card-content p {
    font-size: 14px;
    color: #777;
    margin-bottom: 10px;
}

/* Read more button with linear gradient */
.read-more {
    background: linear-gradient(90deg, #00A6E1, #0061D1); /* Adjust the colors and angle as needed */
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 13px;
    cursor: pointer;
    font-size: 14px;
    font-weight: 200; /* Make the text bold */
    transition: background 0.3s ease; /* Smooth transition on hover */
    width: 250px;
}

/* Optional: Add hover effect */
.read-more:hover {
    background: linear-gradient(90deg, #0061D1, #00A6E1); /* Reverse the gradient on hover */
}


.add-pet-btn {
    display: block;
    width: 15%;
    background: linear-gradient(90deg, #00A6E1, #0061D1);
    color: white;
    padding: 15px 0;
    border: none;
    border-radius: 15px;
    font-size: 16px;
    cursor: pointer;
    margin-top: 20px;
}

/* Sidebar */
.sidebar {
    width: 60px; /* Fixed width for the sidebar */
    background-color: #FFFFFF;
    box-shadow: 0px 4px 30px rgba(0, 0, 0, 0.1);
    border-radius: 15px;
    padding: 20px;
    position: fixed; /* Fix the sidebar to the left */
    top: 200px; /* Align to the top */
    left: 200px; /* Align to the left */
    height: 20%; /* Full height */
}



        /* Sidebar list styling */
        .sidebar ul {
            display: flex;
            flex-direction: column; /* Align icons vertically */
            padding: 0; /* Remove default padding */
        }

        .sidebar ul li {
            margin-bottom: 20px; /* Space between icons */
        }

        .sidebar ul li a {
            font-size: 24px; /* Icon size */
            color: #474747; /* Icon color */
            transition: color 0.3s ease; /* Smooth color transition */
        }

        .sidebar ul li a:hover {
            color: #00ADEF; /* Change color on hover */
        }

        /* Footer */
        .footer {
            text-align: center;
            padding: 20px 0;
            margin-top: 50px;
            color: #777;
        }

    </style>
</head>
<body>
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
        <button class="book-now" onclick="window.location.href='{{ route('main.index') }}'"><i class="bi bi-book"></i>Book Now</button>
        <div class="user-info">
            <img class="user-avatar" src="{{ asset('images/bg.png') }}" alt="User">
            <div>
                @if(Auth::check())
                    <span>{{ Auth::user()->first_name }}</span><br>
                    <small>Pet Lover</small>
                @else
                    <span>Guest</span><br>
                    <small>Please log in</small>
                @endif
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="content-wrapper">
        <div class="profile-section">
            <div class="profile-header">
                <img src="{{ asset('images/bg.png') }}" class="avatar" alt="User Avatar">
                <div class="profile-info">
                @if(Auth::check())
                <h2>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h2>
                <p>{{ Auth::user()->email }}</p>
            @else
                <h2>Guest</h2>
            @endif
        </div>
    </div>

            <!-- Profile Update Form -->
            <form action="{{ route('profile.update') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="profile-details">
                    <div class="input-group">
                        <label for="firstName">First Name</label>
                        <input type="text" id="firstName" name="first_name" value="{{ old('first_name', $user->first_name ?? '') }}" placeholder="Your First Name" required>
                    </div>
                    <div class="input-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" id="lastName" name="last_name" value="{{ old('last_name', $user->last_name ?? '') }}" placeholder="Your Last Name" required>
                    </div>
                </div>

                <div class="profile-details">
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email', $user->email ?? '') }}" placeholder="Your Email" required>
                    </div>
                </div>

                <button class="edit-btn" type="submit">Update Profile</button>
            </form>

            <div class="email-section">
                <p>My Email Address</p>
                <div class="email">
                    <input type="text" value="{{ $user->email ?? '' }}" readonly>
                    <span>Last updated: {{ isset($user) ? $user->updated_at->diffForHumans() : 'N/A' }}</span>
                </div>
            </div>
        </div>
        <div class="cards-section">
    <div class="card">
        <div class="card-image">
            <img src="{{ asset('images/cat-stress.jpg') }}" alt="Card Image">
        </div>
        <div class="card-content">
            <h3>Stress in Cats</h3>
            <p>Behaviour</p>
            <button class="read-more" onclick="toggleDetails(this)">View Details</button>
            <div class="card-details" style="display: none;">
                <p>Stress can manifest in various ways in cats. Common signs include hiding, aggression, and changes in eating habits. Understanding these signs can help in managing your cat's stress levels effectively.</p>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-image">
            <img src="{{ asset('images/diabetes-cat.jpg') }}" alt="Card Image">
        </div>
        <div class="card-content">
            <h3>Diabetes in Cats</h3>
            <p>Health</p>
            <button class="read-more" onclick="toggleDetails(this)">View Details</button>
            <div class="card-details" style="display: none;">
                <p>Diabetes mellitus is a common condition in cats, characterized by high blood sugar levels. Early diagnosis and management are crucial for a healthy life.</p>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-image">
            <img src="{{ asset('images/cat-love.jpg') }}" alt="Card Image">
        </div>
        <div class="card-content">
            <h3>5 Signs Your Cat Loves You</h3>
            <p>Behaviour</p>
            <button class="read-more" onclick="toggleDetails(this)">View Details</button>
            <div class="card-details" style="display: none;">
                <p>Your cat shows affection in various ways, such as purring, kneading, and bringing you "gifts." Understanding these signs can strengthen your bond.</p>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-image">
            <img src="{{ asset('images/cat-myths.jpg') }}" alt="Card Image">
        </div>
        <div class="card-content">
            <h3>12 Common Cat Myths Debunked</h3>
            <p>Essentials</p>
            <button class="read-more" onclick="toggleDetails(this)">View Details</button>
            <div class="card-details" style="display: none;">
                <p>Many myths about cats can lead to misunderstandings. For example, not all cats hate water, and they can be trained just like dogs.</p>
            </div>
        </div>
    </div>
</div>


<button class="add-pet-btn" onclick="window.location='{{ route('user-pfp.pet') }}'">+ Add Pet</button>

    </div>
</div> <!-- End content-wrapper -->

<aside class="sidebar">
    <ul>
        <li><a href="{{ route('pets.index') }}"><i class="fas fa-paw"></i></a></li>
        <li><a href="#"><i class="fas fa-calendar-alt"></i></a></li>
        <li><a href="#"><i class="fas fa-comments"></i></a></li>
    </ul>
</aside>

<script>
    function toggleDetails(button) {
        const details = button.nextElementSibling;
        if (details.style.display === "none") {
            details.style.display = "block";
            button.textContent = "Hide Details"; // Change button text to "Hide Details"
        } else {
            details.style.display = "none";
            button.textContent = "View Details"; // Change button text back to "View Details"
        }
    }
</script>
</body>
</html>
