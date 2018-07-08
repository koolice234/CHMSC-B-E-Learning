
<?php 
    include('includes/header.php'); 
    include('includes/navbar.php'); 
    include('../config.php');
    $id = $_SESSION['session_id'];
    $conn = $connect->query("SELECT * FROM teachers INNER JOIN users ON 
    teachers.teacher_userID = users.user_ID INNER JOIN images ON 
    teachers.teacher_img = images.imageid WHERE teacher_ID = '$id'");
    $row = $conn->fetch_assoc();
    
?>

        <div class="mdk-drawer-layout js-mdk-drawer-layout flex" data-fullbleed data-push data-has-scrolling-region>
            <div class="mdk-drawer-layout__content mdk-drawer-layout__content--scrollable">
                <div class="container-fluid">

                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="instructor-dashboard.html">Home</a></li>
                        <li class="breadcrumb-item active">Edit Account</li>
                    </ol>

                    <div class="card">
                        <div class="tab-content card-body">
                            <div class="tab-pane active" id="first">
                                <form action="actions/editTeacher.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                                <input type="hidden"  name="teacherID"  value="<?php echo $row['teacher_ID']; ?>">
                                    <div class="form-group row">
                                        <label for="avatar" class="col-sm-3 col-form-label">Avatar</label>
                                        <div class="col-sm-9">
                                            <div class="media">
                                                <div class="media-left">
                                                    <div class="icon-block rounded">
                                                        <i class="material-icons text-muted-light md-36">photo</i>
                                                    </div>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <label class="custom-file m-0">
                                            <input type="file" id="file" name="image" value="<?php echo $row['img_location']; ?>">
                                            <span class="custom-file-control"></span>
                                        </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-3 col-form-label">Full Name</label>
                                        <div class="col-sm-8">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control" name="fullName"  value="<?php echo $row['teacher_name']; ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="website" class="col-sm-3 col-form-label">Username</label>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon2">
                                                    <i class="material-icons md-18 text-muted">account_box</i>
                                                </span>
                                                <input type="text" class="form-control" name="username" value="<?php echo $row['user_username']; ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password" class="col-sm-3 col-form-label">Change Password</label>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon3">
                                                    <i class="material-icons md-18 text-muted">lock</i>
                                                </span>
                                                <input type="password" class="form-control" name="password" placeholder="Enter new password" required>
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
<?php include('includes/sidebar.php'); ?>
<?php include('includes/footer.php'); ?>