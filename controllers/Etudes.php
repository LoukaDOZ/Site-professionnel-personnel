<?php
class Etudes extends CI_Controller{

	public function __construct(){

		parent::__construct();
  }

	public function index(){

		$this->load->view('Header',array('page'=>'2'));
		$aside = array(array('ref'=>'petit',
													'titre'=>'Quand j\'étais petit'),
										array('ref'=>'programme',
													'titre'=>'Pourquoi ces études?'),
										array('ref'=>'conclusion',
													'titre'=>'Au final?'));
		$this->load->view('Aside',array('aside'=>$aside));
		$this->load->view('Etudes',array('fil'=>'Etudes>'));
		$this->load->view('Footer');
	}
}
?>
