<body style="background-color:silver;">
<?php

	include('buscaconect.php');
	$funcionario = $_POST['funcionario'];
    $data = $_POST ['data'];
	
$query = ("SELECT Funcionario,Local,Data ,Horario,Endereco FROM compromissos WHERE funcionario LIKE '%".$funcionario."%' AND data LIKE '%".$data."%' ");
$result = $mysqli->query($query);

	print "<center><h1>Compromissos</h1></center>";
	print "<hr>";
	
	while($fetch = $result->fetch_assoc()) {
    foreach ($fetch as $field => $value) {
 	
	echo"<center> <strong>" .$field . "</strong>  : " . $value . '';
	}
	echo"<p>";	
	
	if(empty ($funcionario)) {
    print "<script> alert('Favor Preencher o nome do Funcionário!');
       location.href='pesquisa.php';
        </script>";
	
	if 	(!$funcionario){ 
	echo "<script> alert('Favor Preencher o nome do Funcionário!');
       location.href='pesquisa.php';
        </script>";
	
	
}
	}
	}
			
?>
   
	
	<form method= POST action= pesquisa.php>
	<input type=submit value=Voltar>