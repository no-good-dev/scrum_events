
<!-- Hero Section Begin -->
<section class="hero-section set-bg"
         data-setbg="<?= $localConfig['background_image'] ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="hero-text">
                    <span><?= date($globalConfig['date_format']) ?> | <?= $globalConfig['customer_name'] ?></span>
                    <h2><?= $localConfig['name'] ?> [<?= $globalConfig['team_name'] ?>]</h2>
                    <?php
                    //show an index
                    foreach($globalConfig as $index => $array){
                        if(!is_array($array)) continue;//show only config keys
                        $link = str_replace('.md','',$index);
                        $name = ucwords(str_replace('_',' ',$link));
                        if('Index'==$name)continue;
                        if('Break'==$name){
                            echo "<span>[".substr(md5($index),0,3)."] <a style='color: antiquewhite' target='_blank' href='{$_SERVER['PHP_SELF']}?m=$link&t=$team&'>$name</a>
<a style='color: antiquewhite' target='_blank' href='{$_SERVER['PHP_SELF']}?m=$link&t=$team&duration=5'>5</a>
<a style='color: antiquewhite' target='_blank' href='{$_SERVER['PHP_SELF']}?m=$link&t=$team&duration=10'>10</a>
<a style='color: antiquewhite' target='_blank' href='{$_SERVER['PHP_SELF']}?m=$link&t=$team&duration=15'>15</a>
<a style='color: antiquewhite' target='_blank' href='{$_SERVER['PHP_SELF']}?m=$link&t=$team&duration=30'>30</a> Min.
</span><br>";
                        }
                        else echo "<span>[".substr(md5($index),0,3)."] <a style='color: antiquewhite' target='_blank' href='{$_SERVER['PHP_SELF']}?m=$link&t=$team'>$name</a></span><br>";
                    }
                    ?>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-7">
                <div class="hero-text">
                    <span>Teams</span><br>
                    <?php
                    //show an index
                    foreach(scandir(DATA_DIR_CUSTOMERS) as $index => $dir){
                       // if(!is_dir($dir)) continue;
                        if('.'==$dir) continue;
                        if('..'==$dir) continue;
                        $name = ucwords($dir);
                        echo "<span>[".substr(md5($dir),0,3)."] <a style='color: antiquewhite' target='_self' href='{$_SERVER['PHP_SELF']}?t=$dir'>$dir</a></span><br>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>