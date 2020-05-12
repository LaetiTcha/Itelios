<?php
@session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php
    ob_start();
    include("header.php");
    $headers=ob_get_contents();
    ob_end_clean();
    ?>

    <link href="js/font-awesome-pro/css/fontawesome-all.min.css" rel="stylesheet" type="text/css" />
    <link href="js/slick/slick.css" rel="stylesheet" type="text/css" />
    <link href="js/slick/slick-theme.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.min.css" rel="stylesheet" type="text/css" />
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet">

    <script  src="js/jquery/jquery-1.11.0.min.js"></script>
    <script  src="js/loadjs/loadjs.min.js"></script>
    <script >
        loadjs([
            "js/slick/slick.js"
        ], 'mainScripts');
    </script>
</head>
<body>
    <?php
    if(isset($_GET["page"])) {
        $page = $_GET["page"];
    }
    else {
        $page = "home";
    }

    if($page == "home"){
        include("home.php");
    }

    elseif($page == "404"){
        include("404.php");
    }

    else {
        header("HTTP/1.0 404 Not Found");
    }
    include("footer.php");
    ?>

    <script>
        loadjs.ready('mainScripts', function() {

            var isMobile = $(window).width() <= 750;

            resizeNavigation = function() {
                var menu_height = isMobile ? $('.menuDesktop').height() : $('.menuMobile').height();
                $('#navigation').css('min-height',$(window).height() - menu_height - 18);
            };
            resizeNavigation();

            $(window).resize(function(){
                isMobile = $(window).width() <= 750;
                resizeNavigation();
            });

        });
    </script>
    </body>
</html>