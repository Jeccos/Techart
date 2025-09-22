<? require_once __DIR__ . '/pagination-controller.php'?>

<div class="pagination _container">
    <div class="pagination__buttons">
        <?
            for($i = 1; $i <= $total_pages; $i++) {
                ?>
                    <a href="index.php?page=<?=$i?>" class="button pagination__button"><?=$i?></a>
                <?
            }
        ?>
    </div>
    <?
        if($page < $total_pages) {
            ?>
                <div class="button arrow-button pagination__buttonPage">
                    <a href="index.php?page=<?=$nextPage?>" class="link"></a>
                    <span class="arrow arrowRight"></span>
                </div>
            <?
        }
    ?>
</div>