<?php

/*
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */

class Administration_setting extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Administration_setting_model');
        $this->load->helper(array("datatable"));
    }

    /*
     * Listing of administration_settings
     */

    function index() {
        $data['_view'] = 'administration_setting/index';
        $this->load->view('layouts/main', $data);
    }

    /**
     * Function to get all admin settings
     * 
     * @return json result
     */
    function getAllAdminSettings() {
        $request = $_GET;
        $result = $this->Administration_setting_model->get_all_administration_settings($request, array());
        echo json_encode($result);
        exit;
    }

    /*
     * Adding a new administration_setting
     */

    function add() {
        if (isset($_POST) && count($_POST) > 0) {
            $params = array(
                'BRANCH_ID' => $this->input->post('BRANCH_ID'),
                'LATE_PAYMENT_CHARGES' => $this->input->post('LATE_PAYMENT_CHARGES'),
                'SITE_VISIT_CHARGES' => $this->input->post('SITE_VISIT_CHARGES'),
                'LOD_CHARGES' => $this->input->post('LOD_CHARGES'),
                'OTHER_CHARGES' => $this->input->post('OTHER_CHARGES'),
                'GIVEN_DISCOUNT' => $this->input->post('GIVEN_DISCOUNT'),
                'STAMPING_CHARGES' => $this->input->post('STAMPING_CHARGES'),
                'PROCESSING_FEES' => $this->input->post('PROCESSING_FEES'),
                'FILING_CHARGES' => $this->input->post('FILING_CHARGES'),
                'CASH_ACCOUNT' => $this->input->post('CASH_ACCOUNT'),
                'BANK_ACCOUNT' => $this->input->post('BANK_ACCOUNT'),
                'NEW_LOAN_ACCOUNT_GIVEN' => $this->input->post('NEW_LOAN_ACCOUNT_GIVEN'),
                'RECEIVED_CAPITAL' => $this->input->post('RECEIVED_CAPITAL'),
                'RECEIVED_INTEREST' => $this->input->post('RECEIVED_INTEREST'),
                'LOANS_TAKEN_INVESTMENT' => $this->input->post('LOANS_TAKEN_INVESTMENT'),
                'PAID_CAPITAL_INVESTMENT' => $this->input->post('PAID_CAPITAL_INVESTMENT'),
                'PAID_INTEREST' => $this->input->post('PAID_INTEREST'),
                'APPLICATION_NO' => $this->input->post('APPLICATION_NO'),
                'PAY_VOUCHER' => $this->input->post('PAY_VOUCHER'),
                'PERSONAL_LOAN_NO' => $this->input->post('PERSONAL_LOAN_NO'),
                'CHEQUE_LOAN_NO' => $this->input->post('CHEQUE_LOAN_NO'),
                'HIRE_PURCHASE_LOAN_NO' => $this->input->post('HIRE_PURCHASE_LOAN_NO'),
                'SECURITY_LOAN_NO' => $this->input->post('SECURITY_LOAN_NO'),
                'CHEQUE_VS_LOAN' => $this->input->post('CHEQUE_VS_LOAN'),
                'ALLOW_FUTURE_DATE' => ($this->input->post('ALLOW_FUTURE_DATE') != "" && $this->input->post('ALLOW_FUTURE_DATE') != null)?$this->input->post('ALLOW_FUTURE_DATE'):0,
                    'CALCULATION_TYPE' => ($this->input->post('CALCULATION_TYPE') != "" && $this->input->post('CALCULATION_TYPE') != null)?$this->input->post('CALCULATION_TYPE'):0,
                    'ADVANCE_LOAN' => ($this->input->post('ADVANCE_LOAN') != "" && $this->input->post('ADVANCE_LOAN') != null)?$this->input->post('ADVANCE_LOAN'):0,
                    'STATEMENT' => ($this->input->post('STATEMENT') != "" && $this->input->post('STATEMENT') != null)?$this->input->post('STATEMENT'):0,
                    'FLEXIBILITY_OF_INTEREST' => ($this->input->post('FLEXIBILITY_OF_INTEREST') != "" && $this->input->post('FLEXIBILITY_OF_INTEREST') != null)?$this->input->post('FLEXIBILITY_OF_INTEREST'):0,
                    'INTEREST_TYPE' => ($this->input->post('INTEREST_TYPE') != "" && $this->input->post('INTEREST_TYPE') != null)?$this->input->post('INTEREST_TYPE'):0,
                    'PAYMENT_MODE' => ($this->input->post('PAYMENT_MODE') != "" && $this->input->post('PAYMENT_MODE') != null)?$this->input->post('PAYMENT_MODE'):0,
                    'GOLD_LOAN' => ($this->input->post('GOLD_LOAN') != "" && $this->input->post('GOLD_LOAN') != null)?$this->input->post('GOLD_LOAN'):0,
                'A' => $this->input->post('A'),
                'B' => $this->input->post('B'),
                'C' => $this->input->post('C'),
                'D' => $this->input->post('D'),
                'E' => $this->input->post('E'),
                'F' => $this->input->post('F'),
                'G' => $this->input->post('G'),
                'H' => $this->input->post('H'),
                'MAX_SMS_PER_WEEK' => $this->input->post('MAX_SMS_PER_WEEK'),
                'CREATED_DATE' => date("Y-m-d H:i:s"),
                'CREATED_BY' => $this->session->userdata['EMP_DATA']['EMP_ID']
            );

            $administration_setting_id = $this->Administration_setting_model->add_administration_setting($params);
            redirect('administration_setting/index');
        } else {
            $data['_view'] = 'administration_setting/add';
            $this->load->view('layouts/main', $data);
        }
    }

    /*
     * Editing a administration_setting
     */

    function edit($SETTINGS_ID) {
        // check if the administration_setting exists before trying to edit it
        $data['administration_setting'] = $this->Administration_setting_model->get_administration_setting($SETTINGS_ID);

        if (isset($data['administration_setting']['SETTINGS_ID'])) {
            if (isset($_POST) && count($_POST) > 0) {
                $params = array(
                    'BRANCH_ID' => $this->input->post('BRANCH_ID'),
                    'LATE_PAYMENT_CHARGES' => $this->input->post('LATE_PAYMENT_CHARGES'),
                    'SITE_VISIT_CHARGES' => $this->input->post('SITE_VISIT_CHARGES'),
                    'LOD_CHARGES' => $this->input->post('LOD_CHARGES'),
                    'OTHER_CHARGES' => $this->input->post('OTHER_CHARGES'),
                    'GIVEN_DISCOUNT' => $this->input->post('GIVEN_DISCOUNT'),
                    'STAMPING_CHARGES' => $this->input->post('STAMPING_CHARGES'),
                    'PROCESSING_FEES' => $this->input->post('PROCESSING_FEES'),
                    'FILING_CHARGES' => $this->input->post('FILING_CHARGES'),
                    'CASH_ACCOUNT' => $this->input->post('CASH_ACCOUNT'),
                    'BANK_ACCOUNT' => $this->input->post('BANK_ACCOUNT'),
                    'NEW_LOAN_ACCOUNT_GIVEN' => $this->input->post('NEW_LOAN_ACCOUNT_GIVEN'),
                    'RECEIVED_CAPITAL' => $this->input->post('RECEIVED_CAPITAL'),
                    'RECEIVED_INTEREST' => $this->input->post('RECEIVED_INTEREST'),
                    'LOANS_TAKEN_INVESTMENT' => $this->input->post('LOANS_TAKEN_INVESTMENT'),
                    'PAID_CAPITAL_INVESTMENT' => $this->input->post('PAID_CAPITAL_INVESTMENT'),
                    'PAID_INTEREST' => $this->input->post('PAID_INTEREST'),
                    'APPLICATION_NO' => $this->input->post('APPLICATION_NO'),
                    'PAY_VOUCHER' => $this->input->post('PAY_VOUCHER'),
                    'PERSONAL_LOAN_NO' => $this->input->post('PERSONAL_LOAN_NO'),
                    'CHEQUE_LOAN_NO' => $this->input->post('CHEQUE_LOAN_NO'),
                    'HIRE_PURCHASE_LOAN_NO' => $this->input->post('HIRE_PURCHASE_LOAN_NO'),
                    'SECURITY_LOAN_NO' => $this->input->post('SECURITY_LOAN_NO'),
                    'CHEQUE_VS_LOAN' => $this->input->post('CHEQUE_VS_LOAN'),
                    'ALLOW_FUTURE_DATE' => ($this->input->post('ALLOW_FUTURE_DATE') != "" && $this->input->post('ALLOW_FUTURE_DATE') != null)?$this->input->post('ALLOW_FUTURE_DATE'):0,
                    'CALCULATION_TYPE' => ($this->input->post('CALCULATION_TYPE') != "" && $this->input->post('CALCULATION_TYPE') != null)?$this->input->post('CALCULATION_TYPE'):0,
                    'ADVANCE_LOAN' => ($this->input->post('ADVANCE_LOAN') != "" && $this->input->post('ADVANCE_LOAN') != null)?$this->input->post('ADVANCE_LOAN'):0,
                    'STATEMENT' => ($this->input->post('STATEMENT') != "" && $this->input->post('STATEMENT') != null)?$this->input->post('STATEMENT'):0,
                    'FLEXIBILITY_OF_INTEREST' => ($this->input->post('FLEXIBILITY_OF_INTEREST') != "" && $this->input->post('FLEXIBILITY_OF_INTEREST') != null)?$this->input->post('FLEXIBILITY_OF_INTEREST'):0,
                    'INTEREST_TYPE' => ($this->input->post('INTEREST_TYPE') != "" && $this->input->post('INTEREST_TYPE') != null)?$this->input->post('INTEREST_TYPE'):0,
                    'PAYMENT_MODE' => ($this->input->post('PAYMENT_MODE') != "" && $this->input->post('PAYMENT_MODE') != null)?$this->input->post('PAYMENT_MODE'):0,
                    'GOLD_LOAN' => ($this->input->post('GOLD_LOAN') != "" && $this->input->post('GOLD_LOAN') != null)?$this->input->post('GOLD_LOAN'):0,
                    'A' => $this->input->post('A'),
                    'B' => $this->input->post('B'),
                    'C' => $this->input->post('C'),
                    'D' => $this->input->post('D'),
                    'E' => $this->input->post('E'),
                    'F' => $this->input->post('F'),
                    'G' => $this->input->post('G'),
                    'H' => $this->input->post('H'),
                    'MAX_SMS_PER_WEEK' => $this->input->post('MAX_SMS_PER_WEEK'),
                    'MODIFIED_DATE' => date("Y-m-d H:i:s"),
                    'MODIFIED_BY' => $this->session->userdata['EMP_DATA']['EMP_ID'],
                );

                $this->Administration_setting_model->update_administration_setting($SETTINGS_ID, $params);
                redirect('administration_setting/index');
            } else {
                $data['_view'] = 'administration_setting/edit';
                $this->load->view('layouts/main', $data);
            }
        } else
            show_error('The administration_setting you are trying to edit does not exist.');
    }

    /*
     * Deleting administration_setting
     */

    function remove($SETTINGS_ID) {
        $administration_setting = $this->Administration_setting_model->get_administration_setting($SETTINGS_ID);

        // check if the administration_setting exists before trying to delete it
        if (isset($administration_setting['SETTINGS_ID'])) {
            $this->Administration_setting_model->delete_administration_setting($SETTINGS_ID);
            redirect('administration_setting/index');
        } else
            show_error('The administration_setting you are trying to delete does not exist.');
    }

}
