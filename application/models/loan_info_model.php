<?php
/* 
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */
 
class Loan_info_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get all loan_info
     */
    function get_all_loan_info()
    {
        return $this->db->get('client_info')->result_array();
    }
}
?>