<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard | Bro's Thrifting</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Fonts and Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
    :root {
        /* Admin Color Palette */
        --admin-dark: #1a1d23;
        --admin-primary: #4B5A4D;
        --admin-secondary: #3a4a3d;
        --admin-accent: #7D8D97;
        --admin-light: #f8f9fa;
        --admin-gray: #e9ecef;
        --admin-danger: #e63946;
        --admin-warning: #ffc107;
        --admin-success: #28a745;
        --admin-info: #17a2b8;
        
        /* Layout variables */
        --sidebar-width: 250px;
        --header-height: 70px;
        --transition: all 0.3s ease;
        --border-radius: 6px;
        --shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    /* ========== BASE STYLES ========== */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f5f7fa;
        color: #333;
        line-height: 1.6;
    }

    /* ========== ADMIN LAYOUT ========== */
    .admin-container {
        display: flex;
        min-height: 100vh;
    }

    /* ========== SIDEBAR ========== */
    .admin-sidebar {
        width: var(--sidebar-width);
        background: var(--admin-dark);
        color: white;
        position: fixed;
        height: 100vh;
        transition: var(--transition);
        z-index: 100;
    }

    .sidebar-header {
        padding: 20px;
        border-bottom: 1px solid rgba(255,255,255,0.1);
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .sidebar-header h3 {
        font-weight: 600;
        font-size: 1.2rem;
    }

    .sidebar-header i {
        font-size: 1.5rem;
        color: var(--admin-accent);
    }

    .sidebar-menu {
        padding: 20px 0;
    }

    .menu-category {
        color: var(--admin-accent);
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        padding: 15px 20px 5px;
    }

    .menu-item {
        padding: 12px 20px;
        display: flex;
        align-items: center;
        gap: 12px;
        color: rgba(255,255,255,0.8);
        text-decoration: none;
        transition: var(--transition);
        border-left: 3px solid transparent;
    }

    .menu-item i {
        width: 20px;
        text-align: center;
    }

    .menu-item:hover, .menu-item.active {
        background: rgba(255,255,255,0.05);
        color: white;
        border-left-color: var(--admin-accent);
    }

    .menu-item.active {
        background: rgba(75, 90, 77, 0.2);
    }

    .menu-item .badge {
        margin-left: auto;
        background: var(--admin-danger);
        color: white;
        font-size: 0.7rem;
        padding: 2px 6px;
        border-radius: 10px;
    }

    /* ========== MAIN CONTENT ========== */
    .admin-main {
        flex: 1;
        margin-left: var(--sidebar-width);
    }

    /* ========== HEADER ========== */
    .admin-header {
        background: white;
        padding: 0 20px;
        height: var(--header-height);
        display: flex;
        align-items: center;
        justify-content: space-between;
        box-shadow: var(--shadow);
        position: sticky;
        top: 0;
        z-index: 90;
    }

    .header-left {
        display: flex;
        align-items: center;
    }

    .toggle-sidebar {
        background: none;
        border: none;
        font-size: 1.2rem;
        cursor: pointer;
        color: var(--admin-primary);
        margin-right: 15px;
        display: none;
    }

    .search-bar {
        position: relative;
    }

    .search-bar input {
        padding: 8px 15px 8px 35px;
        border: 1px solid var(--admin-gray);
        border-radius: var(--border-radius);
        min-width: 250px;
    }

    .search-bar i {
        position: absolute;
        left: 12px;
        top: 50%;
        transform: translateY(-50%);
        color: var(--admin-accent);
    }

    .header-right {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .notification-icon, .user-menu {
        position: relative;
        cursor: pointer;
    }

    .notification-badge {
        position: absolute;
        top: -5px;
        right: -5px;
        background: var(--admin-danger);
        color: white;
        border-radius: 50%;
        width: 18px;
        height: 18px;
        font-size: 0.7rem;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .user-menu img {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        object-fit: cover;
    }

    .user-menu .dropdown {
        display: none;
        position: absolute;
        right: 0;
        top: 50px;
        background: white;
        min-width: 200px;
        box-shadow: var(--shadow);
        border-radius: var(--border-radius);
        z-index: 100;
    }

    .user-menu:hover .dropdown {
        display: block;
    }

    .dropdown-item {
        padding: 10px 15px;
        display: block;
        color: #333;
        text-decoration: none;
        transition: var(--transition);
    }

    .dropdown-item:hover {
        background: var(--admin-gray);
    }

    .dropdown-divider {
        height: 1px;
        background: var(--admin-gray);
        margin: 5px 0;
    }

    /* ========== CONTENT AREA ========== */
    .admin-content {
        padding: 20px;
    }

    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .page-title {
        font-size: 1.5rem;
        font-weight: 600;
        color: var(--admin-primary);
    }

    .page-actions .btn {
        padding: 8px 15px;
        border-radius: var(--border-radius);
        border: none;
        cursor: pointer;
        font-weight: 500;
        transition: var(--transition);
    }

    .btn-primary {
        background: var(--admin-primary);
        color: white;
    }

    .btn-primary:hover {
        background: var(--admin-secondary);
    }

    /* ========== STATS CARDS ========== */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 20px;
        margin-bottom: 30px;
    }

    .stat-card {
        background: white;
        border-radius: var(--border-radius);
        padding: 20px;
        box-shadow: var(--shadow);
        position: relative;
        overflow: hidden;
    }

    .stat-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 4px;
        height: 100%;
    }

    .stat-card.primary::before {
        background: var(--admin-primary);
    }

    .stat-card.success::before {
        background: var(--admin-success);
    }

    .stat-card.warning::before {
        background: var(--admin-warning);
    }

    .stat-card.danger::before {
        background: var(--admin-danger);
    }

    .stat-title {
        font-size: 0.9rem;
        color: #6c757d;
        margin-bottom: 5px;
    }

    .stat-value {
        font-size: 1.8rem;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .stat-change {
        font-size: 0.85rem;
        display: flex;
        align-items: center;
    }

    .stat-change.positive {
        color: var(--admin-success);
    }

    .stat-change.negative {
        color: var(--admin-danger);
    }

    /* ========== CHARTS SECTION ========== */
    .charts-row {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 20px;
        margin-bottom: 30px;
    }

    .chart-container {
        background: white;
        border-radius: var(--border-radius);
        padding: 20px;
        box-shadow: var(--shadow);
    }

    .chart-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .chart-title {
        font-size: 1.1rem;
        font-weight: 600;
    }

    .chart-legend {
        display: flex;
        gap: 15px;
    }

    .legend-item {
        display: flex;
        align-items: center;
        gap: 5px;
        font-size: 0.85rem;
    }

    .legend-color {
        width: 12px;
        height: 12px;
        border-radius: 3px;
    }

    .legend-color.primary {
        background: var(--admin-primary);
    }

    .legend-color.secondary {
        background: var(--admin-accent);
    }

    /* ========== RECENT ORDERS TABLE ========== */
    .recent-orders {
        background: white;
        border-radius: var(--border-radius);
        box-shadow: var(--shadow);
        overflow: hidden;
    }

    .table-header {
        padding: 15px 20px;
        border-bottom: 1px solid var(--admin-gray);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .table-title {
        font-size: 1.1rem;
        font-weight: 600;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid var(--admin-gray);
    }

    th {
        background: var(--admin-light);
        font-weight: 600;
        color: #495057;
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    tr:hover {
        background: rgba(75, 90, 77, 0.03);
    }

    .status {
        display: inline-block;
        padding: 5px 10px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 500;
    }

    .status.pending {
        background: #fff3cd;
        color: #856404;
    }

    .status.completed {
        background: #d4edda;
        color: #155724;
    }

    .status.processing {
        background: #cce5ff;
        color: #004085;
    }

    .status.cancelled {
        background: #f8d7da;
        color: #721c24;
    }

    .action-btn {
        background: none;
        border: none;
        cursor: pointer;
        color: var(--admin-primary);
        margin: 0 5px;
        font-size: 1rem;
    }

    .table-footer {
        padding: 15px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: var(--admin-light);
    }

    .pagination {
        display: flex;
        gap: 5px;
    }

    .page-link {
        padding: 5px 10px;
        border: 1px solid var(--admin-gray);
        border-radius: 3px;
        text-decoration: none;
        color: #333;
    }

    .page-link.active {
        background: var(--admin-primary);
        color: white;
        border-color: var(--admin-primary);
    }

    /* ========== PRODUCT FORM MODAL ========== */
    .modal-overlay {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0,0,0,0.5);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1000;
        opacity: 0;
        visibility: hidden;
        transition: var(--transition);
    }

    .modal-overlay.active {
        opacity: 1;
        visibility: visible;
    }

    .modal {
        background: white;
        border-radius: var(--border-radius);
        width: 90%;
        max-width: 800px;
        max-height: 90vh;
        overflow-y: auto;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        transform: translateY(-20px);
        transition: var(--transition);
    }

    .modal-overlay.active .modal {
        transform: translateY(0);
    }

    .modal-header {
        padding: 15px 20px;
        border-bottom: 1px solid var(--admin-gray);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .modal-title {
        font-size: 1.3rem;
        font-weight: 600;
    }

    .close-modal {
        background: none;
        border: none;
        font-size: 1.5rem;
        cursor: pointer;
        color: #6c757d;
    }

    .modal-body {
        padding: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 500;
    }

    .form-control {
        width: 100%;
        padding: 10px 15px;
        border: 1px solid var(--admin-gray);
        border-radius: var(--border-radius);
        transition: var(--transition);
    }

    .form-control:focus {
        border-color: var(--admin-primary);
        outline: none;
        box-shadow: 0 0 0 3px rgba(75, 90, 77, 0.2);
    }

    .form-row {
        display: flex;
        gap: 20px;
    }

    .form-row .form-group {
        flex: 1;
    }

    .form-actions {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
        padding-top: 20px;
        border-top: 1px solid var(--admin-gray);
    }

    .btn-secondary {
        background: #6c757d;
        color: white;
    }

    .btn-secondary:hover {
        background: #5a6268;
    }

    /* ========== RESPONSIVE DESIGN ========== */
    @media (max-width: 1200px) {
        .charts-row {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 992px) {
        .admin-sidebar {
            transform: translateX(-100%);
        }
        
        .admin-sidebar.active {
            transform: translateX(0);
        }
        
        .admin-main {
            margin-left: 0;
        }
        
        .toggle-sidebar {
            display: block;
        }
    }

    @media (max-width: 768px) {
        .search-bar input {
            min-width: auto;
            width: 180px;
        }
        
        .header-right {
            gap: 15px;
        }
        
        .stats-grid {
            grid-template-columns: 1fr 1fr;
        }
    }

    @media (max-width: 576px) {
        .stats-grid {
            grid-template-columns: 1fr;
        }
        
        .search-bar {
            display: none;
        }
        
        .form-row {
            flex-direction: column;
            gap: 0;
        }
    }
    </style>
</head>
<body>
    <!-- ========== ADMIN LAYOUT ========== -->
    <div class="admin-container">
        <!-- ========== SIDEBAR ========== -->
        <aside class="admin-sidebar">
            <div class="sidebar-header">
                <i class="fas fa-shopping-bag"></i>
                <h3>Bro's Thrifting</h3>
            </div>
            
            <nav class="sidebar-menu">
                <div class="menu-category">Main</div>
                <a href="#" class="menu-item active">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
                
                <div class="menu-category">Management</div>
                <a href="#" class="menu-item">
                    <i class="fas fa-box-open"></i>
                    <span>Products</span>
                </a>
                <a href="#" class="menu-item">
                    <i class="fas fa-list-alt"></i>
                    <span>Categories</span>
                </a>
                <a href="#" class="menu-item">
                    <i class="fas fa-tags"></i>
                    <span>Discounts</span>
                </a>
                
                <div class="menu-category">Sales</div>
                <a href="#" class="menu-item">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Orders</span>
                    <span class="badge">5</span>
                </a>
                <a href="#" class="menu-item">
                    <i class="fas fa-users"></i>
                    <span>Customers</span>
                </a>
                <a href="#" class="menu-item">
                    <i class="fas fa-chart-line"></i>
                    <span>Reports</span>
                </a>
                
                <div class="menu-category">Content</div>
                <a href="#" class="menu-item">
                    <i class="fas fa-newspaper"></i>
                    <span>Blog Posts</span>
                </a>
                <a href="#" class="menu-item">
                    <i class="fas fa-comments"></i>
                    <span>Reviews</span>
                    <span class="badge">12</span>
                </a>
                
                <div class="menu-category">Settings</div>
                <a href="#" class="menu-item">
                    <i class="fas fa-cog"></i>
                    <span>Settings</span>
                </a>
                <a href="#" class="menu-item">
                    <i class="fas fa-user-shield"></i>
                    <span>Admins</span>
                </a>
            </nav>
        </aside>
        
        <!-- ========== MAIN CONTENT ========== -->
        <main class="admin-main">
            <!-- ========== HEADER ========== -->
            <header class="admin-header">
                <div class="header-left">
                    <button class="toggle-sidebar">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="search-bar">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Search...">
                    </div>
                </div>
                
                <div class="header-right">
                    <div class="notification-icon">
                        <i class="fas fa-bell"></i>
                        <span class="notification-badge">3</span>
                    </div>
                    
                    <div class="user-menu">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Admin User">
                        <div class="dropdown">
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-user-circle mr-2"></i> Profile
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-cog mr-2"></i> Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-sign-out-alt mr-2"></i> Logout
                            </a>
                        </div>
                    </div>
                </div>
            </header>
            
            <!-- ========== CONTENT AREA ========== -->
            <div class="admin-content">
                <div class="page-header">
                    <h1 class="page-title">Dashboard Overview</h1>
                    <div class="page-actions">
                        <button class="btn btn-primary" id="addProductBtn">
                            <i class="fas fa-plus"></i> Add Product
                        </button>
                    </div>
                </div>
                
                <!-- Stats Cards -->
                <div class="stats-grid">
                    <div class="stat-card primary">
                        <div class="stat-title">Total Revenue</div>
                        <div class="stat-value">R 124,850</div>
                        <div class="stat-change positive">
                            <i class="fas fa-arrow-up"></i> 12.5% from last month
                        </div>
                    </div>
                    
                    <div class="stat-card success">
                        <div class="stat-title">Total Orders</div>
                        <div class="stat-value">284</div>
                        <div class="stat-change positive">
                            <i class="fas fa-arrow-up"></i> 8.3% from last month
                        </div>
                    </div>
                    
                    <div class="stat-card warning">
                        <div class="stat-title">Products Sold</div>
                        <div class="stat-value">512</div>
                        <div class="stat-change negative">
                            <i class="fas fa-arrow-down"></i> 2.1% from last month
                        </div>
                    </div>
                    
                    <div class="stat-card danger">
                        <div class="stat-title">Pending Orders</div>
                        <div class="stat-value">15</div>
                        <div class="stat-change positive">
                            <i class="fas fa-arrow-up"></i> 3.4% from last month
                        </div>
                    </div>
                </div>
                
                <!-- Charts Row -->
                <div class="charts-row">
                    <div class="chart-container">
                        <div class="chart-header">
                            <h3 class="chart-title">Sales Overview</h3>
                            <div class="chart-legend">
                                <div class="legend-item">
                                    <span class="legend-color primary"></span>
                                    <span>2023</span>
                                </div>
                                <div class="legend-item">
                                    <span class="legend-color secondary"></span>
                                    <span>2022</span>
                                </div>
                            </div>
                        </div>
                        <div class="chart-placeholder" style="height: 300px; background: #f8f9fa; display: flex; align-items: center; justify-content: center; color: #6c757d;">
                            [Sales Chart Would Appear Here]
                        </div>
                    </div>
                    
                    <div class="chart-container">
                        <div class="chart-header">
                            <h3 class="chart-title">Revenue Sources</h3>
                        </div>
                        <div class="chart-placeholder" style="height: 300px; background: #f8f9fa; display: flex; align-items: center; justify-content: center; color: #6c757d;">
                            [Pie Chart Would Appear Here]
                        </div>
                    </div>
                </div>
                
                <!-- Recent Orders Table -->
                <div class="recent-orders">
                    <div class="table-header">
                        <h3 class="table-title">Recent Orders</h3>
                        <a href="#" class="btn btn-primary btn-sm">View All</a>
                    </div>
                    
                    <table>
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Customer</th>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#BT-1078</td>
                                <td>John Smith</td>
                                <td>2023-06-15</td>
                                <td>R 2,450</td>
                                <td><span class="status completed">Completed</span></td>
                                <td>
                                    <button class="action-btn" title="View">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="action-btn" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>#BT-1077</td>
                                <td>Sarah Johnson</td>
                                <td>2023-06-14</td>
                                <td>R 1,850</td>
                                <td><span class="status processing">Processing</span></td>
                                <td>
                                    <button class="action-btn" title="View">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="action-btn" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>#BT-1076</td>
                                <td>Michael Brown</td>
                                <td>2023-06-14</td>
                                <td>R 3,200</td>
                                <td><span class="status pending">Pending</span></td>
                                <td>
                                    <button class="action-btn" title="View">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="action-btn" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>#BT-1075</td>
                                <td>Emily Davis</td>
                                <td>2023-06-13</td>
                                <td>R 1,250</td>
                                <td><span class="status completed">Completed</span></td>
                                <td>
                                    <button class="action-btn" title="View">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="action-btn" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>#BT-1074</td>
                                <td>Robert Wilson</td>
                                <td>2023-06-12</td>
                                <td>R 4,500</td>
                                <td><span class="status cancelled">Cancelled</span></td>
                                <td>
                                    <button class="action-btn" title="View">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="action-btn" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <div class="table-footer">
                        <div>Showing 1 to 5 of 24 entries</div>
                        <div class="pagination">
                            <a href="#" class="page-link">Previous</a>
                            <a href="#" class="page-link active">1</a>
                            <a href="#" class="page-link">2</a>
                            <a href="#" class="page-link">3</a>
                            <a href="#" class="page-link">Next</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    
    <!-- ========== ADD PRODUCT MODAL ========== -->
    <div class="modal-overlay" id="productModal">
        <div class="modal">
            <div class="modal-header">
                <h3 class="modal-title">Add New Product</h3>
                <button class="close-modal">&times;</button>
            </div>
            
            <div class="modal-body">
                <form id="productForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="productName">Product Name</label>
                            <input type="text" id="productName" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="productBrand">Brand</label>
                            <input type="text" id="productBrand" class="form-control" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="productCategory">Category</label>
                            <select id="productCategory" class="form-control" required>
                                <option value="">Select Category</option>
                                <option value="streetwear">Streetwear</option>
                                <option value="vintage">Vintage</option>
                                <option value="accessories">Accessories</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="productSubcategory">Subcategory</label>
                            <select id="productSubcategory" class="form-control" required>
                                <option value="">Select Subcategory</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="productPrice">Price (R)</label>
                            <input type="number" id="productPrice" class="form-control" min="0" step="0.01" required>
                        </div>
                        <div class="form-group">
                            <label for="productComparePrice">Compare at Price (R)</label>
                            <input type="number" id="productComparePrice" class="form-control" min="0" step="0.01">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="productDescription">Description</label>
                        <textarea id="productDescription" class="form-control" rows="4"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label>Product Images</label>
                        <div style="border: 2px dashed #ddd; padding: 20px; text-align: center; border-radius: var(--border-radius);">
                            <i class="fas fa-cloud-upload-alt" style="font-size: 2rem; color: var(--admin-accent); margin-bottom: 10px;"></i>
                            <p>Drag & drop images here or click to browse</p>
                            <input type="file" id="productImages" style="display: none;" multiple>
                            <button type="button" class="btn btn-secondary" onclick="document.getElementById('productImages').click()" style="margin-top: 10px;">
                                Select Images
                            </button>
                        </div>
                    </div>
                    
                    <div class="form-actions">
                        <button type="button" class="btn btn-secondary close-modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- ========== JAVASCRIPT ========== -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // ========== TOGGLE SIDEBAR ==========
        const toggleSidebar = document.querySelector('.toggle-sidebar');
        const sidebar = document.querySelector('.admin-sidebar');
        
        toggleSidebar.addEventListener('click', function() {
            sidebar.classList.toggle('active');
        });
        
        // ========== PRODUCT MODAL ==========
        const addProductBtn = document.getElementById('addProductBtn');
        const productModal = document.getElementById('productModal');
        const closeModalBtns = document.querySelectorAll('.close-modal');
        
        // Open modal
        addProductBtn.addEventListener('click', function() {
            productModal.classList.add('active');
        });
        
        // Close modal
        closeModalBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                productModal.classList.remove('active');
            });
        });
        
        // Close modal when clicking outside
        productModal.addEventListener('click', function(e) {
            if (e.target === productModal) {
                productModal.classList.remove('active');
            }
        });
        
        // ========== CATEGORY/SUBCATEGORY LOGIC ==========
        const categorySelect = document.getElementById('productCategory');
        const subcategorySelect = document.getElementById('productSubcategory');
        
        const subcategories = {
            streetwear: ['Sneakers', 'Hoodies', 'Graphic Tees'],
            vintage: ['Denim', 'Jackets', 'Band Tees'],
            accessories: ['Watches', 'Jewelry', 'Hats', 'Bags']
        };
        
        categorySelect.addEventListener('change', function() {
            // Clear existing options
            subcategorySelect.innerHTML = '<option value="">Select Subcategory</option>';
            
            // Add new options based on selected category
            if (this.value) {
                subcategories[this.value].forEach(subcat => {
                    const option = document.createElement('option');
                    option.value = subcat.toLowerCase().replace(' ', '-');
                    option.textContent = subcat;
                    subcategorySelect.appendChild(option);
                });
            }
        });
        
        // ========== FORM SUBMISSION ==========
        const productForm = document.getElementById('productForm');
        
        productForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Here you would typically send the form data to the server
            // For this example, we'll just show an alert and close the modal
            alert('Product added successfully!');
            productModal.classList.remove('active');
            productForm.reset();
        });
        
        // ========== SIMULATE CHART DATA ==========
        // In a real application, you would use a charting library like Chart.js
        console.log('Admin dashboard ready');
    });
    </script>
</body>
</html>