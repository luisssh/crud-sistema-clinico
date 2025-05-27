<link rel="stylesheet" href="css/style.css">
<h1>Editar Exame</h1>
<?php 
    $sql = "SELECT * FROM exame WHERE id_exame=".$_REQUEST['id_exame'];

    $res = $conn->query($sql);

    $row = $res->fetch_object();
?>
<form action="?page=salvar-exame" method="POST">
<input type="hidden" name="acao" value="cadastrar">
<div class="mb-3">
<label>Nome do Paciente</label>
    <select name="paciente_id_paciente" class="form-control">
        <option> -= Escolha um Paciente =- </option>
            <?php
            $sql_1 = "SELECT id_paciente, nome_paciente FROM paciente";
            $res_1 = $conn->query($sql_1);
            if ($res_1->num_rows > 0) {
                while ($row_1 = $res_1->fetch_object()) {
                    echo "<option value='".$row_1->id_paciente."'>".$row_1->nome_paciente."</option>";
                }
            } else {
                print "<option>Não há pacientes</option>";
            }
        ?>
    </select>        
</div>
<div class="mb-3">
<label>Nome do Médico</label>
    <select name="medico_id_medico" class="form-control">
        <option> -= Escolha um Médico =- </option>
        <?php
            $sql_2 = "SELECT id_medico, nome_medico FROM medico";
            $res_2 = $conn->query($sql_2);
            if ($res_2->num_rows > 0) {
                while ($row_2 = $res_2->fetch_object()) {
                    echo "<option value='".$row_2->id_medico."'>".$row_2->nome_medico."</option>";
                }
            } else {
                print "<option>Não há Médicos</option>";
            }
        ?>
    </select>        
</div>
<div class="mb-3">
        <label>Tipo do Exame</label>
        <input type="text" name="tipo_exame" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data do Exame</label>
        <input type="date" name="data_exame" class="form-control">
    </div>
    <div class="mb-3">
        <label>Hora do Exame</label>
        <input type="time" name="hora_exame" class="form-control">
    </div>
    <div class="mb-3">
        <label>Resultado do Exame</label>
        <textarea name="resultado_exame" class="form-control" rows="4"></textarea>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Salvar</button>
</div>
</form>
