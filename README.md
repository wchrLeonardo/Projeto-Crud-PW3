

# Projeto-Crud-PW3
#### Projeto Crud integrando Banco de Dados em um cadastro de Alunos.

![Badge em Desenvolvimento](http://img.shields.io/static/v1?label=STATUS&message=EM%20DESENVOLVIMENTO&color=GREEN&style=for-the-badge)

### Introdução
Primeiramente, CRUD é o acrônimo para Create (criar), Read (ler), Update (atualizar) e Delete (apagar). Com essa explicação, já dá para intuir que o CRUD é uma sequência de funções de um sistema que trabalha com banco de dados, seja ele na sua máquina ou na nuvem.<br>
Este Projeto foi realizado em sala de aula do curso de Desenvolvimento de Sistemas da Etec de Registro, e consegue inserir, armazenar, atualizar e excluir uma base de dados referente a alunos de uma determinada instituição.<br>

### Primeiros Passos e Criação do nosso Banco de Dados
O primeiro passo para realizar o nosso CRUD é que você tenha todas as ferramentas necessárias para isso.
Tenha instalado em sua máquina as ferramentas de Servidor de Código e SQL. Alguns exemplos são o [Xampp](https://www.apachefriends.org/pt_br/download.html) e o [MySql Workbench](https://www.mysql.com/products/workbench/)

No Painel de Controle do Xampp ative o Servidor APACHE e o MYSQL
<p></p/>
 
![image](https://user-images.githubusercontent.com/128431361/229603508-1cec1b0b-7d73-4122-9a97-1a8152003f59.png)

**Pronto!** Agora podemos criar o nosso Banco de Dados<br>
Criamos nossa DATABASE chamada ```escola``` <br>
Foram inseridas na tabela ```aluno``` os atributos <kbd>codigo</kbd> <kbd>nome</kbd> <kbd>cidade</kbd> <kbd>sexo</kbd> tendo **CODIGO** como nossa chave primária.

![image](https://user-images.githubusercontent.com/128431361/229612091-b3a455b1-0321-418e-ab06-484e322717dd.png)

### Conectando o Banco de Dados ao nosso Projeto
#### Agora podemos começar a codar!!!
Utilizando o Editor de Códigos de sua preferência faça o seu arquivo **conexao.php** <br>
Neste caso estaremos utilizando o [Visual Studio CODE](https://code.visualstudio.com/) <br>
<p></p>

É importante lembrar que estaremos usando o padrão MVC (Models, Views, Controllers) <br>
O MVC é uma sigla do termo em inglês Model (modelo) View (visão) e Controller (Controle) que facilita a troca de informações entre a interface do usuário aos dados no banco, fazendo com que as respostas sejam mais rápidas e dinâmicas.<br>
Você deverá criar essas 3 pastas e inserir os arquivos relacionados ao Banco de Dados e todas as funções criadas em <kbd>Controllers</kbd>, arquivos relacionados a conexão serão inseridos em <kbd>Models</kbd>, e as páginas visíveis aos usuários em <kbd>Views</kbd>. <br>
Ainda dentro de <kbd>Views</kbd> você deverá criar uma sub-pasta chamada de <kbd>blades</kbd> onde se encontrará o seu *Header*(Cabeçalho da página) e o seu *Footer*(Rodapé).<br>
Lembre-se de que o index.php está fora dessas 3 pastas.
Ao final desta execução sua pasta deve-se parecer com isto: 

![image](https://user-images.githubusercontent.com/128431361/229615624-9a70150b-ee5d-4b56-ac6d-ad4070053d85.png)

Dentro do seu arquivo **conexao.php** criaremos uma váriavel ```$conexao``` e atribuiremos as ferramentas de Banco de Dados o nosso IP (nesse caso padrão = **127.0.0.1**), nome de usuário(padrão do banco), senha (vazia ou nula), nome do banco e um **_meta_** para as normas padrão da lingua portuguesa:

![image](https://user-images.githubusercontent.com/128431361/229618099-351141b7-b0d2-427f-b910-98db660745e2.png)

### Criando nosso INDEX
Dentro de <kbd>blades</kbd> vamos criar o nosso cabeçalho da página de nome **header.php**, nele vamos gerar a estrutura padrão do HTML5 e vamos dar um toque de estilo com o [BOOTSTRAP5](https://getbootstrap.com/docs/5.0/getting-started/introduction/)

![image](https://user-images.githubusercontent.com/128431361/229619408-a2a295e7-d7b8-46cc-a51f-64953d9cf7b4.png)

Perceba que no código só abrimos a tag **< body >**(corpo da página) porquê o conteúdo ficará todo no nosso arquivo **index.php**, assim como o fechamento da mesma será adicionada apenas no nosso rodapé **footer.php** <br>
<p></p>

No nosso rodapé iremos utilizar uma estrutura parecida com o cabeçalho, onde apenas adicionaremos o outro link do **Bootstrap5** contento os arquivos <kbd>Js</kbd> e fecharemos a tag **</ body >**

![image](https://user-images.githubusercontent.com/128431361/229621497-f3083f0b-3756-44ec-b1c1-ceff5b199ff1.png)

Agora no nosso arquivo **index.php** (Página Inicial do Projeto) fora das outras pastas iremos começar **_incluindo_** o nosso cabeçalho e a função ```mostrarDados()``` que AINDA IREMOS CRIAR lá na nossa pasta <kbd>controllers</kbd>

![image](https://user-images.githubusercontent.com/128431361/229622760-74ba32ed-d4f4-4f88-ab51-221341e3eee0.png)

Note que especificamos todo o caminho dos arquivos até serem inseridos no nosso **index**, tudo dentro da tag do ```PHP``` <br>

Agora dentro de uma <kbd> div class </kbd>,que está utilizando a estilização do **BOOTSTRAP5**, nos iremos fazer um link que levará o usuário até uma página de cadastro que AINDA IREMOS CRIAR também, lá na nossa pastinha <kbd>controllers</kbd>.
O link estará dentro de um botão chamado **Cadastrar**. <br>
Ainda dentro da <kbd>div class</kbd> criaremos um formulário que enviará os dados para o próprio **index** como objetivo de criar uma barra de busca que será alimentada pela nossa função ```mostrarDados()``` ainda NÃO CRIADA.<br>
Depois de fechar o formulário e criar uma linha dentro de outra tag ```PHP``` iremos chamar a nossa função ```mostrarDados()``` assim podendo fechar a nossa <kbd>div class</kbd>.
