<?php

use App\Foo;

print_r('You are in the "' . __FILE__ . '" file.' . PHP_EOL);

$foo = new Foo();

print_r('You are in the "' . $foo->foo() . '" file.' . PHP_EOL);

$my_class = new my_class();

print_r('You are in the "' . $my_class->my_method() . '" file.' . PHP_EOL);
