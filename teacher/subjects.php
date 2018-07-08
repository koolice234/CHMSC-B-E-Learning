<?php 
    include('includes/header.php'); 
    include('includes/navbar.php'); 
    include('../config.php');
    $id = $_SESSION['session_id'];
    $conn = $connect->query("SELECT * FROM teachers 
    INNER JOIN users ON teachers.teacher_userID = users.user_ID 
    INNER JOIN images ON teachers.teacher_img = images.imageid 
    INNER JOIN subjects ON teachers.teacher_ID = subjects.subject_teacherID 
    WHERE teacher_ID = '$id' AND subjects.subject_confirmation = '1'");    
?>
        <div class="mdk-drawer-layout js-mdk-drawer-layout flex" data-fullbleed data-push data-has-scrolling-region>
            <div class="mdk-drawer-layout__content mdk-drawer-layout__content--scrollable">
                <div class="container-fluid">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="instructor-dashboard.html">Home</a></li>
                        <li class="breadcrumb-item active">Courses</li>
                    </ol>
                    <div class="row">
                        <div class="media col-sm-10">
                            <h4 class="page-heading h2">Course Details</h4>
                        </div>
                        <div class="media col-sm-2">
                                <div class="media-right media-middle">
                                     <a href="addSubject.php"><button class="btn btn-success" name="submit">
                                    Add Course </button></a>
                                </div>
                        </div>
                    </div>
                    <?php while($row = $conn->fetch_assoc()){ ?>
                    <div class="card-columns">
                        <div class="card">
                            <div class="card-header bg-white">
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <a href="subject.php?id=<?php echo $row['subject_ID']; ?>">
                                            <img src="../assets/images/vuejs.png" alt="Card image cap" width="100" class="rounded">  
                                        </a>
                                    </div>
                                    <div class="media-body media-middle">
                                        <h4 class="card-title">
                                            <a href="subject.php?id=<?php echo $row['subject_ID']; ?>">
                                                <?php echo $row['subject_Name']; ?>    
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
<?php include('includes/sidebar.php'); ?>
<?php include('includes/footer.php'); ?>