<?php
session_start();

// Include the configuration file
require_once '../includes/config.php';

// Function to track user progress
function trackProgress($userId, $lessonId, $status) {
    global $conn; // Assuming $conn is your database connection

    // Prepare and execute the SQL statement
    $stmt = $conn->prepare("INSERT INTO progress (user_id, lesson_id, status) VALUES (?, ?, ?) ON DUPLICATE KEY UPDATE status = ?");
    $stmt->bind_param("iisi", $userId, $lessonId, $status, $status);
    
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}

// Function to get user progress
function getUserProgress($userId) {
    global $conn; // Assuming $conn is your database connection
    $progress = [];

    // Prepare and execute the SQL statement
    $stmt = $conn->prepare("SELECT lesson_id, status FROM progress WHERE user_id = ?");
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $progress[$row['lesson_id']] = $row['status'];
    }

    return $progress;
}

// Example usage
if (isset($_SESSION['user_id'])) {
    $userId = $_SESSION['user_id'];
    $progress = getUserProgress($userId);
    // Output progress data as needed
}
?>