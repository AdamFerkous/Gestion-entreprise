<div class ="row">

<div class="container-fluid mt-3">
	<div class="d-flex justify-content-center p-1 mb-2">   
		<form action="index.php?ctl=metier&action=validEdit" method="POST">
   
			<div class="form-inline">
			  <label for="nomService">Nom du Métier: </label>
			  <input type="text" name = "num" class="form-control" value=<?php echo $unMetier['id']; ?>>
			  <input type="text" name = "nom" class="form-control" value=<?php echo $unMetier['nom']; ?>>   
			  <button type="submit" class="btn btn-primary">Modifier</button>
			</div>

		</form>
		
	 </div>
</div>


</div>