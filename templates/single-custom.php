<?php
get_header();
echo '<main class="page-content">';
	echo '<div class="wrap">';
		echo '<article>';
			web_title();
			the_field('felt_1');
			the_field('felt_2');
			the_content();

			web_go_back();
		echo '</article>';
	echo '</div>';
echo '</main>';
get_footer();
