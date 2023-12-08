<h1>Editar Usuário</h1>

<?php

$sql = "select * from usuários where id=". $_REQUEST["id"];
$res = $conn -> query($sql);
$row = $res->fetch_object(); //Se houver linhas de resultado, a próxima linha é buscada e transformada em um objeto utilizando $row = $res->fetch_object().
var_dump($row);
?>
<style>.opaco{ background-color: rgba(0, 0, 0, 0.2);}</style>
<form action="?page=salvar" method="POST"> 

    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>Nome</label>
        <Input type="text" name="nome" value="<?php print $row->nome;?>" class="form-control opaco" readonly>
    </div>                           <!-- esse comando em php é para atribuir os dados do cadastro já existente para facilitar sua alteração -->
    <div class="mb-3">
        <label>E-mail</label>
        <Input type="email" name="email" value="<?php print $row->email;?>" class="form-control opaco" readonly>
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <Input type="password" name="senha" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <Input type="date" name="data_nasc" value="<?php print $row->data_nasc;?>"class="data_nascimento">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn-btn-primery">Salvar</button>   
    </div>

</form>
