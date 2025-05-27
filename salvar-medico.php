<h1>Salvar médico.</h1>
<?php 
    switch (@$_REQUEST['acao']){
        case 'cadastrar':
            $nome = $_POST['nome_medico'];
            $crm = $_POST['crm_medico'];
            $especialidade = $_POST['especialidade'];

            $sql = "INSERT INTO medico (nome_medico,
                                        crm_medico,
                                        especialidade
                                        )VALUES (
                                            '{$nome}',
                                            '{$crm}',
                                            '{$especialidade}'
                                        )";
            $res = $conn->query($sql);

            if ($res==true) {
                print "<script>alert('Cadastrou com sucesso!');</script>";
                print "<script>location.href='?page=listar-medico';</script>";
            }else{
                print "<script>alert('Deu errado!');</script>";
                print "<script>location.href='?page=listar-medico';</script>";
              }
              case 'editar':
                $nome = $_POST['nome_medico'];
                $crm = $_POST['crm_medico'];
                $especialidade = $_POST['especialidade'];

                $sql = "UPDATE medico SET 
                                nome_medico='{$nome}',
                                crm_medico='{$crm}',
                                especialidade='{$especialidade}'
                        WHERE 
                                id_medico=".$_POST['id_medico'];

                $res = $conn->query($sql);

                if($res==true){
                    print "<script>alert('Cadastrado com sucesso!');</script>";
                    print "<script>location.href='?page=listar-medico';</script>";
                }else{
                    print "<script>alert('Editou com sucesso');</script>";
                    print "<script>location.href='?page=listar-medico';</script>";
                }
                break;
                case 'excluir':
                    $sql = "DELETE FROM medico WHERE id_medico=".$_REQUEST['id_medico'];

                    $res = $conn->query($sql);

                    if ($res==true) {
                        print "<script>alert('Excluiu com sucesso!');</script>";
                        print "<script>location.href='?page=listar-medico';</script>";
                    }else{
                        print "<script>alert('Deu errado!');</script>";
                        print "<script>location.href='?page=listar-medico';</script>";
    }
                    break;
}
?>