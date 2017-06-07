<?php
/* 
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */
 
class Masters_orgtype_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get masters_orgtype by ORGTYPE_ID
     */
    function get_masters_orgtype($ORGTYPE_ID)
    {
        return $this->db->get_where('masters_orgtype',array('ORGTYPE_ID'=>$ORGTYPE_ID))->row_array();
    }
    
    /*
     * Get all masters_orgtype
     */
    function get_all_masters_orgtype()
    {
        return $this->db->get('masters_orgtype')->result_array();
    }
    
    /*
     * function to add new masters_orgtype
     */
    function add_masters_orgtype($params)
    {
        $this->db->insert('masters_orgtype',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update masters_orgtype
     */
    function update_masters_orgtype($ORGTYPE_ID,$params)
    {
        $this->db->where('ORGTYPE_ID',$ORGTYPE_ID);
        $response = $this->db->update('masters_orgtype',$params);
        if($response)
        {
            return "masters_orgtype updated successfully";
        }
        else
        {
            return "Error occuring while updating masters_orgtype";
        }
    }
    
    /*
     * function to delete masters_orgtype
     */
    function delete_masters_orgtype($ORGTYPE_ID)
    {
        $response = $this->db->delete('masters_orgtype',array('ORGTYPE_ID'=>$ORGTYPE_ID));
        if($response)
        {
            return "masters_orgtype deleted successfully";
        }
        else
        {
            return "Error occuring while deleting masters_orgtype";
        }
    }
}