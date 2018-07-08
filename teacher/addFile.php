<?php 
    include('includes/header.php'); 
    include('includes/navbar.php');
    include('../config.php'); 
    $id = $_GET['id'];
    $sid = $_GET['sid'];
?>
	<div class="mdk-drawer-layout js-mdk-drawer-layout flex" data-fullbleed data-push data-has-scrolling-region>
            <div class="mdk-drawer-layout__content mdk-drawer-layout__content--scrollable">
                <div class="container-fluid">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="instructor-dashboard.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="instructor-courses.html">Courses</a></li>
                        <li class="breadcrumb-item active">Lesson Name</li>
                        <li class="breadcrumb-item active">Add File</li>
                    </ol>
                  <div class="card">
                        <div class="tab-content card-body">
                            <div class="tab-pane active" id="first">
                                <form action="actions/addFile.php " method="post" class="form-horizontal" enctype="multipart/form-data">                                    
                                	<div class="form-group row">
                                		<input type="hidden" name="id" value="<?php echo $id; ?>">
                                		<input type="hidden" name="sid" value="<?php echo $sid; ?>">
                                        <label for="avatar" class="col-sm-3 col-form-label">Upload File</label>
                                        <div class="col-sm-9">
                                            <div class="media">
                                                <div class="media-body media-middle">
                                                    <label class="custom-file m-0">
                                            			<input type="file" id="file" name="file">
                                            			<span class="custom-file-control"></span>
                                        			</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-3 col-form-label">File Name</label>
                                        <div class="col-sm-8">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control" name="title" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-8 offset-sm-3">
                                            <div class="media">
                                                <div class="media-left">
                                                    <button name="submit"  class="btn btn-success">Save Changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php 
	include('includes/sidebar.php');
	include('includes/footer.php'); 
?>