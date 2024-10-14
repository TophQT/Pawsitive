<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet List</title>
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

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border: 1px solid #ddd; /* Border around table */
            border-radius: 8px;
            overflow: hidden; /* Ensure rounded corners */
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
        }

        .table th,
        .table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            background-color: white; /* Background for table cells */
        }

        .table th {
            background-color: #f0f4ff; /* Lighter header background */
            font-weight: 600;
            color: #005DA2; /* Darker text color for headers */
        }

        .table tr:hover {
            background-color: #e8f0ff; /* Highlight row on hover */
        }

        .btn {
            background-color: #00ADEF; /* Button background color */
            color: white;
            padding: 10px 15px; /* Increased padding for buttons */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none; /* Remove underline */
            transition: background 0.3s, transform 0.2s; /* Added transform for button */
            display: inline-block; /* Ensure inline-block for consistent styling */
            margin-right: 5px; /* Spacing between buttons */
        }

        .btn-primary {
            background-color: #00ADEF;
        }

        .btn-secondary {
            background-color: #6C757D; /* Grey for secondary buttons */
        }

        .btn-danger {
            background-color: #FF3D3D; /* Danger button color */
        }

        .btn:hover {
            opacity: 0.9; /* Slight opacity change on hover */
            transform: translateY(-2px); /* Slight lift effect on hover */
        }

        .btn-danger:hover {
            background-color: #FF2C2C; /* Darker shade on hover for delete */
        }

        .image-cell img {
            width: 100px;
            height: auto;
            border-radius: 8px;
            transition: transform 0.2s; /* Transition effect for image */
        }

        .image-cell img:hover {
            transform: scale(1.05); /* Scale up image on hover */
        }

        @media (max-width: 768px) {
            .table th, .table td {
                padding: 10px; /* Reduce padding on smaller screens */
            }

            h1 {
                font-size: 2rem; /* Adjust header size */
            }

            .image-cell img {
                width: 80px; /* Smaller image size on mobile */
            }
        }

        /* Additional styles for buttons alignment */
        .btn-group {
            display: flex; /* Use flexbox for button alignment */
            justify-content: space-between; /* Space out buttons */
            align-items: center; /* Center align buttons vertically */
            min-width: 150px; /* Set a minimum width for consistent button placement */
        }

        /* Style for the color display */
        .color-cell {
            width: 40px; /* Fixed width for color cells */
            height: 40px; /* Fixed height for color cells */
            border-radius: 50%; /* Make it circular */
            border: 1px solid #ddd; /* Border for color cells */
            background-color: transparent; /* Default to transparent */
            display: inline-block; /* Align the color cell inline */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Pet List</h1>
        @if($pets->isEmpty())
            <p style="text-align: center;">No pets found.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Breed</th>
                        <th>Weight</th>
                        <th>Gender</th>
                        <th>Date of Birth</th>
                        <th>Color</th>
                        <th>Message</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pets as $pet)
                        <tr>
                            <td>{{ $pet->name }}</td>
                            <td>{{ $pet->breed }}</td>
                            <td>{{ $pet->weight }} kg</td> <!-- Added unit for weight -->
                            <td>{{ ucfirst($pet->gender) }}</td> <!-- Capitalized gender -->
                            <td>{{ \Carbon\Carbon::parse($pet->dob)->format('Y-m-d') }}</td>
                            <td>
                                <div class="color-cell" style="background-color: {{ $pet->color }};"></div> <!-- Color cell -->
                            </td>
                            <td>{{ $pet->message ?? 'N/A' }}</td>
                            <td class="image-cell">
                                @if($pet->image)
                                    <img src="{{ asset('storage/' . $pet->image) }}" alt="{{ $pet->name }}">
                                @else
                                    N/A
                                @endif
                            </td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('pets.edit', $pet->id) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('pets.show', $pet->id) }}" class="btn btn-secondary">View</a> <!-- Add View button -->
                                    <form action="{{ route('pets.destroy', $pet->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</body>
</html>
