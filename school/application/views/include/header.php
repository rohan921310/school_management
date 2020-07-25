<!doctype html>
<html class="fixed">
	<head>
<?php
	$username=$this->session->userdata('username');
	$name=$this->session->userdata('name');

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
					<div class="sidebar-header"style="background: #1d2127;">
	
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
							
										<ul class="nav nav-children">
											
											<li>
												<a href="<?php echo base_url(); ?>index.php/class_master"style="color: #cec7c7;">
													 Class Master
												</a>
											</li>
											<li>
												<a href="<?php echo base_url(); ?>index.php/subject_master" class="hover_anchor_tag" style="color: #cec7c7;">
													 Subject Master
												</a>
											</li>
											<li>
												<a href="<?php echo base_url(); ?>index.php/teacher_master"style="color: #cec7c7;">
													 Teacher Master
												</a>
											</li>
											<li>
										<a href="<?php echo base_url(); ?>index.php/assign_master"style="color: #cec7c7;">
											Assign Master
										</a>
									</li>
									
									<li>
										<a href="<?php echo base_url(); ?>index.php/student_master"style="color: #cec7c7;">
	
											Student Master
										</a>
									</li>
									
									<li>
										<a href="<?php echo base_url(); ?>index.php/assign_attendance"style="color: #cec7c7;">
	
										Assign Attendace
										</a>
									</li>
									<li>
										<a href="<?php echo base_url(); ?>index.php/attendance_report"style="color: #cec7c7;">
	
										Attendance Report
										</a>
									</li>

									<li>
										<a href="<?php echo base_url(); ?>index.php/teacher_report"style="color: #cec7c7;">
	
										Teacher Report
										</a>
									</li>
									<li>
										<a href="<?php echo base_url(); ?>index.php/time_table"style="color: #cec7c7;">
										Time Table										</a>
									</li>
									
									</ul>
								
						</div>
					</div>
				</aside>

		