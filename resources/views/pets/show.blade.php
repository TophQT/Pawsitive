<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Pet</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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

        .container {
            max-width: 1128px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 40px;
            color: #00ADEF; /* Header color */
            font-size: 2.5rem; /* Increase header size for emphasis */
        }

        .pet-details {
            display: flex;
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 100%; /* Full width on smaller devices */
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

        .details-section {
            flex: 1;
            max-width: 50%;
            padding-left: 20px; /* Add padding to separate from the image */
        }

        .details-section h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .detail-item {
            margin-bottom: 15px; /* Space between items */
        }

        .detail-item label {
            font-weight: bold;
            display: block; /* Ensure labels are block elements */
        }

        .detail-item span {
            display: block; /* Ensure values are block elements */
            color: #474747; /* Color for pet detail */
        }

        .color-cell {
            width: 25px; /* Fixed width for color cell */
            height: 25px; /* Fixed height for color cell */
            border-radius: 50%; /* Make it circular */
            border: 1px solid #ddd; /* Border for color cell */
            background-color: transparent; /* Default to transparent */
            display: inline-block; /* Align the color cell inline */
            margin-left: 10px; /* Space between label and color display */
        }

        .back-button {
            margin-top: 20px;
            display: block;
            text-align: center;
            text-decoration: none;
            background-color: #00ADEF;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .back-button:hover {
            background-color: #008CCF; /* Darker shade on hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>View Pet</h1>
        <div class="pet-details">
            <div class="pet-image">
                @if($pet->image)
                    <img src="{{ asset('storage/' . $pet->image) }}" alt="{{ $pet->name }}">
                @else
                    <img src="{{ asset('images/default_pet_image.jpg') }}" alt="Default Pet Image">
                @endif
            </div>
            <div class="details-section">
                <h2>{{ $pet->name }}</h2>
                <div class="detail-item">
                    <label>Breed:</label>
                    <span>{{ $pet->breed }}</span>
                </div>
                <div class="detail-item">
                    <label>Weight:</label>
                    <span>{{ $pet->weight }} kg</span>
                </div>
                <div class="detail-item">
                    <label>Gender:</label>
                    <span>{{ ucfirst($pet->gender) }}</span>
                </div>
                <div class="detail-item">
                    <label>Date of Birth:</label>
                    <span>{{ \Carbon\Carbon::parse($pet->dob)->format('Y-m-d') }}</span>
                </div>
                <div class="detail-item">
                    <label>Color:</label>
                    <span>{{ $pet->color }}</span>
                    <div class="color-cell" style="background-color: {{ $pet->color }};"></div> <!-- Circular color cell -->
                </div>
                <div class="detail-item">
                    <label>Message:</label>
                    <span>{{ $pet->message ?? 'N/A' }}</span>
                </div>
            </div>
        </div>
        <a href="{{ route('pets.index') }}" class="back-button">Back to Pet List</a>
    </div>
</body>
</html>
