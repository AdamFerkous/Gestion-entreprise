<?php
include 'connectPdo.php';
class DbEmploye{
	
	public static function getListeEmploye()
	{
		$sql = "select * from employe ";		
		$objResultat = connectPdo::getObjPdo()->query($sql);	
		$result = $objResultat->fetchAll();
		return $result;
	}

	public static function suppEmploye($id)
	{
		$sql = "DELETE FROM db_entreprise.employe WHERE employe.id = $id";		
		$objResultat = connectPdo::getObjPdo()->query($sql);	
	}
	
	public static function ajouterEmploye($nom)
	{
		$sql = "INSERT INTO db_entreprise.employe (id, nom) VALUES (NULL, '$nom')";
		connectPdo::getObjPdo()->exec($sql);			
	}

	public static function getEmploye($id)
	{
		$sql = "select * from employe where id=$id";		
		$objResultat = connectPdo::getObjPdo()->query($sql);	
		$result = $objResultat->fetch();
		return $result;
	}

	public static function modifierEmploye($id,$nom)
	{
		$sql = "UPDATE db_entreprise.employe SET nom = '$nom'  WHERE employe.id = $id";
		$objResultat = connectPdo::getObjPdo()->query($sql);	
	}
}

?>