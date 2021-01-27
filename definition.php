<!-- Hero Section Begin -->
<section class="hero-section set-bg" data-setbg="<?= $localConfig['background_image'] ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="hero-text">
                    <span><?= date($globalConfig['date_format']) ?></span>
                    <h2><?= $localConfig['name'] ?></h2>
                    <span style="color: lightsalmon"><?= $globalConfig['team_name'] ?></span><br><br>
                    <?php foreach($localConfig['items'] as $index => $a) { ?>
                        <span><?=$a?></span><br>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Counter Section Begin -->
<section class="counter-section bg-gradient">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="counter-text">
                </div>
            </div>
        </div>
</section>