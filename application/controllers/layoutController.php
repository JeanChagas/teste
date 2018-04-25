<?php
/**
 * Created by PhpStorm.
 * User: jean
 * Date: 24/04/18
 * Time: 13:46
 */

    namespace application\controllers;
    use system\Controller;

    class Layout extends Controller{


        public function index_action(){
            die('teste');
            $this->page('layout');
        }

    }