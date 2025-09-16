# DeepSec
An application that teaches basics of cybersecurity

# DeepSec Cybersecurity Education Application

## Overview
DeepSec is an interactive cybersecurity education application designed to teach users about essential topics such as phishing and password security. The application features engaging lessons, short quizzes to test knowledge, and a progress tracker to monitor user advancement.

## Features
- **Interactive Lessons**: Users can learn about phishing and password security through detailed lessons that include prevention methods and best practices.
- **Quizzes**: Short quizzes are available to assess users' understanding of the topics covered in the lessons.
- **Progress Tracker**: Users can track their progress through the lessons and quizzes, allowing them to see their learning journey.

## Technologies Used
- **HTML**: For structuring the content of the application.
- **CSS (Bootstrap)**: For styling the application with a dark blue and green tech-inspired theme.
- **PHP**: For server-side logic, including lesson and quiz management.

## Project Structure
```
DeepSec
├── public
│   ├── index.php
|   |-- signin.php
|   |-- signup.php
|   |-- signinprocess.php
|   |-- signinprocess.php
|   |-- connection.php
│   ├── assets
│   │   ├── css
│   │   │   └── styles.css
│   │   └── js
│   │       └── main.js
│   └── images
│   ├── lessons
│   │   ├── phishing.php
│   │   └── password_security.php
│   ├── quizzes
│   │   ├── phishing_quiz.php
│   │   └── password_quiz.php
│   ├── progress
│   │   └── tracker.php
        └── result.php
│   └── includes
│       ├── header.php
│       ├── footer.php
│       └── config.php
├── vendor
├── .gitignore
├── composer.json
└── README.md
```

## Installation
1. Clone the repository to your local machine.
2. Navigate to the project directory.
3. Install dependencies using Composer:
   ```
   composer install
   ```
4. Set up your web server (e.g., XAMPP) to serve the `public` directory.
5. Access the application via your web browser at `http://localhost/DeepSec/public/index.php`.

## Contributing
Contributions are welcome! Please submit a pull request or open an issue for any enhancements or bug fixes.

## License
This project is licensed under the MIT License. See the LICENSE file for more details.
