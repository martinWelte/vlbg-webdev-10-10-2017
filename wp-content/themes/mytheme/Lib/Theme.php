<?php

namespace Mytheme\Lib;

class Theme
{

  public function __construct(){
     $this->register_menues();
     $this->supports();
     $this->register_styles();
  }

  public function register_menues(){
      register_nav_menu( 'primary', __( 'Hauptmenü', 'towa' ) );
      register_nav_menu( 'footer', __( 'Footermenü', 'towa' ) );
  }

  public function supports(){
      add_theme_support( 'post-thumbnails' ); 
  }

  public function register_styles(){
    
  }
}