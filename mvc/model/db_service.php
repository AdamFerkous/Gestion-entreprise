<?php
include 'connectPdo.php';
class DbService{
	
	public static function getListeService()
	{
		$sql = "select * from service ";		
		$objResultat = connectPdo::getObjPdo()->query($sql);	
		$result = $objResultat->fetchAll();
		return $result;
	}
	
	public static function suppService($id)
	{
		$sql = "DELETE FROM db_entreprise.service WHERE service.id = $id";		
		$objResultat = connectPdo::getObjPdo()->query($sql);	
	}
	
	public static function ajouterService($nom)
	{
		$sql = "INSERT INTO db_entreprise.service (id, nom) VALUES (NULL, '$nom')";
		connectPdo::getObjPdo()->exec($sql);	
	}

	public static function getService($id)
	{
		$sql = "select * from service where id=$id";		
		$objResultat = connectPdo::getObjPdo()->query($sql);	
		$result = $objResultat->fetch();
		return $result;
	}

	public static function modifierService($id,$nom)
	{
		$sql = "UPDATE db_entreprise.service SET nom = '$nom'  WHERE service.id = $id";
		$objResultat = connectPdo::getObjPdo()->query($sql);	
	}
}

?>