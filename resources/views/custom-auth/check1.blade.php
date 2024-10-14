<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Created Successfully</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #E5EAF0;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: white;
            border-radius: 10px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
        }

        .logo img {
            width: 100px;
        }

        .checkmark {
            width: 120px;
            height: 120px;
            margin: 20px auto;
        }

        .checkmark img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        h2 {
            font-size: 24px;
            color: #333;
        }

        p {
            color: #888;
            font-size: 15px;
            margin-top: -10px;
            margin-bottom: 25px;
        }

        .btn {
            background: linear-gradient(to right, #2884C8, #3DB2FF);
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 14px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 20px;
            width: 150px;
        }

        .btn:hover {
            background: linear-gradient(to right, #2874B0, #3394DF);
        }

        .paw-logo {
            font-size: 24px;
            color: #3DB2FF;
            font-weight: bold;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="logo">
        <img src="{{ asset('images/pawsitive-logo.png') }}" alt="Logo Image"><!-- Replace this with an image tag if you have a logo -->
    </div>
    
    <div class="checkmark">
        <img src="{{ asset('images/check.png') }}" alt="Checkmark Image"> <!-- Replace this with your actual image source -->
    </div>
    
    <h2>Account created successfully!</h2>
    <p>Welcome aboard!</p>
    
    <button class="btn">Let's Start!</button>
</div>

</body>
</html>
