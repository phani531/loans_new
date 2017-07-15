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
                <div class="col-md-12">
                    <table class="table table-striped table-bordered admin-datatable" data-href="<?php echo base_url(); ?>administration_employee/getAllAdminEmployees" id="admin_emp_table">
                        <thead>
                            <tr>
                                <th>EMP ID</th>
                                <th>EMP NAME</th>
                                <th>CLIENT</th>
                                <th>IC NO</th>
                                <th>STAFF NO</th>
                                <th>ADDRESS</th>
                                <th>MOBILE NO</th>
                                <th>PHONE NO</th>
                                <th>EMAIL ID</th>
                                <th>GENDER</th>
                                <th>DESIGNATION ID</th>
                                <th>BASIC SALARY</th>
                                <th>LANGUAGE</th>
                                <th>VIEW OTHER BRANCH DETAILS</th>
                                <th>ROLE</th>
                                <th class="text-center">ACTIONS</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
