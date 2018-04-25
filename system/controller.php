<?php


    namespace system;


    class Controller extends System{


        protected function page($view){

            return require_once(VIEWS . $view .'.phtml');
        }

    }