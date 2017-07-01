<?php

/*
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */

class Masters_carat extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('Client_info_model', 'Masters_carat_model'));
    }

    /*
     * Listing of masters_carat
     */

    function index() {
        $data['masters_carat'] = $this->Masters_carat_model->get_all_masters_carat();

        $data['_view'] = 'masters_carat/index';
        $this->load->view('layouts/main', $data);
    }

    /**
     * Function to get all masters carat
     * 
     * @return json result
     */
    function getAllMastersCarat() {
        $request = $_GET;
        $result = $this->Masters_carat_model->getAllMastersCaratData($request, array());
        echo json_encode($result);
        exit;
    }

    /*
     * Adding a new masters_carat
     */

    function add() {
        if (isset($_POST) && count($_POST) > 0) {
            $params = array(
                'CARAT_NAME' => $this->input->post('CARAT_NAME'),
                'CREATED_DATE' => date("Y-m-d H:i:s"),
                'CREATED_BY' => $this->session->userdata['user']['LOGIN_ID'],
                'IS_ACTIVE' => 1,
            );

            $masters_carat_id = $this->Masters_carat_model->add_masters_carat($params);
            redirect('masters_carat/index');
        } else {
            $data['all_client_info'] = $this->Client_info_model->get_all_client_info();
            $data['_view'] = 'masters_carat/add';
            $this->load->view('layouts/main', $data);
        }
    }

    /*
     * Editing a masters_carat
     */

    function edit($CARAT_ID) {
        // check if the masters_carat exists before trying to edit it
        $data['masters_carat'] = $this->Masters_carat_model->get_masters_carat($CARAT_ID);

        if (isset($data['masters_carat']['CARAT_ID'])) {
            if (isset($_POST) && count($_POST) > 0) {
                $params = array(
                    'CARAT_NAME' => $this->input->post('CARAT_NAME'),
                    'MODIFIED_DATE' => date("Y-m-d H:i:s"),
                    'MODIFIED_BY' => $this->session->userdata['user']['LOGIN_ID'],
                    'IS_ACTIVE' => 1,
                );

                $this->Masters_carat_model->update_masters_carat($CARAT_ID, $params);
                redirect('masters_carat/index');
            } else {
                $data['all_client_info'] = $this->Client_info_model->get_all_client_info();
                $data['_view'] = 'masters_carat/edit';
                $this->load->view('layouts/main', $data);
            }
        } else
            show_error('The masters_carat you are trying to edit does not exist.');
    }

    /*
     * Deleting masters_carat
     */

    function remove($CARAT_ID) {
        $masters_carat = $this->Masters_carat_model->get_masters_carat($CARAT_ID);

        // check if the masters_carat exists before trying to delete it
        if (isset($masters_carat['CARAT_ID'])) {
            $this->Masters_carat_model->delete_masters_carat($CARAT_ID);
            redirect('masters_carat/index');
        } else
            show_error('The masters_carat you are trying to delete does not exist.');
    }

}
