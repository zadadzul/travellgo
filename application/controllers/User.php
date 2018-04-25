<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function form()
	{
		$this->load->view('form_user_v.php');
	}
	public function index()
	{
		$isi = $this->db->query('SELECT * FROM user;');
		return $isi;
	}

}

/* End of file user.php */
/* Location: ./application/controllers/user.php */
