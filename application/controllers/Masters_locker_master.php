<?php
/* 
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */
 
class Masters_locker_master extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Masters_locker_master_model');
    } 

    /*
     * Listing of masters_locker_master
     */
    function index()
    {
        $data['masters_locker_master'] = $this->Masters_locker_master_model->get_all_masters_locker_master();

        $data['_view'] = 'masters_locker_master/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new masters_locker_master
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'LOCKER_STORAGE_BOX_NAME' => $this->input->post('LOCKER_STORAGE_BOX_NAME'),
				'IS_OCCUPIED' => $this->input->post('IS_OCCUPIED'),
				'CREATED_DATE' => $this->input->post('CREATED_DATE'),
				'CREATED_BY' => $this->input->post('CREATED_BY'),
				'MODIFIED_DATE' => $this->input->post('MODIFIED_DATE'),
				'MODIFIED_BY' => $this->input->post('MODIFIED_BY'),
				'CLIENT_ID' => $this->input->post('CLIENT_ID'),
				'IS_ACTIVE' => $this->input->post('IS_ACTIVE'),
            );
            
            $masters_locker_master_id = $this->Masters_locker_master_model->add_masters_locker_master($params);
            redirect('masters_locker_master/index');
        }
        else
        {            
            $data['_view'] = 'masters_locker_master/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a masters_locker_master
     */
    function edit($LOCKER_ID)
    {   
        // check if the masters_locker_master exists before trying to edit it
        $data['masters_locker_master'] = $this->Masters_locker_master_model->get_masters_locker_master($LOCKER_ID);
        
        if(isset($data['masters_locker_master']['LOCKER_ID']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'LOCKER_STORAGE_BOX_NAME' => $this->input->post('LOCKER_STORAGE_BOX_NAME'),
					'IS_OCCUPIED' => $this->input->post('IS_OCCUPIED'),
					'CREATED_DATE' => $this->input->post('CREATED_DATE'),
					'CREATED_BY' => $this->input->post('CREATED_BY'),
					'MODIFIED_DATE' => $this->input->post('MODIFIED_DATE'),
					'MODIFIED_BY' => $this->input->post('MODIFIED_BY'),
					'CLIENT_ID' => $this->input->post('CLIENT_ID'),
					'IS_ACTIVE' => $this->input->post('IS_ACTIVE'),
                );

                $this->Masters_locker_master_model->update_masters_locker_master($LOCKER_ID,$params);            
                redirect('masters_locker_master/index');
            }
            else
            {
                $data['_view'] = 'masters_locker_master/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The masters_locker_master you are trying to edit does not exist.');
    } 

    /*
     * Deleting masters_locker_master
     */
    function remove($LOCKER_ID)
    {
        $masters_locker_master = $this->Masters_locker_master_model->get_masters_locker_master($LOCKER_ID);

        // check if the masters_locker_master exists before trying to delete it
        if(isset($masters_locker_master['LOCKER_ID']))
        {
            $this->Masters_locker_master_model->delete_masters_locker_master($LOCKER_ID);
            redirect('masters_locker_master/index');
        }
        else
            show_error('The masters_locker_master you are trying to delete does not exist.');
    }
    
}
