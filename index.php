<form method="post">
<?php

if($_POST){
	if(array_key_exists('nome', $_POST)){
		$primeiraEtapa = $_POST ['nome'];
		if($primeiraEtapa == 'ir a cozinha'){
	    	echo '<p>Segunda etapa: <input type="text" name="nome2"/></p>';
	   	 	echo '2 xicaras de acucar';
	    }else{
	    	echo '<p>Primeira etapa: <input type="text" name="nome"/></p>';
	    }
   }

   if(array_key_exists('nome2', $_POST)){
   	   $segundaEtapa = $_POST ['nome2'];
	   if($segundaEtapa == '2 xicaras de acucar'){
	   		echo '<p>terceira etapa: <input type="text" name="nome3"/></p>';
	   		echo '3 xicaras de farinha de trigo';
	   	}else{
	   		echo '<p>Segunda etapa: <input type="text" name="nome2"/></p>';
	   	}
  	}

 if(array_key_exists('nome3', $_POST)){
		$terceiraEtapa = $_POST ['nome3'];
		if($terceiraEtapa == '3 xicaras de farinha de trigo'){
	    	echo '<p>quarta etapa: <input type="text" name="nome4"/></p>';
	   	 	echo '4 colheres de margarina';
	    }else{
	    	echo '<p>terceira etapa: <input type="text" name="nome3"/></p>';
	    }
   }

   if(array_key_exists('nome4', $_POST)){
		$quartaEtapa = $_POST ['nome4'];
		if($quartaEtapa == '4 colheres de margarina'){
	    	echo '<p>quinta etapa: <input type="text" name="nome5"/></p>';
	   	 	echo '3 ovos';
	    }else{
	    	echo '<p>quarta etapa: <input type="text" name="nome3"/></p>';
	    }
   }

   if(array_key_exists('nome5', $_POST)){
		$quintaEtapa = $_POST ['nome5'];
		if($quintaEtapa == '3 ovos'){
	    	echo '<p>sexta etapa: <input type="text" name="nome6"/></p>';
	   	 	echo '1 xicara de leite';
	    }else{
	    	echo '<p>Primeira etapa: <input type="text" name="nome4"/></p>';
	    }
   }

   if(array_key_exists('nome6', $_POST)){
		$sextaEtapa = $_POST ['nome6'];
		if($sextaEtapa == '1 xicara de leite'){
	    	echo '<p>sexta etapa: <input type="text" name="nome7"/></p>';
	   	 	echo '1 colher de sopa de fermento';
	    }else{
	    	echo '<p>Primeira etapa: <input type="text" name="nome5"/></p>';
	    }
   }

   if(array_key_exists('nome7', $_POST)){
		$setimaEtapa = $_POST ['nome7'];
		if($setimaEtapa == '1 colher de sopa de fermento'){
	    	echo '<p>setima etapa: <input type="text" name="nome8"/></p>';
	   	 	echo 'leve ao forno por 40 min';
	    }else{
	    	echo '<p>Primeira etapa: <input type="text" name="nome6"/></p>';
	    }
   }

   if(array_key_exists('nome8', $_POST)){
		$oitavaEtapa = $_POST ['nome8'];
		if($oitavaEtapa == 'leve ao forno por 40 min'){
	    	echo '<p>oitava etapa: <input type="text" name="nome9"/></p>';
	   	 	echo 'agora reza';
	    }else{
	    	echo '<p>Primeira etapa: <input type="text" name="nome7"/></p>';
	    }
   }

   if(array_key_exists('nome9', $_POST)){
		$nonaEtapa = $_POST ['nome9'];
		if($nonaEtapa == 'agora reza'){
	    	//echo '<p>nona etapa: <input type="text" name="nome9"/></p>';
	   	 	echo 'bolo feito';
	    }else{
	    	echo '<p>Primeira etapa: <input type="text" name="nome"/></p>';
	    }
   }
} else{
	echo '<p>Primeira etapa: <input type="text" name="nome"/></p>';
	
 }

?>


<p><input type="submit" value="enviar"/></p>
</form>