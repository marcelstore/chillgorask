<?php
    class Signup extends Controllers{
        public function __construct(){
            session_start();
            if(isset($_SESSION['login'])){
                header('location: '.base_url().'/usuarios/perfil');
            }
            parent::__construct();

        }

        public function Signup(){
            $data['page_tag'] = 'Signup - '.NOMBRE_EMPRESA;
            $data['page_title'] = 'Signup '.NOMBRE_EMPRESA;
            $data['page_name'] = 'signup';
            $data['functions_js'] = 'functions_registro';
            $this->views->getView($this,'signup',$data);
        }

        public function registerUser()
        {                    

            if($_POST) {
                if(empty($_POST['email']) || empty($_POST['nombre']) || empty($_POST['apellido']) || empty($_POST['password']) )  {
                    $arrResponse = array('status' => false, 'msg' => 'Error de datos.');
                }else{
                    $strNombre = strclean($_POST['nombre']);
                    $strApellido = strclean($_POST['apellido']);
                    $strEmail = strclean($_POST['email']);
                    $strPassword = hash("SHA256",$_POST['password']);
                    $request_insert = $this->model->registerUser($strNombre,$strApellido,$strEmail,$strPassword);


                    if($request_insert > 0){
                        $arrResponse = array('status' => true, 'msg' => 'Usuario creado correctamente.');
                    }else if($request_insert == 'exist'){
                        $arrResponse = array('status' => false, 'msg' => 'Este correo ya existe.');

                    }else{
                        $arrResponse = array('status' => false, 'msg' => 'Ocurrió un error.');

                    }





                }
                echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
            }

            die();
        }



    }