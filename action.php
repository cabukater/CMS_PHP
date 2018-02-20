<?PHP	
//recebe variaveis
session_start();
    $def_nome = $_POST["nome_arquivo"];
    $def_titulo = $_POST["def_titulo"];
    $def_column_1 =  $_POST["def_column_1"];
    $def_column_2 =  $_POST["def_column_2"];
    $def_column_3 =  $_POST["def_column_3"];
    $def_column_4 =  $_POST["def_column_4"];
    //monta diretorio, nome e extensao do arquivo	
    $dir_arq = 'includes/page_'.$def_nome.'.php';
    //verifica se o arquivo já existe!
       	if (file_exists($dir_arq)) {	  
           echo "A página \"$def_nome\" já existe.";	} else {
           
               // cria o arquivo	
               $arq = fopen("$dir_arq", "x+");	
                //escreve no arquivo		
               if(fwrite($arq,"<section id='impermeablizacao'>
                  <div class='container'>
                    <div class='row'>
                    <div class='col-xs-12'>
                       <h1 class='titulo_geral'>".$def_titulo."</h1> </div></div> </section>"
                       .$def_column_1.$def_column_2.$def_column_3.$def_column_4."
                       </div>
                       </div><section>"
                       )
                ) {	
                        echo "Arquivo criado com sucesso!";	
                } 

                else {
                     echo "erro ao criar o arquivo";	
                 }	};
                 

                

?>