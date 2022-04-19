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
                    <h3 class="card-title">Manage All Teachings</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form method="post" action="Admin/reg_teach_all">
                        <label class="form-group">Full-Name</label>
                        <div class="form-group">
                            <input type="text" name="postedby" class="form-control"
                                placeholder="Please input Full Name *" value="" required="required" />
                        </div>
                        <label class="form-group">Images</label>
                        <div class="form-group">
                            <input type="file" name="coverpic" class="form-control" accept="image/*"
                                placeholder="Please input Full Name *" value="" required="required" />
                        </div>
                        <label class="form-group">Contents</label>
                        <div class="form-group">
                            <input type="text" name="postcon" class="form-control"
                                placeholder="Please input Full Name *" value="" required="required" />
                        </div>
                        <label class="form-group">catagoty</label>
                        <div class="form-group">
                            <select name="cata" class="form-control" required="required">
                                <?php 
                                            foreach ($cata as $pack)
                                             {  
                                              ?>
                                <option class="hidden" value="<?php echo $pack->cata_name?>">
                                    <?php echo $pack->cata_name?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
                        <button class="button-success">Register</button>
                    </form>
                </div>
            </div>
    </section>
    <section class="content" style="margin-left: 2px;">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">List of All Teachings</h3>
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
                                <th>No</th>
                                <th>Full-Name</th>
                                <th>Date-Published</th>
                                <th>Teach-Catagory</th>
                                <th>Catagory</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $i=1; 
                        $mydate=date("Y-m-d");
                         foreach ($teach as $org) {?>
                            <tr class="odd">
                                <td class="dtr-control sorting_1" tabindex="0"><?php echo $i?></td>
                                <td><?php echo $org->posted_by;?></td>
                                <td><?php echo $org->date;?></td>
                                <td><?php echo $org->teach_catagory;?></td>
                                <td><?php echo $org->catagory;?></td>
                                <td><?php 
                                                if ($org->date <=  $mydate)
                                                 {
                                                    echo("<button type='button' class='btn btn-block bg-gradient-danger'>Expired</button>");
                                                }else
                                                {
                                                    echo("<button type='button' class='btn btn-block bg-gradient-info'>Active</button>");
                                                }
                                                
                                                
                                                ;?></td>
                                <td><?php 
                                                if ($org->statu ==  'active')
                                                 {
                                                    echo("
                                                    <select>
                                                    <option></option>
                                                    <option>Passive</option>
                                                    <option>Delete</option>
                                                    </select>
                                                    ");
                                                }else
                                                {
                                                    echo("
                                                    <select>
                                                    <option></option>
                                                    <option>Active</option>
                                                    <option>Delete</option>
                                                    </select>
                                                    ");
                                                }
                                                
                                                
                                                ;?></td>

                            </tr>

                            <?php 
                                        $i=$i+1;
                                        } ?>
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