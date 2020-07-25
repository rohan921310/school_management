<script type="text/javascript" src="<?php echo base_url(); ?>assets/javascripts/jquery.min.js"></script>

<style>
    #loading {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1000;
        background-color: white;
        opacity: .8;
    }

    .ajax-loader {
        position: absolute;
        left: 50%;
        top: 50%;
        margin-left: -32px;
        /* -1 * image width / 2 */
        margin-top: -32px;
        /* -1 * image height / 2 */
        display: block;
    }
</style>
<div id="loading" style="display: none;">
    <span class="ajax-loader"><img src="<?php echo base_url(); ?>img/loading.gif"></span>
</div>
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Class Master</h2>

    </header>

    <?php echo $this->session->flashdata('done'); ?>
    <!-- start: page -->
    <div class="row">
        <div class="col-xs-12">

            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">

                    </div>
                    <a id="addToTable" href="<?= base_url(); ?>index.php/add_class" class="btn btn-primary">Add </a>
                </header>
                <div class="panel-body">
                    <table class="table table-bordered table-striped mb-none" id="datatable-default">
                        <thead>
                            <tr>
                                <th>Class</th>
                                <th>Remarks</th>
                             
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>




                            <tr data-item-id="7" role="row" class="odd">
                                <?php if (!empty($view_class)) {
                                    foreach ($view_class as $class) { ?>
                            <tr>



                                <td><?php echo $class->class; ?></td>

                                <td><?php echo $class->remark; ?></td>
                              

                                <td class="actions">


                                    <a href="<?php echo base_url(); ?>index.php/get_class_master?class_id=<?php echo $class->class_id; ?>" ><i class="fa fa-pencil"></i></a>



                                    <a href="<?php echo base_url(); ?>index.php/delete_class_master?class_id=<?php echo $class->class_id; ?>" onclick="return confirm('Are you sure ?')" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        <?php }
                                } else {  ?>

                        <tr>
                            <td colspan="5"> records not found</td>
                        </tr>
                    <?php } ?>
                    </tr>



                        </tbody>
                    </table>
                </div>
            </section>