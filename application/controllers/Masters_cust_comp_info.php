<?php
/* 
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */
 
class Masters_cust_comp_info extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Masters_cust_comp_info_model');
    } 

    /*
     * Listing of masters_cust_comp_info
     */
    function index()
    {
        $data['masters_cust_comp_info'] = $this->Masters_cust_comp_info_model->get_all_masters_cust_comp_info();

        $data['_view'] = 'masters_cust_comp_info/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new masters_cust_comp_info
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('COMPANY_CODE','COMPANY CODE','required');
		$this->form_validation->set_rules('COMPANY_NAME','COMPANY NAME','required');
		$this->form_validation->set_rules('COMPANY_POSTCODE','COMPANY POSTCODE','integer');
		$this->form_validation->set_rules('COMPANY_PHONE1','COMPANY PHONE1','numeric');
		$this->form_validation->set_rules('COMPANY_PHONE2','COMPANY PHONE2','numeric');
		$this->form_validation->set_rules('COMPANY_FAX','COMPANY FAX','numeric');
		$this->form_validation->set_rules('COMPANY_SALARY_DAY_FROM1','COMPANY SALARY DAY FROM1','integer|required');
		$this->form_validation->set_rules('COMPANY_SALARY_DAY_TO1','COMPANY SALARY DAY TO1','integer|required');
		$this->form_validation->set_rules('COMPANY_SALARY_DAY_FROM2','COMPANY SALARY DAY FROM2','integer|required');
		$this->form_validation->set_rules('COMPANY_SALARY_DAY_TO2','COMPANY SALARY DAY TO2','integer|required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'COMPANY_CODE' => $this->input->post('COMPANY_CODE'),
				'COMPANY_NAME' => $this->input->post('COMPANY_NAME'),
				'COMPANY_ADDRESS' => $this->input->post('COMPANY_ADDRESS'),
				'COMPANY_CITY' => $this->input->post('COMPANY_CITY'),
				'STATE_ID' => $this->input->post('STATE_ID'),
				'COMPANY_POSTCODE' => $this->input->post('COMPANY_POSTCODE'),
				'COMPANY_PHONE1' => $this->input->post('COMPANY_PHONE1'),
				'COMPANY_PHONE2' => $this->input->post('COMPANY_PHONE2'),
				'COMPANY_FAX' => $this->input->post('COMPANY_FAX'),
				'COMPANY_CREDIT_LIMIT' => $this->input->post('COMPANY_CREDIT_LIMIT'),
				'COMPANY_SALARY_DAY_FROM1' => $this->input->post('COMPANY_SALARY_DAY_FROM1'),
				'COMPANY_SALARY_DAY_TO1' => $this->input->post('COMPANY_SALARY_DAY_TO1'),
				'COMPANY_SALARY_DAY_FROM2' => $this->input->post('COMPANY_SALARY_DAY_FROM2'),
				'COMPANY_SALARY_DAY_TO2' => $this->input->post('COMPANY_SALARY_DAY_TO2'),
				'CREATED_DATE' => $this->input->post('CREATED_DATE'),
				'CREATED_BY' => $this->input->post('CREATED_BY'),
				'MODIFIED_DATE' => $this->input->post('MODIFIED_DATE'),
				'MODIFIED_BY' => $this->input->post('MODIFIED_BY'),
				'CLIENT_ID' => $this->input->post('CLIENT_ID'),
				'IS_ACTIVE' => $this->input->post('IS_ACTIVE'),
				'PIC_NAME' => $this->input->post('PIC_NAME'),
				'PIC_DESIGNATION' => $this->input->post('PIC_DESIGNATION'),
				'PIC_CONTACT_NO' => $this->input->post('PIC_CONTACT_NO'),
				'PIC_MOBILE_NO' => $this->input->post('PIC_MOBILE_NO'),
				'COMPANY_BALANCE_CREDIT_LIMIT' => $this->input->post('COMPANY_BALANCE_CREDIT_LIMIT'),
            );
            
            $masters_cust_comp_info_id = $this->Masters_cust_comp_info_model->add_masters_cust_comp_info($params);
            redirect('masters_cust_comp_info/index');
        }
        else
        {            
            $data['_view'] = 'masters_cust_comp_info/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a masters_cust_comp_info
     */
    function edit($COMPANY_ID)
    {   
        // check if the masters_cust_comp_info exists before trying to edit it
        $data['masters_cust_comp_info'] = $this->Masters_cust_comp_info_model->get_masters_cust_comp_info($COMPANY_ID);
        
        if(isset($data['masters_cust_comp_info']['COMPANY_ID']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('COMPANY_CODE','COMPANY CODE','required');
			$this->form_validation->set_rules('COMPANY_NAME','COMPANY NAME','required');
			$this->form_validation->set_rules('COMPANY_POSTCODE','COMPANY POSTCODE','integer');
			$this->form_validation->set_rules('COMPANY_PHONE1','COMPANY PHONE1','numeric');
			$this->form_validation->set_rules('COMPANY_PHONE2','COMPANY PHONE2','numeric');
			$this->form_validation->set_rules('COMPANY_FAX','COMPANY FAX','numeric');
			$this->form_validation->set_rules('COMPANY_SALARY_DAY_FROM1','COMPANY SALARY DAY FROM1','integer|required');
			$this->form_validation->set_rules('COMPANY_SALARY_DAY_TO1','COMPANY SALARY DAY TO1','integer|required');
			$this->form_validation->set_rules('COMPANY_SALARY_DAY_FROM2','COMPANY SALARY DAY FROM2','integer|required');
			$this->form_validation->set_rules('COMPANY_SALARY_DAY_TO2','COMPANY SALARY DAY TO2','integer|required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'COMPANY_CODE' => $this->input->post('COMPANY_CODE'),
					'COMPANY_NAME' => $this->input->post('COMPANY_NAME'),
					'COMPANY_ADDRESS' => $this->input->post('COMPANY_ADDRESS'),
					'COMPANY_CITY' => $this->input->post('COMPANY_CITY'),
					'STATE_ID' => $this->input->post('STATE_ID'),
					'COMPANY_POSTCODE' => $this->input->post('COMPANY_POSTCODE'),
					'COMPANY_PHONE1' => $this->input->post('COMPANY_PHONE1'),
					'COMPANY_PHONE2' => $this->input->post('COMPANY_PHONE2'),
					'COMPANY_FAX' => $this->input->post('COMPANY_FAX'),
					'COMPANY_CREDIT_LIMIT' => $this->input->post('COMPANY_CREDIT_LIMIT'),
					'COMPANY_SALARY_DAY_FROM1' => $this->input->post('COMPANY_SALARY_DAY_FROM1'),
					'COMPANY_SALARY_DAY_TO1' => $this->input->post('COMPANY_SALARY_DAY_TO1'),
					'COMPANY_SALARY_DAY_FROM2' => $this->input->post('COMPANY_SALARY_DAY_FROM2'),
					'COMPANY_SALARY_DAY_TO2' => $this->input->post('COMPANY_SALARY_DAY_TO2'),
					'CREATED_DATE' => $this->input->post('CREATED_DATE'),
					'CREATED_BY' => $this->input->post('CREATED_BY'),
					'MODIFIED_DATE' => $this->input->post('MODIFIED_DATE'),
					'MODIFIED_BY' => $this->input->post('MODIFIED_BY'),
					'CLIENT_ID' => $this->input->post('CLIENT_ID'),
					'IS_ACTIVE' => $this->input->post('IS_ACTIVE'),
					'PIC_NAME' => $this->input->post('PIC_NAME'),
					'PIC_DESIGNATION' => $this->input->post('PIC_DESIGNATION'),
					'PIC_CONTACT_NO' => $this->input->post('PIC_CONTACT_NO'),
					'PIC_MOBILE_NO' => $this->input->post('PIC_MOBILE_NO'),
					'COMPANY_BALANCE_CREDIT_LIMIT' => $this->input->post('COMPANY_BALANCE_CREDIT_LIMIT'),
                );

                $this->Masters_cust_comp_info_model->update_masters_cust_comp_info($COMPANY_ID,$params);            
                redirect('masters_cust_comp_info/index');
            }
            else
            {
                $data['_view'] = 'masters_cust_comp_info/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The masters_cust_comp_info you are trying to edit does not exist.');
    } 

    /*
     * Deleting masters_cust_comp_info
     */
    function remove($COMPANY_ID)
    {
        $masters_cust_comp_info = $this->Masters_cust_comp_info_model->get_masters_cust_comp_info($COMPANY_ID);

        // check if the masters_cust_comp_info exists before trying to delete it
        if(isset($masters_cust_comp_info['COMPANY_ID']))
        {
            $this->Masters_cust_comp_info_model->delete_masters_cust_comp_info($COMPANY_ID);
            redirect('masters_cust_comp_info/index');
        }
        else
            show_error('The masters_cust_comp_info you are trying to delete does not exist.');
    }
    
}
