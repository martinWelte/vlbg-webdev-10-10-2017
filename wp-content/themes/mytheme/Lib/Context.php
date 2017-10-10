<?php

namespace Mytheme\Lib;

/**
* Class Context
*
* @package Mytheme\Lib
*/
class Context
{

  public function __construct() {
		add_filter( 'timber_context', [ $this, 'add_to_context' ] );
	}

  /**
  * Method to add Custom Elements to the Context of the Site
  */
  public function add_to_context( $data ) {
    $data = $this->add_menues( $data );
    return $data;
  }

  public function add_menues($data){
    $data['primary_menu'] = new \TimberMenu( 'primary' );
    $data['footer_menu'] = new \TimberMenu( 'footer' );
    return $data;
  }
}
