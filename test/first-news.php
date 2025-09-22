<?
require_once __DIR__ . '/first-news-controller.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../test/styles/base.css">
    <link rel="stylesheet" href="../test/styles/main.css">
    <link rel="stylesheet" href="../test/styles/common.css">
</head>
<body>
    <div class="main__firstNews">
        <a href="view.php?id=<?=$firstNews[0]['id']?>" class="link"></a>
        <div class="main__firstNewsImage">
            <img src="images/<?=$firstNews[0]['image']?>" alt="<?=$firstNews[0]['title']?>">
        </div>
        <div class="main__firstNewsInner">
            <h1 class="main__firstNewsTitle">
                <?=$firstNews[0]['title']?>
            </h1>
            <div class="main__firstNewsAnnounce">
                <?=$firstNews[0]['announce']?>
            </div>
        </div>
    </div>
</body>
</html>