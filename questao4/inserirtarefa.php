<meta charset="utf-8">
<div id="inserir-tarefa-content">
    <form name="inserir-tarefa" action="index.php" method="post">
        <table class="table-formulario">   
            <tbody>
                <tr valign="top">
                    <td><input name="id" type="text" hidden="true" value=""></td>
                </tr>
                <tr>
                    <td class="label-formulario-box">Título : </td>
                    <td><input name="titulo" type="text" class="form-control campo-texto" value="" required=""></td>
                </tr>
                <tr>
                    <td class="label-formulario-box">Descrição : </td>
                    <td><textarea name="descricao" type="text" class="form-control campo-areatexto" required=""></textarea></td>
                </tr>
                <tr>
                    <td class="label-formulario-box">Prioridade : </td>
                    <td>
                        <select name="prioridade" type="number" class="form-control" required="">
                            <option value='1'>Baixa</option>
                            <option value='2'>Média</option>
                            <option value='3'>Alta</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" class="btn btn-primary botao-formulario"  name="submit" value="Cadastrar"></td>
                </tr>
            </tbody>    
        </table>
    </form>
</div>