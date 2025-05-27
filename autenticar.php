<?php
include 'config.php';

$username = $_POST['username'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE username = '$username'";
$res = $conn->query($sql);

if ($res->num_rows > 0) {
    $user = $res->fetch_object();

    if (password_verify($senha, $user->senha)) {
        session_start();
        $_SESSION['usuario'] = $user->username;
        print "<script>alert('Login realizado com sucesso!');</script>";
        print "<script>location.href='index.php';</script>";
        exit;
    } else {
        print "<script>alert('Senha incorreta.');</script>";
        print "<script>location.href='login.php';</script>";
    }
} else {
    print "<script>alert('Usuário não encontrado.');</script>";
    print "<script>location.href='login.php';</script>";
}
?>
