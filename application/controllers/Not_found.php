<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Not_found extends CI_Controller {

public function __construct() {
	parent::__construct();
	$this->load->common('includes/common');
}
public function index(){
	$this->output->set_status_header('404'); 
	$this->load->template('not_found');
  }
}