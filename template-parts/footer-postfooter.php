<?php
$site_info = wp_kses_post( hootubix_get_mod( 'site_info' ) );
$site_info = str_replace( "<!--year-->" , date_i18n( 'Y' ) , $site_info );
if ( !empty( $site_info ) ) :
?>
	<div <?php hybridextend_attr( 'post-footer', '', 'hgrid-stretch footer-highlight-typo linkstyle' ); ?>>
		<div class="hgrid">
			<div class="hgrid-span-12">
				<p class="credit small">
					<?php
					if ( trim( $site_info ) == '<!--default-->' ) {
						printf(
							/* Translators: 1 is Theme name/link, 2 is WordPress name/link, 3 is site name/link */
							__( 'Designed using %1$s. Powered by %2$s.', 'hoot-ubix' ),
							hybridextend_get_wp_theme_link( 'https://wordpress.org/themes/hoot-ubix/' ),
							hybrid_get_wp_link(),
							hybrid_get_site_link()
						);
					} else {
						echo $site_info;
					} ?>
				</p><!-- .credit -->
				<p>&copy; 2017 Chest Clinic All Rights Reserved</p>
			</div>
		</div>
	</div>
<?php
endif;
?>