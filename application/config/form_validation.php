<?php

/**
 * FormValidation.php
 *
 * PHP version 5
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category    FormValidation.php
 * @package     Config
 * @author      Mahesh Sajja <maheshhasan07@gmail.com>
 * @link        http://local.loans.com
 * @dateCreated 11/05/2015  MM/DD/YYYY
 * @dateUpdated 11/05/2015  MM/DD/YYYY 
 * @functions   0
 */
$config = array(
    "client_info_add_form" => array(
        array(
            'field' => 'CLIENT_CODE',
            'label' => 'Client code',
            'rules' => 'trim|required|min_length[1]|max_length[100]'
        ),
        array(
            'field' => 'CLIENT_NAME',
            'label' => 'Client name',
            'rules' => 'trim|required|min_length[1]|max_length[100]|callback_namefield'
        ),
    ),
    "client_info_edit_form" => array(
        array(
            'field' => 'CLIENT_CODE',
            'label' => 'Client code',
            'rules' => 'trim|required|min_length[1]|max_length[100]'
        ),
        array(
            'field' => 'CLIENT_NAME',
            'label' => 'Client name',
            'rules' => 'trim|required|min_length[1]|max_length[100]|callback_namefield'
        ),
    )
    ,
    "role_form" => array(
        array(
            'field' => 'ROLE_NAME',
            'label' => 'Role name',
            'rules' => 'trim|required|min_length[1]|max_length[100]|callback_namefield'
        ),
    ),
    "admin_comp_profile_form" => array(
        "BRANCH_NAME" => array(
            'field' => 'BRANCH_NAME',
            'label' => 'Branch name',
            'rules' => 'trim|required|min_length[1]|max_length[100]|callback_namefield'
        ),
        "BRANCH_REG_NO" => array(
            'field' => 'BRANCH_REG_NO',
            'label' => 'Branch reg no',
            'rules' => 'trim|required|min_length[1]|max_length[100]|callback_alphanumeric'
        ),
        "BRANCH_CODE" => array(
            'field' => 'BRANCH_CODE',
            'label' => 'Branch code',
            'rules' => 'trim|required|min_length[1]|max_length[100]|callback_alphanumeric'
        ),
        "BRANCH_LICENCE_NO" => array(
            'field' => 'BRANCH_LICENCE_NO',
            'label' => "Branch license no",
            'rules' => 'trim|required|min_length[1]|max_length[100]|callback_alphanumeric'
        ),
        "BRANCH_REG_NO" => array(
            'field' => 'BRANCH_REG_NO',
            'label' => 'Branch reg no',
            'rules' => 'trim|required|min_length[1]|max_length[100]|callback_alphanumeric'
        ),
        "BRANCH_OFFICE_NO" => array(
            'field' => 'BRANCH_OFFICE_NO',
            'label' => 'Branch office no',
            'rules' => 'trim|required|min_length[1]|max_length[100]|callback_numberfield'
        ),
        "BRANCH_FAX_NO" => array(
            'field' => 'BRANCH_FAX_NO',
            'label' => 'Branch fax no',
            'rules' => 'trim|required|min_length[1]|max_length[100]|callback_numberfield'
        ),
        "BRANCH_EMAILID" => array(
            'field' => 'BRANCH_EMAILID',
            'label' => 'Branch email id',
            'rules' => 'trim|required|min_length[1]|max_length[100]|valid_email'
        ),
        "LAWYER_NAME" => array(
            'field' => 'LAWYER_NAME',
            'label' => 'Lawyer name',
            'rules' => 'trim|required|min_length[1]|max_length[100]|callback_namefield'
        ),
        "LAWYER_OFFICE_NO" => array(
            'field' => 'LAWYER_OFFICE_NO',
            'label' => 'Lawyer office no',
            'rules' => 'trim|required|min_length[1]|max_length[100]|callback_numberfield'
        ),
        "LAWYER_FAX_NO" => array(
            'field' => 'LAWYER_FAX_NO',
            'label' => 'Lawyer fax no',
            'rules' => 'trim|required|min_length[1]|max_length[100]|callback_alphanumeric'
        ),
        "LAWYER_EMAILID" => array(
            'field' => 'LAWYER_EMAILID',
            'label' => 'Lawyer email id',
            'rules' => 'trim|required|min_length[1]|max_length[100]|valid_email'
        ),
        "OWNER_NAME" => array(
            'field' => 'OWNER_NAME',
            'label' => 'Owner name',
            'rules' => 'trim|required|min_length[1]|max_length[100]|callback_namefield'
        ),
    ),
    "admin_design_form" => array(
        array(
            'field' => 'DESIGNATION_NAME',
            'label' => 'Designation name',
            'rules' => 'trim|required|min_length[1]|max_length[100]|callback_namefield'
        ),
    ),
    "admin_employee_form" => array(
        array(
            'field' => 'EMP_NAME',
            'label' => 'Employee name',
            'rules' => 'trim|required|min_length[1]|max_length[100]|callback_namefield'
        ),
        array(
            'field' => 'IC_NO',
            'label' => 'IC no',
            'rules' => 'trim|required|min_length[1]|max_length[100]|callback_alphanumeric'
        ),
        array(
            'field' => 'STAFF_NO',
            'label' => 'Staff no',
            'rules' => 'trim|required|min_length[1]|max_length[100]|callback_alphanumeric'
        ),
        array(
            'field' => 'MOBILE_NO',
            'label' => 'Mobile no',
            'rules' => 'trim|required|min_length[1]|max_length[100]|callback_numberfield'
        ),
        array(
            'field' => 'PHONE_NO',
            'label' => 'Phone no',
            'rules' => 'trim|required|min_length[1]|max_length[100]|callback_numberfield'
        ),
        array(
            'field' => 'EMAIL_ID',
            'label' => 'Email Id',
            'rules' => 'trim|required|min_length[1]|max_length[100]|valid_email'
        ),
        array(
            'field' => 'BASIC_SALARY',
            'label' => 'Basic salary',
            'rules' => 'trim|required|min_length[1]|max_length[100]|numeric'
        ),
        array(
            'field' => 'LANGUAGE',
            'label' => 'Language',
            'rules' => 'trim|required|min_length[1]|max_length[100]|callback_namefield'
        ),
        array(
            'field' => 'EMPLOYEE_PIC_PATH',
            'label' => 'Employee pic path',
            'rules' => 'trim|required|min_length[1]|max_length[100]'
        ),
        array(
            'field' => 'ROLE_ID',
            'label' => 'Role',
            'rules' => 'trim|required|min_length[1]|max_length[100]'
        ),
    ),
    "admin_emp_branch_form" => array(
        array(
            'field' => 'EMP_ID',
            'label' => 'Emp id',
            'rules' => 'required'
        ),
        array(
            'field' => 'BRANCH_ID',
            'label' => 'Branch id',
            'rules' => 'required'
        )
    ),
    "admin_login_form" => array(
        array(
            'field' => 'EMP_ID',
            'label' => 'Emp id',
            'rules' => 'required'
        ),
        array(
            'field' => 'LOGIN_USERNAME',
            'label' => 'Login username',
            'rules' => 'trim|required|min_length[1]|max_length[100]|callback_namefield'
        ),
        array(
            'field' => 'LOGIN_PASSWORD',
            'label' => 'Login password',
            'rules' => 'required'
        ),
    ),
    "admin_fund_form" => array(
        array(
            'field' => 'Amount',
            'label' => 'Amount',
            'rules' => 'trim|required|numeric'
        ),
    ),
    "customer_info_creation_form" => array(
        array(
            'field' => 'CUSTOMER_IDNO',
            'label' => 'Customer id',
            'rules' => 'trim|required|numeric'
        ),
        array(
            'field' => 'CUSTOMER_NAME',
            'label' => 'Customer name',
            'rules' => 'trim|required|min_length[1]|max_length[100]|callback_namefield'
        ),
        array(
            'field' => 'APPLICATION_DATE',
            'label' => 'Application date',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'AGENT_ID',
            'label' => 'Agent id',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'APPLIED_BRANCH_ID',
            'label' => 'Branch id',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'COMPANY_ID',
            'label' => 'Company id',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'OCCUPATION_DEPT_NAME',
            'label' => 'Occupation dept name',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'JOBSECTOR_ID',
            'label' => 'Jobsector id',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'RACE_ID',
            'label' => 'Race id',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'REFERENCE_NAME[]',
            'label' => 'Reference name',
            'rules' => 'trim|required|min_length[1]|max_length[100]|callback_namefield'
        ),
        array(
            'field' => 'REFERENCE_IDNO[]',
            'label' => 'Reference id no',
            'rules' => 'trim|required'
        ),
    )
);
