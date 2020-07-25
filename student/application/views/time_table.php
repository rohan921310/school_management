<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper" style="display: block;">

   <div class="container-fluid">


      <!-- <?php if (!empty($result)) {
               foreach ($result as $ft) { ?>
                                   
                                  <textarea name="<?php echo $ft['class_id'] ?>"  id="" cols="30" rows="10"> <?php echo $ft['time_table'] ?></textarea>
                               <script src="<?= base_url('ckeditor/ckeditor.js'); ?>"></script>
                                    <script>
                                       CKEDITOR.replace('<?php echo $ft['class_id'] ?>');
                                    </script>
                   
                   <?php }
               } else {  ?>
<h3>

    No Class Assigned Yet
</h3>

<?php } ?> -->
      <div class="card-body ">

         <!-- <div class="table-responsive ">
            <table class="table table-bordered table-responsive" style="
    background: white;">
               <thead>

               </thead>
               <tbody>
                  <?php
                  foreach ($result as $ft) { ?>
                     <tr>
                        <td>

                           <?php echo $ft['time_table'] ?>
                        </td>
                     </tr>
                  <?php }
                  ?>
               </tbody>
            </table>
         </div> -->


         <div class="card">
            <div class="card-body">
               <!-- <h4 class="card-title">Editable with Datatable</h4>
               <h6 class="card-subtitle">Just click on word which you want to change and enter</h6> -->
               <div id="editable-datatable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                  <div class="row">
                     <div class="col-sm-12 col-md-6">
                        <div class="dataTables_length" id="editable-datatable_length"><label>Show <select name="editable-datatable_length" aria-controls="editable-datatable" class="form-control form-control-sm">
                                 <option value="10">10</option>
                                 <option value="25">25</option>
                                 <option value="50">50</option>
                                 <option value="100">100</option>
                              </select> entries</label></div>
                     </div>
                     <div class="col-sm-12 col-md-6">
                        <div id="editable-datatable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="editable-datatable"></label></div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-12">
                        <table class="table table-striped table-bordered dataTable" id="editable-datatable" style="cursor: pointer;" role="grid" aria-describedby="editable-datatable_info">
                           <thead>
                              <tr role="row">
                                 <!-- <th class="sorting_asc" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 149px;">Teacher Name</th> -->
                                 <th class="sorting" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 200px;">Class</th>
                                 <th class="sorting" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 213px;">Time Table</th>
                                 <!-- <th class="sorting" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 126px;">Engine version</th>
                                 <th class="sorting" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 95px;">CSS grade</th> -->
                              </tr>
                           </thead>
                           <tbody>

                           <?php
                  foreach ($result as $ft) { ?>
                    
                        <tr id="7" class="gradeA odd" role="row">
                                 <!-- <td tabindex="1" class="sorting_1"><?php echo $ft['teacher'] ?></td> -->
                                 <td tabindex="1"><?php echo $ft['class'] ?></td>
                                 <td tabindex="1">  <?php echo $ft['time_table'] ?></td>
                                 <!--  <td class="center" tabindex="1">1.7</td>
                                 <td class="center" tabindex="1">A</td> -->
                              </tr>
                         
                    
                  <?php }
                  ?>
                             
                             
                           </tbody>
                        
                        </table>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="editable-datatable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                     </div>
                     <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="editable-datatable_paginate">
                           <ul class="pagination">
                              <li class="paginate_button page-item previous disabled" id="editable-datatable_previous"><a href="#" aria-controls="editable-datatable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                              <li class="paginate_button page-item active"><a href="#" aria-controls="editable-datatable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                              <li class="paginate_button page-item "><a href="#" aria-controls="editable-datatable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                              <li class="paginate_button page-item "><a href="#" aria-controls="editable-datatable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                              <li class="paginate_button page-item "><a href="#" aria-controls="editable-datatable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                              <li class="paginate_button page-item "><a href="#" aria-controls="editable-datatable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                              <li class="paginate_button page-item "><a href="#" aria-controls="editable-datatable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                              <li class="paginate_button page-item next" id="editable-datatable_next"><a href="#" aria-controls="editable-datatable" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <input style="position: absolute; display: none;">
            </div>
         </div>






      </div>
   </div>


</div>