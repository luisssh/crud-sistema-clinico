<?php 
switch (@$_REQUEST['acao']){
    case 'cadastrar':
        $nome = $_POST['nome_paciente'];
        $cpf = $_POST['cpf_paciente'];
        $datadenasc = $_POST['dt_nasc_paciente'];
        $sexo = $_POST['sexo_paciente'];
        $telefone = $_POST['fone_paciente'];
        $email = $_POST['email_paciente'];
        $endereco = $_POST['endereco_paciente'];

        $sql = "INSERT INTO paciente (nome_paciente,
                                    cpf_paciente,
                                    dt_nasc_paciente,
                                    sexo_paciente,
                                    fone_paciente,
                                    email_paciente,
                                    endereco_paciente
                                    )VALUES (
                                        '{$nome}',
                                        '{$cpf}',
                                        '{$datadenasc}',
                                        '{$sexo}',
                                        '{$telefone}',
                                        '{$email}',
                                        '{$endereco}'
                                    )";
        $res = $conn->query($sql);

        if ($res==true) {
            print "<script>alert('Cadastrou com sucesso!');</script>";
            print "<script>location.href='?page=listar-paciente';</script>";
        }else{
            print "<script>alert('Deu errado!');</script>";
            print "<script>location.href='?page=listar-paciente';</script>";
          }
          break;
          case 'editar';
          $nome = $_POST['nome_paciente'];
          $cpf = $_POST['cpf_paciente'];
          $dt_nasc = $_POST['dt_nasc_paciente'];
          $sexo = $_POST['sexo_paciente'];
          $telefone = $_POST['fone_paciente'];
          $email = $_POST['email_paciente'];
          $endereco = $_POST['endereco_paciente'];


          $sql = "UPDATE paciente SET 
                        nome_paciente='{$nome}',
                        cpf_paciente='{$cpf}',
                        dt_nasc_paciente='{$dt_nasc}',
                        sexo_paciente='{$sexo}',
                        fone_paciente='{$telefone}',
                        email_paciente='{$email}',
                        endereco_paciente='{$endereco}'
                  WHERE 
                          id_paciente=".$_POST['id_paciente'];

          $res = $conn->query($sql);

          if($res==true){
              print "<script>alert('Cadastrado com sucesso!');</script>";
              print "<script>location.href='?page=listar-paciente';</script>";
          }else{
              print "<script>alert('Editou com sucesso');</script>";
              print "<script>location.href='?page=listar-paciente';</script>";
          }
          break;
          case 'excluir':
              $sql = "DELETE FROM paciente WHERE id_paciente=".$_REQUEST['id_paciente'];

              $res = $conn->query($sql);

              if ($res==true) {
                  print "<script>alert('Excluiu com sucesso!');</script>";
                  print "<script>location.href='?page=listar-paciente';</script>";
              }else{
                  print "<script>alert('Deu errado!');</script>";
                  print "<script>location.href='?page=listar-paciente';</script>";
}
              break;
}
?> 