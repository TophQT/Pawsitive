<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pawsitive - Your Pet's Health is Our Priority</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
<style>
       /* Button Styles */
button {
  display: block;
  margin: 20px auto;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
}

/* Modal Overlay */
.modalh, .modalz {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 999; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  background-color: rgba(0, 0, 0, 0.5); /* Black background with transparency */
  display: flex; /* Use flexbox to center modal content */
  justify-content: center; /* Center modal content horizontally */
  align-items: center; /* Center modal content vertically */
}

/* Modal Content */
.modal-contenth, .modal-contentz {
  background-color: white; /* White background for booking modal */
  border-radius: 8px; /* Rounded corners */
  padding: 20px; /* Inner spacing */
  width: 900px; /* Fixed width for booking modal */
  max-width: 90%; /* Responsive max width */
  max-height: 80vh; /* Limit height to 80% of the viewport height */
  overflow-y: auto; /* Enable vertical scrolling */
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3); /* Enhanced box shadow for depth */
  animation: fadeIn 0.3s; /* Add a fade-in animation */
}

/* Success Modal Specific Styles */
.modal-contentz {
  background-color: #f0f6f4; /* Different background for success modal */
  padding: 40px; /* Inner spacing */
  text-align: center; /* Center text */
  width: 800px; /* Fixed width for success modal */
  max-width: 90%; /* Responsive max width */
  max-height: 80vh; /* Limit height to 80% of the viewport height */
  overflow-y: auto; /* Enable vertical scrolling */
}

/* Fade-in Animation */
@keyframes fadeIn {
  from {
    opacity: 0; /* Start fully transparent */
    transform: scale(0.9); /* Scale down */
  }
  to {
    opacity: 1; /* End fully opaque */
    transform: scale(1); /* Scale to original size */
  }
}

/* Form Container */
.form-containerh {
  text-align: left;
}

/* Form Header */
.form-headerh {
  background: linear-gradient(90deg, #007bff, #00d2ff);
  color: white;
  padding: 15px;
  border-radius: 8px 8px 0 0;
}

.form-headerh h2 {
  margin: 0;
}

/* Steps */
.stepsh {
  margin-top: 10px;
  display: flex;
  gap: 35px;
  font-size: 14px;
}

.steph {
  color: #ccc;
  display: flex;
  align-items: center;
}

.steph span {
  display: inline-block;
  width: 24px;
  height: 24px;
  line-height: 24px;
  border-radius: 50%;
  background-color: #ccc;
  color: white;
  margin-right: 8px;
  text-align: center;
  font-size: 14px;
}

.steph.active span {
  background-color: #00d2ff;
}

/* Form Groups */
.form-grouph {
  display: flex;
  justify-content: space-between;
  margin-top: 15px;
}

.input-boxh {
  width: 48%;
}

/* Input Styles */
label {
  font-size: 14px;
  display: block;
  margin-bottom: 5px;
}

input, select {
  width: 100%;
  padding: 8px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

/* Submit Button */
.submit-btnh {
  background: linear-gradient(90deg, #007bff, #00d2ff);
  color: white;
  padding: 10px;
  width: 150px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
  float: right;
  margin-bottom: 20px;
}

.submit-btnh:hover {
  background: linear-gradient(90deg, #0056b3, #00aaff);
}

/* Schedule Section */
.calendar-sectionh {
  display: flex;
  justify-content: space-between;
  margin-top: 20px;
  align-items: flex-start;
}

.calendarh {
  width: 20%; /* Smaller calendar */
}

.calendar-headerh {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 0; /* Add some padding for spacing */
}

.prev, .next {
  background: linear-gradient(90deg, #007bff, #00d2ff);
  color: white;
  border: none;
  border-radius: 4px;
  padding: 10px;
  cursor: pointer;
  font-size: 16px;
  transition: background 0.3s;
}

.prev:hover, .next:hover {
  background: linear-gradient(90deg, #0056b3, #00aaff);
}

span {
  font-size: 18px; /* Increase font size for better visibility */
  font-weight: bold; /* Make the month bold */
}

/* Calendar Table */
table {
  width: 100%;
  border-collapse: collapse;
}

thead th {
  font-weight: 600;
  padding: 10px;
  text-align: center;
}

tbody td {
  padding: 15px;
  text-align: center;
}

tbody td:nth-child(7), tbody td:nth-child(1) {
  color: #ccc;
}

tbody td.selected {
  background-color: #0066ff;
  color: white;
  border-radius: 50%;
}

/* Selection Styles */
.time-selectionh,
.clinic-selectionh,
.consultation-selectionh {
  margin-top: 20px;
}

label {
  font-weight: 600;
  display: block;
  margin-bottom: 5px;
}

input[type="time"],
select {
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
}

/* Pet Details */
.pet-detailsh {
  width: 45%;
  background-color: #f5f8fc;
  padding: 20px;
  border-radius: 10px;
}

.pet-headerh {
  display: flex;
  align-items: center;
}

.pet-imgh {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  margin-right: 15px;
}

.pet-infoh {
  display: flex;
  flex-direction: column;
}

.pet-detailsh h4 {
  margin: 0;
}

.pet-breedh,
.pet-genderh {
  background-color: #d9e8ff;
  padding: 5px 10px;
  border-radius: 15px;
  margin: 5px 0;
  color: #0066ff;
}

.continue-btnh {
  display: flex;
  justify-content: flex-end;
  margin-top: 30px;
}

.continue-btnh button {
  background: linear-gradient(to right, #0066ff, #00ccff);
  border: none;
  color: white;
  padding: 10px 25px;
  border-radius: 20px;
  cursor: pointer;
  font-size: 16px;
}

/* Payment Section */
.form-sectionh {
  display: flex;
  justify-content: space-between;
}

.payment-formh {
  width: 60%;
}

.payment-formh h3 {
  margin-bottom: 15px;
}

.payment-formh label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

.payment-formh input, 
.payment-formh select {
  width: 100%;
  padding: 8px;
  margin-bottom: 15px;
  border: 1px solid #ddd;
  border-radius: 5px;
}

.card-infoh {
  display: flex;
  justify-content: space-between;
}

.card-infoh div {
  width: 48%;
}

.pet-detailsh {
  width: 35%;
  background-color: #f7f7f7;
  padding: 15px;
  border-radius: 8px;
}

.pet-infoh {
  display: flex;
  align-items: center;
  margin-bottom: 15px;
}

.pet-infoh img {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  margin-right: 15px;
}

.pet-info-text h4 {
  margin-bottom: 5px;
}

.pet-info-text p {
  margin-bottom: 3px;
}

.visit-details p {
  margin-bottom: 10px;
}

.continue-buttonh {
  display: flex;
  justify-content: flex-end;
  margin-top: 20px;
}

.continue-buttonh button {
  padding: 10px 20px;
  background-color: #0066ff;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.continue-buttonh button:hover {
  background-color: #0051cc;
}

/* Success Modal */
.modalz {
  display: flex;
  justify-content: center;
  align-items: center;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
}

.modal-contentz {
  background-color: #f0f6f4;
  border-radius: 20px;
  padding: 40px;
  text-align: center;
  width: 800px;
  height: auto; /* Allow height to adjust based on content */
  max-width: 90%; /* Responsive max width */
  position: relative;
}

.modal-headerz h2 {
  margin-top: 20px;
  font-size: 16px;
  margin-bottom: 10px;
  color: #333;
}

.modal-bodyz {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.illustration {
  width: 210px;
  height: auto; /* Maintain aspect ratio */
  margin-bottom: 20px;
  margin-top: 20px;
}

.modal-bodyz p {
  margin-left: 25%;
  margin-right: 25%;
  font-size: 14px;
  color: #555;
  line-height: 1.5;
  text-align: left;
}

/* Common Button Styles */
.common-btn {
  background: linear-gradient(90deg, #007bff, #00d2ff);
  color: white;
  padding: 10px 25px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
  margin-top: 20px;
}

.common-btn:hover {
  background: linear-gradient(90deg, #0056b3, #00aaff);
}

/* General styling for the schedule form */
.form-grouph {
    margin-bottom: 15px;
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

input[type="date"],
input[type="time"],
input[type="text"] {
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

/* Calendar styling */
.calendar-headerh {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 20px 0;
}

.calendar-headerh span {
    font-size: 18px;
    font-weight: bold;
}

.calendar-headerh button {
    background-color: #007BFF;
    color: white;
    border: none;
    padding: 8px 12px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 4px;
}

.calendar-headerh button:hover {
    background-color: #0056b3;
}

.calendar-tableh {
    width: 100%;
    border-collapse: collapse;
}

.calendar-tableh th,
.calendar-tableh td {
    width: 14.28%; /* 100% divided by 7 days */
    padding: 10px;
    text-align: center;
    border: 1px solid #ccc;
}

.calendar-tableh th {
    background-color: #f2f2f2;
    font-weight: bold;
}

.calendar-tableh td {
    cursor: pointer;
}

.calendar-tableh td:hover {
    background-color: #e6f7ff;
}

.calendar-tableh td.selected {
    background-color: #007BFF;
    color: white;
    font-weight: bold;
}

.continue-btnh {
    margin-top: 20px;
}

.continue-btnh button {
    background-color: #007BFF;
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    font-size: 16px;
    border-radius: 4px;
}

.continue-btnh button:hover {
    background-color: #0056b3;
}

/* Modal Background */
.modalz {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1000; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgba(0, 0, 0, 0.7); /* Black w/ opacity */
}

/* Modal Content */
.modal-contentz {
    background-color: #fff;
    margin: 10% auto; /* 10% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
    max-width: 600px; /* Max width for larger screens */
    border-radius: 8px; /* Rounded corners */
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3); /* Subtle shadow */
}


/* Modal Header */
.modal-headerz {
    text-align: center;
}

/* Modal Title */
.modal-headerz h2 {
    font-size: 24px;
    color: #4CAF50; /* Green color */
    margin: 0;
}

/* Modal Body */
.modal-bodyz {
    text-align: center; /* Center-align text and content */
    margin-top: 20px;
}

/* Illustration */
.illustration {
    width: 100px; /* Adjust width as necessary */
    height: auto; /* Maintain aspect ratio */
    margin-bottom: 15px; /* Space between image and text */
}

/* Modal Message */
.modal-bodyz p {
    font-size: 16px;
    color: #333; /* Darker text for contrast */
    margin-bottom: 20px;
}

/* Close Button Style */
.modal-close-btn {
    background-color: #4CAF50; /* Green background */
    color: white; /* White text */
    border: none;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
}

/* Close Button Hover Effect */
.modal-close-btn:hover {
    background-color: #45a049; /* Darker green on hover */
}

/* Modal Styles */
#modal, #successModal {
    display: none; /* Hide modals by default */
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Overlay background */
    display: flex; /* Use flexbox for centering */
    justify-content: center; /* Center horizontally */
    align-items: center; /* Center vertically */
}

.modal-contenth {
  position: relative; /* Make this container the reference for absolute positioning */
  width: 80%; /* Adjust as needed */
  max-width: 800px; /* Maximum width */
  margin: auto; /* Center the modal */
  padding: 20px; /* Padding inside the modal */
  background: #fff; /* Background color */
  border-radius: 10px; /* Rounded corners */
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Shadow effect */
}

/* Add styles for the success modal, if necessary */
#successModal .modal-content {
    text-align: center; /* Center the text in the success modal */
}

/* Close Button */
.closeh {
  position: absolute; /* Position in the modal */
  right: 20px; /* Right spacing */
  top: 20px; /* Top spacing */
  font-size: 24px; /* Font size */
  cursor: pointer; /* Pointer cursor on hover */
  background: none; /* Remove button background */
  border: none; /* Remove button border */
  color: #333; /* Default color */
  transition: color 0.3s; /* Transition for color change */
}

/* Close Button Hover Effect */
.closeh:hover {
  color: #ff0000; /* Change color on hover for better visibility */
  /* Remove transform scaling to keep position fixed */
}

/* Main content section */
.main-content {
    position: relative;
}

.hero-image img {
    max-width: 50%; /* Ensure image is responsive */
    height: 53%; /* Maintain aspect ratio */
    object-fit: cover; /* Cover the container without stretching */
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
        <div class="login-btn">
            <a href="#" class="book-btn button" id="openBookingModal">
                <i class="bi bi-book"></i> Book Now
            </a>
            <a href="{{ route('custom-auth.signup') }}" class="button">
                <i class="bi bi-person-plus"></i> Sign Up
            </a>
            <!-- Profile Button -->
            <a href="{{ route('user-pfp.profile') }}" class="button">
                <i class="bi bi-person"></i> Profile
            </a>
        </div>
    </div>

    <!-- Modal Background -->
    <div id="modal" class="modalh">
        <!-- Modal Content -->
        <div class="modal-contenth">
        <button class="closeh">X</button>
            <div class="form-containerh">
                <div class="form-headerh">
                    <h2>Booking Visit Form</h2>
                    <div class="stepsh">
                        <div class="steph active"><span>1</span> Personal Info</div>
                        <div class="steph"><span>2</span> Schedule</div>
                        <div class="steph"><span>3</span> Payment</div>
                    </div>
                </div>

 <!-- Page 1: Personal Information -->
<form id="bookingForm" action="{{ route('booking.store') }}" method="POST">
    @csrf
    <div id="page1">
        <h3>Personal Information</h3>
        <div class="form-grouph">
            <div class="input-boxh">
                <label for="first_name">First Name:</label>
                <input type="text" name="first_name" placeholder="Budi" required>
            </div>
            <div class="input-boxh">
                <label for="last_name">Last Name:</label>
                <input type="text" name="last_name" placeholder="Similikiwaw" required>
            </div>
        </div>
        <div class="form-grouph">
            <div class="input-boxh">
                <label for="mobile_number">Mobile Number:</label>
                <input type="text" name="mobile_number" placeholder="1234-5678-9112" required>
            </div>
            <div class="input-boxh">
                <label for="email">Email:</label>
                <input type="email" name="email" placeholder="similikiwaw@mail.com" required>
            </div>
        </div>
        <div class="form-grouph">
            <div class="input-boxh">
                <label for="address">Address:</label>
                <input type="text" name="address" placeholder="Nanas Rd Bikini Bottom" required>
            </div>
        </div>

        <h3>Pet Information</h3>
        <div class="form-grouph">
            <div class="input-boxh">
                <label for="pet_name">Pet Name:</label>
                <input type="text" name="pet_name" placeholder="Lucy" required>
            </div>
            <div class="input-boxh">
                <label for="pet_type">Pet Type:</label>
                <select name="pet_type" required>
                    <option value="dog">Dog</option>
                    <option value="cat">Cat</option>
                </select>
            </div>
        </div>
        <div class="form-grouph">
            <div class="input-boxh">
                <label for="pet_breed">Pet Breed:</label>
                <input type="text" name="pet_breed" placeholder="Golden Retriever" required>
            </div>
            <div class="input-boxh">
                <label for="pet_age">Pet Age:</label>
                <input type="number" name="pet_age" placeholder="5" required min="0">
            </div>
        </div>
        <div class="form-grouph">
            <div class="input-boxh">
                <label for="problem">Problem:</label>
                <input type="text" name="problem" placeholder="e.g. Swollen leg" required>
            </div>
            <div class="input-boxh">
                <label for="illness_period">Illness Period:</label>
                <input type="text" name="illness_period" placeholder="e.g. 3 days" required>
            </div>
        </div>
        
        <!-- New Service Type Field -->
        <div class="form-grouph">
    <div class="input-boxh">
        <label for="service_type">Service Type:</label>
        <select name="service_type" required>
            <option value="grooming">Grooming</option>
            <option value="vaccination">Vaccination</option>
            <option value="checkup">Checkup</option>
            <option value="other">Other</option>
        </select>
    </div>
</div>


        <div class="continue-btnh">
            <button type="button" class="submit-btnh" id="toPage2">Continue</button>
        </div>
    </div>

                    <!-- Page 2: Schedule -->
                    <div id="page2" style="display: none;">
                        <div class="calendar-sectionh">
                            <div class="calendarh">
                                <h3>Schedule Date & Time</h3>
                                <div class="calendar-headerh">
                                    <button class="prev">&lt;</button>
                                    <span>July 2024</span>
                                    <button class="next">&gt;</button>
                                </div>
                                <table class="calendar-tableh">
                                    <thead>
                                        <tr>
                                            <th>S</th>
                                            <th>M</th>
                                            <th>T</th>
                                            <th>W</th>
                                            <th>T</th>
                                            <th>F</th>
                                            <th>S</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>1</td>
                                            <td class="selected">2</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>5</td>
                                            <td>6</td>
                                            <td>7</td>
                                            <td>8</td>
                                            <td>9</td>
                                            <td>10</td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>12</td>
                                            <td>13</td>
                                            <td>14</td>
                                            <td>15</td>
                                            <td>16</td>
                                            <td>17</td>
                                        </tr>
                                        <tr>
                                            <td>18</td>
                                            <td>19</td>
                                            <td>20</td>
                                            <td>21</td>
                                            <td>22</td>
                                            <td>23</td>
                                            <td>24</td>
                                        </tr>
                                        <tr>
                                            <td>25</td>
                                            <td>26</td>
                                            <td>27</td>
                                            <td>28</td>
                                            <td>29</td>
                                            <td>30</td>
                                            <td>31</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="form-grouph time-selectionh">
                                    <label for="appointment_time">Appointment Time:</label>
                                    <input type="time" name="appointment_time" required>
                                </div>

                                <div class="form-grouph">
                                    <label for="clinic">Clinic:</label>
                                    <input type="text" name="clinic" required>
                                </div>

                                <div class="form-grouph">
                                    <label for="consultation">Consultation:</label>
                                    <input type="text" name="consultation" required>
                                </div>

                                <div class="form-grouph">
                                    <label for="appointment_date">Appointment Date:</label>
                                    <input type="date" name="appointment_date" required>
                                </div>
                            </div>

                            <div class="pet-detailsh">
                                <div class="pet-headerh">
                                    <img src="pet.jpg" alt="Pet Image" class="pet-imgh">
                                    <div class="pet-infoh">
                                        <h4 id="petNameDisplay">Lucy</h4>
                                        <span class="pet-breedh" id="petBreedDisplay">Golden Retriever</span>
                                        <span class="pet-ageh" id="petAgeDisplay">5 years old</span>
                                    </div>
                                </div>
                                <p id="petProblemDisplay">Swollen leg for about 3 days</p>
                            </div>
                        </div>

                        <div class="continue-btnh">
                            <button id="toPage3">Continue</button>
                        </div>
                    </div>


<!-- Page 3: Payment -->
<div id="page3" style="display: none;">
    <div class="form-sectionh">
        <div class="payment-formh">
            <h3>Payment</h3>

            <label for="payment-method">Choose Payment Method</label>
            <select name="payment_method" id="payment-method" required>
                <option value="">Select Payment Method</option>
                <option value="Credit Card">Credit Card</option>
                <option value="Debit Card">Debit Card</option>
                <option value="PayPal">PayPal</option>
            </select>

            <label for="card-name">Card Name</label>
            <input type="text" id="card-name" name="card_name" required>

            <label for="card-number">Card Number</label>
            <input type="text" id="card-number" name="card_number" required>

            <div class="card-infoh">
                <div>
                    <label for="exp-card">Expiration Date (MM/YY)</label>
                    <input type="text" id="exp-card" name="exp_card" required placeholder="MM/YY">
                </div>
                <div>
                    <label for="cvv">CVV</label>
                    <input type="text" id="cvv" name="cvv" required>
                </div>
            </div>
        </div>

        <div class="pet-detailsh">
            <div class="pet-infoh">
                <img src="https://via.placeholder.com/80" alt="Pet Image">
                <div class="pet-info-text">
                    <h4 id="petNameDisplay2">Lucy</h4>
                    <p id="petBreedDisplay2">Golden Retriever</p>
                    <p id="petProblemDisplay2">Swollen leg for about 3 days</p>
                </div>
            </div>
            <div class="visit-details">
                <p>Appointment Date: <span id="appointmentDateDisplay">July 2, 2024</span></p>
                <p>Time: <span id="appointmentTimeDisplay">16:00</span></p>
                <p>Clinic: <span id="clinicDisplay">Pawcare Barktown</span></p>
            </div>
        </div>
    </div>

    <div class="continue-btnh">
        <button type="submit" class="submit-btnh">Submit</button>
    </div>
</div>
</div>
</div>
</div>

<div id="successModal" class="modalz" style="display: none;">
    <div class="modal-contentz">
        <span class="close-btnz" id="closeSuccessModal">&times;</span>
        <div class="modal-headerz">
            <h2>Booking Confirmed</h2>
        </div>
        <div class="modal-bodyz">
            <img src="{{ asset('images/success.png') }}" alt="Booking confirmed illustration" class="illustration">
            <p>
                Thank you for caring for your pet and trusting our services! Here’s your booking information. You can let our receptionist know by showing your booking ID.
            </p>
            <button id="closeSuccessModal" class="modal-close-btn">Close</button>
        </div>
    </div>
</div>

 </header>

<!-- Main Content Section -->
<main class="main-content">
    <div id="petCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="hero-section">
                    <div class="hero-text">
                        <h1>Your Pet’s Health <br> is Our Priority</h1>
                        <p><strong>Providing expert veterinary services around the clock to ensure your pets stay healthy and happy, day and night.</strong></p>
                        <a href="#" class="hero-button">Consult Online</a>
                    </div>
                    <div class="hero-image">
                        <img src="{{ asset('images/hero-dog.jpg') }}" class="d-block w-100" alt="Dog">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="hero-section">
                    <div class="hero-text">
                        <h1>Quality Care <br> For Your Furry Friends</h1>
                        <p><strong>Our dedicated team is here to provide the best care for your pets.</strong></p>
                        <a href="#" class="hero-button">Schedule an Appointment</a>
                    </div>
                    <div class="hero-image">
                        <img src="{{ asset('images/cat-bck.webp') }}" class="d-block w-100" alt="Cat">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="hero-section">
                    <div class="hero-text">
                        <h1>Comprehensive Services <br> For Every Pet</h1>
                        <p><strong>From routine check-ups to emergency care, we've got you covered.</strong></p>
                        <a href="#" class="hero-button">Learn More</a>
                    </div>
                    <div class="hero-image">
                        <img src="{{ asset('images/doc-dog.png') }}" class="d-block w-100" alt="Bird">
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#petCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#petCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</main>

        <!-- How Pawsitive Works Section -->
        <section class="how-it-works">
            <h2>How Pawsitive Works</h2>
            <div class="steps">
                <div class="step">
                    <img src="{{ asset('images/step1.jpg') }}" alt="Step 1" class="step-img"> <!-- Image Added -->
                    <h3>Step 1</h3>
                    <p>Avail one of our services</p>
                </div>
                <div class="step">
                    <img src="{{ asset('images/step2.jpg') }}" alt="Step 2" class="step-img"> <!-- Image Added -->
                    <h3>Step 2</h3>
                    <p>Consult with an expert</p>
                </div>
                <div class="step">
                    <img src="{{ asset('images/step3.jpg') }}" alt="Step 3" class="step-img"> <!-- Image Added -->
                    <h3>Step 3</h3>
                    <p>Get immediate assistance or clinic connections</p>
                </div>
            </div>
        </section>

        <section class="why-choose-us">
    <h2>Why Choose US</h2>
    <div class="container">
        <div class="column left">
            <div class="item">
                <div class="text">
                    <h3>Lorem Ipsum</h3>
                    <p>Lorem Ipsum Dolor Sit Amet Consectetur. Cursus Volutpat Aliquet Mauris Mauris Fringilla Bibendum Lorem Sed. Ne</p>
                </div>
                <div class="number">1</div>
            </div>
            <div class="item">
                <div class="text">
                    <h3>Lorem Ipsum</h3>
                    <p>Lorem Ipsum Dolor Sit Amet Consectetur. Cursus Volutpat Aliquet Mauris Mauris Fringilla Bibendum Lorem Sed. Ne</p>
                </div>
                <div class="number">2</div>
            </div>
        </div>

        <div class="image-wrapper">
            <img src="{{ asset('images/dog.png') }}" alt="Dog" class="dog">
            <img src="{{ asset('images/cat.png') }}" alt="Cat" class="cat">
        </div>

        <div class="column right">
            <div class="item">
                <div class="number">3</div>
                <div class="text">
                    <h3>Lorem Ipsum</h3>
                    <p>Lorem Ipsum Dolor Sit Amet Consectetur. Cursus Volutpat Aliquet Mauris Mauris Fringilla Bibendum Lorem Sed. Ne</p>
                </div>
            </div>
            <div class="item">
                <div class="number">4</div>
                <div class="text">
                    <h3>Lorem Ipsum</h3>
                    <p>Lorem Ipsum Dolor Sit Amet Consectetur. Cursus Volutpat Aliquet Mauris Mauris Fringilla Bibendum Lorem Sed. Ne</p>
                </div>
            </div>
        </div>
    </div>
</section>


        <!-- About Us Section -->
        <section class="about-us">
        <div class="container">
            <h2>About Us</h2>
            <div class="about-content">
                <div class="about-text">
                    <h3>Prioritizing your pet companion</h3>
                    <p>At <a href="#">pawcare</a>, our primary goal is to ensure that every pet we care for leads a happy, healthy life. We are dedicated to providing the highest standard of veterinary care, delivered with compassion and professionalism.</p>
                    <p>Our team of experienced veterinarians and support staff work tirelessly to promote preventive care for your lovely pet, providing comprehensive treatments and supporting through all life stages.</p>
                </div>
                <div class="about-image">
                    <img src="{{ asset('images/cutecat.jpg') }}" alt="Cute Cat">
                </div>
            </div>
        </div>
    </section>


    <div class="section">
    <h2>What Make <span class="highlight">Us Different</span></h2>
    <div class="content-container">
        <div class="text-container">
            <h3><strong>What People Say</strong></h3>
            <h3><strong><span class="highlight-blue">About Our Company</span></strong></h3>
            <p>Lorem ipsum dolor sit amet consectetur. Tempor voluptate adipiscing suscipit pellentesque orci quam dis venenatis. Arcu pulvinar eget ac sit nullam aenean quam consequat. Diam aliquet duis vitae magna id sit morbi. Dictum volutpat tempus lacinia eget. Vel lorem dui accumsan sagittis elementum. Vulputate orci pellentesque sit tempus nisi arcu vel elementum. Blandit turpis molestie gravida nunc risus maecenas.</p>
            <button class="btn-review">Add Review</button>
        </div>
        <div class="image-container">
            <img src="{{ asset('images/company.png') }}" alt="People with dog" class="large-image">
        </div>
    </div>
</div>




<section class="reviews-section">
        <div class="reviews-header">
            <h1>Pawsitive Reviews</h1>
            <div class="rating-summary">
                <span class="rating">5.0</span>
                <span class="stars">★★★★★</span>
                <span class="review-count">200 Reviews</span>
            </div>
            <div class="actions">
                <button class="write-review">Write a Review</button>
                <div class="sort-by">
                    <label for="sort-options">Sort By:</label>
                    <select id="sort-options">
                        <option value="most-helpful">Most Helpful</option>
                        <option value="most-recent">Most Recent</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="reviews-list">
            <div class="review-item">
                <img src="{{ asset('images/R1.jpg') }}" alt="Review Image" class="review-image">
                <div class="review-content">
                    <span class="stars">★★★★★</span>
                    <h3 class="review-title">Review Name (Who Write)</h3>
                    <p class="review-text">Lorem Ipsum Dolor Sit Amet Consectetur. Cursus Volutpat Aliquet Mauris Fringilla Bibendum Lorem Sed...</p>
                </div>
                <div class="company-info">
                    <img src="{{ asset('images/hold.jpg') }}" alt="Company Logo" class="company-logo">
                    <h4 class="company-name">Company Name</h4>
                    <p class="company-description">Lorem Ipsum Dolor Sit Amet Consectetur. Cursus Volutpat Aliquet Mauris Fringilla...</p>
                </div>
            </div>

            <div class="review-item">
                <img src="{{ asset('images/R2.jpg') }}" alt="Review Image" class="review-image">
                <div class="review-content">
                    <span class="stars">★★★★★</span>
                    <h3 class="review-title">Review Name (Who Write)</h3>
                    <p class="review-text">Lorem Ipsum Dolor Sit Amet Consectetur. Cursus Volutpat Aliquet Mauris Fringilla Bibendum Lorem Sed...</p>
                </div>
                <div class="company-info">
                    <img src="{{ asset('images/hold.jpg') }}" alt="Company Logo" class="company-logo">
                    <h4 class="company-name">Company Name</h4>
                    <p class="company-description">Lorem Ipsum Dolor Sit Amet Consectetur. Cursus Volutpat Aliquet Mauris Fringilla...</p>
                </div>
            </div>
        </div>

        <button class="view-more">View More</button>
    </section>




<footer>
  <div class="footer-container">
    <div class="footer-section">
      <h4>PAWSITIVE</h4>
      <ul>
        <li><a href="#">Consultation</a></li>
        <li><a href="#">Reviews</a></li>
        <li><a href="#">Petcare</a></li>
        <li><a href="#">About Us</a></li>
      </ul>
    </div>
    
    <div class="footer-section">
      <h4>Stay Connected</h4>
      <p>Contact: <a href="mailto:hi.pawpeople@pawsitive.com">hi.pawpeople@pawsitive.com</a></p>
      <div class="social-icons">
        <a href="#"><img src="facebook-icon.png" alt="Facebook"></a>
        <a href="#"><img src="instagram-icon.png" alt="Instagram"></a>
      </div>
    </div>
    
    <div class="footer-section">
      <h4>Join as pawfamily and get 10% OFF</h4>
      <p>Our services are wide open for you</p>
      <a class="button" href="#">Be Pawfamily</a>
    </div>
  </div>
  <div class="footer-bottom">
    <p>&copy; PAWSITIVE.CO &nbsp;&nbsp;•&nbsp;&nbsp; <a href="#">Terms and Privacy Policy</a></p>
  </div>
</footer>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const openBookingModal = document.getElementById('openBookingModal');
    const modal = document.getElementById('modal');
    const successModal = document.getElementById('successModal');
    const closeModalButton = document.querySelector('.closeh');
    const closeSuccessButton = document.getElementById('closeSuccessModal');
    const toPage2Button = document.getElementById('toPage2');
    const toPage3Button = document.getElementById('toPage3');
    const submitButton = document.querySelector('#page3 button[type="submit"]');
    const selectedDateDisplay = document.querySelector('.calendar-headerh span');
    const selectedDateCells = document.querySelectorAll('.calendar-tableh tbody td');
    const timeInput = document.querySelector('[name="appointment_time"]');
    const appointmentDateInput = document.querySelector('[name="appointment_date"]');

    let currentPage = 1;
    let selectedDate = new Date();
    let selectedTime = '';

    // Function to format date and time
    function formatDateTime(date, timeString) {
        const hours = timeString.split(':')[0];
        const minutes = timeString.split(':')[1];
        const formattedDate = date.toLocaleDateString('en-US', { day: 'numeric', month: 'long', year: 'numeric' });
        return `${formattedDate} at ${hours}:${minutes}`;
    }

    // Function to update date display
    function updateDateDisplay() {
        selectedDateDisplay.textContent = selectedDate.toDateString();
        appointmentDateInput.value = selectedDate.toISOString().split('T')[0];
    }

    // Hide the modal initially
    modal.style.display = 'none';
    successModal.style.display = 'none'; // Hide success modal initially

    // Event to open modal
    openBookingModal.addEventListener('click', () => {
        modal.style.display = 'flex'; // Use 'flex' to maintain centering
    });

    // Close modal
    closeModalButton.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    // Close success modal
    closeSuccessButton.addEventListener('click', () => {
        successModal.style.display = 'none';
    });

    // Function to navigate to the next page
    function navigateToPage(current, next) {
        document.getElementById(`page${current}`).style.display = 'none';
        document.getElementById(`page${next}`).style.display = 'block';
        currentPage = next;

        const stepElements = document.querySelectorAll('.steph');
        stepElements.forEach((step, index) => {
            step.classList.toggle('active', index + 1 === next);
        });
    }

    // Event to continue to page 2
    toPage2Button.addEventListener('click', () => {
        navigateToPage(1, 2);

        // Get values from page 1 inputs
        const petName = document.querySelector('input[name="pet_name"]').value;
        const petBreed = document.querySelector('input[name="pet_breed"]').value;
        const petAge = document.querySelector('input[name="pet_age"]').value;
        const petProblem = document.querySelector('input[name="problem"]').value;
        const illnessPeriod = document.querySelector('input[name="illness_period"]').value;

        // Update page 2 with pet details
        document.getElementById('petNameDisplay').textContent = petName;
        document.getElementById('petBreedDisplay').textContent = petBreed;
        document.getElementById('petAgeDisplay').textContent = `${petAge} years old`;
        document.getElementById('petProblemDisplay').textContent = `${petProblem} for about ${illnessPeriod}`;
    });

    // Event to continue to page 3
    toPage3Button.addEventListener('click', () => {
        const appointmentTime = timeInput.value;

        if (!appointmentTime) {
            alert('Please select a time for your appointment.');
            return;
        }

        selectedTime = appointmentTime;
        const formattedDateTime = formatDateTime(selectedDate, selectedTime);

        alert(`Your appointment is set for ${formattedDateTime}`);
        navigateToPage(2, 3);

        // Update page 3 with pet details again
        const petName = document.querySelector('input[name="pet_name"]').value;
        const petBreed = document.querySelector('input[name="pet_breed"]').value;
        const petAge = document.querySelector('input[name="pet_age"]').value;
        const petProblem = document.querySelector('input[name="problem"]').value;
        const illnessPeriod = document.querySelector('input[name="illness_period"]').value;

        // Display pet details on page 3
        document.getElementById('petNameDisplay2').textContent = petName;
        document.getElementById('petBreedDisplay2').textContent = petBreed;
        document.getElementById('petProblemDisplay2').textContent = `${petProblem} for about ${illnessPeriod}`;

        // Optionally, you can also display the appointment details on page 3
        document.getElementById('appointmentDateDisplay').textContent = appointmentDateInput.value;
        document.getElementById('appointmentTimeDisplay').textContent = selectedTime;
        document.getElementById('clinicDisplay').textContent = document.querySelector('input[name="clinic"]').value;
    });

    // Event to handle form submission
    submitButton.addEventListener('click', () => {
        const formData = new FormData(document.getElementById('bookingForm'));

        // Store form data including date and time
        formData.append('appointment_date', selectedDate.toISOString().split('T')[0]);
        formData.append('appointment_time', selectedTime);

        for (const [key, value] of formData.entries()) {
            localStorage.setItem(key, value);
        }

        successModal.style.display = 'block';
        modal.style.display = 'none';
    });

    // Handle clicks on date cells
    selectedDateCells.forEach((cell) => {
        cell.addEventListener('click', () => {
            const cellDate = cell.textContent;

            if (cellDate) {
                const year = selectedDate.getFullYear();
                const month = selectedDate.getMonth();
                selectedDate = new Date(year, month, cellDate);
                selectedDate.setHours(12, 0, 0, 0);

                document.querySelectorAll('.calendar-tableh tbody td').forEach((td) => td.classList.remove('selected'));
                cell.classList.add('selected');

                updateDateDisplay();
            }
        });
    });

    // Close success modal on click
    closeSuccessButton.addEventListener('click', () => {
        successModal.style.display = 'none';
        modal.style.display = 'none'; // Optionally close booking modal
    });

    // Initial date display update
    updateDateDisplay();
});

</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
