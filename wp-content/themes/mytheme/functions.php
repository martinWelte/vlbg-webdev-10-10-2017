
<?php

use Timber\Timber;
use Mytheme\Lib\Context;
use Mytheme\Lib\Theme;
use Mytheme\Lib\Extensions;

add_action( 'after_setup_theme', function () {
  new Theme() ;
  new Extensions();
  new Context();  
});


// Cool Routs, if you need them
Routes::map('blog/:name', function($params){
    $query = 'posts_per_page=3&post_type='.$params['name'];
    Routes::load('archive.php', null, $query, 200);
});