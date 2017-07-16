<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php 
        include 'layouts/head.inc'; 
        include 'layouts/header.inc'; 
    ?>
    <link rel="stylesheet" href="../../assets/css/stylesheet.css">
    <title>Login</title>
</head>
<body>
    <div class="form">
        <h1>Faça seu login:</h1><br>
        <form action="../controllers/LoginController.php" method="POST" enctype="multipart/form-data">
            <label> <h4>E-mail:</h4></label>
                <input type="email" name="user[email]" class="form-input" placeholder="Digite seu email" required>
            <label> <h4>Senha:</h4></label>
                <input type="password" name="user[password]" class="form-input" placeholder="Digite sua senha" required>
            <button type="submit" name="action" value="login" class="general-button">Entrar</button><br><br>
            <a href="recover.php">Esqueci senha</a>
        </form>
    </div>
</body>
</html>
