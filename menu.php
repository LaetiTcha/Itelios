<?php
$page = isset($_GET["page"]) ? $_GET["page"] : "";
$category = isset($_GET["category"]) ? $_GET["category"] : "";
?>
<div class="menu">
	<div class="menuDesktop">
        <div class="menuTop">
            <div class="brand-logo">MYBRAND</div>
            <div class="menuRight">
                <div id="searchBar">
                    <div class="searchBarInput">
                        <div class="search"><i class="fal fa-search"></i></div>
                        <input type="text" name="searchProduits" class="searchProduits" placeholder="Rechercher un produit..." />
                    </div>
                </div>
                <div class="panier">
                    <img src="images/Icon-Basket.png" style="width: 15px">
                    <p>Mon Panier</p>
                </div>
                <div class="monCompte">
                    <img src="images/Icon-Compte.png" style="width: 15px">
                    <p>Mon compte</p>
                </div>
            </div>
        </div>

        <div class="menu-content">
            <ul>
                <li><a>clients</a></li>
                <li><a>marques</a></li>
                <li><a>boutiques</a></li>
                <li><a>commandes</a></li>
                <li><a>panier</a></li>
            </ul>
        </div>
    </div>


	<div class="menuMobile">
		<div id="mobile-menu">
            <h1>MYBRAND</h1>
		</div>
        <div class="iconMenuMobile">
            <div class="searchMobile"><i class="fal fa-search"></i></div>
            <div class="shoppingMobile"><img src="images/Icon-Basket.png" style="width: 15px"></div>
            <div class="loginMobile"><img src="images/Icon-Compte.png" style="width: 15px"></div>
        </div>

		<div id="mobile-menu-content" class="slideNav">
			<ul id="nav">
                <li><a>clients</a></li>
                <li><a>marques</a></li>
                <li><a>boutiques</a></li>
                <li><a>commandes</a></li>
                <li><a>panier</a></li>
			</ul>
		</div>
        <div id="main">
            <div class="menu-burger display">&#9776;</div>
            <div class="closeButton none">&times</div>
        </div>
	</div>
</div>

<script>
    loadjs.ready('mainScripts', function() {

        $('.menu-content ul li ').click(function(){
            $('.menu-content li').removeClass("active");
            $(this).addClass("active");
        });

        $('.menu-burger').on('click', function() {
            $('#main, .slideNav').addClass('active');
            $('.menu-burger').removeClass("display");
            $('.menu-burger').addClass("none");
            $('.closeButton').removeClass("none");
            $('.closeButton').addClass("display");

        });
        $('.closeButton').on('click', function() {
            $('#main, .slideNav').removeClass('active');
            $('.closeButton').removeClass("display");
            $('.closeButton').addClass("none");
            $('.menu-burger').removeClass("none");
            $('.menu-burger').addClass("display");
        });

        $('#mobile-menu-content ul li ').click(function(){
            $('#mobile-menu-content li').removeClass("activeMobile");
            $(this).addClass("activeMobile");
        });


    });
</script>