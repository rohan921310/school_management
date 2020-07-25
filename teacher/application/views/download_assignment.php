<div class="page-wrapper" style="display: block;">
<div class="container-fluid">

<div class="col-md-12  " >
                        <div class="card text-white bg-warning">
     
                            <div class="card-body " style="text-align: center;">
                                <!-- <h4 class="card-title">Select Subject  </h4> -->
                                <p class="card-text"> <h3>Select Class  </h3> </p>

                        </div>
                    </div>
        <div class="row" style="text-align:center">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <!-- <h4 class="card-title">Select Subject</h4>
                        <h5 class="card-subtitle"> *note only .pdf, .docx and .xls files are allowed </h5> -->
                        <div class="row" style="text-align: center;">
                            <?php if (!empty($fetch_class)) {
                                foreach ($fetch_class as $fc) { ?>
                                   
                                   <div class="col-md-6" style="text-align: center;">
                                   <form class="form" method="post" action="<?= base_url() ?>index.php/view_subject">
                                    
                                    <div class="card text-white bg-danger" style="text-align: center;">
                                        <input type="hidden" value="<?php echo $fc['class_id'] ?>" name="class_id">
                                        <button type="submit" style="background: none; border: none; color: white">
                                  
                                        <div class="card-header">
                                            
                                            </div>  
               <div class="card-body col-md-8" style="margin: 2px auto;">

                                     <h3>
                                    <?php echo $fc['class'] ?>
                                     </h3> 
                 
                  </div>
                </button>                 
                    </div>
                    </div>
                    </form>
                   <?php }
                            } else {  ?>
<h3>

    No Class Assigned Yet
</h3>

<?php } ?>
</div>

                                </div>






                    </div>
                </div>
            </div>
        </div>

        <!-- </div> -->
        <!-- Code of cards -->

        <!-- End Row -->
        <!-- Row -->

        <!-- code of cards -->


        <!-- code of cards -->


        <!-- code of cards -->

        <!-- End Row -->
        <!-- Row -->

        <!-- End Row -->
        <!-- End Row -->
        <!-- Row -->

        <!-- End Row -->
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- customizer Panel -->
<!-- ============================================================== -->



<!-- ============================================================== -->
</div>