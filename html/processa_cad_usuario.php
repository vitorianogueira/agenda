<?php
	include('buscaconect.php');
	$data = $_POST['data'];
	$horario = $_POST['horario'];
	$local = $_POST['local'];
	$endereco = $_POST['endereco'];
	$funcionario = $_POST['funcionario'];
  
	
	
	$sql = $mysqli->prepare("INSERT INTO compromissos (data, horario,local,endereco,funcionario) VALUES (?, ?, ?, ?, ?)");
    $sql->bind_param("sssss", $data,$horario,$local,$endereco,$funcionario);


	$sql-> execute ();

	$sql-> store_result();

	$result=$sql -> affected_rows;

	if ($result >0)
	{
		echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadastro.php'>
					<script type=\"text/javascript\">
						alert(\"Compromisso cadastrado com Sucesso.\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadastro.php'>
					<script type=\"text/javascript\">
						alert(\"O Compromisso não foi cadastrado, favor preencher todos os dados.\");
					</script>
				";	
			}
?>


