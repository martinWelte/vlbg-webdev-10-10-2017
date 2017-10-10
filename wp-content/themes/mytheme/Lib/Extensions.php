<?php

namespace Mytheme\Lib;

use Twig_Extension_StringLoader;
use Twig_SimpleFunction;

class Extensions{

  public function __construct() {
		add_filter( 'get_twig', [ $this, 'add_to_twig' ] );
  }


  /**
	 * add your own functions to use in twig templates here
	 *
	 * @param $twig
	 *
	 * @return mixed
	 */
	public function add_to_twig( $twig ) {
		$twig->addExtension( new Twig_Extension_StringLoader() );

		// extending Twig functions mytheme/Lib/Extensions.php
		$twig->addFunction( new Twig_SimpleFunction( 'dump', [ $this, 'dump' ] ) );
		return $twig;
  }
  
  public function dump( $var ) {
		dump( $var );
	}
}
