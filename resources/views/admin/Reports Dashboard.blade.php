<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reports Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Fonts and Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    
    <style>
    :root {
        /* Dashboard Color Palette */
        --primary: #4B5A4D; /* Urban Green */
        --primary-light: #8A9A8B;
        --secondary: #598a82; /* Oasis Teal */
        --accent: #7D8D97; /* Cool Sky Blue */
        --dark: #20262D; /* Deep Black */
        --light: #FFFFFF;
        --light-bg: #F5F3EC; /* Neutral Beige */
        --gray: #5B5F66; /* Charcoal Gray */
        --light-gray: #e0e0e0;
        --success: #4CAF50;
        --warning: #FFC107;
        --danger: #E53935;
        --info: #2196F3;
        
        /* Chart colors */
        --chart-1: var(--primary);
        --chart-2: var(--secondary);
        --chart-3: var(--accent);
        --chart-4: #9C27B0;
        --chart-5: #FF9800;
        --chart-6: #607D8B;
        
        /* Other variables */
        --border-radius: 8px;
        --shadow: 0 4px 12px rgba(0,0,0,0.1);
        --transition: all 0.3s ease;
        --header-height: 70px;
    }
    
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
    }
    
    .container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 20px;
    }
    
    /* ========== HEADER ========== */
    .dashboard-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
        flex-wrap: wrap;
        gap: 20px;
    }
    
    .dashboard-header h1 {
        font-size: 1.8rem;
        color: var(--primary);
    }
    
    .dashboard-header .header-actions {
        display: flex;
        gap: 15px;
        align-items: center;
    }
    
    /* ========== TIME PERIOD SELECTOR ========== */
    .period-selector {
        background: var(--light);
        border-radius: var(--border-radius);
        padding: 15px;
        margin-bottom: 20px;
        box-shadow: var(--shadow);
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        align-items: center;
    }
    
    .quick-ranges {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }
    
    .range-btn {
        padding: 8px 15px;
        border: 1px solid var(--light-gray);
        border-radius: var(--border-radius);
        background: var(--light);
        cursor: pointer;
        transition: var(--transition);
        font-size: 0.9rem;
    }
    
    .range-btn:hover {
        background: var(--light-gray);
    }
    
    .range-btn.active {
        background: var(--primary);
        color: var(--light);
        border-color: var(--primary);
    }
    
    .custom-range {
        display: flex;
        align-items: center;
        gap: 10px;
        flex-wrap: wrap;
    }
    
    .custom-range input {
        padding: 8px 15px;
        border: 1px solid var(--light-gray);
        border-radius: var(--border-radius);
        font-family: 'Poppins', sans-serif;
        min-width: 150px;
    }
    
    .custom-range button {
        padding: 8px 15px;
        background: var(--secondary);
        color: var(--light);
        border: none;
        border-radius: var(--border-radius);
        cursor: pointer;
        transition: var(--transition);
    }
    
    .custom-range button:hover {
        background: var(--primary);
    }
    
    /* ========== METRIC CARDS ========== */
    .metrics-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        margin-bottom: 30px;
    }
    
    .metric-card {
        background: var(--light);
        border-radius: var(--border-radius);
        padding: 20px;
        box-shadow: var(--shadow);
        transition: var(--transition);
        position: relative;
        overflow: hidden;
    }
    
    .metric-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.15);
    }
    
    .metric-title {
        font-size: 0.9rem;
        color: var(--gray);
        margin-bottom: 10px;
        display: flex;
        justify-content: space-between;
    }
    
    .metric-value {
        font-size: 1.8rem;
        font-weight: 600;
        margin-bottom: 5px;
        color: var(--dark);
    }
    
    .metric-comparison {
        display: flex;
        align-items: center;
        font-size: 0.85rem;
        margin-bottom: 15px;
    }
    
    .metric-comparison.positive {
        color: var(--success);
    }
    
    .metric-comparison.negative {
        color: var(--danger);
    }
    
    .metric-comparison i {
        margin-right: 5px;
    }
    
    .metric-sparkline {
        height: 40px;
        width: 100%;
        margin-top: 10px;
    }
    
    /* ========== CHARTS SECTION ========== */
    .charts-section {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 20px;
        margin-bottom: 30px;
    }
    
    @media (max-width: 992px) {
        .charts-section {
            grid-template-columns: 1fr;
        }
    }
    
    .chart-container {
        background: var(--light);
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
    
    .chart-header h3 {
        font-size: 1.2rem;
        color: var(--primary);
    }
    
    .chart-legend {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
    }
    
    .legend-item {
        display: flex;
        align-items: center;
        font-size: 0.8rem;
        gap: 5px;
    }
    
    .legend-color {
        width: 12px;
        height: 12px;
        border-radius: 50%;
    }
    
    .chart-wrapper {
        position: relative;
        height: 300px;
    }
    
    /* ========== DATA TABLE ========== */
    .data-table-container {
        background: var(--light);
        border-radius: var(--border-radius);
        padding: 20px;
        box-shadow: var(--shadow);
        margin-bottom: 30px;
        overflow-x: auto;
    }
    
    .table-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
        flex-wrap: wrap;
        gap: 15px;
    }
    
    .table-header h3 {
        font-size: 1.2rem;
        color: var(--primary);
    }
    
    .table-actions {
        display: flex;
        gap: 10px;
    }
    
    .table-actions button {
        padding: 8px 15px;
        background: var(--light);
        border: 1px solid var(--light-gray);
        border-radius: var(--border-radius);
        cursor: pointer;
        transition: var(--transition);
        display: flex;
        align-items: center;
        gap: 5px;
        font-size: 0.85rem;
    }
    
    .table-actions button:hover {
        background: var(--light-gray);
    }
    
    .table-actions button.export-btn {
        background: var(--primary);
        color: var(--light);
        border-color: var(--primary);
    }
    
    .table-actions button.export-btn:hover {
        background: var(--primary-light);
    }
    
    table {
        width: 100%;
        border-collapse: collapse;
    }
    
    th, td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid var(--light-gray);
    }
    
    th {
        background-color: var(--light-bg);
        font-weight: 600;
        color: var(--primary);
        cursor: pointer;
        user-select: none;
    }
    
    th.sort-asc::after {
        content: " \2191";
    }
    
    th.sort-desc::after {
        content: " \2193";
    }
    
    tr:hover {
        background-color: rgba(75, 90, 77, 0.05);
    }
    
    .status-badge {
        padding: 4px 8px;
        border-radius: 12px;
        font-size: 0.75rem;
        font-weight: 500;
    }
    
    .status-completed {
        background-color: rgba(76, 175, 80, 0.1);
        color: var(--success);
    }
    
    .status-pending {
        background-color: rgba(255, 193, 7, 0.1);
        color: var(--warning);
    }
    
    .status-cancelled {
        background-color: rgba(229, 57, 53, 0.1);
        color: var(--danger);
    }
    
    /* ========== PAGINATION ========== */
    .pagination {
        display: flex;
        justify-content: center;
        margin-top: 20px;
        gap: 5px;
    }
    
    .pagination button {
        padding: 8px 12px;
        background: var(--light);
        border: 1px solid var(--light-gray);
        border-radius: var(--border-radius);
        cursor: pointer;
        transition: var(--transition);
    }
    
    .pagination button:hover:not(.active) {
        background: var(--light-gray);
    }
    
    .pagination button.active {
        background: var(--primary);
        color: var(--light);
        border-color: var(--primary);
    }
    
    /* ========== RESPONSIVE TOGGLE ========== */
    .responsive-toggle {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 100;
        background: var(--primary);
        color: white;
        border: none;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        box-shadow: 0 2px 10px rgba(0,0,0,0.2);
        transition: var(--transition);
    }
    
    .responsive-toggle:hover {
        background: var(--primary-light);
        transform: scale(1.1);
    }
    
    /* ========== MOBILE STYLES ========== */
    @media (max-width: 768px) {
        .metric-card {
            padding: 15px;
        }
        
        .metric-value {
            font-size: 1.5rem;
        }
        
        th, td {
            padding: 8px 10px;
            font-size: 0.85rem;
        }
        
        .table-actions button {
            padding: 6px 10px;
            font-size: 0.8rem;
        }
    }
    
    @media (max-width: 576px) {
        .metrics-grid {
            grid-template-columns: 1fr;
        }
        
        .quick-ranges {
            justify-content: center;
        }
        
        .custom-range {
            justify-content: center;
        }
        
        .pagination button {
            padding: 6px 10px;
            font-size: 0.85rem;
        }
    }
    </style>
</head>
<body>
    <div class="container">
        <!-- Dashboard Header -->
        <div class="dashboard-header">
            <h1><i class="fas fa-chart-line"></i> Reports Dashboard</h1>
            <div class="header-actions">
                <button id="refresh-btn" class="range-btn">
                    <i class="fas fa-sync-alt"></i> Refresh
                </button>
                <button id="print-btn" class="range-btn">
                    <i class="fas fa-print"></i> Print
                </button>
            </div>
        </div>
        
        <!-- Time Period Selector -->
        <div class="period-selector">
            <div class="quick-ranges">
                <button class="range-btn active" data-range="today">Today</button>
                <button class="range-btn" data-range="week">This Week</button>
                <button class="range-btn" data-range="month">This Month</button>
                <button class="range-btn" data-range="quarter">This Quarter</button>
                <button class="range-btn" data-range="year">This Year</button>
            </div>
            
            <div class="custom-range">
                <input type="text" id="date-from" placeholder="From Date">
                <input type="text" id="date-to" placeholder="To Date">
                <button id="apply-custom-range">
                    <i class="fas fa-check"></i> Apply
                </button>
            </div>
        </div>
        
        <!-- Metric Cards -->
        <div class="metrics-grid">
            <div class="metric-card">
                <div class="metric-title">
                    <span>Total Sales</span>
                    <i class="fas fa-info-circle" title="Gross sales including taxes"></i>
                </div>
                <div class="metric-value">R 124,850</div>
                <div class="metric-comparison positive">
                    <i class="fas fa-arrow-up"></i> 12.5% vs previous period
                </div>
                <div class="metric-sparkline" id="sales-sparkline"></div>
            </div>
            
            <div class="metric-card">
                <div class="metric-title">
                    <span>Total Orders</span>
                    <i class="fas fa-info-circle" title="Number of completed orders"></i>
                </div>
                <div class="metric-value">248</div>
                <div class="metric-comparison positive">
                    <i class="fas fa-arrow-up"></i> 8.3% vs previous period
                </div>
                <div class="metric-sparkline" id="orders-sparkline"></div>
            </div>
            
            <div class="metric-card">
                <div class="metric-title">
                    <span>Average Order Value</span>
                    <i class="fas fa-info-circle" title="Total sales divided by number of orders"></i>
                </div>
                <div class="metric-value">R 503.43</div>
                <div class="metric-comparison positive">
                    <i class="fas fa-arrow-up"></i> 3.9% vs previous period
                </div>
                <div class="metric-sparkline" id="aov-sparkline"></div>
            </div>
            
            <div class="metric-card">
                <div class="metric-title">
                    <span>New Customers</span>
                    <i class="fas fa-info-circle" title="First-time purchasers"></i>
                </div>
                <div class="metric-value">87</div>
                <div class="metric-comparison negative">
                    <i class="fas fa-arrow-down"></i> 5.2% vs previous period
                </div>
                <div class="metric-sparkline" id="customers-sparkline"></div>
            </div>
            
            <div class="metric-card">
                <div class="metric-title">
                    <span>Conversion Rate</span>
                    <i class="fas fa-info-circle" title="Percentage of visitors who make a purchase"></i>
                </div>
                <div class="metric-value">2.85%</div>
                <div class="metric-comparison positive">
                    <i class="fas fa-arrow-up"></i> 0.4% vs previous period
                </div>
                <div class="metric-sparkline" id="conversion-sparkline"></div>
            </div>
            
            <div class="metric-card">
                <div class="metric-title">
                    <span>Returning Customers</span>
                    <i class="fas fa-info-circle" title="Customers with more than one purchase"></i>
                </div>
                <div class="metric-value">112</div>
                <div class="metric-comparison positive">
                    <i class="fas fa-arrow-up"></i> 15.7% vs previous period
                </div>
                <div class="metric-sparkline" id="returning-sparkline"></div>
            </div>
        </div>
        
        <!-- Charts Section -->
        <div class="charts-section">
            <!-- Sales Trend Chart -->
            <div class="chart-container">
                <div class="chart-header">
                    <h3>Sales Trend</h3>
                    <div class="chart-legend">
                        <div class="legend-item">
                            <span class="legend-color" style="background: var(--chart-1);"></span>
                            <span>2025</span>
                        </div>
                        <div class="legend-item">
                            <span class="legend-color" style="background: var(--chart-2);"></span>
                            <span>2024</span>
                        </div>
                    </div>
                </div>
                <div class="chart-wrapper">
                    <canvas id="sales-trend-chart"></canvas>
                </div>
            </div>
            
            <!-- Category Breakdown Chart -->
            <div class="chart-container">
                <div class="chart-header">
                    <h3>Category Breakdown</h3>
                </div>
                <div class="chart-wrapper">
                    <canvas id="category-chart"></canvas>
                </div>
            </div>
        </div>
        
        <!-- Data Table -->
        <div class="data-table-container">
            <div class="table-header">
                <h3>Order Details</h3>
                <div class="table-actions">
                    <button id="export-csv" class="export-btn">
                        <i class="fas fa-file-csv"></i> Export CSV
                    </button>
                    <button id="export-pdf">
                        <i class="fas fa-file-pdf"></i> Export PDF
                    </button>
                    <button id="export-excel">
                        <i class="fas fa-file-excel"></i> Export Excel
                    </button>
                </div>
            </div>
            
            <table id="orders-table">
                <thead>
                    <tr>
                        <th data-sort="id">Order ID</th>
                        <th data-sort="date">Date</th>
                        <th data-sort="customer">Customer</th>
                        <th data-sort="amount">Amount</th>
                        <th data-sort="status">Status</th>
                        <th data-sort="payment">Payment</th>
                        <th data-sort="items">Items</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#10025</td>
                        <td>2025-08-05</td>
                        <td>John Smith</td>
                        <td>R 1,250.00</td>
                        <td><span class="status-badge status-completed">Completed</span></td>
                        <td>Credit Card</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>#10024</td>
                        <td>2025-08-05</td>
                        <td>Sarah Johnson</td>
                        <td>R 850.50</td>
                        <td><span class="status-badge status-completed">Completed</span></td>
                        <td>PayPal</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>#10023</td>
                        <td>2025-08-04</td>
                        <td>Michael Brown</td>
                        <td>R 2,300.00</td>
                        <td><span class="status-badge status-pending">Pending</span></td>
                        <td>Bank Transfer</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>#10022</td>
                        <td>2025-08-04</td>
                        <td>Emily Davis</td>
                        <td>R 1,075.25</td>
                        <td><span class="status-badge status-completed">Completed</span></td>
                        <td>Credit Card</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>#10021</td>
                        <td>2025-08-03</td>
                        <td>Robert Wilson</td>
                        <td>R 3,420.00</td>
                        <td><span class="status-badge status-completed">Completed</span></td>
                        <td>Credit Card</td>
                        <td>7</td>
                    </tr>
                    <tr>
                        <td>#10020</td>
                        <td>2025-08-03</td>
                        <td>Lisa Miller</td>
                        <td>R 625.75</td>
                        <td><span class="status-badge status-cancelled">Cancelled</span></td>
                        <td>PayPal</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>#10019</td>
                        <td>2025-08-02</td>
                        <td>David Taylor</td>
                        <td>R 1,890.50</td>
                        <td><span class="status-badge status-completed">Completed</span></td>
                        <td>Bank Transfer</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>#10018</td>
                        <td>2025-08-02</td>
                        <td>Jennifer Anderson</td>
                        <td>R 2,150.00</td>
                        <td><span class="status-badge status-completed">Completed</span></td>
                        <td>Credit Card</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>#10017</td>
                        <td>2025-08-01</td>
                        <td>Thomas Martinez</td>
                        <td>R 975.25</td>
                        <td><span class="status-badge status-pending">Pending</span></td>
                        <td>PayPal</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>#10016</td>
                        <td>2025-08-01</td>
                        <td>Jessica Robinson</td>
                        <td>R 1,450.00</td>
                        <td><span class="status-badge status-completed">Completed</span></td>
                        <td>Credit Card</td>
                        <td>4</td>
                    </tr>
                </tbody>
            </table>
            
            <!-- Pagination -->
            <div class="pagination">
                <button><i class="fas fa-angle-double-left"></i></button>
                <button>1</button>
                <button class="active">2</button>
                <button>3</button>
                <button>4</button>
                <button><i class="fas fa-angle-double-right"></i></button>
            </div>
        </div>
    </div>
    
    <!-- Responsive Toggle Button -->
    <button class="responsive-toggle" id="responsive-toggle" title="Toggle Responsive View">
        <i class="fas fa-mobile-alt"></i>
    </button>
    
    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // ========== DATE RANGE SELECTOR ==========
        // Initialize date pickers
        flatpickr("#date-from", {
            dateFormat: "Y-m-d",
            defaultDate: "2025-08-01",
            maxDate: "2025-08-05"
        });
        
        flatpickr("#date-to", {
            dateFormat: "Y-m-d",
            defaultDate: "2025-08-05",
            maxDate: "2025-08-05"
        });
        
        // Quick range buttons
        const rangeButtons = document.querySelectorAll('.range-btn[data-range]');
        rangeButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                rangeButtons.forEach(btn => btn.classList.remove('active'));
                // Add active class to clicked button
                this.classList.add('active');
                
                // Get the range value
                const range = this.getAttribute('data-range');
                let fromDate, toDate = '2025-08-05'; // Current date
                
                // Set from date based on range
                switch(range) {
                    case 'today':
                        fromDate = '2025-08-05';
                        break;
                    case 'week':
                        fromDate = '2025-07-30';
                        break;
                    case 'month':
                        fromDate = '2025-08-01';
                        break;
                    case 'quarter':
                        fromDate = '2025-07-01';
                        break;
                    case 'year':
                        fromDate = '2025-01-01';
                        break;
                }
                
                // Update date inputs
                document.getElementById('date-from')._flatpickr.setDate(fromDate);
                document.getElementById('date-to')._flatpickr.setDate(toDate);
                
                // Refresh data (simulated)
                refreshData(fromDate, toDate);
            });
        });
        
        // Apply custom range
        document.getElementById('apply-custom-range').addEventListener('click', function() {
            const fromDate = document.getElementById('date-from').value;
            const toDate = document.getElementById('date-to').value;
            
            if (fromDate && toDate) {
                // Remove active class from all quick range buttons
                rangeButtons.forEach(btn => btn.classList.remove('active'));
                
                // Refresh data (simulated)
                refreshData(fromDate, toDate);
            }
        });
        
        // ========== SPARKLINE CHARTS ==========
        // Generate sparkline data (random for demo)
        function generateSparklineData(length = 7, min = 50, max = 100) {
            return Array.from({length}, () => Math.floor(Math.random() * (max - min + 1)) + min);
        }
        
        // Draw sparkline charts
        function drawSparkline(elementId, data, color = 'var(--primary)') {
            const container = document.getElementById(elementId);
            container.innerHTML = '';
            
            const svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
            svg.setAttribute('width', '100%');
            svg.setAttribute('height', '40');
            svg.setAttribute('viewBox', `0 0 ${data.length * 10} 40`);
            
            const path = document.createElementNS("http://www.w3.org/2000/svg", "path");
            const points = data.map((value, index) => {
                const x = index * 10;
                const y = 40 - (value / 100 * 40);
                return `${x},${y}`;
            }).join(' ');
            
            path.setAttribute('d', `M${points}`);
            path.setAttribute('fill', 'none');
            path.setAttribute('stroke', color);
            path.setAttribute('stroke-width', '2');
            
            svg.appendChild(path);
            container.appendChild(svg);
        }
        
        // Initialize sparklines
        const sparklineData = generateSparklineData();
        drawSparkline('sales-sparkline', sparklineData, 'var(--primary)');
        drawSparkline('orders-sparkline', generateSparklineData(), 'var(--secondary)');
        drawSparkline('aov-sparkline', generateSparklineData(), 'var(--accent)');
        drawSparkline('customers-sparkline', generateSparklineData(), 'var(--chart-4)');
        drawSparkline('conversion-sparkline', generateSparklineData(), 'var(--chart-5)');
        drawSparkline('returning-sparkline', generateSparklineData(), 'var(--chart-6)');
        
        // ========== MAIN CHARTS ==========
        // Sales Trend Chart
        const salesTrendCtx = document.getElementById('sales-trend-chart').getContext('2d');
        const salesTrendChart = new Chart(salesTrendCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
                datasets: [
                    {
                        label: '2025',
                        data: [85000, 92000, 102000, 115000, 125000, 118000, 132000, 124850],
                        borderColor: 'var(--chart-1)',
                        backgroundColor: 'rgba(75, 90, 77, 0.1)',
                        tension: 0.3,
                        fill: true,
                        borderWidth: 2
                    },
                    {
                        label: '2024',
                        data: [72000, 78000, 85000, 92000, 98000, 105000, 112000, 108000],
                        borderColor: 'var(--chart-2)',
                        backgroundColor: 'rgba(89, 138, 130, 0.1)',
                        tension: 0.3,
                        fill: true,
                        borderWidth: 2
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        mode: 'index',
                        intersect: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: false,
                        grid: {
                            color: 'rgba(0, 0, 0, 0.05)'
                        },
                        ticks: {
                            callback: function(value) {
                                return 'R ' + value.toLocaleString();
                            }
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });
        
        // Category Breakdown Chart
        const categoryCtx = document.getElementById('category-chart').getContext('2d');
        const categoryChart = new Chart(categoryCtx, {
            type: 'doughnut',
            data: {
                labels: ['Streetwear', 'Vintage', 'Accessories', 'Footwear', 'Collectibles'],
                datasets: [{
                    data: [35, 25, 20, 15, 5],
                    backgroundColor: [
                        'var(--chart-1)',
                        'var(--chart-2)',
                        'var(--chart-3)',
                        'var(--chart-4)',
                        'var(--chart-5)'
                    ],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'right',
                        labels: {
                            boxWidth: 12,
                            padding: 20,
                            usePointStyle: true,
                            pointStyle: 'circle'
                        }
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return context.label + ': ' + context.raw + '%';
                            }
                        }
                    },
                    datalabels: {
                        display: false
                    }
                },
                cutout: '70%'
            },
            plugins: [ChartDataLabels]
        });
        
        // ========== DATA TABLE FUNCTIONALITY ==========
        // Table sorting
        const table = document.getElementById('orders-table');
        const headers = table.querySelectorAll('th[data-sort]');
        let currentSort = {
            column: 'date',
            direction: 'desc'
        };
        
        headers.forEach(header => {
            header.addEventListener('click', function() {
                const column = this.getAttribute('data-sort');
                
                // Remove sort indicators from all headers
                headers.forEach(h => {
                    h.classList.remove('sort-asc', 'sort-desc');
                });
                
                // Determine sort direction
                if (currentSort.column === column) {
                    currentSort.direction = currentSort.direction === 'asc' ? 'desc' : 'asc';
                } else {
                    currentSort.column = column;
                    currentSort.direction = 'asc';
                }
                
                // Add sort indicator to current header
                this.classList.add(`sort-${currentSort.direction}`);
                
                // Sort table
                sortTable(column, currentSort.direction);
            });
        });
        
        function sortTable(column, direction) {
            const tbody = table.querySelector('tbody');
            const rows = Array.from(tbody.querySelectorAll('tr'));
            
            rows.sort((a, b) => {
                const aValue = a.querySelector(`td:nth-child(${getColumnIndex(column) + 1})`).textContent;
                const bValue = b.querySelector(`td:nth-child(${getColumnIndex(column) + 1})`).textContent;
                
                // Special handling for different data types
                if (column === 'date') {
                    return direction === 'asc' 
                        ? new Date(aValue) - new Date(bValue)
                        : new Date(bValue) - new Date(aValue);
                } else if (column === 'amount') {
                    const aNum = parseFloat(aValue.replace(/[^0-9.-]+/g,""));
                    const bNum = parseFloat(bValue.replace(/[^0-9.-]+/g,""));
                    return direction === 'asc' ? aNum - bNum : bNum - aNum;
                } else if (column === 'items') {
                    return direction === 'asc' 
                        ? parseInt(aValue) - parseInt(bValue)
                        : parseInt(bValue) - parseInt(aValue);
                } else {
                    // Default string comparison
                    return direction === 'asc'
                        ? aValue.localeCompare(bValue)
                        : bValue.localeCompare(aValue);
                }
            });
            
            // Re-append sorted rows
            rows.forEach(row => tbody.appendChild(row));
        }
        
        function getColumnIndex(column) {
            const headers = Array.from(table.querySelectorAll('th[data-sort]'));
            return headers.findIndex(header => header.getAttribute('data-sort') === column);
        }
        
        // Initialize table with default sort
        document.querySelector('th[data-sort="date"]').classList.add('sort-desc');
        sortTable('date', 'desc');
        
        // ========== EXPORT FUNCTIONALITY ==========
        document.getElementById('export-csv').addEventListener('click', function() {
            exportToCSV();
        });
        
        document.getElementById('export-pdf').addEventListener('click', function() {
            alert('PDF export functionality would be implemented here with a library like jsPDF');
        });
        
        document.getElementById('export-excel').addEventListener('click', function() {
            alert('Excel export functionality would be implemented here with a library like SheetJS');
        });
        
        function exportToCSV() {
            const rows = [];
            const headers = [];
            
            // Get headers
            table.querySelectorAll('th').forEach(header => {
                headers.push(header.textContent);
            });
            rows.push(headers.join(','));
            
            // Get data rows
            table.querySelectorAll('tbody tr').forEach(row => {
                const rowData = [];
                row.querySelectorAll('td').forEach(cell => {
                    // Handle status badges
                    if (cell.querySelector('.status-badge')) {
                        rowData.push(cell.querySelector('.status-badge').textContent);
                    } else {
                        rowData.push(cell.textContent);
                    }
                });
                rows.push(rowData.join(','));
            });
            
            // Create CSV content
            const csvContent = rows.join('\n');
            
            // Create download link
            const blob = new Blob([csvContent], { type: 'text/csv;charset=utf-8;' });
            const url = URL.createObjectURL(blob);
            const link = document.createElement('a');
            link.setAttribute('href', url);
            link.setAttribute('download', `bro_thrifting_orders_${new Date().toISOString().slice(0,10)}.csv`);
            link.style.visibility = 'hidden';
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }
        
        // ========== PAGINATION ==========
        const paginationButtons = document.querySelectorAll('.pagination button');
        paginationButtons.forEach(button => {
            if (!button.querySelector('i')) {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    paginationButtons.forEach(btn => {
                        if (!btn.querySelector('i')) {
                            btn.classList.remove('active');
                        }
                    });
                    
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    // In a real app, this would load the corresponding page of data
                    alert(`Loading page ${this.textContent}...`);
                });
            }
        });
        
        // ========== RESPONSIVE TOGGLE ==========
        document.getElementById('responsive-toggle').addEventListener('click', function() {
            document.body.classList.toggle('mobile-view');
            alert('In a real implementation, this would toggle between desktop and mobile layouts');
        });
        
        // ========== REFRESH DATA ==========
        function refreshData(fromDate, toDate) {
            // Show loading state
            const loadingSpinner = document.createElement('div');
            loadingSpinner.className = 'loading-spinner';
            loadingSpinner.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Loading data...';
            loadingSpinner.style.position = 'fixed';
            loadingSpinner.style.top = '50%';
            loadingSpinner.style.left = '50%';
            loadingSpinner.style.transform = 'translate(-50%, -50%)';
            loadingSpinner.style.background = 'var(--light)';
            loadingSpinner.style.padding = '20px';
            loadingSpinner.style.borderRadius = 'var(--border-radius)';
            loadingSpinner.style.boxShadow = 'var(--shadow)';
            loadingSpinner.style.zIndex = '1000';
            document.body.appendChild(loadingSpinner);
            
            // Simulate API call delay
            setTimeout(() => {
                // Update metric cards with new data
                document.querySelector('.metric-card:nth-child(1) .metric-value').textContent = 
                    `R ${Math.floor(Math.random() * 50000) + 100000}`.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                
                document.querySelector('.metric-card:nth-child(2) .metric-value').textContent = 
                    Math.floor(Math.random() * 200) + 100;
                
                document.querySelector('.metric-card:nth-child(3) .metric-value').textContent = 
                    `R ${(Math.random() * 300 + 400).toFixed(2)}`;
                
                document.querySelector('.metric-card:nth-child(4) .metric-value').textContent = 
                    Math.floor(Math.random() * 50) + 50;
                
                document.querySelector('.metric-card:nth-child(5) .metric-value').textContent = 
                    `${(Math.random() * 2 + 2).toFixed(2)}%`;
                
                document.querySelector('.metric-card:nth-child(6) .metric-value').textContent = 
                    Math.floor(Math.random() * 60) + 70;
                
                // Update sparklines
                drawSparkline('sales-sparkline', generateSparklineData(), 'var(--primary)');
                drawSparkline('orders-sparkline', generateSparklineData(), 'var(--secondary)');
                drawSparkline('aov-sparkline', generateSparklineData(), 'var(--accent)');
                drawSparkline('customers-sparkline', generateSparklineData(), 'var(--chart-4)');
                drawSparkline('conversion-sparkline', generateSparklineData(), 'var(--chart-5)');
                drawSparkline('returning-sparkline', generateSparklineData(), 'var(--chart-6)');
                
                // Update charts
                salesTrendChart.data.datasets[0].data = Array.from({length: 8}, () => Math.floor(Math.random() * 50000) + 80000);
                salesTrendChart.update();
                
                categoryChart.data.datasets[0].data = [
                    Math.floor(Math.random() * 20) + 20,
                    Math.floor(Math.random() * 20) + 15,
                    Math.floor(Math.random() * 15) + 10,
                    Math.floor(Math.random() * 15) + 5,
                    Math.floor(Math.random() * 10) + 1
                ];
                categoryChart.update();
                
                // Remove loading spinner
                document.body.removeChild(loadingSpinner);
                
                // Show notification
                const notification = document.createElement('div');
                notification.textContent = `Data updated for ${fromDate} to ${toDate}`;
                notification.style.position = 'fixed';
                notification.style.bottom = '20px';
                notification.style.left = '50%';
                notification.style.transform = 'translateX(-50%)';
                notification.style.background = 'var(--primary)';
                notification.style.color = 'var(--light)';
                notification.style.padding = '10px 20px';
                notification.style.borderRadius = 'var(--border-radius)';
                notification.style.boxShadow = 'var(--shadow)';
                notification.style.zIndex = '1000';
                document.body.appendChild(notification);
                
                setTimeout(() => {
                    document.body.removeChild(notification);
                }, 3000);
            }, 1500);
        }
        
        // ========== PRINT FUNCTIONALITY ==========
        document.getElementById('print-btn').addEventListener('click', function() {
            window.print();
        });
        
        // ========== REFRESH BUTTON ==========
        document.getElementById('refresh-btn').addEventListener('click', function() {
            const fromDate = document.getElementById('date-from').value;
            const toDate = document.getElementById('date-to').value;
            refreshData(fromDate, toDate);
        });
    });
    </script>
</body>
</html>