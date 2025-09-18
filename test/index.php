<?php require_once __DIR__ . '/news-controller.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Галактический вестник</title>
    <link rel="stylesheet" href="../test/styles/base.css">
    <link rel="stylesheet" href="../test/styles/footer.css">
    <link rel="stylesheet" href="../test/styles/common.css">
    <link rel="stylesheet" href="../test/styles/news.css">
    <link rel="stylesheet" href="../test/styles/news-items.css">
</head>
<body>
    <header class="header _container">
        <div class="header__logo">
            <img src="logo/logo.png" alt="Галактический вестник">
        </div>
    </header>
    <main class="main">
        <div>Я ПЕРВАЯ НОВОСТЬ: <?=$result[0]['title']?></div>
        <div class="news _container">
            <h1 class="news__title">Новости</h1>
            <div class="news__items">
                <?
                    foreach($result as $item) {
                        ?>
                            <div class="news__item">
                                <div class="news__itemWrapper">
                                    <div class="news__itemWrapperTime _marginBottom">
                                        <span><?=$item['date']?></span>
                                    </div>
                                    <div class="news__itemWrapperTitle _marginBottom">
                                        <?=$item['title']?>
                                    </div>
                                    <div class="news__itemWrapperAnnounce _marginBottom">
                                        <?=$item['announce']?>
                                    </div>
                                    <a href="view.php?id=<?=$item['id']?>" class="news__itemWrapperButton">
                                        <span>Подробнее</span>
                                        <span class="arrow"></span>
                                    </a>
                                </div>
                            </div>
                        <?
                    }
                ?>
            </div>
        </div>
    </main>
    <footer class="footer _container _borderTop">
        <div class="footer__copyright">
            © 2023 — 2412 «Галактический вестник»
        </div>
    </footer>
</body>
</html>