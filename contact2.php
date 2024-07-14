<?php
  if(isset($_GET["lang"])) {
	$lang = $_GET["lang"];
 } else {
	 $lang = "en";
 }
if(isset($_POST['email'])) {
	
    function died($error) {
	$redirect = "http://wwww.constantinoit.com/contact.php";
	header("location:$redirect");
    }
	
    // validation expected data exists
    if(!isset($_POST['nome']) ||
        !isset($_POST['email']) ||
        !isset($_POST['mensagem'])) {
        died('');
    }
 
    $nome = $_POST['nome']; // required
    $email = $_POST['email']; // required
    $mensagem = $_POST['mensagem']; // required
	
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$nome)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
  if(strlen($mensagem) < 2) {
 
    $mensagem .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
	$subject = 'Contato atraves do site ConstantinoIt.com';
	$headers = "From: " . $nome . " <$email> \r\n";
	$headers .= "CC: ademirconstantino@libero.it\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
	$ademir = 'ademirconstantino@gmail.com';
	mail($ademir, $subject, $mensagem, $headers);
	$redirect = "http://www.constantinoit.com/thankyou.php?lang=" .$lang;
	header("location:$redirect");
}
?>