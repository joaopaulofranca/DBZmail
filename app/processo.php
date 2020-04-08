<?php
//print_r($_POST);
class Mensagem{
    //atributos
    private $para;
    private $assunto;
    private $email;
    //metodos
    function __get($dados){
        return $this->$dados;
    }
    function __set($dados,$value){
        $this->$dados = $value;
    }
    function emailValido(){
        if(empty($this->para)||empty($this->assunto)||empty($this->email)){
            return true;
        }else{
            return false;
        }
    }
}
//instanciar
$mensagem = new Mensagem();

$mensagem->__set('para', $_POST['para']);
$mensagem->__set('assunto', $_POST['assunto']);
$mensagem->__set('email', $_POST['email']);

if(!$mensagem->emailValido()){
    print("E-mail não é valido");
    header('Location: index.php');
}

//enviar email
