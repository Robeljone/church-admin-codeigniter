<?php include_once('includes/header.php') ?>
<?php include_once('includes/sidebar.php') ?>
<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active">Manage Day Teach</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <section class="content" style="margin-left: 2px;">
                <div class="container-fluid">
                    <!-- SELECT2 EXAMPLE -->
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Manage Day Teachings</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <label class="form-group">Full-Name</label>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Please input Full Name *" value=""
                                    required="required" />
                            </div>
                            <label class="form-group">Date-Published</label>
                            <div class="form-group">
                                <input type="date" class="form-control" placeholder="Please input Full Name *" value=""
                                    required="required" />
                            </div>
                            <label class="form-group">Images</label>
                            <div class="form-group">
                                <input type="file" class="form-control" accept="image/*" placeholder="Please input Full Name *" value=""
                                    required="required" />
                            </div>
                            <label class="form-group">catagoty</label>
                            <div class="form-group">
                               <select class="form-control">
                                   <option>Catagory one</option>
                                   <option>Catagory two</option>
                                   <option>Catagory three</option>
                               </select>
                            </div>
                        </div>
                    </div>
            </section>
            <section class="content" style="margin-left: 2px;">
                <div class="container-fluid">
                    <!-- SELECT2 EXAMPLE -->
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">List of Day Teachings</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Full-Name</th>
                                        <th>Date-Published</th>
                                        <th>Catagory</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Full-Name</th>
                                        <th>Date-Published</th>
                                        <th>Catagory</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
            </section>
        </div>
    </div>
    <?php include_once('includes/footer.php') ?>
    