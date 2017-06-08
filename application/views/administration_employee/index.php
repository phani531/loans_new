<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('administration_employee/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>

            <div class="box-body no-padding table-responsive">
                <table class="table table-striped table-bordered admin-datatable" data-href="<?php echo base_url(); ?>administration_employee/getAllAdminEmployees">
                    <thead>
                        <tr>
                            <th>EMP ID</th>
                            <th>EMP NAME</th>
                            <th>CLIENT ID</th>
                            <th>IS ACTIVE</th>
                            <th>CREATED DATE</th>
                            <th>CREATED BY</th>
                            <th>MODIFIED DATE</th>
                            <th>MODIFIED BY</th>
                            <th>IC NO</th>
                            <th>STAFF NO</th>
                            <th>ADDRESS</th>
                            <th>MOBILE NO</th>
                            <th>PHONE NO</th>
                            <th>EMAIL ID</th>
                            <th>GENDER</th>
                            <th>DESIGNATION ID</th>
                            <th>ACTIVE STATUS</th>
                            <th>BASIC SALARY</th>
                            <th>LANGUAGE</th>
                            <th>EMPLOYEE PIC PATH</th>
                            <th>VIEW OTHER BRANCH DETAILS</th>
                            <th>MULTIPLE LOGINS</th>
                            <th>ROLE ID</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <?php /* foreach($administration_employees as $a){ ?>
                      <tr>
                      <td><?php echo $a['EMP_ID']; ?></td>
                      <td><?php echo $a['EMP_NAME']; ?></td>
                      <td><?php echo $a['CLIENT_ID']; ?></td>
                      <td><?php echo $a['IS_ACTIVE']; ?></td>
                      <td><?php echo $a['CREATED_DATE']; ?></td>
                      <td><?php echo $a['CREATED_BY']; ?></td>
                      <td><?php echo $a['MODIFIED_DATE']; ?></td>
                      <td><?php echo $a['MODIFIED_BY']; ?></td>
                      <td><?php echo $a['IC_NO']; ?></td>
                      <td><?php echo $a['STAFF_NO']; ?></td>
                      <td><?php echo $a['ADDRESS']; ?></td>
                      <td><?php echo $a['MOBILE_NO']; ?></td>
                      <td><?php echo $a['PHONE_NO']; ?></td>
                      <td><?php echo $a['EMAIL_ID']; ?></td>
                      <td><?php echo $a['GENDER']; ?></td>
                      <td><?php echo $a['DESIGNATION_ID']; ?></td>
                      <td><?php echo $a['ACTIVE_STATUS']; ?></td>
                      <td><?php echo $a['BASIC_SALARY']; ?></td>
                      <td><?php echo $a['LANGUAGE']; ?></td>
                      <td><?php echo $a['EMPLOYEE_PIC_PATH']; ?></td>
                      <td><?php echo $a['VIEW_OTHER_BRANCH_DETAILS']; ?></td>
                      <td><?php echo $a['MULTIPLE_LOGINS']; ?></td>
                      <td><?php echo $a['ROLE_ID']; ?></td>
                      <td>
                      <a href="<?php echo site_url('administration_employee/edit/'.$a['EMP_ID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                      <a href="<?php echo site_url('administration_employee/remove/'.$a['EMP_ID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                      </td>
                      </tr>
                      <?php } */ ?>
                </table>
            </div>
        </div>
    </div>
</div>
