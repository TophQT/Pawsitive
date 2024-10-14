<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Visit Form</title>
    <link rel="stylesheet" href="css/book.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="modal-overlay"></div>
<div class="modal-container">
    <div class="booking-form">
        <div class="form-header">
            <h1>Booking Visit Form</h1>
            <button class="close-button">×</button>
        </div>
        <div class="steps">
            <div class="step active">
                <span class="circle">1</span> Booking Details
            </div>
            <div class="step">
                <span class="circle">2</span> Select Date & Time
            </div>
            <div class="step">
                <span class="circle">3</span> Select Payment
            </div>
        </div>
        <form>
            <fieldset>
                <legend>Personal Information</legend>
                <div class="form-row">
                    <div class="form-group">
                        <label for="first-name">First Name</label>
                        <input type="text" id="first-name" value="Budi">
                    </div>
                    <div class="form-group">
                        <label for="last-name">Last Name</label>
                        <input type="text" id="last-name" value="Similikawiw">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="mobile-number">Mobile Number</label>
                        <input type="text" id="mobile-number" value="1234-5678-9112">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" value="similikawiw@mail.com">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" id="address" value="Nanas Rd Bikini Bottom">
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend>Pet Information</legend>
                <div class="form-row">
                    <div class="form-group">
                        <label for="pet-name">Pet Name</label>
                        <input type="text" id="pet-name" value="Lucy">
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <select id="type">
                            <option selected>Dog</option>
                            <option>Cat</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="breed">Breed</label>
                        <input type="text" id="breed" value="Golden Retriever">
                    </div>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="text" id="age" value="5 years old">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="illness-period">Period of Illness</label>
                        <select id="illness-period">
                            <option selected>3 days</option>
                            <option>1 week</option>
                            <option>More than 1 week</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="problem">Problem</label>
                        <input type="text" id="problem" value="Swollen in leg for 3 days">
                    </div>
                </div>
            </fieldset>

            <div class="form-footer">
                <button type="submit" class="continue-button">Continue</button>
            </div>

            <!-- Continue inside the same form tag -->
<fieldset id="step-2" style="display: none;">
    <legend>Select Date & Time</legend>
    <div class="form-row">
        <label for="schedule-date">Schedule Date & Time</label>
        <input type="date" id="schedule-date" value="2024-07-02">
    </div>
    
    <div class="form-row">
        <label for="time">Time</label>
        <input type="time" id="time" value="16:00">
    </div>

    <div class="form-row">
        <label for="clinic">Clinic</label>
        <select id="clinic">
            <option selected>Pawcare Barktown</option>
            <option>Pet Haven Clinic</option>
        </select>
    </div>

    <div class="form-row">
        <label for="consultation">Consultation with</label>
        <select id="consultation">
            <option selected>Jasmine Miller</option>
            <option>Alex Johnson</option>
        </select>
    </div>

    <div class="pet-details">
        <img src="lucy-pet.jpg" alt="Lucy the Dog" class="pet-image">
        <div class="pet-info">
            <h3>Lucy</h3>
            <p><span>Golden Retriever</span> | <span>Female, 2 y.o.</span></p>
            <p>Swollen leg for about 3 days</p>
        </div>
    </div>

    <div class="form-footer">
        <button type="button" class="continue-button">Continue</button>
    </div>
</fieldset>


        </form>
    </div>
</div>

<script>
    const closeModal = document.querySelector('.close-button');
const modalOverlay = document.querySelector('.modal-overlay');

closeModal.addEventListener('click', function() {
    document.querySelector('.modal-container').style.display = 'none';
    modalOverlay.style.display = 'none';
    document.body.classList.remove('modal-open');
});

// Optional: To show the modal when a button is clicked
function showModal() {
    document.querySelector('.modal-container').style.display = 'block';
    modalOverlay.style.display = 'block';
    document.body.classList.add('modal-open');
}

</script>

</body>
</html>
