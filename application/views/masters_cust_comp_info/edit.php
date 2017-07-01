<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Edit</h3>
            </div>
            <?php echo validation_errors(); ?>
            <?php echo form_open('masters_cust_comp_info/edit/' . $masters_cust_comp_info['COMPANY_ID'], array("class" => "form-horizontal")); ?>

            <div class="box-body">
                <div class="form-group">
                    <label for="COMPANY_CODE" class="col-md-4 control-label">COMPANY CODE</label>
                    <div class="col-md-8">
                        <input type="text" name="COMPANY_CODE" value="<?php echo ($this->input->post('COMPANY_CODE') ? $this->input->post('COMPANY_CODE') : $masters_cust_comp_info['COMPANY_CODE']); ?>" class="form-control" id="COMPANY_CODE" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="COMPANY_NAME" class="col-md-4 control-label">COMPANY NAME</label>
                    <div class="col-md-8">
                        <input type="text" name="COMPANY_NAME" value="<?php echo ($this->input->post('COMPANY_NAME') ? $this->input->post('COMPANY_NAME') : $masters_cust_comp_info['COMPANY_NAME']); ?>" class="form-control" id="COMPANY_NAME" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="COMPANY_ADDRESS" class="col-md-4 control-label">COMPANY ADDRESS</label>
                    <div class="col-md-8">
                        <textarea name="COMPANY_ADDRESS" class="form-control" id="COMPANY_ADDRESS"><?php echo ($this->input->post('COMPANY_ADDRESS') ? $this->input->post('COMPANY_ADDRESS') : $masters_cust_comp_info['COMPANY_ADDRESS']); ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="COMPANY_CITY" class="col-md-4 control-label">COMPANY CITY</label>
                    <div class="col-md-8">
                        <input type="text" name="COMPANY_CITY" value="<?php echo ($this->input->post('COMPANY_CITY') ? $this->input->post('COMPANY_CITY') : $masters_cust_comp_info['COMPANY_CITY']); ?>" class="form-control" id="COMPANY_CITY" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="STATE_ID" class="col-md-4 control-label">STATE ID</label>
                    <div class="col-md-8">
                        <input type="text" name="STATE_ID" value="<?php echo ($this->input->post('STATE_ID') ? $this->input->post('STATE_ID') : $masters_cust_comp_info['STATE_ID']); ?>" class="form-control" id="STATE_ID" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="COMPANY_POSTCODE" class="col-md-4 control-label">COMPANY POSTCODE</label>
                    <div class="col-md-8">
                        <input type="text" name="COMPANY_POSTCODE" value="<?php echo ($this->input->post('COMPANY_POSTCODE') ? $this->input->post('COMPANY_POSTCODE') : $masters_cust_comp_info['COMPANY_POSTCODE']); ?>" class="form-control" id="COMPANY_POSTCODE" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="COMPANY_PHONE1" class="col-md-4 control-label">COMPANY PHONE1</label>
                    <div class="col-md-8">
                        <input type="text" name="COMPANY_PHONE1" value="<?php echo ($this->input->post('COMPANY_PHONE1') ? $this->input->post('COMPANY_PHONE1') : $masters_cust_comp_info['COMPANY_PHONE1']); ?>" class="form-control" id="COMPANY_PHONE1" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="COMPANY_PHONE2" class="col-md-4 control-label">COMPANY PHONE2</label>
                    <div class="col-md-8">
                        <input type="text" name="COMPANY_PHONE2" value="<?php echo ($this->input->post('COMPANY_PHONE2') ? $this->input->post('COMPANY_PHONE2') : $masters_cust_comp_info['COMPANY_PHONE2']); ?>" class="form-control" id="COMPANY_PHONE2" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="COMPANY_FAX" class="col-md-4 control-label">COMPANY FAX</label>
                    <div class="col-md-8">
                        <input type="text" name="COMPANY_FAX" value="<?php echo ($this->input->post('COMPANY_FAX') ? $this->input->post('COMPANY_FAX') : $masters_cust_comp_info['COMPANY_FAX']); ?>" class="form-control" id="COMPANY_FAX" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="COMPANY_CREDIT_LIMIT" class="col-md-4 control-label">COMPANY CREDIT LIMIT</label>
                    <div class="col-md-8">
                        <input type="text" name="COMPANY_CREDIT_LIMIT" value="<?php echo ($this->input->post('COMPANY_CREDIT_LIMIT') ? $this->input->post('COMPANY_CREDIT_LIMIT') : $masters_cust_comp_info['COMPANY_CREDIT_LIMIT']); ?>" class="form-control" id="COMPANY_CREDIT_LIMIT" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="COMPANY_SALARY_DAY_FROM1" class="col-md-4 control-label">COMPANY SALARY DAY FROM1</label>
                    <div class="col-md-8">
                        <input type="text" name="COMPANY_SALARY_DAY_FROM1" value="<?php echo ($this->input->post('COMPANY_SALARY_DAY_FROM1') ? $this->input->post('COMPANY_SALARY_DAY_FROM1') : $masters_cust_comp_info['COMPANY_SALARY_DAY_FROM1']); ?>" class="form-control" id="COMPANY_SALARY_DAY_FROM1" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="COMPANY_SALARY_DAY_TO1" class="col-md-4 control-label">COMPANY SALARY DAY TO1</label>
                    <div class="col-md-8">
                        <input type="text" name="COMPANY_SALARY_DAY_TO1" value="<?php echo ($this->input->post('COMPANY_SALARY_DAY_TO1') ? $this->input->post('COMPANY_SALARY_DAY_TO1') : $masters_cust_comp_info['COMPANY_SALARY_DAY_TO1']); ?>" class="form-control" id="COMPANY_SALARY_DAY_TO1" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="COMPANY_SALARY_DAY_FROM2" class="col-md-4 control-label">COMPANY SALARY DAY FROM2</label>
                    <div class="col-md-8">
                        <input type="text" name="COMPANY_SALARY_DAY_FROM2" value="<?php echo ($this->input->post('COMPANY_SALARY_DAY_FROM2') ? $this->input->post('COMPANY_SALARY_DAY_FROM2') : $masters_cust_comp_info['COMPANY_SALARY_DAY_FROM2']); ?>" class="form-control" id="COMPANY_SALARY_DAY_FROM2" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="COMPANY_SALARY_DAY_TO2" class="col-md-4 control-label">COMPANY SALARY DAY TO2</label>
                    <div class="col-md-8">
                        <input type="text" name="COMPANY_SALARY_DAY_TO2" value="<?php echo ($this->input->post('COMPANY_SALARY_DAY_TO2') ? $this->input->post('COMPANY_SALARY_DAY_TO2') : $masters_cust_comp_info['COMPANY_SALARY_DAY_TO2']); ?>" class="form-control" id="COMPANY_SALARY_DAY_TO2" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="PIC_NAME" class="col-md-4 control-label">PIC NAME</label>
                    <div class="col-md-8">
                        <input type="text" name="PIC_NAME" value="<?php echo ($this->input->post('PIC_NAME') ? $this->input->post('PIC_NAME') : $masters_cust_comp_info['PIC_NAME']); ?>" class="form-control" id="PIC_NAME" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="PIC_DESIGNATION" class="col-md-4 control-label">PIC DESIGNATION</label>
                    <div class="col-md-8">
                        <input type="text" name="PIC_DESIGNATION" value="<?php echo ($this->input->post('PIC_DESIGNATION') ? $this->input->post('PIC_DESIGNATION') : $masters_cust_comp_info['PIC_DESIGNATION']); ?>" class="form-control" id="PIC_DESIGNATION" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="PIC_CONTACT_NO" class="col-md-4 control-label">PIC CONTACT NO</label>
                    <div class="col-md-8">
                        <input type="text" name="PIC_CONTACT_NO" value="<?php echo ($this->input->post('PIC_CONTACT_NO') ? $this->input->post('PIC_CONTACT_NO') : $masters_cust_comp_info['PIC_CONTACT_NO']); ?>" class="form-control" id="PIC_CONTACT_NO" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="PIC_MOBILE_NO" class="col-md-4 control-label">PIC MOBILE NO</label>
                    <div class="col-md-8">
                        <input type="text" name="PIC_MOBILE_NO" value="<?php echo ($this->input->post('PIC_MOBILE_NO') ? $this->input->post('PIC_MOBILE_NO') : $masters_cust_comp_info['PIC_MOBILE_NO']); ?>" class="form-control" id="PIC_MOBILE_NO" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="COMPANY_BALANCE_CREDIT_LIMIT" class="col-md-4 control-label">COMPANY BALANCE CREDIT LIMIT</label>
                    <div class="col-md-8">
                        <input type="text" name="COMPANY_BALANCE_CREDIT_LIMIT" value="<?php echo ($this->input->post('COMPANY_BALANCE_CREDIT_LIMIT') ? $this->input->post('COMPANY_BALANCE_CREDIT_LIMIT') : $masters_cust_comp_info['COMPANY_BALANCE_CREDIT_LIMIT']); ?>" class="form-control" id="COMPANY_BALANCE_CREDIT_LIMIT" />
                    </div>
                </div>
            </div>

            <div class="box-footer">
                <div class="form-group">
                    <div class="col-md-4"></div>
                    <div class="col-md-8">
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-check"></i> Save
                        </button>
                    </div>
                </div>
            </div>

            <?php echo form_close(); ?>
        </div>
    </div>
</div>