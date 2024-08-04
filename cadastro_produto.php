<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto - Sistema de Feedback</title>
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
                    <a href="cadastro.html" class="btn">Cadastro</a>
                    <a href="login.html" class="btn">Login</a>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <h2>Cadastro de Produto</h2>
            <form action="process_cadastro_produto.php" method="post" class="form-produto">
                <label for="nome">Nome do Produto/Serviço:</label>
                <input type="text" id="nome" name="nome" required>

                <label for="descricao">Descrição:</label>
                <textarea id="descricao" name="descricao" rows="4" required></textarea>

                <label for="preco">Preço:</label>
                <input type="text" id="preco" name="preco" required>

                <button type="submit" class="btn">Cadastrar Produto</button>
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