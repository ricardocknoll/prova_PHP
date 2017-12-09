<?php 
require_once("conecta.php");

/**
 * Função de auload das classes
 * @return void
 */
function carregaClasse($nomeDaClasse) {
	require_once("class/".$nomeDaClasse.".php");
}

spl_autoload_register("carregaClasse");

/**
 * Função para imprimir os dados das tarefas
 * @return void
 */
function imprimirDadosTarefas() {
    global $conexao;
    echo "<tbody>
            <tr class='label-titulo-tabela'>
                <td>Prioridade</td>
                <td>Título</td>
                <td>Descrição</td>                
                <td class='coluna-button'></td>
                <td class='coluna-button'></td>
            </tr>";
    $tarefasDao = new TarefaDao($conexao);
    $tarefas = $tarefasDao->getTarefasPorPrioridade();
    $count = count($tarefas);
    for ($i = 0; $i < $count; $i++) {
        $tarefa = $tarefasDao->getTarefa($tarefas[$i]['id']);
        $prioridade = getEtiquetaPrioridade($tarefa->getPrioridade());
        echo "<tr class='label-linha-tabela'>
                <td class='prioridade'>{$prioridade}</td>
                <td>".utf8_encode($tarefa->getTitulo())."</td>
                <td>".utf8_encode($tarefa->getDescricao())."</td>
                <td class='button-tabela coluna-button'>
                    <a href='editartarefa.php?id={$tarefa->getId()}&inlineId=editar-tarefa-content' title='Editar tarefa' class='thickbox'>
                        <button type='button' class='btn btn-primary button-icon'>
                            <span class='glyphicon glyphicon-pencil' aria-hidden='true'></span> 
                        </button>
                    </a>
                </td>
                <td class='button-tabela coluna-button'>
                    <a href='removertarefa.php?id={$tarefa->getId()}&inlineId=remover-tarefa-content' title='Remover tarefa' class='thickbox'>
                        <button type='button' class='btn btn-danger button-icon'>
                            <span class='glyphicon glyphicon-trash' aria-hidden='true'></span> 
                        </button>
                    </a>
                </td>
              </tr>";
    }
    echo "</tbody>";
}

/**
 * Função para atualizar a tabela de tarefas
 * @param array $post
 * @return void
 */
function atualizarTabelaTarefas($post) {
    global $conexao;
    $tarefaDao = new TarefaDao($conexao);
    switch ($post['submit']) {
        case 'Cadastrar':
            $tarefa = new Tarefa($post['titulo'], $post['descricao'], $post['prioridade']);
            $tarefa->setId($post['id']);
            $tarefaDao->cadastrarTarefa($tarefa);
            break;
        case 'Atualizar':
            $tarefa = new Tarefa($post['titulo'], $post['descricao'], $post['prioridade']);
            $tarefa->setId($post['id']);
            $tarefaDao->atualizarTarefa($tarefa);
            break;
        case 'Sim':
            $tarefaDao->removerTarefa($post['id']);
            break;
        default :
            break;
    }
    echo "<meta HTTP-EQUIV='refresh' CONTENT='2;URL=#'>";
}

/**
 * Função para retornar a etiqueta referenta a prioridade
 * @param int $prioridade
 * @return String
 */
function getEtiquetaPrioridade($prioridade) {
    switch ($prioridade) {
        case '1':
            return "<h4><span class='label label-success'>Baixa</span></h4>";
        case '2':
            return "<h4><span class='label label-warning'>Média</span></h4>";
        case '3':
            return "<h4><span class='label label-danger'>Alta</span></h4>";
    }
}

/**
 * Função para retornar o valor nominal referenta a prioridade
 * @param int $prioridade
 * @return String
 */
function getNomePrioridade($prioridade) {
    switch ($prioridade) {
        case '1':
            return "Baixa";
        case '2':
            return "Média";
        case '3':
            return "Alta";
    }
}