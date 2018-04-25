<?php

    namespace system\system;

	Class System{

        private $_url;
        private $_explode;
        public $_controller;
        public $_action;
        public $_params;

        public function __construct(){

            exit('ola');

            $this->setUrl();
            $this->setExplode();
            $this->setController();
            $this->setAction();
            $this->setParams();

        }

        private function setUrl(){
            if(isset($_GET['url'])){

                $aux = $_GET['url'];

            }else{

                $aux = 'index/index_action';
            }

            $this->_url = $aux;
        }

        private function setExplode(){

            $this->_explode = explode('/', $this->_url);
        }

        private function setController(){
            $this->_controller = $this->_explode[0];
        }

        private function setAction(){

            if(!isset($this->_explode[1]) || empty($this->_explode[1]) || $this->_explode[1] == 'index'){

                $aux = 'index_action';

            }else{

                $aux = $this->_explode[1];
            }

            $this->_action = $aux;
        }

        private function setParams(){
            unset($this->_explode[0], $this->_explode[1]);

            if(empty(end($this->_explode))){
                array_pop($this->_explode);
            }

            if(!empty($this->_explode)){

                $i = 0;

                foreach ($this->_explode as $aux) {

                    if($i % 2 == 0){
                        $keys[] = $aux;
                    }else{
                        $values[] = $aux;
                    }

                    $i++;
                }



            }else{
                $keys = array();
                $values = array();
            }

            if(count($keys) == count($values) && !empty($keys) && !empty($values)){

                $this->_params = array_combine($keys, $values);
            }else{

                $this->_params = array();
            }
        }

        public function getParams($name){

            return $this->_params[$name];
        }

        /*public function run(){

            $path = ROOT_PATH.'/'.CONTROLLERS . $this->_controller . 'Controller.php';

            try {

                if (! @include_once( $path )) {
                    throw new Exception ($path .' does not exist');
                }

                if (!file_exists( $path )){
                    throw new Exception ($path .' does not exist');
                }
                else{
                    require_once( $path );
                    $app = new $this->_controller();
                }
            }
            catch(Exception $e) {
                echo " Message : " . $e->getMessage();
                echo " Code : " . $e->getCode();
                require_once(ROOT_PATH.'/'. ASSETS . "/erros/404.php");
                exit();
            }






            try{

                if(!method_exists($app, $this->_action)){
                    throw new Exception ('Method does not exist');
                }else{



                    $action = $this->_action;
                    $app->$action();

                }

            }catch(Exception $e) {
                 echo " Message : " . $e->getMessage();
                 echo " Code : " . $e->getCode();
                require_once(ROOT_PATH.'/'. ASSETS . "/erros/404.php");
                exit();
            }


            use USE_CONTROLLER.'/\/'.$this->_controller;

            echo USE_CONTROLLER.'/\/'.$this->_controller;
           // $app = $this->_controller;



        }*/

    }
