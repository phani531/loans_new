<?php
/* 
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */
 
class Masters_cash_management_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get masters_cash_management by CASHMANAGEMENT_ID
     */
    function get_masters_cash_management($CASHMANAGEMENT_ID)
    {
        return $this->db->get_where('masters_cash_management',array('CASHMANAGEMENT_ID'=>$CASHMANAGEMENT_ID))->row_array();
    }
    
    /*
     * Get all masters_cash_management
     */
    function get_all_masters_cash_management()
    {
        return $this->db->get('masters_cash_management')->result_array();
    }
    
    /*
     * function to add new masters_cash_management
     */
    function add_masters_cash_management($params)
    {
        $this->db->insert('masters_cash_management',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update masters_cash_management
     */
    function update_masters_cash_management($CASHMANAGEMENT_ID,$params)
    {
        $this->db->where('CASHMANAGEMENT_ID',$CASHMANAGEMENT_ID);
        $response = $this->db->update('masters_cash_management',$params);
        if($response)
        {
            return "masters_cash_management updated successfully";
        }
        else
        {
            return "Error occuring while updating masters_cash_management";
        }
    }
    
    /*
     * function to delete masters_cash_management
     */
    function delete_masters_cash_management($CASHMANAGEMENT_ID)
    {
        $response = $this->db->delete('masters_cash_management',array('CASHMANAGEMENT_ID'=>$CASHMANAGEMENT_ID));
        if($response)
        {
            return "masters_cash_management deleted successfully";
        }
        else
        {
            return "Error occuring while deleting masters_cash_management";
        }
    }
}