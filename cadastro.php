<?php
session_start();
include('connection.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $erro = false;
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senha = $senha . "%gJ78#df67";
    $confirmar = $_POST['confirma-senha']; 
    $senha = md5($senha);

    if($senha = $confimar )
    {
        $sql = "SELECT COUNT(id) FROM usuarios
        WHERE email = '$email'";
    $result = mysqli_query($link, $sql);
    while ($tbl = mysqli_fetch_array($result)) {
        $total = $tbl[0];
    }
    if ($total != 0) {
        header('Location: cadastro.php?msg_erro=Email já cadastrado');
        exit();
    }

    $sql = "INSERT INTO usuarios (nome, email, senha)
        VALUES ('$nome', '$email', '$senha') ";

    if (!$erro) 
    {
        mysqli_query($link, $sql);
        header("location: index.php");
    }
    
    }
    else
    {
        
    }


}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Sistema de Feedback</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <div class="container">
            <h1>Sistema de Feedback</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Início</a></li>
                    <li><a href="feedback.php">Feedback</a></li>
                </ul>
                <div class="auth-buttons">
                    <a href="cadastro.php" class="btn">Cadastro</a>
                    <a href="login.php" class="btn">Login</a>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <h2>Cadastro</h2>
            <form action="#" method="post" class="form-cadastro">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>

                <label for="confirma-senha">Confirme a Senha:</label>
                <input type="password" id="confirma-senha" name="confirma-senha" required>

                <button type="submit" class="btn">Cadastrar</button>
            </form>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 Sistema de Feedback. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>

</html>