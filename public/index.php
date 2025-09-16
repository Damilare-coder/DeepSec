<?php
require_once '../public/includes/config.php';
require_once '../public/includes/header.php';

// Routing logic
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'phishing':
        include '../public/lessons/phishing.php';
        break;
    case 'password_security':
        include '../public/lessons/password_security.php';
        break;
    case 'phishing_quiz':
        include '../public/quizzes/phishing_quiz.php';
        break;
    case 'password_quiz':
        include '../public/quizzes/password_quiz.php';
        break;
    case 'progress':
        include '../public/progress/tracker.php';
        break;
    default:
        echo '<h1>Welcome to DeepSec</h1>';
        echo '<p>Select a lesson or quiz from the navigation menu.</p>';
        break;
}

require_once '../public/includes/footer.php';
?>