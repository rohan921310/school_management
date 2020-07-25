
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper" style="display: block;">

<div class="container-fluid">

    <div class="col-md-12  ">
        <div class="card text-white bg-warning">

        
            <div class="card-body " style="text-align: center;">
                <h4 class="card-title">Welcome  </h4>
                <p class="card-text">
                    <h3> Manage Your Files Below </h3>
                </p>

            </div>
        </div>



        <div class="row" style="text-align: center;">

            <div class="col-md-6" style="text-align: center;">
                <form class="form" method="post" action="<?= base_url() ?>index.php/upload_assignment">

                    <div class="card text-white bg-danger" style="text-align: center;">
                        <!-- <input type="hidden" value="<?= $this->session->userdata('id_teacher'); ?>" name="id_teacher"> -->
                        <button type="submit" style="background: none; border: none; color: white">
                            <div class="card-header">

                            </div>
                            <div class="card-body col-md-8" style="margin: 2px auto;">

                                <h3>
                                    Upload Assignment </h3>
                                <p class="card-text" style="text-align: center;">Upload Assignment pdf, word documents and excel files for students</p>
                            

                            </div>
                        </button>
                    </div>
                </form>
            </div>


            <div class="col-md-6" style="text-align: center;">
                <form class="form" method="post" action="<?= base_url() ?>index.php/download_assignment">

                    <div class="card text-white bg-danger" style="text-align: center;">
                        <button type="submit" style="background: none; border: none; color: white">
                            <input type="hidden" value="<?= $this->session->userdata('teacher'); ?>" name="teacher">
                            <div class="card-header">

                            </div>
                            <div class="card-body col-md-8" style="margin: 2px auto;">

                                <h3>
                                    Download Assignments </h3>
                                <p class="card-text" style="text-align: center;">Downloa/ View Student Assignments</p>
                               &nbsp;
                             

                            </div>
                        </button>
                    </div>
                </form>
            </div>
           <h3>
               
               <?php echo $this->session->flashdata('error'); ?>
               </h3>
               <h3>
               
               <?php echo $this->session->flashdata('Success'); ?>
               </h3>

    </div>
 </div>
</div>


 
 
  