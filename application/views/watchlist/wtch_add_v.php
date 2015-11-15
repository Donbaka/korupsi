
    <section class="content-header">
      <h1>
        Watchlist
        <small>Set your working watchlist</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="glyphicon glyphicon-eye-open"></i> Home</a></li>
		<li>Watchlist</li>
        <li class="active">Add Watchlist</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
	  
	  <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Add Watchlist
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
			
			<div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">GUI Editor</a></li>
              <li><a href="#tab_2" data-toggle="tab">SQL Query</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <b>How to use:</b>

                <p>Exactly like the original bootstrap tabs except you should use
                  the custom wrapper <code>.nav-tabs-custom</code> to achieve this style.</p>
                A wonderful serenity has taken possession of my entire soul,
                like these sweet mornings of spring which I enjoy with my whole heart.
                I am alone, and feel the charm of existence in this spot,
                which was created for the bliss of souls like mine. I am so happy,
                my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
                that I neglect my talents. I should be incapable of drawing a single stroke
                at the present moment; and yet I feel that I never was a greater artist than now.
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <form role="form" action="<?= base_url();?>index.php/watchlist/add_watchlist/<?=$project_id;?>" method="post">
				  <input type="hidden" value="<?=$project_id?>" name="project_id">
				  <div class="box-body">
				   <div class="form-group">
					  <label for="watchlist_desc">Description</label>
					  <input type="text" class="form-control" id="description" name="description" placeholder="Enter watchlist description">
					</div>
					<div class="form-group">
					<label for="watchlist_query">Query</label>
					  <textarea class="form-control" rows="20" name="query" placeholder="Enter query here"></textarea>
					</div>
				
				<div class="box-footer">
					<button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary">Submit</button>
				  </div>
				  
				  </form>
              </div>
            </div>
            <!-- /.tab-content -->
          </div>
			  
			  
              
          </div>
          <!-- /.box -->
        </div>
      </div></div></div>
      

    </section>
      