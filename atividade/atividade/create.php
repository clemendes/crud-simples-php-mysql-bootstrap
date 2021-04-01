<?php

$nome = filter_input(INPUT_GET, "nome");
$curso = filter_input(INPUT_GET, "curso");
$nota = filter_input(INPUT_GET, "nota");
$link = mysqli_connect("localhost","root","","bd_atividade");

$erro = 0;
if(empty($nome) OR strstr($nome, '')==FALSE)
{echo "<br><h2> Favor digitar o NOME corretamente.</h2><br>"; $erro=1;}
if(empty($curso) OR strstr($curso, '')==FALSE)
{echo "<br><h2> Favor digitar o CURSO corretamente.</h2><br>"; $erro=1;}
if(empty($nota))
{echo "<br><h2> Favor digitar a NOTA corretamente.</h2><br>"; $erro=1;}

if ($link) {
  if ($erro==0){
    $query = mysqli_query($link, "insert into alunos VALUES ('', '$nome', '$curso', '$nota');");
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
