<?php
include './model/db_service.php';

$action =$_GET['action'];

switch($action){
		
case 'lister':
//appel à la base de donnée le modele
$listeService = DbService::getListeService();
			 
//appel à la vue
include 'vue/vueService/v_listeServices.php';
			 
break;
				
		
case 'supprimer':
$id=$_GET['id'];
//Requete de suppression 
DbService::suppService($id);
		
//appel à la base de donnée le modele
$listeService = DbService::getListeService();
						
		
		   
//appel à la vue
include 'vue/vueService/v_listeServices.php';
break;
		

case 'formAjout':
	//appel à la vue
	include 'vue/vueService/v_formAjoutService.php';
	break;
	
	
	case 'ajouterService':
		$nom= $_POST['nom'];
		DbService::ajouterService($nom);
		header("Location: index.php?ctl=service&action=lister");
		include 'vue/vueService/v_formAjoutService.php';
		break;
			

	case 'formEdit':
		$id= $_GET['id'];
		$unService = DbService::getService($id);
		include 'vue/vueService/v_formEditService.php';
		break;


	case 'validEdit':
		$nom = $_POST['nom'];
		$id= $_POST['num'];
		DbService::modifierService($id,$nom);
		$listeService = DbService::getListeService();
		header("Location: index.php?ctl=service&action=lister");
		include 'vue/vueService/v_listeServices.php';
		break;
				
			}
?>