<?
require_once "sendmail.class.php";
$destino = filter_input(INPUT_POST,'redirect',FILTER_SANITIZE_URL);
$sendmail = new sendMail();
$sendmail->getParams($_POST);
$sendmail->parseBody();
$sendmail->setHeaders();
if ($sendmail->send())
  header('Location: ../contactoenviado.html');
else
  header('Location: ../contacto.html');