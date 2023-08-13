<?php

require_once __DIR__ . '/vendor/autoload.php'; // Path to your autoload.php

function getConnection(){
// MongoDB connection parameters
$connectionString = "mongodb+srv://cluster32269:b1pkam5YYmtb@cluster32269.ztt1us4.mongodb.net/?retryWrites=true&w=majority";

// Create a MongoDB client
$client = new MongoDB\Client($connectionString);
return $client;
}

?>
