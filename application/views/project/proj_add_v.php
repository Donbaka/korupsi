
    <section class="content-header">
      <h1>
        Add Project
        <small>Set your projects</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="glyphicon glyphicon-tasks"></i> Home</a></li>
        <li>Project</li>
		<li class="active">Add Project</li>
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
                  <label for="project_name">Project Name</label>
                  <input type="text" class="form-control" id="project_name" name="project_name" placeholder="Enter project name">
                </div>
                <div class="form-group">
                  <label for="project_description">Project Description</label>
                  <textarea class="form-control" rows="3" name="project_description" placeholder="Enter project description"></textarea>
                </div>
                <div class="form-group">
                  <label for="project_name">Additional Information 1</label>
                  <input type="text" class="form-control" id="additional_info1" placeholder="Enter additional information 1">
                </div>
				<div class="form-group">
                  <label for="project_name">Additional Information 2</label>
                  <input type="text" class="form-control" id="additional_info2" placeholder="Enter additional information 2">
                </div>
			
              
          </div>
          <!-- /.box -->
        </div>
      </div>
      
	  <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Project Team &nbsp&nbsp|&nbsp&nbsp
			  <button type="button" id="add_member_btn" class="btn btn-primary btn-xs">Add Member</button> &nbsp&nbsp|&nbsp&nbsp
			  <button type="button" id="del_member_btn" class="btn btn-danger btn-xs">Delete Member</button>
            </div>
			
			
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
			  
              <div class="box-body">
			  <input type="hidden" name="max_member" value="1" id="max_member">

				<!-- Modal -->
				<div id="myModal" class="modal fade" style="top: 5%;" role="dialog">
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
					<label>Name</label>
					<select class="form-control select2" data-placeholder="Select team member" name="member1" id="member1" style="width: 100%;">
					  <?php foreach($user->result_array() as $val): ?>
					  <option value="<?= $val['USRID'];?>"><?=$val['USCNME'];?></option>
					  <?php endforeach; ?>
					</select>
				  </div>
				</div>
				<div class="col-md-6" id="col3">
				  <div class="form-group">
					<label for="team_position">Team Postition</label>
                  <input type="text" class="form-control" id="team_position1" name="team_position1" placeholder="Give team position">
				  </div>
				</div>
              
			
              
          </div>
          <!-- /.box -->
        </div>
      </div>
	  
	  <div class="box-footer">
                <button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary">Submit</button>
              </div>
            

    </section>
	
	</form>
	
	<link rel="stylesheet" href="<?=base_url();?>resources/plugins/select2/select2.min.css">
	<script src="<?=base_url()?>resources/plugins/select2/select2.full.min.js"></script>
	<script>
	
	$(function () {
    //Initialize Select2 Elements
		$(".select2").select2();
		$("#add_member_btn").click(function(evt){
			var maxMember = $('#max_member').val();
			maxMember++;
			
			var par1 = '<div id="member_row1_'+maxMember+'" class="form-group">';
			par1 += '<label>Name</label>';
			par1 += '<select class="form-control select2" data-placeholder="Select team member" name="member'+maxMember+'" id="member'+maxMember+'" style="width: 100%;">';
			<?php foreach($user->result_array() as $val): ?>
			par1 += '<option value="<?= $val['USRID'];?>"><?=$val['USCNME'];?></option>';
			<?php endforeach; ?>
			par1 += '</select></div>';
			
			var par2 = '<div id="member_row2_'+maxMember+'" class="form-group">';
			par2 += '<label for="team_position">Team Postition</label>';
			par2 += '<input type="text" class="form-control" id="team_position'+maxMember+'" name="team_position'+maxMember+'" placeholder="Give team position">';
			par2 += '</div></div>';
			
			$('#col2').append(par1);
			$('#col3').append(par2);
			$('#max_member').val(maxMember);
		});
		
		$('#del_member_btn').click(function(evt){
			var maxMember = $('#max_member').val();
			
			if(maxMember <= 1) $('#myModal').modal();
			else {
				$('#member_row1_'+maxMember).remove();
				$('#member_row2_'+maxMember).remove();
				
				maxMember--;
				$('#max_member').val(maxMember);
			}
			
			
		});
		
		$('#submit').click(function(evt){
			
		});
	});
	
	</script>
	
      