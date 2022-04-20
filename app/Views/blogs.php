<?php include_once('includes/header.php') ?>
<?php include_once('includes/sidebar.php') ?>
<!-- Content Header (Page header) -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Manage Blogs</li>
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
                    <h3 class="card-title">Manage Blogs</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <?php if(isset($_SESSION["errfor"])){ echo ("<div class='alert alert-danger' role='alert' style='text-align:center;  max-width: 500px;
100%;'>".$_SESSION["errfor"]."</div>"); unset($_SESSION["errfor"]);}?>
                    <?php if(isset($_SESSION["sufor"])){ echo ("<div class='alert alert-success' role='alert'  style='text-align:center;  max-width: 500px;
100%;'>".$_SESSION["sufor"]."</div>");unset($_SESSION["sufor"]); }?>
                    <form method="post" action="Admin/uploadvideo">
                        <label class="form-group">Full-Name</label>
                        <div class="form-group">
                            <input type="text" name="postedby" class="form-control"
                                placeholder="Please input Full Name *" value="" required="required" />
                        </div>
                        <label class="form-group">Title</label>
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" placeholder="Please input Title Here *"
                                value="" required="required" />
                        </div>
                        <label class="form-group">Images</label>
                        <div class="form-group">
                            <input type="file" name="coverpic" class="form-control" accept="image/*"
                                placeholder="Please input file *" value="" required="required" />
                        </div>
                        <label class="form-group">Content</label>
                        <div class="form-group">
                            <textarea class="form-control" name="description">
                              </textarea>
                            <!-- <input type="text"  name="description" class="form-control" placeholder="Please input video description *" value=""
                            required="required" /> -->
                        </div>
                        <button class="primary-button">
                            Register
                        </button>
                </div>
            </div>
    </section>
    <section class="content" style="margin-left: 2px;">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">List of Blogs</h3>
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
                                <th>Num</th>
                                <th>Full-Name</th>
                                <th>Title</th>
                                <th>Date-Published</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Num</th>
                                <th>Full-Name</th>
                                <th>Title</th>
                                <th>Date-Published</th>
                                <th>Status</th>
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