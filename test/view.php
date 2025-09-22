<?php 
require_once __DIR__ . '/view-controller.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../test/styles/view.css">
    <link rel="stylesheet" href="../test/styles/base.css">
    <link rel="stylesheet" href="../test/styles/footer.css">
    <link rel="stylesheet" href="../test/styles/common.css">
    <link rel="stylesheet" href="../test/styles/pagination.css">
    <title><?=$result[0]['title']?></title>
</head>
<body>
    <header class="header _container _borderBottom">
        <div class="header__logo">
            <img src="logo/logo.svg" alt="Галактический вестник">
        </div>
    </header>
    <div class="view _container">
        <div class="view__pageInfo _marginView">
            <a href="index.php" class="view__mainPage">
                Главная
            </a>
            <span>/</span>
            <span class="view__pageInfoTitle"><?=$result[0]['title']?></span>
        </div>
        <h1 class="view__title _marginView">
            <?=$result[0]['title']?>
        </h1>
        <div class="date _marginView">
            <span><?=$result[0]['date']?></span>
        </div>
        <div class="view__items">
            <div class="view__item">
                <div class="view__itemWrapper _marginView">
                    <div class="view__itemWrapperTitle _marginView">
                        <?=$result[0]['announce']?>
                    </div>
                    <div class="view__itemWrapperAnnounce _marginView">
                        <?=$result[0]['content']?>
                    </div>
                </div>
                <div class="button arrow-button pagination__buttonPage">
                    <a href="index.php" class="link"></a>
                    <span class="arrow arrowLeft"></span>
                    <span>Назад к новостям</span>
                </div>
            </div>
            <div class="view__Image">
                <img src="images/<?=$result[0]['image']?>" alt="<?=$result[0]['title']?>">
            </div>
        </div>
    </div>
    <footer class="footer _container _borderTop">
        <div class="footer__copyright">
            © 2023 — 2412 «Галактический вестник»
        </div>
    </footer>
</body>
</html>