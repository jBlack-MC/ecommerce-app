<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Categories Management | Bro's Thrifting</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts and Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
    /* Reuse the color variables from the main styles */
    :root {
        --deep-black: #20262D;
        --urban-green: #4B5A4D;
        --cool-sky-blue: #7D8D97;
        --neutral-beige: #D6D1C2;
        --charcoal-gray: #5B5F66;
        --accent: #8A9A8B;
        --light-bg: #F5F3EC;
        --forest-moss: #597e6a;
        --oasis-teal: #598a82;

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

        --border-radius: 8px;
        --shadow: 0 4px 12px rgba(0,0,0,0.1);
        --transition: all 0.3s ease;
    }

    /* Base styles */
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

    .container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 20px;
    }

    /* Header styles (reused from main) */
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

    /* Page title */
    .page-title {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
        padding-bottom: 15px;
        border-bottom: 1px solid var(--light-gray);
    }

    .page-title h1 {
        font-size: 1.8rem;
        color: var(--urban-green);
    }

    /* Main content layout */
    .categories-management {
        display: flex;
        gap: 25px;
    }

    /* Categories tree panel */
    .categories-tree {
        width: 350px;
        background: var(--neutral-beige);
        border-radius: var(--border-radius);
        padding: 20px;
        box-shadow: var(--shadow);
        height: calc(100vh - var(--header-height) - 80px);
        overflow-y: auto;
        position: sticky;
        top: calc(var(--header-height) + 20px);
        border: 1px solid var(--charcoal-gray);
    }

    .tree-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .tree-header h2 {
        font-size: 1.4rem;
        color: var(--urban-green);
    }

    .add-category-btn {
        background: var(--oasis-teal);
        color: white;
        border: none;
        border-radius: var(--border-radius);
        padding: 8px 15px;
        cursor: pointer;
        transition: var(--transition);
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .add-category-btn:hover {
        background: var(--forest-moss);
        transform: translateY(-2px);
    }

    /* Tree view styles */
    .tree {
        list-style: none;
        padding-left: 0;
    }

    .tree-item {
        margin-bottom: 5px;
        position: relative;
    }

    .tree-item-content {
        display: flex;
        align-items: center;
        padding: 8px 10px;
        border-radius: var(--border-radius);
        cursor: pointer;
        transition: var(--transition);
        position: relative;
    }

    .tree-item-content:hover {
        background-color: rgba(75, 90, 77, 0.1);
    }

    .tree-item-content.active {
        background-color: rgba(75, 90, 77, 0.2);
        font-weight: 500;
    }

    .tree-toggle {
        margin-right: 8px;
        width: 20px;
        height: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }

    .tree-toggle i {
        transition: var(--transition);
    }

    .tree-toggle.collapsed i {
        transform: rotate(-90deg);
    }

    .tree-item-name {
        flex: 1;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .status-dot {
        display: inline-block;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        margin-right: 8px;
    }

    .status-dot.active {
        background-color: #4CAF50;
    }

    .status-dot.inactive {
        background-color: #F44336;
    }

    .product-count {
        background-color: var(--cool-sky-blue);
        color: white;
        border-radius: 10px;
        padding: 2px 8px;
        font-size: 0.75rem;
        margin-left: 8px;
    }

    .drag-handle {
        cursor: move;
        color: var(--gray);
        padding: 5px;
        margin-left: 5px;
        opacity: 0;
        transition: var(--transition);
    }

    .tree-item-content:hover .drag-handle {
        opacity: 1;
    }

    .subtree {
        list-style: none;
        padding-left: 20px;
        margin-top: 5px;
        overflow: hidden;
        transition: max-height 0.3s ease;
    }

    /* Category details panel */
    .category-details {
        flex: 1;
        background: var(--neutral-beige);
        border-radius: var(--border-radius);
        padding: 25px;
        box-shadow: var(--shadow);
        border: 1px solid var(--charcoal-gray);
    }

    .details-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
        padding-bottom: 15px;
        border-bottom: 1px solid var(--light-gray);
    }

    .details-header h2 {
        font-size: 1.5rem;
        color: var(--urban-green);
    }

    .form-actions {
        display: flex;
        gap: 10px;
    }

    .btn {
        padding: 10px 20px;
        border-radius: var(--border-radius);
        border: none;
        cursor: pointer;
        transition: var(--transition);
        display: flex;
        align-items: center;
        gap: 8px;
        font-weight: 500;
    }

    .btn-primary {
        background: var(--urban-green);
        color: white;
    }

    .btn-primary:hover {
        background: var(--forest-moss);
        transform: translateY(-2px);
    }

    .btn-secondary {
        background: var(--cool-sky-blue);
        color: white;
    }

    .btn-secondary:hover {
        background: var(--oasis-teal);
        transform: translateY(-2px);
    }

    .btn-danger {
        background: var(--error);
        color: white;
    }

    .btn-danger:hover {
        background: #c1121f;
        transform: translateY(-2px);
    }

    /* Form styles */
    .category-form {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group.full-width {
        grid-column: 1 / -1;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 500;
        color: var(--urban-green);
    }

    .form-control {
        width: 100%;
        padding: 10px 15px;
        border: 1px solid var(--charcoal-gray);
        border-radius: var(--border-radius);
        font-family: 'Poppins', sans-serif;
        transition: var(--transition);
        background-color: var(--light-bg);
    }

    .form-control:focus {
        border-color: var(--urban-green);
        outline: none;
        box-shadow: 0 0 0 2px rgba(75, 90, 77, 0.2);
    }

    .form-control.slug-field {
        background-color: #f0f0f0;
        color: var(--gray);
    }

    /* Image upload styles */
    .image-upload {
        border: 2px dashed var(--charcoal-gray);
        border-radius: var(--border-radius);
        padding: 20px;
        text-align: center;
        cursor: pointer;
        transition: var(--transition);
        background-color: var(--light-bg);
    }

    .image-upload:hover {
        border-color: var(--urban-green);
        background-color: rgba(75, 90, 77, 0.05);
    }

    .image-upload i {
        font-size: 2.5rem;
        color: var(--cool-sky-blue);
        margin-bottom: 10px;
    }

    .image-upload p {
        margin-bottom: 10px;
        color: var(--gray);
    }

    .image-upload small {
        color: var(--charcoal-gray);
        font-size: 0.8rem;
    }

    .image-preview {
        display: none;
        margin-top: 15px;
        position: relative;
    }

    .image-preview img {
        max-width: 100%;
        max-height: 200px;
        border-radius: var(--border-radius);
        border: 1px solid var(--light-gray);
    }

    .remove-image {
        position: absolute;
        top: 5px;
        right: 5px;
        background: var(--error);
        color: white;
        width: 25px;
        height: 25px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: var(--transition);
    }

    .remove-image:hover {
        background: #c1121f;
    }

    /* Toggle switch */
    .toggle-switch {
        position: relative;
        display: inline-block;
        width: 50px;
        height: 24px;
    }

    .toggle-switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        transition: var(--transition);
        border-radius: 34px;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 16px;
        width: 16px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        transition: var(--transition);
        border-radius: 50%;
    }

    input:checked + .slider {
        background-color: var(--urban-green);
    }

    input:checked + .slider:before {
        transform: translateX(26px);
    }

    .toggle-label {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    /* Context menu */
    .context-menu {
        position: absolute;
        background: white;
        border-radius: var(--border-radius);
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        z-index: 1000;
        min-width: 180px;
        display: none;
    }

    .context-menu ul {
        list-style: none;
        padding: 5px 0;
    }

    .context-menu li {
        padding: 8px 15px;
        cursor: pointer;
        transition: var(--transition);
    }

    .context-menu li:hover {
        background-color: rgba(75, 90, 77, 0.1);
    }

    .context-menu li i {
        margin-right: 8px;
        width: 18px;
        text-align: center;
    }

    .context-menu li.delete {
        color: var(--error);
    }

    /* Drag and drop styling */
    .tree-item-content.dragging {
        opacity: 0.5;
        background-color: rgba(75, 90, 77, 0.1);
    }

    .tree-item-content.drop-target {
        background-color: rgba(89, 138, 130, 0.2);
        border: 1px dashed var(--oasis-teal);
    }

    /* Empty state */
    .empty-state {
        text-align: center;
        padding: 40px 20px;
        color: var(--gray);
    }

    .empty-state i {
        font-size: 3rem;
        color: var(--cool-sky-blue);
        margin-bottom: 20px;
    }

    .empty-state h3 {
        font-size: 1.3rem;
        margin-bottom: 10px;
        color: var(--urban-green);
    }

    /* Responsive design */
    @media (max-width: 992px) {
        .categories-management {
            flex-direction: column;
        }

        .categories-tree {
            width: 100%;
            height: auto;
            max-height: 400px;
            position: static;
        }

        .category-form {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 576px) {
        .form-actions {
            flex-direction: column;
        }

        .btn {
            width: 100%;
            justify-content: center;
        }
    }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <i class="fas fa-shopping-bag"></i>Bro's <span>Thrifting</span>
                </div>

                <div class="user-actions">
                    <a href="#" title="Account" aria-label="Account">
                        <i class="fas fa-user"></i>
                        <span>Account</span>
                    </a>
                    <a href="#" title="Logout" aria-label="Logout">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="page-title">
            <h1>Categories Management</h1>
        </div>

        <div class="categories-management">
            <!-- Categories Tree Panel -->
            <div class="categories-tree">
                <div class="tree-header">
                    <h2>Categories</h2>
                    <button class="add-category-btn" id="addRootCategory">
                        <i class="fas fa-plus"></i> Add Category
                    </button>
                </div>

                <ul class="tree" id="categoriesTree">
                    <!-- Categories will be loaded here dynamically -->
                    <li class="tree-item">
                        <div class="tree-item-content" data-id="1">
                            <div class="tree-toggle collapsed">
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="tree-item-name">
                                <span class="status-dot active"></span>
                                <span>Streetwear</span>
                                <span class="product-count">42</span>
                            </div>
                            <div class="drag-handle">
                                <i class="fas fa-grip-vertical"></i>
                            </div>
                        </div>
                        <ul class="subtree">
                            <li class="tree-item">
                                <div class="tree-item-content" data-id="2">
                                    <div class="tree-toggle collapsed">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                    <div class="tree-item-name">
                                        <span class="status-dot active"></span>
                                        <span>Sneakers</span>
                                        <span class="product-count">28</span>
                                    </div>
                                    <div class="drag-handle">
                                        <i class="fas fa-grip-vertical"></i>
                                    </div>
                                </div>
                                <ul class="subtree">
                                    <li class="tree-item">
                                        <div class="tree-item-content" data-id="3">
                                            <div class="tree-item-name">
                                                <span class="status-dot active"></span>
                                                <span>High Tops</span>
                                                <span class="product-count">12</span>
                                            </div>
                                            <div class="drag-handle">
                                                <i class="fas fa-grip-vertical"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="tree-item">
                                        <div class="tree-item-content" data-id="4">
                                            <div class="tree-item-name">
                                                <span class="status-dot active"></span>
                                                <span>Low Tops</span>
                                                <span class="product-count">16</span>
                                            </div>
                                            <div class="drag-handle">
                                                <i class="fas fa-grip-vertical"></i>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="tree-item">
                                <div class="tree-item-content" data-id="5">
                                    <div class="tree-item-name">
                                        <span class="status-dot active"></span>
                                        <span>Hoodies</span>
                                        <span class="product-count">14</span>
                                    </div>
                                    <div class="drag-handle">
                                        <i class="fas fa-grip-vertical"></i>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="tree-item">
                        <div class="tree-item-content" data-id="6">
                            <div class="tree-toggle">
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="tree-item-name">
                                <span class="status-dot active"></span>
                                <span>Vintage</span>
                                <span class="product-count">36</span>
                            </div>
                            <div class="drag-handle">
                                <i class="fas fa-grip-vertical"></i>
                            </div>
                        </div>
                        <ul class="subtree" style="display: none;">
                            <li class="tree-item">
                                <div class="tree-item-content" data-id="7">
                                    <div class="tree-item-name">
                                        <span class="status-dot inactive"></span>
                                        <span>Denim</span>
                                        <span class="product-count">22</span>
                                    </div>
                                    <div class="drag-handle">
                                        <i class="fas fa-grip-vertical"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="tree-item">
                                <div class="tree-item-content" data-id="8">
                                    <div class="tree-item-name">
                                        <span class="status-dot active"></span>
                                        <span>Jackets</span>
                                        <span class="product-count">14</span>
                                    </div>
                                    <div class="drag-handle">
                                        <i class="fas fa-grip-vertical"></i>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="tree-item">
                        <div class="tree-item-content" data-id="9">
                            <div class="tree-item-name">
                                <span class="status-dot active"></span>
                                <span>Accessories</span>
                                <span class="product-count">19</span>
                            </div>
                            <div class="drag-handle">
                                <i class="fas fa-grip-vertical"></i>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Category Details Panel -->
            <div class="category-details">
                <div class="details-header">
                    <h2>Category Details</h2>
                    <div class="form-actions">
                        <button class="btn btn-secondary" id="cancelChanges">
                            <i class="fas fa-times"></i> Cancel
                        </button>
                        <button class="btn btn-primary" id="saveCategory">
                            <i class="fas fa-save"></i> Save Changes
                        </button>
                    </div>
                </div>

                <div class="empty-state" id="emptyState">
                    <i class="fas fa-tags"></i>
                    <h3>No Category Selected</h3>
                    <p>Select a category from the tree or create a new one to edit its details.</p>
                </div>

                <form id="categoryForm" style="display: none;">
                    <input type="hidden" id="categoryId">

                    <div class="form-group">
                        <label for="categoryName">Category Name *</label>
                        <input type="text" id="categoryName" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="categorySlug">Slug *</label>
                        <input type="text" id="categorySlug" class="form-control slug-field" readonly>
                        <small class="slug-hint">Slug will be auto-generated from the name</small>
                    </div>

                    <div class="form-group">
                        <label for="parentCategory">Parent Category</label>
                        <select id="parentCategory" class="form-control">
                            <option value="">-- No Parent (Root Category) --</option>
                            <option value="1">Streetwear</option>
                            <option value="2">Sneakers</option>
                            <option value="5">Hoodies</option>
                            <option value="6">Vintage</option>
                            <option value="7">Denim</option>
                            <option value="8">Jackets</option>
                            <option value="9">Accessories</option>
                        </select>
                    </div>

                    <div class="form-group full-width">
                        <label>Category Image</label>
                        <div class="image-upload" id="imageUpload">
                            <i class="fas fa-cloud-upload-alt"></i>
                            <p>Drag & drop your image here or click to browse</p>
                            <small>Recommended size: 800x800px, JPG or PNG</small>
                        </div>
                        <div class="image-preview" id="imagePreview">
                            <img src="" alt="Category Image Preview">
                            <div class="remove-image" title="Remove image">
                                <i class="fas fa-times"></i>
                            </div>
                        </div>
                        <input type="file" id="imageInput" accept="image/*" style="display: none;">
                    </div>

                    <div class="form-group full-width">
                        <label>Status</label>
                        <div class="toggle-label">
                            <label class="toggle-switch">
                                <input type="checkbox" id="categoryStatus" checked>
                                <span class="slider"></span>
                            </label>
                            <span id="statusText">Active</span>
                        </div>
                    </div>

                    <div class="form-group full-width">
                        <label for="metaTitle">Meta Title (SEO)</label>
                        <input type="text" id="metaTitle" class="form-control">
                        <small>Title tag for SEO (50-60 characters recommended)</small>
                    </div>

                    <div class="form-group full-width">
                        <label for="metaDescription">Meta Description (SEO)</label>
                        <textarea id="metaDescription" class="form-control" rows="3"></textarea>
                        <small>Description for search engines (150-160 characters recommended)</small>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Context Menu -->
    <div class="context-menu" id="contextMenu">
        <ul>
            <li class="edit-category"><i class="fas fa-edit"></i> Edit</li>
            <li class="add-child"><i class="fas fa-plus-circle"></i> Add Child</li>
            <li class="delete delete-category"><i class="fas fa-trash-alt"></i> Delete</li>
        </ul>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // DOM Elements
        const categoriesTree = document.getElementById('categoriesTree');
        const categoryForm = document.getElementById('categoryForm');
        const emptyState = document.getElementById('emptyState');
        const contextMenu = document.getElementById('contextMenu');
        const imageUpload = document.getElementById('imageUpload');
        const imageInput = document.getElementById('imageInput');
        const imagePreview = document.getElementById('imagePreview');
        const removeImage = imagePreview.querySelector('.remove-image');

        // Current state
        let currentCategory = null;
        let contextMenuTarget = null;

        // Initialize tree functionality
        initTree();

        // Initialize form functionality
        initForm();

        // Initialize drag and drop
        initDragAndDrop();

        // Initialize context menu
        initContextMenu();

        // Event listeners for buttons
        document.getElementById('addRootCategory').addEventListener('click', () => {
            showEmptyForm();
        });

        document.getElementById('saveCategory').addEventListener('click', saveCategory);
        document.getElementById('cancelChanges').addEventListener('click', cancelChanges);

        // Image upload handling
        imageUpload.addEventListener('click', () => imageInput.click());
        imageInput.addEventListener('change', handleImageUpload);
        removeImage.addEventListener('click', removeUploadedImage);

        // Slug generation from name
        document.getElementById('categoryName').addEventListener('input', generateSlug);

        // Status toggle
        document.getElementById('categoryStatus').addEventListener('change', function() {
            document.getElementById('statusText').textContent = this.checked ? 'Active' : 'Inactive';
        });

        // ========== TREE FUNCTIONS ==========
        function initTree() {
            // Add event listeners to all toggle buttons
            document.querySelectorAll('.tree-toggle').forEach(toggle => {
                toggle.addEventListener('click', function(e) {
                    e.stopPropagation();
                    const subtree = this.closest('.tree-item').querySelector('.subtree');

                    if (subtree) {
                        this.classList.toggle('collapsed');
                        const isCollapsed = this.classList.contains('collapsed');

                        if (isCollapsed) {
                            subtree.style.display = 'none';
                        } else {
                            subtree.style.display = 'block';
                        }
                    }
                });
            });

            // Add click listeners to all tree items
            document.querySelectorAll('.tree-item-content').forEach(item => {
                item.addEventListener('click', function() {
                    selectCategory(this);
                });
            });
        }

        function selectCategory(element) {
            // Remove active class from all items
            document.querySelectorAll('.tree-item-content').forEach(item => {
                item.classList.remove('active');
            });

            // Add active class to selected item
            element.classList.add('active');

            // Load category data into form
            loadCategoryData(element.getAttribute('data-id'));

            // Show form and hide empty state
            categoryForm.style.display = 'block';
            emptyState.style.display = 'none';
        }

        function loadCategoryData(categoryId) {
            // In a real app, this would be an AJAX call to get category data
            console.log(`Loading data for category ${categoryId}`);
            currentCategory = categoryId;

            // Simulate loading data
            const categoryData = {
                id: categoryId,
                name: 'Sample Category', // This would come from your data
                slug: 'sample-category',
                parentId: '1',
                imageUrl: '',
                status: true,
                metaTitle: 'Sample Category | Bro\'s Thrifting',
                metaDescription: 'Browse our collection of sample category items at Bro\'s Thrifting.'
            };

            // Populate form fields
            document.getElementById('categoryId').value = categoryData.id;
            document.getElementById('categoryName').value = categoryData.name;
            document.getElementById('categorySlug').value = categoryData.slug;
            document.getElementById('parentCategory').value = categoryData.parentId;
            document.getElementById('categoryStatus').checked = categoryData.status;
            document.getElementById('statusText').textContent = categoryData.status ? 'Active' : 'Inactive';
            document.getElementById('metaTitle').value = categoryData.metaTitle;
            document.getElementById('metaDescription').value = categoryData.metaDescription;

            // Handle image preview
            if (categoryData.imageUrl) {
                imagePreview.querySelector('img').src = categoryData.imageUrl;
                imagePreview.style.display = 'block';
                imageUpload.style.display = 'none';
            } else {
                imagePreview.style.display = 'none';
                imageUpload.style.display = 'block';
            }
        }

        function addCategoryToTree(categoryData, parentId = null) {
            const treeItem = document.createElement('li');
            treeItem.className = 'tree-item';

            treeItem.innerHTML = `
                <div class="tree-item-content" data-id="${categoryData.id}">
                    ${categoryData.hasChildren ? `
                    <div class="tree-toggle collapsed">
                        <i class="fas fa-chevron-down"></i>
                    </div>` : ''}
                    <div class="tree-item-name">
                        <span class="status-dot ${categoryData.status ? 'active' : 'inactive'}"></span>
                        <span>${categoryData.name}</span>
                        <span class="product-count">${categoryData.productCount || 0}</span>
                    </div>
                    <div class="drag-handle">
                        <i class="fas fa-grip-vertical"></i>
                    </div>
                </div>
                ${categoryData.hasChildren ? `<ul class="subtree"></ul>` : ''}
            `;

            if (parentId) {
                const parentItem = document.querySelector(`.tree-item-content[data-id="${parentId}"]`);
                if (parentItem) {
                    const parentLi = parentItem.closest('.tree-item');
                    let subtree = parentLi.querySelector('.subtree');

                    if (!subtree) {
                        // If parent didn't have children before, create subtree
                        subtree = document.createElement('ul');
                        subtree.className = 'subtree';
                        parentLi.appendChild(subtree);

                        // Add toggle button if it wasn't there
                        if (!parentItem.querySelector('.tree-toggle')) {
                            const toggle = document.createElement('div');
                            toggle.className = 'tree-toggle collapsed';
                            toggle.innerHTML = '<i class="fas fa-chevron-down"></i>';
                            parentItem.insertBefore(toggle, parentItem.firstChild);
                        }
                    }

                    subtree.appendChild(treeItem);
                }
            } else {
                categoriesTree.appendChild(treeItem);
            }

            // Add event listeners to the new item
            const content = treeItem.querySelector('.tree-item-content');
            content.addEventListener('click', () => selectCategory(content));

            if (treeItem.querySelector('.tree-toggle')) {
                treeItem.querySelector('.tree-toggle').addEventListener('click', function(e) {
                    e.stopPropagation();
                    const subtree = this.closest('.tree-item').querySelector('.subtree');

                    if (subtree) {
                        this.classList.toggle('collapsed');
                        const isCollapsed = this.classList.contains('collapsed');

                        if (isCollapsed) {
                            subtree.style.display = 'none';
                        } else {
                            subtree.style.display = 'block';
                        }
                    }
                });
            }

            return treeItem;
        }

        // ========== FORM FUNCTIONS ==========
        function initForm() {
            // Initialize form validation
            categoryForm.addEventListener('submit', function(e) {
                e.preventDefault();
                saveCategory();
            });
        }

        function showEmptyForm() {
            // Reset form
            categoryForm.reset();
            document.getElementById('categoryId').value = '';
            document.getElementById('categoryStatus').checked = true;
            document.getElementById('statusText').textContent = 'Active';
            imagePreview.style.display = 'none';
            imageUpload.style.display = 'block';

            // Show form and hide empty state
            categoryForm.style.display = 'block';
            emptyState.style.display = 'none';

            // Remove active class from all tree items
            document.querySelectorAll('.tree-item-content').forEach(item => {
                item.classList.remove('active');
            });

            currentCategory = null;
        }

        function saveCategory() {
            const formData = {
                id: document.getElementById('categoryId').value || null,
                name: document.getElementById('categoryName').value,
                slug: document.getElementById('categorySlug').value,
                parentId: document.getElementById('parentCategory').value || null,
                status: document.getElementById('categoryStatus').checked,
                metaTitle: document.getElementById('metaTitle').value,
                metaDescription: document.getElementById('metaDescription').value,
                // Image would be handled via FormData in a real AJAX call
            };

            // Validate required fields
            if (!formData.name) {
                alert('Category name is required');
                return;
            }

            // In a real app, this would be an AJAX call to save the category
            console.log('Saving category:', formData);

            // Simulate save and update UI
            if (!formData.id) {
                // New category
                formData.id = Date.now().toString(); // Temporary ID
                formData.productCount = 0;
                formData.hasChildren = false;

                const newItem = addCategoryToTree(formData, formData.parentId);
                selectCategory(newItem.querySelector('.tree-item-content'));
            } else {
                // Update existing category
                const item = document.querySelector(`.tree-item-content[data-id="${formData.id}"]`);
                if (item) {
                    const nameSpan = item.querySelector('.tree-item-name span:nth-child(2)');
                    const statusDot = item.querySelector('.status-dot');

                    if (nameSpan) nameSpan.textContent = formData.name;
                    if (statusDot) {
                        statusDot.classList.remove('active', 'inactive');
                        statusDot.classList.add(formData.status ? 'active' : 'inactive');
                    }
                }
            }

            // Show success message
            alert('Category saved successfully!');
        }

        function cancelChanges() {
            if (currentCategory) {
                // Reload the current category data
                loadCategoryData(currentCategory);
            } else {
                // Hide form and show empty state
                categoryForm.style.display = 'none';
                emptyState.style.display = 'block';

                // Remove active class from all tree items
                document.querySelectorAll('.tree-item-content').forEach(item => {
                    item.classList.remove('active');
                });
            }
        }

        function generateSlug() {
            const name = document.getElementById('categoryName').value;
            const slug = name.toLowerCase()
                .replace(/[^\w\s-]/g, '') // Remove non-word chars
                .replace(/[\s_-]+/g, '-') // Replace spaces and underscores with hyphens
                .replace(/^-+|-+$/g, ''); // Trim hyphens from start/end

            document.getElementById('categorySlug').value = slug;
        }

        // ========== IMAGE UPLOAD FUNCTIONS ==========
        function handleImageUpload(e) {
            const file = e.target.files[0];
            if (!file) return;

            if (!file.type.match('image.*')) {
                alert('Please select an image file (JPG, PNG)');
                return;
            }

            const reader = new FileReader();
            reader.onload = function(event) {
                imagePreview.querySelector('img').src = event.target.result;
                imagePreview.style.display = 'block';
                imageUpload.style.display = 'none';
            };
            reader.readAsDataURL(file);
        }

        function removeUploadedImage() {
            imageInput.value = '';
            imagePreview.style.display = 'none';
            imageUpload.style.display = 'block';
        }

        // ========== DRAG AND DROP FUNCTIONS ==========
        function initDragAndDrop() {
            const dragItems = document.querySelectorAll('.tree-item-content');

            dragItems.forEach(item => {
                item.setAttribute('draggable', true);

                item.addEventListener('dragstart', function(e) {
                    this.classList.add('dragging');
                    e.dataTransfer.setData('text/plain', this.getAttribute('data-id'));
                    e.dataTransfer.effectAllowed = 'move';
                });

                item.addEventListener('dragend', function() {
                    this.classList.remove('dragging');
                });
            });

            document.querySelectorAll('.tree-item').forEach(item => {
                item.addEventListener('dragover', function(e) {
                    e.preventDefault();
                    e.dataTransfer.dropEffect = 'move';

                    const dragging = document.querySelector('.dragging');
                    if (dragging && dragging !== this.querySelector('.tree-item-content')) {
                        this.querySelector('.tree-item-content').classList.add('drop-target');
                    }
                });

                item.addEventListener('dragleave', function() {
                    this.querySelector('.tree-item-content').classList.remove('drop-target');
                });

                item.addEventListener('drop', function(e) {
                    e.preventDefault();
                    this.querySelector('.tree-item-content').classList.remove('drop-target');

                    const draggedId = e.dataTransfer.getData('text/plain');
                    const targetId = this.querySelector('.tree-item-content').getAttribute('data-id');

                    if (draggedId !== targetId) {
                        // In a real app, this would be an AJAX call to update the hierarchy
                        console.log(`Moving category ${draggedId} to be a child of ${targetId}`);

                        // Find the dragged element
                        const draggedElement = document.querySelector(`.tree-item-content[data-id="${draggedId}"]`);
                        if (draggedElement) {
                            const draggedLi = draggedElement.closest('.tree-item');
                            const targetLi = this;

                            // Check if target already has a subtree
                            let subtree = targetLi.querySelector('.subtree');
                            if (!subtree) {
                                // Create new subtree
                                subtree = document.createElement('ul');
                                subtree.className = 'subtree';
                                targetLi.appendChild(subtree);

                                // Add toggle button if it wasn't there
                                const targetContent = targetLi.querySelector('.tree-item-content');
                                if (!targetContent.querySelector('.tree-toggle')) {
                                    const toggle = document.createElement('div');
                                    toggle.className = 'tree-toggle collapsed';
                                    toggle.innerHTML = '<i class="fas fa-chevron-down"></i>';
                                    targetContent.insertBefore(toggle, targetContent.firstChild);
                                }
                            }

                            // Move the dragged item
                            subtree.appendChild(draggedLi);

                            // Ensure the subtree is visible
                            const toggle = targetLi.querySelector('.tree-toggle');
                            if (toggle && toggle.classList.contains('collapsed')) {
                                toggle.classList.remove('collapsed');
                                subtree.style.display = 'block';
                            }
                        }
                    }
                });
            });
        }

        // ========== CONTEXT MENU FUNCTIONS ==========
        function initContextMenu() {
            // Show context menu on right-click
            document.querySelectorAll('.tree-item-content').forEach(item => {
                item.addEventListener('contextmenu', function(e) {
                    e.preventDefault();
                    contextMenuTarget = this;

                    // Position the context menu
                    contextMenu.style.display = 'block';
                    contextMenu.style.left = `${e.pageX}px`;
                    contextMenu.style.top = `${e.pageY}px`;
                });
            });

            // Hide context menu when clicking elsewhere
            document.addEventListener('click', function() {
                contextMenu.style.display = 'none';
            });

            // Context menu actions
            contextMenu.querySelector('.edit-category').addEventListener('click', function() {
                if (contextMenuTarget) {
                    selectCategory(contextMenuTarget);
                }
                contextMenu.style.display = 'none';
            });

            contextMenu.querySelector('.add-child').addEventListener('click', function() {
                if (contextMenuTarget) {
                    const parentId = contextMenuTarget.getAttribute('data-id');
                    showEmptyForm();
                    document.getElementById('parentCategory').value = parentId;
                }
                contextMenu.style.display = 'none';
            });

            contextMenu.querySelector('.delete-category').addEventListener('click', function() {
                if (contextMenuTarget && confirm('Are you sure you want to delete this category?')) {
                    const categoryId = contextMenuTarget.getAttribute('data-id');

                    // In a real app, this would be an AJAX call to delete the category
                    console.log(`Deleting category ${categoryId}`);

                    // Remove from tree
                    const li = contextMenuTarget.closest('.tree-item');
                    if (li) {
                        li.remove();
                    }

                    // If we were editing this category, clear the form
                    if (currentCategory === categoryId) {
                        categoryForm.style.display = 'none';
                        emptyState.style.display = 'block';
                        currentCategory = null;
                    }
                }
                contextMenu.style.display = 'none';
            });
        }
    });
    </script>
</body>
</html>
