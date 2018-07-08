<?php include('includes/header.php'); ?>
<body class="login">

    <div class="row">
        <div class="col-sm-8 col-md-4 col-lg-4 mx-auto">
            <div class="text-center m-2">
                <div class="icon-block rounded-circle">
                    <i class="material-icons align-middle md-36 text-muted">lock</i>
                </div>
            </div>
            <div class="card bg-transparent">
                <div class="card-header bg-white text-center">
                    <h4 class="card-title">Login</h4>
                    <p class="card-subtitle">Access your account</p>
                </div>
                <div class="card-body">
                    <form action="loginAction.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="form-group ">
                            <button type="submit" name="login" class="btn btn-primary btn-block">
              <span class="btn-block-text">Login</span>
            </button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center bg-white">
                    Not yet registered? <a href="register.php">Sign up</a>
                </div>
            </div>
        </div>
    </div>

<?php include('includes/footer.php'); ?>