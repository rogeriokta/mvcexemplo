<?php
define('ROOT_PATH', dirname(__FILE__));
/* Realiza a inclusão dos arquivos com os códigos Model, View, Controller*/
include  ROOT_PATH. '/Controller/Controller.php';
include ROOT_PATH. '/View/View.php';
include ROOT_PATH . '/Model/Model.php';
/* Pega a ação passada pela URL*/
if(isset($_GET['acao'])){
    $acao = $_GET['acao'];
}
/* Valida a ação passada, verifica se ela existe e se ela e o login
* Se a ação exisTir e for login inicia a função login do Controller
* Se não inicia a função login da View*/
if(isset($acao) && $acao == 'login'){
$controller = new Controller();
$controller->login();
}else{
$view = new View();
$view->login(null);
}
?>