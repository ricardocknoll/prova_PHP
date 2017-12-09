<?php

class User 
{
    private $conexao;

    public function __construct() 
	{
        $this->conexao = mysqli_connect("localhost","root","password","user");
    }
	
	/* 
	Ou pode ser feito tambem com um outro construtor que receba como parametro uma variavel
	contendo a conexao com o banco e apenas setando no atributo $conexao, como no exemplo abaixo:
	
	public function __construct($conexao) 
	{
        $this->conexao = $conexao;
    }
	
	Assim a classe User ficaria independente dos parametros de conexao com o banco, podendo
	ser utilizada em qualquer outra aplicacao com um outro banco(MySql).	
	*/

	public function getList() 
	{
		$query = "SELECT name FROM user";
		$resultado = mysqli_query($this->conexao,$query);
		$usuarios = mysqli_fetch_all($resultado,MYSQLI_ASSOC);
		sort($usuarios);
		return $usuario;
	}
}