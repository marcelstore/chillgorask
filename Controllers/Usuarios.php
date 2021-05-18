<?php
    class Usuarios extends Controllers{
        public function __construct(){
            session_start();
            /*if(isset($_SESSION['login'])){
                header('location: '.base_url().'/dashboard');
            }*/
            parent::__construct();

        }

        public function Usuarios(){
            $data['page_tag'] = 'Usuarios - '.NOMBRE_EMPRESA;
            $data['page_title'] = 'Usuarios '.NOMBRE_EMPRESA;
            $data['page_name'] = 'usuarios';
            $data['functions_js'] = 'functions_usuarios';
            $this->views->getView($this,'usuarios',$data);
        }

        public function Perfil()
        {                    
            $data['page_tag'] = 'Usuarios - '.NOMBRE_EMPRESA;
            $data['page_title'] = 'Usuarios '.NOMBRE_EMPRESA;
            $data['page_name'] = 'perfil';
            $data['functions_js'] = 'functions_usuarios';
            $this->views->getView($this,'perfil',$data);
        }



    }