<?php

require 'db.php'; // Path to your autoload.php

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    if (!empty($email) && !empty($username) && !empty($password) && !empty($repassword)) {
        if ($password === $repassword) {
            $client = getConnection();
            $database = $client->selectDatabase('doctorapp');
            $collection = $database->selectCollection('users');

            // Check if the user already exists
            $existingUser = $collection->findOne(['username' => $username]);
            if ($existingUser !== null) {
                header('Location: signup.php?status=exists');
                exit();
            }

            // Insert user data
            $userDocument = [
                'email' => $email,
                'username' => $username,
                'password' => $password
            ];
            $collection->insertOne($userDocument);

            $client->close();

            header('Location: login.php?status=true');
            exit();
        } else {
            header('Location: signup.php?status=pass_mismatch');
            exit();
        }
    } else {
        header('Location: signup.php?status=empty_fields');
        exit();
    }
}

?>
