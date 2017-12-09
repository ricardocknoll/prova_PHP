<?php
class TarefaDao {
    
    private $conexao;

    public function __construct($conexao) 
    {
        $this->conexao = $conexao;
    }
    
    /**
     * Função para retornar uma lista com todas as tarefas
     * @access public
     * @return [array]
     */
    public function getTarefas() 
    {
        $query = "SELECT * FROM tarefa";
        $resultado = mysqli_query($this->conexao, $query);
        $tarefas = mysqli_fetch_all($resultado, MYSQLI_ASSOC);    
        return $tarefas;
    }
    
    /**
    * Funçãoo para retornar um objeto da classe Tarefa levando o ID como parâmetro
    * @access public
    * @param int $id
    * @return [Tarefa]
    */
    public function getTarefa($id) 
    {
        $query = "SELECT * FROM tarefa WHERE id = '$id'";
        $resultado = mysqli_query($this->conexao, $query);
        $tarefas = mysqli_fetch_all($resultado, MYSQLI_ASSOC); 
        if (empty($tarefas)) {           
            return null;        
        } else {    
            $tarefa = new Tarefa($tarefas[0]['titulo'], $tarefas[0]['descricao'], $tarefas[0]['prioridade']);
            $tarefa->setId($tarefas[0]['id']);
            return $tarefa;
        } 
    }
    
    /**
    * Função para retornar uma lista com todas as tarefas ordenadas por prioridade
    * @access public
    * @return [array]
    * 
    */
    public function getTarefasPorPrioridade() 
    {
        $query = "SELECT * FROM tarefa ORDER BY prioridade DESC";
        $resultado = mysqli_query($this->conexao, $query);
        $tarefas = mysqli_fetch_all($resultado, MYSQLI_ASSOC);    
        return $tarefas;
    }
    
    /**
    * Função para cadatrar uma Tarefa
    * @access public
    * @param Tarefa $tarefa
    * @return void
    */
    public function cadastrarTarefa(Tarefa $tarefa) 
    { 
        $query = "INSERT INTO tarefa (titulo, descricao, prioridade)
                  VALUES ('".utf8_decode($tarefa->getTitulo())."','".utf8_decode($tarefa->getDescricao())."','{$tarefa->getPrioridade()}')";
        $resultado = mysqli_query($this->conexao, $query);
        if ($resultado) {
            echo "<p class='bg-success'>Tarefa cadastrada com sucesso!</p>";
        } else {
            echo "<p class='bg-danger'>Erro ao cadastrar uma tarefa!</p>";
        }    
    }
    
    /**
    * Função para atualizar os dados de uma Tarefa
    * @access public
    * @param Tarefa $tarefa
    * @return void
    */
    public function atualizarTarefa(Tarefa $tarefa) 
    {
        $query = "  UPDATE tarefa
                    SET titulo='".utf8_decode($tarefa->getTitulo())."',
                        descricao='".utf8_decode($tarefa->getDescricao())."',
                        prioridade='{$tarefa->getPrioridade()}'
                    WHERE id={$tarefa->getId()}";
        $resultado = mysqli_query($this->conexao, $query);
        if ($resultado) {
            echo "<p class='bg-success'>Tarefa alterada com sucesso!</p>";
        } else {
            echo "<p class='bg-danger'>Erro ao alterar uma tarefa!</p>";
        }
    }
    
    /**
    * Função para remover uma Tarefa
    * @access public
    * @param int $id
    * @return void
    */
    public function removerTarefa($id) 
    {
       $query = "DELETE FROM tarefa WHERE id = '{$id}'";
       $resultado = mysqli_query($this->conexao, $query);
       if ($resultado) {
           echo "<p class='bg-success'>Tarefa removida com sucesso!</p>";
        } else {
           echo "<p class='bg-danger'>Erro ao remover uma tarefa!</p>";
        }
    }
}

