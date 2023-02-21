<?php 


if(isset($_POST['email']) && !empty($_POST['email'])) {
$nome = addcslashes($_POST['name']);
$email = addcslashes($_POST['email']);
$mensagem = addcslashes($_POST['message']);
}


$to = "contato@rcgestaoeinovacao.com.br";
$subject = "Contato - RC Gestão e Inovação";
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email. "\r\n".
        "Mensagem: ".$mensagem;
$header = "From: rcgestao@rcgestaoeinovacao.com.br"."\r\n". 
          "Reply-to:".$email."\r\n".
          "X=Mailer:PHP/".phpversion(); 

if(mail($to,$subject,$body,$header)) {

    echo("Email enviado com sucesso!");

}else{

    echo("Email não enviado com sucesso!");
    
}
?>