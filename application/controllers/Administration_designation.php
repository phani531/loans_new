<?php

/*
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */

class Administration_designation extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Administration_designation_model');
        $this->load->helper(array("datatable"));
        $this->load->library(array("form_validation", "PostData"));
        $session_data = (isset($this->session->userdata['EMP_DATA']) && !empty($this->session->userdata['EMP_DATA'])) ? $this->session->userdata['EMP_DATA'] : array();
        if (empty($session_data))
            redirect("login");
    }

    /*
     * Listing of administration_designation
     */

    function index() {
        $data['_view'] = 'administration_designation/index';
        $this->load->view('layouts/main', $data);
    }

    /**
     * Function to load all admin designation
     * 
     * @return json result
     */
    public function getAllAdminDesignationDetails() {
        $request = $_GET;
        $result = $this->Administration_designation_model->get_all_administration_designation($request, array());
        echo json_encode($result);
        exit;
    }

    /*
     * Adding a new administration_designation
     */

    function add() {
        $postData = $this->input->post(NULL, TRUE);
        if (!empty($postData)) {
            if ($this->form_validation->run("admin_design_form") == TRUE) {
                $admin_data = $this->postdata->getAdminiDesignData($postData);
                $administration_designation_id = $this->Administration_designation_model->add_administration_designation($admin_data);
                redirect('administration_designation/index');
            } else {
                $data['_view'] = 'administration_designation/add';
                $this->load->view('layouts/main', $data);
            }
        } else {
            $data['_view'] = 'administration_designation/add';
            $this->load->view('layouts/main', $data);
        }
    }

    /*
     * Editing a administration_designation
     */

    function edit($DESIGNATION_ID) {
        $postData = $this->input->post(NULL, TRUE);
        // check if the administration_designation exists before trying to edit it
        $data['administration_designation'] = $this->Administration_designation_model->get_administration_designation($DESIGNATION_ID);
        if (isset($postData) && !empty($postData)) {
            if ($this->form_validation->run("admin_design_form") == TRUE) {
                $admin_data = $this->postdata->getAdminiDesignData($postData, TRUE);
                $this->Administration_designation_model->update_administration_designation($DESIGNATION_ID, $admin_data);
                redirect('administration_designation/index');
            } else {
                $data['_view'] = 'administration_designation/edit';
                $this->load->view('layouts/main', $data);
            }
        } else {
            $data['_view'] = 'administration_designation/edit';
            $this->load->view('layouts/main', $data);
        }
    }

    /*
     * Deleting administration_designation
     */

    function remove() {
        $request = $_POST;
        $administration_designation = $this->Administration_designation_model->get_administration_designation($request['id']);
        // check if the client_info exists before trying to delete it
        if (isset($administration_designation['DESIGNATION_ID'])) {
            $status = $this->Administration_designation_model->delete_administration_designation($request['id']);
            if ($status) {
                echo json_encode(array("status" => "success", "message" => "You have successfully removed " . $administration_designation['DESIGNATION_NAME'] . "."));
                exit;
            }
            echo json_encode(array("status" => "error", "message" => "Some thing went wrong."));
            exit;
        } else {
            echo json_encode(array("status" => "error", "message" => "The administration designation you are trying to delete does not exist."));
            exit;
        }
    }

}
