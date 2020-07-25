<section role="main" class="content-body pb-none">
    <header class="page-header">
        <h2>Assign Master</h2>

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
    <form class="form-horizontal form-bordered" method="post" action="<?php echo base_url(); ?>index.php/add_assign">
        <div class="form-group">
            <label class="col-md-2 control-label" for="inputDefault">Class *</label>
            <div class="col-md-6">
                <select class="form-control mb-md" name="class_id">
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
                <?php echo form_error('class_id'); ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" for="inputDefault">Subject *</label>
            <div class="col-md-6">
                <select class="form-control mb-md" name="subject_id">
                    <option value="">Select Subject</option>
                    <?php if (!empty($fetch_subject)) {
                        foreach ($fetch_subject as $fs) { ?>
                            <option value="<?php echo $fs['subject_id'] ?>">
                                <?php echo $fs['subject'] ?>

                            </option>
                        <?php }
                    } else {  ?>
                    <?php } ?>
                </select>
                <?php echo form_error('subject_id'); ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" for="inputDefault">Teacher *</label>
            <div class="col-md-6">
                <select class="form-control mb-md" name="teacher_id">
                    <option value="">Select Class</option>
                    <?php if (!empty($fetch_teacher)) {
                        foreach ($fetch_teacher as $ft) { ?>
                            <option value="<?php echo $ft['teacher_id'] ?>">
                                <?php echo $ft['teacher'] ?>

                            </option>
                        <?php }
                    } else {  ?>
                    <?php } ?>
                </select>
                <?php echo form_error('teacher_id'); ?>

            </div>
        </div>
        

        <div class="col-md-6 center">

            <div class="panel-body" style="margin: 2px 106px; background: #ecedf0;">
                <button type="submit" class="mb-xs mt-xs mr-xs btn btn-primary"> Add</button>
                <a href="<?= base_url(); ?>index.php/assign_master " type="button" class="mb-xs mt-xs mr-xs btn btn-danger"> Cancel</a>

            </div>

        </div>
    </form>


</section>
</div>


</section>