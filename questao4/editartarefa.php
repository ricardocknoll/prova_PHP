<?php
require_once("function.php");
$get = filter_input_array(INPUT_GET);
if (isset($get['id'])) {
    global $conexao;
    $tarefaDao = new TarefaDao($conexao);
    $id = $get['id'];
    $tarefa = $tarefaDao->getTarefa($id);
?>
<meta charset="utf-8">
<div id="editar-tarefa-content">
    <form name="atualizar-tarefa" action="index.php" method="post">
        <table class="table-formulario">   
            <tbody>
                <tr valign="top">
                    <td><input name="id" type="text" hidden="true" value="<?php echo $id; ?>"></td>
                </tr>
                <tr>
                    <td class="label-formulario-box">Título : </td>
                    <td><input name="titulo" type="text" class="form-control campo-texto" value="<?php echo utf8_encode($tarefa->getTitulo()); ?>" required=""></td>
                </tr>
                <tr>
                    <td class="label-formulario-box">Descrição : </td>
                    <td><textarea name="descricao" type="text" class="form-control campo-areatexto" required=""><?php echo utf8_encode($tarefa->getDescricao()); ?></textarea></td>
                </tr>
                <tr>
                    <td class="label-formulario-box">Prioridade : </td>
                    <td>
                        <select name="prioridade" type="number" class="form-control" required="">
                            <option value='<?php echo $tarefa->getPrioridade(); ?>'><?php echo getNomePrioridade($tarefa->getPrioridade()); ?></option>
                            <option value=''></option>
                            <option value='1'>Baixa</option>
                            <option value='2'>Média</option>
                            <option value='3'>Alta</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" class="btn btn-primary botao-formulario"  name="submit" value="Atualizar"></td>
                </tr>
            </tbody>    
        </table>
    </form>
</div>
<?php 
} else {
    die();
}