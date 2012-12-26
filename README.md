wpclass
=======

wpClass to use in-place of stdClass in WordPress applications

wpClass can be initialized by providing an args array. The elements of the provided array
are assigned to properties of the class.

    $apple = new wpClass( array(
      'color' => 'red',
      'state' => 'ripe',
      'brand' => 'McIntosh',
    ));