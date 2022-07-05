<?php
  $conexao = pg_connect("postgres://yjccnmsh:8Kk3fi9hoodXEvNy-LjcYe2wrmSn9SEX@kesavan.db.elephantsql.com/yjccnmsh") or
  die ("Não foi possível conectar ao servidor PostGreSQL");

  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $senha = sha1($_POST['senha']);
  $idade = $_POST["idade"];

  $result = pg_query($conexao, "INSERT INTO usuario (nome, email, senha,idade) VALUES ('".$nome."', '".$email."', '".$senha."', '{".$idade."}');");
  if(!$result) {
      echo "Erro ao cadastrar usuário!";
  } else {
     header('Location: index.php?msg=Usuario cadastrado com sucesso!');
     die();
  }
?>