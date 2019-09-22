<?php
class Projets extends CI_Controller{

	public function __construct(){

		parent::__construct();
  }

	public function index(){

		$projets_tous = array(array('titre'=>'MySuperForm',
																'description'=>'MySuperForm est un site web, inspiré de <a href="https://docs.google.com/forms/u/0/" target="_blank">Google Form</a> et proposant de créer de A à Z des formulaires, et d\'y répondre de façon anonyme.',
																'langages'=>array('htmlcss'=>'HTML & CSS','php'=>'PHP','js'=>'JavaScript','sql'=>'SQL')),
													array('titre'=>'Site professionnel/personnel',
																'description'=>'Découvrez-en plus sur moi grâce à ce site.',
																'langages'=>array('htmlcss'=>'HTML & CSS','php'=>'PHP','js'=>'JavaScript')),
													array('titre'=>'Labirynth solver',
																'description'=>'Labyrinth solver offre la possibilité de créer un labyrinthe et de laisser le programme tenter de le résoudre.',
																'langages'=>array('java'=>'Java')),
													array('titre'=>'Le Jeu de la Vie',
																'description'=>'<a href="https://fr.wikipedia.org/wiki/Jeu_de_la_vie" target="_blank">Le Jeu de la Vie</a> simule, par des règles très simples, l\'apparition ou la disparition de "cellules" pouvant s\'unir en organismes plus gros. Les résultats obtenus sont parfois impressionnants.',
																'langages'=>array('c'=>'C')),
													array('titre'=>'Mémowatch',
																'description'=>'Un jeu du mémory basé sur l\'univers d\'<a href="https://playoverwatch.com/fr-fr/" target="_blank">Overwatch</a>.',
																'langages'=>array('c'=>'C')),
													array('titre'=>'Soul of Bravery',
																'description'=>'Inspiré du mode de combat au tour par tour d\'<a href="https://undertale.com/" target="_blank">Undertale</a>, battez-vous contre un dragon tout en esquivant ses attaques pour gagner.',
																'langages'=>array('js'=>'JavaScript')));

		if(!$this->input->get('all')){

			$projets = $projets_tous;
		}else{

			$projets = array();
			foreach($projets_tous as $projet){

				foreach($projet['langages'] as $langage){

					if($this->input->get($langage)){

						$projets[count($projets)] = $projet;
					}
				}
			}
		}

		$this->load->view('Header',array('page'=>'5'));
		$aside = array();
		$this->load->view('Aside',array('aside'=>$aside));
		$this->load->view('Projets',array('projets'=>$projets,'fil'=>'Réalisations>'));
		$this->load->view('Footer');
	}

	public function projet($projet){

		$this->load->view('Header',array('page'=>'5'));
		$aside = array(array('ref'=>'maj',
												'titre'=>'Mises à jour'),
										array('ref'=>'description',
													'titre'=>'Description'),
										array('ref'=>'fonctionnalites',
													'titre'=>'Fonctionnalités'));
		$this->load->view('Aside',array('aside'=>$aside,
																		'retour'=>array('ref'=>'Projets')));
		$this->load->view('projets/Decouvrir-'.$projet,array('fil'=>'Réalisation>'.str_replace('-',' ',$projet).">"));
		$this->load->view('Footer');
	}
}
?>
