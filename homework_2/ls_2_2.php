<?php
trait SingletonTrait
{
	private static $instance;

    public static function getInstance() {
        if ( empty(self::$instance) ) {
        self::$instance = new self();
    }
    return self::$instance;
}

class Foo
{
	use SingletonTrait;
}

$foo1 = Foo::getInstance();