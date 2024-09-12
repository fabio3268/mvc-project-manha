document.addEventListener('DOMContentLoaded', (event) => {
    const faqs = document.querySelectorAll('.faq');

    faqs.forEach((faq) => {
        const question = faq.querySelector('.faq-question');
        const answer = faq.querySelector('.faq-answer');

        question.addEventListener('click', (event) => {
            const isAnswerVisible = getComputedStyle(answer).display !== 'none';
            answer.style.display = isAnswerVisible ? 'none' : 'block';
        });
    });
});