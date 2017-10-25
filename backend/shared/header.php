<nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
<div class="container">
    <a href="index.php" class="navbar-brand">Blogen</a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item px-2">
                <a href="index.php" class="nav-link <?php echo (isset($_GET['page'])) ? '':'active';?>">Dashboard</a>
            </li>
            <li class="nav-item px-2">
                <a href="index.php?page=posts/index" class="nav-link <?php echo (isset($_GET['page']) && $_GET['page']=='posts/index') ? 'active':'';?>">Posts</a>
            </li>
            <li class="nav-item px-2">
                <a href="index.php?page=categories/index" class="nav-link <?php echo (isset($_GET['page']) && $_GET['page']=='categories/index') ? 'active':'';?>">Categories</a>
            </li>
            <li class="nav-item px-2">
                <a href="index.php?page=users/index" class="nav-link <?php echo (isset($_GET['page']) && $_GET['page']=='users/index') ? 'active':'';?>">Users</a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown mr-3">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-user">Welcome Brand</i>
                </a>
                <div class="dropdown-menu">
                    <a href="index.php?page=users/profile" class="dropdown-item">
                        <i class="fa fa-user-circle"></i> Profile
                    </a>
                    <a href="index.php?page=users/settings" class="dropdown-item">
                        <i class="fa fa-gear"></i> Settings
                    </a>
                </div>
            </li>
            <li class="nav-item">
                <a href="index.php?page=login" class="nav-link">
                    <i class="fa fa-user-times"></i> Logout
                </a>
            </li>
        </ul>
    </div>
</div>
</nav>