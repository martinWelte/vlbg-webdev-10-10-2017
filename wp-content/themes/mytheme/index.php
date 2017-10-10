<?php

$context = Timber::get_context();

$context['post'] = new TimberPost();

$context['posts'] = Timber::get_posts(['post_type'=>'post']);

Timber::render('views/templates/page.twig', $context);