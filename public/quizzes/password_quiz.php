<?php
session_start();

// Sample questions for the password security quiz
$questions = [
    [
        'question' => 'What is the minimum recommended length for a secure password?',
        'options' => ['6 characters', '8 characters', '12 characters', '16 characters'],
        'answer' => 1 // 8 characters
    ],
    [
        'question' => 'Which of the following is a good practice for password management?',
        'options' => ['Using the same password for multiple accounts', 'Writing passwords down on paper', 'Using a password manager', 'Sharing passwords with friends'],
        'answer' => 2 // Using a password manager
    ],
    [
        'question' => 'What type of characters should you include in a strong password?',
        'options' => ['Only letters', 'Only numbers', 'Letters, numbers, and symbols', 'Only symbols'],
        'answer' => 2 // Letters, numbers, and symbols
    ],
    [
        'question' => 'How often should you change your passwords?',
        'options' => ['Every month', 'Every year', 'Only when you suspect a breach', 'Whenever you feel like it'],
        'answer' => 0 // Every month
    ],
];

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $score = 0;
    foreach ($questions as $index => $question) {
        if (isset($_POST['question' . $index]) && $_POST['question' . $index] == $question['answer']) {
            $score++;
        }
    }
    $_SESSION['quiz_score'] = $score;
    header('Location: result.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Security Quiz</title>
    <link rel="stylesheet" href="../../public/assets/css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Password Security Quiz</h1>
        <form method="POST">
            <?php foreach ($questions as $index => $question): ?>
                <div class="question">
                    <p><?php echo $question['question']; ?></p>
                    <?php foreach ($question['options'] as $optionIndex => $option): ?>
                        <label>
                            <input type="radio" name="question<?php echo $index; ?>" value="<?php echo $optionIndex; ?>">
                            <?php echo $option; ?>
                        </label><br>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
            <button type="submit">Submit Quiz</button>
        </form>
    </div>
</body>
</html>