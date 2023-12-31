<?php
include('../session/conn.php');
include('../session/signup.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" type="image/png" href="../imgs/favicon.png"/>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
    <title>signup</title>
</head>

<body>
    <div class="all">
        <div class="left">
            <img src="../imgs/logo.png" alt="" class="logo">
            <h1>Já possui uma conta?</h1>
            <p>Entre e acesse </br>sua conta!</p>
            <img class="icon" src="../imgs/signup.png" alt="">
            <button class="btn_entrar" onclick="window.location.href = 'index.php'">Entrar</button>
        </div>

        <div class="right">
            <h1 class="cad">Cadastre-se</h1>
            <p>Crie uma conta e tenha acesso ao site</p>
            <form action="" id="datas" method="post">
                <div class="content">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"> <img src="../icons/avatar.svg" alt="">
                        </span>
                        <input type="text" name="name" class="form-control" placeholder="Nome completo" id="name"
                            aria-describedby="addon-wrapping" minlength="3" required>
                    </div>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"> <img src="../icons/email.svg" alt="">
                        </span>
                        <input type="email" name="email" class="form-control" placeholder="E-mail" aria-describedby="addon-wrapping" required>
                    </div>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"> <img src="../icons/locked.svg" alt="">
                        </span>
                        <input type="password" name="password" class="form-control" placeholder="Senha"
                            aria-describedby="addon-wrapping" id="password" minlength="6" required>
                    </div>
                    <span id="msg_error"></span>
                </div>
                <div class="sub">
                    <input class="btn_cadastrar" type="submit" value="Cadastre-se"></button>
                </div>
            </form>
            <div class="or">
                <div class="line">
                    <hr>
                    <p>ou</p>
                    <hr>
                </div>
                <div class="accounts">
                    <div class="bg"> <img src="../icons/google.svg" alt="">
                    </div>
                    <div class="bg"> <img src="../icons/facebook.svg" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="../js/script.js"></script>
</body>

</html>