<?php
// Handle CORS for cross-domain requests
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');
header('Content-Type: application/json');

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// Get form data
$name = isset($_POST['name']) ? sanitize_input($_POST['name']) : '';
$email = isset($_POST['email']) ? sanitize_input($_POST['email']) : '';
$organization = isset($_POST['organization']) ? sanitize_input($_POST['organization']) : '';

// Validate inputs
if (empty($name)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Name is required']);
    exit;
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Valid email is required']);
    exit;
}

// Prepare email
$to = 'support@beclutch.club';
$subject = 'Demo Request from Website - ' . $name;

$emailBody = "New Demo Request\n";
$emailBody .= "================\n\n";
$emailBody .= "Name: " . $name . "\n";
$emailBody .= "Email: " . $email . "\n";
if (!empty($organization)) {
    $emailBody .= "Organization: " . $organization . "\n";
}
$emailBody .= "\nSubmitted: " . date('Y-m-d H:i:s') . "\n";
$emailBody .= "IP Address: " . $_SERVER['REMOTE_ADDR'] . "\n";

// Email headers
$headers = "From: " . $email . "\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
$headers .= "X-Mailer: BeClutch Demo Request System\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Send email
$emailSent = mail($to, $subject, $emailBody, $headers);

if ($emailSent) {
    // Also send confirmation email to the user
    $confirmationSubject = 'Demo Request Received - BeClutch';
    $confirmationBody = "Dear " . $name . ",\n\n";
    $confirmationBody .= "Thank you for your interest in BeClutch! We've received your demo request and will be in touch shortly.\n\n";
    $confirmationBody .= "Best regards,\n";
    $confirmationBody .= "The BeClutch Team\n";
    
    $confirmationHeaders = "From: support@beclutch.club\r\n";
    $confirmationHeaders .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    mail($email, $confirmationSubject, $confirmationBody, $confirmationHeaders);
    
    http_response_code(200);
    echo json_encode(['success' => true, 'message' => 'Demo request submitted successfully']);
} else {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Failed to submit demo request. Please try again.']);
}

// Function to sanitize input
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
