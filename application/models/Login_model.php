<?php

Class Login_Model extends CI_Model {

	// Read data using username and password
	public function check($data) {
		//echo sha1(md5($data['pass']));exit;
		$condition = "LOGIN_USERNAME =" . "'" . $data['user'] . "' AND " . "LOGIN_PASSWORD =" . "'" . sha1(md5($data['pass'])) . "'";
		$this->db->select('*');
		$this->db->from('administration_logins');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		$data=$query->result_array();
		if ($query->num_rows() == 1) {
			return $data['0'];
		} else {
			return false;
		}
	}

	// Read data from database to show data in admin page
	public function read_user_information($username,$usertype) {

		$condition = "username =" . "'" . $username . "'";
		$this->db->select('*');
		$this->db->from($usertype);
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
	}
	 public function update_user($data, $email) {
        $this->db->where('LOGIN_USERNAME', $email);
        $this->db->update('administration_logins', $data);
    }

    public function does_email_exist($email) {
      $this->db->where('LOGIN_USERNAME', $email);
      $this->db->from('administration_logins');
      $num_res = $this->db->count_all_results();
        if ($num_res == 1) {
          return TRUE;
      } else {
          return FALSE;
      }
    }

    public function does_code_match($code, $email) {
      $this->db->where('LOGIN_USERNAME', $email);
      $this->db->where('forgot_password', $code);
      $this->db->from('administration_logins');
        $num_res = $this->db->count_all_results();

        if ($num_res == 1) {
          return TRUE;
      } else {
          return FALSE;
      }
    }
    //send verification email to user's email id
    public function sendEmail($to_email)
    {
        $from_email = 'team@mydomain.com'; //change this to yours
        $subject = 'Verify Your Email Address';
        $message = 'Dear User,<br /><br />Please click on the below activation link to verify your email address.<br />';
        $message.='<br /> '.base_url().'user/verify/' . md5($to_email) . '<br /><br /><br />Thanks<br />FINMAN Team';
        
        //configure email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.mydomain.com'; //smtp host name
        $config['smtp_port'] = '465'; //smtp port number
        $config['smtp_user'] = $from_email;
        $config['smtp_pass'] = '********'; //$from_email password
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['newline'] = "\r\n"; //use double quotes
        $this->email->initialize($config);
        
        //send mail
        $this->email->from($from_email, 'Mydomain');
        $this->email->to($to_email);
        $this->email->subject($subject);
        $this->email->message($message);
        return $this->email->send();
    }
    //insert into user table
    function insertUser($data)
    {
        return $this->db->insert('administration_logins', $data);
    }
     //activate user account
    public function verifyEmailID($key)
    {
        $data = array('status' => 1);
        $this->db->where('email', $key);
        return $this->db->update('administration_logins', $data);
    }
}

?>