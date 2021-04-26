<?php 
get_header();
?>
<h1>Page Not Found!</h1>

<?php

get_search_form();

//get_sidebar();

wp_get_archives( array(
    'type' => 'postbypost',
    'limit' => 10,
    'format' => 'custom',
    'before' => '',
    'after' => '<br/>'
));

get_footer();

?>