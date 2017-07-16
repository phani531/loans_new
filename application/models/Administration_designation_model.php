<?php

/*
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */

class Administration_designation_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    /*
     * Get administration_designation by DESIGNATION_ID
     */

    function get_administration_designation($DESIGNATION_ID) {
        return $this->db->get_where('administration_designation', array('DESIGNATION_ID' => $DESIGNATION_ID))->row_array();
    }

    /**
     * Function to get all administration designation data
     */
    function get_all_administration_designation_data() {
        return $this->db->where(array("IS_ACTIVE" => 1, "DESIGNATION_ID !=" => 1))->get('administration_designation')->result_array();
    }

    /**
     * Get all administration designation
     * 
     * @param type $request
     * @param type $user_data
     * 
     * @return array result
     */
    function get_all_administration_designation($request, $user_data = array()) {
        try {
            $sql_details = array('user' => $this->db->username, 'pass' => $this->db->password, 'db' => $this->db->database, 'host' => $this->db->hostname);
            $request['searchcolumns'] = array();
            $columns = array(
                array(
                    'db' => 'DESIGNATION_ID',
                    'dt' => 'DT_RowId',
                    'formatter' => function( $d, $row ) {
                        return 'row_' . $d;
                    }
                ),
                array('db' => 'DESIGNATION_ID',
                    'dt' => 0,
                    'formatter' => function($d, $row) {
                        return !empty($d) ? $d : "N/A";
                    }
                ),
                array('db' => 'DESIGNATION_NAME',
                    'dt' => 1,
                    'formatter' => function($d, $row) {
                        return !empty($d) ? $d : "N/A";
                    }
                ),
                array('db' => 'DESIGNATION_DESC',
                    'dt' => 2,
                    'formatter' => function($d, $row) {
                        return !empty($d) ? $d : "N/A";
                    }
                ),
                array('db' => 'DESIGNATION_ID',
                    'dt' => 3,
                    'formatter' => function($d, $row) {
                        $returnString = "";
                        $returnString .= '<a href="' . site_url('administration_designation/edit/' . $row['DESIGNATION_ID']) . '" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>&nbsp;&nbsp;';
                        $returnString .= '<a data-href="' . site_url('administration_designation/remove') . '" data-table-name="employee_designation_table" data-id=' . $row["DESIGNATION_ID"] . ' data-desc="You will be perminently deleting this client." data-message= "Are you sure to delete?" class="btn btn-danger btn-xs delete-row"><span class="fa fa-trash"></span> Delete</a>';
                        return $returnString;
                    }
                )
            );
            $join = "";
            $where = "";

            $query_columns_array = array("DESIGNATION_ID", "DESIGNATION_NAME", "DESIGNATION_DESC");

            $custom_where = array();
            $where .= " WHERE IS_ACTIVE = 1 AND DESIGNATION_ID != 1 AND CREATED_BY = " . $this->session->userdata["EMP_DATA"]['EMP_ID'];
            $custom_where_string = (count($custom_where) > 0) ? implode(" AND ", array_unique($custom_where)) : "";
            $request['custom_where'] = $custom_where_string;
            $query_columns = implode(",", array_unique($query_columns_array));
            $sql_query = 'SELECT $query_columns from administration_designation' . $join . $where;
            $result = datatable::simple($request, $sql_details, $sql_query, $query_columns, $columns);
            $start = $_REQUEST['start'];
            foreach ($result['data'] as &$res) {
                $start++;
                $res[0] = $start;
            }
            return $result;
        } catch (Exception $e) {
            log_message("Error", $e->getMessage());
            return false;
        }
    }

    /*
     * function to add new administration_designation
     */

    function add_administration_designation($params) {
        $this->db->insert('administration_designation', $params);
        return $this->db->insert_id();
    }

    /*
     * function to update administration_designation
     */

    function update_administration_designation($DESIGNATION_ID, $params) {
        $this->db->where('DESIGNATION_ID', $DESIGNATION_ID);
        $response = $this->db->update('administration_designation', $params);
        if ($response) {
            return "administration_designation updated successfully";
        } else {
            return "Error occuring while updating administration_designation";
        }
    }

    /*
     * function to delete administration_designation
     */

    function delete_administration_designation($DESIGNATION_ID) {
        return $this->db->where(array('DESIGNATION_ID' => $DESIGNATION_ID))->update('administration_designation', array("IS_ACTIVE" => 0));
    }

}
