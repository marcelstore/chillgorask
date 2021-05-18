<?php

class SignupModel extends Mysql
{

    public function __construct()
    {
        parent::__construct();
    }


    public function registerUser(string $nombre, string $apellido ,string $email,string $password){
        $sql = "SELECT * FROM persona WHERE email_user = '$email'";
        $request = $this->select_all($sql);

        if(empty($request)){
            $sql = "INSERT INTO persona(nombres,apellidos,email_user,password,status) VALUES(?,?,?,?,?) ";
            $arrData = array($nombre,$apellido,$email,$password,1);
            $request = $this->insert($sql,$arrData);
            $return = $request;
        }else{
            $return = 'exist';
        }
        return $return;


    }
}