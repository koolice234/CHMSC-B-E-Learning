<body>

    <div class="d-flex flex-column h-100">
        <!-- Navbar -->
        <nav class="navbar navbar-expand navbar-dark bg-primary m-0">

            <!-- Toggle sidebar -->
            <button class="navbar-toggler d-block" data-toggle="sidebar" type="button">
                <span class="material-icons">menu</span>
            </button>

            <!-- Brand -->
            <a href="dashboard.php" class="navbar-brand"><i class="material-icons">school</i> CHMSC-B E-Learning</a>

            <div class="navbar-spacer"></div>

            <!-- Menu -->
            <ul class="nav navbar-nav d-none d-md-flex">
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">Llewelyn Dale Sayson</a>
                </li>
            </ul>

            <!-- Menu -->
            <ul class="nav navbar-nav">
                <!-- User dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" data-toggle="dropdown" href="#" role="button"><img src="../assets/images/people/50/guy-6.jpg" alt="Avatar" class="rounded-circle" width="40"></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="profile-edit.php">
                            <i class="material-icons">edit</i> Edit Account
                        </a>
                        <a class="dropdown-item" href="profile.php">
                            <i class="material-icons">person</i> Public Profile
                        </a>
                        <a class="dropdown-item" href="logout.php">
                            <i class="material-icons">lock</i> Logout
                        </a>
                    </div>
                </li>
                <!-- // END User dropdown -->
            </ul>
        </nav>
        <!-- // END Navbar -->