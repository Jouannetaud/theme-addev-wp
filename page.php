<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Addev
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

<div class="container-fluid lateral-position d-block float-right">
            <div class="row d-flex justify-content-end">
                <div class=" col-1 d-flex flex-column justify-content-center menu-lateral-bloc dropdown">
                    <div class="box-lateral">
                        <a href="http://" class="slide-toggle">
                            <img src="wp-content/themes/addev/assets/images/logolateral/esperluette.pngg" alt="" class="img-fluid" />
                        </a>
                        <div class="wrapper">
                            <a href="http://" class="w-100">INFOS GROUPE</a>
                        </div>
                    </div>
                    <div class="box-lateral">
                        <a href="http://" class="slide-toggle">
                            <img src="wp-content/themes/addev/assets/images/logolateral/banque_doc.png" alt="" class="img-fluid" />
                        </a>
                        <div class="wrapper">
                            <a href="http://" class="w-100">INFOS GROUPE</a>
                        </div>
                    </div>
                    <div class="box-lateral">
                        <a href="http://" class="slide-toggle">
                            <img src="wp-content/themes/addev/assets/images/logolateral/outils.png" alt="" class="img-fluid" />
                        </a>
                        <div class="wrapper">
                            <a href="http://" class="w-100">INFOS GROUPE</a>
                        </div>
                    </div>
                    <div class="box-lateral">
                        <a href="http://" class="slide-toggle">
                            <img src="wp-content/themes/addev/assets/images/logolateral/trombi.png" alt="" class="img-fluid" />
                        </a>
                        <div class="wrapper">
                            <a href="http://" class="w-100">INFOS GROUPE</a>
                        </div>
                    </div>
                    <div class="box-lateral">
                        <a href="http://" class="slide-toggle">
                            <img src="wp-content/themes/addev/assets/images/logolateral/formation.png" alt="" class="img-fluid" />
                        </a>
                        <div class="wrapper">
                            <a href="http://" class="w-100">INFOS GROUPE</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>


	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
