<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Pawsitive</title>
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
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
                    <li><a href="{{ route(name: 'main.index') }}">Home</a></li>
                    <li><a href="#" class="active">Services</a></li>
                    <li><a href="{{ route('petcare.index') }}">PetCare</a></li>
                </ul>
            </nav>
            <div class="login-btn">
                <a href="#" class="book-btn button">Book Now</a>
                <a href="{{ route('custom-auth.signup') }}" class="button">Sign Up</a>
            </div>
        </div>
    </header>

    <!-- Main Content Section -->
    <main class="main-content">
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="hero-image">
                <img src="{{ asset('images/vet-xray.jpg') }}" alt="Vet X-ray">
            </div>
            <div class="hero-text">
                <h1>Convenient online and offline veterinary services</h1>
            </div>
        </section>


        <!-- Connect with a Vet Section -->
        <section class="connect-vet">
            <div class="connect-vet-text">
                <h2>Connect with A Vet</h2>
                <p>Get expert veterinary care from the comfort of your home. Our online consultations provide convenient access to professional advice, follow-up visits, and non-emergency consultations. Book your online appointment today for hassle-free pet care.</p>
                <a href="#" class="consultation-btn">Consultation Online</a>
            </div>
            <div class="connect-vet-image">
                <img src="{{ asset('images/vet-consult.jpg') }}" alt="Online Vet Consultation">
            </div>
        </section>
    </main>

    <!-- Footer Section -->
    <footer>
        <!-- Footer content here -->
    </footer>

</body>
</html>
