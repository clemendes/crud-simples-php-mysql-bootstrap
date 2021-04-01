<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Alterar Registro</title>
  <!-- Estilos CSS -->
  <link href="./estilos/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- JavaScript Bootstrap + Jquery -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <?php
    $id = filter_input(INPUT_GET, "id");
    $nome = filter_input(INPUT_GET, "nome");
    $curso = filter_input(INPUT_GET, "curso");
    $nota = filter_input(INPUT_GET, "nota");
  ?>

</head>
<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="index.php">Home</a>
	    <a class="navbar-brand" href="#">Menu2</a>
	    <a class="navbar-brand" href="#">Menu3</a>
    </nav>
  </header>
  <div class="container">
    <h3 class="mt-4">CRUD Simples com PHP + MySQL - [Listagem de Alunos]</h3>
    <br>
    <p>Alterar Registro</p>
      <form action="update.php">
        <input type="hidden" name="id" value="<?php echo $id ?>"/>
        <div class="form-group">
          <label for="inputnome">Nome</label>
          <input type="text" name="nome" class="form-control" id="nome" value="<?php echo $nome ?>" aria-describedby="nomeHelp" placeholder="Digite o Nome Completo">
        </div>
        <div class="form-group">
          <label for="inputcurso">Curso</label>
          <input type="text" name="curso" class="form-control" id="curso" value="<?php echo $curso ?>" aria-describedby="cursoHelp" placeholder="Digite o Curso">
        </div>
        <div class="form-group">
          <label for="inputnota">Nota</label>
          <input type="number" step="0.01" name="nota" class="form-control" id="nota" value="<?php echo $nota ?>" aria-describedby="notaHelp" placeholder="Digite a Nota">
        </div>
        <button type="submit" class="btn btn-primary" value="Alterar">Salvar</button>
      </form>
  </div>
<footer class="footer">
  <div class="container">
    <span class="text-muted">Desenvolvido por: Cleverson Mendes Faria</span>
  </div>
</footer>
</body>
</html>
