<?
$config                           = array();

/**
 * Gerais
 */
$config["SITE_TITLE"]              = "LIVRE // Sistema";
$config["SITE_PAGEINDEX"]          = "home";
$config["SITEKEY"]                = "123456789";


/**
 * Path's
 */
if( $_SERVER['HTTP_HOST'] == 'localhost') {
  $config["ROOT_PATH"] = "D:/github/site_sistema.livresweb.com/";
  $config["ROOT_URL"] = "http://localhost/github/site_sistema.livresweb.com/";
} else {
  $config["ROOT_PATH"] = "/dados/http/livresweb.com/sistema/";
  $config["ROOT_URL"] = "http://http.nbz.net.br/livresweb.com/sistema/";

}

/**
 * DB
 */
if( $_SERVER['HTTP_HOST'] == 'localhost')
  $config["DB_HOST"]                 = "nbz.net.br";
else
  $config["DB_HOST"]                 = "localhost";


$config["DB_USER"]                 = "root";
$config["DB_PASS"]                 = "nwtiago";
$config["DB_PORT"]                 = "";
$config["DB_DATABASE"]             = "ielbc_com_br_sistema";
$config["DB_PERSISTENT"]           = true;


/**
 * E-mail
 */
$email                              = array();
$email["FROMNAME"]                  = "Nome do Remetente";
$email["FROM"]                      = "eu@dominio.com.br";
$email["SENDTYPE"]                  = "mail";
$email["CC"]                        = "";
$email["CCO"]                       = "";
$email["SMTPHOST"]                  = "";
$email["SMTPUSER"]                  = "";
$email["SMTPPASS"]                  = "";
$email["SMTPSECURE"]                = "";    //ssl tls (ou deixe em branco)
$email["SMTPPORT"]                  = "";
$config["EMAIL_CONFIG"]            = $email;

?>
