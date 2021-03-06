DROP DATABASE IF EXISTS gerenciador;
CREATE DATABASE gerenciador;

DROP TABLE IF EXISTS tarefa;
CREATE TABLE tarefa (
	id int(11) NOT NULL AUTO_INCREMENT,
	titulo varchar(30) NOT NULL,
	descricao text NOT NULL,
	prioridade ENUM('1','2','3') NOT NULL,
	PRIMARY KEY (id)
)

INSERT INTO tarefa (id,titulo,descricao,prioridade)
VALUES  (1,'Arrumar a cama','Organizar toda a roupa de cama, dobrando o len�ol no p� da cama e os travesseiros alinhados na parte de cima.',1),
		(2,'Limpar cozinha','Limpar todo o ambiente da cozinha utilizando os produtos que se encontram na �rea de servi�o.',1),
		(3,'Limpar banheiro','Limpar todo o ambiente do banheiro utilizando os produtos que se encontram no �rmario da pia.',3),
		(4,'Fazer almo�o','Utilizar os ingredientes que se encontram na despensa para fazer o almo�o.',2),
		(5,'Pagar as contas','Reunir todas os boletos a serem pagas no mesmo dia e ir no banco fazer o pagamento.',3),
		(6,'Verificar caixa dos correios','Todo dia fazer sempre uma verifica��o na caixa dos correios para ver se tem correspond�ncia',2);