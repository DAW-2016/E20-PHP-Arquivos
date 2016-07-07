## PHP: Arquivos

**Desenvolvimento de Aplicações Web - COLTEC/MG**

**João Eduardo Montandon**

##### Log de Acesso

Implemente um script em PHP que faça o log de acessos a uma página em  um arquivo. O log deverá conter o IP do usuário junto da data/hora de acesso. Exemplo:
  
    150.16.10.218 20/03/2014 15:51:33
    150.128.11.125 21/03/2014 20:11:23
    150.16.10.116 21/03/2014 21:34:50
    
OBS: Para recuperar o IP do usuário, consulte este <a href="http://lmgtfy.com/?q=how+to+get+ip+php">link</a>.


##### Livro de Visitas
Implemente uma página em PHP que funcione como um livro de visitas: O usuário acessa a página, preenche um formulário com seu nome e local, e então esses dados são armazenados em um arquivo. Faça também a página para exibir os usuários que já passaram pela página anteriormente.

##### Leitura CSV

Implemente um script em PHP que leia um arquivo no formato CSV, e apresente esses dados no formato de uma tabela. *OBS: Existem funções em PHP que agilizam a leitura de dados via CSV.*

##### Cadastro Bancário

Implemente uma página em PHP que cadastre clientes de um banco. Para se cadastrar um cliente, é necessário passar os seguintes dados:
  * Nome
  * CPF
  * Endereço
  * Agência
  * Conta corrente
		
O cliente deverá ser registrado no arquivo da seguinte forma:

    Cliente:
    José Augusto
    222.222.222-22
    Rua das Moscas, 316, Belo Horizonte
    2310-2
    319745-1
    
    Cliente:
    Maria Fernanda
    333.333.333-33
    Rua dos Ladrilhos, 1231, Contagem
    3411-2
    657489-0


##### Cadastro Bancário - pt 2.

Implemente uma página em PHP que recupere um cliente cadastrado no exercício anterior. O usuário deverá passar, por meio de um formulário, o índice do cliente a ser recuperado. Tomando como exemplo os registros do exercício anterior, a página irá exibir os dados de *Maria Fernanda* ao passar o valor *2* como índice.
