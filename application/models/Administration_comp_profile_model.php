<?php

/*
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */

class Administration_comp_profile_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    /*
     * Get administration_comp_profile by BRANCH_ID
     */

    function get_administration_comp_profile($BRANCH_ID) {
        return $this->db->get_where('administration_comp_profile', array('BRANCH_ID' => $BRANCH_ID))->row_array();
    }

    /**
     * Function to get all administration comp profile data
     * 
     * return array result
     */
    function get_all_administration_comp_profile_data() {
        return $this->db->where(array("IS_ACTIVE" => 1))->get('administration_comp_profile')->result_array();
    }

    /*
     * Get all administration_comp_profile
     */

    public function get_all_administration_comp_profile($request, $user_data = array()) {
        try {
            $sql_details = array('user' => $this->db->username, 'pass' => $this->db->password, 'db' => $this->db->database, 'host' => $this->db->hostname);
            $request['searchcolumns'] = array();

            $columns = array(
                array(
                    'db' => 'BRANCH_ID',
                    'dt' => 'DT_RowId',
                    'formatter' => function( $d, $row ) {
                        return 'row_' . $d;
                    }
                ),
                array('db' => 'BRANCH_ID',
                    'dt' => 0,
                    'formatter' => function($d, $row) {
                        return !empty($d) ? $d : "N/A";
                    }
                ),
                array('db' => 'BRANCH_NAME',
                    'dt' => 1,
                    'formatter' => function($d, $row) {
                        return !empty($d) ? $d : "N/A";
                    }
                ),
                array('db' => 'BRANCH_TYPE',
                    'dt' => 2,
                    'formatter' => function($d, $row) {
                        $return_string = "";
                        if ($d == 1)
                            $return_string .= "Money lender";
                        else
                            $return_string .= "Gold";
                        return $return_string;
                    }
                ),
                array('db' => 'BRANCH_CODE',
                    'dt' => 3,
                    'formatter' => function($d, $row) {
                        return !empty($d) ? $d : "N/A";
                    }
                ),
                array('db' => 'BRANCH_REG_NO',
                    'dt' => 4,
                    'formatter' => function($d, $row) {
                        return !empty($d) ? $d : "N/A";
                    }
                ),
                array('db' => 'BRANCH_LICENCE_NO',
                    'dt' => 5,
                    'formatter' => function($d, $row) {
                        return !empty($d) ? $d : "N/A";
                    }
                ),
                array('db' => 'BRANCH_ADDRESS',
                    'dt' => 6,
                    'formatter' => function($d, $row) {
                        return !empty($d) ? $d : "N/A";
                    }
                ),
                array('db' => 'BRANCH_OFFICE_NO',
                    'dt' => 7,
                    'formatter' => function($d, $row) {
                        return !empty($d) ? $d : "N/A";
                    }
                ),
                array('db' => 'BRANCH_FAX_NO',
                    'dt' => 8,
                    'formatter' => function($d, $row) {
                        return !empty($d) ? $d : "N/A";
                    }
                ),
                array('db' => 'BRANCH_EMAILID',
                    'dt' => 9,
                    'formatter' => function($d, $row) {
                        return !empty($d) ? $d : "N/A";
                    }
                ),
                array('db' => 'BRANCH_WEBSITE',
                    'dt' => 10,
                    'formatter' => function($d, $row) {
                        return !empty($d) ? $d : "N/A";
                    }
                ),
                array(
                    'db' => 'BRANCH_ID',
                    'dt' => 11,
                    'formatter' => function($d, $row) {
                        $returnString = "";
                        $returnString .= '<a href="' . site_url('administration_comp_profile/edit/' . $row['BRANCH_ID']) . '" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>&nbsp;&nbsp;';
                        $returnString .= '<a data-href="' . site_url('administration_comp_profile/remove') . '" data-table-name="admin_comp_profile" data-id=' . $row["BRANCH_ID"] . ' data-desc="You will be perminently deleting this branch." data-message= "Are you sure to delete?" class="btn btn-danger btn-xs delete-row"><span class="fa fa-trash"></span> Delete</a>';
                        return $returnString;
                    }
                )
            );

            $join = "";
            $where = "";

            $query_columns_array = array("BRANCH_ID", "BRANCH_NAME", "BRANCH_TYPE", "BRANCH_CODE", "BRANCH_REG_NO", "BRANCH_LICENCE_NO", "BRANCH_ADDRESS", "BRANCH_OFFICE_NO", "BRANCH_FAX_NO", "BRANCH_EMAILID", "BRANCH_WEBSITE", "BRANCH_LOGO_PIC_PATH", "LAWYER_NAME", "LAWYER_ADDRESS", "LAWYER_OFFICE_NO", "LAWYER_FAX_NO", "LAWYER_EMAILID", "FINANCIAL_YEAR_FROM", "FINANCIAL_YEAR_TO", "CREATED_DATE", "CREATED_BY");

            $custom_where = array();
            $where .= " WHERE IS_ACTIVE = 1 AND CREATED_BY = " . $this->session->userdata["EMP_DATA"]['EMP_ID'];
            $custom_where_string = (count($custom_where) > 0) ? implode(" AND ", array_unique($custom_where)) : "";
            $request['custom_where'] = $custom_where_string;
            $query_columns = implode(",", array_unique($query_columns_array));
            $sql_query = 'SELECT $query_columns from administration_comp_profile' . $join . $where;
            $result = datatable::simple($request, $sql_details, $sql_query, $query_columns, $columns);
            $start = $_REQUEST['start'];
            return $result;
        } catch (Exception $e) {
            log_message("Error : ", $this->db->_error_message());
            return fasle;
        }
    }

    /*
     * function to add new administration_comp_profile
     */

    function add_administration_comp_profile($params) {
        $this->db->insert('administration_comp_profile', $params);
        return $this->db->insert_id();
    }

    /*
     * function to update administration_comp_profile
     */

    function update_administration_comp_profile($BRANCH_ID, $params) {
        $this->db->where('BRANCH_ID', $BRANCH_ID);
        $response = $this->db->update('administration_comp_profile', $params);
        if ($response) {
            return "administration_comp_profile updated successfully";
        } else {
            return "Error occuring while updating administration_comp_profile";
        }
    }

    /*
     * function to delete administration_comp_profile
     */

    function delete_administration_comp_profile($BRANCH_ID) {
        return $this->db->where(array('BRANCH_ID' => $BRANCH_ID))->update('administration_comp_profile', array('IS_ACTIVE' => 0));
    }

}
