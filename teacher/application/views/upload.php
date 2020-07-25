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


                    
                        

                    <input type="hidden" value="<?php echo $class_id ?>" name="class_id">
                        <input type="hidden" value="<?php echo $subject_id ?>" name="subject_id">
                      
                      





                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4"style="margin: 2px auto;">
                        <div class="card">
                            <div class="card-body"style="text-align: center;">
                                <h4 class="card-title">Enter Remarks</h4>
                                <!-- <form class="mt-3"> -->
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nametext" name="remark" aria-describedby="remark" placeholder="Remarks">
                                        <!-- <small id="name" class="form-text text-muted">Helper Text</small> -->
                                    </div>
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>
                    <div class="card-body" style="margin: -20px 2px;">
                        <!-- <h4 class="card-title"style="text-align: center;">Choose File</h4> -->

                        <div class="input-group mb-2">
                            <!-- <div class="input-group-prepend" style="text-align: center;">
                                            <span class="input-group-text">Upload</span>
                                        </div> -->
                            <div class="custom-file col-md-6" style=" margin: 2px auto;">
                                <input type="file" name="teacher_assignment" class="custom-file-input" id="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>

                            </div>
                        </div>
                        <h6 class="card-subtitle" style="text-align: center;">* only pdf, docx and xls file format is allowed</code> class to the input</h6>

                    </div>
                  
                    <div class="form-actions" style=" margin: 2px auto;display: table;">
                        <div class="card-body">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Upload </button>
                            <a href="<?= base_url() ?>index.php/teacher" class="btn btn-dark">Cancel</a>
                        </div>
                    </div>
                </form>

            </div>

        </div>





    </div>
</div>
</div>
</div>
