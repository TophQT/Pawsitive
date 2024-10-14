<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking Visit Form</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      margin: 0;
      padding: 0;
    }

    button {
      display: block;
      margin: 20px auto;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
    }

    .modalh {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      justify-content: center;
      align-items: center;
      overflow-y: auto;
    }

    .modal-contenth {
      background-color: white;
      border-radius: 8px;
      padding: 20px;
      width: 900px;
      max-width: 90%;
      max-height: 90%;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      position: relative;
      overflow-y: auto;
      padding-bottom: 40px;
    }

    .closeh {
      position: absolute;
      right: 20px;
      top: 20px;
      font-size: 24px;
      cursor: pointer;
    }

    .form-containerh {
      text-align: left;
    }

    .form-headerh {
      background: linear-gradient(90deg, #007bff, #00d2ff);
      color: white;
      padding: 15px;
      border-radius: 8px 8px 0 0;
    }

    .form-headerh h2 {
      margin: 0;
    }

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

    .form-grouph {
      display: flex;
      justify-content: space-between;
      margin-top: 15px;
    }

    .input-boxh {
      width: 48%;
    }

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


    /* Scehdule css */

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

        /* payment */
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
  height: 380px;
  max-width: 90%;
  position: relative;
}

.close-btnz {
  position: absolute;
  top: 10px;
  right: 20px;
  font-size: 24px;
  cursor: pointer;
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
  height: 300px;
  height: auto;
  margin-bottom: 20px;
  margin-top: 20px
}


.modal-bodyz p {
  margin-left: 25%;
  margin-right: 25%;
  font-size: 14px;
  color: #555;
  line-height: 1.5;
  text-align: left;
}

/* Common button styles */
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


  </style>
</head>
<body>

  <!-- Trigger Button -->
  <button id="openModal">Open Booking Visit Form</button>

  <!-- Modal Background -->
  <div id="modal" class="modalh">
    <!-- Modal Content -->
    <div class="modal-contenth">
      <span class="closeh">&times;</span>
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
        <div id="page1">
          <form id="personalInfoForm">
            <h3>Personal Information</h3>
            <div class="form-grouph">
              <div class="input-boxh">
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" placeholder="Budi">
              </div>
              <div class="input-boxh">
                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" placeholder="Similikiwaw">
              </div>
            </div>
            <div class="form-grouph">
              <div class="input-boxh">
                <label for="mobile">Mobile Number</label>
                <input type="text" id="mobile" placeholder="1234-5678-9112">
              </div>
              <div class="input-boxh">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="similikiwaw@mail.com">
              </div>
            </div>
            <div class="form-grouph">
              <div class="input-boxh">
                <label for="address">Address</label>
                <input type="text" id="address" placeholder="Nanas Rd Bikini Bottom">
              </div>
            </div>

            <h3>Pet Information</h3>
            <div class="form-grouph">
              <div class="input-boxh">
                <label for="petName">Pet Name</label>
                <input type="text" id="petName" placeholder="Lucy">
              </div>
              <div class="input-boxh">
                <label for="petType">Type</label>
                <select id="petType">
                  <option value="dog">Dog</option>
                  <option value="cat">Cat</option>
                </select>
              </div>
            </div>
            <div class="form-grouph">
              <div class="input-boxh">
                <label for="breed">Breed</label>
                <input type="text" id="breed" placeholder="Golden Retriever">
              </div>
              <div class="input-boxh">
                <label for="age">Age</label>
                <input type="text" id="age" placeholder="5 years old">
              </div>
            </div>
            <button type="button" class="submit-btnh" id="toPage2">Continue</button>
          </form>
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
              <table>
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
                    <td></td><td></td><td></td><td></td><td>1</td><td class="selected">2</td><td>3</td>
                  </tr>
                  <tr>
                    <td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td>
                  </tr>
                  <tr>
                    <td>11</td><td>12</td><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td>
                  </tr>
                  <tr>
                    <td>18</td><td>19</td><td>20</td><td>21</td><td>22</td><td>23</td><td>24</td>
                  </tr>
                  <tr>
                    <td>25</td><td>26</td><td>27</td><td>28</td><td>29</td><td>30</td><td>31</td>
                  </tr>
                  <tr>
                    <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                  </tr>
                </tbody>
              </table>

              <div class="time-selectionh">
                <label for="time">Time</label>
                <input type="time" id="time" value="16:00">
              </div>

              <div class="clinic-selectionh">
                <label for="clinic">Clinic</label>
                <select id="clinic">
                  <option>Pawcare Barktown</option>
                </select>
              </div>

              <div class="consultation-selectionh">
                <label for="consultation">Consultation with</label>
                <select id="consultation">
                  <option>Jasmine Miller</option>
                </select>
              </div>
            </div>

            <div class="pet-detailsh">
              <div class="pet-headerh">
                <img src="pet.jpg" alt="Pet Image" class="pet-imgh">
                <div class="pet-infoh">
                  <h4 id="petNameDisplay">Lucy</h4>
                  <span class="pet-breedh" id="petBreedDisplay">Golden Retriever</span>
                  <span class="pet-genderh" id="petGenderDisplay">Female, 2 y.o</span>
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
              <select id="payment-method">
                <option>Credit Card</option>
                <option>Debit Card</option>
                <option>PayPal</option>
              </select>

              <label for="card-name">Card Name</label>
              <input type="text" id="card-name" value="Budi Similikitiwaw">

              <label for="card-number">Card Number</label>
              <input type="text" id="card-number" value="01234 5678 1234">

              <div class="card-infoh">
                <div>
                  <label for="exp-card">Expired Card</label>
                  <input type="text" id="exp-card" value="07/25">
                </div>
                <div>
                  <label for="cvv">CVV</label>
                  <input type="text" id="cvv" value="000">
                </div>
              </div>
            </div>

            <div class="pet-detailsh">
              <div class="pet-infoh">
                <img src="https://via.placeholder.com/80" alt="Lucy">
                <div class="pet-info-text">
                  <h4 id="petNameDisplay2">Lucy</h4>
                  <p id="petBreedDisplay2">Golden Retriever</p>
                  <p id="petGenderDisplay2">Female, 2 y.o</p>
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

<!-- Success Modal -->
<div class="modalz" id="bookingModal" style="display: none;">
  <div class="modal-contentz">
    <span class="close-btnz" id="closeModal">&times;</span>
    <div class="modal-headerz">
      <h2>Booking Confirmed</h2>
    </div>
    <div class="modal-bodyz">
           <div class="modal-bodyz">
      <img src="{{ asset('images/success.png') }}" alt="Booking confirmed illustration" class="illustration">
      <p>
        Thank you for caring for your pet and trusting Pawcare services! Here’s your booking information. You can let our receptionist know by showing your booking ID.
      </p>
    </div>
  </div>
</div>


  <script>
const openModalButton = document.getElementById('openModal');
const modal = document.getElementById('modal');
const closeModalButton = document.querySelector('.closeh');
const toPage2Button = document.getElementById('toPage2');
const toPage3Button = document.getElementById('toPage3');
const submitButton = document.querySelector('.continue-btnh .submit-btnh'); // Adjusted to target the correct button
const successModal = document.getElementById('bookingModal'); // Fixed ID to match your HTML
const closeSuccessButton = document.querySelector('.close-btnz');

let currentPage = 1;

openModalButton.onclick = function() {
  modal.style.display = 'flex';
}

closeModalButton.onclick = function() {
  modal.style.display = 'none';
}

closeSuccessButton.onclick = function() {
  successModal.style.display = 'none';
  modal.style.display = 'none'; // Hide modal when closing success message
}

toPage2Button.onclick = function() {
  if (document.getElementById('personalInfoForm').reportValidity()) {
    currentPage = 2;
    showPage(currentPage);
  }
}

toPage3Button.onclick = function() {
  currentPage = 3;
  showPage(currentPage);
}

submitButton.onclick = function() {
  if (
    document.getElementById('payment-method').reportValidity() &&
    document.getElementById('card-name').reportValidity() &&
    document.getElementById('card-number').reportValidity() &&
    document.getElementById('exp-card').reportValidity() &&
    document.getElementById('cvv').reportValidity()
  ) {
    successModal.style.display = 'flex'; // Show success modal
    modal.style.display = 'none'; // Hide booking form modal
  }
}

function showPage(page) {
  document.getElementById('page1').style.display = page === 1 ? 'block' : 'none';
  document.getElementById('page2').style.display = page === 2 ? 'block' : 'none';
  document.getElementById('page3').style.display = page === 3 ? 'block' : 'none';

  // Update step indicators
  const steps = document.querySelectorAll('.steph');
  steps.forEach((step, index) => {
    step.classList.toggle('active', index + 1 === page);
  });
}

window.onclick = function(event) {
  if (event.target === modal) {
    modal.style.display = 'none';
  }
}

  </script>
</body>
</html>
