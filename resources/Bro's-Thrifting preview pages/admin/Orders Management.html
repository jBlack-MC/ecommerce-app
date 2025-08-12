<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Orders Management | Bro's Thrifting</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Fonts and Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker@3.1.0/daterangepicker.css">
    
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
        
        /* Status colors */
        --status-pending: #FFC107;
        --status-processing: #17A2B8;
        --status-shipped: #007BFF;
        --status-delivered: #28A745;
        --status-cancelled: #DC3545;
        --status-refunded: #6C757D;
        
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

    /* ========== PAGE HEADER ========== */
    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
        flex-wrap: wrap;
        gap: 15px;
    }

    .page-header h1 {
        font-size: 1.8rem;
        color: var(--urban-green);
    }

    .page-actions {
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
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .btn-primary {
        background: var(--urban-green);
        color: white;
    }

    .btn-primary:hover {
        background: var(--oasis-teal);
        transform: translateY(-2px);
    }

    .btn-secondary {
        background: var(--cool-sky-blue);
        color: white;
    }

    .btn-secondary:hover {
        background: var(--charcoal-gray);
        transform: translateY(-2px);
    }

    /* ========== FILTERS SECTION ========== */
    .filters-section {
        background: var(--neutral-beige);
        border-radius: var(--border-radius);
        padding: 20px;
        margin-bottom: 25px;
        box-shadow: var(--shadow);
        border: 1px solid var(--charcoal-gray);
    }

    .filters-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 20px;
    }

    .filter-group {
        margin-bottom: 0;
    }

    .filter-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 500;
        color: var(--urban-green);
    }

    .filter-control {
        width: 100%;
        padding: 10px 15px;
        border: 1px solid var(--charcoal-gray);
        border-radius: var(--border-radius);
        background: var(--light-bg);
        font-family: 'Poppins', sans-serif;
        transition: var(--transition);
    }

    .filter-control:focus {
        outline: none;
        border-color: var(--urban-green);
        box-shadow: 0 0 0 2px rgba(var(--primary-rgb), 0.2);
    }

    /* Status badges filter */
    .status-badges {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-top: 5px;
    }

    .status-badge {
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 500;
        cursor: pointer;
        transition: var(--transition);
        border: 1px solid transparent;
    }

    .status-badge:hover {
        opacity: 0.9;
        transform: translateY(-1px);
    }

    .status-badge.active {
        border-color: var(--dark);
    }

    .status-pending {
        background-color: var(--status-pending);
        color: var(--dark);
    }

    .status-processing {
        background-color: var(--status-processing);
        color: white;
    }

    .status-shipped {
        background-color: var(--status-shipped);
        color: white;
    }

    .status-delivered {
        background-color: var(--status-delivered);
        color: white;
    }

    .status-cancelled {
        background-color: var(--status-cancelled);
        color: white;
    }

    .status-refunded {
        background-color: var(--status-refunded);
        color: white;
    }

    /* Apply filters button */
    .apply-filters {
        grid-column: 1 / -1;
        display: flex;
        justify-content: flex-end;
        gap: 10px;
        margin-top: 10px;
    }

    /* ========== ORDERS TABLE ========== */
    .orders-table-container {
        background: var(--neutral-beige);
        border-radius: var(--border-radius);
        padding: 20px;
        box-shadow: var(--shadow);
        border: 1px solid var(--charcoal-gray);
        overflow-x: auto;
    }

    .table-actions {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
        flex-wrap: wrap;
        gap: 10px;
    }

    .batch-actions {
        display: flex;
        gap: 10px;
        align-items: center;
    }

    .table-actions select {
        padding: 8px 15px;
        border: 1px solid var(--charcoal-gray);
        border-radius: var(--border-radius);
        background: var(--light-bg);
        cursor: pointer;
        transition: var(--transition);
    }

    .table-actions select:focus {
        border-color: var(--urban-green);
        outline: none;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        font-size: 0.95rem;
    }

    th, td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid var(--light-gray);
    }

    th {
        background-color: var(--urban-green);
        color: white;
        font-weight: 600;
        position: sticky;
        top: 0;
    }

    tr:hover {
        background-color: rgba(var(--primary-rgb), 0.05);
    }

    .order-id {
        font-weight: 600;
        color: var(--urban-green);
    }

    .order-customer {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .customer-avatar {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background-color: var(--cool-sky-blue);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        font-size: 0.9rem;
    }

    .order-items {
        font-size: 0.9rem;
        color: var(--gray);
    }

    .order-total {
        font-weight: 600;
    }

    .order-status {
        display: inline-block;
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 500;
    }

    .order-actions {
        display: flex;
        gap: 8px;
    }

    .action-btn {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: transparent;
        border: 1px solid var(--light-gray);
        cursor: pointer;
        transition: var(--transition);
    }

    .action-btn:hover {
        background: var(--light-gray);
        transform: translateY(-2px);
    }

    .action-btn.view {
        color: var(--urban-green);
        border-color: var(--urban-green);
    }

    .action-btn.view:hover {
        background: rgba(var(--primary-rgb), 0.1);
    }

    .action-btn.edit {
        color: var(--cool-sky-blue);
        border-color: var(--cool-sky-blue);
    }

    .action-btn.edit:hover {
        background: rgba(var(--secondary-rgb), 0.1);
    }

    /* Row details */
    .row-details {
        display: none;
        padding: 15px;
        background-color: rgba(var(--primary-rgb), 0.03);
    }

    .row-details-content {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 20px;
    }

    .detail-group h4 {
        margin-bottom: 8px;
        color: var(--urban-green);
    }

    .detail-group p {
        font-size: 0.9rem;
        color: var(--gray);
    }

    /* Checkbox for row selection */
    .row-select {
        width: 18px;
        height: 18px;
        cursor: pointer;
    }

    /* ========== ORDER DETAIL PANEL ========== */
    .order-detail-panel {
        position: fixed;
        top: 0;
        right: -450px;
        width: 450px;
        height: 100vh;
        background: white;
        box-shadow: -5px 0 15px rgba(0,0,0,0.1);
        z-index: 1050;
        transition: var(--transition);
        overflow-y: auto;
        padding: 20px;
    }

    .order-detail-panel.open {
        right: 0;
    }

    .panel-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
        padding-bottom: 15px;
        border-bottom: 1px solid var(--light-gray);
    }

    .panel-header h2 {
        color: var(--urban-green);
    }

    .close-panel {
        background: none;
        border: none;
        font-size: 1.5rem;
        cursor: pointer;
        color: var(--gray);
        transition: var(--transition);
    }

    .close-panel:hover {
        color: var(--urban-green);
        transform: rotate(90deg);
    }

    .panel-section {
        margin-bottom: 25px;
    }

    .panel-section h3 {
        font-size: 1.2rem;
        margin-bottom: 15px;
        color: var(--urban-green);
        padding-bottom: 8px;
        border-bottom: 1px solid var(--light-gray);
    }

    .customer-info {
        display: flex;
        gap: 15px;
        margin-bottom: 20px;
    }

    .customer-avatar-lg {
        width: 64px;
        height: 64px;
        border-radius: 50%;
        background-color: var(--cool-sky-blue);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        font-size: 1.5rem;
        flex-shrink: 0;
    }

    .customer-details h4 {
        margin-bottom: 5px;
    }

    .customer-details p {
        color: var(--gray);
        font-size: 0.9rem;
        margin-bottom: 5px;
    }

    .items-list {
        width: 100%;
        border-collapse: collapse;
    }

    .items-list th {
        background-color: var(--light-bg);
        color: var(--dark);
        font-size: 0.9rem;
    }

    .items-list td {
        padding: 10px;
        font-size: 0.9rem;
        border-bottom: 1px solid var(--light-gray);
    }

    .item-image {
        width: 50px;
        height: 50px;
        object-fit: cover;
        border-radius: var(--border-radius);
    }

    .status-select {
        width: 100%;
        padding: 8px 12px;
        border-radius: var(--border-radius);
        border: 1px solid var(--light-gray);
        background: var(--light-bg);
        font-family: 'Poppins', sans-serif;
        transition: var(--transition);
    }

    .status-select:focus {
        outline: none;
        border-color: var(--urban-green);
    }

    .panel-actions {
        display: flex;
        gap: 10px;
        margin-top: 20px;
    }

    /* Overlay for panel */
    .panel-overlay {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0,0,0,0.5);
        z-index: 1040;
        opacity: 0;
        pointer-events: none;
        transition: var(--transition);
    }

    .panel-overlay.active {
        opacity: 1;
        pointer-events: auto;
    }

    /* ========== RESPONSIVE DESIGN ========== */
    @media (max-width: 1200px) {
        .order-detail-panel {
            width: 400px;
        }
    }

    @media (max-width: 992px) {
        .filters-grid {
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        }
        
        .order-detail-panel {
            width: 380px;
        }
    }

    @media (max-width: 768px) {
        .page-header {
            flex-direction: column;
            align-items: flex-start;
        }
        
        .page-actions {
            width: 100%;
            justify-content: flex-end;
        }
        
        .order-detail-panel {
            width: 100%;
            max-width: 100%;
            right: -100%;
        }
        
        .order-detail-panel.open {
            right: 0;
        }
        
        .panel-section {
            margin-bottom: 15px;
        }
    }

    @media (max-width: 576px) {
        .filters-grid {
            grid-template-columns: 1fr;
        }
        
        .apply-filters {
            justify-content: center;
        }
        
        .table-actions {
            flex-direction: column;
            align-items: flex-start;
        }
        
        .batch-actions {
            width: 100%;
            justify-content: space-between;
        }
        
        th, td {
            padding: 8px 10px;
            font-size: 0.85rem;
        }
        
        .customer-avatar {
            display: none;
        }
    }

    @media (max-width: 420px) {
        .panel-actions {
            flex-direction: column;
        }
        
        .btn {
            width: 100%;
        }
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

                <!-- User actions -->
                <div class="user-actions">
                    <a href="{{ url('/login') }}" title="Account" aria-label="Account">
                        <i class="fas fa-user"></i>
                    </a>
                    <a href="{{ url('/orders') }}" title="Orders" aria-label="Orders">
                        <i class="fas fa-clipboard-list"></i>
                    </a>
                    <a href="{{ url('/cart') }}" title="Cart" aria-label="Cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- ========== MAIN CONTENT SECTION ========== -->
    <div class="container">
        <!-- Page Header -->
        <div class="page-header">
            <h1><i class="fas fa-clipboard-list"></i> Orders Management</h1>
            <div class="page-actions">
                <button class="btn btn-primary">
                    <i class="fas fa-plus"></i> New Order
                </button>
                <button class="btn btn-secondary">
                    <i class="fas fa-file-export"></i> Export All
                </button>
            </div>
        </div>

        <!-- Filters Section -->
        <div class="filters-section">
            <div class="filters-grid">
                <!-- Date Range Filter -->
                <div class="filter-group">
                    <label for="date-range">Date Range</label>
                    <input type="text" id="date-range" class="filter-control" placeholder="Select date range">
                </div>

                <!-- Status Filter -->
                <div class="filter-group">
                    <label>Order Status</label>
                    <div class="status-badges">
                        <div class="status-badge status-pending active">Pending</div>
                        <div class="status-badge status-processing active">Processing</div>
                        <div class="status-badge status-shipped active">Shipped</div>
                        <div class="status-badge status-delivered">Delivered</div>
                        <div class="status-badge status-cancelled">Cancelled</div>
                        <div class="status-badge status-refunded">Refunded</div>
                    </div>
                </div>

                <!-- Customer Filter -->
                <div class="filter-group">
                    <label for="customer-search">Customer Search</label>
                    <input type="text" id="customer-search" class="filter-control" placeholder="Search customers...">
                </div>

                <!-- Order ID Filter -->
                <div class="filter-group">
                    <label for="order-id">Order ID</label>
                    <input type="text" id="order-id" class="filter-control" placeholder="Search by order #">
                </div>

                <!-- Apply Filters Button -->
                <div class="apply-filters">
                    <button class="btn btn-secondary">
                        <i class="fas fa-times"></i> Reset
                    </button>
                    <button class="btn btn-primary">
                        <i class="fas fa-filter"></i> Apply Filters
                    </button>
                </div>
            </div>
        </div>

        <!-- Orders Table -->
        <div class="orders-table-container">
            <!-- Table Actions -->
            <div class="table-actions">
                <div class="batch-actions">
                    <select>
                        <option>Bulk Actions</option>
                        <option>Print Shipping Labels</option>
                        <option>Mark as Processing</option>
                        <option>Mark as Shipped</option>
                        <option>Mark as Delivered</option>
                        <option>Cancel Orders</option>
                        <option>Export Selected</option>
                    </select>
                    <button class="btn btn-primary" style="padding: 8px 15px;">
                        Apply
                    </button>
                </div>
                <div>
                    <span>Showing 1 to 10 of 48 orders</span>
                </div>
            </div>

            <!-- Orders Table -->
            <table>
                <thead>
                    <tr>
                        <th style="width: 30px;"><input type="checkbox" class="row-select"></th>
                        <th>Order #</th>
                        <th>Date</th>
                        <th>Customer</th>
                        <th>Items</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Order 1 -->
                    <tr>
                        <td><input type="checkbox" class="row-select"></td>
                        <td class="order-id">#BT-1001</td>
                        <td>2025-06-15</td>
                        <td class="order-customer">
                            <div class="customer-avatar">JD</div>
                            <div>John Doe</div>
                        </td>
                        <td class="order-items">3 items</td>
                        <td class="order-total">R 4,250</td>
                        <td><span class="order-status status-pending">Pending</span></td>
                        <td class="order-actions">
                            <button class="action-btn view" title="View Order" data-order-id="BT-1001">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="action-btn edit" title="Edit Order">
                                <i class="fas fa-edit"></i>
                            </button>
                        </td>
                    </tr>
                    <tr class="row-details">
                        <td colspan="8">
                            <div class="row-details-content">
                                <div class="detail-group">
                                    <h4>Shipping Address</h4>
                                    <p>123 Main St<br>Apartment 4B<br>Cape Town, 8001<br>South Africa</p>
                                </div>
                                <div class="detail-group">
                                    <h4>Contact Info</h4>
                                    <p>john.doe@example.com<br>+27 82 123 4567</p>
                                </div>
                                <div class="detail-group">
                                    <h4>Payment Method</h4>
                                    <p>Credit Card (Visa ending in 4242)</p>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <!-- Order 2 -->
                    <tr>
                        <td><input type="checkbox" class="row-select"></td>
                        <td class="order-id">#BT-1002</td>
                        <td>2025-06-14</td>
                        <td class="order-customer">
                            <div class="customer-avatar">AS</div>
                            <div>Alice Smith</div>
                        </td>
                        <td class="order-items">1 item</td>
                        <td class="order-total">R 12,500</td>
                        <td><span class="order-status status-processing">Processing</span></td>
                        <td class="order-actions">
                            <button class="action-btn view" title="View Order" data-order-id="BT-1002">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="action-btn edit" title="Edit Order">
                                <i class="fas fa-edit"></i>
                            </button>
                        </td>
                    </tr>
                    <tr class="row-details">
                        <td colspan="8">
                            <div class="row-details-content">
                                <div class="detail-group">
                                    <h4>Shipping Address</h4>
                                    <p>456 Oak Ave<br>Johannesburg, 2000<br>South Africa</p>
                                </div>
                                <div class="detail-group">
                                    <h4>Contact Info</h4>
                                    <p>alice.smith@example.com<br>+27 83 456 7890</p>
                                </div>
                                <div class="detail-group">
                                    <h4>Payment Method</h4>
                                    <p>PayPal (alice.smith@example.com)</p>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <!-- Order 3 -->
                    <tr>
                        <td><input type="checkbox" class="row-select"></td>
                        <td class="order-id">#BT-1003</td>
                        <td>2025-06-13</td>
                        <td class="order-customer">
                            <div class="customer-avatar">RJ</div>
                            <div>Robert Johnson</div>
                        </td>
                        <td class="order-items">2 items</td>
                        <td class="order-total">R 3,200</td>
                        <td><span class="order-status status-shipped">Shipped</span></td>
                        <td class="order-actions">
                            <button class="action-btn view" title="View Order" data-order-id="BT-1003">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="action-btn edit" title="Edit Order">
                                <i class="fas fa-edit"></i>
                            </button>
                        </td>
                    </tr>
                    <tr class="row-details">
                        <td colspan="8">
                            <div class="row-details-content">
                                <div class="detail-group">
                                    <h4>Shipping Address</h4>
                                    <p>789 Pine Rd<br>Durban, 4000<br>South Africa</p>
                                </div>
                                <div class="detail-group">
                                    <h4>Contact Info</h4>
                                    <p>robert.j@example.com<br>+27 84 789 0123</p>
                                </div>
                                <div class="detail-group">
                                    <h4>Payment Method</h4>
                                    <p>Credit Card (Mastercard ending in 5555)</p>
                                </div>
                                <div class="detail-group">
                                    <h4>Tracking Info</h4>
                                    <p>Courier: The Courier Guy<br>Tracking #: TCG123456789<br>Estimated Delivery: 2025-06-18</p>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <!-- Order 4 -->
                    <tr>
                        <td><input type="checkbox" class="row-select"></td>
                        <td class="order-id">#BT-1004</td>
                        <td>2025-06-12</td>
                        <td class="order-customer">
                            <div class="customer-avatar">MB</div>
                            <div>Maria Brown</div>
                        </td>
                        <td class="order-items">5 items</td>
                        <td class="order-total">R 8,750</td>
                        <td><span class="order-status status-delivered">Delivered</span></td>
                        <td class="order-actions">
                            <button class="action-btn view" title="View Order" data-order-id="BT-1004">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="action-btn edit" title="Edit Order">
                                <i class="fas fa-edit"></i>
                            </button>
                        </td>
                    </tr>
                    <tr class="row-details">
                        <td colspan="8">
                            <div class="row-details-content">
                                <div class="detail-group">
                                    <h4>Shipping Address</h4>
                                    <p>321 Elm St<br>Pretoria, 0001<br>South Africa</p>
                                </div>
                                <div class="detail-group">
                                    <h4>Contact Info</h4>
                                    <p>maria.b@example.com<br>+27 81 234 5678</p>
                                </div>
                                <div class="detail-group">
                                    <h4>Payment Method</h4>
                                    <p>EFT (Cleared on 2025-06-12)</p>
                                </div>
                                <div class="detail-group">
                                    <h4>Tracking Info</h4>
                                    <p>Courier: FedEx<br>Tracking #: FDX987654321<br>Delivered on: 2025-06-15</p>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <!-- Order 5 -->
                    <tr>
                        <td><input type="checkbox" class="row-select"></td>
                        <td class="order-id">#BT-1005</td>
                        <td>2025-06-11</td>
                        <td class="order-customer">
                            <div class="customer-avatar">DW</div>
                            <div>David Wilson</div>
                        </td>
                        <td class="order-items">1 item</td>
                        <td class="order-total">R 1,250</td>
                        <td><span class="order-status status-cancelled">Cancelled</span></td>
                        <td class="order-actions">
                            <button class="action-btn view" title="View Order" data-order-id="BT-1005">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="action-btn edit" title="Edit Order">
                                <i class="fas fa-edit"></i>
                            </button>
                        </td>
                    </tr>
                    <tr class="row-details">
                        <td colspan="8">
                            <div class="row-details-content">
                                <div class="detail-group">
                                    <h4>Shipping Address</h4>
                                    <p>654 Maple Dr<br>Port Elizabeth, 6000<br>South Africa</p>
                                </div>
                                <div class="detail-group">
                                    <h4>Contact Info</h4>
                                    <p>david.w@example.com<br>+27 82 345 6789</p>
                                </div>
                                <div class="detail-group">
                                    <h4>Payment Method</h4>
                                    <p>Credit Card (Refunded)</p>
                                </div>
                                <div class="detail-group">
                                    <h4>Cancellation Reason</h4>
                                    <p>Customer changed mind</p>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Order Detail Panel -->
    <div class="order-detail-panel">
        <div class="panel-header">
            <h2>Order Details</h2>
            <button class="close-panel">&times;</button>
        </div>

        <div class="panel-section">
            <h3>Customer Information</h3>
            <div class="customer-info">
                <div class="customer-avatar-lg">JD</div>
                <div class="customer-details">
                    <h4>John Doe</h4>
                    <p>john.doe@example.com</p>
                    <p>+27 82 123 4567</p>
                    <p>Member since: June 2024</p>
                </div>
            </div>
        </div>

        <div class="panel-section">
            <h3>Order Summary</h3>
            <table class="items-list">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div style="display: flex; align-items: center; gap: 10px;">
                                <img src="https://images.unsplash.com/photo-1527719327859-c6ce80353573?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&h=100&q=80" alt="Vintage Sneakers" class="item-image">
                                <div>
                                    <div>Vintage Air Jordan 1</div>
                                    <small style="color: var(--gray);">Size: 10</small>
                                </div>
                            </div>
                        </td>
                        <td>R 3,200</td>
                        <td>1</td>
                        <td>R 3,200</td>
                    </tr>
                    <tr>
                        <td>
                            <div style="display: flex; align-items: center; gap: 10px;">
                                <img src="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&h=100&q=80" alt="Vintage Sunglasses" class="item-image">
                                <div>
                                    <div>Vintage Aviator Sunglasses</div>
                                    <small style="color: var(--gray);">Color: Gold</small>
                                </div>
                            </div>
                        </td>
                        <td>R 1,499</td>
                        <td>1</td>
                        <td>R 1,499</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3" style="text-align: right; font-weight: 600;">Subtotal:</td>
                        <td>R 4,699</td>
                    </tr>
                    <tr>
                        <td colspan="3" style="text-align: right; font-weight: 600;">Shipping:</td>
                        <td>R 120</td>
                    </tr>
                    <tr>
                        <td colspan="3" style="text-align: right; font-weight: 600;">Discount:</td>
                        <td>-R 569</td>
                    </tr>
                    <tr>
                        <td colspan="3" style="text-align: right; font-weight: 600;">Total:</td>
                        <td>R 4,250</td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class="panel-section">
            <h3>Shipping Information</h3>
            <p><strong>Address:</strong> 123 Main St, Apartment 4B, Cape Town, 8001, South Africa</p>
            <p><strong>Shipping Method:</strong> Standard Shipping (3-5 business days)</p>
            <p><strong>Tracking Number:</strong> Not yet shipped</p>
        </div>

        <div class="panel-section">
            <h3>Payment Information</h4>
            <p><strong>Payment Method:</strong> Credit Card (Visa ending in 4242)</p>
            <p><strong>Transaction ID:</strong> ch_1JXyZt2eZvKYlo2C0ZJXyZt2</p>
            <p><strong>Payment Status:</strong> Paid (R 4,250)</p>
            <p><strong>Date:</strong> June 15, 2025 at 10:30 AM</p>
        </div>

        <div class="panel-section">
            <h3>Order Status</h3>
            <select class="status-select">
                <option value="pending" selected>Pending</option>
                <option value="processing">Processing</option>
                <option value="shipped">Shipped</option>
                <option value="delivered">Delivered</option>
                <option value="cancelled">Cancelled</option>
                <option value="refunded">Refunded</option>
            </select>
            <div class="panel-actions">
                <button class="btn btn-primary">
                    <i class="fas fa-save"></i> Update Status
                </button>
                <button class="btn btn-secondary">
                    <i class="fas fa-print"></i> Print Invoice
                </button>
            </div>
        </div>
    </div>

    <!-- Panel Overlay -->
    <div class="panel-overlay"></div>

    <!-- ========== JAVASCRIPT ========== -->
    <!-- jQuery (required for daterangepicker) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    
    <!-- Date Range Picker -->
    <script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker@3.1.0/daterangepicker.min.js"></script>
    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // ========== DATE RANGE PICKER ==========
        $('#date-range').daterangepicker({
            opens: 'left',
            autoUpdateInput: false,
            locale: {
                cancelLabel: 'Clear',
                format: 'YYYY-MM-DD',
                applyLabel: 'Apply',
                cancelLabel: 'Clear',
                fromLabel: 'From',
                toLabel: 'To',
                customRangeLabel: 'Custom',
                daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                firstDay: 1
            }
        });

        $('#date-range').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('YYYY-MM-DD') + ' - ' + picker.endDate.format('YYYY-MM-DD'));
        });

        $('#date-range').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });

        // ========== STATUS BADGES FILTER ==========
        document.querySelectorAll('.status-badge').forEach(badge => {
            badge.addEventListener('click', function() {
                this.classList.toggle('active');
            });
        });

        // ========== ROW SELECTION ==========
        // Select all checkbox
        const selectAll = document.querySelector('thead .row-select');
        selectAll.addEventListener('change', function() {
            const checkboxes = document.querySelectorAll('tbody .row-select');
            checkboxes.forEach(checkbox => {
                checkbox.checked = this.checked;
            });
        });

        // Individual row checkboxes
        document.querySelectorAll('tbody .row-select').forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                if (!this.checked) {
                    selectAll.checked = false;
                } else {
                    // Check if all are selected
                    const allChecked = Array.from(document.querySelectorAll('tbody .row-select')).every(cb => cb.checked);
                    selectAll.checked = allChecked;
                }
            });
        });

        // ========== ROW DETAILS TOGGLE ==========
        document.querySelectorAll('tbody tr:not(.row-details)').forEach(row => {
            row.addEventListener('click', function(e) {
                // Don't toggle if clicking on a checkbox or action button
                if (e.target.classList.contains('row-select') || 
                    e.target.closest('.action-btn') || 
                    e.target.tagName === 'A' || 
                    e.target.tagName === 'BUTTON') {
                    return;
                }
                
                const detailsRow = this.nextElementSibling;
                if (detailsRow.classList.contains('row-details')) {
                    detailsRow.style.display = detailsRow.style.display === 'table-row' ? 'none' : 'table-row';
                }
            });
        });

        // ========== ORDER DETAIL PANEL ==========
        const panel = document.querySelector('.order-detail-panel');
        const overlay = document.querySelector('.panel-overlay');
        const closeBtn = document.querySelector('.close-panel');
        
        // Open panel when view button is clicked
        document.querySelectorAll('.action-btn.view').forEach(btn => {
            btn.addEventListener('click', function() {
                const orderId = this.getAttribute('data-order-id');
                // In a real app, we would load order details here
                document.querySelector('.panel-header h2').textContent = `Order ${orderId}`;
                panel.classList.add('open');
                overlay.classList.add('active');
                document.body.style.overflow = 'hidden';
            });
        });
        
        // Close panel
        function closePanel() {
            panel.classList.remove('open');
            overlay.classList.remove('active');
            document.body.style.overflow = '';
        }
        
        closeBtn.addEventListener('click', closePanel);
        overlay.addEventListener('click', closePanel);
        
        // Close panel with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && panel.classList.contains('open')) {
                closePanel();
            }
        });

        // ========== STATUS CHANGE ==========
        const statusSelect = document.querySelector('.status-select');
        const updateStatusBtn = document.querySelector('.panel-actions .btn-primary');
        
        updateStatusBtn.addEventListener('click', function() {
            const newStatus = statusSelect.value;
            const orderId = document.querySelector('.panel-header h2').textContent.replace('Order ', '');
            
            // Confirm status change for certain statuses
            if (newStatus === 'cancelled' || newStatus === 'refunded') {
                if (!confirm(`Are you sure you want to mark order ${orderId} as ${newStatus}?`)) {
                    return;
                }
            }
            
            // In a real app, this would make an API call to update the status
            alert(`Order ${orderId} status updated to ${newStatus}`);
            
            // Update the status in the table (simplified for demo)
            document.querySelectorAll('tbody tr').forEach(row => {
                if (row.querySelector('.order-id')?.textContent === `#${orderId}`) {
                    const statusCell = row.querySelector('.order-status');
                    if (statusCell) {
                        // Remove all status classes
                        statusCell.classList.remove(
                            'status-pending', 
                            'status-processing', 
                            'status-shipped', 
                            'status-delivered', 
                            'status-cancelled', 
                            'status-refunded'
                        );
                        
                        // Add new status class
                        statusCell.classList.add(`status-${newStatus}`);
                        statusCell.textContent = newStatus.charAt(0).toUpperCase() + newStatus.slice(1);
                    }
                }
            });
            
            closePanel();
        });

        // ========== PRINT SHIPPING LABELS ==========
        document.querySelector('select').addEventListener('change', function() {
            if (this.value === 'Print Shipping Labels') {
                const selectedOrders = Array.from(document.querySelectorAll('tbody .row-select:checked'))
                    .map(checkbox => checkbox.closest('tr').querySelector('.order-id').textContent);
                
                if (selectedOrders.length === 0) {
                    alert('Please select at least one order to print labels');
                    this.value = '';
                    return;
                }
                
                // In a real app, this would open a print dialog or generate PDF
                alert(`Printing shipping labels for: ${selectedOrders.join(', ')}`);
                this.value = '';
            }
        });

        // ========== BULK ACTIONS ==========
        document.querySelector('.batch-actions .btn-primary').addEventListener('click', function() {
            const action = document.querySelector('.batch-actions select').value;
            const selectedOrders = Array.from(document.querySelectorAll('tbody .row-select:checked'))
                .map(checkbox => checkbox.closest('tr').querySelector('.order-id').textContent);
            
            if (selectedOrders.length === 0) {
                alert('Please select at least one order');
                return;
            }
            
            if (action === 'Bulk Actions') {
                alert('Please select an action to perform');
                return;
            }
            
            // In a real app, this would make API calls to update orders
            alert(`Performing "${action}" on: ${selectedOrders.join(', ')}`);
        });

        // ========== CUSTOMER SEARCH TYPEAHEAD ==========
        // This is a simplified version - in a real app you'd use a library or API calls
        const customerSearch = document.getElementById('customer-search');
        customerSearch.addEventListener('input', function() {
            // In a real app, this would make API calls to search customers
            console.log('Searching customers for:', this.value);
        });
    });
    </script>
</body>
</html>