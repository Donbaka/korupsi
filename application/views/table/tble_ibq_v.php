
    <section class="content-header">
      <h1>
        Table
        <small>Set your working table</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="glyphicon glyphicon-th-list"></i> Home</a></li>
		<li>Table</li>
        <li class="active">Import Table By Query</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
	  
	  <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Import Table By Query
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
			  
			  <form role="form" action="<?= base_url();?>index.php/table/import_by_query/<?=$project_id;?>" method="post">
			  <input type="hidden" value="<?=$project_id?>" name="project_id">
              <div class="box-body">
                <div class="form-group">
                  <textarea class="form-control" rows="20" name="query" placeholder="Enter query here"></textarea>
                </div>
			
			<div class="box-footer">
                <button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary">Submit</button>
              </div>
			  
			  </form>
              
          </div>
          <!-- /.box -->
        </div>
      </div></div></div>
      

    </section>
      