<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

    private $_table = 'users';

    public function __construct()
	{
        parent::__construct();
	}
 

    public function doLogin($username, $password)
    {

        $query = $this->db->get_where('users',array('username'=>$username, 'role'=>$role));
        if($query->num_rows() > 0)
        {
            $data_user = $query->row();

            $isPasswordTrue = password_verify($password, $data_user->password);
            
            if ($isPasswordTrue)
            {
                $this->session->set_userdata(['user_logged' => $data_user]);
                $this->_updateLastLogin($data_user->id);
				$this->session->set_userdata('is_active',TRUE);
                return TRUE;
            }
            else
            {
                return FALSE;
            }
        }
        else
        {
            return FALSE;
        }
    }

    public function isNotLogin()
    {
        return $this->session->userdata('user_logged') === null;
    }

}