<?php

  $id = filter_input(INPUT_GET, "id");

  $link = mysqli_connect("localhost","root","","bd_atividade");

  $erro = 0;
  if(empty($id))
  {echo "<br><h2>ID Informado não corresponde a nenhum registro no BD.</h2><br>"; $erro=1;}

  if ($link) {
    if ($erro==0){
      $query = mysqli_query($link, "delete from alunos where id='$id';");
      if($query) {
        header("Location: index.php");
      } else {
        die("Erro: " . mysqli_error($link));
      }
    }
  } else {
    die("Erro: " . mysqli_error($link));
  }

  ?>
