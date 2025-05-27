<?php
require 'config.php';
require 'dompdf/vendor/autoload.php';

use Dompdf\Dompdf;

$conn = new mysqli(HOST, USER, PASS, BASE);

if ($conn->connect_error) {
    die("Erro ao conectar ao banco de dados: " . $conn->connect_error);
}

$id_exame = isset($_GET['id_exame']) ? intval($_GET['id_exame']) : 0;

if ($id_exame > 0) {
    $sql = "SELECT e.*, p.nome_paciente, m.nome_medico 
            FROM exame AS e
            INNER JOIN paciente AS p ON p.id_paciente = e.paciente_id_paciente
            INNER JOIN medico AS m ON m.id_medico = e.medico_id_medico
            WHERE e.id_exame = $id_exame";

    $res = $conn->query($sql);

    if ($res->num_rows > 0) {
        $row = $res->fetch_object();

        $data_exame_formatada = date('d/m/Y', strtotime($row->data_exame));

        $html = "
        <h1 style='text-align: center;'>Pedido de Exames</h1><br><br>
        <p style='text-align: justify; font-size: 20px; line-height: 1.6;'>
            Eu, <strong>{$row->nome_medico}</strong>, solicito ao paciente <strong>{$row->nome_paciente}</strong> 
            a realização do exame do tipo <strong>{$row->tipo_exame}</strong>, com o objetivo de obter informações relevantes 
            para o diagnóstico e tratamento. 
        </p>
        <p style='text-align: justify; font-size: 20px; line-height: 1.6;'>
            O exame foi agendado para a data <strong>{$data_exame_formatada}</strong>, no horário de <strong>{$row->hora_exame}</strong>.
        </p>
        <p style='text-align: justify; font-size: 20px; line-height: 1.6;'>
            Resultado do exame (se aplicável): <strong>{$row->resultado_exame}</strong>.
        </p>
        <br><br>
        <div style='position: absolute; bottom: 50px; text-align: center; width: 100%;'>
            ________________________________<br>
            Carimbo e assinatura do médico
        </div>
        ";

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        $dompdf->stream("pedido_exame_$id_exame.pdf", ["Attachment" => true]);
    } else {
        echo "Exame não encontrado.";
    }
} else {
    echo "ID do exame não foi fornecido ou é inválido.";
}
?>
