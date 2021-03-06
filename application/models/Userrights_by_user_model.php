<?php
/* 
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */
 
class Userrights_by_user_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get userrights_by_user by UR_ID
     */
    function get_userrights_by_user($UR_ID)
    {
        return $this->db->get_where('userrights_by_users',array('UR_ID'=>$UR_ID))->row_array();
    }
    
    /*
     * Get all userrights_by_users
     */
    function get_all_userrights_by_users()
    {
        return $this->db->get('userrights_by_users')->result_array();
    }
    
    /*
     * function to add new userrights_by_user
     */
    function add_userrights_by_user($params)
    {
        $this->db->insert('userrights_by_users',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update userrights_by_user
     */
    function update_userrights_by_user($UR_ID,$params)
    {
        $this->db->where('UR_ID',$UR_ID);
        $response = $this->db->update('userrights_by_users',$params);
        if($response)
        {
            return "userrights_by_user updated successfully";
        }
        else
        {
            return "Error occuring while updating userrights_by_user";
        }
    }
    
    /*
     * function to delete userrights_by_user
     */
    function delete_userrights_by_user($UR_ID)
    {
        $response = $this->db->delete('userrights_by_users',array('UR_ID'=>$UR_ID));
        if($response)
        {
            return "userrights_by_user deleted successfully";
        }
        else
        {
            return "Error occuring while deleting userrights_by_user";
        }
    }
}
