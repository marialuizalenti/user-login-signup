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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <title>home</title>
</head>

<body>
    <div class="home">
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
            <div id="carouselExampleIndicators" class="carousel slide w-50">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../imgs/carousel1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../imgs/carousel2.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../imgs/carousel3.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="description">
                <img src="../imgs/logo.png" alt="logo">
                <p>Explore um mundo de aprendizado e descoberta no KnowledgeHub. Nossa plataforma oferece uma ampla
                    variedade de recursos educacionais para você expandir seus horizontes, aprofundar seu conhecimento e
                    alcançar novas conquistas.</p>
            </div>
        </div>
    </div>
</body>

</html>