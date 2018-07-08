<?php include('includes/header.php'); ?>

<body class="login">


    <div class="row">
        <div class="col-sm-8 col-md-4 col-lg-4 mx-auto">
            <div class="text-center m-2">
                <div class="icon-block rounded-circle">
                    <i class="material-icons align-middle md-36 text-muted">edit</i>
                </div>
            </div>
            <div class="card">
                <div class="card-header bg-white text-center">
                    <h4 class="card-title">Sign Up</h4>
                    <p class="card-subtitle">Create a new account</p>
                </div>
                <div class="card-body">
                    <form action="registerAction.php" method="post">
                        <center>
                        <div class="radio">
                            <input type="radio" name="type" id="optionsRadios1" value="student" checked>Student
                            <input type="radio" name="type" id="optionsRadios1" value="teacher">Teacher
                        </div>
                        </center>
                        <div class="form-group">
                            <input type="text" name="fullName"class="form-control" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="password" name="passwordConfirm" class="form-control" placeholder="Confirm Password">
                        </div>
                        <p class="text-center">
                            <button type="submit" name="register" class="btn btn-primary btn-block">
                              <span class="btn-block-text">Sign Up</span>
                            </button>
                        </p>
                        <div class="text-center">Already signed up? <a href="index.php">Log in</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php include('includes/footer.php'); ?>