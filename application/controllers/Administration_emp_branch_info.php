<?php

/*
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */

class Administration_emp_branch_info extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Administration_emp_branch_info_model');
        $this->load->helper(array("datatable"));
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
        $this->load->library('form_validation');

        $this->form_validation->set_rules('EMP_ID', 'EMP ID', 'required');

        if ($this->form_validation->run()) {
            $params = array(
                'EMP_ID' => $this->input->post('EMP_ID'),
                'BRANCH_ID' => $this->input->post('BRANCH_ID'),
            );

            $administration_emp_branch_info_id = $this->Administration_emp_branch_info_model->add_administration_emp_branch_info($params);
            redirect('administration_emp_branch_info/index');
        } else {
            $this->load->model('Administration_employee_model');
            $data['all_administration_employees'] = $this->Administration_employee_model->get_all_administration_employees();

            $this->load->model('Administration_comp_profile_model');
            $data['all_administration_comp_profile'] = $this->Administration_comp_profile_model->get_all_administration_comp_profile();

            $data['_view'] = 'administration_emp_branch_info/add';
            $this->load->view('layouts/main', $data);
        }
    }

    /*
     * Editing a administration_emp_branch_info
     */

    function edit($ID) {
        // check if the administration_emp_branch_info exists before trying to edit it
        $data['administration_emp_branch_info'] = $this->Administration_emp_branch_info_model->get_administration_emp_branch_info($ID);

        if (isset($data['administration_emp_branch_info']['ID'])) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('EMP_ID', 'EMP ID', 'required');

            if ($this->form_validation->run()) {
                $params = array(
                    'EMP_ID' => $this->input->post('EMP_ID'),
                    'BRANCH_ID' => $this->input->post('BRANCH_ID'),
                );

                $this->Administration_emp_branch_info_model->update_administration_emp_branch_info($ID, $params);
                redirect('administration_emp_branch_info/index');
            } else {
                $this->load->model('Administration_employee_model');
                $data['all_administration_employees'] = $this->Administration_employee_model->get_all_administration_employees();

                $this->load->model('Administration_comp_profile_model');
                $data['all_administration_comp_profile'] = $this->Administration_comp_profile_model->get_all_administration_comp_profile();

                $data['_view'] = 'administration_emp_branch_info/edit';
                $this->load->view('layouts/main', $data);
            }
        } else
            show_error('The administration_emp_branch_info you are trying to edit does not exist.');
    }

    /*
     * Deleting administration_emp_branch_info
     */

    function remove($ID) {
        $administration_emp_branch_info = $this->Administration_emp_branch_info_model->get_administration_emp_branch_info($ID);

        // check if the administration_emp_branch_info exists before trying to delete it
        if (isset($administration_emp_branch_info['ID'])) {
            $this->Administration_emp_branch_info_model->delete_administration_emp_branch_info($ID);
            redirect('administration_emp_branch_info/index');
        } else
            show_error('The administration_emp_branch_info you are trying to delete does not exist.');
    }

}
