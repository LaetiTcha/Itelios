<?php

$keywords = "";
$title = "";
$description = "";
$image = "";

$headers = str_replace("%TITLE%", $title, $headers);
$headers = str_replace("%KEYWORDS%", $keywords, $headers);
$headers = str_replace("%DESCRIPTION%", $description, $headers);
$headers = str_replace("%IMAGE%", $image, $headers);

echo <<<EOF
    {$headers}
</head>
<body>
EOF;
include("menu.php");
?>
<div id="navigation" class="fade-delay-1">
    <div class="homeSlider">
        <div class="outer">
            <img src="images/girl-237871_1920-600x300.jpg" style="width: 100%">
            <span class="border"></span>
        </div>
        <div class="outer">
            <img src="images/girl-237871_1920-600x300.jpg" style="width: 100%">
            <span class="border"></span>
        </div>
        <div class="outer">
            <img src="images/girl-237871_1920-600x300.jpg" style="width: 100%">
            <span class="border"></span>
        </div>
    </div>

    <div class="homeBottom">
        <div class="testBrand">
            <h2>Test | MyBrand</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque molestie a massa quis ultricies. Fusce eu faucibus tortor. Morbi rhoncus pretium elit, at gravida justo sodales et. Fusce eu eleifend ante. Sed aliquam lorem lectus, vel tristique nisl consectetur fringilla. Integer eget malesuada velit, ac tempor eros. Duis volutpat at mauris a feugiat. Duis id sem in massa ultricies finibus. Pellentesque lorem ipsum, iaculis eu odio nec, vehicula eleifend libero. Maecenas sit amet feugiat turpis. Proin eget tempor nibh, et maximus nisi. Aenean posuere erat vitae est convallis, at venenatis lacus gravida. Ut suscipit risus ante, non lobortis turpis placerat a. Aliquam erat volutpat. In elit tortor, interdum at metus eget, ultricies vehicula nisi. Etiam a tellus ex.</p>
            <div class="image"><img src="images/web-pic-girl1-Slider1.jpg" title="gil2" alt="girl2" style="width: 100%"></div>
        </div>

        <div class="form">
            <h2>MON COMPTE</h2>
            <div class="login">
                <label>Identifiant</label>
                <input type="text" name="identifiant" class="identifiant"/>
            </div>
            <div class="password">
                <label>Mot de passe</label>
                <input type="text" value="" name="passwd" class="passwd"/>
            </div>
            <button class="connection">Se connecter</button>
            <div class="forgetPassword"><a><p>mot de passe oublié ?</p></a></div>
        </div>

        <div class="formMobile">
            <h2>MON COMPTE</h2>
            <div class="login">
                <label>Identifiant</label>
                <input type="text" name="identifiant" class="identifiant"/>
            </div>
            <div class="password">
                <label>Mot de passe</label>
                <input type="text" value="" name="passwd" class="passwd"/>
            </div>
            <button class="connection">Se connecter</button>
            <div class="forgetPassword"><a><p>mot de passe oublié ?</p></a></div>
        </div>

        <div class="testBrandMobile">
            <h2>Test | MyBrand</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque molestie a massa quis ultricies. Fusce eu faucibus tortor. Morbi rhoncus pretium elit, at gravida justo sodales et. Fusce eu eleifend ante. Sed aliquam lorem lectus, vel tristique nisl consectetur fringilla. Integer eget malesuada velit, ac tempor eros. Duis volutpat at mauris a feugiat. Duis id sem in massa ultricies finibus. Pellentesque lorem ipsum, iaculis eu odio nec, vehicula eleifend libero. Maecenas sit amet feugiat turpis. Proin eget tempor nibh, et maximus nisi. Aenean posuere erat vitae est convallis, at venenatis lacus gravida. Ut suscipit risus ante, non lobortis turpis placerat a. Aliquam erat volutpat. In elit tortor, interdum at metus eget, ultricies vehicula nisi. Etiam a tellus ex.</p>
            <div class="image"><img src="images/web-pic-girl1-Slider1.jpg" title="gil2" alt="girl2" style="width: 100%"></div>
        </div>

    </div>
</div>
<script>
    loadjs.ready('mainScripts', function() {

        $('.homeSlider').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
        });

        $('.passwd').keyup(function () {
           this.value = this.value.replace(/[^0-9\.]/g, '');
        });

    });
</script>