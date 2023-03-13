const questions = document.querySelectorAll('.question');
let currentQuestion = 0;

// Show the first question
questions[currentQuestion].style.display = 'block';

document.addEventListener('click', function (e) {
    const current = questions[currentQuestion];
    // Check if the clicked element is a radio button and has a value
    if (e.target.tagName === 'INPUT' && e.target.type === 'radio' && e.target.value) {
        current.style.display = 'none';
        currentQuestion++;
        // Check if there are more questions
        if (currentQuestion < questions.length) {
            questions[currentQuestion].style.display = 'block';
        }
    }
});
