<?php

/*
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */

class Masters_loan_pay_term extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Masters_loan_pay_term_model');
        $this->load->model('Client_info_model');
        $session_data = (isset($this->session->userdata['EMP_DATA']) && !empty($this->session->userdata['EMP_DATA'])) ? $this->session->userdata['EMP_DATA'] : array();
        if (empty($session_data))
            redirect("login");
    }

    /*
     * Listing of masters_loan_pay_terms
     */

    function index() {
        $data['masters_loan_pay_terms'] = $this->Masters_loan_pay_term_model->get_all_masters_loan_pay_terms();

        $data['_view'] = 'masters_loan_pay_term/index';
        $this->load->view('layouts/main', $data);
    }

    /**
     * Function to get all masters loan pay term data
     * 
     * @return json result
     */
    function getAllMastersLoanPayTerms() {
        $request = $_GET;
        $result = $this->Masters_loan_pay_term_model->getAllMastersLoanPayTermsData($request, array());
        echo json_encode($result);
        exit;
    }

    /*
     * Adding a new masters_loan_pay_term
     */

    function add() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('LOANTERM_NOOFTERMS', 'LOANTERM NOOFTERMS', 'numeric|required');

        if ($this->form_validation->run()) {
            $params = array(
                'LOANTERM_PAYTERM' => $this->input->post('LOANTERM_PAYTERM'),
                'LOANTERM_PAYTYPE' => $this->input->post('LOANTERM_PAYTYPE'),
                'LOANTERM_NOOFTERMS' => $this->input->post('LOANTERM_NOOFTERMS'),
                'CREATED_DATE' => date("Y-m-d H:i:s"),
                'CREATED_BY' => $this->session->userdata['EMP_DATA']['EMP_ID'],
                'IS_ACTIVE' => 1,
            );

            $masters_loan_pay_term_id = $this->Masters_loan_pay_term_model->add_masters_loan_pay_term($params);
            redirect('masters_loan_pay_term/index');
        } else {
            $data['all_client_info'] = $this->Client_info_model->get_all_client_info();
            $data['_view'] = 'masters_loan_pay_term/add';
            $this->load->view('layouts/main', $data);
        }
    }

    /*
     * Editing a masters_loan_pay_term
     */

    function edit($LOANTERM_ID) {
        // check if the masters_loan_pay_term exists before trying to edit it
        $data['masters_loan_pay_term'] = $this->Masters_loan_pay_term_model->get_masters_loan_pay_term($LOANTERM_ID);

        if (isset($data['masters_loan_pay_term']['LOANTERM_ID'])) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('LOANTERM_NOOFTERMS', 'LOANTERM NOOFTERMS', 'numeric|required');

            if ($this->form_validation->run()) {
                $params = array(
                    'LOANTERM_PAYTERM' => $this->input->post('LOANTERM_PAYTERM'),
                    'LOANTERM_PAYTYPE' => $this->input->post('LOANTERM_PAYTYPE'),
                    'LOANTERM_NOOFTERMS' => $this->input->post('LOANTERM_NOOFTERMS'),
                    'MODIFIED_DATE' => date("Y-m-d H:i:s"),
                    'MODIFIED_BY' => $this->session->userdata['EMP_DATA']['EMP_ID'],
                    'IS_ACTIVE' => 1,
                );

                $this->Masters_loan_pay_term_model->update_masters_loan_pay_term($LOANTERM_ID, $params);
                redirect('masters_loan_pay_term/index');
            } else {
                $data['all_client_info'] = $this->Client_info_model->get_all_client_info();
                $data['_view'] = 'masters_loan_pay_term/edit';
                $this->load->view('layouts/main', $data);
            }
        } else
            show_error('The masters_loan_pay_term you are trying to edit does not exist.');
    }

    /*
     * Deleting masters_loan_pay_term
     */

    function remove($LOANTERM_ID) {
        $masters_loan_pay_term = $this->Masters_loan_pay_term_model->get_masters_loan_pay_term($LOANTERM_ID);

        // check if the masters_loan_pay_term exists before trying to delete it
        if (isset($masters_loan_pay_term['LOANTERM_ID'])) {
            $this->Masters_loan_pay_term_model->delete_masters_loan_pay_term($LOANTERM_ID);
            redirect('masters_loan_pay_term/index');
        } else
            show_error('The masters_loan_pay_term you are trying to delete does not exist.');
    }

}
