<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $product->title }} | Bro's Thrifting</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $product->description }}">

    <!-- Fonts and Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- CSS Variables (same as your main page) -->
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
        padding-top: var(--header-height);
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

    /* ========== HEADER STYLES ========== */
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

    /* ========== BREADCRUMBS ========== */
    .breadcrumbs {
        padding: 15px 0;
        font-size: 0.9rem;
        color: var(--gray);
    }

    .breadcrumbs a {
        color: var(--urban-green);
        text-decoration: none;
        transition: var(--transition);
    }

    .breadcrumbs a:hover {
        color: var(--oasis-teal);
        text-decoration: underline;
    }

    .breadcrumbs span {
        margin: 0 5px;
        color: var(--charcoal-gray);
    }

    /* ========== PRODUCT DETAIL SECTION ========== */
    .product-detail {
        display: flex;
        gap: 40px;
        margin-top: 20px;
    }

    .product-gallery {
        flex: 1;
        min-width: 0;
    }

    .main-image {
        width: 100%;
        height: 500px;
        background-color: var(--neutral-beige);
        border-radius: var(--border-radius);
        overflow: hidden;
        margin-bottom: 15px;
        box-shadow: var(--shadow);
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .main-image img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
        transition: transform 0.3s ease;
    }

    .main-image:hover img {
        transform: scale(1.03);
    }

    .thumbnail-gallery {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 10px;
    }

    .thumbnail {
        height: 100px;
        background-color: var(--neutral-beige);
        border-radius: var(--border-radius);
        overflow: hidden;
        cursor: pointer;
        transition: var(--transition);
        border: 2px solid transparent;
    }

    .thumbnail:hover {
        border-color: var(--urban-green);
    }

    .thumbnail.active {
        border-color: var(--oasis-teal);
    }

    .thumbnail img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .product-info {
        flex: 1;
        min-width: 0;
    }

    .product-header {
        margin-bottom: 20px;
        padding-bottom: 15px;
        border-bottom: 1px solid var(--light-gray);
    }

    .product-brand {
        font-size: 1.1rem;
        color: var(--gray);
        margin-bottom: 5px;
    }

    .product-title {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 10px;
        color: var(--deep-black);
    }

    .product-meta {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 15px;
    }

    .rating {
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .stars {
        color: #ffc107;
    }

    .rating-count {
        font-size: 0.9rem;
        color: var(--gray);
    }

    .stock-info {
        display: flex;
        align-items: center;
        gap: 5px;
        color: var(--oasis-teal);
        font-weight: 500;
    }

    .locations {
        display: flex;
        gap: 5px;
        font-size: 0.9rem;
        color: var(--gray);
    }

    .price-container {
        margin: 25px 0;
    }

    .current-price {
        font-size: 2.2rem;
        font-weight: 700;
        color: var(--urban-green);
    }

    .original-price {
        font-size: 1.5rem;
        color: var(--gray);
        text-decoration: line-through;
        margin-left: 10px;
    }

    .sale-badge {
        display: inline-block;
        padding: 5px 12px;
        background: var(--oasis-teal);
        color: white;
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.9rem;
        margin-left: 15px;
        vertical-align: middle;
    }

    .product-badge {
        display: inline-block;
        padding: 5px 12px;
        background: var(--urban-green);
        color: white;
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.9rem;
        margin-right: 10px;
        margin-bottom: 10px;
    }

    .product-description {
        margin: 25px 0;
        line-height: 1.7;
    }

    .product-description h3 {
        font-size: 1.3rem;
        margin-bottom: 10px;
        color: var(--deep-black);
    }

    .product-description ul {
        padding-left: 20px;
        margin: 10px 0;
    }

    .product-description li {
        margin-bottom: 8px;
    }

    .size-options {
        margin: 25px 0;
    }

    .size-options h3 {
        font-size: 1.1rem;
        margin-bottom: 15px;
    }

    .size-buttons {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .size-button {
        padding: 8px 15px;
        background: var(--neutral-beige);
        border: 1px solid var(--charcoal-gray);
        border-radius: var(--border-radius);
        cursor: pointer;
        transition: var(--transition);
        min-width: 50px;
        text-align: center;
    }

    .size-button:hover {
        border-color: var(--urban-green);
    }

    .size-button.selected {
        background: var(--urban-green);
        color: white;
        border-color: var(--urban-green);
    }

    .size-button.unavailable {
        opacity: 0.5;
        cursor: not-allowed;
        text-decoration: line-through;
    }

    .size-guide-link {
        display: inline-block;
        margin-top: 10px;
        color: var(--urban-green);
        text-decoration: none;
        font-size: 0.9rem;
        transition: var(--transition);
    }

    .size-guide-link:hover {
        text-decoration: underline;
    }

    .quantity-selector {
        margin: 25px 0;
    }

    .quantity-selector h3 {
        font-size: 1.1rem;
        margin-bottom: 15px;
    }

    .quantity-control {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .quantity-button {
        width: 40px;
        height: 40px;
        background: var(--neutral-beige);
        border: 1px solid var(--charcoal-gray);
        border-radius: var(--border-radius);
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: var(--transition);
    }

    .quantity-button:hover {
        background: var(--light-gray);
    }

    .quantity-input {
        width: 60px;
        height: 40px;
        text-align: center;
        border: 1px solid var(--charcoal-gray);
        border-radius: var(--border-radius);
        font-size: 1rem;
    }

    .action-buttons {
        display: flex;
        gap: 15px;
        margin: 30px 0;
    }

    .add-to-cart {
        flex: 1;
        padding: 15px;
        background: var(--urban-green);
        color: white;
        border: none;
        border-radius: var(--border-radius);
        font-weight: 600;
        cursor: pointer;
        transition: var(--transition);
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        font-size: 1.1rem;
    }

    .add-to-cart:hover {
        background: var(--oasis-teal);
        transform: translateY(-2px);
    }

    .wishlist-button {
        width: 60px;
        padding: 15px;
        background: var(--neutral-beige);
        border: 1px solid var(--charcoal-gray);
        border-radius: var(--border-radius);
        cursor: pointer;
        transition: var(--transition);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .wishlist-button:hover {
        background: var(--light-gray);
    }

    .wishlist-button.active {
        color: var(--error);
        border-color: var(--error);
    }

    .delivery-info {
        background: var(--neutral-beige);
        border-radius: var(--border-radius);
        padding: 20px;
        margin-top: 30px;
        box-shadow: var(--shadow);
    }

    .delivery-info h3 {
        font-size: 1.1rem;
        margin-bottom: 15px;
    }

    .delivery-options {
        display: flex;
        gap: 20px;
    }

    .delivery-option {
        flex: 1;
    }

    .delivery-option h4 {
        font-size: 1rem;
        margin-bottom: 8px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .delivery-option p {
        font-size: 0.9rem;
        color: var(--gray);
    }

    /* ========== PRODUCT TABS ========== */
    .product-tabs {
        margin: 50px 0;
    }

    .tab-headers {
        display: flex;
        border-bottom: 1px solid var(--light-gray);
        margin-bottom: 20px;
    }

    .tab-header {
        padding: 12px 25px;
        cursor: pointer;
        font-weight: 600;
        position: relative;
        color: var(--gray);
        transition: var(--transition);
    }

    .tab-header:hover {
        color: var(--urban-green);
    }

    .tab-header.active {
        color: var(--urban-green);
    }

    .tab-header.active::after {
        content: '';
        position: absolute;
        bottom: -1px;
        left: 0;
        width: 100%;
        height: 2px;
        background: var(--urban-green);
    }

    .tab-content {
        display: none;
        padding: 20px 0;
        line-height: 1.7;
    }

    .tab-content.active {
        display: block;
    }

    .tab-content h3 {
        font-size: 1.3rem;
        margin-bottom: 15px;
        color: var(--deep-black);
    }

    .tab-content p {
        margin-bottom: 15px;
    }

    .tab-content ul {
        padding-left: 20px;
        margin-bottom: 15px;
    }

    .tab-content li {
        margin-bottom: 8px;
    }

    /* ========== RELATED PRODUCTS ========== */
    .related-products {
        margin: 60px 0;
    }

    .section-title {
        font-size: 1.8rem;
        font-weight: 700;
        margin-bottom: 30px;
        color: var(--deep-black);
        position: relative;
        padding-bottom: 10px;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 60px;
        height: 3px;
        background: var(--urban-green);
    }

    .products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 25px;
    }

    .product-card {
        background: var(--neutral-beige);
        border-radius: var(--border-radius);
        overflow: hidden;
        box-shadow: var(--shadow);
        transition: var(--transition);
        position: relative;
        border: 1px solid var(--charcoal-gray);
    }

    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.15);
    }

    .product-badge {
        position: absolute;
        top: 10px;
        padding: 5px 10px;
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.85rem;
        color: white;
        z-index: 1;
    }

    .sale-badge {
        left: 10px;
        background: var(--oasis-teal);
    }

    .sponsored-badge {
        right: 10px;
        background: var(--urban-green);
    }

    .product-image {
        height: 200px;
        background: var(--light-bg);
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
    }

    .product-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .product-image:hover img {
        transform: scale(1.05);
    }

    .product-info {
        padding: 20px;
    }

    .product-brand {
        color: var(--gray);
        font-size: 0.9rem;
        margin-bottom: 5px;
    }

    .product-title {
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 12px;
        min-height: 50px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .price-container {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 15px;
    }

    .current-price {
        font-size: 1.3rem;
        font-weight: 700;
        color: var(--urban-green);
    }

    .original-price {
        font-size: 1rem;
        color: var(--gray);
        text-decoration: line-through;
    }

    .stock-info {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 15px;
        font-size: 0.9rem;
        color: var(--oasis-teal);
    }

    .rating {
        display: flex;
        align-items: center;
        gap: 5px;
        margin-bottom: 15px;
    }

    .stars {
        color: #ffc107;
    }

    .rating-count {
        font-size: 0.85rem;
        color: var(--gray);
    }

    .add-to-cart {
        width: 100%;
        padding: 12px;
        background: var(--urban-green);
        color: white;
        border: none;
        border-radius: var(--border-radius);
        font-weight: 600;
        cursor: pointer;
        transition: var(--transition);
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
    }

    .add-to-cart:hover {
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
        .product-detail {
            flex-direction: column;
        }

        .main-image {
            height: 400px;
        }

        .footer-content {
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
    }

    @media (max-width: 768px) {
        .main-image {
            height: 350px;
        }

        .product-title {
            font-size: 1.8rem;
        }

        .current-price {
            font-size: 2rem;
        }

        .original-price {
            font-size: 1.3rem;
        }

        .action-buttons {
            flex-direction: column;
        }

        .delivery-options {
            flex-direction: column;
            gap: 15px;
        }

        .tab-headers {
            overflow-x: auto;
            white-space: nowrap;
            padding-bottom: 5px;
        }

        .tab-header {
            padding: 10px 15px;
            font-size: 0.9rem;
        }
    }

    @media (max-width: 576px) {
        .main-image {
            height: 300px;
        }

        .thumbnail-gallery {
            grid-template-columns: repeat(4, 1fr);
        }

        .thumbnail {
            height: 80px;
        }

        .product-title {
            font-size: 1.5rem;
        }

        .section-title {
            font-size: 1.5rem;
        }
    }

    @media (max-width: 420px) {
        .footer-content {
            grid-template-columns: 1fr;
        }

        .main-image {
            height: 250px;
        }

        .thumbnail {
            height: 60px;
        }

        .product-title {
            font-size: 1.3rem;
        }

        .current-price {
            font-size: 1.8rem;
        }
    }

    /* ========== ANIMATIONS ========== */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Loading spinner */
    .loading-spinner {
        display: none;
        width: 40px;
        height: 40px;
        margin: 20px auto;
        border: 4px solid rgba(0, 0, 0, 0.1);
        border-radius: 50%;
        border-top: 4px solid var(--urban-green);
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
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
                    <input type="text" placeholder="Search for vintage, streetwear, accessories..." aria-label="Search products">
                </div>

                <!-- User actions with hover effects -->
                <div class="user-actions">
                    <a href="{{ url('/login') }}" title="Account" aria-label="Account">
                        <i class="fas fa-user"></i>
                        <span>Account</span>
                    </a>
                    <a href="{{ url('/wishlist') }}" title="Wishlist" aria-label="Wishlist">
                        <i class="fas fa-heart"></i>
                        <span>Wishlist</span>
                    </a>
                    <a href="{{ url('/cart') }}" title="Cart" aria-label="Cart">
                        <i class="fas fa-shopping-cart"></i>
                        <span>Cart</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- ========== MAIN CONTENT SECTION ========== -->
    <div class="container">
        <!-- Breadcrumbs -->
        <div class="breadcrumbs">
            <a href="{{ url('/') }}">Home</a>
            <span>/</span>
            <a href="{{ url('/products') }}">Products</a>
            <span>/</span>
            <a href="#">Vintage Air Jordan 1 Retro High OG</a>
        </div>

        <!-- Product Detail Section -->
        <div class="product-detail">
            <!-- Product Gallery -->
            <div class="product-gallery">
                <div class="main-image">
                    <img src="https://images.unsplash.com/photo-1527719327859-c6ce80353573?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&h=800&q=80" alt="Vintage Air Jordan 1 Retro High OG" id="mainImage">
                </div>
                <div class="thumbnail-gallery">
                    <div class="thumbnail active" data-image="https://images.unsplash.com/photo-1527719327859-c6ce80353573?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&h=800&q=80">
                        <img src="https://images.unsplash.com/photo-1527719327859-c6ce80353573?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80" alt="Vintage Sneakers - Front View">
                    </div>
                    <div class="thumbnail" data-image="https://images.unsplash.com/photo-1600269452121-4f2416e55c28?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&h=800&q=80">
                        <img src="https://images.unsplash.com/photo-1600269452121-4f2416e55c28?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80" alt="Vintage Sneakers - Side View">
                    </div>
                    <div class="thumbnail" data-image="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&h=800&q=80">
                        <img src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80" alt="Vintage Sneakers - Top View">
                    </div>
                    <div class="thumbnail" data-image="https://images.unsplash.com/photo-1600269452121-4f2416e55c28?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&h=800&q=80">
                        <img src="https://images.unsplash.com/photo-1600269452121-4f2416e55c28?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80" alt="Vintage Sneakers - Detail View">
                    </div>
                </div>
            </div>

            <!-- Product Info -->
            <div class="product-info">
                <div class="product-header">
                    <div class="product-brand">Nike</div>
                    <h1 class="product-title">Vintage Air Jordan 1 Retro High OG</h1>
                    <div class="product-meta">
                        <div class="rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="rating-count">(52 reviews)</div>
                        </div>
                        <div class="stock-info">
                            <i class="fas fa-check-circle"></i> In stock
                            <div class="locations">CPT JHB</div>
                        </div>
                    </div>
                    <div class="product-badge">Limited Edition</div>
                    <div class="product-badge">Vintage</div>
                </div>

                <div class="price-container">
                    <span class="current-price">R 3,200</span>
                    <span class="original-price">R 4,400</span>
                    <span class="sale-badge">27% OFF</span>
                </div>

                <div class="product-description">
                    <h3>Description</h3>
                    <p>Authentic vintage Air Jordan 1 Retro High OG sneakers from the mid-2000s. These iconic sneakers feature the original high-top silhouette with premium leather construction, Nike Air cushioning, and the classic "Wings" logo.</p>
                    <p>This pair shows excellent vintage condition with minor signs of wear that add character. The soles are intact with good tread remaining. Includes original box (showing age) and extra laces.</p>
                    <ul>
                        <li>Colorway: Black/Red (Bred)</li>
                        <li>Release Year: 2001 (Retro)</li>
                        <li>Upper Material: Premium leather</li>
                        <li>Condition: Excellent vintage (8.5/10)</li>
                        <li>Includes: Original box, extra laces</li>
                    </ul>
                </div>

                <!-- Size Selector -->
                <div class="size-options">
                    <h3>Size</h3>
                    <div class="size-buttons">
                        <div class="size-button unavailable">US 7</div>
                        <div class="size-button unavailable">US 7.5</div>
                        <div class="size-button">US 8</div>
                        <div class="size-button selected">US 8.5</div>
                        <div class="size-button">US 9</div>
                        <div class="size-button">US 9.5</div>
                        <div class="size-button">US 10</div>
                        <div class="size-button unavailable">US 10.5</div>
                        <div class="size-button">US 11</div>
                    </div>
                    <a href="#" class="size-guide-link">Size Guide</a>
                </div>

                <!-- Quantity Selector -->
                <div class="quantity-selector">
                    <h3>Quantity</h3>
                    <div class="quantity-control">
                        <button class="quantity-button" id="decrease-qty">-</button>
                        <input type="number" value="1" min="1" max="5" class="quantity-input" id="quantity-input">
                        <button class="quantity-button" id="increase-qty">+</button>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="action-buttons">
                    <button class="add-to-cart" id="add-to-cart">
                        <i class="fas fa-shopping-cart"></i> Add to Cart
                    </button>
                    <button class="wishlist-button" id="wishlist-button">
                        <i class="far fa-heart"></i>
                    </button>
                </div>

                <!-- Delivery Info -->
                <div class="delivery-info">
                    <h3>Delivery Options</h3>
                    <div class="delivery-options">
                        <div class="delivery-option">
                            <h4><i class="fas fa-truck"></i> Standard Shipping</h4>
                            <p>Free for orders over R1000. Delivery in 3-5 business days.</p>
                        </div>
                        <div class="delivery-option">
                            <h4><i class="fas fa-store"></i> Click & Collect</h4>
                            <p>Pick up from our Cape Town or Johannesburg stores.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Tabs -->
        <div class="product-tabs">
            <div class="tab-headers">
                <div class="tab-header active" data-tab="details">Product Details</div>
                <div class="tab-header" data-tab="shipping">Shipping & Returns</div>
                <div class="tab-header" data-tab="reviews">Customer Reviews</div>
                <div class="tab-header" data-tab="authenticity">Authenticity</div>
            </div>

            <div class="tab-content active" id="details-tab">
                <h3>Detailed Information</h3>
                <p>These vintage Air Jordan 1 Retro High OG sneakers are a must-have for any serious sneaker collector. Released in 2001 as part of the "Bred" colorway reissue, these sneakers faithfully recreate the original 1985 design that revolutionized basketball footwear.</p>
                
                <h3>Condition Report</h3>
                <ul>
                    <li><strong>Upper:</strong> Premium leather shows light creasing consistent with gentle wear. No significant scuffs or stains.</li>
                    <li><strong>Soles:</strong> Minimal wear with good tread remaining. No separation of the sole from the upper.</li>
                    <li><strong>Insoles:</strong> Original insoles present with moderate wear.</li>
                    <li><strong>Tongue Tags:</strong> Fully intact with clear branding.</li>
                    <li><strong>Laces:</strong> Original laces included plus an extra set.</li>
                    <li><strong>Box:</strong> Original box included (shows typical aging for its age).</li>
                </ul>
                
                <h3>Measurements</h3>
                <p>Please note these vintage sneakers may fit differently than modern releases:</p>
                <ul>
                    <li><strong>US 8.5:</strong> Fits true to size (recommend your normal AJ1 size)</li>
                    <li><strong>Insole Length:</strong> Approximately 27cm</li>
                    <li><strong>Weight:</strong> 450g per shoe (size 8.5)</li>
                </ul>
            </div>

            <div class="tab-content" id="shipping-tab">
                <h3>Shipping Information</h3>
                <p>We offer fast and reliable shipping options to get your vintage finds to you as quickly as possible:</p>
                <ul>
                    <li><strong>Standard Shipping:</strong> Free for orders over R1000 (3-5 business days)</li>
                    <li><strong>Express Shipping:</strong> R150 (1-2 business days)</li>
                    <li><strong>International Shipping:</strong> Available to select countries (contact for rates)</li>
                    <li><strong>Click & Collect:</strong> Free pickup from our Cape Town or Johannesburg stores</li>
                </ul>
                
                <h3>Returns Policy</h3>
                <p>We want you to be completely satisfied with your purchase. Our returns policy for this item:</p>
                <ul>
                    <li><strong>Returns Window:</strong> 14 days from delivery date</li>
                    <li><strong>Condition:</strong> Must be returned in original condition with all packaging</li>
                    <li><strong>Return Shipping:</strong> Customer responsibility (unless item is faulty)</li>
                    <li><strong>Refunds:</strong> Issued to original payment method within 5 business days</li>
                    <li><strong>Note:</strong> Final sale items cannot be returned (marked as such)</li>
                </ul>
            </div>

            <div class="tab-content" id="reviews-tab">
                <h3>Customer Reviews</h3>
                <p>Read what other customers have said about this product:</p>
                
                <div class="review">
                    <div class="rating">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="reviewer">Thabo M.</span>
                        <span class="review-date">15 March 2025</span>
                    </div>
                    <p>"Absolutely stunning condition for a 20+ year old pair of Jordans. The leather quality is amazing and they fit perfectly. Bro's Thrifting authentication is legit!"</p>
                </div>
                
                <div class="review">
                    <div class="rating">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <span class="reviewer">Lerato K.</span>
                        <span class="review-date">2 March 2025</span>
                    </div>
                    <p>"Great vintage find! The shoes are exactly as described with minor creasing but otherwise perfect. Shipping was fast and packaging was secure."</p>
                </div>
                
                <button class="add-to-cart" style="margin-top: 20px; background: var(--charcoal-gray);">
                    <i class="fas fa-pen"></i> Write a Review
                </button>
            </div>

            <div class="tab-content" id="authenticity-tab">
                <h3>Authenticity Guarantee</h3>
                <p>At Bro's Thrifting, we stand behind every item we sell with our 100% Authenticity Guarantee:</p>
                <ul>
                    <li><strong>Expert Verification:</strong> Every item is inspected by our team of authentication experts</li>
                    <li><strong>Detailed Photos:</strong> High-resolution images show all angles and details</li>
                    <li><strong>Condition Reports:</strong> Honest assessments of wear and flaws</li>
                    <li><strong>Money-Back Guarantee:</strong> If any item is found to be inauthentic, we'll refund your purchase</li>
                </ul>
                
                <h3>About This Item</h3>
                <p>These Air Jordan 1 Retro High OG sneakers have been thoroughly authenticated by our sneaker experts. Key authentication points:</p>
                <ul>
                    <li>Correct shape and proportions for 2001 Retro release</li>
                    <li>Accurate stitching pattern and thread color</li>
                    <li>Proper materials including premium leather and correct rubber compound</li>
                    <li>Accurate branding including Nike Air tongue tag and Wings logo</li>
                    <li>Correct box labeling and style codes</li>
                </ul>
            </div>
        </div>

        <!-- Related Products -->
        <div class="related-products">
            <h2 class="section-title">You Might Also Like</h2>
            <div class="products-grid">
                <!-- Product 1 -->
                <div class="product-card">
                    <div class="product-badge sale-badge">15% OFF</div>
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&h=400&q=80" alt="Designer Watch" loading="lazy">
                    </div>
                    <div class="product-info">
                        <div class="product-brand">Rolex</div>
                        <h3 class="product-title">Vintage Datejust 36mm Two-Tone</h3>
                        <div class="price-container">
                            <div class="current-price">R 85,000</div>
                        </div>
                        <div class="stock-info">
                            <i class="fas fa-check-circle"></i> In stock
                            <div class="locations">JHB</div>
                        </div>
                        <button class="add-to-cart" aria-label="Add to cart">
                            <i class="fas fa-shopping-cart"></i> Add to Cart
                        </button>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="product-card">
                    <div class="product-badge sponsored-badge">Rare</div>
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1604176354204-9268737828e4?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&h=400&q=80" alt="Vintage T-shirt" loading="lazy">
                    </div>
                    <div class="product-info">
                        <div class="product-brand">Nirvana</div>
                        <h3 class="product-title">Vintage 1991 Nevermind Tour T-Shirt</h3>
                        <div class="price-container">
                            <div class="current-price">R 2,800</div>
                        </div>
                        <div class="stock-info">
                            <i class="fas fa-check-circle"></i> In stock
                            <div class="locations">CPT</div>
                        </div>
                        <button class="add-to-cart" aria-label="Add to cart">
                            <i class="fas fa-shopping-cart"></i> Add to Cart
                        </button>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&h=400&q=80" alt="Designer Handbag" loading="lazy">
                    </div>
                    <div class="product-info">
                        <div class="product-brand">Gucci</div>
                        <h3 class="product-title">Vintage GG Supreme Shoulder Bag</h3>
                        <div class="price-container">
                            <div class="current-price">R 12,500</div>
                        </div>
                        <div class="stock-info">
                            <i class="fas fa-check-circle"></i> In stock
                            <div class="locations">JHB</div>
                        </div>
                        <button class="add-to-cart" aria-label="Add to cart">
                            <i class="fas fa-shopping-cart"></i> Add to Cart
                        </button>
                    </div>
                </div>
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
                        <li><a href="{{ url('/login') }}">My Account</a></li>
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
        document.addEventListener('DOMContentLoaded', function() {
            // Thumbnail gallery interaction
            const thumbnails = document.querySelectorAll('.thumbnail');
            const mainImage = document.getElementById('mainImage');
            
            thumbnails.forEach(thumbnail => {
                thumbnail.addEventListener('click', function() {
                    // Remove active class from all thumbnails
                    thumbnails.forEach(t => t.classList.remove('active'));
                    
                    // Add active class to clicked thumbnail
                    this.classList.add('active');
                    
                    // Update main image
                    const newImageSrc = this.getAttribute('data-image');
                    mainImage.src = newImageSrc;
                });
            });

            // Size selector interaction
            const sizeButtons = document.querySelectorAll('.size-button:not(.unavailable)');
            
            sizeButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove selected class from all size buttons
                    sizeButtons.forEach(b => b.classList.remove('selected'));
                    
                    // Add selected class to clicked button
                    this.classList.add('selected');
                });
            });

            // Quantity selector interaction
            const quantityInput = document.getElementById('quantity-input');
            const decreaseBtn = document.getElementById('decrease-qty');
            const increaseBtn = document.getElementById('increase-qty');
            
            decreaseBtn.addEventListener('click', function() {
                let currentValue = parseInt(quantityInput.value);
                if (currentValue > 1) {
                    quantityInput.value = currentValue - 1;
                }
            });
            
            increaseBtn.addEventListener('click', function() {
                let currentValue = parseInt(quantityInput.value);
                if (currentValue < 5) { // Assuming max quantity is 5
                    quantityInput.value = currentValue + 1;
                }
            });

            // Wishlist button interaction
            const wishlistButton = document.getElementById('wishlist-button');
            
            wishlistButton.addEventListener('click', function() {
                this.classList.toggle('active');
                const icon = this.querySelector('i');
                
                if (this.classList.contains('active')) {
                    icon.classList.remove('far');
                    icon.classList.add('fas');
                    this.innerHTML = '<i class="fas fa-heart"></i>';
                } else {
                    icon.classList.remove('fas');
                    icon.classList.add('far');
                    this.innerHTML = '<i class="far fa-heart"></i>';
                }
            });

            // Add to cart animation
            const addToCartBtn = document.getElementById('add-to-cart');
            
            addToCartBtn.addEventListener('click', function() {
                const originalText = this.innerHTML;
                const originalBg = this.style.background;
                
                this.innerHTML = '<i class="fas fa-check"></i> Added to Cart';
                this.style.background = 'var(--oasis-teal)';
                
                setTimeout(() => {
                    this.innerHTML = originalText;
                    this.style.background = originalBg;
                }, 2000);
            });

            // Tab switching functionality
            const tabHeaders = document.querySelectorAll('.tab-header');
            const tabContents = document.querySelectorAll('.tab-content');
            
            tabHeaders.forEach(header => {
                header.addEventListener('click', function() {
                    const tabId = this.getAttribute('data-tab');
                    
                    // Remove active class from all headers and contents
                    tabHeaders.forEach(h => h.classList.remove('active'));
                    tabContents.forEach(c => c.classList.remove('active'));
                    
                    // Add active class to clicked header and corresponding content
                    this.classList.add('active');
                    document.getElementById(`${tabId}-tab`).classList.add('active');
                });
            });

            // Responsive adjustments
            function checkScreenSize() {
                // Add any responsive adjustments if needed
            }

            // Initial check
            checkScreenSize();

            // Add resize event listener
            window.addEventListener('resize', checkScreenSize);
        });
    </script>
</body>
</html>