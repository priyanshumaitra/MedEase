<?php

// mongodb config parameters
require_once 'db.php';

$mongoUsername = "Cluster32269";
$mongoPassword = "b1pkam5YYmtb";
$mongoCluster = "Cluster32269";
$mongoDatabase = "doctorapp";
$mongoCollection = "doctors";

// Establish MongoDB connection
$client = getConnection();

// Get the collection
$collection = $Client->$mongoDatabase->$mongoCollection;

// Get user search query
$searchQuery = isset($_GET['query']) ? $_GET['query'] : '';

// Create a search filter based on the user query
$filter = ['field_to_search' => ['$regex' => $searchQuery, '$options' => 'i']];

// Search the collection and fetch matching documents
$matchingDocuments = $collection->find($filter);

// Convert matching documents to an array
$documentsArray = iterator_to_array($matchingDocuments);

// Return the documents as JSON to the frontend
header('Content-Type: application/json');
$documentsArray = http_build_query(array(json_encode($documentsArray)));

return header("Location: search.php?$documentsArray");

?>