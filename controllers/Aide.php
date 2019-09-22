<?php
class Aide extends CI_Controller{

	public function __construct(){

		parent::__construct();
  }

	public function index(){

		$this->load->view('Header',array('page'=>''));
		$aside = array(array('ref'=>'naviguer',
												'titre'=>'Comment naviguer?'),
									array('ref'=>'probleme',
												'titre'=>'Un problème?'),
									array('ref'=>'contact',
												'titre'=>'Comment me contacter?'));
		$this->load->view('Aside',array('aside'=>$aside));
		$this->load->view('Aide',array('fil'=>'Aide>'));
		$this->load->view('Footer');
	}
}
?>
