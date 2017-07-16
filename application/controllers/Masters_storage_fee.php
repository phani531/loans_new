<?php

/*
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */

class Masters_storage_fee extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Masters_storage_fee_model');
        $this->load->model('Client_info_model');
    }

    /*
     * Listing of masters_storage_fee
     */

    function index() {
        $data['masters_storage_fee'] = $this->Masters_storage_fee_model->get_all_masters_storage_fee();

        $data['_view'] = 'masters_storage_fee/index';
        $this->load->view('layouts/main', $data);
    }

    /**
     * Function to get all masters storage fee data
     * 
     * @return json result
     */
    function getAllMastersStorageFee() {
        $request = $_GET;
        $result = $this->Masters_storage_fee_model->getAllMastersStorageFeeData($request, array());
        echo json_encode($result);
        exit;
    }

    /*
     * Adding a new masters_storage_fee
     */

    function add() {
        if (isset($_POST) && count($_POST) > 0) {
            $params = array(
                'STORAGE_CHARGE' => $this->input->post('STORAGE_CHARGE'),
                'CREATED_DATE' => date("Y-m-d H:i:s"),
                'CREATED_BY' => $this->session->userdata['EMP_DATA']['EMP_ID'],
                'IS_ACTIVE' => 1,
            );

            $masters_storage_fee_id = $this->Masters_storage_fee_model->add_masters_storage_fee($params);
            redirect('masters_storage_fee/index');
        } else {
            $data['all_client_info'] = $this->Client_info_model->get_all_client_info();
            $data['_view'] = 'masters_storage_fee/add';
            $this->load->view('layouts/main', $data);
        }
    }

    /*
     * Editing a masters_storage_fee
     */

    function edit($STORAGE_ID) {
        // check if the masters_storage_fee exists before trying to edit it
        $data['masters_storage_fee'] = $this->Masters_storage_fee_model->get_masters_storage_fee($STORAGE_ID);

        if (isset($data['masters_storage_fee']['STORAGE_ID'])) {
            if (isset($_POST) && count($_POST) > 0) {
                $params = array(
                    'STORAGE_CHARGE' => $this->input->post('STORAGE_CHARGE'),
                    'MODIFIED_DATE' => date("Y-m-d H:i:s"),
                    'MODIFIED_BY' => $this->session->userdata['EMP_DATA']['EMP_ID'],
                    'IS_ACTIVE' => 1,
                );

                $this->Masters_storage_fee_model->update_masters_storage_fee($STORAGE_ID, $params);
                redirect('masters_storage_fee/index');
            } else {
                $data['all_client_info'] = $this->Client_info_model->get_all_client_info();
                $data['_view'] = 'masters_storage_fee/edit';
                $this->load->view('layouts/main', $data);
            }
        } else
            show_error('The masters_storage_fee you are trying to edit does not exist.');
    }

    /*
     * Deleting masters_storage_fee
     */

    function remove($STORAGE_ID) {
        $masters_storage_fee = $this->Masters_storage_fee_model->get_masters_storage_fee($STORAGE_ID);

        // check if the masters_storage_fee exists before trying to delete it
        if (isset($masters_storage_fee['STORAGE_ID'])) {
            $this->Masters_storage_fee_model->delete_masters_storage_fee($STORAGE_ID);
            redirect('masters_storage_fee/index');
        } else
            show_error('The masters_storage_fee you are trying to delete does not exist.');
    }

}
