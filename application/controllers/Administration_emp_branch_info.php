<?php

/*
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */

class Administration_emp_branch_info extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('Administration_emp_branch_info_model', 'Administration_employee_model', 'Administration_comp_profile_model'));
        $this->load->helper(array("datatable"));
        $this->load->library(array("form_validation", "PostData"));
        $session_data = (isset($this->session->userdata['EMP_DATA']) && !empty($this->session->userdata['EMP_DATA'])) ? $this->session->userdata['EMP_DATA'] : array();
        if (empty($session_data))
            redirect("login");
    }

    /*
     * Listing of administration_emp_branch_info
     */

    function index() {
        $data['_view'] = 'administration_emp_branch_info/index';
        $this->load->view('layouts/main', $data);
    }

    /**
     * Function to get all employee branch information
     * 
     * @return json result
     */
    function getAllEmpBranchInfo() {
        $request = $_GET;
        $result = $this->Administration_emp_branch_info_model->get_all_administration_emp_branch_info($request, array());
        echo json_encode($result);
        exit;
    }

    /*
     * Adding a new administration_emp_branch_info
     */

    function add() {
        $postData = $this->input->post(NULL, TRUE);
        $conditions = array("IS_ACTIVE" => 1, "EMP_ID !=" => 1, "CREATED_BY" => $this->session->userdata['EMP_DATA']['EMP_ID']);
        $data['all_administration_employees'] = $this->Administration_employee_model->get_all_administration_employees_data($conditions);
        $data['all_administration_comp_profile'] = $this->Administration_comp_profile_model->get_all_administration_comp_profile_data();
        if (!empty($postData)) {
            if ($this->form_validation->run("admin_emp_branch_form") == TRUE) {
                $admin_post_data = $this->postdata->getAdminEmpBrnachPostData($postData);
                $administration_emp_branch_info_id = $this->Administration_emp_branch_info_model->add_administration_emp_branch_info($admin_post_data);
                redirect('administration_emp_branch_info/index');
            } else {
                $data['_view'] = 'administration_emp_branch_info/add';
                $this->load->view('layouts/main', $data);
            }
        } else {
            $data['_view'] = 'administration_emp_branch_info/add';
            $this->load->view('layouts/main', $data);
        }
    }

    /*
     * Editing a administration_emp_branch_info
     */

    function edit($ID) {
        $postData = $this->input->post(NULL, TRUE);
        $conditions = array("IS_ACTIVE" => 1, "EMP_ID !=" => 1, "CREATED_BY" => $this->session->userdata['EMP_DATA']['EMP_ID']);
        $data['all_administration_employees'] = $this->Administration_employee_model->get_all_administration_employees_data($conditions);
        $data['all_administration_comp_profile'] = $this->Administration_comp_profile_model->get_all_administration_comp_profile_data();
        // check if the administration_emp_branch_info exists before trying to edit it
        $data['administration_emp_branch_info'] = $this->Administration_emp_branch_info_model->get_administration_emp_branch_info($ID);

        if (isset($postData) && !empty($postData)) {
            if ($this->form_validation->run("admin_emp_branch_form") == TRUE) {
                $admin_post_data = $this->postdata->getAdminEmpBrnachPostData($postData, TRUE);
                $this->Administration_emp_branch_info_model->update_administration_emp_branch_info($ID, $admin_post_data);
                redirect('administration_emp_branch_info/index');
            } else {
                $data['_view'] = 'administration_emp_branch_info/edit';
                $this->load->view('layouts/main', $data);
            }
        } else {
            $data['_view'] = 'administration_emp_branch_info/edit';
            $this->load->view('layouts/main', $data);
        }
    }

    /*
     * Deleting administration_emp_branch_info
     */

    function remove() {
        $request = $_POST;
        $administration_emp_branch_info = $this->Administration_emp_branch_info_model->get_administration_emp_branch_info($request['id']);
        if (isset($administration_emp_branch_info['ID'])) {
            $status = $this->Administration_emp_branch_info_model->delete_administration_emp_branch_info($request['id']);
            if ($status) {
                echo json_encode(array("status" => "success", "message" => "You have successfully removed " . $administration_emp_branch_info['ID'] . "."));
                exit;
            }
            echo json_encode(array("status" => "error", "message" => "Some thing went wrong."));
            exit;
        } else {
            echo json_encode(array("status" => "error", "message" => "The branch info you are trying to delete does not exist."));
            exit;
        }
    }

}
