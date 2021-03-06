<?php 
    include('includes/header.php'); 
    include('includes/navbar.php'); 
?>	
	        <div class="mdk-drawer-layout js-mdk-drawer-layout flex" data-fullbleed data-push data-has-scrolling-region>
            <div class="mdk-drawer-layout__content mdk-drawer-layout__content--scrollable">
                <div class="container-fluid">

                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="instructor-dashboard.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="instructor-quizzes.html">Quiz Manager</a></li>
                        <li class="breadcrumb-item active">Quiz Review</li>
                    </ol>
                    <div class="page-heading">
                        <div class="media">
                            <div class="media-left media-middle">
                                <img src="assets/images/vuejs.png" alt="" width="80" class="rounded">
                            </div>
                            <div class="media-body media-middle">
                                <h4 class="mb-0">Vue.js Deploy Quiz</h4>
                                <span class="text-muted">submited by</span> <a href="instructor-profile.html">Adrian Demian</a>
                            </div>
                            <div class="media-right">
                                <div style="width:80px" class="text-right">
                                    <a href="#" class="btn btn-white btn-sm"><i class="material-icons">keyboard_arrow_left</i></a>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="material-icons">keyboard_arrow_right</i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#first" data-toggle="tab">Review</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#second" data-toggle="tab">All Questions</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="first">
                                <ul class="list-group mb-0 list-group-fit">
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-8">

                                                <strong>#9. What are the first three steps?</strong>
                                                </p>
                                                <small class="text-muted">ANSWER:</small>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati temporibus blanditiis iste itaque deleniti minima.
                                                </p>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="row mb-1">
                                                    <div class="col-md-3 col-form-label">
                                                        <strong>Score:</strong>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="media" style="padding-top: 5px;">
                                                            <div class="media-body media-middle">
                                                                <div id="slider-range"></div>
                                                            </div>
                                                            <div class="media-right media-middle">
                                                                <h4 class="mb-0"><strong id="slider-range-value"></strong></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <textarea class="form-control" rows="2" placeholder="Write comment"></textarea>
                                                </div>
                                                <a href="#" class="btn btn-success float-right">Save review <i class="material-icons btn__icon--right">check</i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#"><strong>#12.</strong> How do you deploy?</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane" id="second">
                                <ul class="list-group mb-0 list-group-fit">
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="text-muted-light">1.</div>
                                            </div>
                                            <div class="media-body">Installation</div>
                                            <div class="media-right"><strong class="text-primary">8</strong></div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="text-muted-light">2.</div>
                                            </div>
                                            <div class="media-body">The MVC architectural pattern</div>
                                            <div class="media-right"><strong class="text-primary">7</strong></div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="text-muted-light">3.</div>
                                            </div>
                                            <div class="media-body">Database Models</div>
                                            <div class="media-right"><strong class="text-primary">9</strong></div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="text-muted-light">4.</div>
                                            </div>
                                            <div class="media-body">Database Access</div>
                                            <div class="media-right"><strong class="text-primary">10</strong></div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="text-muted-light">5.</div>
                                            </div>
                                            <div class="media-body"><a href="#">Eloquent Basics</a></div>
                                            <div class="media-right"><span class="badge badge-success ">Pending Review</span></div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="text-muted-light">6.</div>
                                            </div>
                                            <div class="media-body">Take Quiz</div>
                                            <div class="media-right"><strong class="text-primary">12</strong></div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="card card-footer">
                                    Total Score: <span class="h5 text-primary"><strong>340</strong></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h4 class="page-heading">Review History</h4>
                    <div class="table-responsive">
                        <table class="table table-sm table-middle">
                            <thead>
                                <tr>
                                    <th width="120">Submitted</th>
                                    <th>Student</th>
                                    <th class="text-center">Score</th>
                                    <th>Reviewed</th>
                                    <th width="80"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span class="badge badge-light ">Feb 17th, 2016</span></td>
                                    <td><a href="#">John Smith</a></td>
                                    <td class="text-center"><span class="text-muted">n/a</span></td>
                                    <td><span class="text-muted">PENDING</span></td>
                                    <td class="right"><a href="#" class="btn btn-sm btn-primary">Review</a></td>
                                </tr>
                                <tr>
                                    <td><span class="badge badge-light ">Feb 17th, 2016</span></td>
                                    <td><a href="#">Andrew Brain</a>
                                    </td>
                                    <td class="text-center">512</td>
                                    <td class="text-muted">Feb 17th, 2016 by <a href="instructor-profile.html">Adrian D.</a></td>
                                    <td class="right"><a href="#" class="btn btn-sm btn-default">Results</a></td>
                                </tr>
                                <tr>
                                    <td><span class="badge badge-light ">Feb 17th, 2016</span></td>
                                    <td><a href="#">Samantha Doe</a></td>
                                    <td class="text-center">123</td>
                                    <td class="text-muted">Feb 17th, 2016 by <a href="instructor-profile.html">Adrian D.</a></td>
                                    <td class="right"><a href="#" class="btn btn-sm btn-default">Results</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
<?php 
	include('includes/sidebar.php');
	include('includes/footer.php'); 
?>