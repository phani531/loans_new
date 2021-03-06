<?php

/*
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */

class Masters_ornament_model extends CI_Model {

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
    function getAllMastersOrnamentsData($request, $user_data) {
        try {
            $sql_details = array('user' => $this->db->username, 'pass' => $this->db->password, 'db' => $this->db->database, 'host' => $this->db->hostname);
            $request['searchcolumns'] = array();

            $columns = array(
                array(
                    'db' => 'ORNAMENT_ID',
                    'dt' => 'DT_RowId',
                    'formatter' => function( $d, $row ) {
                        return 'row_' . $d;
                    }
                ),
                array('db' => 'ORNAMENT_ID',
                    'dt' => 0,
                    'formatter' => function($d, $row) {
                        return !empty($d) ? $d : "N/A";
                    }
                ),
                array('db' => 'ORNAMENT_NAME',
                    'dt' => 1,
                    'formatter' => function($d, $row) {
                        return !empty($d) ? $d : "N/A";
                    }
                ),
                array('db' => 'ORNAMENT_ID',
                    'dt' => 2,
                    'formatter' => function($d, $row) {
                        $returnString = "";
                        $returnString .= '<a href="' . site_url('masters_ornament/edit/' . $row['ORNAMENT_ID']) . '" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a><br>';
                        $returnString .= '<a href="' . site_url('masters_ornament/remove/' . $row['ORNAMENT_ID']) . '" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>';
                        return $returnString;
                    }
                )
            );

            $join = "";
            $where = "";

            $query_columns_array = array("ORNAMENT_ID, ORNAMENT_NAME");

            $custom_where = array();
            $where .= " WHERE CREATED_BY = " . $_SESSION['EMP_DATA']['LOGIN_ID'] . " AND   IS_ACTIVE = 1";
            $custom_where_string = (count($custom_where) > 0) ? implode(" AND ", array_unique($custom_where)) : "";
            $request['custom_where'] = $custom_where_string;
            $query_columns = implode(",", array_unique($query_columns_array));
            $sql_query = 'SELECT $query_columns from masters_ornaments' . $join . $where;
            $result = datatable::simple($request, $sql_details, $sql_query, $query_columns, $columns);
            $start = $_REQUEST['start'];
            return $result;
        } catch (Exception $e) {
            log_message("Error : ", $this->db->_error_message());
            return fasle;
        }
    }

    /*
     * Get masters_ornament by ORNAMENT_ID
     */

    function get_masters_ornament($ORNAMENT_ID) {
        return $this->db->get_where('masters_ornaments', array('ORNAMENT_ID' => $ORNAMENT_ID))->row_array();
    }

    /*
     * Get all masters_ornaments
     */

    function get_all_masters_ornaments() {
        return $this->db->get('masters_ornaments')->result_array();
    }

    /*
     * function to add new masters_ornament
     */

    function add_masters_ornament($params) {
        $this->db->insert('masters_ornaments', $params);
        return $this->db->insert_id();
    }

    /*
     * function to update masters_ornament
     */

    function update_masters_ornament($ORNAMENT_ID, $params) {
        $this->db->where('ORNAMENT_ID', $ORNAMENT_ID);
        $response = $this->db->update('masters_ornaments', $params);
        if ($response) {
            return "masters_ornament updated successfully";
        } else {
            return "Error occuring while updating masters_ornament";
        }
    }

    /*
     * function to delete masters_ornament
     */

    function delete_masters_ornament($ORNAMENT_ID) {
        $response = $this->db->delete('masters_ornaments', array('ORNAMENT_ID' => $ORNAMENT_ID));
        if ($response) {
            return "masters_ornament deleted successfully";
        } else {
            return "Error occuring while deleting masters_ornament";
        }
    }

}
