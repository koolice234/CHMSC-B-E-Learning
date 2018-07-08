<body>
<?php session_start(); 
    $id = $_SESSION['session_id'];
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $dbname = "elearningdb";


$connect = new mysqli($localhost, $username, $password, $dbname);
if($connect->connect_error) {
	die("Connection Failed : " . $connect->connect_error);
}
     $conn = $connect->query("SELECT * FROM teachers 
     INNER JOIN users ON teachers.teacher_userID = users.user_ID 
     INNER JOIN images ON teachers.teacher_img = images.imageid WHERE teacher_ID = '$id'");
     $row = $conn->fetch_assoc();
?>
    <div class="d-flex flex-column h-100">
        <!-- Navbar -->
        <nav class="navbar navbar-expand navbar-dark bg-primary m-0">

            <!-- Brand -->
            <a href="subjects.php" class="navbar-brand"><i class="material-icons">school</i> CHMSC-B E-Learning</a>

            <div class="navbar-spacer"></div>

            <ul class="nav navbar-nav d-none d-md-flex">
                <li class="nav-item">
                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons" style="color: white;">import_contacts</i><a class="nav-link" href="subjects.php">Courses</a>
                </li>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <li class="nav-item">
                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons" style="color: white;">person</i><a class="nav-link" href="classRecords.php">Class Records</a>
                </li>
            </ul>

            <!-- Menu -->
            <ul class="nav navbar-nav">
                <!-- User dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" data-toggle="dropdown" href="#" role="button"><img src="<?php echo $row['img_location']; ?>" alt="Avatar" class="rounded-circle" style="width: 40px; height: 40px;"></a>
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