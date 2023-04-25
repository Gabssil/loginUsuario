<?php
// Verifica se o usuário está logado
session_start();
if (!isset($_SESSION['username'])) {
  header('Location: index.php');
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Sistema de Votação</title>
</head>
<body class="bg-body-secondary">
	<div class="container text-center bg-white">
	<div class="row">   
            <div class="col bg-primary">
                <nav class="navbar bg-primary navbar-expand-lg" data-bs-theme="dark">
                <div class="container-fluid">
				<div class="mb-3" align="left">
                        <a class="navbar-brand" href="#">LOGIN</a>
                     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
                     </button>
                        </div>
                    </div>
                  </div>
                </nav>
            </div> 
  
     <h1>Bem-vindo a sua conta!</h1>
     <p>Seus dados estão protegidos.</p>
      <a href="logout.php">Sair</a>

     
     </body>
</html>
