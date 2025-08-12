<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign In | Premium Experience</title>
  <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
  :root {
    /* Existing colors */
    --deep-black: #20262D;
    --urban-green: #4B5A4D;
    --cool-sky-blue: #7D8D97;
    --neutral-beige: #D6D1C2;
    --charcoal-gray: #5B5F66;
    --accent: #8A9A8B;
    --light-bg: #F5F3EC;

    /* New colors */
    --forest-moss: #597e6a;       /* A natural, earthy green */
    --oasis-teal: #598a82;        /* A calm, watery blue-green */
    
    /* Additional variables needed for this page */
    --primary: var(--urban-green);
    --secondary: var(--oasis-teal);
    --primary-rgb: 75, 90, 77;
    --secondary-rgb: 89, 138, 130;
    --accent-rgb: 138, 154, 139;
    --gray: var(--charcoal-gray);
    --error: #e63946;
    
    /* Other existing variables */
    --border-radius: 8px;
    --shadow: 0 4px 12px rgba(0,0,0,0.1);
    --transition: all 0.3s ease;
}

    /* Base Reset */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 2rem;
      color: var(--deep-black);
      position: relative;
      overflow: hidden;
      background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
    }

    /* Enhanced Multi-Layered Background Animation */
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
      animation: gradientRotate 25s linear infinite;
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
        rgba(var(--accent-rgb), 0.6) 0%,
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
        rgba(var(--accent-rgb), 0.4),
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

    /* Main Container - Wider and Modern */
    .signin-container {
      width: 100%;
      max-width: 500px;
      background: rgba(255, 255, 255, 0.95);
      border-radius: 20px;
      padding: 2.5rem;
      box-shadow: 0 15px 50px rgba(var(--primary-rgb), 0.2);
      backdrop-filter: blur(10px);
      border: 1px solid var(--oasis-teal);
      animation: fadeInUp 0.6s cubic-bezier(0.23, 1, 0.32, 1);
      transition: all 0.3s ease;
    }

    .signin-container:hover {
      transform: translateY(-5px);
      box-shadow: 0 25px 50px rgba(var(--accent-rgb), 0.3);
      border-color: var(--forest-moss);
    }

    /* Header Section with Gradient Text */
    .signin-header {
      text-align: center;
      margin-bottom: 2rem;
    }

    .signin-title {
      font-size: 2rem;
      font-weight: 800;
      margin-bottom: 0.5rem;
      background: linear-gradient(to right, var(--primary), var(--accent));
      -webkit-background-clip: text;
      background-clip: text;
      -webkit-text-fill-color: transparent;
      letter-spacing: -0.5px;
    }

    .signin-subtitle {
      color: var(--gray);
      font-size: 0.95rem;
      font-weight: 400;
    }

    /* Form Elements - Modern Styling */
    .input-group {
      position: relative;
      margin-bottom: 1.25rem;
    }

    .input-icon {
      position: absolute;
      left: 1rem;
      top: 50%;
      transform: translateY(-50%);
      color: var(--gray);
      font-size: 1rem;
      transition: all 0.3s;
    }

    .form-input {
      width: 100%;
      padding: 1rem 1rem 1rem 2.75rem;
      border: 1px solid rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      font-size: 0.95rem;
      transition: all 0.3s;
      background-color: rgba(255, 255, 255, 0.8);
      font-family: inherit;
    }

    .form-input:focus {
      outline: none;
      border-color: var(--primary);
      box-shadow: 0 0 0 3px rgba(var(--primary-rgb), 0.1);
      background-color: white;
    }

    .form-input:focus + .input-icon {
      color: var(--primary);
    }

    /* Password Toggle */
    .password-toggle {
      position: absolute;
      right: 1rem;
      top: 50%;
      transform: translateY(-50%);
      color: var(--gray);
      cursor: pointer;
      font-size: 1rem;
      transition: color 0.2s;
    }

    .password-toggle:hover {
      color: var(--primary);
    }

    /* Forgot Password Link */
    .forgot-password {
      display: block;
      text-align: right;
      margin: -0.75rem 0 1.5rem;
    }

    .forgot-password a {
      font-size: 0.85rem;
      color: var(--gray);
      text-decoration: none;
      transition: all 0.2s;
      font-weight: 500;
    }

    .forgot-password a:hover {
      color: var(--primary);
      text-decoration: underline;
    }

    /* Submit Button - Gradient & Animated */
    .submit-btn {
      width: 100%;
      padding: 1rem;
      background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
      color: white;
      border: none;
      border-radius: 10px;
      font-weight: 600;
      font-size: 1rem;
      cursor: pointer;
      margin-top: 1rem;
      transition: all 0.3s;
      box-shadow: 0 4px 15px rgba(var(--primary-rgb), 0.3);
      position: relative;
      overflow: hidden;
    }

    .submit-btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(var(--primary-rgb), 0.4);
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
      transition: all 0.3s;
    }

    .submit-btn:hover::after {
      left: 100%;
    }

    /* Divider - Modern Style */
    .divider {
      display: flex;
      align-items: center;
      margin: 1.5rem 0;
      color: var(--gray);
      font-size: 0.8rem;
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
      margin: 0 1rem;
    }

    /* Social Buttons - Modern Circle Style */
    .social-buttons {
      display: flex;
      justify-content: center;
      gap: 1rem;
      margin-bottom: 1.5rem;
    }

    .social-btn {
      width: 3rem;
      height: 3rem;
      border-radius: 50%;
      background: var(--neutral-beige);
      border: none;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: all 0.3s;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .social-btn:hover {
      transform: translateY(-3px) scale(1.05);
      box-shadow: 0 8px 15px rgba(0, 0, 0, 0.12);
    }

    .social-btn i {
      font-size: 1.2rem;
      color: var(--gray);
      transition: color 0.3s;
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

    /* Footer Links */
    .signup-link {
      text-align: center;
      font-size: 0.95rem;
      color: var(--gray);
      margin-top: 1.5rem;
    }

    .signup-link a {
      color: var(--primary);
      text-decoration: none;
      font-weight: 600;
      transition: all 0.2s;
      position: relative;
    }

    .signup-link a::after {
      content: '';
      position: absolute;
      bottom: -2px;
      left: 0;
      width: 0;
      height: 2px;
      background: var(--primary);
      transition: width 0.3s;
    }

    .signup-link a:hover::after {
      width: 100%;
    }

    /* Terms - Modern Compact Style */
    .terms {
      font-size: 0.75rem;
      color: var(--gray);
      text-align: center;
      margin-top: 1.5rem;
      line-height: 1.6;
    }

    .terms a {
      color: var(--primary);
      text-decoration: none;
      font-weight: 500;
      transition: all 0.2s;
    }

    .terms a:hover {
      text-decoration: underline;
    }

    /* Error Message Styling */
    .error-message {
      color: var(--error);
      font-size: 0.8rem;
      margin-top: 0.5rem;
      display: none;
      padding-left: 0.5rem;
    }

    /* Loading Spinner */
    .spinner {
      display: none;
      width: 20px;
      height: 20px;
      border: 3px solid rgba(255, 255, 255, 0.3);
      border-radius: 50%;
      border-top-color: white;
      animation: spin 1s ease-in-out infinite;
      margin-left: 10px;
    }

    @keyframes spin {
      to { transform: rotate(360deg); }
    }

    /* Animations */
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

    /* Responsive Adjustments */
    @media (max-width: 768px) {
      .signin-container {
        padding: 2rem;
      }
    }

    @media (max-width: 480px) {
      body {
        padding: 1rem;
      }

      .signin-title {
        font-size: 1.75rem;
      }
    }
  </style>
</head>
<body>
  <!-- Enhanced Background Animation -->
  <div class="bg-animation">
    <div class="bg-layer layer-1"></div>
    <div class="bg-layer layer-2"></div>
    <div class="bg-layer layer-3"></div>
  </div>

  <!-- Main Signin Container -->
  <div class="signin-container">
    <div class="signin-header">
      <h1 class="signin-title">Welcome Back</h1>
      <p class="signin-subtitle">Sign in to access your account</p>
    </div>

    <!-- Signin Form -->
    <form id="signinForm">
      <div class="input-group">
        <i class="fas fa-envelope input-icon"></i>
        <input type="email" class="form-input" placeholder="Email Address" required>
      </div>

      <div class="input-group">
        <i class="fas fa-lock input-icon"></i>
        <input type="password" class="form-input" id="password" placeholder="Password" required>
        <i class="fas fa-eye password-toggle" id="togglePassword"></i>
      </div>

      <div class="forgot-password">
        <a href="#">Forgot password?</a>
      </div>

      <button type="submit" class="submit-btn">
        <span>Sign In</span>
        <div class="spinner" id="spinner"></div>
      </button>
    </form>

    <!-- Social Login Divider -->
    <div class="divider">or sign in with</div>

    <!-- Social Login Buttons -->
    <div class="social-buttons">
      <button class="social-btn google" aria-label="Sign in with Google">
        <i class="fab fa-google"></i>
      </button>
      <button class="social-btn apple" aria-label="Sign in with Apple">
        <i class="fab fa-apple"></i>
      </button>
      <button class="social-btn facebook" aria-label="Sign in with Facebook">
        <i class="fab fa-facebook-f"></i>
      </button>
    </div>

    <!-- Signup Link -->
    <p class="signup-link">Don't have an account? <a href="#">Sign up</a></p>

    <!-- Terms and Conditions -->
    <p class="terms">By signing in, you agree to our <a href="#">Terms</a> and <a href="#">Privacy Policy</a></p>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const togglePassword = document.getElementById('togglePassword');
      const passwordInput = document.getElementById('password');
      const form = document.getElementById('signinForm');
      const submitBtn = form.querySelector('button[type="submit"]');
      const spinner = document.getElementById('spinner');
      const bgAnimation = document.querySelector('.bg-animation');

      // Create floating particles
      for (let i = 0; i < 15; i++) {
        const particle = document.createElement('div');
        particle.classList.add('particle');

        // Random properties
        const size = Math.random() * 5 + 3;
        const posX = Math.random() * 100;
        const posY = Math.random() * 100;
        const delay = Math.random() * 15;
        const duration = Math.random() * 10 + 10;

        particle.style.width = `${size}px`;
        particle.style.height = `${size}px`;
        particle.style.left = `${posX}%`;
        particle.style.top = `${posY}%`;
        particle.style.animationDelay = `${delay}s`;
        particle.style.animationDuration = `${duration}s`;

        bgAnimation.appendChild(particle);
      }

      // Toggle password visibility
      togglePassword.addEventListener('click', function() {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        this.classList.toggle('fa-eye');
        this.classList.toggle('fa-eye-slash');
      });

      // Form submission
      form.addEventListener('submit', async function(e) {
        e.preventDefault();

        // Show loading state
        submitBtn.disabled = true;
        spinner.style.display = 'block';
        submitBtn.querySelector('span').textContent = 'Signing in...';

        // Simulate API call
        try {
          await new Promise(resolve => setTimeout(resolve, 1500));

          // For demo purposes - in a real app you would validate credentials
          alert('Sign in successful! Redirecting to dashboard...');

          // Reset form
          form.reset();
        } catch (error) {
          console.error('Sign in error:', error);
          alert('Sign in failed. Please try again.');
        } finally {
          // Reset button state
          submitBtn.disabled = false;
          spinner.style.display = 'none';
          submitBtn.querySelector('span').textContent = 'Sign In';
        }
      });

      // Social button click handlers
      document.querySelectorAll('.social-btn').forEach(btn => {
        btn.addEventListener('click', function() {
          const service = this.classList.contains('google') ? 'Google' :
                         this.classList.contains('apple') ? 'Apple' : 'Facebook';
          alert(`Would normally authenticate with ${service}`);
        });
      });
    });
  </script>
</body>
</html>