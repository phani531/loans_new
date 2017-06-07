<?php
/* 
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */
 
class Masters_locker_detail_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get masters_locker_detail by DETAIL_ID
     */
    function get_masters_locker_detail($DETAIL_ID)
    {
        return $this->db->get_where('masters_locker_details',array('DETAIL_ID'=>$DETAIL_ID))->row_array();
    }
    
    /*
     * Get all masters_locker_details
     */
    function get_all_masters_locker_details()
    {
        return $this->db->get('masters_locker_details')->result_array();
    }
    
    /*
     * function to add new masters_locker_detail
     */
    function add_masters_locker_detail($params)
    {
        $this->db->insert('masters_locker_details',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update masters_locker_detail
     */
    function update_masters_locker_detail($DETAIL_ID,$params)
    {
        $this->db->where('DETAIL_ID',$DETAIL_ID);
        $response = $this->db->update('masters_locker_details',$params);
        if($response)
        {
            return "masters_locker_detail updated successfully";
        }
        else
        {
            return "Error occuring while updating masters_locker_detail";
        }
    }
    
    /*
     * function to delete masters_locker_detail
     */
    function delete_masters_locker_detail($DETAIL_ID)
    {
        $response = $this->db->delete('masters_locker_details',array('DETAIL_ID'=>$DETAIL_ID));
        if($response)
        {
            return "masters_locker_detail deleted successfully";
        }
        else
        {
            return "Error occuring while deleting masters_locker_detail";
        }
    }
}