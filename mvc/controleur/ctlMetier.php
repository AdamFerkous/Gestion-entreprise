<?php
include './model/db_metier.php';

$action =$_GET['action'];

switch($action){
			
	case 'lister':
	//appel à la base de donnée le modele
	$listeMetier = DbMetier::getListeMetier();
				


	//appel à la vue
	include 'vue/vueMetier/v_listeMetier.php';
	break;
					

	case 'supprimer':
		$id=$_GET['id'];
		//Requete de suppression 
		DbMetier::suppMetier($id);

		//appel à la base de donnée le modele
		$listeMetier = DbMetier::getListeMetier();
					
		//appel à la vue
		include 'vue/vueMetier/v_listeMetier.php';
		break;

	case 'formAjout':
		//appel à la vue
		include 'vue/vueMetier/v_formAjoutMetier.php';
		break;
		
		
	case 'ajouterMetier':
		$nom = $_POST['nom'];
		DbMetier::ajouterMetier($nom);
		header("Location: index.php?ctl=metier&action=lister");
		break;


	case 'formEdit':
		$id= $_GET['id'];
		$unMetier = DbMetier::getMetier($id);
		include 'vue/vueMetier/v_formEditMetier.php';
		break;
	
	
	case 'validEdit':
		$nom = htmlspecialchars($_POST['nom']);
		$id= $_POST['num'];
		DbMetier::modifierMetier($id,$nom);
		$listeMetier = DbMetier::getListeMetier();
		header("Location: index.php?ctl=metier&action=lister");
		include 'vue/vueMetier/v_listeMetier.php';
		break;
}

?>