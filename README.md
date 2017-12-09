## __Teste de Conhecimentos - Analista Desenvolvedor__

### __Quest�o 1__

Escreva um programa que imprima n�meros de 1 a 100. Mas, para m�ltiplos de 3 imprima �Fizz� em vez do n�mero e para m�ltiplos de 5 imprima �Buzz�. Para n�meros m�ltiplos de ambos (3 e 5), imprima �FizzBuzz�.

#### __Resposta - Quest�o 1__

O arquivo contendo a resposta est� no seguinte diret�rio:
```
/prova_PHP/questao1/index.php
```

### __Quest�o 2__

Refatore o c�digo abaixo, fazendo as altera��es que julgar necess�rio.

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

#### __Resposta - Quest�o 2__

O arquivo contendo a resposta est� no seguinte diret�rio:
```
/prova_PHP/questao2/resposta.php
```

### __Quest�o 3__

Refatore o c�digo abaixo, fazendo as altera��es que julgar necess�rio.

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

#### __Resposta - Quest�o 3__

O arquivo contendo a resposta est� no seguinte diret�rio:
```
/prova_PHP/questao3/User.php
```

### __Quest�o 4__

Desenvolva uma API Rest para um sistema gerenciador de tarefas (inclus�o/altera��o/exclus�o). As tarefas consistem em t�tulo e descri��o, ordenadas por prioridade.  
Desenvolver utilizando:  
* Linguagem PHP (ou framework CakePHP);  
* Banco de dados MySQL;  
Diferenciais:  
* Cria��o de interface para visualiza��o da lista de tarefas;  
* Interface com drag and drop;  
* Interface responsiva (desktop e mobile);  

#### __Resposta - Quest�o 4__

Para o desenvolvimento deste projeto foi utilizado o WampServer com a seguinte configura��o:
* Apache - vers�o 2.4.23
* PHP - vers�o 5.6.25
* MySQL - vers�o 5.7.14

Os arquivos do projeto se encontram no seguinte diret�rio:
```
/prova_PHP/questao4/
```

Para fazer um teste da aplica��o, basta baixar o diret�rio questao4 e coloc�-lo no diret�rio raiz do seu servidor local.
Em seguida, importe para o seu banco de dados o arquivo questao4/estrutura.sql.
Estando com o servidor funcionando e o banco de dados criado, basta apenas digitar a seguinte url no seu navegador:

```
http://localhost/questao4/
```
