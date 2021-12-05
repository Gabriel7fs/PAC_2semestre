
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="formulario.css">
    <!--Icone-->
    <link rel="apple-touch-icon" sizes="180x180" href="img">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/mavefavicon.png">
    <link rel="manifest" href="/site.webmanifest">
    <title>Login</title>
</head>
<body>
    
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
        </ul>
    </nav>
    
    <div class="box">
        <form method="post" action="testLogin.php" id="formlogin" name="formlogin">
            <fieldset>
                <legend>Login</legend>
                <div class="inputBox">
                    <input type="text" name="usuario" id="usuario" class="input_user" required>
                    <label for="usuario" class="label_input">Usuario</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="input_user" required>
                    <label for="senha" class="label_input">Senha</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit" a href="jogar.php" value="Logar">
                <br><br>
                <button id="submit" onclick="window.location.href = 'inserirCadastro.php'" value="Cadastrar-se">Cadastrar-se</button> 
            </fieldset>
        </form>
    </div>
</body>
</html>