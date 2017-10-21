<?PHP	//recebe variaveis
    $def_nome = $_POST["nome_arquivo"];
    $def_titulo = $_POST["def_titulo"];
    $def_column = $_POST["def_column"];

    
    //$def_mobile = $_POST["def_mobile"];
   // $def_template = $_POST["def_template"];
    ;

 

     

    //monta diretorio, nome e extensao do arquivo	
    $dir_arq = 'includes/page_'.$def_nome.'.php';
    //verifica se o arquivo já existe!
       	if (file_exists($dir_arq)) {	  
           echo "A página \"$def_nome\" já existe.";	} else {
               // cria o arquivo	
               $arq = fopen("$dir_arq", "x+");	
                //escreve no arquivo		
               if(fwrite($arq,"<section id='impermeablizacao'>
                  <div class='container'> <div class='row'>
                    <div class='row'>".$def_column."</div>
                    </div></div><section>"))
                     {	
                  	  echo "Arquivo criado com sucesso!";		} 

                else {
                     echo "erro ao criar o arquivo";	
                 }	};
                 

                

?>