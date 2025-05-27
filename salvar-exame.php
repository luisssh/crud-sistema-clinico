<?php
switch ($_REQUEST['acao']) {
    case 'cadastrar':
        $paciente_id = $_POST['paciente_id_paciente'];
        $medico_id = $_POST['medico_id_medico'];
        $tipo = $_POST['tipo_exame'];
        $data = $_POST['data_exame'];
        $hora = $_POST['hora_exame'];
        $resultado = $_POST['resultado_exame'];

        $sql = "INSERT INTO exame (
                            paciente_id_paciente, 
                            medico_id_medico, 
                            tipo_exame, 
                            data_exame, 
                            hora_exame, 
                            resultado_exame)
                VALUES (
                    '{$paciente_id}',
                    '{$medico_id}',
                    '{$tipo}',
                    '{$data}',
                    '{$hora}',
                    '{$resultado}')";

        $res = $conn->query($sql);

        if($res == true){
            print "<script>alert('Cadastrou com sucesso!');</script>";
            print "<script>location.href='?page=listar-exame';</script>";
        } else {
            print "<script>alert('Deu errado!');</script>";
            print "<script>location.href='?page=listar-exame';</script>";
        }
        break;

    case 'editar':
        $paciente_id = $_POST['paciente_id_paciente'];
        $medico_id = $_POST['medico_id_medico'];
        $tipo = $_POST['tipo_exame'];
        $data = $_POST['data_exame'];            
        $hora = $_POST['hora_exame'];
        $resultado = $_POST['resultado_exame'];

        $sql = "UPDATE exame SET
                    paciente_id_paciente='{$paciente_id}',
                    medico_id_medico='{$medico_id}',
                    tipo_exame='{$tipo}',
                    data_exame='{$data}',
                    hora_exame='{$hora}',
                    resultado_exame='{$resultado}'
                WHERE id_exame=".$_REQUEST["id_exame"];

        $res = $conn->query($sql);

        if($res == true){
            print "<script>alert('Editou com sucesso!');</script>";
            print "<script>location.href='?page=listar-exame';</script>";
        } else {
            print "<script>alert('Deu errado!');</script>";
            print "<script>location.href='?page=listar-exame';</script>";
        }
        break;

    case 'excluir':
        $sql = "DELETE FROM exame WHERE id_exame=".$_REQUEST["id_exame"];
        $res = $conn->query($sql);

        if($res == true){
            print "<script>alert('Excluiu com sucesso!');</script>";
            print "<script>location.href='?page=listar-exame';</script>";
        } else {
            print "<script>alert('Deu errado!');</script>";
            print "<script>location.href='?page=listar-exame';</script>";
        }
        break;
}
?>
