<?php
$whatsappNumber = 'YOUR_WHATSAPP_NUMBER';
$whatsappApiUrl = 'https://api.whatsapp.com/send?6283899744602=' . $whatsappNumber;

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$messageContent = "New contact form submission:\n\nName: $name\nEmail: $email\nMessage: $message";

$response = file_get_contents($whatsappApiUrl . '&text=' . urlencode($messageContent));

if ($response) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}
?>
