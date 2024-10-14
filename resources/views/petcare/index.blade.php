<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pawsitive - Your Pet's Health is Our Priority</title>
    <link rel="stylesheet" href="{{ asset('css/petcare.css') }}">
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

        <div class="articles">
            <div class="article">
                <img src="{{ asset('images/cat-stress.jpg') }}" alt="Cat Stress">
                <div class="article-content">
                    <span class="article-category">Behaviour</span>
                    <h3>Stress in Cats</h3>
                    <a href="#" class="read-more">Read More</a>
                </div>
            </div>
            <div class="article">
                <img src="{{ asset('images/diabetes-cat.jpg') }}" alt="Diabetes in Cats">
                <div class="article-content">
                    <span class="article-category">Health</span>
                    <h3>Diabetes in Cats</h3>
                    <a href="#" class="read-more">Read More</a>
                </div>
            </div>
            <div class="article">
                <img src="{{ asset('images/cat-love.jpg') }}" alt="Cat Love">
                <div class="article-content">
                    <span class="article-category">Behaviour</span>
                    <h3>Five Signs Your Cat Loves You</h3>
                    <a href="#" class="read-more">Read More</a>
                </div>
            </div>
            <div class="article">
                <img src="{{ asset('images/cat-myths.jpg') }}" alt="Cat Myths">
                <div class="article-content">
                    <span class="article-category">Essentials</span>
                    <h3>12 Common Cat Myths Debunked</h3>
                    <a href="#" class="read-more">Read More</a>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
