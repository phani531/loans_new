<?php

/*
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */

class Masters_agent_info extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Masters_agent_info_model');
        $session_data = (isset($this->session->userdata['EMP_DATA']) && !empty($this->session->userdata['EMP_DATA'])) ? $this->session->userdata['EMP_DATA'] : array();
        if (empty($session_data))
            redirect("login");
    }

    /*
     * Listing of masters_agent_info
     */

    function index() {
        $data['masters_agent_info'] = $this->Masters_agent_info_model->get_all_masters_agent_info();

        $data['_view'] = 'masters_agent_info/index';
        $this->load->view('layouts/main', $data);
    }

    function getAllMastersAgentInfo() {
        $request = $_GET;
        $result = $this->Masters_agent_info_model->getAllMastersAgentData($request, array());
        echo json_encode($result);
        exit;
    }

    /*
     * Adding a new masters_agent_info
     */

    function add() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('AGENT_IDNO', 'AGENT IDNO', 'required');
        $this->form_validation->set_rules('AGENT_NAME', 'AGENT NAME', 'required');
        $this->form_validation->set_rules('AGENT_COMMISSION_TYPE', 'AGENT COMMISSION TYPE', 'required');
        $this->form_validation->set_rules('AGENT_COMMISSION_AMOUNT', 'AGENT COMMISSION AMOUNT', 'integer');
        $this->form_validation->set_rules('AGENT_COMMISSION_PERCENTAGE', 'AGENT COMMISSION PERCENTAGE', 'integer');

        if ($this->form_validation->run()) {
            $params = array(
                'AGENT_IDNO' => $this->input->post('AGENT_IDNO'),
                'AGENT_NAME' => $this->input->post('AGENT_NAME'),
                'AGENT_ADDRESS' => $this->input->post('AGENT_ADDRESS'),
                'AGENT_HOUSE_CTC_NO' => $this->input->post('AGENT_HOUSE_CTC_NO'),
                'AGENT_MOBILE_CTC_NO' => $this->input->post('AGENT_MOBILE_CTC_NO'),
                'AGENT_COMPANY_NAME' => $this->input->post('AGENT_COMPANY_NAME'),
                'AGENT_COMPANY_ADDRESS' => $this->input->post('AGENT_COMPANY_ADDRESS'),
                'AGENT_COMPANY_CTC_NO' => $this->input->post('AGENT_COMPANY_CTC_NO'),
                'AGENT_COMMISSION_TYPE' => $this->input->post('AGENT_COMMISSION_TYPE'),
                'AGENT_COMMISSION_AMOUNT' => $this->input->post('AGENT_COMMISSION_AMOUNT'),
                'AGENT_COMMISSION_PERCENTAGE' => $this->input->post('AGENT_COMMISSION_PERCENTAGE'),
                'AGENT_PIC_PATH' => $this->input->post('AGENT_PIC_PATH'),
                'CREATED_DATE' => date("Y-m-d H:i:s"),
                'CREATED_BY' => $this->session->userdata['EMP_DATA']['EMP_ID'],
                'IS_ACTIVE' => 1,
            );

            $masters_agent_info_id = $this->Masters_agent_info_model->add_masters_agent_info($params);
            redirect('masters_agent_info/index');
        } else {
            $this->load->model('Client_info_model');
            $data['all_client_info'] = $this->Client_info_model->get_all_client_info();

            $data['_view'] = 'masters_agent_info/add';
            $this->load->view('layouts/main', $data);
        }
    }

    /*
     * Editing a masters_agent_info
     */

    function edit($AGENT_ID) {
        // check if the masters_agent_info exists before trying to edit it
        $data['masters_agent_info'] = $this->Masters_agent_info_model->get_masters_agent_info($AGENT_ID);

        if (isset($data['masters_agent_info']['AGENT_ID'])) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('AGENT_IDNO', 'AGENT IDNO', 'required');
            $this->form_validation->set_rules('AGENT_NAME', 'AGENT NAME', 'required');
            $this->form_validation->set_rules('AGENT_COMMISSION_TYPE', 'AGENT COMMISSION TYPE', 'required');
            $this->form_validation->set_rules('AGENT_COMMISSION_AMOUNT', 'AGENT COMMISSION AMOUNT', 'integer');
            $this->form_validation->set_rules('AGENT_COMMISSION_PERCENTAGE', 'AGENT COMMISSION PERCENTAGE', 'integer');

            if ($this->form_validation->run()) {
                $params = array(
                    'AGENT_IDNO' => $this->input->post('AGENT_IDNO'),
                    'AGENT_NAME' => $this->input->post('AGENT_NAME'),
                    'AGENT_ADDRESS' => $this->input->post('AGENT_ADDRESS'),
                    'AGENT_HOUSE_CTC_NO' => $this->input->post('AGENT_HOUSE_CTC_NO'),
                    'AGENT_MOBILE_CTC_NO' => $this->input->post('AGENT_MOBILE_CTC_NO'),
                    'AGENT_COMPANY_NAME' => $this->input->post('AGENT_COMPANY_NAME'),
                    'AGENT_COMPANY_ADDRESS' => $this->input->post('AGENT_COMPANY_ADDRESS'),
                    'AGENT_COMPANY_CTC_NO' => $this->input->post('AGENT_COMPANY_CTC_NO'),
                    'AGENT_COMMISSION_TYPE' => $this->input->post('AGENT_COMMISSION_TYPE'),
                    'AGENT_COMMISSION_AMOUNT' => $this->input->post('AGENT_COMMISSION_AMOUNT'),
                    'AGENT_COMMISSION_PERCENTAGE' => $this->input->post('AGENT_COMMISSION_PERCENTAGE'),
                    'AGENT_PIC_PATH' => $this->input->post('AGENT_PIC_PATH'),
                    'MODIFIED_DATE' => date("Y-m-d H:i:s"),
                    'MODIFIED_BY' => $this->session->userdata['EMP_DATA']['EMP_ID'],
                    'IS_ACTIVE' => 1,
                );

                $this->Masters_agent_info_model->update_masters_agent_info($AGENT_ID, $params);
                redirect('masters_agent_info/index');
            } else {
                $this->load->model('Client_info_model');
                $data['all_client_info'] = $this->Client_info_model->get_all_client_info();

                $data['_view'] = 'masters_agent_info/edit';
                $this->load->view('layouts/main', $data);
            }
        } else
            show_error('The masters_agent_info you are trying to edit does not exist.');
    }

    /*
     * Deleting masters_agent_info
     */

    function remove($AGENT_ID) {
        $masters_agent_info = $this->Masters_agent_info_model->get_masters_agent_info($AGENT_ID);

        // check if the masters_agent_info exists before trying to delete it
        if (isset($masters_agent_info['AGENT_ID'])) {
            $this->Masters_agent_info_model->delete_masters_agent_info($AGENT_ID);
            redirect('masters_agent_info/index');
        } else
            show_error('The masters_agent_info you are trying to delete does not exist.');
    }

}
