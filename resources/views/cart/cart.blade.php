<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping Cart - Bro's Thrifting</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Your cart at Bro's Thrifting - Premium secondhand fashion marketplace">
    
    <!-- Fonts and Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
    :root {
        /* Bro's Thrifting Color Palette */
        --deep-black: #20262D;
        --urban-green: #4B5A4D;
        --cool-sky-blue: #7D8D97;
        --neutral-beige: #D6D1C2;
        --charcoal-gray: #5B5F66;
        --accent: #8A9A8B;
        --light-bg: #F5F3EC;
        --forest-moss: #597e6a;
        --oasis-teal: #598a82;
        
        /* Additional variables */
        --primary: var(--urban-green);
        --secondary: var(--oasis-teal);
        --tertiary: var(--cool-sky-blue);
        --primary-rgb: 75, 90, 77;
        --secondary-rgb: 89, 138, 130;
        --accent-rgb: 138, 154, 139;
        --dark: var(--deep-black);
        --light: white;
        --gray: var(--charcoal-gray);
        --light-gray: #e0e0e0;
        --highlight: var(--accent);
        --error: #e63946;
        --header-height: 70px;
        
        /* Other variables */
        --border-radius: 8px;
        --shadow: 0 4px 12px rgba(0,0,0,0.1);
        --transition: all 0.3s ease;
    }

    /* ========== BASE STYLES ========== */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background-color: var(--light-bg);
        color: var(--dark);
        line-height: 1.6;
        padding-top: var(--header-height); /* Account for fixed header */
    }

    /* Smooth scrolling for modern browsers */
    html {
        scroll-behavior: smooth;
    }

    .container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 20px;
    }

    .page-title {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 30px;
        color: var(--urban-green);
        position: relative;
        padding-bottom: 10px;
    }

    .page-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100px;
        height: 3px;
        background: var(--oasis-teal);
        border-radius: 3px;
    }

    /* ========== HEADER SECTION ========== */
    header {
        background: var(--deep-black);
        color: var(--neutral-beige);
        padding: 10px 0;
        box-shadow: var(--shadow);
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1000;
    }

    .header-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 10px;
    }

    .logo {
        font-size: 1.5rem;
        font-weight: 700;
        display: flex;
        align-items: center;
        color: var(--neutral-beige);
    }

    .logo span {
        color: var(--cool-sky-blue);
    }

    .logo i {
        margin-right: 8px;
        color: var(--neutral-beige);
    }

    .search-bar {
        flex: 1;
        min-width: 220px;
        max-width: 550px;
        position: relative;
    }

    .search-bar input {
        width: 100%;
        padding: 10px 18px 10px 40px;
        border: none;
        border-radius: 25px;
        font-size: 0.95rem;
        box-shadow: var(--shadow);
        transition: var(--transition);
        background-color: var(--neutral-beige);
    }

    .search-bar input:focus {
        outline: none;
        box-shadow: 0 0 0 2px var(--highlight);
    }

    .search-bar::before {
        content: '\f002';
        font-family: 'Font Awesome 6 Free';
        font-weight: 900;
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: var(--gray);
    }

    .user-actions {
        display: flex;
        gap: 15px;
    }

    .user-actions a {
        display: flex;
        flex-direction: column-reverse;
        align-items: center;
        color: var(--neutral-beige);
        font-size: 135%;
        text-decoration: none;
        transition: var(--transition);
        position: relative;
    }

    .user-actions a:hover {
        color: var(--cool-sky-blue);
    }

    .user-actions a span {
        margin-top: 4px;
        font-size: 0.75rem;
        opacity: 0;
        color: transparent;
        transform: translateY(5px);
        transition: all 0.3s ease;
        pointer-events: none;
    }

    /* Hover effect for user actions */
    .user-actions a:hover span {
        opacity: 1;
        transform: translateY(0);
        color: var(--cool-sky-blue);
        pointer-events: auto;
    }

    .cart-indicator {
        position: absolute;
        top: -5px;
        right: -5px;
        background-color: var(--oasis-teal);
        color: white;
        border-radius: 50%;
        width: 20px;
        height: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.7rem;
        font-weight: bold;
    }

    /* ========== CART CONTENT ========== */
    .cart-wrapper {
        display: grid;
        grid-template-columns: 1fr 350px;
        gap: 30px;
        margin-top: 20px;
    }

    @media (max-width: 992px) {
        .cart-wrapper {
            grid-template-columns: 1fr;
        }
    }

    .cart-items {
        background: var(--neutral-beige);
        border-radius: var(--border-radius);
        padding: 25px;
        box-shadow: var(--shadow);
        border: 1px solid var(--charcoal-gray);
    }

    .cart-summary {
        background: var(--neutral-beige);
        border-radius: var(--border-radius);
        padding: 25px;
        box-shadow: var(--shadow);
        border: 1px solid var(--charcoal-gray);
        height: fit-content;
        position: sticky;
        top: calc(var(--header-height) + 20px);
    }

    .cart-summary h2, .cart-items h2 {
        font-size: 1.5rem;
        margin-bottom: 20px;
        padding-bottom: 15px;
        border-bottom: 2px solid var(--light-gray);
        color: var(--urban-green);
    }

    /* Cart item styles */
    .cart-item {
        display: flex;
        gap: 20px;
        padding: 20px 0;
        border-bottom: 1px solid var(--light-gray);
    }

    .cart-item:last-child {
        border-bottom: none;
    }

    .cart-item-image {
        width: 150px;
        height: 150px;
        border-radius: var(--border-radius);
        overflow: hidden;
        flex-shrink: 0;
        background-color: var(--light-bg);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .cart-item-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .cart-item-image i {
        font-size: 3rem;
        color: rgba(0, 0, 0, 0.1);
    }

    .cart-item-details {
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .cart-item-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 10px;
    }

    .cart-item-title {
        font-size: 1.2rem;
        font-weight: 600;
        color: var(--dark);
        margin-bottom: 5px;
    }

    .cart-item-brand {
        color: var(--gray);
        font-size: 0.9rem;
        margin-bottom: 10px;
    }

    .cart-item-price {
        font-size: 1.1rem;
        font-weight: 700;
        color: var(--urban-green);
        margin-bottom: 15px;
    }

    .cart-item-actions {
        display: flex;
        gap: 15px;
        align-items: center;
        margin-top: auto;
    }

    .quantity-selector {
        display: flex;
        align-items: center;
        border: 1px solid var(--charcoal-gray);
        border-radius: var(--border-radius);
        overflow: hidden;
    }

    .quantity-btn {
        width: 35px;
        height: 35px;
        background: var(--light-bg);
        border: none;
        font-size: 1.2rem;
        cursor: pointer;
        transition: var(--transition);
    }

    .quantity-btn:hover {
        background: var(--cool-sky-blue);
        color: white;
    }

    .quantity-input {
        width: 50px;
        height: 35px;
        border: none;
        text-align: center;
        font-size: 1rem;
        background: white;
    }

    .remove-btn {
        background: none;
        border: none;
        color: var(--error);
        cursor: pointer;
        font-size: 0.9rem;
        display: flex;
        align-items: center;
        gap: 5px;
        transition: var(--transition);
    }

    .remove-btn:hover {
        color: #b21f2d;
    }

    .cart-item-total {
        font-size: 1.2rem;
        font-weight: 700;
        color: var(--dark);
        min-width: 100px;
        text-align: right;
    }

    /* Cart summary styles */
    .summary-row {
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
        padding-bottom: 10px;
        border-bottom: 1px dashed var(--light-gray);
    }

    .summary-row:last-child {
        border-bottom: none;
        margin-bottom: 0;
        padding-bottom: 0;
        font-weight: 700;
        font-size: 1.2rem;
    }

    .promo-section {
        margin: 20px 0;
    }

    .promo-input {
        display: flex;
        gap: 10px;
        margin-top: 10px;
    }

    .promo-input input {
        flex: 1;
        padding: 10px 15px;
        border: 1px solid var(--charcoal-gray);
        border-radius: var(--border-radius);
        background: white;
    }

    .promo-input button {
        background: var(--cool-sky-blue);
        color: white;
        border: none;
        border-radius: var(--border-radius);
        padding: 10px 15px;
        cursor: pointer;
        transition: var(--transition);
    }

    .promo-input button:hover {
        background: var(--urban-green);
    }

    .checkout-btn {
        width: 100%;
        padding: 15px;
        background: var(--urban-green);
        color: white;
        border: none;
        border-radius: var(--border-radius);
        font-weight: 600;
        font-size: 1.1rem;
        cursor: pointer;
        transition: var(--transition);
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        margin-top: 20px;
    }

    .checkout-btn:hover {
        background: var(--oasis-teal);
        transform: translateY(-2px);
    }

    .continue-shopping {
        display: block;
        text-align: center;
        margin-top: 15px;
        color: var(--oasis-teal);
        font-weight: 500;
        text-decoration: none;
        transition: var(--transition);
    }

    .continue-shopping:hover {
        color: var(--urban-green);
        text-decoration: underline;
    }

    .empty-cart {
        text-align: center;
        padding: 50px 20px;
    }

    .empty-cart i {
        font-size: 4rem;
        color: var(--cool-sky-blue);
        margin-bottom: 20px;
    }

    .empty-cart h2 {
        font-size: 1.8rem;
        margin-bottom: 15px;
        color: var(--urban-green);
    }

    .empty-cart p {
        margin-bottom: 25px;
        color: var(--charcoal-gray);
    }

    .empty-cart-btn {
        display: inline-block;
        padding: 12px 30px;
        background: var(--urban-green);
        color: white;
        border: none;
        border-radius: var(--border-radius);
        font-weight: 600;
        cursor: pointer;
        transition: var(--transition);
        text-decoration: none;
    }

    .empty-cart-btn:hover {
        background: var(--oasis-teal);
        transform: translateY(-2px);
    }

    /* ========== FOOTER STYLES ========== */
    footer {
        background: linear-gradient(135deg, var(--urban-green), var(--deep-black));
        color: var(--neutral-beige);
        padding: 25px 0 15px;
        margin-top: 30px;
    }

    .footer-content {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        gap: 15px;
        align-items: start;
    }

    .footer-section h3 {
        font-size: 1.1rem;
        margin-bottom: 10px;
        position: relative;
        padding-bottom: 5px;
    }

    .footer-section h3::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 40px;
        height: 2px;
        background: var(--neutral-beige);
    }

    .footer-links {
        list-style: none;
        padding-left: 0;
    }

    .footer-links li {
        margin-bottom: 8px;
    }

    .footer-links a {
        color: rgba(214, 209, 194, 0.8);
        text-decoration: none;
        transition: var(--transition);
        font-size: 0.9rem;
        display: inline-block;
    }

    .footer-links a:hover {
        color: var(--neutral-beige);
        transform: translateX(5px);
    }

    .social-icons {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 10px;
        margin-top: 10px;
        font-size: 0.9rem;
    }

    .social-icons strong {
        margin-right: 8px;
    }

    .social-icons a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 32px;
        height: 32px;
        background: rgba(214, 209, 194, 0.1);
        border-radius: 50%;
        color: var(--neutral-beige);
        transition: var(--transition);
    }

    .social-icons a:hover {
        background: var(--cool-sky-blue);
        transform: translateY(-2px);
    }

    .copyright {
        text-align: center;
        padding-top: 15px;
        border-top: 1px solid rgba(214, 209, 194, 0.1);
        font-size: 0.8rem;
    }

    /* ========== RESPONSIVE DESIGN ========== */
    @media (max-width: 1200px) {
        .footer-content {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 992px) {
        .cart-item-image {
            width: 120px;
            height: 120px;
        }
    }

    @media (max-width: 768px) {
        .header-content {
            flex-direction: column;
            align-items: stretch;
        }

        .search-bar {
            margin: 10px 0;
        }

        .cart-item {
            flex-direction: column;
            align-items: flex-start;
        }

        .cart-item-image {
            width: 100%;
            height: 200px;
        }

        .cart-item-total {
            text-align: left;
            margin-top: 10px;
        }

        .footer-content {
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
    }

    @media (max-width: 576px) {
        .cart-item-actions {
            flex-wrap: wrap;
        }

        .footer-content {
            grid-template-columns: 1fr;
        }

        .footer-section h3::after {
            width: 30px;
        }
    }

    @media (max-width: 420px) {
        .cart-item-image {
            height: 160px;
        }
    }

    /* ========== ANIMATIONS ========== */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .cart-item {
        animation: fadeIn 0.3s ease forwards;
    }

    /* Delay animations for cart items */
    .cart-items .cart-item:nth-child(1) { animation-delay: 0.1s; }
    .cart-items .cart-item:nth-child(2) { animation-delay: 0.2s; }
    .cart-items .cart-item:nth-child(3) { animation-delay: 0.3s; }
    .cart-items .cart-item:nth-child(4) { animation-delay: 0.4s; }
    </style>
</head>
<body>
    <!-- ========== HEADER SECTION ========== -->
    <header>
        <div class="container">
            <div class="header-content">
                <!-- Logo with shopping bag icon -->
                <div class="logo">
                    <i class="fas fa-shopping-bag"></i>Bro's <span>Thrifting</span>
                </div>

                <!-- Search bar with enhanced accessibility -->
                <div class="search-bar">
                    <input type="text" placeholder="Search for vintage, streetwear, accessories..." aria-label="Search products" id="search-input">
                </div>

                <!-- User actions with hover effects -->
                <div class="user-actions">
                    <a href="#" title="Account" aria-label="Account">
                        <i class="fas fa-user"></i>
                        <span>Account</span>
                    </a>
                    <a href="#" title="Wishlist" aria-label="Wishlist">
                        <i class="fas fa-heart"></i>
                        <span>Wishlist</span>
                    </a>
                    <a href="#" title="Cart" aria-label="Cart" class="active-cart">
                        <i class="fas fa-shopping-cart"></i>
                        <span>Cart</span>
                        <div class="cart-indicator">3</div>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- ========== MAIN CART CONTENT ========== -->
    <div class="container">
        <h1 class="page-title">Your Shopping Cart</h1>
        
        <div class="cart-wrapper">
            <!-- Cart Items -->
            <div class="cart-items">
                <h2>Cart Items</h2>
                
                <div class="cart-items-container">
                    <!-- Cart Item 1 -->
                    <div class="cart-item">
                        <div class="cart-item-image">
                            <img src="https://images.unsplash.com/photo-1527719327859-c6ce80353573?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&h=400&q=80" alt="Vintage Sneakers">
                        </div>
                        <div class="cart-item-details">
                            <div class="cart-item-header">
                                <div>
                                    <h3 class="cart-item-title">Vintage Air Jordan 1 Retro High OG</h3>
                                    <div class="cart-item-brand">Nike</div>
                                </div>
                                <button class="remove-btn" aria-label="Remove item">
                                    <i class="fas fa-trash"></i> Remove
                                </button>
                            </div>
                            <div class="cart-item-price">R 3,200</div>
                            <div class="cart-item-actions">
                                <div class="quantity-selector">
                                    <button class="quantity-btn minus" aria-label="Decrease quantity">-</button>
                                    <input type="number" class="quantity-input" value="1" min="1" aria-label="Quantity">
                                    <button class="quantity-btn plus" aria-label="Increase quantity">+</button>
                                </div>
                            </div>
                        </div>
                        <div class="cart-item-total">R 3,200</div>
                    </div>
                    
                    <!-- Cart Item 2 -->
                    <div class="cart-item">
                        <div class="cart-item-image">
                            <img src="https://images.unsplash.com/photo-1489987707025-afc232f7ea0f?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&h=400&q=80" alt="Denim Jacket">
                        </div>
                        <div class="cart-item-details">
                            <div class="cart-item-header">
                                <div>
                                    <h3 class="cart-item-title">Vintage 90s Denim Trucker Jacket</h3>
                                    <div class="cart-item-brand">Levi's</div>
                                </div>
                                <button class="remove-btn" aria-label="Remove item">
                                    <i class="fas fa-trash"></i> Remove
                                </button>
                            </div>
                            <div class="cart-item-price">R 1,250</div>
                            <div class="cart-item-actions">
                                <div class="quantity-selector">
                                    <button class="quantity-btn minus" aria-label="Decrease quantity">-</button>
                                    <input type="number" class="quantity-input" value="1" min="1" aria-label="Quantity">
                                    <button class="quantity-btn plus" aria-label="Increase quantity">+</button>
                                </div>
                            </div>
                        </div>
                        <div class="cart-item-total">R 1,250</div>
                    </div>
                    
                    <!-- Cart Item 3 -->
                    <div class="cart-item">
                        <div class="cart-item-image">
                            <img src="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&h=400&q=80" alt="Designer Watch">
                        </div>
                        <div class="cart-item-details">
                            <div class="cart-item-header">
                                <div>
                                    <h3 class="cart-item-title">Vintage Datejust 36mm Two-Tone</h3>
                                    <div class="cart-item-brand">Rolex</div>
                                </div>
                                <button class="remove-btn" aria-label="Remove item">
                                    <i class="fas fa-trash"></i> Remove
                                </button>
                            </div>
                            <div class="cart-item-price">R 85,000</div>
                            <div class="cart-item-actions">
                                <div class="quantity-selector">
                                    <button class="quantity-btn minus" aria-label="Decrease quantity">-</button>
                                    <input type="number" class="quantity-input" value="1" min="1" aria-label="Quantity">
                                    <button class="quantity-btn plus" aria-label="Increase quantity">+</button>
                                </div>
                            </div>
                        </div>
                        <div class="cart-item-total">R 85,000</div>
                    </div>
                </div>
            </div>
            
            <!-- Cart Summary -->
            <div class="cart-summary">
                <h2>Order Summary</h2>
                
                <div class="summary-row">
                    <span>Subtotal:</span>
                    <span>R 89,450</span>
                </div>
                <div class="summary-row">
                    <span>Shipping:</span>
                    <span>R 120</span>
                </div>
                <div class="summary-row">
                    <span>Tax:</span>
                    <span>R 1,789</span>
                </div>
                <div class="summary-row">
                    <span>Total:</span>
                    <span>R 91,359</span>
                </div>
                
                <div class="promo-section">
                    <h3>Promo Code</h3>
                    <div class="promo-input">
                        <input type="text" placeholder="Enter promo code" aria-label="Promo code">
                        <button>Apply</button>
                    </div>
                </div>
                
                <button class="checkout-btn" aria-label="Proceed to checkout">
                    <i class="fas fa-lock"></i> Proceed to Checkout
                </button>
                
                <!-- Cart Summary Section -->
                <a href="shop.html" class="continue-shopping">
                    <i class="fas fa-arrow-left"></i> Continue Shopping
                </a>
            </div>
        </div>
    </div>

    <!-- ========== FOOTER SECTION ========== -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <!-- About Section -->
                <div class="footer-section">
                    <h3>Bro's Thrifting</h3>
                    <p>Your one-stop destination for all things vintage and secondhand fashion. We deliver style straight to your door!</p>
                    <div class="social-icons">
                        <strong>Follow us</strong>
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>

                <!-- Account Links -->
                <div class="footer-section">
                    <h3>Account</h3>
                    <ul class="footer-links">
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Track Order</a></li>
                        <li><a href="#">Personal Information</a></li>
                        <li><a href="#">Invoices</a></li>
                    </ul>
                </div>

                <!-- Quick Links -->
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Shop All</a></li>
                        <li><a href="#">New Arrivals</a></li>
                        <li><a href="#">Best Sellers</a></li>
                        <li><a href="#">Special Offers</a></li>
                    </ul>
                </div>

                <!-- Company Links -->
                <div class="footer-section">
                    <h3>Company</h3>
                    <ul class="footer-links">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>

                <!-- Customer Service Links -->
                <div class="footer-section">
                    <h3>Customer Service</h3>
                    <ul class="footer-links">
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Shipping Policy</a></li>
                        <li><a href="#">Returns & Refunds</a></li>
                        <li><a href="#">Track Order</a></li>
                    </ul>
                </div>

                <!-- Newsletter Subscription -->
                <div class="footer-section">
                    <h3>Newsletter</h3>
                    <p>Subscribe to get special offers, new arrivals, and thrifting tips.</p>
                    <div class="search-bar" style="margin-top: 15px;">
                        <input type="text" placeholder="Your email address" aria-label="Email for newsletter">
                    </div>
                    <button class="subscribe-button" style="margin-top: 10px;" aria-label="Subscribe to newsletter">
                        Subscribe
                    </button>
                </div>
            </div>

            <!-- Copyright Notice -->
            <div class="copyright">
                <p>&copy; 2025 Bro's Thrifting. All rights reserved. | Designed with <i class="fas fa-heart" style="color: var(--cool-sky-blue);"></i></p>
            </div>
        </div>
    </footer>

    <!-- ========== JAVASCRIPT ========== -->
    <script>
    // Cart management functions
    function getCart() {
        const cart = localStorage.getItem('broCart');
        return cart ? JSON.parse(cart) : [];
    }

    function saveCart(cart) {
        localStorage.setItem('broCart', JSON.stringify(cart));
        updateCartIndicator();
        renderCartItems();
        updateCartSummary();
    }

    function updateCartIndicator() {
        const cart = getCart();
        const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
        const indicators = document.querySelectorAll('.cart-indicator');
        indicators.forEach(indicator => {
            if (totalItems > 0) {
                indicator.textContent = totalItems;
                indicator.style.display = 'flex';
            } else {
                indicator.style.display = 'none';
            }
        });
    }

    function renderCartItems() {
        const cart = getCart();
        const container = document.querySelector('.cart-items-container');
        if (!container) return;

        if (cart.length === 0) {
            container.innerHTML = `
                <div class="empty-cart">
                    <i class="fas fa-shopping-cart"></i>
                    <h2>Your cart is empty</h2>
                    <p>Looks like you haven't added anything to your cart yet</p>
                    <a href="shop.html" class="empty-cart-btn">Start Shopping</a>
                </div>
            `;
            return;
        }

        container.innerHTML = cart.map(item => `
            <div class="cart-item" data-id="${item.id}">
                <div class="cart-item-image">
                    <img src="${item.image}" alt="${item.title}">
                </div>
                <div class="cart-item-details">
                    <div class="cart-item-header">
                        <div>
                            <h3 class="cart-item-title">${item.title}</h3>
                            <div class="cart-item-brand">${item.brand}</div>
                        </div>
                        <button class="remove-btn" aria-label="Remove item">
                            <i class="fas fa-trash"></i> Remove
                        </button>
                    </div>
                    <div class="cart-item-price">R ${item.price.toLocaleString()}</div>
                    <div class="cart-item-actions">
                        <div class="quantity-selector">
                            <button class="quantity-btn minus" aria-label="Decrease quantity">-</button>
                            <input type="number" class="quantity-input" value="${item.quantity}" min="1" aria-label="Quantity">
                            <button class="quantity-btn plus" aria-label="Increase quantity">+</button>
                        </div>
                    </div>
                </div>
                <div class="cart-item-total">R ${(item.price * item.quantity).toLocaleString()}</div>
            </div>
        `).join('');

        attachCartItemEvents();
    }

    function updateCartSummary() {
        const cart = getCart();
        let subtotal = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
        const shipping = 120;
        const tax = subtotal * 0.02;
        const total = subtotal + shipping + tax;

        const summaryRows = document.querySelectorAll('.summary-row');
        if (summaryRows.length > 0) {
            summaryRows[0].querySelector('span:last-child').textContent = `R ${subtotal.toLocaleString()}`;
            summaryRows[1].querySelector('span:last-child').textContent = `R ${shipping.toLocaleString()}`;
            summaryRows[2].querySelector('span:last-child').textContent = `R ${tax.toLocaleString()}`;
            summaryRows[3].querySelector('span:last-child').textContent = `R ${total.toLocaleString()}`;
        }
    }

    function attachCartItemEvents() {
        // Quantity adjustment
        document.querySelectorAll('.quantity-btn').forEach(button => {
            button.addEventListener('click', function() {
                const input = this.parentElement.querySelector('.quantity-input');
                let value = parseInt(input.value);
                const itemId = this.closest('.cart-item').getAttribute('data-id');
                const cart = getCart();
                const item = cart.find(i => i.id === itemId);

                if (this.classList.contains('minus')) {
                    if (value > 1) {
                        input.value = value - 1;
                        if (item) item.quantity = value - 1;
                    }
                } else if (this.classList.contains('plus')) {
                    input.value = value + 1;
                    if (item) item.quantity = value + 1;
                }

                saveCart(cart);
            });
        });

        // Quantity input change
        document.querySelectorAll('.quantity-input').forEach(input => {
            input.addEventListener('change', function() {
                if (this.value < 1) this.value = 1;
                const itemId = this.closest('.cart-item').getAttribute('data-id');
                const cart = getCart();
                const item = cart.find(i => i.id === itemId);

                if (item) {
                    item.quantity = parseInt(this.value);
                    saveCart(cart);
                }
            });
        });

        // Remove item
        document.querySelectorAll('.remove-btn').forEach(button => {
            button.addEventListener('click', function() {
                const cartItem = this.closest('.cart-item');
                const itemId = cartItem.getAttribute('data-id');
                const cart = getCart().filter(item => item.id !== itemId);

                cartItem.style.opacity = '0';
                cartItem.style.transform = 'translateX(20px)';

                setTimeout(() => {
                    saveCart(cart);
                }, 300);
            });
        });
    }

    document.addEventListener('DOMContentLoaded', function() {
        updateCartIndicator();
        renderCartItems();
        updateCartSummary();

        // Update all cart links to point to cart.html
        document.querySelectorAll('a[href*="/cart"]').forEach(link => {
            link.href = 'cart.html';
        });

        // Update continue shopping link
        const continueLink = document.querySelector('.continue-shopping');
        if (continueLink) continueLink.href = 'shop.html';

        // Checkout button functionality
        const checkoutBtn = document.querySelector('.checkout-btn');
        if (checkoutBtn) {
            checkoutBtn.addEventListener('click', function() {
                alert('Checkout functionality would be implemented here');
            });
        }
    });
</script>
</body>
</html>