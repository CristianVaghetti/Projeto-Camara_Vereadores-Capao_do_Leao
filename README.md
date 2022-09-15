# Projeto para a Camara de Vereadores Capao do Leao

Projeto em Laravel de uma aplicação de controle de entrada e saída de consumíveis para a câmara de vereadores do Capão do Leão. O foco do projeto é controlar o fluxo dos materiais de cozinha, limpeza e expediente, de onve veio os materiais e pra onde vai e quem usou. Utilizando o framework Laravel é possível criar um sistema rápido, prático e eficiente.

## Para rodar a aplicação:

1. Clonar o repositório
2. No terminal da pasta raiz do projeto rodar o comando: ```composer install```
3. Configurar a conexão com o bando de dados no arquivo: ```.env```
4. Rodar as migrations ```php artisan migrate```
4. Rodar o comando ```PHP artisan key:generate ``` no terminal
5. Rodar o comando ```php artisan serve``` no terminal
6. Acessar o localhost:8000 ou o IP 127.0.0.1:8000 
> O 8000 refere-se a porta que a aplicação está rodando. Quando rodar o comando do item 5 no console será mostrado em qual porta está sendo servido.
