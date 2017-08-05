<?php

/*
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */

class Masters_locker_master_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    /**
     * Function to get all masters document data
     * 
     * @param type $request
     * @param type $user_data
     * 
     * @return type
     */
    function getAllMastersLockerMasterData($request, $user_data) {
        try {
            $sql_details = array('user' => $this->db->username, 'pass' => $this->db->password, 'db' => $this->db->database, 'host' => $this->db->hostname);
            $request['searchcolumns'] = array();

            $columns = array(
                array(
                    'db' => 'LOCKER_ID',
                    'dt' => 'DT_RowId',
                    'formatter' => function( $d, $row ) {
                        return 'row_' . $d;
                    }
                ),
                array('db' => 'LOCKER_ID',
                    'dt' => 0,
                    'formatter' => function($d, $row) {
                        return !empty($d) ? $d : "N/A";
                    }
                ),
                array('db' => 'LOCKER_STORAGE_BOX_NAME',
                    'dt' => 1,
                    'formatter' => function($d, $row) {
                        return !empty($d) ? $d : "N/A";
                    }
                ),
                array('db' => 'IS_OCCUPIED',
                    'dt' => 2,
                    'formatter' => function($d, $row) {
                        return !empty($d) ? $d : "N/A";
                    }
                ),
                array('db' => 'LOCKER_ID',
                    'dt' => 3,
                    'formatter' => function($d, $row) {
                        $returnString = "";
                        $returnString .= '<a href="' . site_url('masters_locker_master/edit/' . $row['LOCKER_ID']) . '" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a><br>';
                        $returnString .= '<a href="' . site_url('masters_locker_master/remove/' . $row['LOCKER_ID']) . '" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>';
                        return $returnString;
                    }
                )
            );

            $join = "";
            $where = "";

            $query_columns_array = array("LOCKER_ID, LOCKER_STORAGE_BOX_NAME, IS_OCCUPIED");

            $custom_where = array();
            $where .= " WHERE CREATED_BY = " . $_SESSION['EMP_DATA']['LOGIN_ID'] . " AND   IS_ACTIVE = 1";
            $custom_where_string = (count($custom_where) > 0) ? implode(" AND ", array_unique($custom_where)) : "";
            $request['custom_where'] = $custom_where_string;
            $query_columns = implode(",", array_unique($query_columns_array));
            $sql_query = 'SELECT $query_columns from masters_locker_master' . $join . $where;
            $result = datatable::simple($request, $sql_details, $sql_query, $query_columns, $columns);
            $start = $_REQUEST['start'];
            return $result;
        } catch (Exception $e) {
            log_message("Error : ", $this->db->_error_message());
            return fasle;
        }
    }

    /*
     * Get masters_locker_master by LOCKER_ID
     */

    function get_masters_locker_master($LOCKER_ID) {
        return $this->db->get_where('masters_locker_master', array('LOCKER_ID' => $LOCKER_ID))->row_array();
    }

    /*
     * Get all masters_locker_master
     */

    function get_all_masters_locker_master() {
        return $this->db->get('masters_locker_master')->result_array();
    }

    /*
     * function to add new masters_locker_master
     */

    function add_masters_locker_master($params) {
        $this->db->insert('masters_locker_master', $params);
        return $this->db->insert_id();
    }

    /*
     * function to update masters_locker_master
     */

    function update_masters_locker_master($LOCKER_ID, $params) {
        $this->db->where('LOCKER_ID', $LOCKER_ID);
        $response = $this->db->update('masters_locker_master', $params);
        if ($response) {
            return "masters_locker_master updated successfully";
        } else {
            return "Error occuring while updating masters_locker_master";
        }
    }

    /*
     * function to delete masters_locker_master
     */

    function delete_masters_locker_master($LOCKER_ID) {
        $response = $this->db->delete('masters_locker_master', array('LOCKER_ID' => $LOCKER_ID));
        if ($response) {
            return "masters_locker_master deleted successfully";
        } else {
            return "Error occuring while deleting masters_locker_master";
        }
    }

}
