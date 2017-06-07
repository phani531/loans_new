<?php
/* 
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */
 
class Masters_loan_pay_term extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Masters_loan_pay_term_model');
    } 

    /*
     * Listing of masters_loan_pay_terms
     */
    function index()
    {
        $data['masters_loan_pay_terms'] = $this->Masters_loan_pay_term_model->get_all_masters_loan_pay_terms();

        $data['_view'] = 'masters_loan_pay_term/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new masters_loan_pay_term
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('LOANTERM_NOOFTERMS','LOANTERM NOOFTERMS','numeric|required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'LOANTERM_PAYTERM' => $this->input->post('LOANTERM_PAYTERM'),
				'LOANTERM_PAYTYPE' => $this->input->post('LOANTERM_PAYTYPE'),
				'LOANTERM_NOOFTERMS' => $this->input->post('LOANTERM_NOOFTERMS'),
				'CREATED_DATE' => $this->input->post('CREATED_DATE'),
				'CREATED_BY' => $this->input->post('CREATED_BY'),
				'MODIFIED_DATE' => $this->input->post('MODIFIED_DATE'),
				'MODIFIED_BY' => $this->input->post('MODIFIED_BY'),
				'CLIENT_ID' => $this->input->post('CLIENT_ID'),
				'IS_ACTIVE' => $this->input->post('IS_ACTIVE'),
            );
            
            $masters_loan_pay_term_id = $this->Masters_loan_pay_term_model->add_masters_loan_pay_term($params);
            redirect('masters_loan_pay_term/index');
        }
        else
        {            
            $data['_view'] = 'masters_loan_pay_term/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a masters_loan_pay_term
     */
    function edit($LOANTERM_ID)
    {   
        // check if the masters_loan_pay_term exists before trying to edit it
        $data['masters_loan_pay_term'] = $this->Masters_loan_pay_term_model->get_masters_loan_pay_term($LOANTERM_ID);
        
        if(isset($data['masters_loan_pay_term']['LOANTERM_ID']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('LOANTERM_NOOFTERMS','LOANTERM NOOFTERMS','numeric|required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'LOANTERM_PAYTERM' => $this->input->post('LOANTERM_PAYTERM'),
					'LOANTERM_PAYTYPE' => $this->input->post('LOANTERM_PAYTYPE'),
					'LOANTERM_NOOFTERMS' => $this->input->post('LOANTERM_NOOFTERMS'),
					'CREATED_DATE' => $this->input->post('CREATED_DATE'),
					'CREATED_BY' => $this->input->post('CREATED_BY'),
					'MODIFIED_DATE' => $this->input->post('MODIFIED_DATE'),
					'MODIFIED_BY' => $this->input->post('MODIFIED_BY'),
					'CLIENT_ID' => $this->input->post('CLIENT_ID'),
					'IS_ACTIVE' => $this->input->post('IS_ACTIVE'),
                );

                $this->Masters_loan_pay_term_model->update_masters_loan_pay_term($LOANTERM_ID,$params);            
                redirect('masters_loan_pay_term/index');
            }
            else
            {
                $data['_view'] = 'masters_loan_pay_term/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The masters_loan_pay_term you are trying to edit does not exist.');
    } 

    /*
     * Deleting masters_loan_pay_term
     */
    function remove($LOANTERM_ID)
    {
        $masters_loan_pay_term = $this->Masters_loan_pay_term_model->get_masters_loan_pay_term($LOANTERM_ID);

        // check if the masters_loan_pay_term exists before trying to delete it
        if(isset($masters_loan_pay_term['LOANTERM_ID']))
        {
            $this->Masters_loan_pay_term_model->delete_masters_loan_pay_term($LOANTERM_ID);
            redirect('masters_loan_pay_term/index');
        }
        else
            show_error('The masters_loan_pay_term you are trying to delete does not exist.');
    }
    
}