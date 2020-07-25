<div class="page-wrapper" style="display: block;">

    <div class="container-fluid">

        <div class="col-md-12  ">
            <div class="card text-white bg-warning">


                <div class="card-body " style="text-align: center;">
                    <!-- <h4 class="card-title">Welcome  </h4> -->
                    <p class="card-text">
                        <h3>Mark Today's Attendance</h3>
                    </p>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-md-flex align-items-center">
                                <div>
                                    <form action="<?= base_url() ?>index.php/submit_attendance" method="post">
                                        <h4 class="card-title"> <?php
                                                                echo date("d-m-y");
                                                                ?> </h4>
                                        <h5 class="card-subtitle"><?php echo $classs['roll']; ?> </h5>
                                </div>

                            </div>
                            <div class="table-responsive">
                                <table class="table no-wrap v-middle">
                                    <thead>
                                        <tr class="border-0">
                                            <th class="border-0">Roll No.</th>
                                            <th class="border-0">Name</th>
                                            <th class="border-0">Class</th>
                                            <th class="border-0">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (!empty($classs)) {
                                            foreach ($classs as $re) { ?>
                                                <tr>
                                                    <td>
                                                        <input type="hidden" value="<?php echo $re['class_id']; ?>" name="class_id">
                                                        <input type="hidden" value="<?php echo $re['student_id']; ?>" name="student_id[]">

                                                        <div class="d-flex no-block align-items-center">
                                                            <div class="mr-2"></div>
                                                            <div class="">
                                                                <span><?php echo $re['roll']; ?></span></div>
                                                        </div>
                                                    </td>
                                                    <td><?php echo $re['student'] ?></td>
                                                    <td>
                                                        <?php echo $re['class']; ?>
                                                    </td>
                                                    <td>
                                                        P &nbsp;<input type="radio" checked value="p" name="<?php echo $re['student_id']; ?>" required>

                                                        A &nbsp;<input type="radio" value="a" name="<?php echo $re['student_id']; ?>" >
                                                    </td>

                                                </tr>
                                            <?php }
                                        } else {  ?>
                                            <tr>

                                                <td colspan="4">

                                                    No Students found
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <div class="form-actions" style=" margin: 2px auto;display: table;">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-danger"> <i class="fa fa-check"></i> Submit </button>
                                        <a href="<?= base_url() ?>index.php/attendance" class="btn btn-dark">Cancel</a>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>