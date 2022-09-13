<?php

namespace App\Controllers;

class Home extends BaseController
{
	parent::__construct();
	$this->load->database();
	
    public function index()
    {
		$query = $this->db->get('ms_user');
		$result = $query->result();
        return view('welcome_message', $result);
    }
}
