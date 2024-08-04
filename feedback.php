<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deixar Feedback - Sistema de Feedback</title>
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
            <h2>Deixar Feedback</h2>
            <form action="process_feedback.php" method="post" class="form-feedback">
                <label for="produto">Produto/Serviço:</label>
                <select id="produto" name="produto_id" required>
                    <option value="1">Produto A</option>
                    <option value="2">Produto B</option>
                    <option value="3">Serviço A</option>
                    <!-- Adicione outras opções conforme necessário -->
                </select>

                <label for="comentario">Comentário:</label>
                <textarea id="comentario" name="comentario" rows="4" required></textarea>

                <label for="avaliacao">Avaliação:</label>
                <select id="avaliacao" name="avaliacao" required>
                    <option value="1">1 - Muito Ruim</option>
                    <option value="2">2 - Ruim</option>
                    <option value="3">3 - Regular</option>
                    <option value="4">4 - Bom</option>
                    <option value="5">5 - Excelente</option>
                </select>

                <button type="submit" class="btn">Enviar Feedback</button>
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
