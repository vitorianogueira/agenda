

<html>
<head>
<title>Excluir Compromissos</title>
</head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<body style="background-color:silver;"><br>
	<center><h1>Excluir Compromisso</h1></center><br>	

	<center>
		<table>
	<tr>
		<form method="POST" action="processa_excluir.php">
		<td>Data:</td> 
		<td><input type="date" name="data" pattern="" min="" max="" size="8"/> 
		Horário: <input type="time" name= "horario" size="3"><br /></td>
	</tr>	
	<tr>
		<td>Local:</td>
		<td><input type="text" name="local" size="40"/><br /></td>
	</tr>
    <tr>
		<td>Funcionario:</td> 
		<td><input type="text" name="funcionario" size="40"/><br /></td>
				
		</tr>
		</table><br>
		<input type="submit" value="Excluir" name="ok">
		<input type="button" onclick="reset()" value="Limpar">
		</center>
		</form>
  <div align="center">noguei₢a  </div>
	
	</body>
</html>