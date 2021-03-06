<?php
/* 
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */
 
class Form_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get form by FORM_ID
     */
    function get_form($FORM_ID)
    {
        return $this->db->get_where('forms',array('FORM_ID'=>$FORM_ID))->row_array();
    }
    
    /*
     * Get all forms
     */
    function get_all_forms()
    {
        return $this->db->get('forms')->result_array();
    }
    
    /*
     * function to add new form
     */
    function add_form($params)
    {
        $this->db->insert('forms',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update form
     */
    function update_form($FORM_ID,$params)
    {
        $this->db->where('FORM_ID',$FORM_ID);
        $response = $this->db->update('forms',$params);
        if($response)
        {
            return "form updated successfully";
        }
        else
        {
            return "Error occuring while updating form";
        }
    }
    
    /*
     * function to delete form
     */
    function delete_form($FORM_ID)
    {
        $response = $this->db->delete('forms',array('FORM_ID'=>$FORM_ID));
        if($response)
        {
            return "form deleted successfully";
        }
        else
        {
            return "Error occuring while deleting form";
        }
    }
}
