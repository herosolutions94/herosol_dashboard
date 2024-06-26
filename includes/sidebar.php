<aside class="left-sidebar">
    <div class="logo">
        <a href="index.php">
            <img src="images/logo.png" alt="">
        </a>
        <!-- <a href="javascript:void(0)" class="sidebartoggler ms-auto text-decoration-none fs-5 d-flex d-xl-none">
            <iconify-icon icon="solar:close-circle-outline"></iconify-icon>
        </a> -->
    </div>
    <nav class="sidebar-nav scroll-sidebar" data-simplebar>
        <ul id="sidebarnav">
            <li class="small_head">Main</li>
            <li class="sidebar-item">
                <a href="index.php"
                    class="<?= ($page == 'index' || $page == '') ? 'active sidebar-link' : 'sidebar-link ' ?>">
                    <i class="fa-light fa-gauge"></i>
                    <span class="hide-menu">Dashboard</span></a>
            </li>
            <li class="sidebar-item">
                <a href="javascript:void(0)" class="sidebar-link has-arrow">
                    <i class="fa-light fa-notes"></i>
                    <span class="hide-menu">Forms</span></a>
                <ul class="sub-menu">
                    <li class="sidebar-item">
                        <a href="form.php" class="sidebar-link">
                            <span class="hide-menu">Form Inputs</span></a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <span class="hide-menu">Form Elements</span></a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a href="javascript:void(0)" class="sidebar-link has-arrow">
                    <i class="fa-light fa-calendar"></i>
                    <span class="hide-menu">Calendar</span></a>
                <ul class="sub-menu">
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <span class="hide-menu">Left Calendar</span></a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <span class="hide-menu">Right Calendar</span></a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a href="message.php" class="sidebar-link">
                    <i class="fa-light fa-message-lines"></i>
                    <span class="hide-menu">Messages</span></a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="fa-light fa-envelope"></i>
                    <span class="hide-menu">Email</span></a>
            </li>
            <li class="sidebar-item">
                <a href="analytics.php" class="sidebar-link">
                    <i class="fa-sharp fa-light fa-swatchbook"></i>
                    <span class="hide-menu">Analytics</span></a>
            </li>
            <li class="sidebar-item">
                <a href="order.php" class="sidebar-link">
                    <i class="fa-light fa-cart-shopping"></i>
                    <span class="hide-menu">Orders</span></a>
            </li>
            <li class="sidebar-item">
                <a href="contact-list.php" class="sidebar-link">
                    <i class="fa-light fa-table-list"></i>
                    <span class="hide-menu">Contact List</span></a>
            </li>
            <li class="sidebar-item">
                <a href="invoice.php" class="sidebar-link">
                    <i class="fa-light fa-file-invoice"></i>
                    <span class="hide-menu">Invoice</span></a>
            </li>
            <li class="sidebar-item">
                <a href="user.php" class="sidebar-link">
                    <i class="fa-light fa-square-user"></i>
                    <span class="hide-menu">User</span></a>
            </li>
            <li class="small_head">Pages</li>
            <li class="sidebar-item">
                <a href="blog.php" class="sidebar-link">
                    <i class="fa-light fa-circle-dollar"></i>
                    <span class="hide-menu">Blog</span></a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="fa-light fa-circle-question"></i>
                    <span class="hide-menu">FAQ</span></a>
            </li>
            <li class="sidebar-item">
                <a href="setting.php" class="sidebar-link">
                    <i class="fa-light fa-circle-user"></i>
                    <span class="hide-menu">Site Settings</span></a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="fa-light fa-layer-group"></i>
                    <span class="hide-menu">Landing Page</span></a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="fa-light fa-clipboard"></i>
                    <span class="hide-menu">Page Layouts</span></a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="fa-light fa-window-restore"></i>
                    <span class="hide-menu">UI Elements</span></a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="fa-sharp fa-light fa-command"></i>
                    <span class="hide-menu">Componets</span></a>
            </li>

        </ul>
    </nav>
    <div class="sidebar-footer hide-menu">
        <a href="">
            <i class="fa-light fa-gear"></i>
        </a>
        <a href="">
            <i class="fa-light fa-inbox"></i>
        </a>
        <a href="">
            <i class="fa-light fa-power-off"></i>
        </a>
    </div>
</aside>