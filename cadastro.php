<html>
    <head>
        <title>Cadastro de Usuários</title>
    </head>
    <body>
       <header>
            <h1>Cadastrar Usuário</h1>
            <p>Sitema para Componente Curricular Banco de Dados para Web</P>
       </header>

    <form action="salvar.php" method="post">
        Nome: 
        <input type="text" name="nome"><br>
        E-mail: 
        <input type="text" name="email"><br>
        Senha: 
        <input type="password" name="senha"><br>
        Idade:
        <input type="number" id="idade" name="idade" min="18" max="99"><br>   

        <input type="submit" value="Cadastrar">

    </form>

    <footer>
        <p>SISTEMA BDWEB</p>
        <p><a href="malito:felippettivinicius@gmail.com">felippettivinicius@gmail.com</a></p>
    </footer>
    </body>
</html>