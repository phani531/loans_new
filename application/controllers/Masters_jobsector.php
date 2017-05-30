<?php
/* 
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */
 
class Masters_jobsector extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Masters_jobsector_model');
    } 

    /*
     * Listing of masters_jobsector
     */
    function index()
    {
        $data['masters_jobsector'] = $this->Masters_jobsector_model->get_all_masters_jobsector();

        $data['_view'] = 'masters_jobsector/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new masters_jobsector
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'JOBSECTOR_NAME' => $this->input->post('JOBSECTOR_NAME'),
				'LOAN_TYPE' => $this->input->post('LOAN_TYPE'),
				'CREATED_DATE' => $this->input->post('CREATED_DATE'),
				'CREATED_BY' => $this->input->post('CREATED_BY'),
				'MODIFIED_DATE' => $this->input->post('MODIFIED_DATE'),
				'MODIFIED_BY' => $this->input->post('MODIFIED_BY'),
				'CLIENT_ID' => $this->input->post('CLIENT_ID'),
				'IS_ACTIVE' => $this->input->post('IS_ACTIVE'),
            );
            
            $masters_jobsector_id = $this->Masters_jobsector_model->add_masters_jobsector($params);
            redirect('masters_jobsector/index');
        }
        else
        {            
            $data['_view'] = 'masters_jobsector/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a masters_jobsector
     */
    function edit($JOBSECTOR_ID)
    {   
        // check if the masters_jobsector exists before trying to edit it
        $data['masters_jobsector'] = $this->Masters_jobsector_model->get_masters_jobsector($JOBSECTOR_ID);
        
        if(isset($data['masters_jobsector']['JOBSECTOR_ID']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'JOBSECTOR_NAME' => $this->input->post('JOBSECTOR_NAME'),
					'LOAN_TYPE' => $this->input->post('LOAN_TYPE'),
					'CREATED_DATE' => $this->input->post('CREATED_DATE'),
					'CREATED_BY' => $this->input->post('CREATED_BY'),
					'MODIFIED_DATE' => $this->input->post('MODIFIED_DATE'),
					'MODIFIED_BY' => $this->input->post('MODIFIED_BY'),
					'CLIENT_ID' => $this->input->post('CLIENT_ID'),
					'IS_ACTIVE' => $this->input->post('IS_ACTIVE'),
                );

                $this->Masters_jobsector_model->update_masters_jobsector($JOBSECTOR_ID,$params);            
                redirect('masters_jobsector/index');
            }
            else
            {
                $data['_view'] = 'masters_jobsector/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The masters_jobsector you are trying to edit does not exist.');
    } 

    /*
     * Deleting masters_jobsector
     */
    function remove($JOBSECTOR_ID)
    {
        $masters_jobsector = $this->Masters_jobsector_model->get_masters_jobsector($JOBSECTOR_ID);

        // check if the masters_jobsector exists before trying to delete it
        if(isset($masters_jobsector['JOBSECTOR_ID']))
        {
            $this->Masters_jobsector_model->delete_masters_jobsector($JOBSECTOR_ID);
            redirect('masters_jobsector/index');
        }
        else
            show_error('The masters_jobsector you are trying to delete does not exist.');
    }
    
}
