<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reports Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    :root {
        /* Primary Color Palette */
        --primary: #2c3e50;
        --primary-light: #3d566e;
        --primary-dark: #1a252f;
        --accent: #18bc9c;
        --accent-light: #2ecc71;
        --accent-dark: #16a085;
        --success: #27ae60;
        --warning: #f39c12;
        --danger: #e74c3c;
        --info: #3498db;
        
        /* Neutral Colors */
        --light: #ecf0f1;
        --light-gray: #bdc3c7;
        --gray: #95a5a6;
        --dark-gray: #7f8c8d;
        --dark: #34495e;
        
        /* Chart Colors */
        --chart-1: #3498db;
        --chart-2: #e74c3c;
        --chart-3: #9b59b6;
        --chart-4: #f1c40f;
        --chart-5: #1abc9c;
        --chart-6: #e67e22;
        --chart-7: #34495e;
        
        /* Other Variables */
        --border-radius: 8px;
        --shadow: 0 4px 12px rgba(0,0,0,0.1);
        --transition: all 0.3s ease;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f5f7fa;
        color: var(--dark);
        line-height: 1.6;
    }

    .container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 20px;
    }

    /* Dashboard Header */
    .dashboard-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
        flex-wrap: wrap;
        gap: 20px;
    }

    .dashboard-title h1 {
        font-size: 2rem;
        color: var(--primary);
        font-weight: 600;
    }

    .dashboard-title p {
        color: var(--gray);
        font-size: 0.9rem;
    }

    /* Time Period Selector */
    .time-period-selector {
        display: flex;
        gap: 10px;
        align-items: center;
        flex-wrap: wrap;
    }

    .quick-ranges {
        display: flex;
        gap: 8px;
        flex-wrap: wrap;
    }

    .range-btn {
        padding: 8px 16px;
        border: 1px solid var(--light-gray);
        background: white;
        border-radius: var(--border-radius);
        cursor: pointer;
        transition: var(--transition);
        font-size: 0.9rem;
    }

    .range-btn:hover {
        background: var(--light);
    }

    .range-btn.active {
        background: var(--primary);
        color: white;
        border-color: var(--primary);
    }

    .custom-range {
        display: none;
        align-items: center;
        gap: 10px;
        margin-top: 10px;
        width: 100%;
    }

    .custom-range.active {
        display: flex;
    }

    .custom-range input {
        padding: 8px 12px;
        border: 1px solid var(--light-gray);
        border-radius: var(--border-radius);
        font-size: 0.9rem;
    }

    .custom-range button {
        padding: 8px 16px;
        background: var(--accent);
        color: white;
        border: none;
        border-radius: var(--border-radius);
        cursor: pointer;
        transition: var(--transition);
    }

    .custom-range button:hover {
        background: var(--accent-dark);
    }

    /* Metric Cards */
    .metrics-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 20px;
        margin-bottom: 30px;
    }

    .metric-card {
        background: white;
        border-radius: var(--border-radius);
        padding: 20px;
        box-shadow: var(--shadow);
        transition: var(--transition);
        position: relative;
        overflow: hidden;
    }

    .metric-card.loading {
        opacity: 0.6;
        pointer-events: none;
    }

    .metric-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 4px;
        height: 100%;
        background: var(--accent);
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
        font-weight: 700;
        color: var(--primary);
        margin-bottom: 5px;
    }

    .metric-change {
        font-size: 0.9rem;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .change-positive {
        color: var(--success);
    }

    .change-negative {
        color: var(--danger);
    }

    .trend-indicator {
        width: 0; 
        height: 0; 
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
        display: inline-block;
    }

    .trend-up {
        border-bottom: 8px solid var(--success);
    }

    .trend-down {
        border-top: 8px solid var(--danger);
    }

    .metric-sparkline {
        height: 40px;
        margin-top: 15px;
    }

    /* Charts Section */
    .charts-container {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 20px;
        margin-bottom: 30px;
    }

    @media (max-width: 992px) {
        .charts-container {
            grid-template-columns: 1fr;
        }
    }

    .chart-container {
        background: white;
        border-radius: var(--border-radius);
        padding: 20px;
        box-shadow: var(--shadow);
        transition: var(--transition);
    }

    .chart-container.loading {
        opacity: 0.6;
        pointer-events: none;
    }

    .chart-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .chart-title {
        font-size: 1.2rem;
        font-weight: 600;
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
        gap: 5px;
        font-size: 0.8rem;
    }

    .legend-color {
        width: 12px;
        height: 12px;
        border-radius: 50%;
    }

    .chart-wrapper {
        height: 300px;
        position: relative;
    }

    /* Data Table */
    .data-table-container {
        background: white;
        border-radius: var(--border-radius);
        padding: 20px;
        box-shadow: var(--shadow);
        margin-bottom: 30px;
        overflow-x: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid var(--light);
    }

    th {
        background: var(--light);
        color: var(--primary);
        font-weight: 600;
        position: sticky;
        top: 0;
    }

    th.sortable {
        cursor: pointer;
        transition: var(--transition);
    }

    th.sortable:hover {
        background: var(--light-gray);
    }

    th.sorted-asc::after {
        content: ' ↑';
        font-size: 0.8em;
    }

    th.sorted-desc::after {
        content: ' ↓';
        font-size: 0.8em;
    }

    tr:hover td {
        background: rgba(75, 90, 77, 0.03);
        transform: scale(1.01);
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }

    tr:hover td:first-child {
        border-radius: var(--border-radius) 0 0 var(--border-radius);
    }

    tr:hover td:last-child {
        border-radius: 0 var(--border-radius) var(--border-radius) 0;
    }

    .table-actions {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 20px;
        flex-wrap: wrap;
        gap: 15px;
    }

    .pagination {
        display: flex;
        gap: 5px;
    }

    .page-btn {
        padding: 8px 12px;
        border: 1px solid var(--light-gray);
        background: white;
        border-radius: var(--border-radius);
        cursor: pointer;
        transition: var(--transition);
    }

    .page-btn:hover {
        background: var(--light);
    }

    .page-btn.active {
        background: var(--primary);
        color: white;
        border-color: var(--primary);
    }

    .export-btn {
        padding: 8px 16px;
        background: var(--accent);
        color: white;
        border: none;
        border-radius: var(--border-radius);
        cursor: pointer;
        transition: var(--transition);
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .export-btn:hover {
        background: var(--accent-dark);
    }

    /* Loading Spinner */
    .loading-spinner {
        display: none;
        width: 40px;
        height: 40px;
        margin: 20px auto;
        border: 4px solid rgba(0, 0, 0, 0.1);
        border-radius: 50%;
        border-top: 4px solid var(--accent);
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .range-btn, .page-btn, .export-btn {
            min-width: 44px;
            min-height: 44px;
        }
        
        th, td {
            padding: 15px 10px;
        }
        
        .metric-card {
            padding: 15px;
        }
        
        .metric-value {
            font-size: 1.5rem;
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
            flex-direction: column;
        }
    }
    </style>
</head>
<body>
    <div class="container">
        <!-- Dashboard Header -->
        <div class="dashboard-header">
            <div class="dashboard-title">
                <h1>Reports Dashboard</h1>
                <p>Performance metrics and analytics overview</p>
            </div>
            
            <!-- Time Period Selector -->
            <div class="time-period-selector">
                <div class="quick-ranges">
                    <button class="range-btn active" data-range="today">Today</button>
                    <button class="range-btn" data-range="week">This Week</button>
                    <button class="range-btn" data-range="month">This Month</button>
                    <button class="range-btn" data-range="quarter">This Quarter</button>
                    <button class="range-btn" data-range="custom">Custom Range</button>
                </div>
                
                <div class="custom-range">
                    <input type="date" id="startDate" aria-label="Start date">
                    <span>to</span>
                    <input type="date" id="endDate" aria-label="End date">
                    <button id="applyCustomRange" aria-label="Apply date range">Apply</button>
                </div>
            </div>
        </div>
        
        <!-- Metrics Grid -->
        <div class="metrics-grid">
            <div class="metric-card">
                <div class="metric-title">Total Sales</div>
                <div class="metric-value">R 24,580</div>
                <div class="metric-change">
                    <span class="change-positive">+12.5%</span>
                    <span class="trend-indicator trend-up"></span>
                </div>
                <div class="metric-sparkline" id="salesSparkline"></div>
            </div>
            
            <div class="metric-card">
                <div class="metric-title">Total Orders</div>
                <div class="metric-value">142</div>
                <div class="metric-change">
                    <span class="change-positive">+8.3%</span>
                    <span class="trend-indicator trend-up"></span>
                </div>
                <div class="metric-sparkline" id="ordersSparkline"></div>
            </div>
            
            <div class="metric-card">
                <div class="metric-title">Average Order Value</div>
                <div class="metric-value">R 173</div>
                <div class="metric-change">
                    <span class="change-positive">+3.9%</span>
                    <span class="trend-indicator trend-up"></span>
                </div>
                <div class="metric-sparkline" id="aovSparkline"></div>
            </div>
            
            <div class="metric-card">
                <div class="metric-title">New Customers</div>
                <div class="metric-value">38</div>
                <div class="metric-change">
                    <span class="change-negative">-4.2%</span>
                    <span class="trend-indicator trend-down"></span>
                </div>
                <div class="metric-sparkline" id="customersSparkline"></div>
            </div>
            
            <div class="metric-card">
                <div class="metric-title">Conversion Rate</div>
                <div class="metric-value">2.8%</div>
                <div class="metric-change">
                    <span class="change-positive">+0.6%</span>
                    <span class="trend-indicator trend-up"></span>
                </div>
                <div class="metric-sparkline" id="conversionSparkline"></div>
            </div>
            
            <div class="metric-card">
                <div class="metric-title">Returning Customers</div>
                <div class="metric-value">64%</div>
                <div class="metric-change">
                    <span class="change-positive">+5.1%</span>
                    <span class="trend-indicator trend-up"></span>
                </div>
                <div class="metric-sparkline" id="returningSparkline"></div>
            </div>
        </div>
        
        <!-- Charts Section -->
        <div class="charts-container">
            <!-- Sales Trend Chart -->
            <div class="chart-container">
                <div class="chart-header">
                    <div class="chart-title">Sales Trend</div>
                    <div class="chart-legend">
                        <div class="legend-item">
                            <div class="legend-color" style="background: var(--chart-1);"></div>
                            <span>This Period</span>
                        </div>
                        <div class="legend-item">
                            <div class="legend-color" style="background: var(--chart-2);"></div>
                            <span>Previous Period</span>
                        </div>
                    </div>
                </div>
                <div class="chart-wrapper">
                    <canvas id="salesTrendChart" role="img" aria-label="Sales trend chart"></canvas>
                </div>
            </div>
            
            <!-- Category Breakdown Chart -->
            <div class="chart-container">
                <div class="chart-header">
                    <div class="chart-title">Category Breakdown</div>
                    <div class="chart-legend" id="categoryLegend"></div>
                </div>
                <div class="chart-wrapper">
                    <canvas id="categoryChart" role="img" aria-label="Category breakdown chart"></canvas>
                </div>
            </div>
        </div>
        
        <!-- Data Table -->
        <div class="data-table-container">
            <table>
                <thead>
                    <tr>
                        <th class="sortable" data-column="date">Date</th>
                        <th class="sortable" data-column="order">Order #</th>
                        <th class="sortable" data-column="customer">Customer</th>
                        <th class="sortable" data-column="amount">Amount</th>
                        <th class="sortable" data-column="status">Status</th>
                        <th class="sortable" data-column="category">Category</th>
                    </tr>
                </thead>
                <tbody id="tableBody">
                    <!-- Table data will be populated by JavaScript -->
                </tbody>
            </table>
            
            <div class="table-actions">
                <div class="pagination">
                    <button class="page-btn" data-page="prev">&laquo; Prev</button>
                    <button class="page-btn active" data-page="1">1</button>
                    <button class="page-btn" data-page="2">2</button>
                    <button class="page-btn" data-page="3">3</button>
                    <button class="page-btn" data-page="next">Next &raquo;</button>
                </div>
                
                <button class="export-btn" id="exportCSV" aria-label="Export to CSV">
                    <i class="fas fa-download"></i> Export to CSV
                </button>
            </div>
        </div>
    </div>

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Chart.js for data visualization -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Sample data for the dashboard
        const sampleData = {
            metrics: {
                sales: 24580,
                orders: 142,
                aov: 173,
                customers: 38,
                conversion: 2.8,
                returning: 64
            },
            trends: {
                sales: [1200, 1900, 1500, 2000, 1800, 2400, 2800, 3000, 2700, 3200, 3500, 3800],
                orders: [8, 12, 10, 15, 13, 18, 20, 22, 19, 25, 28, 30],
                aov: [160, 165, 158, 170, 168, 172, 175, 173, 171, 176, 174, 173],
                customers: [5, 7, 6, 8, 7, 9, 10, 11, 9, 12, 13, 14],
                conversion: [2.2, 2.4, 2.3, 2.5, 2.4, 2.6, 2.7, 2.8, 2.7, 2.9, 3.0, 2.8],
                returning: [58.9, 59.2, 59.5, 60.1, 60.5, 61.2, 62.0, 62.8, 63.2, 63.8, 64.2, 64.0]
            },
            salesTrend: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                current: [1200, 1900, 1500, 2000, 1800, 2400, 2800, 3000, 2700, 3200, 3500, 3800],
                previous: [1000, 1600, 1300, 1800, 1500, 2000, 2400, 2600, 2300, 2800, 3100, 3400]
            },
            categories: {
                labels: ['Streetwear', 'Vintage', 'Accessories', 'Footwear', 'Collectibles'],
                data: [35, 25, 20, 15, 5],
                colors: ['var(--chart-1)', 'var(--chart-3)', 'var(--chart-5)', 'var(--chart-2)', 'var(--chart-4)']
            },
            tableData: [
                { date: '2023-10-15', order: '#1001', customer: 'John Smith', amount: 3200, status: 'Completed', category: 'Streetwear' },
                { date: '2023-10-14', order: '#1000', customer: 'Sarah Johnson', amount: 1250, status: 'Completed', category: 'Vintage' },
                { date: '2023-10-14', order: '#999', customer: 'Michael Brown', amount: 85000, status: 'Completed', category: 'Accessories' },
                { date: '2023-10-13', order: '#998', customer: 'Emily Davis', amount: 1499, status: 'Completed', category: 'Accessories' },
                { date: '2023-10-12', order: '#997', customer: 'David Wilson', amount: 2800, status: 'Completed', category: 'Vintage' },
                { date: '2023-10-11', order: '#996', customer: 'Jessica Lee', amount: 12500, status: 'Completed', category: 'Accessories' },
                { date: '2023-10-10', order: '#995', customer: 'Robert Taylor', amount: 899, status: 'Completed', category: 'Footwear' },
                { date: '2023-10-09', order: '#994', customer: 'Jennifer Martinez', amount: 4500, status: 'Completed', category: 'Streetwear' },
                { date: '2023-10-08', order: '#993', customer: 'William Anderson', amount: 2200, status: 'Completed', category: 'Vintage' },
                { date: '2023-10-07', order: '#992', customer: 'Lisa Thomas', amount: 1800, status: 'Completed', category: 'Collectibles' }
            ]
        };
        
        // Store chart instances
        window.dashboardCharts = {
            sales: null,
            category: null
        };
        
        // Initialize the dashboard
        initDashboard();
        
        function initDashboard() {
            // Initialize metrics
            initMetrics();
            
            // Initialize charts
            initCharts();
            
            // Initialize table
            initTable();
            
            // Set up event listeners
            setupEventListeners();
        }
        
        function initMetrics() {
            // Update metric values
            document.querySelectorAll('.metric-value').forEach((el, index) => {
                const metric = Object.keys(sampleData.metrics)[index];
                el.textContent = metric === 'sales' || metric === 'aov' 
                    ? `R ${sampleData.metrics[metric].toLocaleString()}` 
                    : metric === 'conversion' || metric === 'returning' 
                        ? `${sampleData.metrics[metric]}%` 
                        : sampleData.metrics[metric];
            });
            
            // Create sparklines (simplified for this example)
            createSparkline('salesSparkline', sampleData.trends.sales, '#3498db');
            createSparkline('ordersSparkline', sampleData.trends.orders, '#e74c3c');
            createSparkline('aovSparkline', sampleData.trends.aov, '#9b59b6');
            createSparkline('customersSparkline', sampleData.trends.customers, '#f1c40f');
            createSparkline('conversionSparkline', sampleData.trends.conversion, '#1abc9c');
            createSparkline('returningSparkline', sampleData.trends.returning, '#e67e22');
        }
        
        function createSparkline(id, data, color) {
            const container = document.getElementById(id);
            const svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
            svg.setAttribute('width', '100%');
            svg.setAttribute('height', '100%');
            svg.setAttribute('viewBox', `0 0 ${data.length * 10} 40`);
            
            const path = document.createElementNS("http://www.w3.org/2000/svg", "path");
            const max = Math.max(...data);
            const points = data.map((value, i) => {
                const x = i * 10;
                const y = 40 - (value / max * 40);
                return `${x},${y}`;
            }).join(' ');
            
            path.setAttribute('d', `M${points}`);
            path.setAttribute('fill', 'none');
            path.setAttribute('stroke', color);
            path.setAttribute('stroke-width', '2');
            path.setAttribute('stroke-linecap', 'round');
            path.setAttribute('stroke-linejoin', 'round');
            
            svg.appendChild(path);
            container.appendChild(svg);
        }
        
        function initCharts() {
            // Sales Trend Chart
            const salesCtx = document.getElementById('salesTrendChart').getContext('2d');
            window.dashboardCharts.sales = new Chart(salesCtx, {
                type: 'line',
                data: {
                    labels: sampleData.salesTrend.labels,
                    datasets: [
                        {
                            label: 'This Period',
                            data: sampleData.salesTrend.current,
                            borderColor: 'var(--chart-1)',
                            backgroundColor: 'rgba(52, 152, 219, 0.1)',
                            borderWidth: 2,
                            tension: 0.4,
                            fill: true
                        },
                        {
                            label: 'Previous Period',
                            data: sampleData.salesTrend.previous,
                            borderColor: 'var(--chart-2)',
                            backgroundColor: 'rgba(231, 76, 60, 0.1)',
                            borderWidth: 2,
                            borderDash: [5, 5],
                            tension: 0.4,
                            fill: true
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
                    onHover: (e, items) => {
                        e.native.target.style.cursor = items.length ? 'pointer' : 'default';
                    },
                    animation: {
                        duration: 1000,
                        easing: 'easeOutQuart'
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(0, 0, 0, 0.05)'
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
            const categoryCtx = document.getElementById('categoryChart').getContext('2d');
            window.dashboardCharts.category = new Chart(categoryCtx, {
                type: 'doughnut',
                data: {
                    labels: sampleData.categories.labels,
                    datasets: [{
                        data: sampleData.categories.data,
                        backgroundColor: sampleData.categories.colors,
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    cutout: '70%',
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    onHover: (e, items) => {
                        e.native.target.style.cursor = items.length ? 'pointer' : 'default';
                    },
                    animation: {
                        duration: 1000,
                        easing: 'easeOutQuart'
                    }
                }
            });
            
            // Create custom legend for category chart
            const legendContainer = document.getElementById('categoryLegend');
            sampleData.categories.labels.forEach((label, i) => {
                const legendItem = document.createElement('div');
                legendItem.className = 'legend-item';
                legendItem.innerHTML = `
                    <div class="legend-color" style="background: ${sampleData.categories.colors[i]}"></div>
                    <span>${label} (${sampleData.categories.data[i]}%)</span>
                `;
                legendContainer.appendChild(legendItem);
            });
        }
        
        function initTable() {
            const tableBody = document.getElementById('tableBody');
            
            // Populate table with data
            sampleData.tableData.forEach(item => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${formatDate(item.date)}</td>
                    <td>${item.order}</td>
                    <td>${item.customer}</td>
                    <td>R ${item.amount.toLocaleString()}</td>
                    <td><span class="status-badge ${item.status.toLowerCase()}">${item.status}</span></td>
                    <td>${item.category}</td>
                `;
                tableBody.appendChild(row);
            });
            
            // Add status badge styling
            const style = document.createElement('style');
            style.textContent = `
                .status-badge {
                    padding: 4px 8px;
                    border-radius: 12px;
                    font-size: 0.8rem;
                    font-weight: 500;
                }
                .status-badge.completed {
                    background-color: rgba(39, 174, 96, 0.1);
                    color: var(--success);
                }
            `;
            document.head.appendChild(style);
        }
        
        function setupEventListeners() {
            // Time period selector
            document.querySelectorAll('.range-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    // Remove active class from all buttons
                    document.querySelectorAll('.range-btn').forEach(b => b.classList.remove('active'));
                    
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    // Show custom range inputs if "Custom Range" was clicked
                    if (this.dataset.range === 'custom') {
                        document.querySelector('.custom-range').classList.add('active');
                    } else {
                        document.querySelector('.custom-range').classList.remove('active');
                        refreshDashboardData();
                    }
                });
            });
            
            // Apply custom range
            document.getElementById('applyCustomRange').addEventListener('click', function() {
                const startDate = document.getElementById('startDate').value;
                const endDate = document.getElementById('endDate').value;
                
                if (startDate && endDate) {
                    refreshDashboardData();
                } else {
                    alert('Please select both start and end dates');
                }
            });
            
            // Table sorting
            document.querySelectorAll('.sortable').forEach(th => {
                th.addEventListener('click', function() {
                    const column = this.dataset.column;
                    let direction = 'asc';
                    
                    if (this.classList.contains('sorted-asc')) {
                        this.classList.remove('sorted-asc');
                        this.classList.add('sorted-desc');
                        direction = 'desc';
                    } else if (this.classList.contains('sorted-desc')) {
                        this.classList.remove('sorted-desc');
                    } else {
                        // Remove sort classes from all headers
                        document.querySelectorAll('.sortable').forEach(h => {
                            h.classList.remove('sorted-asc', 'sorted-desc');
                        });
                        this.classList.add('sorted-asc');
                    }
                    
                    sortTable(column, direction);
                });
            });
            
            // Pagination
            document.querySelectorAll('.page-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const page = this.dataset.page;
                    
                    if (page === 'prev' || page === 'next') {
                        // Handle prev/next navigation
                        const currentActive = document.querySelector('.page-btn.active');
                        let newPage = parseInt(currentActive.textContent);
                        
                        if (page === 'prev' && newPage > 1) {
                            newPage--;
                        } else if (page === 'next' && newPage < 3) {
                            newPage++;
                        }
                        
                        // Update active page
                        document.querySelectorAll('.page-btn').forEach(b => b.classList.remove('active'));
                        document.querySelector(`.page-btn[data-page="${newPage}"]`).classList.add('active');
                    } else {
                        // Handle direct page click
                        document.querySelectorAll('.page-btn').forEach(b => b.classList.remove('active'));
                        this.classList.add('active');
                    }
                    
                    // In a real app, you would fetch data for the new page
                    // For this demo, we'll just simulate it
                    simulatePageLoad();
                });
            });
            
            // Export to CSV
            document.getElementById('exportCSV').addEventListener('click', exportToCSV);
            
            // Resize event with debounce
            let resizeTimer;
            window.addEventListener('resize', () => {
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(() => {
                    if (window.dashboardCharts.sales) {
                        window.dashboardCharts.sales.resize();
                        window.dashboardCharts.category.resize();
                    }
                }, 250);
            });
        }
        
        function refreshDashboardData() {
            // Show loading state
            document.querySelectorAll('.metric-card, .chart-container').forEach(el => {
                el.classList.add('loading');
            });
            
            // Simulate data refresh
            setTimeout(() => {
                // In a real app, you would fetch new data here
                // For this demo, we'll just use the same data
                
                // Hide loading state
                document.querySelectorAll('.metric-card, .chart-container').forEach(el => {
                    el.classList.remove('loading');
                });
            }, 1000);
        }
        
        function sortTable(column, direction) {
            const tableBody = document.getElementById('tableBody');
            const rows = Array.from(tableBody.querySelectorAll('tr'));
            
            rows.sort((a, b) => {
                const aValue = a.cells[column === 'date' ? 0 : 
                                      column === 'order' ? 1 : 
                                      column === 'customer' ? 2 : 
                                      column === 'amount' ? 3 : 
                                      column === 'status' ? 4 : 5].textContent;
                const bValue = b.cells[column === 'date' ? 0 : 
                                      column === 'order' ? 1 : 
                                      column === 'customer' ? 2 : 
                                      column === 'amount' ? 3 : 
                                      column === 'status' ? 4 : 5].textContent;
                
                if (column === 'date') {
                    return direction === 'asc' 
                        ? new Date(aValue) - new Date(bValue) 
                        : new Date(bValue) - new Date(aValue);
                } else if (column === 'amount') {
                    const aNum = parseFloat(aValue.replace(/[^0-9.]/g, ''));
                    const bNum = parseFloat(bValue.replace(/[^0-9.]/g, ''));
                    return direction === 'asc' ? aNum - bNum : bNum - aNum;
                } else {
                    return direction === 'asc' 
                        ? aValue.localeCompare(bValue) 
                        : bValue.localeCompare(aValue);
                }
            });
            
            // Re-append sorted rows
            rows.forEach(row => tableBody.appendChild(row));
        }
        
        function simulatePageLoad() {
            const loadingSpinner = document.createElement('div');
            loadingSpinner.className = 'loading-spinner';
            loadingSpinner.style.display = 'block';
            
            const tableBody = document.getElementById('tableBody');
            tableBody.innerHTML = '';
            tableBody.appendChild(loadingSpinner);
            
            setTimeout(() => {
                tableBody.innerHTML = '';
                initTable(); // Re-initialize table with same data for demo
            }, 800);
        }
        
        function exportToCSV() {
            // Create CSV content
            let csvContent = "Date,Order #,Customer,Amount,Status,Category\n";
            
            sampleData.tableData.forEach(item => {
                csvContent += `${formatDate(item.date)},${item.order},${item.customer},R ${item.amount},"${item.status}",${item.category}\n`;
            });
            
            // Create download link
            const blob = new Blob([csvContent], { type: 'text/csv;charset=utf-8;' });
            const url = URL.createObjectURL(blob);
            const link = document.createElement('a');
            link.setAttribute('href', url);
            link.setAttribute('download', `bro_thrifting_report_${new Date().toISOString().slice(0, 10)}.csv`);
            link.style.visibility = 'hidden';
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }
        
        function formatDate(dateString) {
            const options = { year: 'numeric', month: 'short', day: 'numeric' };
            return new Date(dateString).toLocaleDateString('en-US', options);
        }
    });
    </script>
</body>
</html>