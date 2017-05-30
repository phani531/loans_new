<?php
/* 
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */
 
class Masters_cust_bank extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Masters_cust_bank_model');
    } 

    /*
     * Listing of masters_cust_bank
     */
    function index()
    {
        $data['masters_cust_bank'] = $this->Masters_cust_bank_model->get_all_masters_cust_bank();

        $data['_view'] = 'masters_cust_bank/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new masters_cust_bank
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('BANK_CODE','BANK CODE','required');
		$this->form_validation->set_rules('BANK_NAME','BANK NAME','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'BANK_CODE' => $this->input->post('BANK_CODE'),
				'BANK_NAME' => $this->input->post('BANK_NAME'),
				'BANK_BRANCH' => $this->input->post('BANK_BRANCH'),
				'CREATED_DATE' => $this->input->post('CREATED_DATE'),
				'CREATED_BY' => $this->input->post('CREATED_BY'),
				'MODIFIED_DATE' => $this->input->post('MODIFIED_DATE'),
				'MODIFIED_BY' => $this->input->post('MODIFIED_BY'),
				'CLIENT_ID' => $this->input->post('CLIENT_ID'),
				'IS_ACTIVE' => $this->input->post('IS_ACTIVE'),
            );
            
            $masters_cust_bank_id = $this->Masters_cust_bank_model->add_masters_cust_bank($params);
            redirect('masters_cust_bank/index');
        }
        else
        {            
            $data['_view'] = 'masters_cust_bank/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a masters_cust_bank
     */
    function edit($BANK_ID)
    {   
        // check if the masters_cust_bank exists before trying to edit it
        $data['masters_cust_bank'] = $this->Masters_cust_bank_model->get_masters_cust_bank($BANK_ID);
        
        if(isset($data['masters_cust_bank']['BANK_ID']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('BANK_CODE','BANK CODE','required');
			$this->form_validation->set_rules('BANK_NAME','BANK NAME','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'BANK_CODE' => $this->input->post('BANK_CODE'),
					'BANK_NAME' => $this->input->post('BANK_NAME'),
					'BANK_BRANCH' => $this->input->post('BANK_BRANCH'),
					'CREATED_DATE' => $this->input->post('CREATED_DATE'),
					'CREATED_BY' => $this->input->post('CREATED_BY'),
					'MODIFIED_DATE' => $this->input->post('MODIFIED_DATE'),
					'MODIFIED_BY' => $this->input->post('MODIFIED_BY'),
					'CLIENT_ID' => $this->input->post('CLIENT_ID'),
					'IS_ACTIVE' => $this->input->post('IS_ACTIVE'),
                );

                $this->Masters_cust_bank_model->update_masters_cust_bank($BANK_ID,$params);            
                redirect('masters_cust_bank/index');
            }
            else
            {
                $data['_view'] = 'masters_cust_bank/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The masters_cust_bank you are trying to edit does not exist.');
    } 

    /*
     * Deleting masters_cust_bank
     */
    function remove($BANK_ID)
    {
        $masters_cust_bank = $this->Masters_cust_bank_model->get_masters_cust_bank($BANK_ID);

        // check if the masters_cust_bank exists before trying to delete it
        if(isset($masters_cust_bank['BANK_ID']))
        {
            $this->Masters_cust_bank_model->delete_masters_cust_bank($BANK_ID);
            redirect('masters_cust_bank/index');
        }
        else
            show_error('The masters_cust_bank you are trying to delete does not exist.');
    }
    
}
