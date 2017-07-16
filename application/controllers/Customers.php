<?php

class Customers extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('customers_model');
        $this->load->model('Customer_detail_model');
        $session_data = (isset($this->session->userdata['EMP_DATA']) && !empty($this->session->userdata['EMP_DATA'])) ? $this->session->userdata['EMP_DATA'] : array();
        if (empty($session_data))
            redirect("login");
    }

    function index() {
        $this->form_validation->set_rules('customer_type', 'CUSTOMER TYPE', 'required|max_length[1]');
        $this->form_validation->set_rules('customer_idno', 'CUSTOMER IDNO', 'required|max_length[50]');
        $this->form_validation->set_rules('customer_name', 'CUSTOMER NAME', 'required');
        $this->form_validation->set_rules('file_no', 'FILE NO', '');
        $this->form_validation->set_rules('oldic_no', 'OLDIC NO', '');
        $this->form_validation->set_rules('non_icno', 'NON ICNO', '');
        $this->form_validation->set_rules('application_date', 'APPLICATION DATE', '');
        $this->form_validation->set_rules('vehicle_no', 'VEHICLE NO', '');
        $this->form_validation->set_rules('dob', 'DOB', '');
        $this->form_validation->set_rules('age', 'AGE', '');
        $this->form_validation->set_rules('gender', 'GENDER', '');
        $this->form_validation->set_rules('house_status_id', 'HOUSE STATUS ID', '');
        $this->form_validation->set_rules('martial_status', 'MARTIAL STATUS', '');
        $this->form_validation->set_rules('email_id', 'EMAIL ID', '');

        $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');

        if ($this->form_validation->run() == FALSE) { // validation hasn't been passed
            $data['action'] = 'companies';
            $data['title'] = 'Companies';
            //render_with_layout('customers/index', $data, 'admin');
            $data['_view'] = 'customers/index';
            $this->load->view('layouts/main', $data);
            //$this->load->view('customers_view');
        } else { // passed validation proceed to post success logic
            // build array for the model

            $form_data = array(
                'customer_type' => set_value('customer_type'),
                'customer_idno' => set_value('customer_idno'),
                'customer_name' => set_value('customer_name'),
                'file_no' => set_value('file_no'),
                'oldic_no' => set_value('oldic_no'),
                'non_icno' => set_value('non_icno'),
                'application_date' => set_value('application_date'),
                'vehicle_no' => set_value('vehicle_no'),
                'dob' => set_value('dob'),
                'age' => set_value('age'),
                'gender' => set_value('gender'),
                'house_status_id' => set_value('house_status_id'),
                'martial_status' => set_value('martial_status'),
                'email_id' => set_value('email_id')
            );

            // run insert model to write data to db

            if ($this->customers_model->SaveForm($form_data) == TRUE) { // the information has therefore been successfully saved in the db
                redirect('customers/success');   // or whatever logic needs to occur
            } else {
                echo 'An error occurred saving your information. Please try again later';
                // Or whatever error handling is necessary
            }
        }
    }

    function success() {
        echo 'this form has been successfully submitted with all validation being passed. All messages or logic here. Please note
			sessions have not been used and would need to be added in to suit your app';
    }

    public function customerUpload() {
        $data['action'] = 'customers';
        $data['title'] = 'customerUpload';
        //render_with_layout('customers/index', $data, 'admin');
        $data['_view'] = 'customers/customerUpload';
        $this->load->view('layouts/main', $data);
    }

    public function customerDetails() {
        $data['action'] = 'customers';
        $data['title'] = 'customerDetails';
        $data['customer_details'] = $this->Customer_detail_model->get_all_customer_details();
        $this->load->model('Masters_agent_info_model');
        $data['all_masters_agent_info'] = $this->Masters_agent_info_model->get_all_masters_agent_info();

        $this->load->model('Masters_advertisement_model');
        $data['all_masters_advertisements'] = $this->Masters_advertisement_model->get_all_masters_advertisements();

        $this->load->model('Administration_comp_profile_model');
        $data['all_administration_comp_profile'] = $this->Administration_comp_profile_model->get_all_administration_comp_profile();

        $this->load->model('Masters_race_model');
        $data['all_masters_race'] = $this->Masters_race_model->get_all_masters_race();

        $this->load->model('Masters_cust_bank_model');
        $data['all_masters_cust_bank'] = $this->Masters_cust_bank_model->get_all_masters_cust_bank();
        $data['all_masters_race'] = $this->Masters_race_model->get_all_masters_race();

        $this->load->model('Masters_cust_comp_info_model');
        $data['all_masters_cust_comp_info'] = $this->Masters_cust_comp_info_model->get_all_masters_cust_comp_info();
        $data['all_masters_race'] = $this->Masters_race_model->get_all_masters_race();
        $data['all_masters_cust_comp_info'] = $this->Masters_cust_comp_info_model->get_all_masters_cust_comp_info();

        //render_with_layout('customers/index', $data, 'admin');
        $data['_view'] = 'customers/customerDetails';
        $this->load->view('layouts/main', $data);
    }

    public function fileUpload() {
        $data = array();

        //load form validation library
        $this->load->library('form_validation');

        //load file helper
        $this->load->helper('file');
        // print_r($_FILES);exit;


        $this->form_validation->set_rules('customers', '', 'callback_file_check');

        if ($this->form_validation->run() == true) {
            //upload configuration
            $date = date('Y-m-d H:i:s');
            $date = str_replace(':', '', $date);
            // $date = str_replace( ':', '', $date);
            $config['upload_path'] = 'uploads/files/' . $date;
            $config['allowed_types'] = 'xls|xlsx';
            $config['max_size'] = 1024;
            $this->load->library('upload', $config);

            //upload file to directory
            if (!is_dir('uploads/files/' . $date)) {
                mkdir('./uploads/files/' . $date, 0777, TRUE);
            }
            if ($this->upload->do_upload('customers')) {
                $uploadData = $this->upload->data();
                $uploadedFile = $uploadData['file_name'];

                /*
                 * insert file information into the database
                 * .......
                 */
                // $file = $_FILES['upload']['tmp_name'];
                $file = 'uploads/files/' . $date . '/' . $uploadedFile;
                //load the excel library
                $this->load->library('excel');
                //read file from path
                $objPHPExcel = PHPExcel_IOFactory::load($file);
                //get only the Cell Collection
                $cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
                //extract to a PHP readable array format
                foreach ($cell_collection as $cell) {
                    $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
                    // echo "<br>";
                    $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
                    $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
                    //header will/should be in row 1 only. of course this can be modified to suit your need.
                    if ($row == 1) {
                        $header[$row][$column] = $data_value;
                    } else {
                        $arr_data[$row][$column] = $data_value;
                    }
                }
                //echo "<pre>";print_r($arr_data);exit;
                //send the data in an array format
                $data['header'] = (isset($header) ? $header : '');
                $data['values'] = (isset($arr_data) ? $arr_data : '');
                $data['file'] = $uploadedFile;
                // print_r($header);exit;
                $data['success_msg'] = 'File has been uploaded successfully.';
                $data['action'] = 'customers';
                $data['title'] = 'customerUpload';
                //render_with_layout('customers/index', $data, 'admin');
                $data['_view'] = 'customers/customerUpload';
                $this->load->view('layouts/main', $data);
                //$this->load->view('layouts/admin/adminFooter');
            } else {
                $data['error_msg'] = $this->upload->display_errors();
                $this->session->set_flashdata('message', $data['error_msg']);
                redirect('Customers/customerUpload');
                exit;
                //print_r($data['error_msg']);exit;
            }
        } else {
            $this->session->set_flashdata('message', 'Upload xls/xlsx files only');
            redirect('Customers/customerUpload');
            exit;
        }
    }

    /*
     * file value and type check during validation
     */

    public function file_check($str) {
        //print_r($_FILES);exit;
        $allowed_mime_type_arr = array('application/vnd.ms-excel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        $mime = get_mime_by_extension($_FILES['customers']['name']);
        if (isset($_FILES['customers']['name']) && $_FILES['customers']['name'] != "") {
            if (in_array($mime, $allowed_mime_type_arr)) {
                return true;
            } else {
                $this->form_validation->set_message('file_check', 'Please select only xls/xlsx file.');
                return false;
            }
        } else {
            $this->form_validation->set_message('file_check', 'Please choose a file to upload.');
            return false;
        }
    }

    public function fileUploadInsert() {
        $data = $_POST;
        $val = $data['values'];
        //echo "<pre>";print_r($data);
        //echo "<pre>";print_r($val);
        foreach ($val as $key => $values) {
            //echo "<pre>";print_r($values);
            if ($data['name'] == $key) {
                $insert['name'] = isset($val[$data['name']]) ? $val[$data['name']] : '';
            }
            if ($data['email'] == $key) {
                $insert['email'] = isset($val[$data['email']]) ? $val[$data['email']] : '';
            }
            if ($data['phone'] == $key) {
                $insert['phone'] = isset($val[$data['phone']]) ? $val[$data['phone']] : '';
            }
            if ($data['firstName'] == $key) {
                $insert['firstName'] = isset($val[$data['firstName']]) ? $val[$data['firstName']] : '';
            }
            if ($data['lastName'] == $key) {
                $insert['lastName'] = isset($val[$data['lastName']]) ? $val[$data['lastName']] : '';
            }
        }
        $keydiff = array_diff(array_keys($data), array_keys($insert));
        //print_r($keydiff);exit;
        foreach ($keydiff as $diff) {
            if ($diff != 'values') {

                $insert[$diff] = array();
            }
        }
        //echo "<pre>";print_r($insert);exit;
        for ($i = 0; $i < count($insert['name']); $i++) {
            $insertBatch[] = array('name' => (isset($insert['name'][$i]) ? $insert['name'][$i] : ''),
                'email' => (isset($insert['email'][$i]) ? $insert['email'][$i] : ''),
                'phone' => (isset($insert['phone'][$i]) ? $insert['phone'][$i] : ''),
                'first_name' => (isset($insert['firstName'][$i]) ? $insert['firstName'][$i] : ''),
                'last_name' => (isset($insert['lastName'][$i])) ? $insert['lastName'][$i] : '');
        }
        $this->db->insert_batch('customers', $insertBatch);
        $this->session->set_flashdata('message', 'Added successfully!!');
        redirect('Customers/customerUpload');
        exit;
    }

}

?>