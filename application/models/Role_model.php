<?php

/*
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */

class Role_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    /**
     * Function to get all roles list
     * 
     * @param array $request
     * @param array $user_data
     * 
     * @return array $result
     */
    function getAllRolesList($request, $user_data = array()) {
        try {
            $sql_details = array('user' => $this->db->username, 'pass' => $this->db->password, 'db' => $this->db->database, 'host' => $this->db->hostname);
            $request['searchcolumns'] = array();
            $columns = array(
                array(
                    'db' => 'ROLE_ID',
                    'dt' => 'DT_RowId',
                    'formatter' => function( $d, $row ) {
                        return 'row_' . $d;
                    }
                ),
                array('db' => 'ROLE_ID',
                    'dt' => 0,
                    'formatter' => function($d, $row) {
                        return !empty($d) ? $d : "N/A";
                    }
                ),
                array('db' => 'ROLE_NAME',
                    'dt' => 1,
                    'formatter' => function($d, $row) {
                        return !empty($d) ? $d : "N/A";
                    }
                ),
                array('db' => 'ROLE_ID',
                    'dt' => 2,
                    'formatter' => function($d, $row) {
                        $returnString = "";
                        $returnString .= '<a href="' . site_url('role/edit/' . $row['ROLE_ID']) . '" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>&nbsp;&nbsp;';
                        $returnString .= '<a data-href="' . site_url('role/remove') . '" data-table-name="roles_table" data-id=' . $row["ROLE_ID"] . ' data-desc="You will be perminently deleting this role." data-message= "Are you sure to delete?" class="btn btn-danger btn-xs delete-row"><span class="fa fa-trash"></span> Delete</a>';
                        return $returnString;
                    }
                )
            );
            $join = "";
            $where = "";

            $query_columns_array = array("ROLE_ID", "ROLE_NAME");

            $custom_where = array();
            $where .= " WHERE IS_ACTIVE = 1";
            $custom_where_string = (count($custom_where) > 0) ? implode(" AND ", array_unique($custom_where)) : "";
            $request['custom_where'] = $custom_where_string;
            $query_columns = implode(",", array_unique($query_columns_array));
            $sql_query = 'SELECT $query_columns from roles' . $join . $where;
            $result = datatable::simple($request, $sql_details, $sql_query, $query_columns, $columns);
            $start = $_REQUEST['start'];
            return $result;
        } catch (Exception $e) {
            log_message("ERROR", "Something went wrong with clients table - Message : " . $e->getMessage());
            return false;
        }
    }

    /*
     * Get role by ROLE_ID
     */

    function get_role($ROLE_ID) {
        return $this->db->get_where('roles', array('ROLE_ID' => $ROLE_ID))->row_array();
    }

    /*
     * Get all roles
     */

    function get_all_roles() {
        return $this->db->get('roles')->result_array();
    }

    /*
     * function to add new role
     */

    function add_role($params) {
        $this->db->insert('roles', $params);
        return $this->db->insert_id();
    }

    /*
     * function to update role
     */

    function update_role($ROLE_ID, $params) {
        $this->db->where('ROLE_ID', $ROLE_ID);
        $response = $this->db->update('roles', $params);
        if ($response) {
            return "role updated successfully";
        } else {
            return "Error occuring while updating role";
        }
    }

    /*
     * function to delete role
     */

    function delete_role($ROLE_ID) {
        return $this->db->where(array("ROLE_ID" => $ROLE_ID))->update('roles', array('IS_ACTIVE' => 0));
    }

}
