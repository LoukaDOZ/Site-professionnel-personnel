<?php
class Contact extends CI_Controller{

	public function __construct(){

		parent::__construct();
  }

	public function index(){

		$this->load->view('Header',array('page'=>'7'));
		$aside = array();
		$this->load->view('Aside',array('aside'=>$aside));
		$this->load->view('Contact',array('fil'=>'Contact>'));
		$this->load->view('Footer');
	}
}
?>
