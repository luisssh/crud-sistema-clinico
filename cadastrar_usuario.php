<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" text= "text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/fontawesome/css/all.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon_io/site.webmanifest">
    <link rel="stylesheet" href="cadastro.css">
</head>
<body>
    <main>
        <div id="cadastro">
            <form action="salvar_usuario.php" method="POST">
                <h1>Cadastro</h1>
                <input 
                    type="text" 
                    name="username" 
                    placeholder="Informe seu usuário:" 
                    class="form-control" 
                >
                <input 
                    type="password" 
                    name="senha" 
                    placeholder="Informe sua senha:" 
                    class="form-control" 
                >
                <button type="submit">CADASTRAR</button>
                <a href="login.php">Voltar para o Login</a>
            </form>
        </div>
    </main>
</body>
</html>
