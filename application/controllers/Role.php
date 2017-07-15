<?php

/*
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */

class Role extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('Role_model'));
        $this->load->helper(array('datatable'));
        $this->load->library(array('form_validation', 'PostData'));
    }

    /*
     * Listing of roles
     */

    function index() {
//        $data['roles'] = $this->Role_model->get_all_roles();
        $data['_view'] = 'role/index';
        $this->load->view('layouts/main', $data);
    }

    function getAllRoles() {
        $request = $_GET;
        $rolesResult = $this->Role_model->getAllRolesList($request, array());
        echo json_encode($rolesResult);
        exit;
    }

    /*
     * Adding a new role
     */

    function add() {
        $postData = $this->input->post(NULL, TRUE);
        if (!empty($postData)) {
            if ($this->form_validation->run("role_form") == TRUE) {
                $client_post_data = $this->postdata->getRolePost($postData);
                $client_info_id = $this->Role_model->add_role($postData);
                redirect("role/index");
            } else {
                $data['_view'] = 'role/add';
                $this->load->view('layouts/main', $data);
            }
        } else {
            $data['_view'] = 'role/add';
            $this->load->view('layouts/main', $data);
        }
    }

    /*
     * Editing a role
     */

    function edit($ROLE_ID) {
        $postData = $this->input->post(NULL, TRUE);
        // check if the role exists before trying to edit it
        $data['role'] = $this->Role_model->get_role($ROLE_ID);
        if (isset($postData) && !empty($postData)) {
            if ($this->form_validation->run("role_form") == TRUE) {
                $this->Role_model->update_role($ROLE_ID, $postData);
                redirect('role/index');
            } else {
                $data['_view'] = 'role/edit';
                $this->load->view('layouts/main', $data);
            }
        } else {
            $data['_view'] = 'role/edit';
            $this->load->view('layouts/main', $data);
        }
    }

    /*
     * Deleting role
     */

    function remove() {
        $request = $_POST;
        $role = $this->Role_model->get_role($request['id']);
        // check if the client_info exists before trying to delete it
        if (isset($role['ROLE_ID'])) {
            $status = $this->Role_model->delete_role($request['id']);
            if ($status) {
                echo json_encode(array("status" => "success", "message" => "You have successfully removed " . $role['ROLE_NAME'] . "."));
                exit;
            }
            echo json_encode(array("status" => "error", "message" => "Some thing went wrong."));
            exit;
        } else {
            echo json_encode(array("status" => "error", "message" => "The client_info you are trying to delete does not exist."));
            exit;
        }
    }

}
