# Site Engaja
Site Dinamico Engaja Jr

Para iniciar a trabalhar no projeto:

- git clone **linkdorepositório**
- Executar **composer update** na pasta do projeto
- Criar schema no Banco de Dados
- Criar arquivo .env com base no .env.example
- Executar **php artisan key:generate**
- Executar **php artisan migrate**
- Marcar tempo no clockify e iniciar a tarefa

Você precisa de fazer um fork do projeto para seu repositório

Depois, no terminal na pasta do seu projeto dê o comando: 

- git remote add **seunome** **linkdofork**

Quando solicitado "Dar pull":

- git pull **seunome** **nomebranch**

Ao concluir uma tarefa:

- git add .
- git commit -m **nomedocommit**
- git push **seunome** **nomebranch**
