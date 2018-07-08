<?php 
    include('includes/header.php'); 
    include('includes/navbar.php'); 
?>

        <div class="mdk-drawer-layout js-mdk-drawer-layout flex" data-fullbleed data-push data-has-scrolling-region>
            <div class="mdk-drawer-layout__content mdk-drawer-layout__content--scrollable">
                <div class="container-fluid">

                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="student-dashboard.html">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="card card-stats-primary">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="media-left">
                                    <i class="material-icons text-muted-light">person_outline</i>
                                </div>
                                <div class="media-body">
                                    Welcome, <strong>Llewelyn!</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header bg-white">
                                    <div class="media">
                                        <div class="media-body">
                                            <h4 class="card-title">Subjects</h4>
                                            <p class="card-subtitle">Your recent courses</p>
                                        </div>
                                        <div class="media-right">
                                            <a class="btn btn-sm btn-primary" href="student-my-courses.html">My Subjects</a>
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-group list-group-fit mb-0">
                                    <li class="list-group-item">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <a href="student-take-course.html">Basics of HTML</a>
                                            </div>
                                            <div class="media-right">
                                                <div class="text-center">
                                                    <div class="mb-1">
                                                        <span class="badge badge-pill badge-primary">25%</span>
                                                    </div>
                                                    <div class="progress" style="width: 100px;">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <a href="student-take-course.html">Angular in Steps</a>
                                            </div>
                                            <div class="media-right">
                                                <div class="text-center">
                                                    <div class="mb-1">
                                                        <span class="badge badge-pill badge-success">100%</span>
                                                    </div>
                                                    <div class="progress" style="width: 100px;">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <a href="student-take-course.html">Bootstrap Foundations</a>
                                            </div>
                                            <div class="media-right">
                                                <div class="text-center">
                                                    <div class="mb-1">
                                                        <span class="badge badge-pill badge-warning">80%</span>
                                                    </div>
                                                    <div class="progress" style="width: 100px;">
                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="card">
                                <div class="card-header bg-white">
                                    <div class="media">
                                        <div class="media-body">
                                            <h4 class="card-title">Quizzes</h4>
                                            <p class="card-subtitle">Your Performance</p>
                                        </div>
                                        <div class="media-right">
                                            <a class="btn btn-sm btn-primary" href="#">Quiz results</a>
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-group list-group-fit mb-0">
                                    <li class="list-group-item">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <a href="student-quiz-results.html">Title of quiz goes here?</a><br>
                                                <small>Course: <a href="student-take-course.html">Basics of HTML</a></small>
                                            </div>
                                            <div class="media-right text-center">
                                                <h4 class="mb-0">5.8</h4>
                                                <span class="text-muted-light">Good</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <a href="student-quiz-results.html">Directives &amp; Routing</a><br>
                                                <small>Course: <a href="student-take-course.html">Angular in Steps</a></small>
                                            </div>
                                            <div class="media-right text-center">
                                                <h4 class="mb-0 text-success">9.8</h4>
                                                <span class="text-muted-light">Great</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <a href="student-take-quiz.html">Responsive &amp; Retina</a><br>
                                                <small>Course: <a href="student-take-course.html">Bootstrap Foundations</a></small>
                                            </div>
                                            <div class="media-right text-center">
                                                <h4 class="mb-0 text-danger">2.8</h4>
                                                <span class="text-muted-light">Failed</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
<?php include('includes/sidebar.php'); ?>
<?php include('includes/footer.php'); ?>