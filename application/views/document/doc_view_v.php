
<section class="content-header">
    <h1>
        Document
        <small>Organize your documents</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="glyphicon glyphicon-tasks"></i> Home</a></li>
        <li>Document</li>
        <li class="active">View Document</li>
    </ol>
</section>

<form role="form" action="<?= base_url(); ?>index.php/project/add_project" method="post">
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Project Information
            </div>
            <div class="box-body table-responsive no-padding">

                <div class="box-body">
                    <div class="form-group">
                        <label for="project_name">Project Name</label><br>
                        <?= $user_prj['PJCNME']; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Document</h3>
                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>Doc ID</th>
                                <th>Doc Name</th>
                                <th>Created Date</th>
                                <th>Modified Date</th>
                                <th>Doc Type</th>
                                <th style="width: 13%;">Action</th>
                            </tr>
                            <?php if ($user_doc->num_rows() > 0) foreach ($user_doc->result_array() as $val): ?>
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
                                        <td>
                                            <a href="<?= base_url() . '' . $val['FILINK']; ?>"><button type="button" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-search"></i></button></a>
                                            <button type="button" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-trash"></i></button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                        </table>
                    </div>
                    <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <li><a href="#">&laquo;</a></li>
                            <?php $max_page = ceil($user_doc->num_rows() / 5); ?>
                            <?php for ($i = 1; $i <= $max_page; $i++): ?>
                                <li><a href="#"><?= $i; ?></a></li>
                            <?php endfor; ?>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>

<link rel="stylesheet" href="<?= base_url(); ?>resources/plugins/select2/select2.min.css">
<script src="<?= base_url() ?>resources/plugins/select2/select2.full.min.js"></script>
<script>

    $(function () {
        //Initialize Select2 Elements

    });

</script>

