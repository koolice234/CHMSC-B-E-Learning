<?php 
    include('includes/header.php'); 
    include('includes/navbar.php');
    include('../config.php'); 
    $id = $_GET['id'];
    $sid = $_GET['sid'];
	$conn = $connect->query("SELECT * FROM lessons WHERE lesson_ID = '$id'");
    $row = $conn->fetch_assoc();
?>
	<div class="mdk-drawer-layout js-mdk-drawer-layout flex" data-fullbleed data-push data-has-scrolling-region>
            <div class="mdk-drawer-layout__content mdk-drawer-layout__content--scrollable">
                <div class="container-fluid">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="instructor-dashboard.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="instructor-courses.html">Courses</a></li>
                        <li class="breadcrumb-item active">Lesson Name</li>
                    </ol>
                    <div class="row">
                        <div class="col-md-12">
                        	<form method="post" action="actions/editLesson.php">
	                            <div class="card">
	                            	<div class="card-header">
		                                <div class="row">
	                                        <div class="media col-sm-9">
	                                            <h4 class="card-title">Lesson Details</h4>
	                                        </div>
	                                        <div class="media col-sm-3">
	                                                <div class="media-right media-middle">
	                                                    <button class="btn btn-success" name="submit">
	                                                    Update Lesson <i class="material-icons">edit</i></button>
	                                                </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="card-body">
	                                    <div class="form-group">
	                                    	<input type="hidden" name="subjectID" value="<?php echo $sid;?>">
	                                    	<input type="hidden" name="lessonID" value="<?php echo $row['lesson_ID'];?>">
	                                        <label for="title">Title</label>
	                                        <input type="text" class="form-control" placeholder="Write a title" name="lessonName" value="<?php echo $row['lesson_name']; ?>">
	                                    </div>
	                                    <div class="form-group">
	                                        <label for="details">Description</label>
	                                        <textarea class="form-control" name="lessonDescription"><?php echo $row['lesson_description']; ?></textarea>
	                                    </div>
	                                </div>
	                            </div>
                           </form>
                           	<div class="row">
                           		<div class="col-md-6">
		                            <div class="card">
		                                <div class="card-header">
		                                	<div class="row">
		                                		<div class="media col-sm-8">
			                                    	<h4 class="card-title">Files</h4>
			                                    </div>
			                                    <div class="media col-sm-4">
					                                    <div class="media-right media-middle">
					                                     	<a href="addFile.php?id=<?php echo $id; ?>&&sid=<?php echo $sid; ?>" class="btn btn-success">Add Files <i class="material-icons">add</i></a>
					                                    </div>
			                                	</div>
			                                </div>
		                                </div>
		                                <?php $conn = $connect->query("SELECT * FROM files WHERE file_lessonID = '$id'");?>
		                                <div class="card-body"> 
		                                    <div class="nestable" id="nestable-handles-primary">
		                                        <ul class="nestable-list">
		                                        	<?php while ($row1 = $conn->fetch_assoc()) { ?>
		                                        	<li class="nestable-item nestable-item-handle" data-id="2">
		                                                <div class="media">
		                                                    <div class="media-left media-middle">
		                                                        <img src="assets/images/vuejs.png" alt="" width="100" class="rounded">
		                                                    </div>
		                                                    <div class="media-body media-middle">
		                                                        <h5 class="card-title h6 mb-0">
		                                                            <a href="actions/downloadFile.php?file=<?php echo urlencode($row1['file_location']); ?>">
		                                                            	<?php echo $row1['file_title']; ?>
                                                            		</a>
		                                                        </h5>
		                                                        <small class="text-muted">uploaded on Date</small>

		                                                    </div>
		                                                    <div class="media-right media-middle">
		                                                        <a href="actions/downloadFile.php?file=<?php echo urlencode($row1['file_location']); ?>" class="btn btn-white btn-sm"><i class="material-icons">get_app</i></a>
		                                                        <a href="actions/deleteFile.php?file=<?php echo urlencode($row1['file_location']); ?>&&id=<?php echo $id; ?>&&sid=<?php echo $sid; ?>&&fileID=<?php echo $row1['file_ID']; ?>" class="btn btn-white btn-sm"><i class="material-icons">delete</i></a>
		                                                    </div>
		                                            </li>
	                                             	<br>
	                                        		<?php } ?>
		                                           
		                                        </ul>
		                                    </div>
		                                </div>
		                            </div>
                    			</div>
                    			<div class="col-md-6">
		                            <div class="card">
		                                <div class="card-header">
		                                	<div class="row">
		                                		<div class="media col-sm-8">
			                                    	<h4 class="card-title">Quizzes</h4>
			                                    </div>
			                                    <div class="media col-sm-4">
					                                    <div class="media-right media-middle">
					                                     	<a href="instructor-lesson-add.html" class="btn btn-success">Add Quiz <i class="material-icons">add</i></a>
					                                    </div>
			                                	</div>
			                                </div>
		                                </div>
		                                <div class="card-body">   
		                                    <div class="nestable" id="nestable-handles-primary">
		                                        <ul class="nestable-list">
		                                            <li class="nestable-item nestable-item-handle" data-id="2">
		                                                <div class="media">
		                                                    <div class="media-left media-middle">
		                                                        <img src="assets/images/vuejs.png" alt="" width="100" class="rounded">
		                                                    </div>
		                                                    <div class="media-body media-middle">
		                                                        <h5 class="card-title h6 mb-0">
		                                                            <a href="quiz.php">Quiz 1</a>
		                                                        </h5>
		                                                    </div>
		                                                    <div class="media-right media-middle">
		                                                        <a href="quiz.php" class="btn btn-white btn-sm"><i class="material-icons">edit</i></a>
		                                                    </div>
		                                            </li>
		                                            <br>
		                                            <li class="nestable-item nestable-item-handle" data-id="1">
		                                                    <div class="media">
		                                                        <div class="media-left media-middle">
		                                                            <img src="assets/images/nodejs.png" alt="" width="100" class="rounded">
		                                                        </div>
		                                                        <div class="media-body media-middle">
		                                                            <h4 class="card-title h6 mb-0">
		                                                                <a href="quiz.php">Quiz 2</a>
		                                                            </h4>
		                                                        </div>
		                                                        <div class="media-right media-middle">
		                                                            <a href="quiz.php" class="btn btn-white btn-sm"><i class="material-icons">edit</i></a>
		                                                        </div>
		                                                    </div>
		                                            </li>
		                                            <br>
		                                            <li class="nestable-item nestable-item-handle" data-id="2">
		                                                    <div class="media">
		                                                        <div class="media-left">
		                                                            <img src="assets/images/gulp.png" alt="" width="100" class="rounded">
		                                                        </div>
		                                                        <div class="media-body">
		                                                            <h4 class="card-title h6 mb-0">
		                                                                <a href="quiz.php">Quiz 3</a>
		                                                            </h4>
		                                                        </div>
		                                                        <div class="media-right media-middle">
		                                                            <a href="quiz.php" class="btn btn-white btn-sm"><i class="material-icons">edit</i></a>
		                                                        </div>
		                                                    </div>
		                                            </li>
		                                        </ul>
		                                    </div>
		                                </div>
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