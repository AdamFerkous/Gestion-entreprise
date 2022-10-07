<div class ="row">
  <table class="table ml-2">
			   <thead class="thead-dark">
				  <tr>
					 <th>Id</th>
					 <th>Nom</th>
					 <th>Action</th>
				  </tr>
			   </thead>
		    <tbody>		   	 
				<?php
				foreach($listeEmploye as $ligne){
					 echo "<tr>
							 <td>".$ligne['id']."</td>
							 <td>".$ligne['nom']."</td>		
							 <td>					 
								<a href=index.php?ctl=employe&action=supprimer&id=".$ligne['id']."><img src='./vue/images/remove.png' height=30 width=30></a>
								<a href=index.php?ctl=employe&action=formEdit&id=".$ligne['id']."><img src='./vue/images/editer.png' height=30 width=30></a>
							 </td> 
						   </tr>";		
				}
				?>
		    </tbody>
  </table>   
        		  
</div>

