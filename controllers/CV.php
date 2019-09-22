<?php
class CV extends CI_Controller{

	public function __construct(){

		parent::__construct();
  }

	public function index(){

		$this->load->view('Header',array('page'=>'6'));
		$aside = array(array('ref'=>'formation',
													'titre'=>'Formation'),
										array('ref'=>'competences',
													'titre'=>'Compétences'),
										array('ref'=>'experience',
													'titre'=>'Expérience professionnelle'),
										array('ref'=>'interet',
													'titre'=>'Centres d\'interêt'),
										array('ref'=>'divers',
													'titre'=>'Informations complémentaires'));
		$this->load->view('Aside',array('aside'=>$aside));
		$this->load->view('CV',array('fil'=>'C.V.>'));
		$this->load->view('Footer');
	}

	public function PDF($pdf){

		$this->load->view('Header',array('page'=>'6'));
		$aside = array();
		$this->load->view('Aside',array('aside'=>$aside,
																		'retour'=>array('ref'=>'CV')));
		$this->load->view('PDF',array('pdf'=>$pdf,'fil'=>'C.V.>PDF>'));
		$this->load->view('Footer');
	}
}
?>
