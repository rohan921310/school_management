<!doctype html>
<html class="fixed">

<head>
	<?php
	$username = $this->session->userdata('username');
	$name = $this->session->userdata('name');

	?>
	<!-- Basic -->
	<meta charset="UTF-8">

	<title>School Master</title>

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/magnific-popup/magnific-popup.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

	<!-- Specific Page Vendor CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/select2/select2.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/dropzone/css/basic.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/dropzone/css/dropzone.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap-markdown/css/bootstrap-markdown.min.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/summernote/summernote.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/summernote/summernote-bs3.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/codemirror/lib/codemirror.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/codemirror/theme/monokai.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/morris/morris.css" />

	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/theme.css" />

	<!-- Skin CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/skins/default.css" />

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/theme-custom.css">

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/magnific-popup/magnific-popup.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

	<!-- Specific Page Vendor CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/select2/select2.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />

	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/theme.css" />

	<!-- Skin CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/skins/default.css" />

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/theme-custom.css">

	<!-- Head Libs -->
	<script src="<?php echo base_url(); ?>assets/vendor/modernizr/modernizr.js"></script>


	<!-- <style>
		a:hover{
			color:red;
		}
		
		</style> -->


</head>

<body>
	<section class="body">

		<!-- start: header -->
		<header class="header">
			<div class="logo-container">
				<a href="#" class="logo">
					<h3><?php echo $name; ?></h3>

				</a>
				<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
					<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
				</div>
			</div>

			<!-- start: search & user box -->
			<div class="header-right">





				<div id="userbox" class="userbox">
					<a href="#" data-toggle="dropdown">
						<figure class="profile-picture">
							<img src="<?php echo base_url(); ?>assets/images/administrator.png" alt="Admin" class="img-circle" data-lock-picture="<?php echo base_url(); ?>assets/images/administrator.png" />
						</figure>
						<div class="profile-info" data-lock-name="Admin" data-lock-email="admin@gmail.com">
							<span class="name">Welcome <?php echo $name; ?></span>
							<span class="name"><?php echo $username; ?></span>

							<span class="role">

							</span>
						</div>

						<i class="fa custom-caret"></i>
					</a>

					<div class="dropdown-menu">
						<ul class="list-unstyled">
							<li class="divider"></li>

							<li>
								<a role="menuitem" tabindex="-1" href="<?php echo base_url(); ?>index.php/logout"><i class="fa fa-power-off"></i> Logout</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- end: search & user box -->
		</header>
		<!-- end: header -->
		<div class="inner-wrapper">
			<!-- start: sidebar -->
			<aside id="sidebar-left" class="sidebar-left">
				<div class="sidebar-header" style="background: #1d2127;">

					<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
				<div class="nano">
					<div class="nano-content">
						<nav id="menu" class="nav-main" role="navigation">

							<ul class="nav nav-children">

								<li>
									<a href="<?php echo base_url(); ?>index.php/class_master" style="color: #cec7c7;">
										Class Master
									</a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>index.php/subject_master" class="hover_anchor_tag" style="color: #cec7c7;">
										Subject Master
									</a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>index.php/teacher_master" style="color: #cec7c7;">
										Teacher Master
									</a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>index.php/assign_master" style="color: #cec7c7;">
										Assign Master
									</a>
								</li>

								<li>
									<a href="<?php echo base_url(); ?>index.php/student_master" style="color: #cec7c7;">

										Student Master
									</a>
								</li>

								<li>
									<a href="<?php echo base_url(); ?>index.php/assign_attendance" style="color: #cec7c7;">

										Assign Attendace
									</a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>index.php/attendance_report" style="color: #cec7c7;">

										Attendance Report
									</a>
								</li>

								<li>
									<a href="<?php echo base_url(); ?>index.php/teacher_report" style="color: #cec7c7;">

										Teacher Report
									</a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>index.php/time_table" style="color: #cec7c7;">
										Time Table </a>
								</li>

							</ul>

					</div>
				</div>
			</aside>

			<section role="main" class="content-body pb-none">
				<header class="page-header">
					<h2>Time Table</h2>

					<div class="right-wrapper pull-right">



					</div>
				</header>
				<!-- start: page -->


				<form action="<?php echo base_url(); ?>index.php/submit_time_table" method="post">
				<div class="row">
					<div class="col-xs-12">
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
									<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
								</div>

								<h2 class="panel-title">Set Time Table</h2>
							</header>
							<div class="panel-body">
								<input type="hidden" value="<?= $class_id ?>" name="class_id">
								<textarea name="rohan" id=""></textarea>

							</div>
							<div class="col-md-6 center">

								<div class="panel-body" style="margin: 2px 106px; background: #ecedf0;">
									<button type="submit" class="mb-xs mt-xs mr-xs btn btn-primary"> Set Time Table</button>
									<a href="<?= base_url(); ?>index.php/time_table " type="button" class="mb-xs mt-xs mr-xs btn btn-danger"> Cancel</a>

								</div>

							</div>
						</section>
					</div>
				</div>
				<script src="<?= base_url('ckeditor/ckeditor.js'); ?>"></script>
				<script>
					CKEDITOR.replace('rohan');
				</script>
				<!-- end: page -->
			</section>
		</div>
	</form>

	</section>

	<!-- Vendor -->
	<script src="<?= base_url('assets/vendor/jquery/jquery.js'); ?>"></script>
	<script src="<?= base_url('assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js'); ?>"></script>
	<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.js'); ?>"></script>
	<script src="<?= base_url('assets/vendor/nanoscroller/nanoscroller.js'); ?>"></script>
	<script src="<?= base_url('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js'); ?>"></script>
	<script src="<?= base_url('assets/vendor/magnific-popup/jquery.magnific-popup.js'); ?>"></script>
	<script src="<?= base_url('assets/vendor/jquery-placeholder/jquery-placeholder.js'); ?>"></script>

	<!-- Specific Page Vendor -->
	<script src="<?= base_url('assets/vendor/jquery-ui/jquery-ui.js'); ?>"></script>
	<script src="<?= base_url('assets/vendor/jqueryui-touch-punch/jqueryui-touch-punch.js'); ?>"></script>
	<script src="<?= base_url('assets/vendor/select2/js/select2.js'); ?>"></script>
	<script src="<?= base_url('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js'); ?>"></script>
	<script src="<?= base_url('assets/vendor/jquery-maskedinput/jquery.maskedinput.js'); ?>"></script>
	<script src="<?= base_url('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js'); ?>"></script>
	<script src="<?= base_url('assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js'); ?>"></script>
	<script src="<?= base_url('assets/vendor/bootstrap-timepicker/bootstrap-timepicker.js'); ?>"></script>
	<script src="<?= base_url('assets/vendor/fuelux/js/spinner.js'); ?>"></script>
	<script src="<?= base_url('assets/vendor/dropzone/dropzone.js'); ?>"></script>
	<script src="<?= base_url('assets/vendor/bootstrap-markdown/js/markdown.js'); ?>"></script>
	<script src="<?= base_url('assets/vendor/bootstrap-markdown/js/to-markdown.js'); ?>"></script>
	<script src="<?= base_url('assets/vendor/bootstrap-markdown/js/bootstrap-markdown.js'); ?>"></script>
	<script src="<?= base_url('assets/vendor/codemirror/lib/codemirror.js'); ?>"></script>
	<script src="<?= base_url('assets/vendor/codemirror/addon/selection/active-line.js'); ?>"></script>
	<script src="<?= base_url('assets/vendor/codemirror/addon/edit/matchbrackets.js'); ?>"></script>
	<script src="<?= base_url('assets/vendor/codemirror/mode/javascript/javascript.js'); ?>"></script>
	<script src="<?= base_url('assets/vendor/codemirror/mode/xml/xml.js'); ?>"></script>
	<script src="<?= base_url('assets/vendor/codemirror/mode/htmlmixed/htmlmixed.js'); ?>"></script>
	<script src="<?= base_url('assets/vendor/codemirror/mode/css/css.js'); ?>"></script>
	<script src="<?= base_url('assets/vendor/summernote/summernote.js'); ?>"></script>
	<script src="<?= base_url('assets/vendor/bootstrap-maxlength/bootstrap-maxlength.js'); ?>"></script>
	<script src="<?= base_url('assets/vendor/ios7-switch/ios7-switch.js'); ?>"></script>
	<script src="<?= base_url('assets/vendor/bootstrap-confirmation/bootstrap-confirmation.js'); ?>"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="<?= base_url('assets/javascripts/theme.js'); ?>"></script>

	<!-- Theme Custom -->
	<script src="<?= base_url('assets/javascripts/theme.custom.js'); ?>"></script>

	<!-- Theme Initialization Files -->
	<script src="<?= base_url('assets/javascripts/theme.init.js'); ?>"></script>

	<!-- Examples -->
	<script src="<?= base_url('assets/javascripts/forms/examples.advanced.form.js'); ?>"></script>

</body>

</html>