<?php
$extras = ['working_agreements.md','definition_of_done.md','definition_of_ready.md'];
?>
<!-- Hero Section Begin -->
<section class="hero-section set-bg"
         data-setbg="<?= $localConfig['background_image'] ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="hero-text">
                    <span><?= date($globalConfig['date_format']) ?></span>
                    <h2><?= $localConfig['name'] ?></h2>
                    <span style="color: lightsalmon"><?= $globalConfig['team_name'] ?> | <?= $localConfig['schedule'] ?> | <?= $localConfig['location'] ?></span>
                    <br><br><span><?= $localConfig['objective']; ?></span>
                    <br><span><?= $localConfig['audience']; ?></span>
                    <br><span><?= $localConfig['output']; ?></span>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <?php foreach($extras as $key => $extra) { $extra = $globalConfig[$extra]; ?>
            <div class="col-lg-4">
                <div class="about-text">
                    <h3><?=$extra['name']?></h3>
                    <ul>
                        <?php foreach($extra['items'] as $index => $text) { ?>
                        <li><span class="icon_check"></span><?=$text?></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Counter Section Begin -->
<section class="counter-section bg-gradient">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="counter-text">
                    <span><?= $localConfig['time_boxed'] ? 'Time-Boxed Meeting' : '' ?></span>
                    <h3><?= $localConfig['duration'] ?> Minutes</h3>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="cd-timer" id="countdown">
                    <div class="cd-item">
                        <span>40</span>
                        <p>Days</p>
                    </div>
                    <div class="cd-item">
                        <span>18</span>
                        <p>Hours</p>
                    </div>
                    <div class="cd-item">
                        <span>15</span>
                        <p>Minutes</p>
                    </div>
                    <div class="cd-item">
                        <span>32</span>
                        <p>Seconds</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>