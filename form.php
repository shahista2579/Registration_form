<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $dob = htmlspecialchars($_POST['dob']);

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>
    <style>
        /* General body styling */
        body {
            font-family: Arial, sans-serif;
            background-color: lightblue;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* Outer container */
        .container {
            width: 60%;
            background: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        /* Header */
        h2 {
            color: #ff4d7f;
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        /* Inner box styling */
        .success-box {
            background-color: #ffc1d9;
            border-radius: 8px;
            padding: 20px;
            margin-top: 20px;
            text-align: left;
        }

        /* Sub-heading styling */
        h3 {
            color: #e6004c;
            font-weight: bold;
            font-size: 22px;
            margin-bottom: 10px;
            text-align: center;
        }

        /* Content styling */
        p {
            color: #333;
            font-size: 16px;
            line-height: 1.8;
        }

        /* Bold labels */
        strong {
            font-weight: bold;
            color: #333;
        }

        /* Highlighted details */
        span {
            color: #e6004c;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Page Header -->
        <h2>Registration Form</h2>

        <!-- Success Message -->
        <div class="success-box">
            <h3>Registration Successful</h3>
            <p><strong>Name:</strong> <span>Swathi K</span></p>
        <p><strong>Email:</strong><span>swathi@gmial.com</span></p>
            <p><strong>Phone:</strong> <span>9740286748</span></p>
         <p><strong>Date of Birth:</strong> <span>15th Aug 2004</span></p>
        </div>
    </div>
</body>
</html>.

    // For simplicity, we redirect back to index.html with the user data.
    echo "<script>
        window.location.href = 'index.html';
        alert('Registration Successful');
    </script>";
}
?>
