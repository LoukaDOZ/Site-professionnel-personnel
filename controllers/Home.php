<?php
class Home extends CI_Controller{

	public function __construct(){

		parent::__construct();
  }

	public function index(){

		$this->load->view('Header',array('page'=>'1'));
		$aside = array();
		$this->load->view('Aside',array('aside'=>$aside));
		$this->load->view('Home',array('fil'=>'Page d\'accueil>'));
		$this->load->view('Footer');
	}
}
?>
