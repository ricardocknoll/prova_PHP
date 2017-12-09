<?php 
require_once("cabecalho.php");
require_once("function.php");

$post = filter_input_array(INPUT_POST);
if (isset($post['submit'])) {
    atualizarTabelaTarefas($post);   
}
?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="botao-cadastrar">
                    <a href='inserirtarefa.php?inlineId=inserir-tarefa-content' title='Cadastrar tarefa' class='thickbox'>
                        <button type='button' class='btn btn-primary'>Cadastrar nova tarefa</button>
                    </a>
                </div>
                <table class="table">
                <?php imprimirDadosTarefas(); ?>    
                </table>
            </div>
        </div>

    </div><!-- fechamento principal -->
</div><!-- fechamento container -->