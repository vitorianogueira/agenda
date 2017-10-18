<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Compromissos</h2>

<form action="edit.php?id=<?php echo $customer['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome do Funcionário</label>
      <input type="text" class="form-control" name="customer['name']" value="<?php echo $customer['name']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">Data</label>
      <input type="text" class="form-control" name="customer['data']" value="<?php echo $customer['data']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Horário</label>
      <input type="text" class="form-control" name="customer['horario']" value="<?php echo $customer['horario']; ?>">
    </div>
  </div>
  
  <div class="row">
  <div class="form-group col-md-5">
      <label for="campo1">Local</label>
      <input type="text" class="form-control" name="customer['local']" value="<?php echo $customer['local']; ?>">
    </div>
  
    <div class="form-group col-md-5">
      <label for="campo2">Endereço</label>
      <input type="text" class="form-control" name="customer['address']" value="<?php echo $customer['address']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo3">Bairro</label>
      <input type="text" class="form-control" name="customer['hood']" value="<?php echo $customer['hood']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo4">CEP</label>
      <input type="text" class="form-control" name="customer['zip_code']" value="<?php echo $customer['zip_code']; ?>">
    </div>

	<div class="form-group col-md-1">
      <label for="campo5">UF</label>
      <input type="text" class="form-control" name="customer['state']" value="<?php echo $customer['state']; ?>">
    </div>
	
    <div class="form-group col-md-2">
      <label for="campo6">Data de Cadastro</label>
      <input type="text" class="form-control" name="customer['created']" disabled value="<?php echo $customer['created']; ?>">
    </div>
  </div>
  
  <div class="row">
    <div class="form-group col-md-3">
      <label for="campo1">Cidade</label>
      <input type="text" class="form-control" name="customer['city']" value="<?php echo $customer['city']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">Telefone</label>
      <input type="text" class="form-control" name="customer['phone']" value="<?php echo $customer['phone']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Celular</label>
      <input type="text" class="form-control" name="customer['mobile']" value="<?php echo $customer['mobile']; ?>">
    </div>

    
	
  
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
	  <button type="reset" class="btn btn-reset">Limpar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>