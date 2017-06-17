<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('customer_detail/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            
            <div class="box-body no-padding">
                <table class="table table-striped" id="example">
                    <tr>
						<th>CUSTOMER ID</th>
						<th>CUSTOMER TYPE</th>
						<th>CUSTOMER PIC PATH</th>
						<th>CUSTOMER IDNO</th>
						<th>CUSTOMER NAME</th>
						<th>FILE NO</th>
						<th>OLDIC NO</th>
						<th>NON ICNO</th>
						<th>APPLICATION DATE</th>
						<th>AGENT ID</th>
						<th>VEHICLE NO</th>
						<th>RELATED TO EMP</th>
						<th>ADVERTISEMENT ID</th>
						<th>DOB</th>
						<th>AGE</th>
						<th>GENDER</th>
						<th>HOUSESTATUS ID</th>
						<th>MARTIAL STATUS</th>
						<th>EMAIL ID</th>
						<th>APPLIED BRANCH ID</th>
						<th>COMPANY ID</th>
						<th>OCCUPATION DEPT NAME</th>
						<th>RACE ID</th>
						<th>PRESENT SALARY</th>
						<th>JOBSECTOR ID</th>
						<th>YEARS OR SERVICE YEARS</th>
						<th>YEARS OR SERVICE MONTHS</th>
						<th>CREDIT LIMIT</th>
						<th>BANK ID</th>
						<th>BANK ACCOUNTNO</th>
						<th>BANK ATM CARD NO</th>
						<th>BANK ATM CARD PIN NO</th>
						<th>BANK ATM CARD VALIDITY</th>
						<th>INTERNET BANKING USER NAME</th>
						<th>INTERNET BANKING PASSWORD</th>
						<th>MONEY DEPOSIT BANK ID</th>
						<th>MONEY DEPOSIT ACCOUNT NO</th>
						<th>MONEY DEPOSIT ACCOUNT HOLDER NAME</th>
						<th>SPOUSE PIC PATH</th>
						<th>SPOUSE IDNO</th>
						<th>SPOUSE NAME</th>
						<th>SPOUSE FATHERS NAME</th>
						<th>SPOUSE MOTHERS NAME</th>
						<th>SPOUSE EMAILID</th>
						<th>SPOUSE HOME PHONE</th>
						<th>SPOUSE HAND PHONE</th>
						<th>SPOUSE ADDRESS</th>
						<th>SPOUSE DOB</th>
						<th>SPOUSE AGE</th>
						<th>SPOUSE NO OF CHILDREN</th>
						<th>SPOUSE GENDER</th>
						<th>SPOUSE RACE ID</th>
						<th>SPOUSE COMPANY NAME</th>
						<th>SPOUSE OCCUPATION DEPT</th>
						<th>SPOUSE YEARS OF SERVICE YEAR</th>
						<th>SPOUSE YEARS OF SERVICE MONTH</th>
						<th>SPOUSE SALARY</th>
						<th>SPOUSE OFFICE PHONE1</th>
						<th>SPOUSE OFFICE PHONE2</th>
						<th>SPOUSE OFFICE ADDRESS</th>
						<th>GUARANTER PIC PATH</th>
						<th>GUARANTER IDNO</th>
						<th>GUARANTER NAME</th>
						<th>GUARANTER FATHERS NAME</th>
						<th>GUARANTER MOTHERS NAME</th>
						<th>GUARANTER EMAILID</th>
						<th>GUARANTER HOME PHONE</th>
						<th>GUARANTER HAND PHONE</th>
						<th>GUARANTER ADDRESS</th>
						<th>GUARANTER DOB</th>
						<th>GUARANTER AGE</th>
						<th>GUARANTER NO OF CHILDREN</th>
						<th>GUARANTER GENDER</th>
						<th>GUARANTER RACE ID</th>
						<th>GUARANTER COMPANY NAME</th>
						<th>GUARANTER OCCUPATION DEPT</th>
						<th>GUARANTER YEARS OF SERVICE YEAR</th>
						<th>GUARANTER YEARS OF SERVICE MONTH</th>
						<th>GUARANTER SALARY</th>
						<th>GUARANTER OFFICE PHONE1</th>
						<th>GUARANTER OFFICE PHONE2</th>
						<th>GUARANTER OFFICE ADDRESS</th>
						<th>CUSTOMER POPUP NOTES</th>
						<th>VERIFICATION HR INFO</th>
						<th>VERIFICATION SPOUSE INFO</th>
						<th>VERIFICATION REFERENCE INFO</th>
						<th>VERIFICATION OTHER INFO</th>
						<th>VERIFICATION CTOS INFO</th>
						<th>VERIFICATION CTOS ATTACHMENT FILE PATH</th>
						<th>VERIFICATION COMPLETED</th>
						<th>APPLICATION APPROVED REJECTED STATUS</th>
						<th>DIRECTOR NAME2</th>
						<th>DIRECTOR2 OCCUPATION DEPT NAME</th>
						<th>DIRECTOR NAME3</th>
						<th>DIRECTOR3 OCCUPATION DEPT NAME</th>
						<th>PAID UP CAPITAL</th>
						<th>ORGTYPE ID</th>
						<th>VERIFICATION GUARANTER INFO</th>
						<th>CREATED DATE</th>
						<th>CREATED BY</th>
						<th>MODIFIED DATE</th>
						<th>MODIFIED BY</th>
						<th>CLIENT ID</th>
						<th>IS ACTIVE</th>
						<th>APPROVED REJECTED BY EMP</th>
						<th>APPLICATION APPROVED REJECTED DATE</th>
						<th>APPLICABLE AMOUNT</th>
						<th>APPLIED AMOUNT</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($customer_details as $c){ ?>
                    <tr>
						<td><?php echo $c['CUSTOMER_ID']; ?></td>
						<td><?php echo $c['CUSTOMER_TYPE']; ?></td>
						<td><?php echo $c['CUSTOMER_PIC_PATH']; ?></td>
						<td><?php echo $c['CUSTOMER_IDNO']; ?></td>
						<td><?php echo $c['CUSTOMER_NAME']; ?></td>
						<td><?php echo $c['FILE_NO']; ?></td>
						<td><?php echo $c['OLDIC_NO']; ?></td>
						<td><?php echo $c['NON_ICNO']; ?></td>
						<td><?php echo $c['APPLICATION_DATE']; ?></td>
						<td><?php echo $c['AGENT_ID']; ?></td>
						<td><?php echo $c['VEHICLE_NO']; ?></td>
						<td><?php echo $c['RELATED_TO_EMP']; ?></td>
						<td><?php echo $c['ADVERTISEMENT_ID']; ?></td>
						<td><?php echo $c['DOB']; ?></td>
						<td><?php echo $c['AGE']; ?></td>
						<td><?php echo $c['GENDER']; ?></td>
						<td><?php echo $c['HOUSESTATUS_ID']; ?></td>
						<td><?php echo $c['MARTIAL_STATUS']; ?></td>
						<td><?php echo $c['EMAIL_ID']; ?></td>
						<td><?php echo $c['APPLIED_BRANCH_ID']; ?></td>
						<td><?php echo $c['COMPANY_ID']; ?></td>
						<td><?php echo $c['OCCUPATION_DEPT_NAME']; ?></td>
						<td><?php echo $c['RACE_ID']; ?></td>
						<td><?php echo $c['PRESENT_SALARY']; ?></td>
						<td><?php echo $c['JOBSECTOR_ID']; ?></td>
						<td><?php echo $c['YEARS_OR_SERVICE_YEARS']; ?></td>
						<td><?php echo $c['YEARS_OR_SERVICE_MONTHS']; ?></td>
						<td><?php echo $c['CREDIT_LIMIT']; ?></td>
						<td><?php echo $c['BANK_ID']; ?></td>
						<td><?php echo $c['BANK_ACCOUNTNO']; ?></td>
						<td><?php echo $c['BANK_ATM_CARD_NO']; ?></td>
						<td><?php echo $c['BANK_ATM_CARD_PIN_NO']; ?></td>
						<td><?php echo $c['BANK_ATM_CARD_VALIDITY']; ?></td>
						<td><?php echo $c['INTERNET_BANKING_USER_NAME']; ?></td>
						<td><?php echo $c['INTERNET_BANKING_PASSWORD']; ?></td>
						<td><?php echo $c['MONEY_DEPOSIT_BANK_ID']; ?></td>
						<td><?php echo $c['MONEY_DEPOSIT_ACCOUNT_NO']; ?></td>
						<td><?php echo $c['MONEY_DEPOSIT_ACCOUNT_HOLDER_NAME']; ?></td>
						<td><?php echo $c['SPOUSE_PIC_PATH']; ?></td>
						<td><?php echo $c['SPOUSE_IDNO']; ?></td>
						<td><?php echo $c['SPOUSE_NAME']; ?></td>
						<td><?php echo $c['SPOUSE_FATHERS_NAME']; ?></td>
						<td><?php echo $c['SPOUSE_MOTHERS_NAME']; ?></td>
						<td><?php echo $c['SPOUSE_EMAILID']; ?></td>
						<td><?php echo $c['SPOUSE_HOME_PHONE']; ?></td>
						<td><?php echo $c['SPOUSE_HAND_PHONE']; ?></td>
						<td><?php echo $c['SPOUSE_ADDRESS']; ?></td>
						<td><?php echo $c['SPOUSE_DOB']; ?></td>
						<td><?php echo $c['SPOUSE_AGE']; ?></td>
						<td><?php echo $c['SPOUSE_NO_OF_CHILDREN']; ?></td>
						<td><?php echo $c['SPOUSE_GENDER']; ?></td>
						<td><?php echo $c['SPOUSE_RACE_ID']; ?></td>
						<td><?php echo $c['SPOUSE_COMPANY_NAME']; ?></td>
						<td><?php echo $c['SPOUSE_OCCUPATION_DEPT']; ?></td>
						<td><?php echo $c['SPOUSE_YEARS_OF_SERVICE_YEAR']; ?></td>
						<td><?php echo $c['SPOUSE_YEARS_OF_SERVICE_MONTH']; ?></td>
						<td><?php echo $c['SPOUSE_SALARY']; ?></td>
						<td><?php echo $c['SPOUSE_OFFICE_PHONE1']; ?></td>
						<td><?php echo $c['SPOUSE_OFFICE_PHONE2']; ?></td>
						<td><?php echo $c['SPOUSE_OFFICE_ADDRESS']; ?></td>
						<td><?php echo $c['GUARANTER_PIC_PATH']; ?></td>
						<td><?php echo $c['GUARANTER_IDNO']; ?></td>
						<td><?php echo $c['GUARANTER_NAME']; ?></td>
						<td><?php echo $c['GUARANTER_FATHERS_NAME']; ?></td>
						<td><?php echo $c['GUARANTER_MOTHERS_NAME']; ?></td>
						<td><?php echo $c['GUARANTER_EMAILID']; ?></td>
						<td><?php echo $c['GUARANTER_HOME_PHONE']; ?></td>
						<td><?php echo $c['GUARANTER_HAND_PHONE']; ?></td>
						<td><?php echo $c['GUARANTER_ADDRESS']; ?></td>
						<td><?php echo $c['GUARANTER_DOB']; ?></td>
						<td><?php echo $c['GUARANTER_AGE']; ?></td>
						<td><?php echo $c['GUARANTER_NO_OF_CHILDREN']; ?></td>
						<td><?php echo $c['GUARANTER_GENDER']; ?></td>
						<td><?php echo $c['GUARANTER_RACE_ID']; ?></td>
						<td><?php echo $c['GUARANTER_COMPANY_NAME']; ?></td>
						<td><?php echo $c['GUARANTER_OCCUPATION_DEPT']; ?></td>
						<td><?php echo $c['GUARANTER_YEARS_OF_SERVICE_YEAR']; ?></td>
						<td><?php echo $c['GUARANTER_YEARS_OF_SERVICE_MONTH']; ?></td>
						<td><?php echo $c['GUARANTER_SALARY']; ?></td>
						<td><?php echo $c['GUARANTER_OFFICE_PHONE1']; ?></td>
						<td><?php echo $c['GUARANTER_OFFICE_PHONE2']; ?></td>
						<td><?php echo $c['GUARANTER_OFFICE_ADDRESS']; ?></td>
						<td><?php echo $c['CUSTOMER_POPUP_NOTES']; ?></td>
						<td><?php echo $c['VERIFICATION_HR_INFO']; ?></td>
						<td><?php echo $c['VERIFICATION_SPOUSE_INFO']; ?></td>
						<td><?php echo $c['VERIFICATION_REFERENCE_INFO']; ?></td>
						<td><?php echo $c['VERIFICATION_OTHER_INFO']; ?></td>
						<td><?php echo $c['VERIFICATION_CTOS_INFO']; ?></td>
						<td><?php echo $c['VERIFICATION_CTOS_ATTACHMENT_FILE_PATH']; ?></td>
						<td><?php echo $c['VERIFICATION_COMPLETED']; ?></td>
						<td><?php echo $c['APPLICATION_APPROVED_REJECTED_STATUS']; ?></td>
						<td><?php echo $c['DIRECTOR_NAME2']; ?></td>
						<td><?php echo $c['DIRECTOR2_OCCUPATION_DEPT_NAME']; ?></td>
						<td><?php echo $c['DIRECTOR_NAME3']; ?></td>
						<td><?php echo $c['DIRECTOR3_OCCUPATION_DEPT_NAME']; ?></td>
						<td><?php echo $c['PAID_UP_CAPITAL']; ?></td>
						<td><?php echo $c['ORGTYPE_ID']; ?></td>
						<td><?php echo $c['VERIFICATION_GUARANTER_INFO']; ?></td>
						<td><?php echo $c['CREATED_DATE']; ?></td>
						<td><?php echo $c['CREATED_BY']; ?></td>
						<td><?php echo $c['MODIFIED_DATE']; ?></td>
						<td><?php echo $c['MODIFIED_BY']; ?></td>
						<td><?php echo $c['CLIENT_ID']; ?></td>
						<td><?php echo $c['IS_ACTIVE']; ?></td>
						<td><?php echo $c['APPROVED_REJECTED_BY_EMP']; ?></td>
						<td><?php echo $c['APPLICATION_APPROVED_REJECTED_DATE']; ?></td>
						<td><?php echo $c['APPLICABLE_AMOUNT']; ?></td>
						<td><?php echo $c['APPLIED_AMOUNT']; ?></td>
						<td>
                            <a href="<?php echo site_url('customer_detail/edit/'.$c['CUSTOMER_ID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('customer_detail/remove/'.$c['CUSTOMER_ID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
