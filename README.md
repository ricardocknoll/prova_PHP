## __Teste de Conhecimentos - Analista Desenvolvedor__

### __Questão 1__

Escreva um programa que imprima números de 1 a 100. Mas, para múltiplos de 3 imprima “Fizz” em vez do número e para múltiplos de 5 imprima “Buzz”. Para números múltiplos de ambos (3 e 5), imprima “FizzBuzz”.

#### __Resposta - Questão 1__

O arquivo contendo a resposta está no seguinte diretório:
```
/prova_PHP/questao1/index.php
```

### __Questão 2__

Refatore o código abaixo, fazendo as alterações que julgar necessário.

```php
<?

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    header("Location: http://www.google.com");
    exit();
} elseif (isset($_COOKIE['Loggedin']) && $_COOKIE['Loggedin'] == true) {
    header("Location: http://www.google.com");
    exit();
}
```

#### __Resposta - Questão 2__

O arquivo contendo a resposta está no seguinte diretório:
```
/prova_PHP/questao2/resposta.php
```

### __Questão 3__

Refatore o código abaixo, fazendo as alterações que julgar necessário.

```php
<?php

class MyUserClass
{
    public function getUserList()
    {
        $dbconn = new DatabaseConnection('localhost','user','password');
        $results = $dbconn->query('select name from user');

        sort($results);

        return $results;
    }
}
```

#### __Resposta - Questão 3__

O arquivo contendo a resposta está no seguinte diretório:
```
/prova_PHP/questao3/User.php
```

### __Questão 4__

Desenvolva uma API Rest para um sistema gerenciador de tarefas (inclusão/alteração/exclusão). As tarefas consistem em título e descrição, ordenadas por prioridade.  
Desenvolver utilizando:  
* Linguagem PHP (ou framework CakePHP);  
* Banco de dados MySQL;  
Diferenciais:  
* Criação de interface para visualização da lista de tarefas;  
* Interface com drag and drop;  
* Interface responsiva (desktop e mobile);  

#### __Resposta - Questão 4__

Para o desenvolvimento deste projeto foi utilizado o WampServer com a seguinte configuração:
* Apache - versão 2.4.23
* PHP - versão 5.6.25
* MySQL - versão 5.7.14

Os arquivos do projeto se encontram no seguinte diretório:
```
/prova_PHP/questao4/
```

Para fazer um teste da aplicação, basta baixar o diretório questao4 e colocá-lo no diretório raiz do seu servidor local.
Em seguida, importe para o seu banco de dados o arquivo questao4/estrutura.sql.
Estando com o servidor funcionando e o banco de dados criado, basta apenas digitar a seguinte url no seu navegador:

```
http://localhost/questao4/
```
