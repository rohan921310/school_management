<div class="page-wrapper" style="display: block;">

    <div class="container-fluid">

        <div class="col-md-12  ">
            <div class="card text-white bg-warning">


                <div class="card-body " style="text-align: center;">
                    <!-- <h4 class="card-title">Welcome  </h4> -->
                    <p class="card-text">
                        <h3> Work Done</h3>
                    </p>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-md-flex align-items-center">
                                <div>
                                    <form action="<?= base_url() ?>index.php/work_submit" method="post">
                                        <h4 class="card-title"> <?php
                                                                echo date("d-m-y");
                                                                ?>
                                            <h4>
                                                Enter Today's Work Done By You
                                            </h4>

                                        </h4>

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">

                                                <?php echo $this->session->flashdata('Success'); ?>
                                            </h4>
                                            <div class="form-group">
                                                <textarea class="form-control" name="work_done" rows="5"></textarea>
                                            </div>
                                            <div class="form-actions" style=" margin: 2px auto;display: table;">
                                                <div class="card-body">
                                                    <button type="submit" class="btn btn-danger"> <i class="fa fa-check"></i> Submit </button>
                                                    <a href="<?= base_url() ?>index.php/work_done" class="btn btn-dark">Cancel</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
             </form>
            </div>