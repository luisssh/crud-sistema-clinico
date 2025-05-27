<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width-device-width,initial-scale-1">
<title>Sistema de Controle Clínico</title>
<link rel="stylesheet" text= "text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="fonts/fontawesome/css/all.min.css">
<link rel="apple-touch-icon" sizes="180x180" href="assets/favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/favicon_io/favicon-16x16.png">
<link rel="manifest" href="assets/favicon_io/site.webmanifest">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sistema de Controle Clínico <i class="fa-regular fa-hospital"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">   Home   </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Médicos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-medico">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-medico">Listar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Pacientes   
          </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-paciente">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-paciente">Listar</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Consultas   
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-consulta">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-consulta">Listar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Exames   
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-exame">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-exame">Listar</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-danger" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>
<div class="conteiner">
    <div class="row-mt-5">
        <div class="col">
        <?php 
            include ('config.php');
            
                switch (@$_REQUEST ['page']) {
                    case 'cadastrar-medico':
                        include ('cadastrar-medico.php');
                        break;
                    case 'editar-medico':
                        include ('editar-medico.php');
                        break;
                    case 'listar-medico':
                        include ('listar-medico.php');
                         break;
                    case 'salvar-medico':
                        include ('salvar-medico.php');
                        break;

                        case 'cadastrar-paciente':
                            include ('cadastrar-paciente.php');
                            break;
                        case 'editar-paciente':
                            include ('editar-paciente.php');
                            break;
                        case 'listar-paciente':
                            include ('listar-paciente.php');
                             break;
                        case 'salvar-paciente':
                            include ('salvar-paciente.php');
                            break;

                            case 'cadastrar-consulta':
                                include ('cadastrar-consulta.php');
                                break;
                            case 'editar-consulta':
                                include ('editar-consulta.php');
                                break;
                            case 'listar-consulta':
                                include ('listar-consulta.php');
                                 break;
                            case 'salvar-consulta':
                                include ('salvar-consulta.php');
                                break;

                                case 'cadastrar-exame':
                                  include ('cadastrar-exame.php');
                                  break;
                              case 'editar-exame':
                                  include ('editar-exame.php');
                                  break;
                              case 'listar-exame':
                                  include ('listar-exame.php');
                                   break;
                              case 'salvar-exame':
                                  include ('salvar-exame.php');
                                  break;

                    default:
                        include ('home.php');
                }
            ?>
        </div>
    </div>
</div>

    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
