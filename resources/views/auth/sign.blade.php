<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Account | Your App Name</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --deep-black: #20262D;
            --urban-green: #4B5A4D;
            --cool-sky-blue: #7D8D97;
            --neutral-beige: #D6D1C2;
            --charcoal-gray: #5B5F66;
            --accent: #8A9A8B;
            --light-bg: #F5F3EC;
            --error: #e63946;
            --success: #4BB543;

            /* Primary colors */
            --primary: var(--urban-green);
            --primary-rgb: 75, 90, 77;
            --secondary: var(--cool-sky-blue);
            --secondary-rgb: 125, 141, 151;
            --highlight: var(--accent);
            --highlight-rgb: 138, 154, 139;

            /* UI variables */
            --border-radius: 12px;
            --shadow: 0 4px 20px rgba(0,0,0,0.1);
            --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            --card-bg: rgba(255, 255, 255, 0.96);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1rem;
            position: relative;
            overflow-x: hidden;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: var(--deep-black);
        }

        /* Background Animation */
        .bg-animation {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }

        .bg-layer {
            position: absolute;
            width: 200%;
            height: 200%;
            animation: gradientRotate 30s linear infinite;
            opacity: 0.7;
        }

        .layer-1 {
            background: radial-gradient(
                circle at 30% 60%,
                rgba(var(--primary-rgb), 0.8) 0%,
                rgba(var(--secondary-rgb), 0.5) 50%,
                transparent 70%
            );
            top: -50%;
            left: -50%;
            animation-duration: 25s;
            animation-direction: normal;
        }

        .layer-2 {
            background: linear-gradient(
                135deg,
                rgba(var(--highlight-rgb), 0.6) 0%,
                rgba(var(--secondary-rgb), 0.4) 50%,
                rgba(var(--primary-rgb), 0.6) 100%
            );
            top: -100%;
            left: -100%;
            animation-duration: 30s;
            animation-direction: reverse;
        }

        .layer-3 {
            background: conic-gradient(
                from 45deg,
                rgba(var(--primary-rgb), 0.4),
                rgba(var(--highlight-rgb), 0.4),
                rgba(var(--secondary-rgb), 0.4)
            );
            top: -75%;
            left: -75%;
            animation-duration: 20s;
            animation-direction: normal;
            filter: blur(40px);
        }

        .particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.6);
            border-radius: 50%;
            filter: blur(2px);
            animation: float 15s infinite ease-in-out;
        }

        @keyframes gradientRotate {
            0% { transform: rotate(0deg) scale(1); }
            50% { transform: rotate(180deg) scale(1.1); }
            100% { transform: rotate(360deg) scale(1); }
        }

        @keyframes float {
            0%, 100% { transform: translate(0, 0); }
            25% { transform: translate(10%, 15%); }
            50% { transform: translate(5%, -10%); }
            75% { transform: translate(-5%, 5%); }
        }

        /* Main Container */
        .container {
            width: 100%;
            max-width: 420px;
            background: var(--card-bg);
            border-radius: var(--border-radius);
            padding: 2rem;
            box-shadow: var(--shadow);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(var(--highlight-rgb), 0.3);
            animation: fadeInUp 0.6s cubic-bezier(0.23, 1, 0.32, 1);
            transition: var(--transition);
            margin: 1rem;
        }

        .container:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(var(--primary-rgb), 0.2);
            border-color: rgba(var(--highlight-rgb), 0.5);
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Header */
        .heading {
            font-size: 1.75rem;
            font-weight: 700;
            margin-bottom: 0.75rem;
            color: var(--primary);
            text-align: center;
            background: linear-gradient(to right, var(--primary), var(--highlight));
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .description {
            color: var(--charcoal-gray);
            font-size: 0.9rem;
            text-align: center;
            margin-bottom: 1.5rem;
            line-height: 1.5;
        }

        /* Form Elements */
        .form-group {
            position: relative;
            margin-bottom: 1.25rem;
        }

        .form-group i {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--charcoal-gray);
            font-size: 1rem;
            transition: var(--transition);
        }

        .input {
            width: 100%;
            padding: 0.9rem 1rem 0.9rem 2.75rem;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: var(--border-radius);
            font-size: 0.9rem;
            transition: var(--transition);
            background-color: rgba(255, 255, 255, 0.8);
            font-family: inherit;
        }

        .input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(var(--primary-rgb), 0.1);
            background-color: white;
        }

        .input:focus + i {
            color: var(--primary);
        }

        /* Password Toggle */
        .password-toggle {
            position: absolute;
            right: 0.75rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--charcoal-gray);
            cursor: pointer;
            font-size: 1rem;
            transition: var(--transition);
            background: none;
            border: none;
            padding: 0.5rem;
            z-index: 2;
        }

        .password-toggle:hover {
            color: var(--primary);
        }

        /* Button */
        .submit-btn {
            width: 100%;
            padding: 0.9rem;
            background: linear-gradient(135deg, var(--primary) 0%, var(--highlight) 100%);
            color: white;
            border: none;
            border-radius: var(--border-radius);
            font-weight: 600;
            font-size: 0.95rem;
            cursor: pointer;
            margin-top: 0.5rem;
            transition: var(--transition);
            box-shadow: 0 4px 15px rgba(var(--primary-rgb), 0.2);
            position: relative;
            overflow: hidden;
        }

        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(var(--primary-rgb), 0.3);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        .submit-btn::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -60%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                to right,
                rgba(255, 255, 255, 0) 0%,
                rgba(255, 255, 255, 0.2) 50%,
                rgba(255, 255, 255, 0) 100%
            );
            transform: rotate(30deg);
            transition: var(--transition);
        }

        .submit-btn:hover::after {
            left: 100%;
        }

        /* Divider */
        .divider {
            display: flex;
            align-items: center;
            margin: 1.25rem 0;
            color: var(--charcoal-gray);
            font-size: 0.75rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: linear-gradient(to right, transparent, rgba(0, 0, 0, 0.1), transparent);
            margin: 0 0.75rem;
        }

        /* Social Buttons */
        .social-buttons {
            display: flex;
            justify-content: center;
            gap: 0.75rem;
            margin-bottom: 1.25rem;
        }

        .social-btn {
            width: 2.75rem;
            height: 2.75rem;
            border-radius: 50%;
            background: var(--neutral-beige);
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .social-btn i {
            font-size: 1.1rem;
            color: var(--charcoal-gray);
            transition: var(--transition);
        }

        .social-btn.google:hover {
            background: #DB4437;
        }
        .social-btn.apple:hover {
            background: #000;
        }
        .social-btn.facebook:hover {
            background: #4267B2;
        }

        .social-btn:hover i {
            color: white;
        }

        /* Login Link */
        .login-link {
            text-align: center;
            font-size: 0.9rem;
            color: var(--charcoal-gray);
            margin-top: 1.25rem;
        }

        .login-link a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        /* Terms */
        .terms {
            font-size: 0.7rem;
            color: var(--charcoal-gray);
            text-align: center;
            margin-top: 1.25rem;
            line-height: 1.5;
        }

        .terms a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
        }

        .terms a:hover {
            text-decoration: underline;
        }

        /* Status Message */
        .status-message {
            padding: 0.75rem;
            border-radius: var(--border-radius);
            margin-bottom: 1rem;
            font-size: 0.85rem;
            text-align: center;
            display: none;
        }

        .status-message.success {
            background-color: rgba(75, 181, 67, 0.1);
            color: var(--success);
            display: block;
        }

        .status-message.error {
            background-color: rgba(230, 57, 70, 0.1);
            color: var(--error);
            display: block;
        }

        /* Password Strength */
        .password-strength {
            height: 4px;
            background: #eee;
            border-radius: 2px;
            margin-top: 0.5rem;
            overflow: hidden;
            position: relative;
        }

        .password-strength::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 0;
            background: var(--error);
            transition: width 0.3s ease;
        }

        .password-strength.weak::before {
            width: 30%;
            background: var(--error);
        }

        .password-strength.medium::before {
            width: 60%;
            background: #ffa500;
        }

        .password-strength.strong::before {
            width: 100%;
            background: var(--success);
        }

        /* Responsive */
        @media (max-width: 480px) {
            body {
                padding: 0.5rem;
            }

            .container {
                padding: 1.5rem;
            }

            .heading {
                font-size: 1.5rem;
            }

            .description {
                font-size: 0.85rem;
                margin-bottom: 1.25rem;
            }

            .input {
                padding: 0.8rem 1rem 0.8rem 2.5rem;
                font-size: 0.85rem;
            }

            .submit-btn {
                padding: 0.8rem;
                font-size: 0.9rem;
            }

            .social-buttons {
                gap: 0.5rem;
            }

            .social-btn {
                width: 2.5rem;
                height: 2.5rem;
            }

            .social-btn i {
                font-size: 1rem;
            }
        }

        @media (max-width: 360px) {
            .container {
                padding: 1.25rem;
            }

            .heading {
                font-size: 1.4rem;
            }

            .form-group {
                margin-bottom: 1rem;
            }

            .input {
                padding: 0.75rem 0.9rem 0.75rem 2.25rem;
            }

            .password-toggle {
                right: 0.5rem;
                padding: 0.4rem;
            }
        }
    </style>
</head>
<body>
    <!-- Background Animation -->
    <div class="bg-animation">
        <div class="bg-layer layer-1"></div>
        <div class="bg-layer layer-2"></div>
        <div class="bg-layer layer-3"></div>
    </div>

    <!-- Main Container -->
    <div class="container">
        <h1 class="heading">Create Your Account</h1>
        <p class="description">Join our community and get started today</p>

        <!-- Status message -->
        <div class="status-message" id="statusMessage"></div>

        <form id="signupForm">
            <div class="form-group">
                <input type="text" class="input"
                       id="name" name="name"
                       placeholder="Full Name" required autofocus />
                <i class="fas fa-user"></i>
            </div>

            <div class="form-group">
                <input type="email" class="input"
                       id="email" name="email"
                       placeholder="Email Address" required />
                <i class="fas fa-envelope"></i>
            </div>

            <div class="form-group">
                <input type="password" class="input"
                       id="password" name="password" placeholder="Password" required />
                <i class="fas fa-lock"></i>
                <button type="button" class="password-toggle" id="togglePassword">
                    <i class="fas fa-eye"></i>
                </button>
                <div class="password-strength" id="passwordStrength"></div>
            </div>

            <div class="form-group">
                <input type="password" class="input" id="confirmPassword"
                       name="password_confirmation" placeholder="Confirm Password" required />
                <i class="fas fa-lock"></i>
                <button type="button" class="password-toggle" id="toggleConfirmPassword">
                    <i class="fas fa-eye"></i>
                </button>
            </div>

            <button type="submit" class="submit-btn" id="submitButton">
                <span>Create Account</span>
            </button>
        </form>

        <!-- Divider -->
        <div class="divider">or sign up with</div>

        <!-- Social Login Buttons -->
        <div class="social-buttons">
            <button type="button" class="social-btn google" aria-label="Sign up with Google">
                <i class="fab fa-google"></i>
            </button>
            <button type="button" class="social-btn apple" aria-label="Sign up with Apple">
                <i class="fab fa-apple"></i>
            </button>
            <button type="button" class="social-btn facebook" aria-label="Sign up with Facebook">
                <i class="fab fa-facebook-f"></i>
            </button>
        </div>

        <!-- Login Link -->
        <p class="login-link">Already have an account? <a href="#">Sign in</a></p>

        <!-- Terms and Conditions -->
        <p class="terms">By creating an account, you agree to our <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></p>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const togglePassword = document.getElementById('togglePassword');
            const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
            const passwordInput = document.getElementById('password');
            const confirmPasswordInput = document.getElementById('confirmPassword');
            const form = document.getElementById('signupForm');
            const submitBtn = document.getElementById('submitButton');
            const statusMessage = document.getElementById('statusMessage');
            const bgAnimation = document.querySelector('.bg-animation');
            const passwordStrength = document.getElementById('passwordStrength');

            // Create floating particles
            for (let i = 0; i < 15; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');

                // Random properties
                const size = Math.random() * 5 + 2;
                const posX = Math.random() * 100;
                const posY = Math.random() * 100;
                const delay = Math.random() * 20;
                const duration = Math.random() * 15 + 10;
                const opacity = Math.random() * 0.6 + 0.2;

                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                particle.style.left = `${posX}%`;
                particle.style.top = `${posY}%`;
                particle.style.animationDelay = `${delay}s`;
                particle.style.animationDuration = `${duration}s`;
                particle.style.opacity = opacity;

                bgAnimation.appendChild(particle);
            }

            // Toggle password visibility
            function setupPasswordToggle(toggleElement, inputElement) {
                toggleElement.addEventListener('click', function() {
                    const type = inputElement.getAttribute('type') === 'password' ? 'text' : 'password';
                    inputElement.setAttribute('type', type);
                    const icon = this.querySelector('i');
                    icon.classList.toggle('fa-eye');
                    icon.classList.toggle('fa-eye-slash');
                });
            }

            if (togglePassword) {
                setupPasswordToggle(togglePassword, passwordInput);
            }

            if (toggleConfirmPassword) {
                setupPasswordToggle(toggleConfirmPassword, confirmPasswordInput);
            }

            // Check password strength
            function checkPasswordStrength(password) {
                // Reset
                passwordStrength.className = 'password-strength';

                if (!password) return;

                // Check strength
                let strength = 0;

                // Length
                if (password.length > 7) strength++;
                if (password.length > 11) strength++;

                // Contains numbers
                if (/\d/.test(password)) strength++;

                // Contains special chars
                if (/[!@#$%^&*(),.?":{}|<>]/.test(password)) strength++;

                // Contains both lower and upper case
                if (/[a-z]/.test(password) && /[A-Z]/.test(password)) strength++;

                // Visual feedback
                if (strength < 2) {
                    passwordStrength.classList.add('weak');
                } else if (strength < 4) {
                    passwordStrength.classList.add('medium');
                } else {
                    passwordStrength.classList.add('strong');
                }
            }

            // Password strength check
            passwordInput.addEventListener('input', function() {
                checkPasswordStrength(this.value);

                // Also validate password match
                if (confirmPasswordInput.value) {
                    validatePasswordMatch();
                }
            });

            // Validate password match
            function validatePasswordMatch() {
                if (passwordInput.value !== confirmPasswordInput.value) {
                    confirmPasswordInput.setCustomValidity("Passwords do not match");
                    confirmPasswordInput.style.borderColor = 'var(--error)';
                } else {
                    confirmPasswordInput.setCustomValidity("");
                    confirmPasswordInput.style.borderColor = '';
                }
            }

            confirmPasswordInput.addEventListener('input', validatePasswordMatch);

            // Form submission
            form.addEventListener('submit', async function(e) {
                e.preventDefault();

                // Validate form first
                if (!form.checkValidity()) {
                    // Show first error
                    const invalidInput = form.querySelector(':invalid');
                    if (invalidInput) {
                        invalidInput.focus();
                        showStatus('Please fill in all required fields correctly', 'error');
                    }
                    return;
                }

                // Get form values
                const name = form.name.value.trim();
                const email = form.email.value.trim();
                const password = form.password.value;
                const confirmPassword = form.password_confirmation.value;

                // Additional validation
                if (!validateEmail(email)) {
                    showStatus('Please enter a valid email address', 'error');
                    return;
                }

                if (password.length < 8) {
                    showStatus('Password must be at least 8 characters', 'error');
                    return;
                }

                if (password !== confirmPassword) {
                    showStatus('Passwords do not match', 'error');
                    return;
                }

                // Show loading state
                const originalText = submitBtn.innerHTML;
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Creating Account...';
                submitBtn.disabled = true;

                // Simulate API call (replace with actual fetch in production)
                try {
                    await new Promise(resolve => setTimeout(resolve, 1500));

                    // For demo - randomly decide if it's successful (80% chance)
                    const isSuccess = Math.random() > 0.2;

                    if (isSuccess) {
                        showStatus('Account created successfully! Welcome to our community.', 'success');
                        form.reset();
                        passwordStrength.className = 'password-strength';
                    } else {
                        showStatus('Error creating account. Please try again.', 'error');
                    }
                } catch (error) {
                    console.error('Error:', error);
                    showStatus('An unexpected error occurred. Please try again.', 'error');
                } finally {
                    // Reset button state
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                }
            });

            // Email validation function
            function validateEmail(email) {
                const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return re.test(email);
            }

            // Show status message
            function showStatus(message, type) {
                statusMessage.textContent = message;
                statusMessage.className = 'status-message ' + type;

                // Hide message after 5 seconds
                setTimeout(() => {
                    statusMessage.className = 'status-message';
                    statusMessage.textContent = '';
                }, 5000);
            }

            // Social button click handlers
            document.querySelectorAll('.social-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const service = this.classList.contains('google') ? 'Google' :
                                 this.classList.contains('apple') ? 'Apple' : 'Facebook';

                    // Show loading state
                    const icon = this.querySelector('i');
                    const originalIcon = icon.className;
                    icon.className = 'fas fa-spinner fa-spin';

                    // Simulate social login
                    setTimeout(() => {
                        icon.className = originalIcon;
                        showStatus(`Would normally authenticate with ${service}`, 'success');
                    }, 1000);
                });
            });
        });
    </script>
</body>
</html>
