<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PostData {

    public $CI;

    public function __construct() {
        $this->CI = & get_instance();
    }

    /**
     * Function to prepare insert data
     * 
     * @param type $data
     * 
     * @return array $return_array
     */
    public function getClientPost($data, $edit_flag = false) {
        $return_array = array();
        if (!empty($data)) {
            $return_array = array(
                "CLIENT_CODE" => $data['CLIENT_CODE'],
                "CLIENT_NAME" => $data['CLIENT_NAME']
            );
            if (!$edit_flag)
                $return_array['CREATED_DATE'] = date("Y-m-d H:i:s");
            else
                $return_array['MODIFIED_DATE'] = date("Y-m-d H:i:s");
        }
        return $return_array;
    }

    /**
     * Function to prepare insert data
     * 
     * @param type $data
     * 
     * @return array $return_array
     */
    public function getRolePost($data, $edit_flag = false) {
        $return_array = array();
        if (!empty($data)) {
            $return_array = array(
                "ROLE_NAME" => $data['ROLE_NAME']
            );
            if (!$edit_flag)
                $return_array['CREATED_DATE'] = date("Y-m-d H:i:s");
            else
                $return_array['MODIFIED_DATE'] = date("Y-m-d H:i:s");
        }
        return $return_array;
    }

}
?>

