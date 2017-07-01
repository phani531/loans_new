<?php

/*
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */

class Masters_ornament_desc extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Masters_ornament_desc_model');
        $this->load->model('Client_info_model');
    }

    /*
     * Listing of masters_ornament_desc
     */

    function index() {
        $data['masters_ornament_desc'] = $this->Masters_ornament_desc_model->get_all_masters_ornament_desc();

        $data['_view'] = 'masters_ornament_desc/index';
        $this->load->view('layouts/main', $data);
    }

    /**
     * Function to get all masters ornament desc
     * 
     * @return json result
     */
    function getAllMastersOrnamentDesc() {
        $request = $_GET;
        $result = $this->Masters_ornament_desc_model->getAllMastersOrnamentDescData($request, array());
        echo json_encode($result);
        exit;
    }

    /*
     * Adding a new masters_ornament_desc
     */

    function add() {
        if (isset($_POST) && count($_POST) > 0) {
            $params = array(
                'ORNAMENT_DESC_NAME' => $this->input->post('ORNAMENT_DESC_NAME'),
                'ORNAMENT_DESCRIPTION' => $this->input->post('ORNAMENT_DESCRIPTION'),
                'ORNAMENT_TYPE' => $this->input->post('ORNAMENT_TYPE'),
                'CREATED_DATE' => date("Y-m-d H:i:s"),
                'CREATED_BY' => $this->session->userdata['user']['LOGIN_ID'],
                'IS_ACTIVE' => 1,
            );

            $masters_ornament_desc_id = $this->Masters_ornament_desc_model->add_masters_ornament_desc($params);
            redirect('masters_ornament_desc/index');
        } else {
            $data['all_client_info'] = $this->Client_info_model->get_all_client_info();
            $data['_view'] = 'masters_ornament_desc/add';
            $this->load->view('layouts/main', $data);
        }
    }

    /*
     * Editing a masters_ornament_desc
     */

    function edit($ORNAMENT_DESC_ID) {
        // check if the masters_ornament_desc exists before trying to edit it
        $data['masters_ornament_desc'] = $this->Masters_ornament_desc_model->get_masters_ornament_desc($ORNAMENT_DESC_ID);

        if (isset($data['masters_ornament_desc']['ORNAMENT_DESC_ID'])) {
            if (isset($_POST) && count($_POST) > 0) {
                $params = array(
                    'ORNAMENT_DESC_NAME' => $this->input->post('ORNAMENT_DESC_NAME'),
                    'ORNAMENT_DESCRIPTION' => $this->input->post('ORNAMENT_DESCRIPTION'),
                    'ORNAMENT_TYPE' => $this->input->post('ORNAMENT_TYPE'),
                    'MODIFIED_DATE' => date("Y-m-d H:i:s"),
                    'MODIFIED_BY' => $this->session->userdata['user']['LOGIN_ID'],
                    'IS_ACTIVE' => 1,
                );

                $this->Masters_ornament_desc_model->update_masters_ornament_desc($ORNAMENT_DESC_ID, $params);
                redirect('masters_ornament_desc/index');
            } else {
                $data['all_client_info'] = $this->Client_info_model->get_all_client_info();
                $data['_view'] = 'masters_ornament_desc/edit';
                $this->load->view('layouts/main', $data);
            }
        } else
            show_error('The masters_ornament_desc you are trying to edit does not exist.');
    }

    /*
     * Deleting masters_ornament_desc
     */

    function remove($ORNAMENT_DESC_ID) {
        $masters_ornament_desc = $this->Masters_ornament_desc_model->get_masters_ornament_desc($ORNAMENT_DESC_ID);

        // check if the masters_ornament_desc exists before trying to delete it
        if (isset($masters_ornament_desc['ORNAMENT_DESC_ID'])) {
            $this->Masters_ornament_desc_model->delete_masters_ornament_desc($ORNAMENT_DESC_ID);
            redirect('masters_ornament_desc/index');
        } else
            show_error('The masters_ornament_desc you are trying to delete does not exist.');
    }

}
