<?php

/**
 * FormValidation.php
 *
 * PHP version 5
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category    FormValidation.php
 * @package     Config
 * @author      Mahesh Sajja <maheshhasan07@gmail.com>
 * @link        http://local.loans.com
 * @dateCreated 11/05/2015  MM/DD/YYYY
 * @dateUpdated 11/05/2015  MM/DD/YYYY 
 * @functions   0
 */
$config = array(
    "client_info_add_form" => array(
        array(
            'field' => 'CLIENT_CODE',
            'label' => 'Client code',
            'rules' => 'trim|required|min_length[1]|max_length[100]'
        ),
        array(
            'field' => 'CLIENT_NAME',
            'label' => 'Client name',
            'rules' => 'trim|required|min_length[1]|max_length[100]|callback_namefield'
        ),
    ),
    "client_info_edit_form" => array(
        array(
            'field' => 'CLIENT_CODE',
            'label' => 'Client code',
            'rules' => 'trim|required|min_length[1]|max_length[100]'
        ),
        array(
            'field' => 'CLIENT_NAME',
            'label' => 'Client name',
            'rules' => 'trim|required|min_length[1]|max_length[100]|callback_namefield'
        ),
    )
);
