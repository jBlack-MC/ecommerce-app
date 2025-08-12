<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Forgot Password | Account Recovery</title>
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
      padding: 2rem;
      position: relative;
      overflow: hidden;
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
      max-width: 480px;
      background: var(--card-bg);
      border-radius: var(--border-radius);
      padding: 2.5rem;
      box-shadow: var(--shadow);
      backdrop-filter: blur(8px);
      border: 1px solid rgba(var(--highlight-rgb), 0.3);
      animation: fadeInUp 0.6s cubic-bezier(0.23, 1, 0.32, 1);
      transition: var(--transition);
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
      font-size: 2rem;
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
      font-size: 0.95rem;
      text-align: center;
      margin-bottom: 2rem;
      line-height: 1.6;
    }

    /* Form Elements */
    .form-group {
      position: relative;
      margin-bottom: 1.5rem;
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
      padding: 1rem 1rem 1rem 2.75rem;
      border: 1px solid rgba(0, 0, 0, 0.1);
      border-radius: var(--border-radius);
      font-size: 0.95rem;
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

    /* Button */
    .reset-button {
      width: 100%;
      padding: 1rem;
      background: linear-gradient(135deg, var(--primary) 0%, var(--highlight) 100%);
      color: white;
      border: none;
      border-radius: var(--border-radius);
      font-weight: 600;
      font-size: 1rem;
      cursor: pointer;
      margin-top: 0.5rem;
      transition: var(--transition);
      box-shadow: 0 4px 15px rgba(var(--primary-rgb), 0.2);
      position: relative;
      overflow: hidden;
    }

    .reset-button:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(var(--primary-rgb), 0.3);
    }

    .reset-button:active {
      transform: translateY(0);
    }

    .reset-button::after {
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

    .reset-button:hover::after {
      left: 100%;
    }

    /* Back Link */
    .back-link {
      text-align: center;
      margin-top: 1.5rem;
    }

    .back-link a {
      color: var(--charcoal-gray);
      text-decoration: none;
      font-size: 0.9rem;
      transition: var(--transition);
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
    }

    .back-link a:hover {
      color: var(--primary);
    }

    .back-link i {
      transition: var(--transition);
    }

    .back-link a:hover i {
      transform: translateX(-3px);
    }

    /* Status Message */
    .status-message {
      padding: 0.75rem;
      border-radius: var(--border-radius);
      margin-bottom: 1rem;
      font-size: 0.9rem;
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

    /* Responsive */
    @media (max-width: 768px) {
      .container {
        padding: 2rem;
      }
    }

    @media (max-width: 480px) {
      body {
        padding: 1rem;
      }
      
      .heading {
        font-size: 1.75rem;
      }
      
      .container {
        padding: 1.5rem;
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

  <!-- Main Container -->
  <div class="container">
    <h1 class="heading">Forgot Password</h1>
    <p class="description">Enter your email address below and we'll send you a secure link to reset your password.</p>
    
    <!-- Status message (hidden by default) -->
    <div class="status-message" id="statusMessage"></div>
    
    <form id="passwordResetForm">
      <div class="form-group">
        <input type="email" class="input" id="email" placeholder="Your Email Address" required />
        <i class="fas fa-envelope"></i>
      </div>
      
      <button type="submit" class="reset-button" id="resetButton">
        <span>Send Reset Link</span>
      </button>
    </form>

    <div class="back-link">
      <a href="/login"><i class="fas fa-arrow-left"></i> Back to Sign In</a>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const form = document.getElementById('passwordResetForm');
      const resetButton = document.getElementById('resetButton');
      const emailInput = document.getElementById('email');
      const statusMessage = document.getElementById('statusMessage');
      const bgAnimation = document.querySelector('.bg-animation');

      // Create floating particles
      for (let i = 0; i < 20; i++) {
        const particle = document.createElement('div');
        particle.classList.add('particle');

        // Random properties
        const size = Math.random() * 6 + 2;
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

      // Form submission
      form.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        // Validate email
        const email = emailInput.value.trim();
        if (!validateEmail(email)) {
          showStatus('Please enter a valid email address', 'error');
          return;
        }

        // Show loading state
        const originalText = resetButton.innerHTML;
        resetButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
        resetButton.disabled = true;

        // Simulate API call (replace with actual fetch in production)
        try {
          await new Promise(resolve => setTimeout(resolve, 1500));
          
          // For demo - randomly decide if it's successful (80% chance)
          const isSuccess = Math.random() > 0.2;
          
          if (isSuccess) {
            showStatus('Password reset link sent successfully! Check your email.', 'success');
            form.reset();
          } else {
            showStatus('Error sending reset link. Please try again.', 'error');
          }
        } catch (error) {
          console.error('Error:', error);
          showStatus('An unexpected error occurred. Please try again.', 'error');
        } finally {
          // Reset button state
          resetButton.innerHTML = originalText;
          resetButton.disabled = false;
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
    });
  </script>
</body>
</html>