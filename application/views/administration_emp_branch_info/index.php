<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('administration_emp_branch_info/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>

            <div class="box-body no-padding">
                <div class="col-md-12 table-responsive">
                    <table class="table table-striped table-bordered admin-datatable" id="admin_emp_branch_table" data-href="<?php echo base_url(); ?>administration_emp_branch_info/getAllEmpBranchInfo">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>EMP ID</th>
                                <th>BRANCH ID</th>
                                <th class="text-center">ACTIONS</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
