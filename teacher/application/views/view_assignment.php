<div class="page-wrapper" style="display: block;">

<div class="table-responsive">
                            <table class="table no-wrap v-middle">
                                <thead>
                                    <tr class="border-0">
                                        <th class="border-0">Name</th>
                                        <th class="border-0">Roll No.</th>
                                        <th class="border-0">Class</th>
                                        <th class="border-0">Download/View</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($result)) {
                                        foreach ($result as $re) { ?>
                                            <tr>
                                                <td>
                                                    <div class="d-flex no-block align-items-center">
                                                        <div class="mr-2"></div>
                                                        <div class="">
                                                            <span><?php echo $re['name']; ?></span></div>
                                                    </div>
                                                </td>
                                                <td><?php echo $re['roll']; ?></td>
                                                <td>
                                                    <?php echo $re['class']; ?>
                                                </td>
                                                <td> <button type="button" class="btn waves-effect waves-light btn-rounded btn-danger"> <a href="<?php echo base_url()."../student/load/uploads/".$re['student_assignment']; ?>" style="color: white;"> Download
                                                        </a> </button></td>
                                            </tr>
                                        <?php }
                                    } else {  ?>

                                        No results found
                                    <?php } ?>





                                </tbody>
                            </table>
                        </div>
                        </div>

