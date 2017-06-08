<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('administration_emp_branch_info/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>

            <div class="box-body no-padding table-responsive">
                <table class="table table-striped table-bordered admin-datatable" data-href="<?php echo base_url(); ?>administration_emp_branch_info/getAllEmpBranchInfo">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>EMP ID</th>
                            <th>BRANCH ID</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <?php /* foreach ($administration_emp_branch_info as $a) { ?>
                      <tr>
                      <td><?php echo $a['ID']; ?></td>
                      <td><?php echo $a['EMP_ID']; ?></td>
                      <td><?php echo $a['BRANCH_ID']; ?></td>
                      <td>
                      <a href="<?php echo site_url('administration_emp_branch_info/edit/' . $a['ID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                      <a href="<?php echo site_url('administration_emp_branch_info/remove/' . $a['ID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                      </td>
                      </tr>
                      <?php } */ ?>
                </table>
            </div>
        </div>
    </div>
</div>
