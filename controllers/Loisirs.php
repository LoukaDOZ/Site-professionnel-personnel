<?php
class Loisirs extends CI_Controller{

	public function __construct(){

		parent::__construct();
  }

	public function index(){

		$this->load->view('Header',array('page'=>'3'));
		$aside = array();
		$this->load->view('Aside',array('aside'=>$aside));
		$this->load->view('Loisirs',array('fil'=>'Centres d\'intérêt>'));
		$this->load->view('Footer');
	}
}
?>
