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
            if (!$edit_flag)
                $return_array['CREATED_DATE'] = date("Y-m-d H:i:s");
            else
                $return_array['MODIFIED_DATE'] = date("Y-m-d H:i:s");
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

}
?>

