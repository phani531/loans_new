<?php
/* 
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */
 
class Masters_race_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get masters_race by RACE_ID
     */
    function get_masters_race($RACE_ID)
    {
        return $this->db->get_where('masters_race',array('RACE_ID'=>$RACE_ID))->row_array();
    }
    
    /*
     * Get all masters_race
     */
    function get_all_masters_race()
    {
        return $this->db->get('masters_race')->result_array();
    }
    
    /*
     * function to add new masters_race
     */
    function add_masters_race($params)
    {
        $this->db->insert('masters_race',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update masters_race
     */
    function update_masters_race($RACE_ID,$params)
    {
        $this->db->where('RACE_ID',$RACE_ID);
        $response = $this->db->update('masters_race',$params);
        if($response)
        {
            return "masters_race updated successfully";
        }
        else
        {
            return "Error occuring while updating masters_race";
        }
    }
    
    /*
     * function to delete masters_race
     */
    function delete_masters_race($RACE_ID)
    {
        $response = $this->db->delete('masters_race',array('RACE_ID'=>$RACE_ID));
        if($response)
        {
            return "masters_race deleted successfully";
        }
        else
        {
            return "Error occuring while deleting masters_race";
        }
    }
}
