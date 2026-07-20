import Chart from 'chart.js/auto'
// Micro-interactions and effects
document.querySelectorAll('button').forEach(button => {
    button.addEventListener('mousedown', () => {
        button.classList.add('scale-95');
    });
    button.addEventListener('mouseup', () => {
        button.classList.remove('scale-95');
    });
    button.addEventListener('mouseleave', () => {
        button.classList.remove('scale-95');
    });
});

// Subtle reveal animation on scroll
const observerOptions = {
    threshold: 0.1
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('opacity-100', 'translate-y-0');
            entry.target.classList.remove('opacity-0', 'translate-y-8');
        }
    });
}, observerOptions);

document.querySelectorAll('section').forEach(section => {
    section.classList.add('transition-all', 'duration-700', 'opacity-0', 'translate-y-8');
    observer.observe(section);
});
function togglePasswordVisibility() {
    const field = document.getElementById('password_input');
    field.type = field.type === 'password' ? 'text' : 'password';
}

function generateRandomPassword() {
    const chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
    let pass = '';
    for (let i = 0; i < 12; i++) {
        pass += chars.charAt(Math.floor(Math.random() * chars.length));
    }
    const field = document.getElementById('password_input');
    field.value = pass;
    field.type = 'text';
}

import { ClassicEditor } from 'ckeditor5';

ClassicEditor
    .create(document.querySelector('#editor'), {
        toolbar: [
            'undo', 'redo',
            '|',
            'heading',
            '|',
            'bold', 'italic', 'underline',
            '|',
            'link',
            'bulletedList',
            'numberedList',
            '|',
            'insertTable',
            'blockQuote',
            '|',
            'imageUpload',
            '|',
            'alignment'
        ]
    })
    .catch(error => console.error(error));
