<?php
include './model/db_employe.php';

$action =$_GET['action'];

switch($action){
		
case 'lister':
//appel à la base de donnée le modele
$listeEmploye = DbEmploye::getListeEmploye();
			 


//appel à la vue
include 'vue/vueEmploye/v_listeEmploye.php';
break;
				

case 'supprimer':
	$id=$_GET['id'];
	//Requete de suppression 
DbEmploye::suppEmploye($id);

//appel à la base de donnée le modele
$listeEmploye = DbEmploye::getListeEmploye();
				

   
//appel à la vue
include 'vue/vueEmploye/v_listeEmploye.php';
break;


case 'formAjout':
//appel à la vue
include 'vue/vueEmploye/v_formAjoutEmploye.php';
break;


case 'ajouterEmploye':
	$nom= $_POST['nom'];
	DbEmploye::ajouterEmploye($nom);
	header("Location: index.php?ctl=employe&action=lister");
	include 'vue/vueEmploye/v_formAjoutEmploye.php';
	break;

case 'formEdit':
	$id= $_GET['id'];
	$unEmploye = DbEmploye::getEmploye($id);
	include 'vue/vueEmploye/v_formEditEmploye.php';
	break;


	case 'validEdit':
	$nom = $_POST['nom'];
	$id= $_POST['num'];
	DbEmploye::modifierEmploye($id,$nom);
	$listeEmploye = DbEmploye::getListeEmploye();
	header("Location: index.php?ctl=employe&action=lister");
	include 'vue/vueEmploye/v_listeEmploye.php';
	break;
		}

?>