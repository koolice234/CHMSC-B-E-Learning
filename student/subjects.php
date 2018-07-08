<?php 
    include('includes/header.php'); 
    include('includes/navbar.php'); 
?>

        <div class="mdk-drawer-layout js-mdk-drawer-layout flex" data-fullbleed data-push data-has-scrolling-region>
            <div class="mdk-drawer-layout__content mdk-drawer-layout__content--scrollable">
                <div class="container-fluid">

                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="instructor-dashboard.html">Home</a></li>
                        <li class="breadcrumb-item active">Subjects</li>
                    </ol>
                    <h1 class="page-heading h2">Manage Subjects</h1>
                    <div class="card-columns">
                        <div class="card">
                            <div class="card-header bg-white">
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <a href="instructor-course-edit.html">
                                            <img src="../assets/images/vuejs.png" alt="Card image cap" width="100" class="rounded">  
                                        </a>
                                    </div>
                                    <div class="media-body media-middle">
                                        <h4 class="card-title"><a href="instructor-course-edit.html">Learn VueJs</a></h4>
                                        <span class="badge badge-primary ">$1230</span> <span class="badge badge-light ">34 SALES</span>
                                    </div>
                                    <div class="media-right media-middle">
                                        <a href="instructor-course-edit.html" class="btn btn-sm btn-white">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header bg-white">
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <a href="instructor-course-edit.html">
            <img src="../assets/images/nodejs.png" alt="Card image cap" width="100" class="rounded"> 
          </a>
                                    </div>
                                    <div class="media-body media-middle">
                                        <h4 class="card-title"><a href="instructor-course-edit.html">Npm &amp; Gulp Advanced Workflow</a></h4>
                                        <span class="badge badge-primary ">$421</span> <span class="badge badge-light ">12 SALES</span>
                                    </div>
                                    <div class="media-right media-middle">
                                        <a href="instructor-course-edit.html" class="btn btn-sm btn-white">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header bg-white">
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <a href="instructor-course-edit.html">
            <img src="../assets/images/github.png" alt="Card image cap" width="100" class="rounded"> 
          </a>
                                    </div>
                                    <div class="media-body media-middle">
                                        <h4 class="card-title">
                                            <a href="instructor-course-edit.html">Github Webhooks for Beginners</a>
                                        </h4>
                                        <span class="badge badge-primary ">$2191</span> <span class="badge badge-light ">50 SALES</span>
                                    </div>
                                    <div class="media-right media-middle">
                                        <a href="instructor-course-edit.html" class="btn btn-sm btn-white">Edit</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header bg-white">
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <a href="instructor-course-edit.html">
            <img src="../assets/images/gulp.png" alt="Card image cap" width="100" class="rounded">
          </a>
                                    </div>
                                    <div class="media-body media-middle">
                                        <h4 class="card-title"><a href="instructor-course-edit.html">Gulp & Slush Workflows</a></h4>
                                        <span class="badge badge-primary ">$300</span> <span class="badge badge-light ">5 SALES</span>
                                    </div>
                                    <div class="media-right media-middle">
                                        <a href="instructor-course-edit.html" class="btn btn-sm btn-white">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav class="text-center">
                        <ul class="pagination pagination-sm">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>



<?php include('includes/sidebar.php'); ?>
<?php include('includes/footer.php'); ?>