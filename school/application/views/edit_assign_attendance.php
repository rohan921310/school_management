s<section role="main" class="content-body pb-none">
    <header class="page-header">
        <h2>Assign Attendance</h2>

        <div class="right-wrapper pull-right">



        </div>
    </header>

    <!-- start: page -->

    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a>

            </div>

            <h2 class="panel-title">Update</h2>
        </header>

    </section>
    <form class="form-horizontal form-bordered" method="post" action="<?php echo base_url(); ?>index.php/edit_assign_attendance">
    <input type="hidden" class="form-control" id="role_id" name="attendance_id" value="<?php echo $assign_attendance['attendance_id'];?> " required >
      
        <div class="form-group">
            <label class="col-md-2 control-label" for="inputDefault">Class *</label>
            <div class="col-md-6">
                <select class="form-control mb-md" name="class">
                    <option value="<?php echo $student['class'];?> ">Select Class</option>
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
            <label class="col-md-2 control-label" for="inputDefault">Teacher *</label>
            <div class="col-md-6">
                <select class="form-control mb-md" name="teacher">
                    <option value="<?php echo $teacher['teacher'];?> ">Select Teacher</option>
                    <?php if (!empty($fetch_teacher)) {
                        foreach ($fetch_teacher as $ft) { ?>
                            <option value="<?php echo $ft['teacher_id'] ?>">
                                <?php echo $ft['teacher'] ?>

                            </option>
                        <?php }
                    } else {  ?>
                    <?php } ?>
                </select>
                <?php echo form_error('teacher'); ?>
            </div>
        </div>
       
     
     
      



        <div class="col-md-6 center">

            <div class="panel-body" style="margin: 2px 106px; background: #ecedf0;">
                <button type="submit" class="mb-xs mt-xs mr-xs btn btn-primary"> Add</button>
                <a href="<?= base_url(); ?>index.php/assign_attendance " type="button" class="mb-xs mt-xs mr-xs btn btn-danger"> Cancel</a>

            </div>

        </div>
    </form>


</section>
</div>


</section>