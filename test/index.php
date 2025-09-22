<? require_once __DIR__ . '/news-controller.php' ?>

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
    <link rel="stylesheet" href="../test/styles/pagination.css">
</head>
<body>
    <header class="header _container">
        <div class="header__logo">
            <img src="logo/logo.svg" alt="Галактический вестник">
        </div>
    </header>
    <main class="main">
        <? require_once __DIR__ . '/first-news.php' ?>
        <div class="news _container">
            <h2 class="news__title">Новости</h2>
            <div class="news__items">
                <?
                    foreach($result as $item) {
                        ?>
                            <div class="news__item">
                                <a href="view.php?id=<?=$item['id']?>" class="link"></a>
                                <div class="news__itemWrapper">
                                    <div class="date _marginBottom">
                                        <span><?=$item['date']?></span>
                                    </div>
                                    <div class="news__itemWrapperTitle _marginBottom">
                                        <?=$item['title']?>
                                    </div>
                                    <div class="news__itemWrapperAnnounce _marginBottom">
                                        <?=$item['announce']?>
                                    </div>
                                </div>
                                <div class="button arrow-button">
                                    <span>Подробнее</span>
                                    <span class="arrow arrowRight"></span>
                                </div>
                            </div>
                        <?
                    }
                ?>
            </div>
        </div>
        <? require_once __DIR__ . '/pagination.php' ?>
    </main>
    <footer class="footer _container _borderTop">
        <div class="footer__copyright">
            © 2023 — 2412 «Галактический вестник»
        </div>
    </footer>
</body>
</html>