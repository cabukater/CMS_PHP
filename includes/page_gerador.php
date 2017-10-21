<section id="gerador">
   <div class="container"> 
   <form class="form-horizontal" name="generator" method="post" action="action.php">
      <div class="row"> 
       <h1>
         Gerador de paginas em PHP 
         camila.tech 
        
        </h1>
        </div>

        <div class="row">
        <div class="col-xs-12 col-md-6">
               <div class="form-group">
                  <label class="control-label" for="nome_arquivo">Nome da página:</label>
                 <input type="text" name="nome_arquivo" class="form-control" id="nome_arquivo">
                </div>
            </div>
        <div class="col-xs-12 col-md-6">
               <div class="form-group">
                  <label class="control-label" for="def_titulo">Titulo da Página:</label>
                 <input type="text" name="def_titulo" class="form-control" id="def_titulo">
                </div>
            </div>



        
        </div>
        <div class="row"> 


          <!-- Select Basic -->
            <div class="col-xs-12 col-md-6">
                <div class="form-group">
                    <label class="control-label" for="def_column_1">Colunas Linha1</label>

                    <select id="def_column_1" name="def_column_1" class="form-control">
                        <option value="<?php include('cca_gerador/columns_1.php');?>">1 Coluna por linha</option>
                        <option value="<?php include('cca_gerador/columns_2.php');?>">2 Colunas por linha</option>
                        <option value="<?php include('cca_gerador/columns_3.php');?>">3 Colunas por linha</option>
                        <option value="<?php include('cca_gerador/columns_4.php');?>">4 Colunas por linha</option>
                    </select>
                </div>
            </div>
           


<!-- Button -->
        </div>
        <div class="row"> 


          <!-- Select Basic -->
            <div class="col-xs-12 col-md-6">
                <div class="form-group">
                    <label class="control-label" for="def_column_2">Colunas Linha1</label>

                    <select id="def_column_2" name="def_column_2" class="form-control">
                        <option value="<?php include('cca_gerador/columns_1.php');?>">1 Coluna por linha</option>
                        <option value="<?php include('cca_gerador/columns_2.php');?>">2 Colunas por linha</option>
                        <option value="<?php include('cca_gerador/columns_3.php');?>">3 Colunas por linha</option>
                        <option value="<?php include('cca_gerador/columns_4.php');?>">4 Colunas por linha</option>
                    </select>
                </div>
            </div>
           


<!-- Button -->
        </div>

        <div class="row "> 


          <!-- Select Basic -->
            <div class="col-xs-12 col-md-6">
                <div class="form-group">
                    <label class="control-label" for="def_column_3">Colunas Linha3</label>

                    <select id="def_column_3" name="def_column_3" class="form-control">
                    <option value="">Sem nada</option>
                        
                        <option value="<?php include('cca_gerador/columns_1.php');?>">1 Coluna por linha</option>
                        <option value="<?php include('cca_gerador/columns_2.php');?>">2 Colunas por linha</option>
                        <option value="<?php include('cca_gerador/columns_3.php');?>">3 Colunas por linha</option>
                        <option value="<?php include('cca_gerador/columns_4.php');?>">4 Colunas por linha</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-md-6">
                <div class="form-group">
                    <label class="control-label" for="def_column_4">Colunas Linha2</label>

                    <select id="def_column_4" name="def_column_4" class="form-control">
                    <option value="">Sem nada</option>
                        <option value="<?php include('cca_gerador/columns_1.php');?>">1 Coluna por linha</option>
                        <option value="<?php include('cca_gerador/columns_2.php');?>">2 Colunas por linha</option>
                        <option value="<?php include('cca_gerador/columns_3.php');?>">3 Colunas por linha</option>
                        <option value="<?php include('cca_gerador/columns_4.php');?>">4 Colunas por linha</option>
                    </select>
                </div>
            </div>

            </div>
            
        


<!-- Button -->
        </div>

   
</div>


        

        <div >
               <button id="addFields" type="button">Add More Fields</button>
        
        </div>
       <!-- 

       <label>Nome da página 
        
       </label>  <br />  <label>Insira o código fonte:  
 PROXIMA INSTANCIA DO PROJETO PEGAR TEXTO OU IMAGEM DE FORMA DINAMICA <input type="hidden" name="def_cod" id="def_cod" value="<?php include('code.php');?>" ></textarea>  </label>  <br />-->
 <input name="criar" type="submit" value="Criar P&aacute;gina" />
      </form>
   </div>

</section>