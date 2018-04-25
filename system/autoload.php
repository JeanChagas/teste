<?php

    Class Autoloader{

        public static function load($class){

                $class = str_replace('\\', '/', $class);
                require_once(ROOT_PATH .'/'. strtolower($class).'.php');

        }

    }