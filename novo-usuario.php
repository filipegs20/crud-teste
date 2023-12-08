<h1> Novo Usuário </h1>

<form action="?page=salvar" method="POST">

    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <Input type="text" name="nome" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <Input type="email" name="email" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <Input type="password" id="senha" name="senha" class="form-control" required>
    </div>
    <div id="politicas-senha"></div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <Input type="date" name="data_nasc" class="data_nascimento" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn-btn-primery">Enviar</button>   
    </div>
    
</form>

