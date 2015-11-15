
    <section class="content-header">
      <h1>
        View Project
        <small>Set your projects</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="glyphicon glyphicon-tasks"></i> Home</a></li>
        <li>Project</li>
		<li class="active">View Project</li>
      </ol>
    </section>

    <!-- Main content -->
	<form role="form" action="<?= base_url();?>index.php/project/add_project" method="post">
    <section class="content">
	
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Project Information
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
			  
              <div class="box-body">
                <div class="form-group">
                  <label for="project_name">Project Name</label><br>
                  <?=$user_prj['PJCNME'];?>
                </div>
                <div class="form-group">
                  <label for="project_description">Project Description</label><br>
                  <?=$user_prj['PJCDESC'];?>
                </div>
                <div class="form-group"><br>
                  <label for="project_name">Additional Information 1</label>
                  <?=$user_prj['PJCPAR1'];?>
                </div>
				<div class="form-group"><br>
                  <label for="project_name">Additional Information 2</label>
                   <?=$user_prj['PJCPAR2'];?>
                </div>
			
              
          </div>
          <!-- /.box -->
        </div>
      </div>
      
	  <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Project Team
            </div>
			
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
			  
              <div class="box-body">
			  <input type="hidden" name="max_member" value="1" id="max_member">

				<!-- Modal -->
				<div id="myModal" class="modal fade" role="dialog">
				  <div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Warning</h4>
					  </div>
					  <div class="modal-body">
						<p>Team member must have at least 1 person!</p>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					  </div>
					</div>

				  </div>
				</div>
			  
                <div class="col-md-6" id="col2">
				
				  <div class="form-group">
					<label>Name</label><br>
					<?php foreach($user_prj2->result_array() as $val): ?>
					<?= $val['USCNME']; ?><br>
					<?php endforeach; ?>
				  </div>
				</div>
				<div class="col-md-6" id="col3">
				  <div class="form-group">
					<label for="team_position">Team Postition</label><br>
                  <?php foreach($user_prj2->result_array() as $val): ?>
					<?= $val['PJTPOS']; ?><br>
					<?php endforeach; ?>
				  </div>
				</div>
              
			
              
          </div>
          <!-- /.box -->
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
            <!-- /.box-header -->
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
				<?php if($user_doc->num_rows()>0) foreach($user_doc->result_array() as $val): ?>
				<tr>
                  <td><?=$val['FILID'];?></td>
                  <td><?=$val['FILNME'];?></td>
                  <td><?=$val['FICRDT'];?></td>
				  <td><?=$val['FILMOD'];?></td>
                  <td>
					<?php if($val['FILTYP'] == 'DDC'): ?>Document<?php endif;?>
					<?php if($val['FILTYP'] == 'DPD'): ?>PDF<?php endif;?>
					<?php if($val['FILTYP'] == 'DXL'): ?>Spreadsheet<?php endif;?>
					<?php if($val['FILTYP'] == 'DTX'): ?>Textfile<?php endif;?>
					<?php if($val['FILTYP'] == 'DPT'): ?>Presentation<?php endif;?>
				  </td>
				  <td>
				    <a href="<?=base_url().''.$val['FILINK'];?>"><button type="button" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-search"></i></button></a>
                      <button type="button" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-trash"></i></button>
				  </td>
                </tr>
				<?php endforeach; ?>
                                
              </table>
            </div>
			<div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
			  <li><a href="#">&laquo;</a></li>
			  <?php $max_page = ceil($user_doc->num_rows() / 5);?>
			  <?php for($i=1; $i<=$max_page; $i++): ?>
                <li><a href="#"><?=$i;?></a></li>
              <?php endfor;?>
			  <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
	  
	  <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Table</h3>&nbsp&nbsp|&nbsp&nbsp
				<a href="<?=base_url();?>index.php/file/view_relationship"><button type="button" class="btn btn-warning btn-xs">View Relationship</button></a>

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
                  <th>Tbl ID</th>
                  <th>Tbl Name</th>
                  <th>Created Date</th>
                  <th>Modified Date</th>
				  <th style="width: 13%;">Action</th>
                </tr>
				<?php if($user_tbl->num_rows()>0) foreach($user_tbl->result_array() as $val): ?>
				<tr>
                  <td><?=$val['FILID'];?></td>
                  <td><?=$val['FILNME'];?></td>
                  <td><?=$val['FICRDT'];?></td>
				  <td><?=$val['FILMOD'];?></td>
				  <td>
				    <a href="<?=base_url().'index.php/file/view_structure'.$val['FILID'];?>"><button type="button" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-search"></i></button></a>
                      <button type="button" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-trash"></i></button>
				  </td>
                </tr>
				<?php endforeach; ?>
                                
              </table>
            </div>
			<div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
			  <li><a href="#">&laquo;</a></li>
			  <?php $max_page = ceil($user_tbl->num_rows() / 5);?>
			  <?php for($i=1; $i<=$max_page; $i++): ?>
                <li><a href="#"><?=$i;?></a></li>
              <?php endfor;?>
			  <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
	  
	  <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Watchlist</h3>

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
                  <th>Wch ID</th>
                  <th>Wch Name</th>
                  <th>Created Date</th>
                  <th>Modified Date</th>
				  <th>Wch Desc</th>
				  <th style="width: 13%;">Action</th>
                </tr>
				<?php if($user_wch->num_rows()>0) foreach($user_wch->result_array() as $val): ?>
				<tr>
                  <td><?=$val['WCHID'];?></td>
                  <td><?=$val['WCHNME'];?></td>
                  <td><?=$val['WCCRDT'];?></td>
				  <td><?=$val['WCLMOD'];?></td>
				  <td><?=$val['WCHDESC'];?></td>
				  <td>
				    <a href="<?=base_url().'index.php/watchlist/view_watchlist'.$val['WCHID'];?>"><button type="button" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-search"></i></button></a>
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
			  <?php $max_page = ceil($user_wch->num_rows() / 5);?>
			  <?php for($i=1; $i<=$max_page; $i++): ?>
                <li><a href="#"><?=$i;?></a></li>
              <?php endfor;?>
			  <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
	  
	  

    </section>
	
	</form>
	
	<link rel="stylesheet" href="<?=base_url();?>resources/plugins/select2/select2.min.css">
	<script src="<?=base_url()?>resources/plugins/select2/select2.full.min.js"></script>
	<script>
	
	$(function () {
    //Initialize Select2 Elements
		
	});
	
	</script>
	
      