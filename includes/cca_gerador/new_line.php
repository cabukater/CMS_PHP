<?php 
   echo "<section>
   <div class='container'>
    <div class='row'>
    <div class='form-group'>
    <label class='control-label' for='def_column'>Colunas por linha</label>

    <select id='def_column' name='def_column_1' class='form-control def_column'>
        <option value='<?php include('columns_1.php');?>'>1 Coluna por linha</option>
        <option value='<?php include('columns_2.php');?>'>2 Colunas por linha</option>
        <option value='<?php include('columns_3.php');?>'>3 Colunas por linha</option>
        <option value='<?php include('columns_4.php');?>'>4 Colunas por linha</option>
    </select>
</div> </div></section>";
?>