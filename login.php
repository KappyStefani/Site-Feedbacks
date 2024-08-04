<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistema de Feedback</title>
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
            <h2>Login</h2>
            <form action="#" method="post" class="form-login">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>

                <button type="submit" class="btn">Login</button>
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
