<?php
session_start();

// Sample questions for the phishing quiz
$questions = [
    [
        'question' => 'What is phishing?',
        'options' => [
            'A fraudulent attempt to obtain sensitive information',
            'A type of fishing',
            'A computer virus',
            'None of the above'
        ],
        'answer' => 'A fraudulent attempt to obtain sensitive information'
    ],
    [
        'question' => 'Which of the following is a common phishing tactic?',
        'options' => [
            'Sending emails that appear to be from legitimate sources',
            'Creating fake websites',
            'Using social engineering techniques',
            'All of the above'
        ],
        'answer' => 'All of the above'
    ],
    [
        'question' => 'How can you identify a phishing email?',
        'options' => [
            'It has poor spelling and grammar',
            'It creates a sense of urgency',
            'It asks for personal information',
            'All of the above'
        ],
        'answer' => 'All of the above'
    ]
];

// Initialize score
$score = 0;

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($questions as $index => $question) {
        if (isset($_POST['question' . $index]) && $_POST['question' . $index] === $question['answer']) {
            $score++;
        }
    }
    // Store score in session
    $_SESSION['phishing_quiz_score'] = $score;
    header('Location: result.php'); // Redirect to results page
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phishing Quiz</title>
    <link rel="stylesheet" href="../../public/assets/css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Phishing Quiz</h1>
        <form method="POST">
            <?php foreach ($questions as $index => $question): ?>
                <div class="question">
                    <p><?php echo $question['question']; ?></p>
                    <?php foreach ($question['options'] as $option): ?>
                        <label>
                            <input type="radio" name="question<?php echo $index; ?>" value="<?php echo $option; ?>">
                            <?php echo $option; ?>
                        </label><br>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>