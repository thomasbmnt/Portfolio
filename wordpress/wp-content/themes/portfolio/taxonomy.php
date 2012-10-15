<?php

	$term = get_term_by( "slug", get_query_var("term"), get_query_var("taxonomy") );
	?>
	
	<h1>Articles de la catégorie <?php echo $term->name; ?></h1>