<?php
/* 
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */
 
class Customer_detail_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get customer_detail by CUSTOMER_ID
     */
    function get_customer_detail($CUSTOMER_ID)
    {
        return $this->db->get_where('customer_details',array('CUSTOMER_ID'=>$CUSTOMER_ID))->row_array();
    }
    
    /*
     * Get all customer_details
     */
    function get_all_customer_details()
    {
        return $this->db->get('customer_details')->result_array();
    }
    
    /*
     * function to add new customer_detail
     */
    function add_customer_detail($params)
    {
        $this->db->insert('customer_details',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update customer_detail
     */
    function update_customer_detail($CUSTOMER_ID,$params)
    {
        $this->db->where('CUSTOMER_ID',$CUSTOMER_ID);
        $response = $this->db->update('customer_details',$params);
        if($response)
        {
            return "customer_detail updated successfully";
        }
        else
        {
            return "Error occuring while updating customer_detail";
        }
    }
    
    /*
     * function to delete customer_detail
     */
    function delete_customer_detail($CUSTOMER_ID)
    {
        $response = $this->db->delete('customer_details',array('CUSTOMER_ID'=>$CUSTOMER_ID));
        if($response)
        {
            return "customer_detail deleted successfully";
        }
        else
        {
            return "Error occuring while deleting customer_detail";
        }
    }
}
