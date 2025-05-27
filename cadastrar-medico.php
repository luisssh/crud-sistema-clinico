<head>
<link rel="stylesheet" href="css/style.css">
</head>
<h1>Cadastrar médico</h1>
<form action="?page=salvar-medico" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label> Nome do médico</label>
        <input type="text" name="nome_medico" class="form-control">
    </div>
    <div class="mb-3">
        <label>CRM</label>
        <input type="text" name="crm_medico" class="form-control">
    </div>
    <div class="mb-3">
        <label>Especialidade</label>
        <input type="text" name="especialidade" class="form-control">
    </div>
    <div class="mb-3">
    <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</form>
