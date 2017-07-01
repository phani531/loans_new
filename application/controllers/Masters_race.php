<?php

/*
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */

class Masters_race extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Masters_race_model');
        $this->load->model('Client_info_model');
    }

    /*
     * Listing of masters_race
     */

    function index() {
        $data['masters_race'] = $this->Masters_race_model->get_all_masters_race();

        $data['_view'] = 'masters_race/index';
        $this->load->view('layouts/main', $data);
    }

    /**
     * Function to get all masters race
     * 
     * @return json result
     */
    function getAllMastersRace() {
        $request = $_GET;
        $result = $this->Masters_race_model->getAllMastersRaceData($request, array());
        echo json_encode($result);
        exit;
    }

    /*
     * Adding a new masters_race
     */

    function add() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('RACE_NAME', 'RACE NAME', 'required');

        if ($this->form_validation->run()) {
            $params = array(
                'RACE_NAME' => $this->input->post('RACE_NAME'),
                'CREATED_DATE' => date("Y-m-d H:i:s"),
                'CREATED_BY' => $this->session->userdata['user']['LOGIN_ID'],
                'IS_ACTIVE' => 1,
            );

            $masters_race_id = $this->Masters_race_model->add_masters_race($params);
            redirect('masters_race/index');
        } else {
            $data['all_client_info'] = $this->Client_info_model->get_all_client_info();
            $data['_view'] = 'masters_race/add';
            $this->load->view('layouts/main', $data);
        }
    }

    /*
     * Editing a masters_race
     */

    function edit($RACE_ID) {
        // check if the masters_race exists before trying to edit it
        $data['masters_race'] = $this->Masters_race_model->get_masters_race($RACE_ID);

        if (isset($data['masters_race']['RACE_ID'])) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('RACE_NAME', 'RACE NAME', 'required');

            if ($this->form_validation->run()) {
                $params = array(
                    'RACE_NAME' => $this->input->post('RACE_NAME'),
                    'MODIFIED_DATE' => date("Y-m-d H:i:s"),
                    'MODIFIED_BY' => $this->session->userdata['user']['LOGIN_ID'],
                    'IS_ACTIVE' => 1,
                );

                $this->Masters_race_model->update_masters_race($RACE_ID, $params);
                redirect('masters_race/index');
            } else {
                $data['all_client_info'] = $this->Client_info_model->get_all_client_info();
                $data['_view'] = 'masters_race/edit';
                $this->load->view('layouts/main', $data);
            }
        } else
            show_error('The masters_race you are trying to edit does not exist.');
    }

    /*
     * Deleting masters_race
     */

    function remove($RACE_ID) {
        $masters_race = $this->Masters_race_model->get_masters_race($RACE_ID);

        // check if the masters_race exists before trying to delete it
        if (isset($masters_race['RACE_ID'])) {
            $this->Masters_race_model->delete_masters_race($RACE_ID);
            redirect('masters_race/index');
        } else
            show_error('The masters_race you are trying to delete does not exist.');
    }

}
