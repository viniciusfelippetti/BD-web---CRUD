<?php
  $conexao = pg_connect("postgres://yjccnmsh:8Kk3fi9hoodXEvNy-LjcYe2wrmSn9SEX@kesavan.db.elephantsql.com/yjccnmsh") or
  die ("Não foi possível conectar ao servidor PostGreSQL");

  $result = pg_query($conexao, "SELECT * FROM usuario;");
  if (!$result) {
    echo "Ocorreu um erro.\n";
    exit;
  }

  while ($row = pg_fetch_assoc($result)) {
    echo $row['id']." ".$row['nome']." ".$row['email']."</br>";
  }

  echo sha1('123456')
   
?>