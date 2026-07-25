import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

import Plyr from 'plyr';
import 'plyr/dist/plyr.css';
window.Plyr = Plyr;

import "@hotwired/turbo";
import { Passkeys } from "@laravel/passkeys";
/**await Passkeys.register({ name: "MacBook Pro" });
await Passkeys.verify();

const registerButton = document.querySelector('#register-passkey');

registerButton?.addEventListener('click', async () => {
    const message = document.querySelector('#passkey-message');

    try {
        await Passkeys.verify({
            routes: {
                options: "/passkeys/confirm/options",
                submit: "/passkeys/confirm",
            },
        });

        await Passkeys.register({
            name:"MacBook Pro",
            routes: {
                options: '/user/passkeys/options',
                store: '/user/passkeys',
            },
        });

        message.classList.remove('hidden');
        message.classList.add('bg-emerald-50', 'text-emerald-700');

        message.textContent =
            'Votre passkey a été ajoutée avec succès.';

        setTimeout(() => {
            window.location.reload();
        }, 1000);

    } catch (error) {

        console.error('Erreur Passkey:', error);

        const message = document.querySelector('#passkey-message');

        message.classList.remove('hidden');
        message.classList.add('bg-rose-50', 'text-rose-700');

        message.textContent = error.message ?? 'Erreur inconnue.';
    }
});

const loginPasskeyButton = document.querySelector('#login-passkey');

loginPasskeyButton?.addEventListener('click', async () => {
    const message = document.querySelector('#passkey-login-message');

    loginPasskeyButton.disabled = true;

    try {
        await Passkeys.verify({
            routes: {
                options: "/passkeys/confirm/options",
                submit: "/passkeys/confirm",
            },
        });

        await Passkeys.login({
            name:"MacBook Pro",
            routes: {
                options: '/user/passkeys/options',
                store: '/user/passkeys',
            },
        });

        window.location.href = '/user/user-dashboard';

    } catch (error) {
        console.error('Erreur Passkey Login:', error);

        message.classList.remove('hidden');
        message.classList.add('text-rose-600');

        message.textContent =
            error.message ??
            'Impossible de se connecter avec cette passkey.';

        loginPasskeyButton.disabled = false;
    }
});**/


document.addEventListener('DOMContentLoaded', () => {

    Plyr.setup('.plyr-video', {

        controls: [
            'play-large',
            'play',
            'progress',
            'current-time',
            'mute',
            'volume',
            'settings',
            'fullscreen'
        ],

        settings: [
            'speed'
        ],

        speed: {
            selected: 1,
            options: [0.5, 0.75, 1, 1.25, 1.5, 2]
        }

    });

})
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


/**function togglePasswordVisibility() {
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
 **/
