<?php

      $conexao = pg_connect("postgres://yjccnmsh:8Kk3fi9hoodXEvNy-LjcYe2wrmSn9SEX@kesavan.db.elephantsql.com/yjccnmsh") or
  die ("Não foi possível conectar ao servidor PostGreSQL");
       
      $sql = "DELETE from usuario WHERE id='".$_POST['id']."'";

      $result = pg_query($conexao, $sql);
      if(!$result) {
          echo "Erro ao cadastrar usuário!";
          echo "<br/>Error: " . $sql . "<br>" . $conn->error;
      } else {
          header('Location: home.php?msg=Usuario removido com sucesso!');
          die();
      }
      pg_close($conexao);
?>