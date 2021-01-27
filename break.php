<?php
if(array_key_exists('duration', $_GET)){
    $localConfig['duration'] = $_GET['duration'];
}
?>
<!-- Hero Section Begin -->
<section class="hero-section set-bg" data-setbg="<?= $localConfig['background_image'] ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="hero-text">
                    <span><?= date($globalConfig['date_format']) ?></span>
                    <h2><?= $localConfig['name'] ?></h2>
                    <span style="color: lightsalmon"><?= $globalConfig['team_name'] ?> is out for a break...</span>
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
            <div class="col-lg-4">
                <div class="counter-text">
                    <h3>We will be back in...</h3>
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