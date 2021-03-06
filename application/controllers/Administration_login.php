<?php

/*
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */

class Administration_login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('Administration_login_model', 'Administration_employee_model'));
        $this->load->helper(array("datatable"));
        $this->load->library(array("form_validation", "PostData"));
        $session_data = (isset($this->session->userdata['EMP_DATA']) && !empty($this->session->userdata['EMP_DATA'])) ? $this->session->userdata['EMP_DATA'] : array();
        if (empty($session_data))
            redirect("login");
    }

    /*
     * Listing of administration_logins
     */

    function index() {
        $data['_view'] = 'administration_login/index';
        $this->load->view('layouts/main', $data);
    }

    /**
     * Function to get all admin fund allocations
     * 
     * @return json result
     */
    function getAllAdminLogins() {
        $request = $_GET;
        $result = $this->Administration_login_model->get_all_administration_logins($request, array());
        echo json_encode($result);
        exit;
    }

    /*
     * Adding a new administration_login
     */

    function add() {
        $postData = $this->input->post(NULL, TRUE);
        $conditions = array("IS_ACTIVE" => 1, "EMP_ID !=" => 1, "CREATED_BY" => $this->session->userdata['EMP_DATA']['EMP_ID']);
        $data['admin_employee_data'] = $this->Administration_employee_model->get_all_administration_employees_data($conditions);
        if (!empty($postData)) {
            if ($this->form_validation->run("admin_login_form") == TRUE) {
                $client_post_data = $this->postdata->getAdminiLoginPostData($postData);
                $administration_login_id = $this->Administration_login_model->add_administration_login($client_post_data);
                redirect('administration_login/index');
            } else {
                $data['_view'] = 'administration_login/add';
                $this->load->view('layouts/main', $data);
            }
        } else {
            $data['_view'] = 'administration_login/add';
            $this->load->view('layouts/main', $data);
        }
    }

    /*
     * Editing a administration_login
     */

    function edit($LOGIN_ID) {
        $postData = $this->input->post(NULL, TRUE);
        // check if the administration_login exists before trying to edit it
        $data['administration_login'] = $this->Administration_login_model->get_administration_login($LOGIN_ID);
        if (isset($postData) && !empty($postData)) {
            if ($this->form_validation->run("admin_login_form") == TRUE) {
                $client_post_data = $this->postdata->getAdminiLoginPostData($postData, TRUE);
                $this->Administration_login_model->update_administration_login($CLIENT_ID, $client_post_data);
                redirect('administration_login/index');
            } else {
                $data['_view'] = 'administration_login/edit';
                $this->load->view('layouts/main', $data);
            }
        } else {
            $data['_view'] = 'administration_login/edit';
            $this->load->view('layouts/main', $data);
        }
    }

    /*
     * Deleting administration_login
     */

    function remove() {
        $request = $_POST;
        $administration_login = $this->Administration_login_model->get_administration_login($request['id']);
        if (isset($administration_login['LOGIN_ID'])) {
            $status = $this->Administration_login_model->delete_administration_login($request['id']);
            if ($status) {
                echo json_encode(array("status" => "success", "message" => "You have successfully removed " . $administration_login['LOGIN_ID'] . "."));
                exit;
            }
            echo json_encode(array("status" => "error", "message" => "Some thing went wrong."));
            exit;
        } else {
            echo json_encode(array("status" => "error", "message" => "The administration login you are trying to delete does not exist."));
            exit;
        }
    }

}
