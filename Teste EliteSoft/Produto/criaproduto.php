<!DOCTYPE html>
<html><head><title>Adicionar Produto</title></head>
<body>
<div class="container">
    <h2>Incluir novo produto</h2>
    <form action="gravaproduto.php" method="post">
        <table>
            <tr><td>Nome</td><td><input name="nome" type="text" /> </td></tr>
            <tr><td>Descrição</td><td><input name="descricao" type="text" /> </td></tr>
            <tr><td></td><td><input class="btn" name="bt" type="submit" value="gravar" /> </td></tr>
        </table>
    </form>
</div>
</body>
</html>