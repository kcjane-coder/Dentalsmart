
document.addEventListener('DOMContentLoaded', function () {
    const toggleButtons = document.querySelectorAll('.toggle-password');

    toggleButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            const input = document.getElementById(button.dataset.target);

            if (!input) return;

            const showPassword = input.type === 'password';

            input.type = showPassword ? 'text' : 'password';

            const eyeOn = button.querySelector('.eye-icon');
            const eyeOff = button.querySelector('.eye-off-icon');

            if (eyeOn && eyeOff) {
                eyeOn.style.display = showPassword ? 'block' : 'none';
                eyeOff.style.display = showPassword ? 'none' : 'block';
            }

            button.setAttribute(
                'aria-label',
                showPassword ? 'Hide password' : 'Show password'
            );

            button.setAttribute(
                'aria-pressed',
                String(showPassword)
            );
        });
    });
});
