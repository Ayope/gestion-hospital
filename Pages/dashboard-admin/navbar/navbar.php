<nav class="navbar navbar-expand-lg navbar-light py-4 px-4  d-flex justify-content-between">
        <div class="d-flex align-items-center">
            <i class="bi bi-list primary-text-color fs-2 me-3" id="menu-toggle"></i>
            <h2 id="pageTitle" class="fs-2 m-0 primary-text-color">Dashboard</h2>
        </div>



        <div class="d-flex d-grid gap-2">
            <div class="order-2">
                <i class="bi bi-calendar-date-fill fs-2"></i>
            </div>
            <div class="order-1">
                <span>Today's Date</span><br>
                <span class="ms-1"><?=date('Y-m-d');?></span>
            </div>
        </div>
</nav>