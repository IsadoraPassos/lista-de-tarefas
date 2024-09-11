# Aplicação Laravel simples no Docker Hub

Este repositório contém os arquivos criados durante o desenvolvimento do trabalho de Docker da disciplina de Tecnologias Sustentáveis, foi desenvolvida uma lista de tarefas simples sem usar o banco de dados. A pasta `app` contém os arquivos do projeto e a pasta `docker` contém os arquivos usados para gerar o build da imagem que está disponível no Docker Hub.

## Rodando o projeto

1. Para rodar a aplicação só é necessário ter o docker instalado e executar o seguinte comando no terminal (se estiver usando Windows, será necessário ter o WSL instalado):

    ```bash
    docker run -p 8080:80 isadora145/lista-de-tarefas-docker:v1
    ```

3. Aguarde a configuração do ambiente, isso pode demorar um pouco na primeira execução, quando a linha de código a seguir for exibida a configuração terminou:
> INFO success: php-fpm entered RUNNING state, process has stayed up for > than 1 seconds (startsecs)
5. Em seguida, já será possível acessar a aplicação em: [http://localhost:8080/](http://localhost:8080/)

### Observação:
Você pode mudar a porta ao executar o comando.

## Referências

- Imagem no docker hub: [isadora145/lista-de-tarefas-docker](https://hub.docker.com/repository/docker/isadora145/lista-de-tarefas-docker/general)
- Configuração do Dockerfile: [docker-php-com-nginx](https://github.com/urnauzao/docker-php-com-nginx) e [Tutorial Armazenando e Executando uma Aplicação Laravel](https://www.youtube.com/watch?v=4RFkrzDPCpg)
- Configuração da imagem: [Como Criar Imagem Docker para Ambiente de Produção](https://www.youtube.com/watch?v=iDJjb2zYa4c)
