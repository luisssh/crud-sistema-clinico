<link rel="stylesheet" href="css/style.css">
<h1>Editar paciente</h1>
<?php 
    $sql = "SELECT * FROM paciente WHERE id_paciente=".$_REQUEST['id_paciente'];

    $res = $conn->query($sql);

    $row = $res->fetch_object();
?>
<form action="?page=salvar-paciente" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_paciente" value="<?php print $row->id_paciente; ?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome_paciente" class="form-control" value="<?php print $row->nome_paciente; ?>">
    </div>
    <div class="mb-3">
        <label>CPF</label>
        <input type="text" name="cpf_paciente" class="form-control" value="<?php print $row->cpf_paciente; ?>">
    </div>
    <div class="mb-3">
        <label>Data de nascimento</label>
        <input type="date" name="dt_nasc_paciente" class="form-control" value="<?php print $row->dt_nasc_paciente; ?>">
    </div>
    <div class="mb-3">
        <label>Sexo</label>
        <input type="text" name="sexo_paciente" class="form-control" value="<?php print $row->sexo_paciente; ?>">
    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input type="text" name="fone_paciente" class="form-control" value="<?php print $row->fone_paciente; ?>">
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email_paciente" class="form-control" value="<?php print $row->email_paciente; ?>">
    </div>
    <div class="mb-3">
        <label>Endereço</label>
        <input type="text" name="endereco_paciente" class="form-control" value="<?php print $row->endereco_paciente; ?>">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>

</form> 