<?php
/* 
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */
 
class Masters_agent_info_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get masters_agent_info by AGENT_ID
     */
    function get_masters_agent_info($AGENT_ID)
    {
        return $this->db->get_where('masters_agent_info',array('AGENT_ID'=>$AGENT_ID))->row_array();
    }
    
    /*
     * Get all masters_agent_info
     */
    function get_all_masters_agent_info()
    {
        return $this->db->get('masters_agent_info')->result_array();
    }
    
    /*
     * function to add new masters_agent_info
     */
    function add_masters_agent_info($params)
    {
        $this->db->insert('masters_agent_info',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update masters_agent_info
     */
    function update_masters_agent_info($AGENT_ID,$params)
    {
        $this->db->where('AGENT_ID',$AGENT_ID);
        $response = $this->db->update('masters_agent_info',$params);
        if($response)
        {
            return "masters_agent_info updated successfully";
        }
        else
        {
            return "Error occuring while updating masters_agent_info";
        }
    }
    
    /*
     * function to delete masters_agent_info
     */
    function delete_masters_agent_info($AGENT_ID)
    {
        $response = $this->db->delete('masters_agent_info',array('AGENT_ID'=>$AGENT_ID));
        if($response)
        {
            return "masters_agent_info deleted successfully";
        }
        else
        {
            return "Error occuring while deleting masters_agent_info";
        }
    }
}