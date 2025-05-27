<head>
<link rel="stylesheet" href="css/style.css">
</head>
<h1>Cadastrar paciente</h1>
<form action="?page=salvar-paciente" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label> Nome do paciente</label>
        <input type="text" name="nome_paciente" class="form-control">
    </div>
    <div class="mb-3">
        <label>CPF</label>
        <input type="text" name="cpf_paciente" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data de nascimento</label>
        <input type="date" name="dt_nasc_paciente" class="form-control">
    </div>
    <div class="mb-3">
        <label>Sexo</label>
        <select name="sexo_paciente" class="form-control">
            <option value="">Selecione</option>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
            <option value="Outro">Outros</option>
        </select>
    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input type="text" name="fone_paciente" class="form-control">
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="mail" name="email_paciente" class="form-control">
    </div>
    <div class="mb-3">
        <label>Endereço</label>
        <input type="text" name="endereco_paciente" class="form-control">
    </div>
    <div class="mb-3">
    <button type="submit" class="btn btn-primary">Salvar</button>
    </div>

</form>