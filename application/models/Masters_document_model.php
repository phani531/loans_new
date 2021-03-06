<?php

/*
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */

class Masters_document_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    /*
     * Get masters_document by DOCUMENT_ID
     */

    function get_masters_document($DOCUMENT_ID) {
        return $this->db->get_where('masters_documents', array('DOCUMENT_ID' => $DOCUMENT_ID))->row_array();
    }

    /*
     * Get all masters_documents
     */

    function get_all_masters_documents() {
        return $this->db->get('masters_documents')->result_array();
    }

    /**
     * Function to get all masters document data
     * 
     * @param type $request
     * @param type $user_data
     * 
     * @return type
     */
    function getAllMastersDocumentsData($request, $user_data) {
        try {
            $sql_details = array('user' => $this->db->username, 'pass' => $this->db->password, 'db' => $this->db->database, 'host' => $this->db->hostname);
            $request['searchcolumns'] = array();

            $columns = array(
                array(
                    'db' => 'DOCUMENT_ID',
                    'dt' => 'DT_RowId',
                    'formatter' => function( $d, $row ) {
                        return 'row_' . $d;
                    }
                ),
                array('db' => 'DOCUMENT_ID',
                    'dt' => 0,
                    'formatter' => function($d, $row) {
                        return !empty($d) ? $d : "N/A";
                    }
                ),
                array('db' => 'DOCUMENT_NAME',
                    'dt' => 1,
                    'formatter' => function($d, $row) {
                        return !empty($d) ? $d : "N/A";
                    }
                ),
                array('db' => 'DOC_TYPE',
                    'dt' => 2,
                    'formatter' => function($d, $row) {
                        return !empty($d) ? $d : "N/A";
                    }
                ),
                array('db' => 'DOCUMENT_ID',
                    'dt' => 3,
                    'formatter' => function($d, $row) {
                        $returnString = "";
                        $returnString .= '<a href="' . site_url('masters_document/edit/' . $row['DOCUMENT_ID']) . '" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a><br>';
                        $returnString .= '<a href="' . site_url('masters_document/remove/' . $row['DOCUMENT_ID']) . '" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>';
                        return $returnString;
                    }
                )
            );

            $join = "";
            $where = "";

            $query_columns_array = array("DOCUMENT_ID, DOCUMENT_NAME, DOC_TYPE");

            $custom_where = array();
            $where .= " WHERE CREATED_BY = " . $_SESSION['EMP_DATA']['LOGIN_ID'] . " AND   IS_ACTIVE = 1";
            $custom_where_string = (count($custom_where) > 0) ? implode(" AND ", array_unique($custom_where)) : "";
            $request['custom_where'] = $custom_where_string;
            $query_columns = implode(",", array_unique($query_columns_array));
            $sql_query = 'SELECT $query_columns from masters_documents' . $join . $where;
            $result = datatable::simple($request, $sql_details, $sql_query, $query_columns, $columns);
            $start = $_REQUEST['start'];
            return $result;
        } catch (Exception $e) {
            log_message("Error : ", $this->db->_error_message());
            return fasle;
        }
    }

    /*
     * function to add new masters_document
     */

    function add_masters_document($params) {
        $this->db->insert('masters_documents', $params);
        return $this->db->insert_id();
    }

    /*
     * function to update masters_document
     */

    function update_masters_document($DOCUMENT_ID, $params) {
        $this->db->where('DOCUMENT_ID', $DOCUMENT_ID);
        $response = $this->db->update('masters_documents', $params);
        if ($response) {
            return "masters_document updated successfully";
        } else {
            return "Error occuring while updating masters_document";
        }
    }

    /*
     * function to delete masters_document
     */

    function delete_masters_document($DOCUMENT_ID) {
        $response = $this->db->delete('masters_documents', array('DOCUMENT_ID' => $DOCUMENT_ID));
        if ($response) {
            return "masters_document deleted successfully";
        } else {
            return "Error occuring while deleting masters_document";
        }
    }

}
