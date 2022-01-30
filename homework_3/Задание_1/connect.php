<?php

// сильно сомневаюсь, что я это правилтьно реализовал. Если можно, напишите как надо)
class Singleton{
    private static $instances;
    private static $link = null;

    public static function getInstance(){
        if (self::$link === null) {
            self::$link = mysqli_connect("localhost", "root", "root", "gallary");
        }
        return self::$link;
        }

    }

