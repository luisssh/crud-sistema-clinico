<?php
include 'config.php';

$username = $_POST['username'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

$sql_check = "SELECT * FROM usuarios WHERE username = '$username'";
$result = $conn->query($sql_check);

if ($result->num_rows > 0) {
    print "<script>alert('Usuário já existe!');</script>";
    print "<script>location.href='cadastro.php';</script>";
} else {
    $sql = "INSERT INTO usuarios (username, senha) VALUES ('$username', '$senha')";
    
    if ($conn->query($sql) === TRUE) {
        print "<script>alert('Usuário cadastrado com sucesso!');</script>";
        print "<script>location.href='login.php';</script>";
    } else {
        print "<script>alert('Erro ao cadastrar usuário: " . $conn->error . "');</script>";
        print "<script>location.href='cadastro.php';</script>";
    }
}

$conn->close();
?>
