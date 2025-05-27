<link rel="stylesheet" href="css/style.css">
<h1>Listar  Exame</h1>
<?php
	$sql = "SELECT * FROM exame AS e
			INNER JOIN paciente AS p
			ON p.id_paciente = e.paciente_id_paciente
			INNER JOIN medico AS m
			ON m.id_medico = e.medico_id_medico";			

	$res = $conn->query($sql);

	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Médico</th>";
		print "<th>Paciente</th>";		
        print "<th>Tipo</th>";
		print "<th>Data</th>";
		print "<th>Hora</th>";
		print "<th>Resultado</th>";
		print "<th>Ações</th>";
		print "</tr>";
		$count = 1;
		while ($row = $res->fetch_object()) {
			$data_formatada= date('d/m/y', strtotime($row->data_exame));

			print "<tr>";
            print "<td>".$count++."</td>";
			print "<td>".$row->nome_medico."</td>";
			print "<td>".$row->nome_paciente."</td>";
			print "<td>".$row->tipo_exame."</td>";
			print "<td>".$data_formatada."</td>";
			print "<td>".$row->hora_exame."</td>";
			print "<td>".$row->resultado_exame."</td>";
			print "<td>
						<button class='btn btn-success' onclick=\"location.href='?page=editar-exame&id_exame=".$row->id_exame."';\">Editar</button>

						<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-exame&acao=excluir&id_exame=".$row->id_exame."';}else{false;}\">Excluir</button>
						
						<button class='btn btn-dark' onclick=\"location.href='gerar-pdf.php?id_exame=".$row->id_exame."';\">Gerar PDF</button>
			       </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultado";
	}