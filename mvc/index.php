<?php

session_start();

include 'vue/entete.php';

include 'vue/menu.php';	

if(isset($_GET['ctl']))
{
	switch($_GET['ctl']){
		
			case 'service':
			 include 'controleur/ctlService.php';
			 break;
			 
		}
	
}
include 'vue/pied.php';

?>        				 
<?php

if(isset($_GET['ctl']))
{
	switch($_GET['ctl']){
		
			case 'employe':
			 include 'controleur/ctlEmploye.php';
			 break;
			 
		}
	
}
include 'vue/pied.php';

?>
<?php

if(isset($_GET['ctl']))
{
	switch($_GET['ctl']){
		
		case 'metier':
			include 'controleur/ctlMetier.php';
			break;
			 
		}
	
}
include 'vue/pied.php';

?>        				 
      