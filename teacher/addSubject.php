<?php 
    include('includes/header.php'); 
    include('includes/navbar.php'); 
?>
	<div class="mdk-drawer-layout js-mdk-drawer-layout flex" data-fullbleed data-push data-has-scrolling-region>
            <div class="mdk-drawer-layout__content mdk-drawer-layout__content--scrollable">
                <div class="container-fluid">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="instructor-dashboard.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="instructor-courses.html">Courses</a></li>
                        <li class="breadcrumb-item active">Add Course</li>
                    </ol>
                    <div class="row">
                        <div class="col-md-12">
                            <form method="post" action="actions/addSubject.php">
                                <div class="card">
                                    <div class="card-header">
                                    <div class="row">
                                            <div class="media col-sm-10">
                                                <h4 class="card-title">Course Details</h4>
                                            </div>
                                            <div class="media col-sm-2">
                                                    <div class="media-right media-middle">
                                                        <button class="btn btn-success" name="submit">
                                                        Add Course <i class="material-icons">add</i></button>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control" placeholder="Write a title" Name="course_name">
                                        </div>
                                        <div class="form-group">
                                            <label for="details">Description</label>
                                            <textarea class="form-control" style="height: 200px" name="course_description"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<?php 
	include('includes/sidebar.php'); 
	include('includes/footer.php'); 
?>