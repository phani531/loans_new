<?php
/* 
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */
 
class Masters_advertisement_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get masters_advertisement by ADVERTISEMENT_ID
     */
    function get_masters_advertisement($ADVERTISEMENT_ID)
    {
        return $this->db->get_where('masters_advertisements',array('ADVERTISEMENT_ID'=>$ADVERTISEMENT_ID))->row_array();
    }
    
    /*
     * Get all masters_advertisements
     */
    function get_all_masters_advertisements()
    {
        return $this->db->get('masters_advertisements')->result_array();
    }
    
    /*
     * function to add new masters_advertisement
     */
    function add_masters_advertisement($params)
    {
        $this->db->insert('masters_advertisements',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update masters_advertisement
     */
    function update_masters_advertisement($ADVERTISEMENT_ID,$params)
    {
        $this->db->where('ADVERTISEMENT_ID',$ADVERTISEMENT_ID);
        $response = $this->db->update('masters_advertisements',$params);
        if($response)
        {
            return "masters_advertisement updated successfully";
        }
        else
        {
            return "Error occuring while updating masters_advertisement";
        }
    }
    
    /*
     * function to delete masters_advertisement
     */
    function delete_masters_advertisement($ADVERTISEMENT_ID)
    {
        $response = $this->db->delete('masters_advertisements',array('ADVERTISEMENT_ID'=>$ADVERTISEMENT_ID));
        if($response)
        {
            return "masters_advertisement deleted successfully";
        }
        else
        {
            return "Error occuring while deleting masters_advertisement";
        }
    }
}