<?php
class Signaler extends CI_Controller{

	public function __construct(){

		parent::__construct();
  }

	public function index(){

		$this->load->view('Header',array('page'=>''));
		$aside = array();
		$this->load->view('Aside',array('aside'=>$aside));
		$this->load->view('Signaler',array('fil'=>'Signaler>'));
		$this->load->view('Footer');
	}
}
?>
