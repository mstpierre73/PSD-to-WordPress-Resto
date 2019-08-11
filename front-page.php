<?php

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<!--Start homepage content-->
        <div id="slogan">
        <h2>Bienvenue chez Resto</h2>
        <hr/><p>La fraîcheur de nos ingrédients est notre fierté</p><hr/>
    </div>
    
    <div id="main-banner">
        <picture>
                <source srcset="<?php echo(get_template_directory_uri()); ?>/images/banner-medium.jpg" media="(max-width: 900px)">
                <source srcset="<?php echo(get_template_directory_uri()); ?>/images/banner-small.jpg" media="(max-width: 500px)">    
                <img src="<?php echo(get_template_directory_uri()); ?>/images/banner.jpg" alt="Bienvenue chez Resto"> 
        </picture>
         
    </div>
    
    <div class="wrapper">
    <section id="menu">
        <h2>Menu</h2>
        <ul>
            <li>
                <span class="dish">Fettucini aux légumes</span>
                <span class="price">$26</span>
                <span class="description">Fromage, tomates, champignons, oignons</span>
            </li>
            <li>
                <span class="dish">Nouilles aux champignons</span>
                <span class="price">$28</span>
                <span class="description">Champignons, fromage mozarella, oignons</span>
            </li>
            <li>
                <span class="dish">Salade au thon</span>
                <span class="price">$20</span>
                <span class="description">Thon, maïs sucré, fromage</span>
            </li>
            <li>
                <span class="dish">Sandwich au boeuf hawaïen</span>
                <span class="price">$30</span>
                <span class="description">Tranches de boeuf, fromage, ananas</span>
            </li>
            <li>
                <span class="dish">Brochettes de poulet</span>
                <span class="price">$30</span>
                <span class="description">Poulet, tomates, champignons, poivrons</span>
            </li>
            <li>
                <span class="dish">Couscous aux légumes</span>
                <span class="price">$22</span>
                <span class="description">Couscous, brocolis, carottes</span>
            </li>
            <li>
                <span class="dish">Muslix aux bananes</span>
                <span class="price">$18</span>
                <span class="description">Flocons d'avoine, amandes, bananes</span>
            </li>
            <li>
                <span class="dish">Crêpes au jambon</span>
                <span class="price">$30</span>
                <span class="description">Fromage, jambon, champignons</span>
            </li>
        </ul>
    </section>    
    <section id="featured">
        <h2>Featured Dish</h2><hr/>
        <ul>
            <li>
                <img src="images/plat-1.jpg">
                <a href="#">Brochettes de poulet</a>
                <span>$30</span>
                <span class="rating"></span>
            </li>
            <li>
                <img src="images/plat-2.jpg">
                <a href="#">Nouilles aux champignons</a>
                <span>$28</span>
                <span class="rating"></span>
            </li>
            <li>
                <img src="images/plat-3.jpg">
                <a href="#">Muslix aux bananes</a>
                <span>$18</span>
                <span class="rating"></span>
            </li>
            <li>
                <img src="images/plat-4.jpg">
                <a href="#">Couscous aux légumes</a>
                <span>$22</span>
                <span class="rating"></span>
            </li>
        </ul>
    </section>

    <section id="gallery">
        <h2>The Gallery</h2><hr/>
        <img src="<?php echo(get_template_directory_uri()); ?>/images/gallery.jpg" alt="assortiment de plats">
    </section>
    </div>
    <!--En homepage content-->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();