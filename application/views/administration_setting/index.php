<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('administration_setting/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>

            <div class="box-body no-padding table-responsive">
                <table class="table table-striped table-bordered admin-datatable" data-href="<?php echo base_url(); ?>administration_setting/getAllAdminSettings">
                    <thead>
                        <tr>
                            <th>SETTINGS ID</th>
                            <th>BRANCH ID</th>
                            <th>LATE PAYMENT CHARGES</th>
                            <th>SITE VISIT CHARGES</th>
                            <th>LOD CHARGES</th>
                            <th>OTHER CHARGES</th>
                            <th>GIVEN DISCOUNT</th>
                            <th>STAMPING CHARGES</th>
                            <th>PROCESSING FEES</th>
                            <th>FILING CHARGES</th>
                            <th>CASH ACCOUNT</th>
                            <th>BANK ACCOUNT</th>
                            <th>NEW LOAN ACCOUNT GIVEN</th>
                            <th>RECEIVED CAPITAL</th>
                            <th>RECEIVED INTEREST</th>
                            <th>LOANS TAKEN INVESTMENT</th>
                            <th>PAID CAPITAL INVESTMENT</th>
                            <th>PAID INTEREST</th>
                            <th>APPLICATION NO</th>
                            <th>PAY VOUCHER</th>
                            <th>PERSONAL LOAN NO</th>
                            <th>CHEQUE LOAN NO</th>
                            <th>HIRE PURCHASE LOAN NO</th>
                            <th>SECURITY LOAN NO</th>
                            <th>CHEQUE VS LOAN</th>
                            <th>ALLOW FUTURE DATE</th>
                            <th>CALCULATION TYPE</th>
                            <th>ADVANCE LOAN</th>
                            <th>STATEMENT</th>
                            <th>FLEXIBILITY OF INTEREST</th>
                            <th>INTEREST TYPE</th>
<!--                            <th>PAYMENT MODE</th>
                            <th>GOLD LOAN</th>
                            <th>A</th>
                            <th>B</th>
                            <th>C</th>
                            <th>D</th>
                            <th>E</th>
                            <th>F</th>
                            <th>G</th>
                            <th>H</th>
                            <th>MAX SMS PER WEEK</th>
                            <th>CREATED DATE</th>
                            <th>CREATED BY</th>
                            <th>MODIFIED DATE</th>
                            <th>MODIFIED BY</th>-->
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <?php /* foreach($administration_settings as $a){ ?>
                      <tr>
                      <td><?php echo $a['SETTINGS_ID']; ?></td>
                      <td><?php echo $a['BRANCH_ID']; ?></td>
                      <td><?php echo $a['LATE_PAYMENT_CHARGES']; ?></td>
                      <td><?php echo $a['SITE_VISIT_CHARGES']; ?></td>
                      <td><?php echo $a['LOD_CHARGES']; ?></td>
                      <td><?php echo $a['OTHER_CHARGES']; ?></td>
                      <td><?php echo $a['GIVEN_DISCOUNT']; ?></td>
                      <td><?php echo $a['STAMPING_CHARGES']; ?></td>
                      <td><?php echo $a['PROCESSING_FEES']; ?></td>
                      <td><?php echo $a['FILING_CHARGES']; ?></td>
                      <td><?php echo $a['CASH_ACCOUNT']; ?></td>
                      <td><?php echo $a['BANK_ACCOUNT']; ?></td>
                      <td><?php echo $a['NEW_LOAN_ACCOUNT_GIVEN']; ?></td>
                      <td><?php echo $a['RECEIVED_CAPITAL']; ?></td>
                      <td><?php echo $a['RECEIVED_INTEREST']; ?></td>
                      <td><?php echo $a['LOANS_TAKEN_INVESTMENT']; ?></td>
                      <td><?php echo $a['PAID_CAPITAL_INVESTMENT']; ?></td>
                      <td><?php echo $a['PAID_INTEREST']; ?></td>
                      <td><?php echo $a['APPLICATION_NO']; ?></td>
                      <td><?php echo $a['PAY_VOUCHER']; ?></td>
                      <td><?php echo $a['PERSONAL_LOAN_NO']; ?></td>
                      <td><?php echo $a['CHEQUE_LOAN_NO']; ?></td>
                      <td><?php echo $a['HIRE_PURCHASE_LOAN_NO']; ?></td>
                      <td><?php echo $a['SECURITY_LOAN_NO']; ?></td>
                      <td><?php echo $a['CHEQUE_VS_LOAN']; ?></td>
                      <td><?php echo $a['ALLOW_FUTURE_DATE']; ?></td>
                      <td><?php echo $a['CALCULATION_TYPE']; ?></td>
                      <td><?php echo $a['ADVANCE_LOAN']; ?></td>
                      <td><?php echo $a['STATEMENT']; ?></td>
                      <td><?php echo $a['FLEXIBILITY_OF_INTEREST']; ?></td>
                      <td><?php echo $a['INTEREST_TYPE']; ?></td>
                      <td><?php echo $a['PAYMENT_MODE']; ?></td>
                      <td><?php echo $a['GOLD_LOAN']; ?></td>
                      <td><?php echo $a['A']; ?></td>
                      <td><?php echo $a['B']; ?></td>
                      <td><?php echo $a['C']; ?></td>
                      <td><?php echo $a['D']; ?></td>
                      <td><?php echo $a['E']; ?></td>
                      <td><?php echo $a['F']; ?></td>
                      <td><?php echo $a['G']; ?></td>
                      <td><?php echo $a['H']; ?></td>
                      <td><?php echo $a['MAX_SMS_PER_WEEK']; ?></td>
                      <td><?php echo $a['CREATED_DATE']; ?></td>
                      <td><?php echo $a['CREATED_BY']; ?></td>
                      <td><?php echo $a['MODIFIED_DATE']; ?></td>
                      <td><?php echo $a['MODIFIED_BY']; ?></td>
                      <td>
                      <a href="<?php echo site_url('administration_setting/edit/'.$a['SETTINGS_ID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                      <a href="<?php echo site_url('administration_setting/remove/'.$a['SETTINGS_ID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                      </td>
                      </tr>
                      <?php } */ ?>
                </table>
            </div>
        </div>
    </div>
</div>
