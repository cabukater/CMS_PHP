<?php
session_start();
$def_titulo = $_SESSION['def_titulo'];
$def_nome = $_SESSION['def_nome'];


   function carrega_pagina(){
       (isset($_GET['p'])) ? $pagina = $_GET['p'] : $pagina = 'home';
    if(file_exists('includes/page_'.$pagina.'.php')):
        require_once('includes/page_'.$pagina.'.php');
    else:
        require_once('includes/page_home.php'); 
    endif;    
}



/**function gera_titulos(){

   

    (isset($_GET['p'])) ? $pagina = $_GET['p'] : $pagina = 'home';
    
     
switch ($pagina):

    case  $def_nome:
        $titulo =  $def_titulo;
        break;  

  

    default:
         $titulo = "Página inicial";
        break;
    endswitch;
    return $titulo;


}**/
?>

