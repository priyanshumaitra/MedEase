<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - MedEase</title>
    <link rel="icon" type="image/x-icon" href="/assets/favicon.svg" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/style.css" />

    <style>
        /* Center the login container */
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-card {
            max-width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        .login-card h2 {
            margin-bottom: 15px;
        }

        .login-card label {
            display: block;
            margin-bottom: 5px;
        }

        .login-card input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .btn-login {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .btn-login:hover {
            background-color: #0056b3;
        }

        .forget-password {
            text-align: right;
            margin-top: 5px;
        }

        .forget-password a {
            color: #007bff;
            text-decoration: none;
        }

        .signup-link {
            margin-top: 10px;
            text-align: center;
        }

        .signup-link a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <header class="header">
        <!-- Header content (unchanged) -->
        <a href="index.php"><span style="font-size:1.8rem;padding: 10px;border: 1px solid black;border-radius: 5px;">Back to Home</span></a>
    </header>

    <div class="login-container">
        <div class="login-card">
            <h2>Login</h2>
            <div class="google-login">
                <button class="btn-google">Sign in with Google</button>
            </div>
            <form class="login-form" action = "../backend/login_check.php">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>

                <button type="submit" class="btn-login">Login</button>
            </form>
            <p class="forget-password"><a href="#">Forgot Password?</a></p>
            <p class="signup-link">Don't have an account? <a href="signup.php">Sign up</a></p>
        </div>
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

    <section class="footer" id="footer">
        <!-- Footer section content (unchanged) -->
    </section>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="./index.js" type="module"></script>
    <script src="./dark-theme/theme.js" type="module"></script>
</body>

</html>
