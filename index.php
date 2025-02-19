<?php
// Encoded confession message
$encoded_message = "TWFeeSBndXN0byBhayBzYW8gZGF0aSBwYSA8Mw=="; // New encoded message using base64

// Decode the message
$decoded_message = base64_decode($encoded_message);

// Output the decoded message (confession) on page load
echo "<script type='text/javascript'>alert('$decoded_message');</script>";
?>
