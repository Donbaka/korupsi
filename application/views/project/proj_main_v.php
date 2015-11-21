
<section class="content-header">
    <h1>
        Project
        <small>Set your projects</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="glyphicon glyphicon-tasks"></i> Home</a></li>
        <li class="active">Project</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Project List</h3>&nbsp&nbsp|&nbsp&nbsp
                    <a href="<?= base_url(); ?>index.php/project/add_project"><button type="button" class="btn btn-primary btn-xs">Add Project</button></a>

                    <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>Proj ID</th>
                            <th>Proj Name</th>
                            <th>Created Date</th>
                            <th>Status</th>
                            <th>Description</th>
                            <th style="width: 13%;">Action</th>
                        </tr>
                        <?php if ($user_prj->num_rows() > 0) foreach ($user_prj->result_array() as $val): ?>
                                <tr>
                                    <td><?= $val['PJCID']; ?></td>
                                    <td><?= $val['PJCNME']; ?></td>
                                    <td><?= $val['PJCRDT']; ?></td>
                                    <td>
                                        <?php if ($val['PJSTAT'] == 1): ?><span class="label label-primary">Preparation</span><?php endif; ?>
                                        <?php if ($val['PJSTAT'] == 2): ?><span class="label label-danger">Closed</span><?php endif; ?>
                                        <?php if ($val['PJSTAT'] == 3): ?><span class="label label-success">Investigations</span><?php endif; ?>
                                        <?php if ($val['PJSTAT'] == 4): ?><span class="label label-warning">Reporting</span><?php endif; ?>
                                    </td>
                                    <td><?= $val['PJCDESC']; ?></td>
                                    <td>
                                        <a href="<?= base_url(); ?>index.php/project/view_project/<?= $val['PJCID']; ?>"><button type="button" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-search"></i></button></a>
                                        <button type="button" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil"></i></button>
                                        <button type="button" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-trash"></i></button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                    </table>
                </div>
                <div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-right">
                        <li><a href="#">&laquo;</a></li>
                        <?php $max_page = ceil($user_prj->num_rows() / 25); ?>
                        <?php for ($i = 1; $i <= $max_page; $i++): ?>
                            <li><a href="#"><?= $i; ?></a></li>
                        <?php endfor; ?>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>


</section>
