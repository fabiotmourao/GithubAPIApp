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



 
