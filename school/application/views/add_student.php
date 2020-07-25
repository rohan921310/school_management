<section role="main" class="content-body pb-none">
    <header class="page-header">
        <h2>Student Master</h2>

        <div class="right-wrapper pull-right">



        </div>
    </header>

    <!-- start: page -->

    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a>

            </div>

            <h2 class="panel-title">Add Details</h2>
        </header>

    </section>
    <form class="form-horizontal form-bordered" method="post" action="<?php echo base_url(); ?>index.php/add_student">
        <div class="form-group">
            <label class="col-md-2 control-label" for="inputDefault">Student Name *</label>
            <div class="col-md-6">
                <input type="text" placeholder="Enter Name" class="form-control" id="inputDefault" <?php echo set_value('student'); ?> name="student">
                <?php echo form_error('student'); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="inputDefault">Class *</label>
            <div class="col-md-6">
                <select class="form-control mb-md" name="class">
                    <option value="">Select Class</option>
                    <?php if (!empty($fetch_class)) {
                        foreach ($fetch_class as $fc) { ?>
                            <option value="<?php echo $fc['class_id'] ?>">
                                <?php echo $fc['class'] ?>

                            </option>
                        <?php }
                    } else {  ?>
                    <?php } ?>
                </select>
                <?php echo form_error('class'); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="inputDefault">DOB *</label>
            <div class="col-md-6">
                <input type="date" placeholder="Enter Date Of Birth" class="form-control" id="inputDefault" <?php echo set_value('dob'); ?> name="dob">
                <?php echo form_error('dob'); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="inputDefault">DOB *</label>
            <div class="col-md-6">
                <input type="text" placeholder="Enter Roll No." class="form-control" id="inputDefault" <?php echo set_value('roll'); ?> name="roll">
                <?php echo form_error('roll'); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="inputDefault">Class lock *</label>
            <div class="col-md-6">
                <input type="text" placeholder="eg: user123" class="form-control" id="inputDefault" value="<?php echo set_value('username'); ?>" name="username">
                <?php echo form_error('username'); ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" for="inputDefault">Password *</label>
            <div class="col-md-6">
                <input type="text" placeholder="Enter Password" class="form-control" id="inputDefault" value="<?php echo set_value('password'); ?>" name="password">
                <?php echo form_error('password'); ?>
            </div>
        </div>

        <div class="col-md-6 center">

            <div class="panel-body" style="margin: 2px 106px; background: #ecedf0;">
                <button type="submit" class="mb-xs mt-xs mr-xs btn btn-primary"> Add</button>
                <a href="<?= base_url(); ?>index.php/student_master " type="button" class="mb-xs mt-xs mr-xs btn btn-danger"> Cancel</a>

            </div>

        </div>
    </form>


</section>
</div>


</section>