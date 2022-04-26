<html>

    <head>
        <title>formulario</title>
    </head>
    
    <body>
        <h1>Cadastro Pessoa Fisíca</h1>
        <form method="GET" action="Resultado.class.php"> <!--action transfere a página local para a página escrita-->
            <label for="lblNome">Nome:</label><br>
            <input type="text" name="txtNome"><br>
            <label for="lblEmail">Email:</label><br>
            <input type="text" name="txtEmail"><br>
            <label for="lblBairro">Bairro:</label><br>
            <input type="text" name="txtBairro"><br>
            <label for="lblCep">Cep:</label><br>
            <input type="text" name="txtCep"><br><br>
            <button>Cadastrar</button>
        </form>
    </body>
</html>