<?php
/* 
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */
 
class Masters_locker_master_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get masters_locker_master by LOCKER_ID
     */
    function get_masters_locker_master($LOCKER_ID)
    {
        return $this->db->get_where('masters_locker_master',array('LOCKER_ID'=>$LOCKER_ID))->row_array();
    }
    
    /*
     * Get all masters_locker_master
     */
    function get_all_masters_locker_master()
    {
        return $this->db->get('masters_locker_master')->result_array();
    }
    
    /*
     * function to add new masters_locker_master
     */
    function add_masters_locker_master($params)
    {
        $this->db->insert('masters_locker_master',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update masters_locker_master
     */
    function update_masters_locker_master($LOCKER_ID,$params)
    {
        $this->db->where('LOCKER_ID',$LOCKER_ID);
        $response = $this->db->update('masters_locker_master',$params);
        if($response)
        {
            return "masters_locker_master updated successfully";
        }
        else
        {
            return "Error occuring while updating masters_locker_master";
        }
    }
    
    /*
     * function to delete masters_locker_master
     */
    function delete_masters_locker_master($LOCKER_ID)
    {
        $response = $this->db->delete('masters_locker_master',array('LOCKER_ID'=>$LOCKER_ID));
        if($response)
        {
            return "masters_locker_master deleted successfully";
        }
        else
        {
            return "Error occuring while deleting masters_locker_master";
        }
    }
}
