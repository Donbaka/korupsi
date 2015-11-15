
    <section class="content-header">
      <h1>
        Table
        <small>Set your working table</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="glyphicon glyphicon-th-list"></i> Home</a></li>
        <li class="active">Table</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Table</h3>&nbsp&nbsp|&nbsp&nbsp
				<button type="button" id="add_table_btn" class="btn btn-primary btn-xs">Import Table</button>
				&nbsp&nbsp|&nbsp&nbsp
				<a href="<?=base_url();?>index.php/file/view_relationship"><button type="button" class="btn btn-warning btn-xs">View Relationship</button></a>
				
				<div id="myModal" class="modal fade" style="top: 5%; " role="dialog">
				  <div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Options</h4>
					  </div>
					  <div class="modal-body">
						<form role="form">
						
						<div class="form-group">
							<label>Related Project</label>
							<select class="form-control select2" data-placeholder="Select project" name="project" id="project" style="width:100%;">
							  <?php foreach($user_prj->result_array() as $val): ?>
							  <option value="<?= $val['PJCID'];?>"><?=$val['PJCNME'];?></option>
							  <?php endforeach; ?>
							</select>
						  </div>
						<!-- radio -->
						<div class="form-group">
						  <div class="radio">
							<label>
							  <input type="radio" name="option" id="option" value="option1" >
							  Import table from file (csv, xls, and xlsx)
							</label>
						  </div>
						  <div class="radio">
							<label>
							  <input type="radio" name="option" id="option" value="option2">
							  Import table by query
							</label>
						  </div>
						  <div class="radio">
							<label>
							  <input type="radio" name="option" id="option" value="option3">
							  Import table from Web Service/API
							</label>
						  </div>
						  <div class="radio">
							<label>
							  <input type="radio" name="option" id="option" value="option4" >
							  Import table from other service
							</label>
						  </div>
						</div>

					  </form>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" id="submit_option" name="submit_option" value="submit_option" class="btn btn-primary" >Submit</button>
					  </div>
					</div>

				  </div>
				</div>

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
				  <th>Related Projct</th>
                  <th>Created Date</th>
                  <th>Modified Date</th>
				  <th style="width: 13%;">Action</th>
                </tr>
				<?php if($user_tbl->num_rows()>0) foreach($user_tbl->result_array() as $val): ?>
				<tr>
                  <td><?=$val['FILID'];?></td>
                  <td><?=$val['FILNME'];?></td>
				  <td><?=$val['PJCNME'];?></td>
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

    </section>
	
	<link rel="stylesheet" href="<?=base_url();?>resources/plugins/select2/select2.min.css">
	<script src="<?=base_url()?>resources/plugins/select2/select2.full.min.js"></script>
	
	<script>
	
	$(function () {
    //Initialize Select2 Elements
		$('#add_table_btn').click(function(evt){
			$('#myModal').modal();
		});
		$(".select2").select2();
		
		$('#submit_option').click(function(evt){
			var optionValue = $('input[name="option"]:checked').val();
			var projectID = $('#project').val();
			if(optionValue == 'option1'){
				alert();
			}
			if(optionValue == 'option2'){
				window.location.href = "<?=base_url()?>index.php/table/import_by_query/"+projectID;
			}
			if(optionValue == 'option3'){
				alert();
			}
			if(optionValue == 'option4'){
				alert();
			}
		});
	});
	
	</script>
      