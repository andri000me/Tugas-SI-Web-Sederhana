<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		
	}

	public function index()
	{
		// load view admin/overview.php
		
		$this->load->view('headerfooter/header');
        $this->load->view('headerfooter/topbar');
		$this->load->view("admin/overview");
	}
}