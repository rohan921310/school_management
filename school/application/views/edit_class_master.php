<section role="main" class="content-body pb-none">
    <header class="page-header">
        <h2>Class Master</h2>

        <div class="right-wrapper pull-right">



        </div>
    </header>

    <!-- start: page -->

    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a>

            </div>

            <h2 class="panel-title">Update Details</h2>
        </header>

    </section>
      <form class="form-horizontal form-bordered" method="post" action="<?php echo base_url(); ?>index.php/edit_class_master">
      <input type="hidden" class="form-control" id="role_id" name="class_id" value="<?php echo $class['class_id'];?> " required >
     <h1>
     
      </h1>
      <div class="form-group">
            <label class="col-md-2 control-label" for="inputDefault">Class *</label>
            <div class="col-md-6">
                <input type="text" class="form-control" id="inputDefault" value="<?php echo $class['class'];?> " name="class">
                <?php echo form_error('class'); ?>
            </div>
        </div>
   <div class="form-group">
            <label class="col-md-2 control-label" for="textareaDefault">Remark</label>
            <div class="col-md-6">
                <input type="text" class="form-control" rows="3" id="textareaDefault" value="<?php echo $class['remark'];?>" name="remark"></textarea>

            </div>
        </div>

    
        <div class="col-md-6 center">

            <div class="panel-body" style="margin: 2px 106px; background: #ecedf0;">
                <button type="submit" class="mb-xs mt-xs mr-xs btn btn-primary"> Add</button>
                <a href="<?= base_url(); ?>index.php/class_master " type="button" class="mb-xs mt-xs mr-xs btn btn-danger"> Cancel</a>

            </div>

        </div>
    </form>


</section>
</div>


</section>