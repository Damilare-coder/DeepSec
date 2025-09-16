<?php
session_start();
$score = isset($_SESSION['phishing_quiz_score']) ? $_SESSION['phishing_quiz_score'] : 0;
$total = 3; // Update if you add more questions
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Phishing Quiz Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <style>
        body {
            background: #0a2342;
            color: #e0ffe0;
        }
        .result-box {
            background: #112d4e;
            border-radius: 12px;
            padding: 2rem;
            margin-top: 4rem;
            box-shadow: 0 0 20px #21e6c1;
        }
        .btn-green {
            background: #21e6c1;
            color: #0a2342;
        }
        .btn-green:hover {
            background: #278ea5;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center">
        <div class="result-box text-center">
            <h1>Quiz Result</h1>
            <p class="fs-4">You scored <strong><?php echo $score; ?></strong> out of <strong><?php echo $total; ?></strong></p>
            <a href="phishing_quiz.php" class="btn btn-green mt-3">Try Again</a>
            <a href="../lessons/phishing.php" class="btn btn-outline-light mt-3">Back to Lesson</a>
        </div>
    </div>
</body>
</html>