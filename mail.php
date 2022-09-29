< ?php
//pega dados do formulário  
$nome = $_POST [ 'nome' ] ;
$email= $_POST [ 'email' ] ;
$mensagem= $_POST [ 'mensagem' ] ;
$to = "seuemail@mail.com" ;
$subject = "Enviar do site" ;
$txt = "Nome = " . $nome. "\r\n E-mail = " . $e-mail. "\r\n Mensagem =" . $mensagem;
$headers = "De: noreply@yoursite.com" . "\r\n" .
"CC: outra pessoa@example.com" ;
if ( $email!= NULL ){
    mail ( $to,$assunto,$txt,$cabeçalhos ) ;
}
//redireciona
header ( "Local:obrigado.html" ) ;
? >