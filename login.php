<html>
    <head>
        <title>Login de Usuários</title>
    </head>
    <body>
       <header>
            <h1>Login</h1>
            <p>Sistema para Componente Curricular Banco de Dados para Web</P>
       </header>
       <span> 
         <?php
                if($_GET['msg']) {
                    echo $_GET['msg'].'</br>';
                }
         ?>
       </span>

    <form action="validar_usuario.php" method="post">
        E-mail: 
        <input type="text" name="email">
        Senha: 
        <input type="password" name="senha">
        <input type="submit" value="Entrar">
    </form>

    <footer>
        <p>SISTEMA BDWEB</p>
       <p><a href="malito:felippettivinicius@gmail.com">felippettivinicius@gmail.com</a></p>
    </footer>
    </body>
</html>