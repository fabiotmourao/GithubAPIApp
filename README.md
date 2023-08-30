# Pré-requisitos
Antes de começar, certifique-se de ter o seguinte instalado

PHP (7.4 ou superior)
Composer
Laravel

# Instalação

## Clone o repositório
git clone https://github.com/your-username/github-user-info.git
cd github-user-info

## Instale dependências usando o Composer
composer install

## Renomeie .env.example .env insira linha com o URL da API do GitHub
dotenv
API_GIT_URL_BASE=https://api.github.com

## Gere uma chave de aplicativo
php artisan key:generate

## Inicie o servidor de desenvolvimento
php artisan serve

## Uso
Página inicial, onde poderá ver um formulário de pesquisa.
Digite um nome de usuário GitHub na entrada de pesquisa e clique no botão “Buscar”.
Se o nome de usuário for encontrado, você será redirecionado para uma página que exibe informações detalhadas sobre o usuário.
Se o nome de usuário não for encontrado ou a chamada da API encontrar um erro, você verá uma mensagem de erro.
Para procurar outro usuário, basta retornar à página inicial clicando no link “Voltar”.

## Sobre o codigo!

Utilizando o laravel e seu MVC, usei a criação de rotas para assim ter acesso a uma classe com metodos e views.
nessas rotas utilizando s solicitação HTTP (como GET, POST) responde a redirecionamento que deve executar para os metodos de um controlador nesse caso trabalhei com a rota web.php,

Por sua vez essa controller no caso GithubUserController contém funções especificas para cada ação: index() que retorna uma view chamada,

A função pesquisar() que aceita uma instância de Request como parâmetro. Este método é responsável por consumir a API do GitHub e exibir os detalhes de um usuário.
A função getUrlData()  é privada e é usada para fazer a solicitação à API do GitHub. Ela utiliza a extensão file_get_contents() para obter os dados.
é chamada para obter os dados da API do GitHub. 

Se a requisição for bem-sucedida, os detalhes do usuário são armazenados em uma variavel e enviada para view assim o usuário é retornado com suas informações.

index.blade.php é um template que exibe um formulário de pesquisa para inserir o nome de usuário.
Se houver mensagens de erro na sessão, elas são exibidas no topo da página.
user.blade.php para exibir os detalhes do usuário 

Ambos os templates possuem estilos CSS incorporados para definir a aparência dos elementos na página.


 
