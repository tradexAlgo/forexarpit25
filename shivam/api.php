<?php
// API endpoint
$url = "https://mt5clone.com/exchange/backend/api/common/Oandaprice/BTC_USD";

// Initialize cURL
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  // Return response as string
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Optional: disable SSL cert verification

// Execute the request
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo "cURL Error: " . curl_error($ch);
} else {
    // Decode JSON response
    $data = json_decode($response, true);

    // Print or handle data
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

// Close cURL session
curl_close($ch);
?>
