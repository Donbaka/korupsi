
<section class="content-header">
    <h1>
        Document
        <small>Organize your documents</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="glyphicon glyphicon-tasks"></i> Home</a></li>
        <li class="active">Document</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="nav-tabs-custom">
                <!-- Tabs within a box -->
                <ul class="nav nav-tabs pull-right">
                    <li class="pull-left active"><a href="#proj-list" data-toggle="tab">Project List</a></li>
                    <li class="pull-left"><a href="#latest-doc" data-toggle="tab">Latest Documents</a></li>
                    <li>
                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="tab-content no-padding">
                    <div class="chart tab-pane active" id="proj-list">
                        <table class="table table-hover">
                            <tr>
                                <th>Proj ID</th>
                                <th>Proj Name</th>
                                <th>Created Date</th>
                                <th>Status</th>
                                <th>Description</th>
                                <th>Total Documents</th>
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
                                        <td>4</td>
                                        <td>
                                            <a href="<?= base_url(); ?>index.php/document/view_document/<?= $val['PJCID']; ?>"><button type="button" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-search"></i> View Docs </button></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                        </table>
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
                    </div>
                    <div class="chart tab-pane" id="latest-doc">
                        <table class="table table-hover">
                            <tr>
                                <th>Doc ID</th>
                                <th>Doc Name</th>
                                <th>Created Date</th>
                                <th>Modified Date</th>
                                <th>Doc Type</th>
                                <th>Project Name</th>
                                <th style="width: 13%;">Action</th>
                            </tr>
                            <?php if ($prj_doc->num_rows() > 0) foreach ($prj_doc->result_array() as $val): ?>
                                    <tr>
                                        <td><?= $val['FILID']; ?></td>
                                        <td><?= $val['FILNME']; ?></td>
                                        <td><?= $val['FICRDT']; ?></td>
                                        <td><?= $val['FILMOD']; ?></td>
                                        <td>
                                            <?php if ($val['FILTYP'] == 'DDC'): ?>Document<?php endif; ?>
                                            <?php if ($val['FILTYP'] == 'DPD'): ?>PDF<?php endif; ?>
                                            <?php if ($val['FILTYP'] == 'DXL'): ?>Spreadsheet<?php endif; ?>
                                            <?php if ($val['FILTYP'] == 'DTX'): ?>Textfile<?php endif; ?>
                                            <?php if ($val['FILTYP'] == 'DPT'): ?>Presentation<?php endif; ?>
                                        </td>                                     
                                        <td><?= $val['PJCNME']; ?></td>
                                        <td>
                                            <a href="<?= base_url(); ?>index.php/project/view_project/<?= $val['PJCID']; ?>"><button type="button" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-search"></i> View Docs </button></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                        </table>
                        <div class="box-footer clearfix">
                            <ul class="pagination pagination-sm no-margin pull-right">
                                <li><a href="#">&laquo;</a></li>
                                <?php $max_page = ceil($prj_doc->num_rows() / 25); ?>
                                <?php for ($i = 1; $i <= $max_page; $i++): ?>
                                    <li><a href="#"><?= $i; ?></a></li>
                                <?php endfor; ?>
                                <li><a href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>
