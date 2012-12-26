<?php
/**
 * wpClass is an experimental class to use in-place of stdClass in WordPress applications
 *
 * wpClass can be initialized by providing an args array. The elements of the provided array
 * are assigned to properties of the class.
 *
 * $apple = new wpClass( array(
 *    'color' => 'red',
 *    'state' => 'ripe',
 *    'brand' => 'McIntosh',
 * ));
 *
 */
class wpClass {

  /**
   * Assigns elements of args array as properties of instance object
   * @param array $args
   */
  function __construct( $args = array() ) {

    $attr = wp_parse_args( $args, array() );
    foreach ( $attr as $name => $value )
      $this->$name = $value;

  }

  /**
   * Return value of property $name or null if property does not exist
   *
   * @param $name
   * @return null
   */
  function __get( $name ) {

    $value = null;
    if ( isset( $this->$name ) )
      $value = $this->$name;

    return $value;
  }

  /**
   * Set $value to $name property
   * @param $name
   * @param $value
   */
  function __set( $name, $value ) {

    $this->$name = $value;

  }

}
