<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {
	public function artikel()
	{
    $data['page_title'] = 'Artikel'; 
		$this->load->view('backend/form/artikel', $data);
	}
}
