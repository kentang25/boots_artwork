<nav class="navbar navbar-expand-lg bg-white shadow-sm py-2 px-3">

    <!-- Left: Sidebar Toggle (Mobile Only) -->
    <button id="sidebarToggleTop" class="btn btn-light d-lg-none me-2">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Center: Search (Desktop Only) -->
    <form class="d-none d-md-flex flex-grow-1 me-3">
        <div class="input-group input-group-sm">
            <input 
                type="text" 
                class="form-control bg-light border-0 shadow-none" 
                placeholder="Search..."
            >
            <button class="btn btn-primary">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </form>

    <!-- Right: Navbar Items -->
    <ul class="navbar-nav ms-auto align-items-center">

        <!-- Search (Mobile only) -->
        <li class="nav-item d-md-none">
            <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#mobileSearch">
                <i class="fas fa-search"></i>
            </a>
        </li>

        <!-- Logout -->
        <li class="nav-item ms-2">
            <a href="<?= base_url('boots_login/logout') ?>" class="btn btn-danger btn-sm px-3">
                Logout
            </a>
        </li>
    </ul>

</nav>

<!-- Mobile Search (Hidden on Desktop) -->
<div class="collapse" id="mobileSearch">
    <div class="p-3 bg-white shadow-sm">
        <div class="input-group input-group-sm">
            <input 
                type="text" 
                class="form-control bg-light border-0 shadow-none" 
                placeholder="Search..."
            >
            <button class="btn btn-primary">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>
</div>
