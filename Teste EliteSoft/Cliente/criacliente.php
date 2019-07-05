<!DOCTYPE html>
<html><head><title>Lista de Clientes</title></head>
<body>
<div class="container">
    <h2>Incluir novo cliente</h2>
    <form action="gravacliente.php" method="post">
        <table>
            <tr><td>Nome</td><td><input name="nome" type="text" /> </td></tr>
            <tr><td>UF</td><td><input name="uf" type="text" /> </td></tr>
            <tr><td></td><td><input class="btn" name="bt" type="submit" value="gravar" /> </td></tr>
        </table>
    </form>
</div>
</body>
</html>