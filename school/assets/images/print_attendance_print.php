<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Miket Admin</title>
		
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
		<link rel="stylesheet" href="assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />
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
		
		
		
		<!-- Head Libs -->
		<script src="<?php echo base_url(); ?>assets/vendor/modernizr/modernizr.js"></script>
		
		<style type="text/css" media="print">
      div.page
      {
        page-break-after: always;
        page-break-inside: avoid;
      }
    </style>

	</head>
	<body>
		<section class="body">


<!-- start: page -->
<div class="row">
<div class="col-xs-12">
<section class="panel">
<header style="    padding-bottom: 55px;" class="panel-heading">
<div class="col-xs-4">
<img style="float: left;margin-top:-15px;" src="<?php echo base_url(); ?>assets/images/logo_01.png" width="65px;" alt="Image not support!" />
<br> </div>
<div class="col-xs-4">
<h2 style="text-align: center;" class="panel-title">ATTENDANCE SHEET<br><br></h2>
</div>
<div class="col-xs-4">
<img style="float: right;margin-top:0px;" src="<?php echo base_url(); ?>assets/images/IATD.png" width="65px;"  alt="Image not support!" /></div>
</header> 
<?php //print_r($report); ?>

<div class="panel-body">
<div class="form-group">
<label class="col-md-6 control-label"><B>SCHOOL : </B> <?php echo $report[0]->school_name; ?></br> <?php echo $report[0]->school_add; ?> <?php echo $report[0]->pincode; ?></label>

<label style="text-align: right; float:right;" class="col-md-6 control-label"><B>Exam  Date : </B> <?php if($report[0]->examDate==''){ ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php }else{ echo $report[0]->examDate; } ?></label>

</div>
<div class="form-group">
<label class="col-md-6 control-label"><B>CLASS : </B> <?php  echo $class; ?></label>

<label style="text-align: right; float:right;"  class="col-md-6 control-label"><B>SUBJECT : </B> <?php echo strtoupper($subject); ?></label>

</div>
<table class="table table-bordered table-striped mb-none" id="datatable-default1">
<thead>
<tr>
<th>S.No.</th>
<th>MiKat Regn No.</th>
<th>Student</th>
<th>Signature/Absent</th>

</tr>
</thead>
<?php 
$i=1; 
 

foreach($report as $row) {
if($i%18==0){

?>
</table>
<br>
<br>
<br>
<div class="form-group">
<label class="col-md-6 control-label">Note: Please mark ABSENT with Red Pen</label>
<label style="text-align: right; float:right;" class="col-md-6 control-label">Signature of Invigilator</label>
</div>

</div>
<div class="page">
<table class="table table-bordered table-striped mb-none" id="datatable-default1">
<thead>
<tr>
<th>S.No.</th>
<th>MiKat Regn No.</th>
<th>Student</th>
<th>Signature/Absent</th>

</tr>
</thead>
<?php } ?>
<tr>
<td><?php echo $i; ?></td>
<td><?php echo $row->student_id;  ?></td>
<td><?php echo $row->student_name;  ?></td>
<td></td>

</tr>


<?php $i++;  } ?>
</table>
<br>
<br>
<br>
<div class="form-group">
<label class="col-md-6 control-label">Note: Please mark ABSENT with Red Pen</label>
<label style="text-align: right; float:right;" class="col-md-6 control-label">Signature of Invigilator</label>
</div>
</div>


</section>
</div>
</div>
<!-- end: page -->

</div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

