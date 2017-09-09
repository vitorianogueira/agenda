<?php

     

	include('buscaconect.php');
	$funcionario = $_POST['funcionario'];
    $data = $_POST ['data'];
	$local = $_POST ['local'];
	
	
	

	
$query = ("DELETE FROM compromissos WHERE funcionario LIKE '%".$funcionario."%' AND local LIKE '%".$local."%' ");
$deleta = $mysqli->query($query);

	
		if(empty ($funcionario)) {
    print "<script> alert('Favor Preencher Nome do funcionario e Local!');
       location.href='Excluir.php';
        </script>";
					
		}else{ 
	echo "<script> alert('Exclusão realizada com Sucesso!');
       location.href='excluir.php';
        </script>";
		
		
		
    echo "</p>";
	
	

	
	}	
?>
   
	