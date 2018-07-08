<?php 
    include('includes/header.php'); 
    include('includes/navbar.php'); 
    $id = $_GET['id'];
    $conn1 = $connect->query("SELECT * FROM subjects 
     INNER JOIN teachers ON subjects.subject_teacherID = teachers.teacher_ID 
     WHERE subjects.subject_ID = '$id'");
     $row1 = $conn1->fetch_assoc();
?>
	<div class="mdk-drawer-layout js-mdk-drawer-layout flex" data-fullbleed data-push data-has-scrolling-region>
            <div class="mdk-drawer-layout__content mdk-drawer-layout__content--scrollable">
                <div class="container-fluid">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="instructor-dashboard.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="instructor-courses.html">Courses</a></li>
                        <li class="breadcrumb-item active">Course Name</li>
                    </ol>
                    <div class="row">
                        <div class="col-md-12">
                            <form method="post" action="actions/editSubject.php">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="media col-sm-10">
                                                <h4 class="card-title">Course Information</h4>
                                            </div>
                                            <div class="media col-sm-2">
                                                <div class="media-right media-middle">
                                                    <button name="submit" class="btn btn-success">Update Course</submit>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <input type="hidden" name="subjectID" value="<?php echo $row1['subject_ID']; ?>">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control" name="subjectName" placeholder="Write a title" 
                                            value="<?php echo $row1['subject_Name']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="details">Description</label>
                                            <textarea class="form-control" name="subjectDescription"><?php echo $row1['subject_Description']; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="card">
                                <div class="card-header">
                                	<div class="row">
                                		<div class="media col-sm-10">
	                                    	<h4 class="card-title">Lessons</h4>
	                                    </div>
	                                    <div class="media col-sm-2">
			                                    <div class="media-right media-middle">
			                                     	<a href="addLesson.php?id=<?php echo $id; ?>" class="btn btn-success">Add Lesson <i class="material-icons">add</i></a>
			                                    </div>
	                                	</div>
	                                </div>
                                </div>
                                <div class="card-body">   
                                    <div class="nestable" id="nestable-handles-primary">
                                        <ul class="nestable-list">
                                        <?php 
                                            $conn = $connect->query("SELECT * FROM lessons INNER JOIN subjects
                                                ON lessons.lesson_subjectID = subjects.subject_ID
                                                WHERE lessons.lesson_subjectID = '$id'");
                                             while ( $row = $conn->fetch_assoc()) { ?>
                                            <li class="nestable-item nestable-item-handle" data-id="2">
                                                <div class="media">
                                                    <div class="media-left media-middle">
                                                        <img src="assets/images/vuejs.png" alt="" width="100" class="rounded">
                                                    </div>
                                                    <div class="media-body media-middle">
                                                        <h5 class="card-title h6 mb-0">
                                                            <a href="lesson.php?sid=<?php echo $row['subject_ID']; ?>&&id=<?php echo $row['lesson_ID']; ?>">
                                                                <?php echo $row['lesson_name']; ?>
                                                            </a>
                                                        </h5>
                                                        <small class="text-muted">updated 1 month ago</small>
                                                    </div>
                                                    <div class="media-right media-middle">
                                                        <a href="lesson.php?sid=<?php echo $row['subject_ID']; ?>&&id=<?php echo $row['lesson_ID']; ?>" class="btn btn-white btn-sm"><i class="material-icons">edit</i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <br>
                                        <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php 
	include('includes/sidebar.php'); 
	include('includes/footer.php'); 
?>