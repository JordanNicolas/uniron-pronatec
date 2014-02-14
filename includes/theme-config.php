<?php 
  if( !defined('URI') )
    define('URI', 'http://uniron.edu.br/pronatec');
  if( !defined('DIR') )
    define( 'DIR', dirname(__DIR__) );

  if( !defined('ASSETS_URI') )
    define('ASSETS_URI', URI . DS . 'assets');

  /** Define a estrutura de diretorios do Javascript */
  if( !defined('JS_URI') )
    define('JS_URI', ASSETS_URI . DS . 'js');

  /** Define a estrutura de diretorios do CSS */
  if( !defined('CSS_URI') )
    define('CSS_URI', ASSETS_URI . DS . 'css');

  /** Define a estrutura de diretorios do Imagens */
  if( !defined('IMAGES_URI') )
    define('IMAGES_URI', ASSETS_URI . DS . 'img');

  if( !defined('INCLUDES_DIR') )
    define('INCLUDES_DIR', DIR . DS . 'includes' );

  if( !defined('INCLUDES_URI') )
    define( 'INCLUDES_URI', URI . DS . 'includes' );

  if( !defined('TEMPLATEPATH') )
    define( 'TEMPLATEPATH', dirname(__DIR__) );

  /** Corrige o timezone */
  setlocale( LC_ALL, "pt_BR" );
  date_default_timezone_set( 'America/Manaus' ); ?>