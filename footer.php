<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package resto-blank
 */

?>

	</div><!-- #content -->

	<footer>
		<div class="wrapper">
		<ul>
                <li>Restaurant de Québec</li>
                <li>3926 Chemin Ste-Foy</li>
                <li>Québec, QC, G1G 4H5</li>
                <li>418-855-7432</li>
            </ul>
            <ul>
                <li>Restaurant de Paris</li>
                <li>68, rue de la Couronne</li>
                <li>75002 Paris</li>
                <li>02.94.23.69.56</li>
            </ul>
            <ul>
                <li><a href="#">Blogue</a></li>
                <li><a href="#">Carrières</a></li>
                <li><a href="#">Vie privée</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <ul>
                <li><img src="<?php echo(get_template_directory_uri()); ?> /images/logo-blanc.png" alt="logo"></li>
                <li><a href="http://marisestpierre.com/" target="_blank">&copy; Marise St-Pierre 2019</a></li>
                <p>PSD from www.pixelhint.com</p>
            </ul>
            <?php dynamic_sidebar('footer'); ?>
		</div><!-- .wrapper -->
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
