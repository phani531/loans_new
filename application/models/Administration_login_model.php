<?php
/* 
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */
 
class Administration_login_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get administration_login by LOGIN_ID
     */
    function get_administration_login($LOGIN_ID)
    {
        return $this->db->get_where('administration_logins',array('LOGIN_ID'=>$LOGIN_ID))->row_array();
    }
    
    /*
     * Get all administration_logins
     */
    function get_all_administration_logins()
    {
        return $this->db->get('administration_logins')->result_array();
    }
    
    /*
     * function to add new administration_login
     */
    function add_administration_login($params)
    {
        $this->db->insert('administration_logins',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update administration_login
     */
    function update_administration_login($LOGIN_ID,$params)
    {
        $this->db->where('LOGIN_ID',$LOGIN_ID);
        $response = $this->db->update('administration_logins',$params);
        if($response)
        {
            return "administration_login updated successfully";
        }
        else
        {
            return "Error occuring while updating administration_login";
        }
    }
    
    /*
     * function to delete administration_login
     */
    function delete_administration_login($LOGIN_ID)
    {
        $response = $this->db->delete('administration_logins',array('LOGIN_ID'=>$LOGIN_ID));
        if($response)
        {
            return "administration_login deleted successfully";
        }
        else
        {
            return "Error occuring while deleting administration_login";
        }
    }
}
