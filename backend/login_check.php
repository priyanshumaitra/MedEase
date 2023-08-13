<?php

require 'db.php'; // Path to your autoload.php

// Function to validate login
function validateLogin($username, $password) {
    $client = getConnection();
    $database = $client->selectDatabase('doctorapp');
    $collection = $database->selectCollection('users');

    $query = ['username' => $username, 'password' => $password];
    $user = $collection->findOne($query);

    $client->close();

    return $user !== null;
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (validateLogin($username, $password)) {
        header('Location: homepage.php?status=true');
        exit();
    } else {
        header('Location: login.php?status=false');
        exit();
    }
}

?>