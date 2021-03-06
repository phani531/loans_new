<?php

/*
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */

class Masters_state extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Masters_state_model');
        $this->load->model('Client_info_model');
        $session_data = (isset($this->session->userdata['EMP_DATA']) && !empty($this->session->userdata['EMP_DATA'])) ? $this->session->userdata['EMP_DATA'] : array();
        if (empty($session_data))
            redirect("login");
    }

    /*
     * Listing of masters_states
     */

    function index() {
        $data['masters_states'] = $this->Masters_state_model->get_all_masters_states();

        $data['_view'] = 'masters_state/index';
        $this->load->view('layouts/main', $data);
    }

    /**
     * Function to get all masters states
     * 
     * @return json result
     */
    function getAllMastersStates() {
        $request = $_GET;
        $result = $this->Masters_state_model->getAllMastersStatesData($request, array());
        echo json_encode($result);
        exit;
    }

    /*
     * Adding a new masters_state
     */

    function add() {
        if (isset($_POST) && count($_POST) > 0) {
            $params = array(
                'STATE_NAME' => $this->input->post('STATE_NAME'),
                'CREATED_DATE' => date("Y-m-d H:i:s"),
                'CREATED_BY' => $this->session->userdata['EMP_DATA']['EMP_ID'],
                'IS_ACTIVE' => 1,
            );

            $masters_state_id = $this->Masters_state_model->add_masters_state($params);
            redirect('masters_state/index');
        } else {
            $data['all_client_info'] = $this->Client_info_model->get_all_client_info();
            $data['_view'] = 'masters_state/add';
            $this->load->view('layouts/main', $data);
        }
    }

    /*
     * Editing a masters_state
     */

    function edit($STATE_ID) {
        // check if the masters_state exists before trying to edit it
        $data['masters_state'] = $this->Masters_state_model->get_masters_state($STATE_ID);

        if (isset($data['masters_state']['STATE_ID'])) {
            if (isset($_POST) && count($_POST) > 0) {
                $params = array(
                    'STATE_NAME' => $this->input->post('STATE_NAME'),
                    'MODIFIED_DATE' => date("Y-m-d H:i:s"),
                    'MODIFIED_BY' => $this->session->userdata['EMP_DATA']['EMP_ID'],
                    'IS_ACTIVE' => 1,
                );

                $this->Masters_state_model->update_masters_state($STATE_ID, $params);
                redirect('masters_state/index');
            } else {
                $data['all_client_info'] = $this->Client_info_model->get_all_client_info();
                $data['_view'] = 'masters_state/edit';
                $this->load->view('layouts/main', $data);
            }
        } else
            show_error('The masters_state you are trying to edit does not exist.');
    }

    /*
     * Deleting masters_state
     */

    function remove($STATE_ID) {
        $masters_state = $this->Masters_state_model->get_masters_state($STATE_ID);

        // check if the masters_state exists before trying to delete it
        if (isset($masters_state['STATE_ID'])) {
            $this->Masters_state_model->delete_masters_state($STATE_ID);
            redirect('masters_state/index');
        } else
            show_error('The masters_state you are trying to delete does not exist.');
    }

}
