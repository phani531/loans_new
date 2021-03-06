<?php

/*
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */

class Masters_advertisement extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Masters_advertisement_model');
        $this->load->helper(array("datatable"));
        $this->load->library('form_validation');
        $session_data = (isset($this->session->userdata['EMP_DATA']) && !empty($this->session->userdata['EMP_DATA'])) ? $this->session->userdata['EMP_DATA'] : array();
        if (empty($session_data))
            redirect("login");
    }

    /*
     * Listing of masters_advertisements
     */

    function index() {
        $data['_view'] = 'masters_advertisement/index';
        $this->load->view('layouts/main', $data);
    }

    /**
     * Function to get all advertisements
     * 
     * @return json result
     */
    function getAllAdvertisements() {
        $request = $_GET;
        $result = $this->Masters_advertisement_model->getAllAdvertisementsData($request, array());
        echo json_encode($result);
        exit;
    }

    /*
     * Adding a new masters_advertisement
     */

    function add() {
        $this->form_validation->set_rules('ADVERTISEMENT_NAME', 'ADVERTISEMENT NAME', 'required');

        if ($this->form_validation->run()) {
            $params = array(
                'ADVERTISEMENT_NAME' => $this->input->post('ADVERTISEMENT_NAME'),
                'CREATED_DATE' => date("Y-m-d H:i:s"),
                'CREATED_BY' => $this->session->userdata['EMP_DATA']['EMP_ID'],
                'IS_ACTIVE' => 1
            );

            $masters_advertisement_id = $this->Masters_advertisement_model->add_masters_advertisement($params);
            redirect('masters_advertisement/index');
        } else {
            $data['_view'] = 'masters_advertisement/add';
            $this->load->view('layouts/main', $data);
        }
    }

    /*
     * Editing a masters_advertisement
     */

    function edit($ADVERTISEMENT_ID) {
        // check if the masters_advertisement exists before trying to edit it
        $data['masters_advertisement'] = $this->Masters_advertisement_model->get_masters_advertisement($ADVERTISEMENT_ID);

        if (isset($data['masters_advertisement']['ADVERTISEMENT_ID'])) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('ADVERTISEMENT_NAME', 'ADVERTISEMENT NAME', 'required');

            if ($this->form_validation->run()) {
                $params = array(
                    'ADVERTISEMENT_NAME' => $this->input->post('ADVERTISEMENT_NAME'),
                    'MODIFIED_DATE' => date("Y-m-d H:i:s"),
                    'MODIFIED_BY' => $this->session->userdata['EMP_DATA']['EMP_ID'],
                    'IS_ACTIVE' => 1
                );

                $this->Masters_advertisement_model->update_masters_advertisement($ADVERTISEMENT_ID, $params);
                redirect('masters_advertisement/index');
            } else {
                $data['_view'] = 'masters_advertisement/edit';
                $this->load->view('layouts/main', $data);
            }
        } else
            show_error('The masters_advertisement you are trying to edit does not exist.');
    }

    /*
     * Deleting masters_advertisement
     */

    function remove($ADVERTISEMENT_ID) {
        $masters_advertisement = $this->Masters_advertisement_model->get_masters_advertisement($ADVERTISEMENT_ID);

        // check if the masters_advertisement exists before trying to delete it
        if (isset($masters_advertisement['ADVERTISEMENT_ID'])) {
            $this->Masters_advertisement_model->delete_masters_advertisement($ADVERTISEMENT_ID);
            redirect('masters_advertisement/index');
        } else
            show_error('The masters_advertisement you are trying to delete does not exist.');
    }

}
