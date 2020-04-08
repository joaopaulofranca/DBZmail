<?php
require "../PHPMailer/Exception.php";
require "../PHPMailer/OAuth.php";
require "../PHPMailer/PHPMailer.php";
require "../PHPMailer/POP3.php";
require "../PHPMailer/SMTP.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

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
$mail = new PHPMailer(true);
	    //Server settings
	    $mail->SMTPDebug = false;                                
	    $mail->isSMTP();                                      
	    $mail->Host = 'smtp.gmail.com';                       
	    $mail->SMTPAuth = true;                               
	    $mail->Username = 'teste@gmail.com';                 
	    $mail->Password = '******';                           
	    $mail->SMTPSecure = 'tls';                           
	    $mail->Port = 587;                                   

	    //Recipients
	    $mail->setFrom('test@gmail.com', 'Joao Paulo França');
	    $mail->addAddress($mensagem->__get('para'));
	    //$mail->addReplyTo('info@example.com', 'Information');
	    //$mail->addCC('cc@example.com');
	    //$mail->addBCC('bcc@example.com');

	    //Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject = $mensagem->__get('assunto');
	    $mail->Body    = $mensagem->__get('email');
	    $mail->AltBody = 'É necessário utilizar um client que suporte HTML para ter acesso total ao conteúdo dessa mensagem';

	    $mail->send();