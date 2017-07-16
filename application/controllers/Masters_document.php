<?php

/*
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */

class Masters_document extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Masters_document_model');
        $this->load->model('Client_info_model');
    }

    /*
     * Listing of masters_documents
     */

    function index() {
        $data['masters_documents'] = $this->Masters_document_model->get_all_masters_documents();

        $data['_view'] = 'masters_document/index';
        $this->load->view('layouts/main', $data);
    }

    /**
     * Function to get all masters documents
     * 
     * @return json result
     */
    function getAllMastersDocuments() {
        $request = $_GET;
        $result = $this->Masters_document_model->getAllMastersDocumentsData($request, array());
        echo json_encode($result);
        exit;
    }

    /*
     * Adding a new masters_document
     */

    function add() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('DOCUMENT_NAME', 'DOCUMENT NAME', 'required');

        if ($this->form_validation->run()) {
            $params = array(
                'DOCUMENT_NAME' => $this->input->post('DOCUMENT_NAME'),
                'CREATED_DATE' => date("Y-m-d H:i:s"),
                'CREATED_BY' => $this->session->userdata['EMP_DATA']['EMP_ID'],
                'IS_ACTIVE' => 1,
                'DOC_TYPE' => $this->input->post('DOC_TYPE'),
            );

            $masters_document_id = $this->Masters_document_model->add_masters_document($params);
            redirect('masters_document/index');
        } else {
            $data['all_client_info'] = $this->Client_info_model->get_all_client_info();
            $data['_view'] = 'masters_document/add';
            $this->load->view('layouts/main', $data);
        }
    }

    /*
     * Editing a masters_document
     */

    function edit($DOCUMENT_ID) {
        // check if the masters_document exists before trying to edit it
        $data['masters_document'] = $this->Masters_document_model->get_masters_document($DOCUMENT_ID);

        if (isset($data['masters_document']['DOCUMENT_ID'])) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('DOCUMENT_NAME', 'DOCUMENT NAME', 'required');

            if ($this->form_validation->run()) {
                $params = array(
                    'DOCUMENT_NAME' => $this->input->post('DOCUMENT_NAME'),
                    'MODIFIED_DATE' => date("Y-m-d H:i:s"),
                    'MODIFIED_BY' => $this->session->userdata['EMP_DATA']['EMP_ID'],
                    'IS_ACTIVE' => 1,
                    'DOC_TYPE' => $this->input->post('DOC_TYPE'),
                );

                $this->Masters_document_model->update_masters_document($DOCUMENT_ID, $params);
                redirect('masters_document/index');
            } else {
                $data['all_client_info'] = $this->Client_info_model->get_all_client_info();
                $data['_view'] = 'masters_document/edit';
                $this->load->view('layouts/main', $data);
            }
        } else
            show_error('The masters_document you are trying to edit does not exist.');
    }

    /*
     * Deleting masters_document
     */

    function remove($DOCUMENT_ID) {
        $masters_document = $this->Masters_document_model->get_masters_document($DOCUMENT_ID);

        // check if the masters_document exists before trying to delete it
        if (isset($masters_document['DOCUMENT_ID'])) {
            $this->Masters_document_model->delete_masters_document($DOCUMENT_ID);
            redirect('masters_document/index');
        } else
            show_error('The masters_document you are trying to delete does not exist.');
    }

}
