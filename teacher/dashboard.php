<?php 
    include('includes/header.php'); 
    include('includes/navbar.php'); 
?>

        <div class="mdk-drawer-layout js-mdk-drawer-layout" data-fullbleed data-push data-has-scrolling-region>
            <div class="mdk-drawer-layout__content mdk-drawer-layout__content--scrollable">
                <div class="container-fluid">

                    <!-- Breadcrumb -->
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                        <li class="breadcrumb-item active">Calendar</li>
                    </ol>

                    <p>
                        <a href="#" class="btn btn-danger btn-rounded-deep" data-toggle="modal" data-target="#myModal"><i class="material-icons">add</i> <span class="icon-text">Add Event</span></a>
                    </p>

                    <!-- Calendar -->
                    <div id="calendar"></div>

                </div>
            </div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                    <h4 class="modal-title" id="myModalLabel">New Event</h4>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Start</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>End</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="details" class="form-control" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-success btn-rounded-deep">Save</button>
                </div>
            </div>
        </div>
    </div>
    
<?php include('includes/sidebar.php');?>
    <!-- Sidebar -->
    <div class="mdk-drawer js-mdk-drawer" data-align="end" id="sidebar-calendar">
        <div class="mdk-drawer__content ls-top-navbar-xs-up">
            <div class="sidebar sidebar-right sidebar-light bg-white o-hidden">
                <div data-simplebar data-simplebar-force-enabled="true">
                    <a href="#" class="calendar-sidebar-header" data-toggle="sidebar" data-target="#sidebar-calendar">Close <i class="material-icons">close</i></a>
                    <div class="sidebar-block">
                        <div class="content"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- // Event Details Sidebar-->
<?php include('includes/footer.php'); ?>
    <!--Add Event Modal -->
    