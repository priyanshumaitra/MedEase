<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up - MedEase</title>
    <link rel="icon" type="image/x-icon" href="/assets/favicon.svg" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/style.css" />

    <style type="text/css">
        /* Center the sign-up container */
        body {
        font-family: Arial, sans-serif;
    }
    .signup-container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-color: #f3f3f3;
    }
    .signup-card {
        background-color: #fff;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 350px;
    }
    .signup-card button:hover{
        background-color: #abcdea;
    }
    .signup-form label {
        display: block;
        margin-top: 10px;
    }
    .signup-form input {
        width: 100%;
        padding: 8px;
        margin-top: 3px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    .btn-signup {
        background-color: #3498db;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
    }
    .btn-signup:hover {
        background-color: #2980b9;
    }
    .login-link {
        margin-top: 15px;
        text-align: center;
    }
    </style>

    <script type="text/javascript">
        function toggleRegistration(type) {
            var doctorForm = document.getElementById('doctor-form');
            var patientForm = document.getElementById('patient-form');

            if (type === 'doctor') {
                doctorForm.style.display = 'block';
                patientForm.style.display = 'none';
            } else if (type === 'patient') {
                doctorForm.style.display = 'none';
                patientForm.style.display = 'block';
            }
        }
    </script>
</head>

<body>
    <header class="header">
    <a href="index.php"><span style="font-size:1.8rem;padding: 10px;border: 1px solid black;border-radius: 5px;">Back to Home</span></a>
    </header>

</head>
<body>
    <div class="signup-container">
        <div class="signup-card">
            <h2>Sign Up</h2>
            <button onclick="toggleRegistration('doctor')">Register as Doctor</button>
            <button onclick="toggleRegistration('patient')">Register as Patient</button>
            <form class="signup-form" id="doctor-form" style="display: none;" action="../backend/signup_check.php" method="POST">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                <label for="username">DoctorID</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <label for="repassword">Re-enter Password</label>
                <input type="password" id="repassword" name="repassword" required>
                <button type="submit" class="btn-signup" style="background-color:#06283d;">Sign Up as Doctor</button>
            </form>
            <form class="signup-form" id="patient-form" style="display: none;" action="../backend/signup_check.php" method="POST">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <label for="repassword">Re-enter Password</label>
                <input type="password" id="repassword" name="repassword" required>
                <button type="submit" class="btn-signup">Sign Up as Patient</button>
            </form>
            <p class="login-link">Already have an account? <a href="login.php">Login</a></p>
        </div>
    <section class="home" id="home-section">
        <!-- Home section content (unchanged) -->
    </section>

    <section class="category" id="category-section">
        <!-- Category section content (unchanged) -->
    </section>

    <section class="about" id="about-section">
        <!-- About section content (unchanged) -->
    </section>

    <section class="faq" id="faq-section">
        <!-- FAQ section content (unchanged) -->
    </section>

    <div class="go-to-top-container" id="goToTop">
        <!-- Go to top button content (unchanged) -->
    </div>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="./index.js" type="module"></script>
    <script src="./dark-theme/theme.js" type="module"></script>
</body>

</html>
