<?php

/*
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */

class Masters_holiday_info extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Masters_holiday_info_model');
        $this->load->model('Client_info_model');
    }

    /*
     * Listing of masters_holiday_info
     */

    function index() {
        $data['masters_holiday_info'] = $this->Masters_holiday_info_model->get_all_masters_holiday_info();

        $data['_view'] = 'masters_holiday_info/index';
        $this->load->view('layouts/main', $data);
    }

    /**
     * Function to get all masters holiday info data
     * 
     * @return json result
     */
    function getAllMastersHolidayInfo() {
        $request = $_GET;
        $result = $this->Masters_holiday_info_model->getAllMastersHolidayInfoData($request, array());
        echo json_encode($result);
        exit;
    }

    /*
     * Adding a new masters_holiday_info
     */

    function add() {
        if (isset($_POST) && count($_POST) > 0) {
            $params = array(
                'HOLIDAY_NAME' => $this->input->post('HOLIDAY_NAME'),
                'HOLIDAY_FROM_DATE' => $this->input->post('HOLIDAY_FROM_DATE'),
                'HOLIDAY_TO_DATE' => $this->input->post('HOLIDAY_TO_DATE'),
                'CREATED_DATE' => date("Y-m-d H:i:s"),
                'CREATED_BY' => $this->session->userdata['EMP_DATA']['EMP_ID'],
                'IS_ACTIVE' => 1,
            );

            $masters_holiday_info_id = $this->Masters_holiday_info_model->add_masters_holiday_info($params);
            redirect('masters_holiday_info/index');
        } else {
            $data['all_client_info'] = $this->Client_info_model->get_all_client_info();
            $data['_view'] = 'masters_holiday_info/add';
            $this->load->view('layouts/main', $data);
        }
    }

    /*
     * Editing a masters_holiday_info
     */

    function edit($HOLIDAY_ID) {
        // check if the masters_holiday_info exists before trying to edit it
        $data['masters_holiday_info'] = $this->Masters_holiday_info_model->get_masters_holiday_info($HOLIDAY_ID);

        if (isset($data['masters_holiday_info']['HOLIDAY_ID'])) {
            if (isset($_POST) && count($_POST) > 0) {
                $params = array(
                    'HOLIDAY_NAME' => $this->input->post('HOLIDAY_NAME'),
                    'HOLIDAY_FROM_DATE' => $this->input->post('HOLIDAY_FROM_DATE'),
                    'HOLIDAY_TO_DATE' => $this->input->post('HOLIDAY_TO_DATE'),
                    'MODIFIED_DATE' => date("Y-m-d H:i:s"),
                    'MODIFIED_BY' => $this->session->userdata['EMP_DATA']['EMP_ID'],
                    'IS_ACTIVE' => 1,
                );

                $this->Masters_holiday_info_model->update_masters_holiday_info($HOLIDAY_ID, $params);
                redirect('masters_holiday_info/index');
            } else {
                $data['all_client_info'] = $this->Client_info_model->get_all_client_info();
                $data['_view'] = 'masters_holiday_info/edit';
                $this->load->view('layouts/main', $data);
            }
        } else
            show_error('The masters_holiday_info you are trying to edit does not exist.');
    }

    /*
     * Deleting masters_holiday_info
     */

    function remove($HOLIDAY_ID) {
        $masters_holiday_info = $this->Masters_holiday_info_model->get_masters_holiday_info($HOLIDAY_ID);

        // check if the masters_holiday_info exists before trying to delete it
        if (isset($masters_holiday_info['HOLIDAY_ID'])) {
            $this->Masters_holiday_info_model->delete_masters_holiday_info($HOLIDAY_ID);
            redirect('masters_holiday_info/index');
        } else
            show_error('The masters_holiday_info you are trying to delete does not exist.');
    }

}
