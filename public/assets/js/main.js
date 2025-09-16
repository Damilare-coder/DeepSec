// filepath: DeepSec/public/assets/js/main.js

document.addEventListener('DOMContentLoaded', function() {
    // Form validation for quizzes
    const quizForms = document.querySelectorAll('.quiz-form');
    quizForms.forEach(form => {
        form.addEventListener('submit', function(event) {
            let isValid = true;
            const inputs = form.querySelectorAll('input[type="radio"]:checked');
            if (inputs.length === 0) {
                isValid = false;
                alert('Please answer all questions before submitting.');
            }
            if (!isValid) {
                event.preventDefault();
            }
        });
    });

    // Dynamic content loading for lessons
    const lessonLinks = document.querySelectorAll('.lesson-link');
    lessonLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const lessonId = this.getAttribute('data-lesson-id');
            loadLessonContent(lessonId);
        });
    });

    function loadLessonContent(lessonId) {
        fetch(`src/lessons/${lessonId}.php`)
            .then(response => response.text())
            .then(data => {
                document.getElementById('lesson-content').innerHTML = data;
            })
            .catch(error => console.error('Error loading lesson:', error));
    }
});