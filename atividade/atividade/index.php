<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Atividade 1.4 - DAPI</title>
  <!-- Estilos CSS -->
  <link href="./estilos/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- JavaScript Bootstrap + Jquery -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <?php
    $parametro = filter_input(INPUT_GET, "parametro");
    $mysqllink = mysqli_connect("localhost","root","","bd_atividade");
    if ($parametro) {
      $dados = mysqli_query($mysqllink, "select * from alunos where nome '$parametro%'");
    } else {
      $dados = mysqli_query($mysqllink, "select * from alunos");
    }
    $linha = mysqli_fetch_assoc($dados);
    $total = mysqli_num_rows($dados);
  ?>

</head>
<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Home</a>
	    <a class="navbar-brand" href="#">Menu2</a>
	    <a class="navbar-brand" href="#">Menu3</a>
    </nav>
  </header>
  <div class="container">
    <h3 class="mt-4">CRUD Simples com PHP + MySQL - [Listagem de Alunos]</h3>
    <div class="d-flex flex-row">
      <a class="btn btn-primary btn-sm" href="novo.php" role="button">Novo Registro</a>
    </div>
    <br>
    <table class="table">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nome</th>
        <th scope="col">Curso</th>
        <th scope="col">Nota</th>
        <th scope="col">Opções</th>
      </tr>

    <?php
      if($total) { do {
    ?>

      <tr>
        <th scope="row"><?php echo $linha['id'] ?></th>
        <td><?php echo $linha['nome'] ?></td>
        <td><?php echo $linha['curso'] ?></td>
        <td><?php echo $linha['nota'] ?></td>
        <td>
        <!-- Botões de Ações  -->
          <ul class="list-inline m-0">
            <li class="list-inline-item">
              <a class="btn btn-warning btn-sm" href="<?php echo "alterar.php?id=" . $linha['id'] . "&nome=" . $linha['nome'] . "&curso=" . $linha['curso'] . "&nota=" . $linha['nota'] ?>" role="button">Alterar</a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-danger btn-sm" href="<?php echo "delete.php?id=" . $linha['id'] ?>" role="button">Excluir</a>
            </li>
          </ul>
        </td>
      </tr>

    <?php
      } while($linha = mysqli_fetch_assoc($dados));
        mysqli_free_result($dados);
      }
        mysqli_close($mysqllink);
    ?>

    </table>
  </div>
  <footer class="footer">
    <div class="container">
      <span class="text-muted">Desenvolvido por: Cleverson Mendes Faria</span>
    </div>
  </footer>
</body>
</html>
