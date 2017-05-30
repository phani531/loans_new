<?php
/* 
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */
 
class Customer_loan_payment_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get customer_loan_payment by payment_id
     */
    function get_customer_loan_payment($payment_id)
    {
        return $this->db->get_where('customer_loan_payments',array('payment_id'=>$payment_id))->row_array();
    }
    
    /*
     * Get all customer_loan_payments
     */
    function get_all_customer_loan_payments()
    {
        return $this->db->get('customer_loan_payments')->result_array();
    }
    
    /*
     * function to add new customer_loan_payment
     */
    function add_customer_loan_payment($params)
    {
        $this->db->insert('customer_loan_payments',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update customer_loan_payment
     */
    function update_customer_loan_payment($payment_id,$params)
    {
        $this->db->where('payment_id',$payment_id);
        $response = $this->db->update('customer_loan_payments',$params);
        if($response)
        {
            return "customer_loan_payment updated successfully";
        }
        else
        {
            return "Error occuring while updating customer_loan_payment";
        }
    }
    
    /*
     * function to delete customer_loan_payment
     */
    function delete_customer_loan_payment($payment_id)
    {
        $response = $this->db->delete('customer_loan_payments',array('payment_id'=>$payment_id));
        if($response)
        {
            return "customer_loan_payment deleted successfully";
        }
        else
        {
            return "Error occuring while deleting customer_loan_payment";
        }
    }
}
