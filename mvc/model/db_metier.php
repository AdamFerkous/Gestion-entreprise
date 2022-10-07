<?php
include 'connectPdo.php';
class DbMetier{
	
	public static function getListeMetier()
	{
		$sql = "SELECT * FROM metier ";		
		$objResultat = connectPdo::getObjPdo()->query($sql);	
		$result = $objResultat->fetchAll();
		return $result;
	}

	public static function suppMetier($id)
	{
		$sql = "DELETE FROM db_entreprise.metier WHERE metier.id = $id";		
		connectPdo::getObjPdo()->exec($sql);	
	}

	public static function ajouterMetier($nom)
	{
		$sql = "INSERT INTO db_entreprise.metier (id, nom) VALUES (NULL, '$nom')";
		connectPdo::getObjPdo()->exec($sql);	

	}

	public static function getMetier($id)
	{
		$sql = "select * from metier where id=$id";		
		$objResultat = connectPdo::getObjPdo()->query($sql);	
		$result = $objResultat->fetch();
		return $result;
	}

	public static function modifierMetier($id,$nom)
	{
		$sql = "UPDATE db_entreprise.metier SET nom = '$nom'  WHERE metier.id = $id";
		$objResultat = connectPdo::getObjPdo()->query($sql);	
	}
}

?>