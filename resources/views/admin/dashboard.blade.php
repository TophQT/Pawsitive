<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
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
            min-height: 100vh;
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
            background-color: #f4f7fc;
            overflow-y: auto;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .top-bar input {
            padding: 8px;
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .user-info {
            display: flex;
            align-items: center;
        }

        .user-info img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .user-info span {
            font-weight: 600;
        }

        /* Dashboard Widgets */
        .card {
            background-color: white;
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            margin-left: -130px;
        }

        .card-title {
            font-size: 18px;
            color: #2d3748;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .card-body {
            padding: 30px;
        }

        /* Circular Progress Bars */
        .progress-circle {
            width: 120px;
            height: 120px;
            background-color: #f3f3f3;
            border-radius: 50%;
            position: relative;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .progress-circle span {
            font-size: 24px;
            font-weight: bold;
            position: absolute;
            color: #2d3748;
        }

        #activity .progress-circle {
            background: conic-gradient(#ff6347 25%, #f3f3f3 0%);
        }

        #sleep .progress-circle {
            background: conic-gradient(#32cd32 79%, #f3f3f3 0%);
        }

        #wellness .progress-circle {
            background: conic-gradient(#ffcc00 52%, #f3f3f3 0%);
        }

        /* Appointment List */
        .appointment-list {
            padding: 0;
            list-style: none;
        }

        .appointment-item {
            padding: 15px 0;
            border-bottom: 1px solid #e5e7eb;
        }

        .appointment-item p {
            margin: 0;
            color: #2d3748;
            font-size: 16px;
        }

        .appointment-item a.btn {
            margin-top: 10px;
            font-size: 14px;
        }

        /* Chat Section */
        .chat-list {
            padding: 0;
            list-style: none;
        }

        .chat-list li {
            padding: 10px 0;
            border-bottom: 1px solid #e5e7eb;
        }

        .chat-list li strong {
            color: #007bff;
            display: block;
        }

        .chat-list li {
            color: #4a5568;
        }

        /* Chart */
        .card canvas {
            margin-top: 20px;
        }

        /* Media Queries for Responsive Design */
        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                z-index: 1;
                height: auto;
                width: 100%;
            }

            .main-content {
                padding: 20px 10px;
            }

            .top-bar input {
                width: 100%;
            }

            .card-body {
                padding: 20px;
            }

            .progress-circle {
                width: 90px;
                height: 90px;
            }

            .progress-circle span {
                font-size: 18px;
            }
        }

        /* Chat Icon Button */
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


    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
    <div class="logo">
        <img src="{{ asset('images/pawsitive-logo.png') }}" alt="Logo">
    </div>
    <ul>
        <li><a href="#" class="active"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
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
            <input type="text" placeholder="Search">
            <div class="user-info">
                <img src="user-avatar.png" alt="User Avatar">
                <span>Pawsitive - Pet Lover</span>
            </div>
        </div>

<!-- Main content -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <!-- Top widgets (Activity, Sleep, Wellness) -->
    <div class="row my-4 justify-content-center">
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Activity</h5>
                    <div class="progress-circle" id="activity">
                        <span>25%</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Sleep</h5>
                    <div class="progress-circle" id="sleep">
                        <span>79%</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Wellness</h5>
                    <div class="progress-circle" id="wellness">
                        <span>52%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Appointment list -->
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Appointments</h5>
                    <div class="appointment-list">
                        <div class="appointment-item">
                            <p>Rabies - <span class="text-danger">Overdue</span> - 01 Dec 2023</p>
                            <a href="#" class="btn btn-primary">Find veterinarian</a>
                        </div>
                        <div class="appointment-item">
                            <p>Bordetella - <span class="text-warning">Non-core</span> - 11 Dec 2023</p>
                            <p>James Grey</p>
                        </div>
                        <div class="appointment-item">
                            <p>Distemper - <span class="text-success">Core</span> - 27 Jun 2024</p>
                            <p>Jim Brown</p>
                        </div>
                        <div class="appointment-item">
                            <p>Calicivirus - <span class="text-success">Core</span> - 16 Sep 2024</p>
                            <p>Helen Brooks</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Chat -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Chat</h5>
                    <ul class="chat-list">
                        <li>
                            <strong>Helen Brooks</strong>: Luna has been scratching her ears a lot lately...
                        </li>
                        <li>
                            <strong>Kathryn Murphy</strong>: The best way to treat an ear infection is to...
                        </li>
                        <li>
                            <strong>James Grey</strong>: You should follow the instructions on the ear drops label...
                        </li>
                        <li>
                            <strong>Jim Brown</strong>: Hi, I have a question about my cat...
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart Section -->
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Number of Appointments</h5>
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</main>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Custom JS -->
    <script src="script.js"></script>
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['September', 'October', 'November', 'December', 'January'],
        datasets: [{
            label: 'Appointments',
            data: [2, 4, 3, 6, 2],
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

    </script>
</body>
</html>
