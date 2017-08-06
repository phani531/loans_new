<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PostData {

    public $CI;

    public function __construct() {
        $this->CI = & get_instance();
    }

    /**
     * Function to prepare insert data
     * 
     * @param type $data
     * 
     * @return array $return_array
     */
    public function getClientPost($data, $edit_flag = false) {
        $return_array = array();
        if (!empty($data)) {
            $return_array = array(
                "CLIENT_CODE" => $data['CLIENT_CODE'],
                "CLIENT_NAME" => $data['CLIENT_NAME']
            );
            if (!$edit_flag)
                $return_array['CREATED_DATE'] = date("Y-m-d H:i:s");
            else
                $return_array['MODIFIED_DATE'] = date("Y-m-d H:i:s");
        }
        return $return_array;
    }

    /**
     * Function to prepare insert data
     * 
     * @param type $data
     * 
     * @return array $return_array
     */
    public function getRolePost($data, $edit_flag = false) {
        $return_array = array();
        if (!empty($data)) {
            $return_array = array(
                "ROLE_NAME" => $data['ROLE_NAME']
            );
            if (!$edit_flag)
                $return_array['CREATED_DATE'] = date("Y-m-d H:i:s");
            else
                $return_array['MODIFIED_DATE'] = date("Y-m-d H:i:s");
        }
        return $return_array;
    }

    /**
     * Function to prepare insert data
     * 
     * @param array $data
     * @param boolean $edit_flag
     * 
     * @return array $result_array
     */
    public function getAdminCompProfileData($data, $edit_flag = false) {
        $return_array = array();
        if (!empty($data)) {
            $return_array = array(
                'BRANCH_NAME' => $data['BRANCH_NAME'],
                'BRANCH_TYPE' => $data['BRANCH_TYPE'],
                'BRANCH_CODE' => $data['BRANCH_CODE'],
                'BRANCH_REG_NO' => $data["BRANCH_REG_NO"],
                'BRANCH_LICENCE_NO' => $data['BRANCH_LICENCE_NO'],
                'BRANCH_ADDRESS' => $data['BRANCH_ADDRESS'],
                'BRANCH_OFFICE_NO' => $data['BRANCH_OFFICE_NO'],
                'BRANCH_FAX_NO' => $data['BRANCH_FAX_NO'],
                'BRANCH_EMAILID' => $data['BRANCH_EMAILID'],
                'BRANCH_WEBSITE' => $data['BRANCH_WEBSITE'],
                'BRANCH_LOGO_PIC_PATH' => $data['BRANCH_LOGO_PIC_PATH'],
                'LAWYER_NAME' => $data['LAWYER_NAME'],
                'LAWYER_ADDRESS' => $data['LAWYER_ADDRESS'],
                'LAWYER_OFFICE_NO' => $data['LAWYER_OFFICE_NO'],
                'LAWYER_FAX_NO' => $data['LAWYER_FAX_NO'],
                'LAWYER_EMAILID' => $data['LAWYER_EMAILID'],
                'FINANCIAL_YEAR_FROM' => $data['FINANCIAL_YEAR_FROM'],
                'FINANCIAL_YEAR_TO' => $data['FINANCIAL_YEAR_TO'],
                'CLIENT_ID' => $data['CLIENT_ID'],
                'IS_ACTIVE' => 1,
                'OWNER_NAME' => $data['OWNER_NAME'],
                'OFFICE_EXTENSION_NUMBER' => $data['OFFICE_EXTENSION_NUMBER'],
            );
            if (!$edit_flag) {
                $return_array['CREATED_DATE'] = date("Y-m-d H:i:s");
                $return_array['CREATED_BY'] = isset($this->CI->session->userdata["EMP_DATA"]['EMP_ID']) ? $this->CI->session->userdata['EMP_DATA']['EMP_ID'] : 1;
            } else {
                $return_array['MODIFIED_DATE'] = date("Y-m-d H:i:s");
                $return_array['MODIFIED_BY'] = isset($this->CI->session->userdata['EMP_DATA']['EMP_ID']) ? $this->CI->session->userdata['EMP_DATA']['EMP_ID'] : 1;
            }
        }
        return $return_array;
    }

    /**
     * Function to get admin designation data
     * 
     * @param array $data
     * @param bolean $edit_flag
     * 
     * @return type
     */
    function getAdminiDesignData($data, $edit_flag = false) {
        $return_array = array();
        if (!empty($data)) {
            $return_array = array(
                "DESIGNATION_NAME" => $data['DESIGNATION_NAME'],
                "DESIGNATION_DESC" => $data['DESIGNATION_DESC']
            );
            if (!$edit_flag) {
                $return_array['CREATED_DATE'] = date("Y-m-d H:i:s");
                $return_array['CREATED_BY'] = isset($this->CI->session->userdata["EMP_DATA"]['EMP_ID']) ? $this->CI->session->userdata['EMP_DATA']['EMP_ID'] : 0;
            } else {
                $return_array['MODIFIED_DATE'] = date("Y-m-d H:i:s");
                $return_array['MODIFIED_BY'] = isset($this->CI->session->userdata['EMP_DATA']['EMP_ID']) ? $this->CI->session->userdata['EMP_DATA']['EMP_ID'] : 0;
            }
        }
        return $return_array;
    }

    /**
     * Function to get admin employee data
     * 
     * @param array $data
     * @param bolean $edit_flag
     * 
     * @return type
     */
    function getAdminiEmployeeData($data, $edit_flag = false) {
        $return_array = array();
        if (!empty($data)) {
            $return_array = array(
                'EMP_NAME' => $data['EMP_NAME'],
                'CLIENT_ID' => $data['CLIENT_ID'],
                'IS_ACTIVE' => 1,
                'IC_NO' => $data['IC_NO'],
                'STAFF_NO' => $data['STAFF_NO'],
                'ADDRESS' => $data['ADDRESS'],
                'MOBILE_NO' => $data['MOBILE_NO'],
                'PHONE_NO' => $data['PHONE_NO'],
                'EMAIL_ID' => $data['EMAIL_ID'],
                'GENDER' => $data['GENDER'],
                'DESIGNATION_ID' => $data['DESIGNATION_ID'],
                'ACTIVE_STATUS' => (isset($data['ACTIVE_STATUS']) && $data['ACTIVE_STATUS'] != "") ? $data['ACTIVE_STATUS'] : 0,
                'BASIC_SALARY' => $data['BASIC_SALARY'],
                'LANGUAGE' => $data['LANGUAGE'],
                'EMPLOYEE_PIC_PATH' => $data['EMPLOYEE_PIC_PATH'],
                'VIEW_OTHER_BRANCH_DETAILS' => (isset($data['VIEW_OTHER_BRANCH_DETAILS']) && $data['VIEW_OTHER_BRANCH_DETAILS'] != "") ? $data['VIEW_OTHER_BRANCH_DETAILS'] : 0,
                'MULTIPLE_LOGINS' => (isset($data['MULTIPLE_LOGINS']) && $data['MULTIPLE_LOGINS'] != "") ? $data['MULTIPLE_LOGINS'] : 0,
                'ROLE_ID' => $data['ROLE_ID'],
            );
            if (!$edit_flag) {
                $return_array['CREATED_DATE'] = date("Y-m-d H:i:s");
                $return_array['CREATED_BY'] = isset($this->CI->session->userdata["EMP_DATA"]['EMP_ID']) ? $this->CI->session->userdata['EMP_DATA']['EMP_ID'] : 0;
            } else {
                $return_array['MODIFIED_DATE'] = date("Y-m-d H:i:s");
                $return_array['MODIFIED_BY'] = isset($this->CI->session->userdata['EMP_DATA']['EMP_ID']) ? $this->CI->session->userdata['EMP_DATA']['EMP_ID'] : 0;
            }
        }
        return $return_array;
    }

    /**
     * Function to get admin emp branch info post data
     * 
     * @param array $data
     * @param boolean $edit_flag
     * 
     * @return array $return_array
     */
    function getAdminEmpBrnachPostData($data, $edit_flag = false) {
        $return_array = array();
        if (!empty($data)) {
            $return_array = array(
                "EMP_ID" => $data['EMP_ID'],
                "BRANCH_ID" => $data['BRANCH_ID']
            );
            if (!$edit_flag) {
                $return_array['CREATED_DATE'] = date("Y-m-d H:i:s");
                $return_array['CREATED_BY'] = isset($this->CI->session->userdata["EMP_DATA"]['EMP_ID']) ? $this->CI->session->userdata['EMP_DATA']['EMP_ID'] : 0;
            } else {
                $return_array['MODIFIED_DATE'] = date("Y-m-d H:i:s");
                $return_array['MODIFIED_BY'] = isset($this->CI->session->userdata['EMP_DATA']['EMP_ID']) ? $this->CI->session->userdata['EMP_DATA']['EMP_ID'] : 0;
            }
        }
        return $return_array;
    }

    /**
     * Function to get admin login post data
     * 
     * @param array $data
     * @param boolean $edit_flaf
     * 
     * @return array $return_array
     */
    function getAdminiLoginPostData($data, $edit_flag = false) {
        $return_array = array();
        if (!empty($data)) {
            $return_array = array(
                "EMP_ID" => $data['EMP_ID'],
                "LOGIN_USERNAME" => $data['LOGIN_USERNAME'],
                "LOGIN_PASSWORD" => md5($data['LOGIN_PASSWORD'])
            );
            if (!$edit_flag) {
                $return_array['CREATED_DATE'] = date("Y-m-d H:i:s");
                $return_array['CREATED_BY'] = isset($this->CI->session->userdata["EMP_DATA"]['EMP_ID']) ? $this->CI->session->userdata['EMP_DATA']['EMP_ID'] : 0;
            } else {
                $return_array['MODIFIED_DATE'] = date("Y-m-d H:i:s");
                $return_array['MODIFIED_BY'] = isset($this->CI->session->userdata['EMP_DATA']['EMP_ID']) ? $this->CI->session->userdata['EMP_DATA']['EMP_ID'] : 0;
            }
        }
        return $return_array;
    }

    /**
     * Function to prepare admin fund post data
     * 
     * @param array $data
     * @param boolean $edit_flag
     * 
     * @return type
     */
    function getAdminFundPostData($data, $edit_flag = false) {
        $return_array = array();
        if (!empty($data)) {
            $return_array = array(
                "FA_DATE" => $data['FA_DATE'],
                "EMP_ID" => $data['EMP_ID'],
                "Amount" => $data['Amount']
            );
            if (!$edit_flag) {
                $return_array['CREATED_DATE'] = date("Y-m-d H:i:s");
                $return_array['CREATED_BY'] = isset($this->CI->session->userdata["EMP_DATA"]['EMP_ID']) ? $this->CI->session->userdata['EMP_DATA']['EMP_ID'] : 0;
            } else {
                $return_array['MODIFIED_DATE'] = date("Y-m-d H:i:s");
                $return_array['MODIFIED_BY'] = isset($this->CI->session->userdata['EMP_DATA']['EMP_ID']) ? $this->CI->session->userdata['EMP_DATA']['EMP_ID'] : 0;
            }
        }
        return $return_array;
    }

    function getAdminCustProfileData($data, $edit_flag = false) {
        $return_array = array();
        if (!empty($data)) {
            $return_array = array(
                'CUSTOMER_TYPE' => (isset($data['CUSTOMER_TYPE']) && $data['CUSTOMER_TYPE'] != "") ? $data['CUSTOMER_TYPE'] : "",
                'CUSTOMER_IDNO' => (isset($data['CUSTOMER_IDNO']) && $data['CUSTOMER_IDNO'] != "") ? $data['CUSTOMER_IDNO'] : "",
                'CUSTOMER_NAME' => (isset($data['CUSTOMER_NAME']) && $data['CUSTOMER_NAME'] != "") ? $data['CUSTOMER_NAME'] : "",
                'FILE_NO' => (isset($data['FILE_NO']) && $data['FILE_NO'] != "") ? $data['FILE_NO'] : "",
                'OLDIC_NO' => (isset($data['OLDIC_NO']) && $data['OLDIC_NO'] != "") ? $data['OLDIC_NO'] : "",
                'NON_ICNO' => (isset($data['NON_ICNO']) && $data['NON_ICNO'] != "") ? $data['NON_ICNO'] : "",
                'APPLICATION_DATE' => (isset($data['APPLICATION_DATE']) && $data['APPLICATION_DATE'] != "") ? $data['APPLICATION_DATE'] : "",
                'AGENT_ID' => (isset($data['AGENT_ID']) && $data['AGENT_ID'] != "") ? $data['AGENT_ID'] : "",
                'VEHICLE_NO' => (isset($data['VEHICLE_NO']) && $data['VEHICLE_NO'] != "") ? $data['VEHICLE_NO'] : "",
                'RELATED_TO_EMP' => (isset($data['RELATED_TO_EMP']) && $data['RELATED_TO_EMP'] != "") ? $data['RELATED_TO_EMP'] : "",
                'ADVERTISEMENT_ID' => (isset($data['ADVERTISEMENT_ID']) && $data['ADVERTISEMENT_ID'] != "") ? $data['ADVERTISEMENT_ID'] : "",
                'DOB' => (isset($data['DOB']) && $data['DOB'] != "") ? $data['DOB'] : "",
                'AGE' => (isset($data['AGE']) && $data['AGE'] != "") ? $data['AGE'] : "",
                'GENDER' => (isset($data['GENDER']) && $data['GENDER'] != "") ? $data['GENDER'] : "",
                'HOUSESTATUS_ID' => (isset($data['HOUSESTATUS_ID']) && $data['HOUSESTATUS_ID'] != "") ? $data['HOUSESTATUS_ID'] : "",
                'MARTIAL_STATUS' => (isset($data['MARTIAL_STATUS']) && $data['MARTIAL_STATUS'] != "") ? $data['MARTIAL_STATUS'] : "",
                'EMAIL_ID' => (isset($data['EMAIL_ID']) && $data['EMAIL_ID'] != "") ? $data['EMAIL_ID'] : "",
                'APPLIED_BRANCH_ID' => (isset($data['APPLIED_BRANCH_ID']) && $data['APPLIED_BRANCH_ID'] != "") ? $data['APPLIED_BRANCH_ID'] : "",
                'COMPANY_ID' => (isset($data['COMPANY_ID']) && $data['COMPANY_ID'] != "") ? $data['COMPANY_ID'] : "",
                'OCCUPATION_DEPT_NAME' => (isset($data['OCCUPATION_DEPT_NAME']) && $data['OCCUPATION_DEPT_NAME'] != "") ? $data['OCCUPATION_DEPT_NAME'] : "",
                'RACE_ID' => (isset($data['RACE_ID']) && $data['RACE_ID'] != "") ? $data['RACE_ID'] : "",
                'PRESENT_SALARY' => (isset($data['PRESENT_SALARY']) && $data['PRESENT_SALARY'] != "") ? $data['PRESENT_SALARY'] : "",
                'JOBSECTOR_ID' => (isset($data['JOBSECTOR_ID']) && $data['JOBSECTOR_ID'] != "") ? $data['JOBSECTOR_ID'] : "",
                'YEARS_OR_SERVICE_YEARS' => (isset($data['YEARS_OR_SERVICE_YEARS']) && $data['YEARS_OR_SERVICE_YEARS'] != "") ? $data['YEARS_OR_SERVICE_YEARS'] : "",
                'YEARS_OR_SERVICE_MONTHS' => (isset($data['YEARS_OR_SERVICE_MONTHS']) && $data['YEARS_OR_SERVICE_MONTHS'] != "") ? $data['YEARS_OR_SERVICE_MONTHS'] : "",
                'CREDIT_LIMIT' => (isset($data['CREDIT_LIMIT']) && $data['CREDIT_LIMIT'] != "") ? $data['CREDIT_LIMIT'] : "",
                'BANK_ID' => (isset($data['BANK_ID']) && $data['BANK_ID'] != "") ? $data['BANK_ID'] : "",
                'BANK_ACCOUNTNO' => (isset($data['BANK_ACCOUNTNO']) && $data['BANK_ACCOUNTNO'] != "") ? $data['BANK_ACCOUNTNO'] : "",
                'BANK_ATM_CARD_NO' => (isset($data['BANK_ATM_CARD_NO']) && $data['BANK_ATM_CARD_NO'] != "") ? $data['BANK_ATM_CARD_NO'] : "",
                'BANK_ATM_CARD_PIN_NO' => (isset($data['BANK_ATM_CARD_PIN_NO']) && $data['BANK_ATM_CARD_PIN_NO'] != "") ? $data['BANK_ATM_CARD_PIN_NO'] : "",
                'BANK_ATM_CARD_VALIDITY' => (isset($data['BANK_ATM_CARD_VALIDITY']) && $data['BANK_ATM_CARD_VALIDITY'] != "") ? $data['BANK_ATM_CARD_VALIDITY'] : "",
                'INTERNET_BANKING_USER_NAME' => (isset($data['INTERNET_BANKING_USER_NAME']) && $data['INTERNET_BANKING_USER_NAME'] != "") ? $data['INTERNET_BANKING_USER_NAME'] : "",
                'INTERNET_BANKING_PASSWORD' => (isset($data['INTERNET_BANKING_PASSWORD']) && $data['INTERNET_BANKING_PASSWORD'] != "") ? $data['INTERNET_BANKING_PASSWORD'] : "",
                'MONEY_DEPOSIT_BANK_ID' => (isset($data['MONEY_DEPOSIT_BANK_ID']) && $data['MONEY_DEPOSIT_BANK_ID'] != "") ? $data['MONEY_DEPOSIT_BANK_ID'] : "",
                'MONEY_DEPOSIT_ACCOUNT_NO' => (isset($data['MONEY_DEPOSIT_ACCOUNT_NO']) && $data['MONEY_DEPOSIT_ACCOUNT_NO'] != "") ? $data['MONEY_DEPOSIT_ACCOUNT_NO'] : "",
                'MONEY_DEPOSIT_ACCOUNT_HOLDER_NAME' => (isset($data['MONEY_DEPOSIT_ACCOUNT_HOLDER_NAME']) && $data['MONEY_DEPOSIT_ACCOUNT_HOLDER_NAME'] != "") ? $data['MONEY_DEPOSIT_ACCOUNT_HOLDER_NAME'] : "",
                'SPOUSE_IDNO' => (isset($data['SPOUSE_IDNO']) && $data['SPOUSE_IDNO'] != "") ? $data['SPOUSE_IDNO'] : "",
                'SPOUSE_NAME' => (isset($data['SPOUSE_NAME']) && $data['SPOUSE_NAME'] != "") ? $data['SPOUSE_NAME'] : "",
                'SPOUSE_FATHERS_NAME' => (isset($data['SPOUSE_FATHERS_NAME']) && $data['SPOUSE_FATHERS_NAME'] != "") ? $data['SPOUSE_FATHERS_NAME'] : "",
                'SPOUSE_MOTHERS_NAME' => (isset($data['SPOUSE_MOTHERS_NAME']) && $data['SPOUSE_MOTHERS_NAME'] != "") ? $data['SPOUSE_MOTHERS_NAME'] : "",
                'SPOUSE_EMAILID' => (isset($data['SPOUSE_EMAILID']) && $data['SPOUSE_EMAILID'] != "") ? $data['SPOUSE_EMAILID'] : "",
                'SPOUSE_HOME_PHONE' => (isset($data['SPOUSE_HOME_PHONE']) && $data['SPOUSE_HOME_PHONE'] != "") ? $data['SPOUSE_HOME_PHONE'] : "",
                'SPOUSE_HAND_PHONE' => (isset($data['SPOUSE_HAND_PHONE']) && $data['SPOUSE_HAND_PHONE'] != "") ? $data['SPOUSE_HAND_PHONE'] : "",
                'SPOUSE_ADDRESS' => (isset($data['SPOUSE_ADDRESS']) && $data['SPOUSE_ADDRESS'] != "") ? $data['SPOUSE_ADDRESS'] : "",
                'SPOUSE_DOB' => (isset($data['SPOUSE_DOB']) && $data['SPOUSE_DOB'] != "") ? $data['SPOUSE_DOB'] : "",
                'SPOUSE_AGE' => (isset($data['SPOUSE_AGE']) && $data['SPOUSE_AGE'] != "") ? $data['SPOUSE_AGE'] : "",
                'SPOUSE_NO_OF_CHILDREN' => (isset($data['SPOUSE_NO_OF_CHILDREN']) && $data['SPOUSE_NO_OF_CHILDREN'] != "") ? $data['SPOUSE_NO_OF_CHILDREN'] : "",
                'SPOUSE_GENDER' => (isset($data['SPOUSE_GENDER']) && $data['SPOUSE_GENDER'] != "") ? $data['SPOUSE_GENDER'] : "",
                'SPOUSE_RACE_ID' => (isset($data['SPOUSE_RACE_ID']) && $data['SPOUSE_RACE_ID'] != "") ? $data['SPOUSE_RACE_ID'] : "",
                'SPOUSE_COMPANY_NAME' => (isset($data['SPOUSE_COMPANY_NAME']) && $data['SPOUSE_COMPANY_NAME'] != "") ? $data['SPOUSE_COMPANY_NAME'] : "",
                'SPOUSE_OCCUPATION_DEPT' => (isset($data['SPOUSE_OCCUPATION_DEPT']) && $data['SPOUSE_OCCUPATION_DEPT'] != "") ? $data['SPOUSE_OCCUPATION_DEPT'] : "",
                'SPOUSE_YEARS_OF_SERVICE_YEAR' => (isset($data['SPOUSE_YEARS_OF_SERVICE_YEAR']) && $data['SPOUSE_YEARS_OF_SERVICE_YEAR'] != "") ? $data['SPOUSE_YEARS_OF_SERVICE_YEAR'] : "",
                'SPOUSE_YEARS_OF_SERVICE_MONTH' => (isset($data['SPOUSE_YEARS_OF_SERVICE_MONTH']) && $data['SPOUSE_YEARS_OF_SERVICE_MONTH'] != "") ? $data['SPOUSE_YEARS_OF_SERVICE_MONTH'] : "",
                'SPOUSE_SALARY' => (isset($data['SPOUSE_SALARY']) && $data['SPOUSE_SALARY'] != "") ? $data['SPOUSE_SALARY'] : "",
                'SPOUSE_OFFICE_PHONE1' => (isset($data['SPOUSE_OFFICE_PHONE1']) && $data['SPOUSE_OFFICE_PHONE1'] != "") ? $data['SPOUSE_OFFICE_PHONE1'] : "",
                'SPOUSE_OFFICE_PHONE2' => (isset($data['SPOUSE_OFFICE_PHONE2']) && $data['SPOUSE_OFFICE_PHONE2'] != "") ? $data['SPOUSE_OFFICE_PHONE2'] : "",
                'SPOUSE_OFFICE_ADDRESS' => (isset($data['SPOUSE_OFFICE_ADDRESS']) && $data['SPOUSE_OFFICE_ADDRESS'] != "") ? $data['SPOUSE_OFFICE_ADDRESS'] : "",
                'GUARANTER_IDNO' => (isset($data['GUARANTER_IDNO']) && $data['GUARANTER_IDNO'] != "") ? $data['GUARANTER_IDNO'] : "",
                'GUARANTER_NAME' => (isset($data['GUARANTER_NAME']) && $data['GUARANTER_NAME'] != "") ? $data['GUARANTER_NAME'] : "",
                'GUARANTER_FATHERS_NAME' => (isset($data['GUARANTER_FATHERS_NAME']) && $data['GUARANTER_FATHERS_NAME'] != "") ? $data['GUARANTER_FATHERS_NAME'] : "",
                'GUARANTER_MOTHERS_NAME' => (isset($data['GUARANTER_MOTHERS_NAME']) && $data['GUARANTER_MOTHERS_NAME'] != "") ? $data['GUARANTER_MOTHERS_NAME'] : "",
                'GUARANTER_EMAILID' => (isset($data['GUARANTER_EMAILID']) && $data['GUARANTER_EMAILID'] != "") ? $data['GUARANTER_EMAILID'] : "",
                'GUARANTER_HOME_PHONE' => (isset($data['GUARANTER_HOME_PHONE']) && $data['GUARANTER_HOME_PHONE'] != "") ? $data['GUARANTER_HOME_PHONE'] : "",
                'GUARANTER_HAND_PHONE' => (isset($data['GUARANTER_HAND_PHONE']) && $data['GUARANTER_HAND_PHONE'] != "") ? $data['GUARANTER_HAND_PHONE'] : "",
                'GUARANTER_ADDRESS' => (isset($data['GUARANTER_ADDRESS']) && $data['GUARANTER_ADDRESS'] != "") ? $data['GUARANTER_ADDRESS'] : "",
                'GUARANTER_DOB' => (isset($data['GUARANTER_DOB']) && $data['GUARANTER_DOB'] != "") ? $data['GUARANTER_DOB'] : "",
                'GUARANTER_AGE' => (isset($data['GUARANTER_AGE']) && $data['GUARANTER_AGE'] != "") ? $data['GUARANTER_AGE'] : "",
                'GUARANTER_NO_OF_CHILDREN' => (isset($data['GUARANTER_NO_OF_CHILDREN']) && $data['GUARANTER_NO_OF_CHILDREN'] != "") ? $data['GUARANTER_NO_OF_CHILDREN'] : "",
                'GUARANTER_GENDER' => (isset($data['GUARANTER_GENDER']) && $data['GUARANTER_GENDER'] != "") ? $data['GUARANTER_GENDER'] : "",
                'GUARANTER_RACE_ID' => (isset($data['GUARANTER_RACE_ID']) && $data['GUARANTER_RACE_ID'] != "") ? $data['GUARANTER_RACE_ID'] : "",
                'GUARANTER_COMPANY_NAME' => (isset($data['GUARANTER_COMPANY_NAME']) && $data['GUARANTER_COMPANY_NAME'] != "") ? $data['GUARANTER_COMPANY_NAME'] : "",
                'GUARANTER_OCCUPATION_DEPT' => (isset($data['GUARANTER_OCCUPATION_DEPT']) && $data['GUARANTER_OCCUPATION_DEPT'] != "") ? $data['GUARANTER_OCCUPATION_DEPT'] : "",
                'GUARANTER_YEARS_OF_SERVICE_YEAR' => (isset($data['GUARANTER_YEARS_OF_SERVICE_YEAR']) && $data['GUARANTER_YEARS_OF_SERVICE_YEAR'] != "") ? $data['GUARANTER_YEARS_OF_SERVICE_YEAR'] : "",
                'GUARANTER_YEARS_OF_SERVICE_MONTH' => $data['GUARANTER_YEARS_OF_SERVICE_MONTH'],
                'GUARANTER_SALARY' => (isset($data['GUARANTER_SALARY']) && $data['GUARANTER_SALARY'] != "") ? $data['GUARANTER_SALARY'] : "",
                'GUARANTER_OFFICE_PHONE1' => (isset($data['GUARANTER_OFFICE_PHONE1']) && $data['GUARANTER_OFFICE_PHONE1'] != "") ? $data['GUARANTER_OFFICE_PHONE1'] : "",
                'GUARANTER_OFFICE_PHONE2' => (isset($data['GUARANTER_OFFICE_PHONE2']) && $data['GUARANTER_OFFICE_PHONE2'] != "") ? $data['GUARANTER_OFFICE_PHONE2'] : "",
                'GUARANTER_OFFICE_ADDRESS' => (isset($data['GUARANTER_OFFICE_ADDRESS']) && $data['GUARANTER_OFFICE_ADDRESS'] != "") ? $data['GUARANTER_OFFICE_ADDRESS'] : "",
                'CUSTOMER_POPUP_NOTES' => (isset($data['CUSTOMER_POPUP_NOTES']) && $data['CUSTOMER_POPUP_NOTES'] != "") ? $data['CUSTOMER_POPUP_NOTES'] : "",
                'VERIFICATION_HR_INFO' => (isset($data['VERIFICATION_HR_INFO']) && $data['VERIFICATION_HR_INFO'] != "") ? $data['VERIFICATION_HR_INFO'] : "",
                'VERIFICATION_SPOUSE_INFO' => (isset($data['VERIFICATION_SPOUSE_INFO']) && $data['VERIFICATION_SPOUSE_INFO'] != "") ? $data['VERIFICATION_SPOUSE_INFO'] : "",
                'VERIFICATION_REFERENCE_INFO' => (isset($data['VERIFICATION_REFERENCE_INFO']) && $data['VERIFICATION_REFERENCE_INFO'] != "") ? $data['VERIFICATION_REFERENCE_INFO'] : "",
                'VERIFICATION_OTHER_INFO' => (isset($data['VERIFICATION_OTHER_INFO']) && $data['VERIFICATION_OTHER_INFO'] != "") ? $data['VERIFICATION_OTHER_INFO'] : "",
                'VERIFICATION_CTOS_INFO' => (isset($data['VERIFICATION_CTOS_INFO']) && $data['VERIFICATION_CTOS_INFO'] != "") ? $data['VERIFICATION_CTOS_INFO'] : "",
                'VERIFICATION_CTOS_ATTACHMENT_FILE_PATH' => (isset($data['VERIFICATION_CTOS_ATTACHMENT_FILE_PATH']) && $data['VERIFICATION_CTOS_ATTACHMENT_FILE_PATH'] != "") ? $data['VERIFICATION_CTOS_ATTACHMENT_FILE_PATH'] : "",
                'VERIFICATION_COMPLETED' => (isset($data['VERIFICATION_COMPLETED']) && $data['VERIFICATION_COMPLETED'] != "") ? $data['VERIFICATION_COMPLETED'] : "",
                'CLIENT_ID' => (isset($data['CLIENT_ID']) && $data['CLIENT_ID'] != "") ? $data['CLIENT_ID'] : "",
                'IS_ACTIVE' => 1,
            );

            if (!$edit_flag) {
                $return_array['CREATED_DATE'] = date("Y-m-d H:i:s");
                $return_array['CREATED_BY'] = isset($this->CI->session->userdata["EMP_DATA"]['EMP_ID']) ? $this->CI->session->userdata['EMP_DATA']['EMP_ID'] : 0;
            } else {
                $return_array['MODIFIED_DATE'] = date("Y-m-d H:i:s");
                $return_array['MODIFIED_BY'] = isset($this->CI->session->userdata['EMP_DATA']['EMP_ID']) ? $this->CI->session->userdata['EMP_DATA']['EMP_ID'] : 0;
            }
        }
        return $return_array;
    }

    /**
     * Function to prepare customer address data
     * 
     * @param array $data
     * @param boolean $edit_flag
     * @return array $return_array
     */
    function getCustomerAddressData($data, $edit_flag = false) {
        $return_array = array();
        if (!empty($data)) {
            $i = 0;
            foreach ($data as $key => $value):
                if (strpos($key, "CONTACT") !== false && $i < count($value)) {
                    $return_array[$i]['ACTUAL_ADDRESS'] = $data['CONTACT_Address'][$i];
                    $return_array[$i]['CITY'] = $data['CONTACT_City'][$i];
                    $return_array[$i]['STATE_ID'] = $data['CONTACT_State'][$i];
                    $return_array[$i]['POSTCODE'] = $data['CONTACT_code'][$i];
                    $return_array[$i]['PHONE1'] = $data['CONTACT_phone1'][$i];
                    $return_array[$i]['PHONE2'] = $data['CONTACT_alt_phone'][$i];
                    $return_array[$i]['FAX'] = $data['CONTACT_fax'][$i];
                    $return_array[$i]['IS_ACTIVE'] = 1;
                    if (!$edit_flag) {
                        $return_array[$i]['CREATED_DATE'] = date("Y-m-d H:i:s");
                        $return_array[$i]['CREATED_BY'] = isset($this->CI->session->userdata["EMP_DATA"]['EMP_ID']) ? $this->CI->session->userdata['EMP_DATA']['EMP_ID'] : 0;
                    } else {
                        $return_array[$i]['MODIFIED_DATE'] = date("Y-m-d H:i:s");
                        $return_array[$i]['MODIFIED_BY'] = isset($this->CI->session->userdata['EMP_DATA']['EMP_ID']) ? $this->CI->session->userdata['EMP_DATA']['EMP_ID'] : 0;
                    }
                    $i++;
                }
            endforeach;
        }
        return $return_array;
    }

    /**
     * Function to prepare customer reference data
     * 
     * @param array $data
     * @param boolean $edit_flag
     * @return array $return_array
     */
    function getCustomerReferenceData($data, $edit_flag = false) {
        $return_array = array();
        if (!empty($data)) {
            $i = 0;
            foreach ($data as $key => $value):
                if (strpos($key, "REFERENCE") !== false && $i < count($value)) {
                    $return_array[$i]['REFERENCE_NAME'] = $data['REFERENCE_NAME'][$i];
                    $return_array[$i]['REFERENCE_IDNO'] = $data['REFERENCE_IDNO'][$i];
                    $return_array[$i]['REFERENCE_RELATION'] = $data['REFERENCE_RELATION'][$i];
                    $return_array[$i]['ADDRESS_KEY'] = $data['REFERECE_ADDRESS_KEY'][$i];
                    $return_array[$i]['ACTUAL_ADDRESS'] = $data['REFERECE_ACTUAL_ADDRESS'][$i];
                    $return_array[$i]['CITY'] = $data['REFERECE_CITY'][$i];
                    $return_array[$i]['STATE_ID'] = $data['REFERECE_STATE_ID'][$i];
                    $return_array[$i]['POSTCODE'] = $data['REFERECE_POSTCODE'][$i];
                    $return_array[$i]['PHONE1'] = $data['REFERECE_PHONE1'][$i];
                    $return_array[$i]['PHONE2'] = $data['REFERECE_PHONE2'][$i];
                    $return_array[$i]['FAX'] = $data['REFERECE_FAX'][$i];
                    $return_array[$i]['IS_ACTIVE'] = 1;
                    if (!$edit_flag) {
                        $return_array[$i]['CREATED_DATE'] = date("Y-m-d H:i:s");
                        $return_array[$i]['CREATED_BY'] = isset($this->CI->session->userdata["EMP_DATA"]['EMP_ID']) ? $this->CI->session->userdata['EMP_DATA']['EMP_ID'] : 0;
                    } else {
                        $return_array[$i]['MODIFIED_DATE'] = date("Y-m-d H:i:s");
                        $return_array[$i]['MODIFIED_BY'] = isset($this->CI->session->userdata['EMP_DATA']['EMP_ID']) ? $this->CI->session->userdata['EMP_DATA']['EMP_ID'] : 0;
                    }
                    $i++;
                }
            endforeach;
        }
        return $return_array;
    }

}
?>

