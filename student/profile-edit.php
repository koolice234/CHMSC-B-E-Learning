
<?php 
    include('includes/header.php'); 
    include('includes/navbar.php'); 
?>

        <div class="mdk-drawer-layout js-mdk-drawer-layout flex" data-fullbleed data-push data-has-scrolling-region>
            <div class="mdk-drawer-layout__content mdk-drawer-layout__content--scrollable">
                <div class="container-fluid">

                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="instructor-dashboard.html">Home</a></li>
                        <li class="breadcrumb-item active">Edit Account</li>
                    </ol>

                    <div class="card">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#first" data-toggle="tab">Account</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#second" data-toggle="tab">Billing</a>
                            </li>
                        </ul>
                        <div class="tab-content card-body">
                            <div class="tab-pane active" id="first">
                                <form action="#" class="form-horizontal">
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
                  <input type="file" id="file">
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
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" placeholder="First Name" value="Adrian">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" placeholder="Last Name" value="Demian">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon1">
                <i class="material-icons md-18 text-muted">mail</i>
              </span>
                                                <input type="text" class="form-control" placeholder="Email Address" value="contact@mosaicpro.biz" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="website" class="col-sm-3 col-form-label">Website</label>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon2">
                <i class="material-icons md-18 text-muted">language</i>
              </span>
                                                <input type="text" class="form-control" placeholder="www." value="learning.themekit.io">
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
                                                <input type="text" class="form-control" placeholder="Enter new password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-8 offset-sm-3">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#" class="btn btn-success">Save Changes</a>
                                                </div>
                                                <div class="media-body media-middle pl-1">
                                                    <label class="custom-control custom-checkbox m-0">
                  <input type="checkbox" class="custom-control-input" checked>
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-description">Subscribe to Newsletter</span>
                </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane" id="second">
                                <form action="#" class="form-horizontal">
                                    <div class="form-group row">
                                        <label for="name_on_invoice" class="col-sm-3 col-form-label">Name on Invoice</label>
                                        <div class="col-sm-6 col-md-4">
                                            <input type="text" class="form-control" value="Adrian Demian">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="address" class="col-sm-3 col-form-label">Address</label>
                                        <div class="col-sm-6 col-md-4">
                                            <input type="text" class="form-control" value="Sunny Street, 21, Miami, Florida">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="country" class="col-sm-3 col-form-label">Country</label>
                                        <div class="col-sm-6 col-md-4">
                                            <select class="custom-control custom-select form-control">
              <option value="1" selected>USA</option>
              <option value="2">India</option>
              <option value="3">United Kingdom</option>
            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 col-md-4 offset-sm-3">
                                            <a href="#" class="btn btn-success"> Update Billing</a>
                                        </div>
                                    </div>
                                </form>
                                <div class="card mt-2">
                                    <div class="card-header bg-white">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <h4 class="card-title">Payment Info</h4>
                                            </div>
                                            <div class="media-right">
                                                <a href="#" class="btn btn-sm btn-outline-primary"><i class="material-icons">add</i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="card-footer p-0 list-group list-group-fit">
                                        <li class="list-group-item active">
                                            <div class="media align-items-center">
                                                <div class="media-left">
                                                    <span class="btn btn-primary btn-circle"><i class="material-icons">credit_card</i></span>
                                                </div>
                                                <div class="media-body">
                                                    <p class="mb-0">**** **** **** 2422</p>
                                                    <small>Updated on 12/02/2016</small>
                                                </div>
                                                <div class="media-right">
                                                    <a href="#" class="btn btn-primary btn-sm">
                  <i class="material-icons btn__icon--left">edit</i> EDIT
                </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media align-items-center">
                                                <div class="media-left">
                                                    <span class="btn btn-white btn-circle"><i class="material-icons">credit_card</i></span>
                                                </div>
                                                <div class="media-body">
                                                    <p class="mb-0">**** **** **** 6321</p>
                                                    <small class="text-muted">Updated on 11/01/2016</small>
                                                </div>
                                                <div class="media-right">
                                                    <a href="#" class="btn btn-white btn-sm">
                  <i class="material-icons btn__icon--left">edit</i> EDIT
                </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
<?php include('includes/sidebar.php'); ?>
<?php include('includes/footer.php'); ?>