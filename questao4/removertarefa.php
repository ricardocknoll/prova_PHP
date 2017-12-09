<?php
$get = filter_input_array(INPUT_GET);
if (isset($get['id'])) {
    $id = $get['id'];
?>
<meta charset="utf-8">
<div id="remover-tarefa-content">
    <h5>Deseja realmente remover esta tarefa?</h5>
    <form name="remover-tarefa" action="index.php" method="post">   
        <table>
            <tbody>
                <tr valign="top">                          
                    <td><input type='text' name='id' value='<?php echo $id; ?>' hidden='true'></td>
                </tr>
            </tbody>
        </table>
        <p class="submit" style="text-align: center;">						
            <input style="margin: 1px 190px 1px 4px;" type="submit" class="btn btn-primary" name="submit" value="Sim">
            <input type="button" class='btn btn-danger' name="submit" value="Não" onclick="document.getElementById('TB_closeWindowButton').click();">
        </p>  
    </form>
</div>
<?php 
} else {
    die();
}