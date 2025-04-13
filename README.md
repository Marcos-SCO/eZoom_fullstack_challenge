# Desafio de Fullstack 🚀

Projeto realizado em um ambiente Docker com Laravel.
Possui uma página para demonstração contendo o front-end

<p>Front-end feito a partir do <a href="https://www.figma.com/design/xuFhpFgBqe8enSOlWMsnUd/TesteDev?node-id=0-1&node-type=canvas" target="_blank">Figma</a></p>
<p>Disponível para acesso em: <a href="http://ezoomfullstacklaravel.infinityfreeapp.com/" target="_blank">http://ezoomfullstacklaravel.infinityfreeapp.com/</a></p>

### Tecnologias Utilizadas 💻

- Docker
- PHP 8.2.12
- Laravel 11x
- Node.js v20.14.0
- Sass
- Javascript

## Instruções de Uso para rodar localmente 🚀

Este repositório contém arquivos Docker necessários para poder executar o ambiente de desenvolvimento.

## Pré-requisitos 📋

- Docker: Certifique-se de ter o Docker instalado em sua máquina. 


## Configuração do Arquivo .env 🛠️

1. Dentro da pasta `/eZoom`, localize o arquivo `.env.example`.

2. Copie este arquivo e cole na mesma pasta, renomeando-o para `.env`.

3. Abra o arquivo `.env` em um editor de texto.

4. Substitua os valores das variáveis de ambiente conforme necessário para a configuração da sua aplicação.

5. Salve as alterações no arquivo.

## Como Usar 🛠️

1. Navegue até o diretório onde os arquivos estão localizados.

2. Certifique-se de que sua aplicação está estruturada corretamente, incluindo todos os arquivos necessários, como `package.json`, `src` e outros, conforme esperado pelo Dockerfile e docker-compose.yml.

3. Agora fora da pasta eZooom, na raiz do projeto. Execute o seguinte comando para criar e iniciar os contêineres Docker:

    ```
    docker-compose up -d --build
    ```

Certifique-se de ajustar as configurações de acordo com as necessidades específicas da sua aplicação, como variáveis de ambiente, portas expostas e dependências do contêiner.

## Acesse o container
Estando na raiz, fora da pasta eZoom execute o comando para adentra o container

```bash
docker-compose exec web bash
```

```bash
composer install

composer dump-autoload -o
```

### Gere uma nova laravel key
```bash
php artisan key:generate"
```

### Rode os scripts do front-end 
```bash
npm run dev
```

Localmente a aplicação estará rodado em : http://localhost:8091/
