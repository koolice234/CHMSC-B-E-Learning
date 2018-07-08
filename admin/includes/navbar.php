<body>

    <div class="d-flex flex-column h-100">
        <!-- Navbar -->
        <nav class="navbar navbar-expand navbar-dark bg-primary m-0">

            <!-- Brand -->
            <a href="dashboard.php" class="navbar-brand"><i class="material-icons">school</i> CHMSC-B E-Learning</a>
            <div class="navbar-spacer"></div>

            <ul class="nav navbar-nav d-none d-md-flex">
                <li class="nav-item">
                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons" style="color: white;">person</i><a class="nav-link" href="teachers.php">Teachers</a>
                </li>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <li class="nav-item">
                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons" style="color: white;">import_contacts</i><a class="nav-link" href="subjects.php">Subjects</a>
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
                        <a class="dropdown-item" href="logout.php">
                            <i class="material-icons">lock</i> Logout
                        </a>
                    </div>
                </li>
                <!-- // END User dropdown -->
            </ul>
        </nav>
        <!-- // END Navbar -->