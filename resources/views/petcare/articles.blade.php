<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Care - Why Dogs Bark</title>
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

/* Buttons */
.login-btn {
    display: flex;
    gap: 10px; /* Space between the buttons */
}

.login-btn .button {
    background: linear-gradient(90deg, #03C4E7 0%, #0047FF 100%);
    padding: 10px 40px;
    border-radius: 20px;
    color: #F5F5F5;
    font-weight: 520;
    text-decoration: none;
    font-size: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px; /* Space between the icon and text */
}

.login-btn .button svg {
    width: 10px;
    height: 16px;
}

/* Book Now Button */
.book-btn {
    background: linear-gradient(90deg, #03C4E7 0%, #0047FF 100%);
    padding: 10px 40px;
    border-radius: 20px;
    color: #F5F5F5;
    font-weight: 500;
    text-decoration: none;
    font-size: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px; /* Space between the icon and text */
}

.book-btn .button svg {
    width: 10px;
    height: 16px;
}

.book-btn {
    display: inline-flex;
}

.category-section {
    padding: 20px 30px;
    margin-left: 3%;
    margin-bottom: 35px;
}

.category-title {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
}

.category-tabs {
    display: flex;
    gap: 1px;
    margin-bottom: 30px;
    background-color: #1890ff;
    width: 97%;
}

.tab {
    background-color: #1890ff;
    padding: 10px;
    border-radius: 25px;
    color: white;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 180px;
    height: 170px;
    cursor: pointer;
    transition: 0.3s ease;
}

.tab.active {
    background-color: #1da7ff;
}

.tab:hover {
    background-color: #1da7ff;
}

.tab-icon {
    width: 80px;
    height: auto;
    margin-bottom: 10px;
}

.search-bar {
    margin-bottom: 30px;
    text-align: center;
}

.search-input {
    padding: 10px 20px;
    width: 40%;
    border: 1px solid #ccc;
    border-radius: 25px;
    font-size: 16px;
}

/* Breadcrumb styling */
.breadcrumb {
    font-size: 0.85rem;
    color: #999;
    margin-bottom: 20px;
}

.breadcrumb a {
    color: #00bfff;
    text-decoration: none;
    font-weight: 500;
}

.breadcrumb a:hover {
    text-decoration: underline;
}

/* Article font-size adjustments */
.blog-post {
    background-color: #fff;
    margin: 20px auto;
    padding: 20px;
    border-radius: 10px;
    max-width: 1300px;
    margin-right: 40px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.blog-post h2 {
    font-size: 1.75rem;  /* Slightly smaller than default */
    margin-bottom: 10px;
    font-weight: bold;
    color: #333;
}

.blog-post h3 {
    font-size: 1.5rem;  /* Smaller section heading */
    margin-bottom: 10px;
    color: #333;
}

.blog-post p {
    font-size: 1rem;  /* Adjust font size for readability */
    line-height: 1.6;
    margin-bottom: 15px;
    color: #444;
}

.blog-post ul {
    list-style-type: disc;
    margin-left: 20px;
    font-size: 1rem;  /* Same font size for consistency */
    color: #444;
}

.blog-post ul li {
    margin-bottom: 10px;
}

.meta-info {
    margin-bottom: 20px;
    font-size: 0.9rem;
    color: #666;
}

.meta-info strong {
    color: #333;
}

.read-more {
    color: #00bfff;
    text-decoration: none;
    font-weight: bold;
    font-size: 1rem;
}

.like-dislike {
    display: flex;
    justify-content: flex-start; /* Align to the left */
    gap: 10px;
    margin-bottom: 15px;
}

.like-btn, .dislike-btn {
    background-color: #f0f4fc;
    color: #333;
    padding: 10px 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1em;
}

.like-btn:hover, .dislike-btn:hover {
    background-color: #e0e7f1;
}

.like-btn:focus, .dislike-btn:focus {
    outline: none;
    border-color: #00bfff;
}

.feedback {
    background-color: #fff;
    margin: 20px auto;
    padding: 20px;
    border-radius: 10px;
    max-width: 1300px;
    margin-right: 40px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.feedback h4 {
    margin-bottom: 10px;
}

.feedback textarea {
    width: 100%;
    height: 100px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 10px;
}

/* Submit button with linear gradient */
.submit-btn {
    margin-top: 10px;
    padding: 10px 20px;
    background: linear-gradient(90deg, #03C4E7 0%, #0047FF 100%); /* Linear gradient background */
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold; /* Make the text bold for emphasis */
}

.submit-btn:hover {
    background: linear-gradient(90deg, #00bfff 0%, #003ecb 100%); /* Darker hover effect */
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
                    <li><a href="{{ route('main.index') }}">Home</a></li>
                    <li><a href="{{ route('services.index') }}">Services</a></li>
                    <li><a href="#" class="active">PetCare</a></li>
                </ul>
            </nav>
            <div class="login-btn">
                <a href="#" class="book-btn button">
                    <svg> <!-- Add your book icon here --></svg> Book Now
                </a>
                <a href="{{ route('custom-auth.signup') }}" class="button">
                    <svg> <!-- Add your sign-up icon here --></svg> Sign Up
                </a>
            </div>
        </div>
    </header>

    <!-- Main Content Section -->
    <section class="category-section">
        <div class="category-title">Category</div>
        <div class="category-tabs">
            <div class="tab active">
                <img src="{{ asset('images/cat-icon.png') }}" alt="Cat" class="tab-icon">
                <span>Cats</span>
            </div>
            <div class="tab">
                <img src="{{ asset('images/dog-icon.png') }}" alt="Dog" class="tab-icon">
                <span>Dogs</span>
            </div>
            <div class="tab">
                <img src="{{ asset('images/parrot-icon.png') }}" alt="Parrot" class="tab-icon">
                <span>Parrots</span>
            </div>
            <div class="tab">
                <img src="{{ asset('images/hamster-icon.png') }}" alt="Hamster" class="tab-icon">
                <span>Hamsters</span>
            </div>
            <div class="tab">
                <img src="{{ asset('images/fish-icon.png') }}" alt="Fish" class="tab-icon">
                <span>Fishes</span>
            </div>
            <div class="tab">
                <img src="{{ asset('images/other-icon.png') }}" alt="Other Pets" class="tab-icon">
                <span>Other Pets</span>
            </div>
        </div>

        <div class="search-bar">
            <input type="text" placeholder="What are you looking for?" class="search-input">
        </div>
    <section class="blog-post">
    <article>
        <!-- Breadcrumb (inside the form, at the top of the article) -->
        <nav class="breadcrumb">
            <a href="#">Blog</a> / 
            <a href="#">Behaviour</a> / 
            <a href="#">Barking</a> / 
            Why Dogs Bark and Curbing Excessive Barking
        </nav>

        <!-- Article Heading -->
        <h2>Why Dogs Bark and Curbing Excessive Barking</h2>

        <!-- Meta Info -->
        <div class="meta-info">
            <p>Written by <strong>Sandy Eckstein</strong></p>
            <p>Reviewed by <strong>Amy Flowers, DVM</strong> on May 28, 2023</p>
        </div>

        <!-- Article Content -->
        <p>No one should expect a dog to never bark. That’s as unreasonable as expecting a child to never talk. But some dogs bark excessively...</p>
        
        <h3>Why Dogs Bark?</h3>
        <p>Barking is one type of vocal communication that dogs use, and it can mean different things depending on the situation...</p>
        
        <ul>
            <li><strong>Territorial/Protective:</strong> When a person or an animal comes into an area your dog considers their territory...</li>
            <li><strong>Alarm/Fear:</strong> Some dogs bark at any noise or object that catches their attention...</li>
            <li><strong>Boredom/Loneliness:</strong> Dogs are pack animals...</li>
            <li><strong>Greeting/Play:</strong> Dogs often bark when greeting people or other animals...</li>
            <li><strong>Attention Seeking:</strong> Dogs often bark when they want something...</li>
            <li><strong>Separation Anxiety/Compulsive Barking:</strong> Dogs with separation anxiety often bark excessively...</li>
        </ul>
        <a href="#" class="read-more">See More....</a>
    </article>
</section>


    <section class="feedback">
        <h4>Was the article helpful?</h4>
        <!-- Like/Dislike Buttons -->
    <div class="like-dislike">
        <button class="like-btn">👍 Like</button>
        <button class="dislike-btn">👎 Dislike</button>
    </div>

        <textarea placeholder="Write a comment..."></textarea>
        <button class="submit-btn">Submit</button>
    </section>
</body>
</html>
