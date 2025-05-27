<link rel="stylesheet" href="css/style.css">
<h1>Listar paciente</h1>
<?php 
    $sql = "SELECT * FROM paciente";

    $res = $conn ->query($sql);

    $qtd = $res ->num_rows;

    if ($qtd > 0){
        print "<p> Encontrou <b>$qtd</b> resultado(s)</p>";
        print "<table class='table table-bordered table-striped table-hover'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>CPF</th>";
        print "<th>Data de Nacimento</th>";
        print "<th>Sexo</th>";
        print "<th>Telefone</th>";
        print "<th>E-mail</th>";
        print "<th>Endereço</th>";
        print "<th>Ações</th>";
        print "</tr>";
        $count = 1;
        while ($row = $res->fetch_object()){
            $data_formatada= date('d/m/y', strtotime($row->dt_nasc_paciente));
            print "<tr>";
            print "<td>".$count++."</td>";
            print "<td>".$row->nome_paciente."</td>";
            print "<td>".$row->cpf_paciente."</td>";
            print "<td>".$data_formatada."</td>";
            print "<td>".$row->sexo_paciente."</td>";
            print "<td>".$row->fone_paciente."</td>";
            print "<td>".$row->email_paciente."</td>";
            print "<td>".$row->endereco_paciente."</td>";
            print "<td> 

            <button class='btn btn-success' onclick=\"location.href='?page=editar-paciente&id_paciente=".$row->id_paciente."';\">Editar</button>

            <button class='btn btn-danger' onclick=\"if(confirm('Deseja excluir?')){location.href='?page=salvar-paciente&acao=excluir&id_paciente=".$row->id_paciente."';}else{false;}\">Excluir</button></td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "Não encontrou resultado";
    }
?>