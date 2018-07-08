<?php 
    include('includes/header.php'); 
    include('includes/navbar.php'); 
?>

        <div class="mdk-drawer-layout js-mdk-drawer-layout flex" data-fullbleed data-push data-has-scrolling-region>
            <div class="mdk-drawer-layout__content mdk-drawer-layout__content--scrollable">
                <div class="container-fluid">

                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="instructor-dashboard.html">Home</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>

                    <div class="text-center">
                        <a href="#"><img src="../assets/images/people/110/guy-8.jpg" alt="" class="rounded-circle"></a>
                        <h1 class="h2 mb-0 mt-1">Adrian Demian</h1>
                        <p class="lead text-muted mb-0">Florida, USA</p>
                        <div class="badge badge-primary ">INSTRUCTOR</div>
                        <hr>
                        <h5 class="text-muted">Instructor Rating</h5>
                        <div class="rating">
                            <i class="material-icons text-success">star</i>
                            <i class="material-icons text-success">star</i>
                            <i class="material-icons text-success">star</i>
                            <i class="material-icons text-muted-light">star_border</i>
                            <i class="material-icons text-muted-light">star_border</i>
                        </div>
                    </div>
                    <hr>
                    <h5 class="page-heading text-center text-muted">Courses by Adrian</h5>
                    <div class="card-columns">
                        <div class="card">
                            <div class="card-header bg-white">
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <a href="instructor-take-course.html">
            <img src="../assets/images/vuejs.png" alt="Card image cap" width="100" class="rounded">
          </a>
                                    </div>
                                    <div class="media-body media-middle">
                                        <h4 class="card-title"><a href="instructor-take-course.html">Learn VueJs</a></h4>
                                        <div class="rating">
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star_border</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header bg-white">
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <a href="instructor-take-course.html">
            <img src="../assets/images/nodejs.png" alt="Card image cap" width="100" class="rounded">
          </a>
                                    </div>
                                    <div class="media-body media-middle">
                                        <h4 class="card-title"><a href="instructor-take-course.html">Npm &amp; Gulp Advanced Workflow</a></h4>
                                        <div class="rating">
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star_border</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header bg-white">
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <a href="instructor-take-course.html">
            <img src="../assets/images/github.png" alt="Card image cap" width="100" class="rounded">
          </a>
                                    </div>
                                    <div class="media-body media-middle">
                                        <h4 class="card-title"><a href="instructor-take-course.html">Github Webhooks for Beginners</a></h4>
                                        <div class="rating">
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star_border</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header bg-white">
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <a href="instructor-take-course.html">
            <img src="../assets/images/gulp.png" alt="Card image cap" width="100" class="rounded">
          </a>
                                    </div>
                                    <div class="media-body media-middle">
                                        <h4 class="card-title"><a href="instructor-take-course.html">Gulp &amp; Slush Workflows</a></h4>
                                        <div class="rating">
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star_border</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
<?php include('includes/sidebar.php'); ?>
<?php include('includes/footer.php'); ?>