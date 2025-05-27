<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Controle Clínico</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/fontawesome/css/all.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon_io/site.webmanifest">
    <link rel="stylesheet" href="login.css"> 
</head>
<body>                    
    <header>
    </header>

    <main>
        <div id="login">
            <div id="logar">
                <div id="inputs">
                    <form action="autenticar.php" method="POST">
                        <h1>Login</h1>

                        <input 
                            placeholder="Digite seu usuário:" 
                            type="text" 
                            name="username" 
                            class="form-control" 
                        >

                        <input 
                            placeholder="Digite sua senha:" 
                            type="password" 
                            name="senha" 
                            class="form-control" 
                        >
                    
                        <button type="submit" class="btn btn-primary">
                            LOGIN
                        </button>
                    </form>
                    <a href="cadastrar_usuario.php" class="btn btn-primary" id="cadastrarbotao">
                        CADASTRE-SE
                    </a>
                </div>
                <div id="cadastrar">
                    <section id="banner">
                        <img src="images/banner.png" alt="banner">
                        <div id="cadastro">
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>

    <footer>
    </footer>
</body>
</html>
