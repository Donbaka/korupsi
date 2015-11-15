<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CorruptionDET | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="<?=base_url();?>resources/bootstrap/css/bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url();?>resources/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url();?>resources/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_url();?>resources/plugins/iCheck/flat/blue.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?=base_url();?>resources/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?=base_url();?>resources/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=base_url();?>resources/plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?=base_url();?>resources/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  
  <!-- jQuery 2.1.4 -->
<script src="<?=base_url();?>resources/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.5 -->
<script src="<?=base_url();?>resources/bootstrap/js/bootstrap.min.js"></script>
<!-- Sparkline -->
<script src="<?=base_url();?>resources/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?=base_url();?>resources/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?=base_url();?>resources/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?=base_url();?>resources/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="<?=base_url();?>resources/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?=base_url();?>resources/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?=base_url();?>resources/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?=base_url();?>resources/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url();?>resources/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url();?>resources/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url();?>resources/dist/js/demo.js"></script>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>C</b>DT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Corrupt</b>DET</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
	  
	  <!--
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only"> < </span>
      </a>
	  -->

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="glyphicon glyphicon-envelope"></i>
			  <?php if($user_msg->num_rows>0): ?>
              <span class="label label-success"><?php echo $user_msg->num_rows(); ?></span>
			  <?php endif; ?>
            </a>			
            <ul class="dropdown-menu">
			<?php if($user_msg->num_rows>0): ?>
			<li class="header">You have <?php echo $user_msg->num_rows(); ?> new messages</li>
			<?php if($user_msg->num_rows>5) $msg_lim = 5; else $msg_lim = $user_msg->num_rows; ?>
			<li><ul class="menu">
			<?php foreach($user_msg->result_array() as $val): ?>
				<li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?=base_url();?>resources/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        <?= $val['USCNME']; ?>
                        <small><i class="fa fa-clock-o"></i> <?= $val['MSCRDT']; ?></small>
                      </h4>
                      <p><?= $val['MSCNTN']; ?></p>
                    </a>
                  </li>
			<?php endforeach; ?>
			</ul></li>
			
			<?php endif; ?>              
			<li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
		  <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="glyphicon glyphicon-bell"></i>
			  <?php if($user_ntf->num_rows>0):?>
			  <span class="label label-warning"><?=$user_ntf->num_rows();?></span>
			  <?php endif; ?>
              
            </a>
            <ul class="dropdown-menu">
			  <?php if($user_ntf->num_rows>0):?>
			  <li class="header">You have <?=$user_ntf->num_rows;?> notifications</li>
			  <?php endif; ?>
              <li><ul class="menu">
				<?php if($user_ntf->num_rows>0):?>
				<?php foreach($user_ntf->result_array() as $val): ?>
				  <li>
                    <a href="#">
                      <i class="glyphicon glyphicon-warning-sign text-yellow"></i> <?=$val['NTFDESC'];?>
                    </a>
                  </li>
				<?php endforeach;?>
				<?php endif; ?>

                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs"><?php echo $this->session->userdata('USRNME'); ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header" style="height:100px;">
				<p>
                  <?php echo $this->session->userdata('USCNME'); ?>
                  <small>Last Login: <?php echo $this->session->userdata('USLLOG'); ?></small>
				  <small>Member Since: <?php echo $this->session->userdata('USCRDT'); ?></small>
                </p>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
		<li <?php if($active=='dashboard'): ?> class="active" <?php endif; ?>><a href="<?=base_url();?>index.php/dashboard"><i class="glyphicon glyphicon-dashboard"></i> <span>Dashboard</span></a></li>
        <li <?php if($active=='project'): ?> class="active" <?php endif; ?>><a href="<?=base_url();?>index.php/project"><i class="glyphicon glyphicon-tasks"></i> <span>Project</span></a></li>
		<li <?php if($active=='timeline'): ?> class="active" <?php endif; ?>><a href="<?=base_url();?>index.php/timeline"><i class="glyphicon glyphicon-calendar"></i> <span>Timeline</span></a></li>
		<li <?php if($active=='table'): ?> class="active" <?php endif; ?>><a href="<?=base_url();?>index.php/table"><i class="glyphicon glyphicon-th-list"></i> <span>Table</span></a></li>
		<li <?php if($active=='mining'): ?> class="active" <?php endif; ?>><a href="<?=base_url();?>index.php/mining"><i class="glyphicon glyphicon-new-window"></i> <span>Mining</span></a></li>
		<li <?php if($active=='watchlist'): ?> class="active" <?php endif; ?>><a href="<?=base_url();?>index.php/watchlist"><i class="glyphicon glyphicon-eye-open"></i> <span>Watchlist</span></a></li>
		<li <?php if($active=='document'): ?> class="active" <?php endif; ?>><a href="<?=base_url();?>index.php/document"><i class="glyphicon glyphicon-folder-open"></i> <span>Document</span></a></li>
		<li <?php if($active=='evaluation'): ?> class="active" <?php endif; ?>><a href="<?=base_url();?>index.php/evaluation"><i class="glyphicon glyphicon-signal"></i> <span>Evaluation</span></a></li>
		<li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-briefcase"></i> <span>Team Management</span> <i class="glyphicon glyphicon-menu-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?=base_url();?>/index.php/team_profile"><i class="glyphicon glyphicon-user"></i> Team Profile</a></li>
            <li><a href="<?=base_url();?>/index.php/discussion"><i class="glyphicon glyphicon-comment"></i> Discussion</a></li>
          </ul>
        </li>
        <li class="header">FAVORITES</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Favorites 1</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php $this->load->view($view); ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.2
    </div>
    <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">PONG Studio</a>.</strong> All rights
    reserved.
  </footer>

  
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


</body>
</html>
