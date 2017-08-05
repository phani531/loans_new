<?php

/*
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */

class Masters_agent_info_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    /*
     * Get masters_agent_info by AGENT_ID
     */

    function get_masters_agent_info($AGENT_ID) {
        return $this->db->get_where('masters_agent_info', array('AGENT_ID' => $AGENT_ID))->row_array();
    }

    /*
     * Get all masters_agent_info
     */

    function get_all_masters_agent_info() {
        return $this->db->get('masters_agent_info')->result_array();
    }

    /**
     * Function to get all advertisements data
     * 
     * @param array $request
     * @param array $user_data
     * 
     * @return json result
     */
    function getAllMastersAgentData($request, $user_data = array()) {
        try {
            $sql_details = array('user' => $this->db->username, 'pass' => $this->db->password, 'db' => $this->db->database, 'host' => $this->db->hostname);
            $request['searchcolumns'] = array();

            $columns = array(
                array(
                    'db' => 'AGENT_ID',
                    'dt' => 'DT_RowId',
                    'formatter' => function( $d, $row ) {
                        return 'row_' . $d;
                    }
                ),
                array('db' => 'AGENT_ID',
                    'dt' => 0,
                    'formatter' => function($d, $row) {
                        return !empty($d) ? $d : "N/A";
                    }
                ),
                array('db' => 'AGENT_IDNO',
                    'dt' => 1,
                    'formatter' => function($d, $row) {
                        return !empty($d) ? $d : "N/A";
                    }
                ),
                array('db' => 'AGENT_NAME',
                    'dt' => 2,
                    'formatter' => function($d, $row) {
                        return !empty($d) ? $d : "N/A";
                    }
                ),
                array('db' => 'AGENT_ADDRESS',
                    'dt' => 3,
                    'formatter' => function($d, $row) {
                        return !empty($d) ? $d : "N/A";
                    }
                ),
                array('db' => 'AGENT_HOUSE_CTC_NO',
                    'dt' => 4,
                    'formatter' => function($d, $row) {
                        return !empty($d) ? $d : "N/A";
                    }
                ),
                array('db' => 'AGENT_MOBILE_CTC_NO',
                    'dt' => 5,
                    'formatter' => function($d, $row) {
                        return !empty($d) ? $d : "N/A";
                    }
                ),
                array('db' => 'AGENT_COMPANY_NAME',
                    'dt' => 6,
                    'formatter' => function($d, $row) {
                        return !empty($d) ? $d : "N/A";
                    }
                ),
                array('db' => 'AGENT_COMPANY_ADDRESS',
                    'dt' => 7,
                    'formatter' => function($d, $row) {
                        return !empty($d) ? $d : "N/A";
                    }
                ),
                array('db' => 'AGENT_COMPANY_CTC_NO',
                    'dt' => 8,
                    'formatter' => function($d, $row) {
                        return !empty($d) ? $d : "N/A";
                    }
                ),
                array('db' => 'AGENT_COMMISSION_TYPE',
                    'dt' => 9,
                    'formatter' => function($d, $row) {
                        return !empty($d) ? $d : "N/A";
                    }
                ),
                array('db' => 'AGENT_COMMISSION_AMOUNT',
                    'dt' => 10,
                    'formatter' => function($d, $row) {
                        return !empty($d) ? $d : "N/A";
                    }
                ),
                array('db' => 'AGENT_COMMISSION_PERCENTAGE',
                    'dt' => 11,
                    'formatter' => function($d, $row) {
                        return !empty($d) ? $d : "N/A";
                    }
                ),
                array('db' => 'AGENT_ID',
                    'dt' => 12,
                    'formatter' => function($d, $row) {
                        $returnString = "";
                        $returnString .= '<a href="' . site_url('masters_agent_info/edit/' . $row['AGENT_ID']) . '" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a><br>';
                        $returnString .= '<a href="' . site_url('masters_agent_info/remove/' . $row['AGENT_ID']) . '" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>';
                        return $returnString;
                    }
                )
            );

            $join = "";
            $where = "";

            $query_columns_array = array("AGENT_ID, AGENT_IDNO, AGENT_NAME, AGENT_ADDRESS, AGENT_HOUSE_CTC_NO, AGENT_MOBILE_CTC_NO, AGENT_COMPANY_NAME, AGENT_COMPANY_ADDRESS, AGENT_COMPANY_CTC_NO, AGENT_COMMISSION_TYPE, AGENT_COMMISSION_AMOUNT, AGENT_COMMISSION_PERCENTAGE, IS_ACTIVE");

            $custom_where = array();
            $where .= " WHERE CREATED_BY = " . $_SESSION['EMP_DATA']['LOGIN_ID'] . " AND IS_ACTIVE = 1";
            $custom_where_string = (count($custom_where) > 0) ? implode(" AND ", array_unique($custom_where)) : "";
            $request['custom_where'] = $custom_where_string;
            $query_columns = implode(",", array_unique($query_columns_array));
            $sql_query = 'SELECT $query_columns from masters_agent_info' . $join . $where;
            $result = datatable::simple($request, $sql_details, $sql_query, $query_columns, $columns);
            $start = $_REQUEST['start'];
            return $result;
        } catch (Exception $e) {
            log_message("Error : ", $this->db->_error_message());
            return fasle;
        }
    }

    /*
     * function to add new masters_agent_info
     */

    function add_masters_agent_info($params) {
        $this->db->insert('masters_agent_info', $params);
        return $this->db->insert_id();
    }

    /*
     * function to update masters_agent_info
     */

    function update_masters_agent_info($AGENT_ID, $params) {
        $this->db->where('AGENT_ID', $AGENT_ID);
        $response = $this->db->update('masters_agent_info', $params);
        if ($response) {
            return "masters_agent_info updated successfully";
        } else {
            return "Error occuring while updating masters_agent_info";
        }
    }

    /*
     * function to delete masters_agent_info
     */

    function delete_masters_agent_info($AGENT_ID) {
        $response = $this->db->delete('masters_agent_info', array('AGENT_ID' => $AGENT_ID));
        if ($response) {
            return "masters_agent_info deleted successfully";
        } else {
            return "Error occuring while deleting masters_agent_info";
        }
    }

}
