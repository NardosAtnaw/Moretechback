 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                    <span>Posts</span>
                    <i style="margin-left: 6rem; font-size: 0.8rem;" class="fas fa-chevron-down  text-gray-300"></i>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="./posts.php">View All Posts</a>
                        <a class="collapse-item" href="./posts.php?source=add_post">Add Post</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="./categories.php">
                <i class="fas fa-clipboard-list"></i>
                    <span>Categories      </span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsethree"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-users"></i>
                    <span>Clients</span>
                    <i style="margin-left: 6rem; font-size: 0.8rem;" class="fas fa-chevron-down  text-gray-300"></i>
                </a>
                <div id="collapsethree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="./clients.php">View All Clients</a>
                        <a class="collapse-item" href="./clients.php?source=add_client">Add Client</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./comments.php">
                    <i class="fas fa-comments"></i>
                    <span>Comments</span></a>
            </li>
          
            <li class="nav-item">
                <a class="nav-link" href="./payment.php">
                    <i class="fas fa-money-bill-wave"></i>
                    <span>Payment Request</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./view_confirm_payment.php">
                    <i class="fas fa-money-bill-wave"></i>
                    <span>Confirm Payment</span></a>
            </li>
          
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-users"></i>
                    
                    <span>Users</span>
                    <i style="margin-left: 6rem; font-size: 0.8rem;" class="fas fa-chevron-down  text-gray-300"></i>
                </a>
               
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="./users.php">View all Users</a>
                        <a class="collapse-item" href="./users.php?source=add_user">Add User</a>
                    </div>
                </div>
            </li>
          

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle">
                <i style=" font-size: 0.8rem;" class="fas fa-chevron-left text-white"></i>
                </button>
            </div>

            <!-- Sidebar Message -->
            

        </ul>
