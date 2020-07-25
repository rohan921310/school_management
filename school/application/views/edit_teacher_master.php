<section role="main" class="content-body pb-none">
    <header class="page-header">
        <h2>Teacher Master</h2>

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
      <form class="form-horizontal form-bordered" method="post" action="<?php echo base_url(); ?>index.php/add_teacher">
      <input type="hidden" class="form-control" id="role_id" name="teacher_id" value="<?php echo $teacher['teacher_id'];?> " required >
      <div class="form-group">
            <label class="col-md-2 control-label" for="inputDefault">Teacher Name *</label>
            <div class="col-md-6">
                <input type="text" placeholder="Enter Class" class="form-control" id="inputDefault" value="<?php echo $teacher['teacher'];?> " name="teacher">
                <?php echo form_error('teacher'); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="inputDefault">Email *</label>
            <div class="col-md-6">
                <input type="text" placeholder="Enter Class" class="form-control" id="inputDefault" value="<?php echo $teacher['email'];?> " name="email">
                <?php echo form_error('email'); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="inputDefault">Mobile *</label>
            <div class="col-md-6">
                <input type="text" placeholder="Enter Class" class="form-control" id="inputDefault" value="<?php echo $teacher['mobile'];?> " name="mobile">
                <?php echo form_error('mobile'); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="inputDefault">Address *</label>
            <div class="col-md-6">
                <input type="text" placeholder="Enter Class" class="form-control" id="inputDefault" value="<?php echo $teacher['address'];?> "  name="address">
                <?php echo form_error('address'); ?>
            </div>
        </div>
       
        <div class="form-group">
            <label class="col-md-2 control-label" for="inputDefault">Username *</label>
            <div class="col-md-6">
                <input type="text" placeholder="Enter Class" class="form-control" id="inputDefault" value="<?php echo $teacher['username'];?> "  name="username">
                <?php echo form_error('username'); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="inputDefault">Password *</label>
            <div class="col-md-6">
                <input type="text" placeholder="Enter Class" class="form-control" id="inputDefault" value="<?php echo $teacher['password'];?> " name="password">
                <?php echo form_error('password'); ?>
            </div>
        </div>

        <div class="col-md-6 center">

            <div class="panel-body" style="margin: 2px 106px; background: #ecedf0;">
                <button type="submit" class="mb-xs mt-xs mr-xs btn btn-primary"> Add</button>
                <a href="<?= base_url(); ?>index.php/teacher_master " type="button" class="mb-xs mt-xs mr-xs btn btn-danger"> Cancel</a>

            </div>

        </div>
    </form>


</section>
</div>


</section>