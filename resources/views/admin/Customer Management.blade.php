<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer Management | Bro's Thrifting</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Reusing the same fonts and icons from your main page -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
    /* Reuse your existing CSS variables */
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

    html {
        scroll-behavior: smooth;
    }

    .container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 20px;
    }

    /* ========== HEADER STYLES (reused from main) ========== */
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

    .user-actions a:hover span {
        opacity: 1;
        transform: translateY(0);
        color: var(--cool-sky-blue);
        pointer-events: auto;
    }

    /* ========== CUSTOMER MANAGEMENT SPECIFIC STYLES ========== */
    .management-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
        flex-wrap: wrap;
        gap: 15px;
    }

    .management-header h1 {
        font-size: 1.8rem;
        color: var(--urban-green);
    }

    .action-buttons {
        display: flex;
        gap: 10px;
    }

    .btn {
        padding: 10px 20px;
        border-radius: var(--border-radius);
        border: none;
        font-weight: 600;
        cursor: pointer;
        transition: var(--transition);
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .btn-primary {
        background-color: var(--urban-green);
        color: white;
    }

    .btn-primary:hover {
        background-color: var(--oasis-teal);
        transform: translateY(-2px);
    }

    .btn-secondary {
        background-color: var(--cool-sky-blue);
        color: white;
    }

    .btn-secondary:hover {
        background-color: var(--charcoal-gray);
        transform: translateY(-2px);
    }

    .btn-outline {
        background-color: transparent;
        border: 1px solid var(--charcoal-gray);
        color: var(--charcoal-gray);
    }

    .btn-outline:hover {
        border-color: var(--urban-green);
        color: var(--urban-green);
        transform: translateY(-2px);
    }

    /* ========== FILTERS BAR ========== */
    .filters-bar {
        background-color: var(--neutral-beige);
        border-radius: var(--border-radius);
        padding: 15px 20px;
        margin-bottom: 20px;
        box-shadow: var(--shadow);
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        border: 1px solid var(--charcoal-gray);
    }

    .filter-group {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .filter-group label {
        font-weight: 500;
        font-size: 0.9rem;
    }

    .filter-group select,
    .filter-group input {
        padding: 8px 12px;
        border: 1px solid var(--charcoal-gray);
        border-radius: var(--border-radius);
        background: var(--light-bg);
        font-size: 0.9rem;
        transition: var(--transition);
    }

    .filter-group select:focus,
    .filter-group input:focus {
        border-color: var(--urban-green);
        outline: none;
    }

    .rfm-filter {
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .rfm-filter input {
        width: 60px;
        text-align: center;
    }

    .tag-input-container {
        position: relative;
    }

    .tag-input {
        padding-right: 30px !important;
    }

    .tag-input-container i {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        color: var(--charcoal-gray);
        cursor: pointer;
    }

    /* ========== SAVED SEGMENTS ========== */
    .saved-segments {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-top: 10px;
    }

    .segment-badge {
        background-color: var(--light-bg);
        border: 1px solid var(--charcoal-gray);
        border-radius: 15px;
        padding: 5px 12px;
        font-size: 0.8rem;
        cursor: pointer;
        transition: var(--transition);
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .segment-badge:hover {
        background-color: var(--cool-sky-blue);
        color: white;
        border-color: var(--cool-sky-blue);
    }

    .segment-badge.active {
        background-color: var(--urban-green);
        color: white;
        border-color: var(--urban-green);
    }

    /* ========== CUSTOMERS GRID ========== */
    .customers-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 20px;
    }

    .customer-card {
        background: var(--neutral-beige);
        border-radius: var(--border-radius);
        overflow: hidden;
        box-shadow: var(--shadow);
        transition: var(--transition);
        position: relative;
        border: 1px solid var(--charcoal-gray);
        cursor: pointer;
    }

    .customer-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.15);
    }

    .customer-header {
        display: flex;
        align-items: center;
        padding: 15px;
        gap: 15px;
        border-bottom: 1px solid var(--light-gray);
    }

    .customer-avatar {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background-color: var(--light-bg);
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .customer-avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .customer-avatar i {
        font-size: 2rem;
        color: var(--charcoal-gray);
    }

    .customer-info {
        flex: 1;
    }

    .customer-name {
        font-weight: 600;
        margin-bottom: 3px;
    }

    .customer-join-date {
        font-size: 0.8rem;
        color: var(--charcoal-gray);
    }

    .customer-status {
        position: absolute;
        top: 15px;
        right: 15px;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        border: 2px solid var(--neutral-beige);
    }

    .status-active {
        background-color: #4caf50;
    }

    .status-inactive {
        background-color: #f44336;
    }

    .status-new {
        background-color: #ff9800;
    }

    .customer-stats {
        display: flex;
        justify-content: space-between;
        padding: 15px;
    }

    .stat-item {
        text-align: center;
    }

    .stat-value {
        font-weight: 700;
        font-size: 1.2rem;
        color: var(--urban-green);
    }

    .stat-label {
        font-size: 0.75rem;
        color: var(--charcoal-gray);
    }

    .customer-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 5px;
        padding: 0 15px 15px;
    }

    .tag {
        background-color: var(--light-bg);
        border: 1px solid var(--charcoal-gray);
        border-radius: 12px;
        padding: 3px 8px;
        font-size: 0.7rem;
    }

    /* ========== CUSTOMER DETAIL MODAL ========== */
    .modal-overlay {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 2000;
        display: none;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .modal-overlay.active {
        display: block;
        opacity: 1;
    }

    .modal {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) scale(0.9);
        background-color: var(--neutral-beige);
        border-radius: var(--border-radius);
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
        z-index: 2001;
        width: 90%;
        max-width: 1000px;
        max-height: 90vh;
        overflow-y: auto;
        opacity: 0;
        transition: all 0.3s ease;
        display: none;
    }

    .modal.active {
        display: block;
        opacity: 1;
        transform: translate(-50%, -50%) scale(1);
    }

    .modal-header {
        padding: 20px;
        border-bottom: 1px solid var(--light-gray);
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: sticky;
        top: 0;
        background-color: var(--neutral-beige);
        z-index: 1;
    }

    .modal-title {
        font-size: 1.5rem;
        font-weight: 600;
        color: var(--urban-green);
    }

    .modal-close {
        background: none;
        border: none;
        font-size: 1.5rem;
        cursor: pointer;
        color: var(--charcoal-gray);
        transition: var(--transition);
    }

    .modal-close:hover {
        color: var(--urban-green);
        transform: rotate(90deg);
    }

    .modal-body {
        padding: 20px;
    }

    .modal-tabs {
        display: flex;
        border-bottom: 1px solid var(--light-gray);
        margin-bottom: 20px;
    }

    .tab-btn {
        padding: 10px 20px;
        background: none;
        border: none;
        border-bottom: 3px solid transparent;
        cursor: pointer;
        font-weight: 500;
        transition: var(--transition);
    }

    .tab-btn.active {
        border-bottom-color: var(--urban-green);
        color: var(--urban-green);
    }

    .tab-content {
        display: none;
    }

    .tab-content.active {
        display: block;
    }

    /* Personal Info Section */
    .personal-info-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    .info-group {
        margin-bottom: 15px;
    }

    .info-label {
        font-size: 0.8rem;
        color: var(--charcoal-gray);
        margin-bottom: 5px;
    }

    .info-value {
        font-weight: 500;
        padding: 8px 0;
        border-bottom: 1px solid var(--light-gray);
    }

    .edit-btn {
        background: none;
        border: none;
        color: var(--cool-sky-blue);
        cursor: pointer;
        font-size: 0.9rem;
        transition: var(--transition);
    }

    .edit-btn:hover {
        color: var(--urban-green);
    }

    /* Order History Section */
    .orders-table {
        width: 100%;
        border-collapse: collapse;
    }

    .orders-table th,
    .orders-table td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid var(--light-gray);
    }

    .orders-table th {
        font-weight: 600;
        color: var(--urban-green);
        background-color: rgba(75, 90, 77, 0.05);
    }

    .orders-table tr:hover {
        background-color: rgba(75, 90, 77, 0.03);
    }

    .order-status {
        display: inline-block;
        padding: 3px 8px;
        border-radius: 12px;
        font-size: 0.8rem;
        font-weight: 500;
    }

    .status-completed {
        background-color: #e8f5e9;
        color: #2e7d32;
    }

    .status-pending {
        background-color: #fff8e1;
        color: #ff8f00;
    }

    .status-cancelled {
        background-color: #ffebee;
        color: #c62828;
    }

    /* Notes Section */
    .notes-container {
        max-height: 300px;
        overflow-y: auto;
        margin-bottom: 20px;
    }

    .note {
        padding: 15px;
        margin-bottom: 15px;
        background-color: var(--light-bg);
        border-radius: var(--border-radius);
        border-left: 3px solid var(--cool-sky-blue);
    }

    .note-header {
        display: flex;
        justify-content: space-between;
        margin-bottom: 8px;
        font-size: 0.85rem;
    }

    .note-author {
        font-weight: 600;
        color: var(--urban-green);
    }

    .note-date {
        color: var(--charcoal-gray);
    }

    .note-content {
        font-size: 0.9rem;
    }

    .add-note-form {
        margin-top: 20px;
    }

    .note-textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid var(--charcoal-gray);
        border-radius: var(--border-radius);
        min-height: 100px;
        margin-bottom: 10px;
        resize: vertical;
    }

    .note-textarea:focus {
        outline: none;
        border-color: var(--urban-green);
    }

    /* ========== BULK ACTION TOOLBAR ========== */
    .bulk-actions {
        position: fixed;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        background-color: var(--urban-green);
        color: white;
        padding: 10px 20px;
        border-radius: var(--border-radius);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        display: flex;
        align-items: center;
        gap: 15px;
        z-index: 100;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
    }

    .bulk-actions.active {
        opacity: 1;
        visibility: visible;
    }

    .bulk-count {
        font-weight: 600;
    }

    .bulk-actions select {
        padding: 5px 10px;
        border-radius: var(--border-radius);
        border: none;
        background-color: rgba(255, 255, 255, 0.2);
        color: white;
    }

    .bulk-actions select:focus {
        outline: none;
    }

    .bulk-actions select option {
        background-color: var(--urban-green);
        color: white;
    }

    .bulk-actions button {
        background: none;
        border: none;
        color: white;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 5px;
        font-weight: 500;
    }

    .bulk-actions button:hover {
        text-decoration: underline;
    }

    /* ========== RESPONSIVE DESIGN ========== */
    @media (max-width: 992px) {
        .personal-info-grid {
            grid-template-columns: 1fr;
        }
        
        .modal {
            width: 95%;
        }
    }

    @media (max-width: 768px) {
        .management-header {
            flex-direction: column;
            align-items: flex-start;
        }
        
        .action-buttons {
            width: 100%;
            flex-wrap: wrap;
        }
        
        .btn {
            flex: 1;
            min-width: 120px;
            justify-content: center;
        }
        
        .filters-bar {
            flex-direction: column;
        }
        
        .filter-group {
            width: 100%;
        }
        
        .filter-group select,
        .filter-group input {
            flex: 1;
        }
        
        .customers-grid {
            grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
        }
    }

    @media (max-width: 576px) {
        .customers-grid {
            grid-template-columns: 1fr;
        }
        
        .orders-table {
            display: block;
            overflow-x: auto;
        }
        
        .bulk-actions {
            width: 90%;
            flex-wrap: wrap;
            justify-content: center;
            padding: 10px;
        }
    }
    </style>
</head>
<body>
    <!-- ========== HEADER SECTION ========== -->
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <i class="fas fa-shopping-bag"></i>Bro's <span>Thrifting</span>
                </div>

                <div class="search-bar">
                    <input type="text" placeholder="Search customers..." aria-label="Search customers" id="customer-search">
                </div>

                <div class="user-actions">
                    <a href="#" title="Dashboard" aria-label="Dashboard">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                    <a href="#" title="Customers" aria-label="Customers" class="active">
                        <i class="fas fa-users"></i>
                        <span>Customers</span>
                    </a>
                    <a href="#" title="Settings" aria-label="Settings">
                        <i class="fas fa-cog"></i>
                        <span>Settings</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- ========== MAIN CONTENT SECTION ========== -->
    <div class="container">
        <div class="management-header">
            <h1><i class="fas fa-users"></i> Customer Management</h1>
            <div class="action-buttons">
                <button class="btn btn-primary" id="export-btn">
                    <i class="fas fa-file-export"></i> Export
                </button>
                <button class="btn btn-secondary" id="add-customer-btn">
                    <i class="fas fa-user-plus"></i> Add Customer
                </button>
            </div>
        </div>

        <!-- ========== FILTERS BAR ========== -->
        <div class="filters-bar">
            <div class="filter-group">
                <label for="status-filter">Status:</label>
                <select id="status-filter">
                    <option value="all">All Statuses</option>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                    <option value="new">New</option>
                </select>
            </div>

            <div class="filter-group">
                <label for="rfm-filter">RFM:</label>
                <div class="rfm-filter">
                    <input type="number" placeholder="R" min="1" max="5" id="rfm-recency">
                    <input type="number" placeholder="F" min="1" max="5" id="rfm-frequency">
                    <input type="number" placeholder="M" min="1" max="5" id="rfm-monetary">
                </div>
            </div>

            <div class="filter-group">
                <label for="order-filter">Orders:</label>
                <select id="order-filter">
                    <option value="any">Any</option>
                    <option value="1+">1+</option>
                    <option value="5+">5+</option>
                    <option value="10+">10+</option>
                </select>
            </div>

            <div class="filter-group">
                <div class="tag-input-container">
                    <input type="text" placeholder="Filter by tag..." class="tag-input" id="tag-filter">
                    <i class="fas fa-tag"></i>
                </div>
            </div>
        </div>

        <!-- ========== SAVED SEGMENTS ========== -->
        <div class="saved-segments">
            <div class="segment-badge active">
                <i class="fas fa-users"></i> All Customers
            </div>
            <div class="segment-badge">
                <i class="fas fa-star"></i> VIP Customers
            </div>
            <div class="segment-badge">
                <i class="fas fa-shopping-cart"></i> Recent Buyers
            </div>
            <div class="segment-badge">
                <i class="fas fa-clock"></i> Inactive (30+ days)
            </div>
            <div class="segment-badge">
                <i class="fas fa-plus"></i> Add Segment
            </div>
        </div>

        <!-- ========== CUSTOMERS GRID ========== -->
        <div class="customers-grid" id="customersGrid">
            <!-- Customer 1 -->
            <div class="customer-card" 
                 data-id="1" 
                 data-name="Liam Johnson" 
                 data-email="liam.johnson@example.com" 
                 data-phone="+27 83 456 7890" 
                 data-join-date="2023-05-15" 
                 data-status="active" 
                 data-orders="12" 
                 data-ltv="R 24,500" 
                 data-rfm="554" 
                 data-tags="vip,streetwear,repeat">
                <div class="customer-header">
                    <div class="customer-avatar">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Liam Johnson">
                    </div>
                    <div class="customer-info">
                        <div class="customer-name">Liam Johnson</div>
                        <div class="customer-join-date">Joined May 2023</div>
                    </div>
                    <div class="customer-status status-active"></div>
                </div>
                <div class="customer-stats">
                    <div class="stat-item">
                        <div class="stat-value">12</div>
                        <div class="stat-label">Orders</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-value">R 24.5k</div>
                        <div class="stat-label">Lifetime</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-value">554</div>
                        <div class="stat-label">RFM</div>
                    </div>
                </div>
                <div class="customer-tags">
                    <div class="tag">VIP</div>
                    <div class="tag">Streetwear</div>
                    <div class="tag">Repeat</div>
                </div>
            </div>

            <!-- Customer 2 -->
            <div class="customer-card" 
                 data-id="2" 
                 data-name="Emma Smith" 
                 data-email="emma.smith@example.com" 
                 data-phone="+27 82 123 4567" 
                 data-join-date="2024-01-10" 
                 data-status="new" 
                 data-orders="2" 
                 data-ltv="R 3,200" 
                 data-rfm="432" 
                 data-tags="new,vintage">
                <div class="customer-header">
                    <div class="customer-avatar">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Emma Smith">
                    </div>
                    <div class="customer-info">
                        <div class="customer-name">Emma Smith</div>
                        <div class="customer-join-date">Joined Jan 2024</div>
                    </div>
                    <div class="customer-status status-new"></div>
                </div>
                <div class="customer-stats">
                    <div class="stat-item">
                        <div class="stat-value">2</div>
                        <div class="stat-label">Orders</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-value">R 3.2k</div>
                        <div class="stat-label">Lifetime</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-value">432</div>
                        <div class="stat-label">RFM</div>
                    </div>
                </div>
                <div class="customer-tags">
                    <div class="tag">New</div>
                    <div class="tag">Vintage</div>
                </div>
            </div>

            <!-- Customer 3 -->
            <div class="customer-card" 
                 data-id="3" 
                 data-name="Noah Williams" 
                 data-email="noah.williams@example.com" 
                 data-phone="+27 81 987 6543" 
                 data-join-date="2022-11-22" 
                 data-status="active" 
                 data-orders="8" 
                 data-ltv="R 15,800" 
                 data-rfm="445" 
                 data-tags="repeat,accessories">
                <div class="customer-header">
                    <div class="customer-avatar">
                        <img src="https://randomuser.me/api/portraits/men/67.jpg" alt="Noah Williams">
                    </div>
                    <div class="customer-info">
                        <div class="customer-name">Noah Williams</div>
                        <div class="customer-join-date">Joined Nov 2022</div>
                    </div>
                    <div class="customer-status status-active"></div>
                </div>
                <div class="customer-stats">
                    <div class="stat-item">
                        <div class="stat-value">8</div>
                        <div class="stat-label">Orders</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-value">R 15.8k</div>
                        <div class="stat-label">Lifetime</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-value">445</div>
                        <div class="stat-label">RFM</div>
                    </div>
                </div>
                <div class="customer-tags">
                    <div class="tag">Repeat</div>
                    <div class="tag">Accessories</div>
                </div>
            </div>

            <!-- Customer 4 -->
            <div class="customer-card" 
                 data-id="4" 
                 data-name="Olivia Brown" 
                 data-email="olivia.brown@example.com" 
                 data-phone="+27 84 321 6789" 
                 data-join-date="2023-08-05" 
                 data-status="inactive" 
                 data-orders="5" 
                 data-ltv="R 8,750" 
                 data-rfm="322" 
                 data-tags="inactive,streetwear">
                <div class="customer-header">
                    <div class="customer-avatar">
                        <img src="https://randomuser.me/api/portraits/women/28.jpg" alt="Olivia Brown">
                    </div>
                    <div class="customer-info">
                        <div class="customer-name">Olivia Brown</div>
                        <div class="customer-join-date">Joined Aug 2023</div>
                    </div>
                    <div class="customer-status status-inactive"></div>
                </div>
                <div class="customer-stats">
                    <div class="stat-item">
                        <div class="stat-value">5</div>
                        <div class="stat-label">Orders</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-value">R 8.7k</div>
                        <div class="stat-label">Lifetime</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-value">322</div>
                        <div class="stat-label">RFM</div>
                    </div>
                </div>
                <div class="customer-tags">
                    <div class="tag">Inactive</div>
                    <div class="tag">Streetwear</div>
                </div>
            </div>

            <!-- Customer 5 -->
            <div class="customer-card" 
                 data-id="5" 
                 data-name="Lucas Jones" 
                 data-email="lucas.jones@example.com" 
                 data-phone="+27 83 654 3210" 
                 data-join-date="2024-02-18" 
                 data-status="new" 
                 data-orders="1" 
                 data-ltv="R 1,250" 
                 data-rfm="511" 
                 data-tags="new,vintage">
                <div class="customer-header">
                    <div class="customer-avatar">
                        <img src="https://randomuser.me/api/portraits/men/53.jpg" alt="Lucas Jones">
                    </div>
                    <div class="customer-info">
                        <div class="customer-name">Lucas Jones</div>
                        <div class="customer-join-date">Joined Feb 2024</div>
                    </div>
                    <div class="customer-status status-new"></div>
                </div>
                <div class="customer-stats">
                    <div class="stat-item">
                        <div class="stat-value">1</div>
                        <div class="stat-label">Orders</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-value">R 1.2k</div>
                        <div class="stat-label">Lifetime</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-value">511</div>
                        <div class="stat-label">RFM</div>
                    </div>
                </div>
                <div class="customer-tags">
                    <div class="tag">New</div>
                    <div class="tag">Vintage</div>
                </div>
            </div>

            <!-- Customer 6 -->
            <div class="customer-card" 
                 data-id="6" 
                 data-name="Ava Garcia" 
                 data-email="ava.garcia@example.com" 
                 data-phone="+27 82 789 0123" 
                 data-join-date="2023-03-30" 
                 data-status="active" 
                 data-orders="15" 
                 data-ltv="R 32,400" 
                 data-rfm="555" 
                 data-tags="vip,repeat,accessories">
                <div class="customer-header">
                    <div class="customer-avatar">
                        <img src="https://randomuser.me/api/portraits/women/36.jpg" alt="Ava Garcia">
                    </div>
                    <div class="customer-info">
                        <div class="customer-name">Ava Garcia</div>
                        <div class="customer-join-date">Joined Mar 2023</div>
                    </div>
                    <div class="customer-status status-active"></div>
                </div>
                <div class="customer-stats">
                    <div class="stat-item">
                        <div class="stat-value">15</div>
                        <div class="stat-label">Orders</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-value">R 32.4k</div>
                        <div class="stat-label">Lifetime</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-value">555</div>
                        <div class="stat-label">RFM</div>
                    </div>
                </div>
                <div class="customer-tags">
                    <div class="tag">VIP</div>
                    <div class="tag">Repeat</div>
                    <div class="tag">Accessories</div>
                </div>
            </div>
        </div>
    </div>

    <!-- ========== CUSTOMER DETAIL MODAL ========== -->
    <div class="modal-overlay" id="customerModalOverlay"></div>
    <div class="modal" id="customerModal">
        <div class="modal-header">
            <h2 class="modal-title">Customer Details</h2>
            <button class="modal-close" id="modalClose">&times;</button>
        </div>
        <div class="modal-body">
            <div class="modal-tabs">
                <button class="tab-btn active" data-tab="personal">Personal Info</button>
                <button class="tab-btn" data-tab="orders">Order History</button>
                <button class="tab-btn" data-tab="notes">Notes</button>
            </div>

            <!-- Personal Info Tab -->
            <div class="tab-content active" id="personal-tab">
                <div class="personal-info-grid">
                    <div class="info-group">
                        <div class="info-label">Full Name</div>
                        <div class="info-value" id="detail-name">Liam Johnson</div>
                    </div>
                    <div class="info-group">
                        <div class="info-label">Email Address</div>
                        <div class="info-value" id="detail-email">liam.johnson@example.com</div>
                    </div>
                    <div class="info-group">
                        <div class="info-label">Phone Number</div>
                        <div class="info-value" id="detail-phone">+27 83 456 7890</div>
                    </div>
                    <div class="info-group">
                        <div class="info-label">Join Date</div>
                        <div class="info-value" id="detail-join-date">May 15, 2023</div>
                    </div>
                    <div class="info-group">
                        <div class="info-label">Status</div>
                        <div class="info-value" id="detail-status">
                            <span class="status-active" style="display: inline-block; width: 10px; height: 10px; border-radius: 50%; margin-right: 5px;"></span>
                            Active
                        </div>
                    </div>
                    <div class="info-group">
                        <div class="info-label">Total Orders</div>
                        <div class="info-value" id="detail-orders">12</div>
                    </div>
                    <div class="info-group">
                        <div class="info-label">Lifetime Value</div>
                        <div class="info-value" id="detail-ltv">R 24,500</div>
                    </div>
                    <div class="info-group">
                        <div class="info-label">RFM Score</div>
                        <div class="info-value" id="detail-rfm">554</div>
                    </div>
                </div>
                
                <div class="info-group" style="margin-top: 20px;">
                    <div class="info-label">Tags</div>
                    <div class="customer-tags" id="detail-tags">
                        <div class="tag">VIP</div>
                        <div class="tag">Streetwear</div>
                        <div class="tag">Repeat</div>
                    </div>
                    <div style="margin-top: 10px;">
                        <input type="text" placeholder="Add new tag..." style="padding: 8px; border: 1px solid var(--charcoal-gray); border-radius: var(--border-radius);">
                        <button class="edit-btn" style="margin-left: 10px;">
                            <i class="fas fa-plus"></i> Add
                        </button>
                    </div>
                </div>
                
                <div class="action-buttons" style="margin-top: 30px;">
                    <button class="btn btn-primary">
                        <i class="fas fa-edit"></i> Edit Profile
                    </button>
                    <button class="btn btn-outline">
                        <i class="fas fa-envelope"></i> Send Email
                    </button>
                </div>
            </div>

            <!-- Order History Tab -->
            <div class="tab-content" id="orders-tab">
                <table class="orders-table">
                    <thead>
                        <tr>
                            <th>Order #</th>
                            <th>Date</th>
                            <th>Items</th>
                            <th>Total</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#BT-1042</td>
                            <td>Mar 12, 2024</td>
                            <td>3</td>
                            <td>R 3,200</td>
                            <td><span class="order-status status-completed">Completed</span></td>
                        </tr>
                        <tr>
                            <td>#BT-0987</td>
                            <td>Feb 28, 2024</td>
                            <td>1</td>
                            <td>R 1,850</td>
                            <td><span class="order-status status-completed">Completed</span></td>
                        </tr>
                        <tr>
                            <td>#BT-0954</td>
                            <td>Feb 15, 2024</td>
                            <td>2</td>
                            <td>R 2,750</td>
                            <td><span class="order-status status-completed">Completed</span></td>
                        </tr>
                        <tr>
                            <td>#BT-0892</td>
                            <td>Jan 30, 2024</td>
                            <td>1</td>
                            <td>R 1,250</td>
                            <td><span class="order-status status-completed">Completed</span></td>
                        </tr>
                        <tr>
                            <td>#BT-0843</td>
                            <td>Jan 12, 2024</td>
                            <td>4</td>
                            <td>R 5,600</td>
                            <td><span class="order-status status-completed">Completed</span></td>
                        </tr>
                    </tbody>
                </table>
                
                <div style="text-align: center; margin-top: 20px;">
                    <button class="btn btn-outline">
                        <i class="fas fa-list"></i> View All Orders
                    </button>
                </div>
            </div>

            <!-- Notes Tab -->
            <div class="tab-content" id="notes-tab">
                <div class="notes-container">
                    <div class="note">
                        <div class="note-header">
                            <span class="note-author">Admin User</span>
                            <span class="note-date">Mar 15, 2024</span>
                        </div>
                        <div class="note-content">
                            Customer reached out about a sizing issue with their recent order. Offered store credit for the inconvenience which they accepted.
                        </div>
                    </div>
                    <div class="note">
                        <div class="note-header">
                            <span class="note-author">Sales Team</span>
                            <span class="note-date">Feb 20, 2024</span>
                        </div>
                        <div class="note-content">
                            Customer responded well to our VIP email campaign. Made a purchase within 24 hours of receiving the email.
                        </div>
                    </div>
                    <div class="note">
                        <div class="note-header">
                            <span class="note-author">Admin User</span>
                            <span class="note-date">Jan 5, 2024</span>
                        </div>
                        <div class="note-content">
                            Added to VIP segment due to high lifetime value and repeat purchases. Consider for exclusive offers.
                        </div>
                    </div>
                </div>
                
                <div class="add-note-form">
                    <h3 style="margin-bottom: 10px;">Add New Note</h3>
                    <textarea class="note-textarea" placeholder="Add a note about this customer..."></textarea>
                    <button class="btn btn-primary">
                        <i class="fas fa-save"></i> Save Note
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- ========== BULK ACTION TOOLBAR ========== -->
    <div class="bulk-actions" id="bulkActions">
        <span class="bulk-count">3 selected</span>
        <select>
            <option value="">Bulk Actions</option>
            <option value="email">Send Email</option>
            <option value="tag">Add Tag</option>
            <option value="segment">Add to Segment</option>
            <option value="export">Export Selected</option>
        </select>
        <button>
            <i class="fas fa-check"></i> Apply
        </button>
        <button id="clear-selection">
            <i class="fas fa-times"></i> Clear
        </button>
    </div>

    <!-- ========== JAVASCRIPT ========== -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Store customer data
        const customers = Array.from(document.querySelectorAll('.customer-card')).map(card => {
            return {
                element: card,
                id: card.getAttribute('data-id'),
                name: card.getAttribute('data-name'),
                email: card.getAttribute('data-email'),
                phone: card.getAttribute('data-phone'),
                joinDate: card.getAttribute('data-join-date'),
                status: card.getAttribute('data-status'),
                orders: parseInt(card.getAttribute('data-orders')),
                ltv: card.getAttribute('data-ltv'),
                rfm: card.getAttribute('data-rfm'),
                tags: card.getAttribute('data-tags').split(',')
            };
        });

        // Current filter state
        let filterState = {
            searchQuery: '',
            status: 'all',
            rfm: {
                recency: null,
                frequency: null,
                monetary: null
            },
            minOrders: 0,
            tag: ''
        };

        // Current sort method
        let currentSortMethod = 'name-asc';

        // Selected customers for bulk actions
        let selectedCustomers = [];

        // ========== MODAL FUNCTIONS ==========
        const modal = document.getElementById('customerModal');
        const modalOverlay = document.getElementById('customerModalOverlay');
        const modalClose = document.getElementById('modalClose');

        function openCustomerModal(customerData) {
            // Populate modal with customer data
            document.getElementById('detail-name').textContent = customerData.name;
            document.getElementById('detail-email').textContent = customerData.email;
            document.getElementById('detail-phone').textContent = customerData.phone;
            document.getElementById('detail-join-date').textContent = formatJoinDate(customerData.joinDate);
            
            // Update status indicator
            const statusElement = document.getElementById('detail-status');
            const statusIndicator = statusElement.querySelector('span');
            statusIndicator.className = `status-${customerData.status}`;
            statusElement.innerHTML = `${statusIndicator.outerHTML} ${capitalizeFirstLetter(customerData.status)}`;
            
            document.getElementById('detail-orders').textContent = customerData.orders;
            document.getElementById('detail-ltv').textContent = customerData.ltv;
            document.getElementById('detail-rfm').textContent = customerData.rfm;
            
            // Update tags
            const tagsContainer = document.getElementById('detail-tags');
            tagsContainer.innerHTML = '';
            customerData.tags.forEach(tag => {
                if (tag.trim()) {
                    const tagElement = document.createElement('div');
                    tagElement.className = 'tag';
                    tagElement.textContent = capitalizeFirstLetter(tag);
                    tagsContainer.appendChild(tagElement);
                }
            });

            // Show modal
            modalOverlay.classList.add('active');
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeCustomerModal() {
            modalOverlay.classList.remove('active');
            modal.classList.remove('active');
            document.body.style.overflow = '';
        }

        // Helper functions
        function formatJoinDate(dateString) {
            const options = { year: 'numeric', month: 'long', day: 'numeric' };
            return new Date(dateString).toLocaleDateString('en-US', options);
        }

        function capitalizeFirstLetter(string) {
            return string.charAt(0).toUpperCase() + string.slice(1);
        }

        // ========== TAB FUNCTIONALITY ==========
        const tabButtons = document.querySelectorAll('.tab-btn');
        
        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons and tabs
                tabButtons.forEach(btn => btn.classList.remove('active'));
                document.querySelectorAll('.tab-content').forEach(tab => tab.classList.remove('active'));
                
                // Add active class to clicked button and corresponding tab
                button.classList.add('active');
                const tabId = button.getAttribute('data-tab') + '-tab';
                document.getElementById(tabId).classList.add('active');
            });
        });

        // ========== FILTER FUNCTIONS ==========
        function filterCustomers() {
            customers.forEach(customer => {
                let matches = true;
                
                // Search filter
                if (filterState.searchQuery) {
                    const searchTerm = filterState.searchQuery.toLowerCase();
                    matches = matches && (
                        customer.name.toLowerCase().includes(searchTerm) || 
                        customer.email.toLowerCase().includes(searchTerm) ||
                        customer.phone.includes(searchTerm)
                    );
                }
                
                // Status filter
                if (filterState.status !== 'all') {
                    matches = matches && customer.status === filterState.status;
                }
                
                // RFM filter
                if (filterState.rfm.recency) {
                    matches = matches && customer.rfm[0] >= filterState.rfm.recency;
                }
                if (filterState.rfm.frequency) {
                    matches = matches && customer.rfm[1] >= filterState.rfm.frequency;
                }
                if (filterState.rfm.monetary) {
                    matches = matches && customer.rfm[2] >= filterState.rfm.monetary;
                }
                
                // Orders filter
                matches = matches && customer.orders >= filterState.minOrders;
                
                // Tag filter
                if (filterState.tag) {
                    matches = matches && customer.tags.some(tag => 
                        tag.toLowerCase().includes(filterState.tag.toLowerCase())
                    );
                }
                
                // Apply visibility
                if (matches) {
                    customer.element.style.display = 'block';
                } else {
                    customer.element.style.display = 'none';
                }
            });
            
            // Update bulk actions if any customers are selected
            if (selectedCustomers.length > 0) {
                updateBulkActions();
            }
        }

        // ========== SORT FUNCTIONS ==========
        function sortCustomers() {
            const customersGrid = document.getElementById('customersGrid');
            const customerElements = Array.from(customersGrid.querySelectorAll('.customer-card'));
            
            customerElements.sort((a, b) => {
                const aData = customers.find(c => c.element === a);
                const bData = customers.find(c => c.element === b);
                
                switch (currentSortMethod) {
                    case 'name-asc':
                        return aData.name.localeCompare(bData.name);
                    case 'name-desc':
                        return bData.name.localeCompare(aData.name);
                    case 'orders-asc':
                        return aData.orders - bData.orders;
                    case 'orders-desc':
                        return bData.orders - aData.orders;
                    case 'ltv-asc':
                        return parseFloat(aData.ltv.replace(/[^0-9.]/g, '')) - parseFloat(bData.ltv.replace(/[^0-9.]/g, ''));
                    case 'ltv-desc':
                        return parseFloat(bData.ltv.replace(/[^0-9.]/g, '')) - parseFloat(aData.ltv.replace(/[^0-9.]/g, ''));
                    case 'join-date-asc':
                        return new Date(aData.joinDate) - new Date(bData.joinDate);
                    case 'join-date-desc':
                        return new Date(bData.joinDate) - new Date(aData.joinDate);
                    default:
                        return parseInt(aData.id) - parseInt(bData.id);
                }
            });
            
            // Re-append sorted customers
            customerElements.forEach(el => customersGrid.appendChild(el));
        }

        // ========== BULK ACTIONS FUNCTIONS ==========
        function updateBulkActions() {
            const bulkActions = document.getElementById('bulkActions');
            const bulkCount = bulkActions.querySelector('.bulk-count');
            
            bulkCount.textContent = `${selectedCustomers.length} selected`;
            
            if (selectedCustomers.length > 0) {
                bulkActions.classList.add('active');
            } else {
                bulkActions.classList.remove('active');
            }
        }

        // ========== EVENT LISTENERS ==========
        // Customer card click
        customers.forEach(customer => {
            customer.element.addEventListener('click', function(e) {
                // Don't open modal if clicking a checkbox or bulk action element
                if (e.target.type === 'checkbox' || e.target.closest('.bulk-checkbox')) {
                    return;
                }
                
                openCustomerModal(customer);
            });
        });

        // Modal close
        modalClose.addEventListener('click', closeCustomerModal);
        modalOverlay.addEventListener('click', closeCustomerModal);

        // Search input
        document.getElementById('customer-search').addEventListener('input', function(e) {
            filterState.searchQuery = e.target.value;
            filterCustomers();
        });

        // Status filter
        document.getElementById('status-filter').addEventListener('change', function(e) {
            filterState.status = e.target.value;
            filterCustomers();
        });

        // RFM filters
        document.getElementById('rfm-recency').addEventListener('change', function(e) {
            filterState.rfm.recency = e.target.value;
            filterCustomers();
        });

        document.getElementById('rfm-frequency').addEventListener('change', function(e) {
            filterState.rfm.frequency = e.target.value;
            filterCustomers();
        });

        document.getElementById('rfm-monetary').addEventListener('change', function(e) {
            filterState.rfm.monetary = e.target.value;
            filterCustomers();
        });

        // Orders filter
        document.getElementById('order-filter').addEventListener('change', function(e) {
            const value = e.target.value;
            filterState.minOrders = value === 'any' ? 0 : parseInt(value);
            filterCustomers();
        });

        // Tag filter
        document.getElementById('tag-filter').addEventListener('input', function(e) {
            filterState.tag = e.target.value;
            filterCustomers();
        });

        // Segment badges
        document.querySelectorAll('.segment-badge').forEach(badge => {
            badge.addEventListener('click', function() {
                if (this.classList.contains('active')) return;

                document.querySelectorAll('.segment-badge').forEach(b => {
                    b.classList.remove('active');
                });
                this.classList.add('active');
                
                // Apply segment filter (simplified for demo)
                if (this.textContent.includes('VIP')) {
                    filterState.tag = 'vip';
                } else if (this.textContent.includes('Recent')) {
                    filterState.status = 'active';
                    // Would add date filter in real implementation
                } else if (this.textContent.includes('Inactive')) {
                    filterState.status = 'inactive';
                } else {
                    // All Customers
                    filterState.tag = '';
                    filterState.status = 'all';
                }
                
                filterCustomers();
            });
        });

        // Add Customer button
        document.getElementById('add-customer-btn').addEventListener('click', function() {
            alert('Add customer functionality would open a form in a real implementation');
        });

        // Export button
        document.getElementById('export-btn').addEventListener('click', function() {
            if (selectedCustomers.length > 0) {
                alert(`Exporting ${selectedCustomers.length} selected customers`);
            } else {
                alert('Exporting all visible customers');
            }
        });

        // Clear selection button
        document.getElementById('clear-selection').addEventListener('click', function() {
            selectedCustomers = [];
            updateBulkActions();
            document.querySelectorAll('.bulk-checkbox').forEach(checkbox => {
                checkbox.checked = false;
            });
        });

        // ========== INITIALIZE ==========
        filterCustomers(); // Apply initial filters
    });
    </script>
</body>
</html>