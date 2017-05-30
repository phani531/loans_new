<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
	parent::__construct();

	// Load form helper library
	$this->load->helper('form');


	// Load form validation library
	$this->load->library('form_validation');
    // Load form validation library
    $this->load->library('session');
	// Load database
		$this->load->model('login_model');
	}
	public function index()
	{
		$this->load->view('layouts/login/loginHeader.php');
		$this->load->view('login_view');
		$this->load->view('layouts/login/loginFooter.php');
	}
	public function process()
	{
		$data = $this->input->post();
		//print_r($data);
		//$data['pass'] = $this->encrypt->sha1($data['pass']);
		$result=$this->login_model->check($data);
		//print_r($result);exit;
		if (count($result)>=1) 
		{
			//declaring session
			$this->session->set_userdata(array('user'=>$result));
			redirect('administration_comp_profile/index');
		}
		else{
			//$data['error'] = 'Your Account is Invalid';
			 $this->session->set_flashdata('disp_msg','Your Account is Invalid');
			redirect('login/index');
		}
	}
	public function logout()
	{
		//removing session
		$this->session->unset_userdata('user');
		redirect("Login");
	}

	public function forgot_password() {
	    $this->load->library('form_validation');
	    $this->form_validation->set_rules('email', 'Email', 'required');

	   /* if ($this->form_validation->run() == FALSE) {
	      redirect('login/index');
	    } else {
	     */ $email = $this->input->post('email');

	      $this->db->where('email', $email);
	      $this->db->from('users');
	      $num_res = $this->db->count_all_results();
	      
	      if ($num_res == 1) {
	        // Make a small string (code) to assign to the user // to indicate they've requested a change of // password
	        $code = mt_rand('5000', '200000');
	        $data = array(
	          'forgot_password' => $code,
	        );

	        $this->db->where('email', $email);
	        if ($this->db->update('users', $data)) {
	          // Update okay, send email
	          $url = base_url()."index.php/login/new_password/".$code;
	          $body = "nPlease click the following link to reset your password:nn".$url."nn";
	          if (mail($email, 'Password reset', $body, 'From: reethimaveni.211@gmail.com')) {
	            $data['submit_success'] = true;
	            $this->load->view('layouts/login/loginHeader.php');
				$this->load->view('login_view',$data);
				$this->load->view('layouts/login/loginFooter.php');
	            //$this->load->view('login', $data);
	          }
	          //print_r(error_get_last());
	        } else {
	          // Some sort of error happened, redirect user // back to form
	        	$this->session->set_flashdata('message', 'Email not found');
				
	          redirect('login/index');
	        }
	      } else {
	        // Some sort of error happened, redirect user back // to form
	        $this->session->set_flashdata('message', 'Email not found');
				
	          redirect('login/index');
	      }
	    //}*/
  	}
  
  public function new_password() {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('code', 'Code', 'required|min_length[4]|max_length[7]');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|min_length[5]|max_length[125]');
    $this->form_validation->set_rules('password1', 'Password', 'required|min_length[5]|max_length[15]');
    $this->form_validation->set_rules('password2', 'Confirmation Password', 'required|min_length[5]|max_length[15]|matches[password1]');
    
    // Get Code from URL or POST and clean up
    if ($this->input->post()) {
      $data['code'] = $this->security->xss_clean($this->input->post('code'));
    } else {
      $data['code'] = $this->security->xss_clean($this->uri->segment(3));
    }

    if ($this->form_validation->run() == FALSE) {
    	$this->load->view('layouts/login/loginHeader.php');
      	$this->load->view('new_password');
		$this->load->view('layouts/login/loginFooter.php');
    } else {
      // Does code from input match the code against the // email
     
      $email = $this->security->xss_clean($this->input->post('email'));
      if (!$this->login_model->does_code_match($data['code'], $email)) {
        // Code doesn't match
        redirect ('login/index');
      } else {// Code does match
        $hash = sha1(md5($data['password1']));
       // $hash = $this->encrypt->sha1($this->input->post('password1'));

        $data = array(
          'user_hash' => $hash
        );

        if ($this->login_model->update_user($data, $email)) {
          redirect ('login/index');
        }
      }
    }
  }
public function register()
    {
        //set validation rules
        $this->form_validation->set_rules('fname', 'First Name', 'trim|required|alpha|min_length[3]|max_length[30]|xss_clean');
        $this->form_validation->set_rules('lname', 'Last Name', 'trim|required|alpha|min_length[3]|max_length[30]|xss_clean');
        $this->form_validation->set_rules('email', 'Email ID', 'required|valid_email|min_length[5]|max_length[125]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[15]');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|min_length[5]|max_length[15]|matches[password]');
        $this->form_validation->set_rules('phone', 'Mobile Number ', 'required|regex_match[/^[0-9]{10}$/]'); //{10} for 10 digits number
        //validate form input
        if ($this->form_validation->run() == FALSE)
        {
            // fails
           // echo validation_errors('<div class="error">', '</div>'); exit;
           // $this->session->set_flashdata('message', 'Registration failed!!');
				$this->load->view('layouts/login/loginHeader.php');
		$this->load->view('login_view');
		$this->load->view('layouts/login/loginFooter.php');
	        // redirect('Login#signup_window');
        }
        else
        {
            //insert the user registration details into database
            $data = array(
                'LOGIN_USERNAME' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'LOGIN_PASSWORD' => sha1(md5($this->input->post('password')))
            );
            
            // insert form data into database
            if ($this->login_model->insertUser($data))
            {
                // send email
                if ($this->login_model->sendEmail($this->input->post('email')))
                {
                    // successfully sent mail
                    $this->session->set_flashdata('msg','<div class="alert alert-success text-center">You are Successfully Registered! Please confirm the mail sent to your Email-ID!!!</div>');
                    redirect('Login#signup_window');
                }
                else
                {
                    // error
                    $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
                    redirect('Login#signup_window');
                }
            }
            else
            {
                // error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
                redirect('Login#signup_window');
            }
        }
    }
    
   public function verify($hash=NULL)
    {
        if ($this->login_model->verifyEmailID($hash))
        {
            $this->session->set_flashdata('verify_msg','<div class="alert alert-success text-center">Your Email Address is successfully verified! Please login to access your account!</div>');
            redirect('Login#signup_window');
        }
        else
        {
            $this->session->set_flashdata('verify_msg','<div class="alert alert-danger text-center">Sorry! There is error verifying your Email Address!</div>');
            redirect('Login#signup_window');
        }
    }

      public function logincheck(){
       // $CI = &get_instance();
       // print_r($_SESSION);
    if (!isset($_SESSION['user']))
        {
        
            redirect('login/process');
        }
  }
}
