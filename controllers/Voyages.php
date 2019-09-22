<?php
class Voyages extends CI_Controller{

	public function __construct(){

		parent::__construct();
  }

	public function index(){

		$this->load->view('Header',array('page'=>'4'));
		$aside = array(array('ref'=>'vie',
													'titre'=>'Pays où j\'ai vécu'),
										array('ref'=>'vacances',
													'titre'=>'Pays que j\'ai visités'));
		$this->load->view('Aside',array('aside'=>$aside));
		$this->load->view('Voyages',array('fil'=>'Voyages>'));
		$this->load->view('Footer');
	}
}
?>
