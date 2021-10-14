<?php

    if(isset($_POST['submit'])){

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $data_nasc = $_POST['data'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];

        $result = mysqli_querry($conexao, "INSERT INTO usuarios(nome, email, telefone, data_nasc, cidade, estado) VALUES ('$nome', '$email', '$telefone', '$data_nasc', '$cidade', '$estado')");
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Cadastro de usuário</title>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700&family=Josefin+Slab:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600&family=Mulish:ital,wght@0,200;0,300;0,400;1,200;1,300&display=swap');
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');


/*Variavel das fontes*/
:root{
    --font-primary:'Baloo Da 2', serif;
    --font-secundary:'Josefin Slab', serif;
    --font-action: 'Mulish', serif;
}

/*Plano de fundo*/
body{
    background-image: linear-gradient( to right, #159957, #155799, rgba(0,0,0,0.8));
}

/*Formulário*/
.box{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgba(0,0,0,0.6);
    color: white;
    padding: 15px;
    border-radius: 5px;
    width: 28%;
}

fieldset{
    border: 3px solid #155799;
}

legend{
    border: 1px solid #155799;
    padding: 10px;
    text-align: center;
    background-color: #155799;
    border-radius: 5px;
    color: white;
    font-family: var(--font-primary);
    font-size: 1.5rem;
}

.inputBox{
    position: relative;
}

.input_user{
    background: none;
    border: none;
    outline: none;
    border-bottom: 1px solid white;
    font-family: var(--font-action);
    font-size: 15px;
    color: white;
    letter-spacing: 2px;
}

label{
    font-family: var(--font-action);
    font-size: 15px;
}

.label_input{
    position: absolute;
    top: 0px;
    left: 0px;
    pointer-events: none;
    transition: .5s;
}

.input_user:focus ~ .label_input, .input_user:valid ~ .label_input{
    top: -20px;
    font-size: 12px;
    color: #155799;
}

#data{
    border: none;
    padding: 8px;
    border-radius: 5px;
    outline: none;
    font-size: 14px;
    font-family: var(--font-action);
}

#submit{
    font-family: var(--font-action);
    color: #fff;
    letter-spacing: .1rem;
    text-transform: uppercase;
    background: #159957;  
    background: -webkit-linear-gradient(to right, #155799, #159957);  
    background: linear-gradient(to left, #155799, #159957); 
    padding: 1rem 2rem;
    border: none;
    width: 100%;
    border-radius: 5px;
    cursor: pointer;
}

#submit:hover{
    opacity: 0.8;
}
    </style>
</head>
<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend>Cadastro de usuário</legend>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="input_user" required>
                    <label for="name" class="label_input">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="input_user" required>
                    <label for="email" class="label_input">E-mail</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="input_user" required>
                    <label for="telefone" class="label_input">Telefone</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="data">Data de nascimento:</label>
                    <input type="date" name="data" id="data" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="input_user" required>
                    <label for="cidade" class="label_input">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="input_user" required>
                    <label for="estado" class="label_input">Estado</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
                <br><br>
            </fieldset>
        </form>
    </div>
</body>
</html>