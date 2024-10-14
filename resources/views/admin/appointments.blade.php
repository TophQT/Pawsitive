<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            background-color: #f4f7fc;
            height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background-color: #fff;
            height: 100vh;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .sidebar .logo {
            text-align: center;
            margin-bottom: 40px;
        }

        .sidebar .logo img {
            width: 100px;
        }

        .sidebar ul {
            list-style-type: none;
            padding-left: 0;
        }

        .sidebar ul li {
            margin-bottom: 20px;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #333;
            display: flex;
            align-items: center;
            padding: 10px;
            border-radius: 8px;
            transition: background 0.3s;
        }

        .sidebar ul li a.active {
            background: linear-gradient(90deg, #03C4E7 0%, #0047FF 100%);
            color: #fff;
        }

        .sidebar ul li a:hover {
            background-color: #f1f1f1;
        }

        .sidebar ul li a i {
            margin-right: 10px;
        }

        .sidebar ul li.logout a {
            color: #f44336;
        }

        .divider {
            height: 1px;
            background-color: #ccc;
            margin: 20px 0;
        }

        /* Main Content */
        .main-content {
            flex: 1;
            padding: 20px;
        }

        .main-content .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .main-content .top-bar input {
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            width: 300px;
        }

        .main-content .user-info {
            display: flex;
            align-items: center;
        }

        .main-content .user-info img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .main-content .user-info span {
            font-weight: 500;
        }

        .user-profile h2 {
            font-weight: 600;
            margin-bottom: 20px;
        }

        /* Filter Section */
        .filter-section {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            align-items: center;
        }

        .filter-section button,
        .filter-section select {
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
            cursor: pointer;
        }

        .filter-section .reset {
            background-color: #f44336;
            color: white;
            border: none;
        }

        /* Table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
        }

        table th, table td {
            padding: 15px;
            text-align: left;
        }

        table th {
            background-color: #f7f8fa;
            font-weight: 600;
        }

        table tbody tr {
            border-bottom: 1px solid #ddd;
        }

        table tbody tr:last-child {
            border-bottom: none;
        }

        table tbody tr:hover {
            background-color: #f4f7fc;
        }

        table .status {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 10px;
            font-size: 12px;
            font-weight: 500;
        }

        .status.completed {
            background: linear-gradient(120deg, #00bfa5, #00a896);
            color: white;
        }

        .status.processing {
            background: linear-gradient(120deg, #f7e12f, #ffdb00);
            color: white;
        }

        .status.on-hold {
            background: linear-gradient(120deg, #f0c419, #f0a819);
            color: white;
        }

        .status.cancelled {
            background: linear-gradient(120deg, #ff6b6b, #e85d5d);
            color: white;
        }

        .pagination {
            text-align: right;
            padding: 10px;
        }

/* Chat Icon Button */
.chat-icon-button {
    position: fixed; /* Changed from absolute to fixed */
    bottom: 20px;
    right: 20px;
    background-color: #03C4E7;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s;
    z-index: 999; /* Ensures it stays above other elements */
}

.chat-icon-button a {
    color: white;
}

.chat-icon-button:hover {
    background-color: #0047FF;
}

.sidebar ul li a[href*='appointments'] {
    background-color: #03C4E7; /* Set your custom background color */
    color: white; /* Change text color */
    border-radius: 8px; /* Optional: for rounded edges */
    padding: 10px; /* Optional: adjust padding for better spacing */
    transition: background-color 0.3s;
}

.sidebar ul li a[href*='appointments']:hover {
    background-color: #0047FF; /* Hover state color */
}

    </style>
</head>
<body>

   <!-- Sidebar -->
   <div class="sidebar">
    <div class="logo">
        <img src="{{ asset('images/pawsitive-logo.png') }}" alt="Logo">
    </div>
    <ul>
        <li><a href="{{ route('admin.dashboard') }}" class="active"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
        <li><a href="{{ route('admin.users') }}"><i class="fas fa-user"></i> User Profile</a></li>
        <div class="divider"></div>
        <li><a href="{{ route('admin.reviews') }}"><i class="fas fa-chart-bar"></i> Reviews</a></li>
        <div class="divider"></div>
        <!-- Remove Chat as text link -->
        <li><a href="{{ route('admin.appointments') }}"><i class="fas fa-calendar-alt"></i> Appointments</a></li>
        <li><a href="#"><i class="fas fa-calendar"></i> Calendar</a></li>
        <div class="divider"></div>
        <li><a href="#"><i class="fas fa-cog"></i> Settings</a></li>
        <li class="logout"><a href="{{ route('main.index') }}"><i class="fas fa-sign-out-alt"></i> Log out</a></li>
    </ul>

    <!-- Chat button at the bottom right -->
    <div class="chat-icon-button">
        <a href="#"><i class="fas fa-comments fa-2x"></i></a>
    </div>
</div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="top-bar">
            <input type="text" id="search-input" placeholder="Search" onkeyup="filterAppointments()">
            <div class="user-info">
                <img src="user-avatar.png" alt="User Avatar">
                <span>Bogart - Pet Lover</span>
            </div>
        </div>

        <div class="user-profile">
            <h2>Appointments</h2>
            <div class="filter-section"></div>

            <table id="appointments-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Customer Name</th>
                        <th>Pet Name</th>
                        <th>Address</th>
                        <th>Date</th>
                        <th>Type</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @if($appointments->isEmpty())
                        <tr>
                            <td colspan="7">No appointments found.</td>
                        </tr>
                    @else
                        @foreach($appointments as $appointment)
                            <tr>
                                <td>{{ str_pad($appointment->id, 3, '0', STR_PAD_LEFT) }}</td>
                                <td>{{ $appointment->first_name }} {{ $appointment->last_name }}</td>
                                <td>{{ $appointment->pet_name }}</td>
                                <td>{{ $appointment->address }}</td>
                                <td>{{ \Carbon\Carbon::parse($appointment->appointment_date)->format('d M Y') }}</td>
                                <td>{{ $appointment->service_type }}</td>
                                <td>
                                    <form action="{{ route('appointments.updateStatus', $appointment->id) }}" method="POST">
                                        @csrf
                                        <select name="status" onchange="this.form.submit()">
                                            <option value="Select Status" {{ $appointment->status == 'Select Status' ? 'selected' : '' }}>Select Status</option>
                                            <option value="completed" {{ $appointment->status == 'completed' ? 'selected' : '' }}>Completed</option>
                                            <option value="processing" {{ $appointment->status == 'processing' ? 'selected' : '' }}>Processing</option>
                                            <option value="on-hold" {{ $appointment->status == 'on-hold' ? 'selected' : '' }}>On Hold</option>
                                            <option value="cancelled" {{ $appointment->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                        </select>
                                    </form>
                                    <span class="status {{ strtolower($appointment->status) }}">
                                        {{ ucfirst($appointment->status) }}
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>

            <div class="pagination">
                {{ $appointments->links() }} <!-- Pagination links -->
            </div>
        </div>
    </div>

    <script>
        function filterAppointments() {
            // Get the search input value
            const input = document.getElementById('search-input');
            const filter = input.value.toLowerCase();
            const table = document.getElementById('appointments-table');
            const rows = table.getElementsByTagName('tr');

            // Loop through all table rows (except the header)
            for (let i = 1; i < rows.length; i++) {
                const row = rows[i];
                let rowText = row.innerText.toLowerCase();
                
                // Check if the row contains the search term
                if (rowText.includes(filter)) {
                    row.style.display = ''; // Show the row
                } else {
                    row.style.display = 'none'; // Hide the row
                }
            }
        }
    </script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
