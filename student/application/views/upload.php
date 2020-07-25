<div class="page-wrapper" style="display: block;">

<div class="container-fluid">

            <div class="col-md-12  ">
                <div class="card text-white bg-warning">

                    <div class="card-body " style="text-align: center;">
                        <!-- <h4 class="card-title">Upload Documents</h4> -->
                        <p class="card-text">
                            <h3> Upload Documents</h3>
                        </p>

                    </div>
                </div>

                <!-- <div class="row" style="text-align: center;" >
<div class="col-md-6" style="text-align: center;">
<div class="card text-white bg-danger" style="text-align: center;">
          <div class="card-header">

     </div>   -->
     <form action="<?= base_url('do_upload') ?> " method="post" enctype="multipart/form-data">
                    <div class="row">
                    <?php if($msg2=$this->session->flashdata('error')) {?>
								 
								 <div class="alert bg-danger col-4"style="
    text-align: center;
    margin: 2px auto;
">
									 <?= $msg2?>
								 </div>

                         <?php } ?>        
                         <?php if($msg1=$this->session->flashdata('Success')) {?>
								 
								 <div class="alert bg-success col-4 "style="
    text-align: center;
    margin: 2px auto;
">
									 <?= $msg1?>
								 </div>

						 <?php } ?>           <!-- Form -->   <!-- Form -->
             
                        <?php $_SESSION['subject_id'] = $subject_id; ?>
                        <?php $_SESSION['teacher_id'] = $teacher_id; ?>
                        <input type="hidden" value="<?php echo set_value('subject_id', $_SESSION['subject_id']) ?>" name="subject_id" >
                        <input type="hidden" value="<?php echo set_value('teacher_id', $_SESSION['teacher_id']) ?>" name="teacher_id" >
                        
                    
                    </div>

                    <div class="card-body" style="margin: -20px 2px;">
                        <!-- <h4 class="card-title"style="text-align: center;">Choose File</h4> -->

                        <div class="input-group mb-2">
                            <!-- <div class="input-group-prepend" style="text-align: center;">
                                            <span class="input-group-text">Upload</span>
                                        </div> -->
                            <div class="custom-file col-md-6" style=" margin: 2px auto;">
                                <input type="file" name="student_assignment" class="custom-file-input" id="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>

                            </div>
                        </div>
                        <h6 class="card-subtitle" style="text-align: center;">* only pdf, docx and xls file format is allowed</code> class to the input</h6>

                    </div>
                    <div class="form-actions" style=" margin: 2px auto;display: table;">
                        <div class="card-body">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Submit </button>
                            <a href="<?= base_url() ?>index.php/student" class="btn btn-dark">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>

        </div>





    </div>
</div>
</div>
</div>
