<?php

include('../session/protect.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../imgs/favicon.png" />
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/profile.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <title>profile</title>
</head>

<body>
    <div class="all">
        <div class="menu">
            <div class="profile">
                <img src="../imgs/photo.png" alt="profile photo">
                <div class="update">
                    <p>
                        <?= $_SESSION['name'] ?>
                    </p>
                    <img src="../icons/pencil.png" alt="pencil icon" onclick="window.location.href = 'profile.php'">
                </div>
            </div>
            <div class="secs">
                <ul class="list-group">
                    <li class="list-group-item">
                        <img src="../icons/home.png" alt="">
                        <label class="form-check-label" for="firstCheckbox"
                            onclick="window.location.href = 'home.php'">Home</label>
                    </li>
                    <li class="list-group-item">
                        <img src="../icons/book.png" alt="">
                        <label class="form-check-label" for="firstCheckbox">Meus estudos</label>
                    </li>
                    <li class="list-group-item">
                        <img src="../icons/service.png" alt="">
                        <label class="form-check-label" for="firstCheckbox">Serviços</label>
                    </li>
                    <li class="list-group-item">
                        <img src="../icons/community.png" alt="">
                        <label class="form-check-label" for="firstCheckbox">Comunidade</label>
                    </li>
                    <li class="list-group-item">
                        <img src="../icons/phone.png" alt="">
                        <label class="form-check-label" for="firstCheckbox">Contato</label>
                    </li>

                </ul>
            </div>
        </div>

        <div class="content">
            <h1>Meu perfil</h1>
            <p>Altere seus dados</p>

            <img src="../imgs/change_photo.png" alt="">

            <form action="" id="datas">
                <div class="datas">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"> <img src="../icons/avatar.svg" alt="">
                        </span>
                        <input type="text" class="form-control" placeholder="Novo nome"
                            aria-describedby="addon-wrapping" minlength="3">
                    </div>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"> <img src="../icons/email.svg" alt="">
                        </span>
                        <input type="email" class="form-control" placeholder="Novo e-mail" aria-describedby="addon-wrapping">
                    </div>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"> <img src="../icons/locked.svg" alt="">
                        </span>
                        <input type="password" class="form-control" placeholder="Nova senha"
                            aria-describedby="addon-wrapping" minlength="6" id="password"> 
                    </div>
                    <span id="msg_error"></span>
                    <a id="delete_account" href="../session/delete_account.php">deletar minha conta</a>
                    <a href="../session/logout.php" id="signout">sair</a>
                </div>
                <div class="sub">
                    <input class="btn_cadastrar" type="submit" value="Salvar"></button>
                </div>
            </form>
        </div>
    </div>
    <script src="../js/script.js"></script>
</body>

</html>