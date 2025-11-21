# itg-framework
Framework Wordpress V1

## 🚀 Começando

Essas instruções permitirão rodar na sua máquina local para fins de desenvolvimento.

### 📋 Pré-requisitos

```
Vscode, Docker (Criar uma conta) e Yarn ou npm para rodar os scripts
```

### 🔧 Instalação

```
1º passo é fazer a instalação do Docker 
(https://docs.docker.com/desktop/install/windows-install/#download-docker-for-windows), executar o arquivo e seguir o passo a passo.
Será preciso fornecer algumas permissões durante a instalação, ok?

Ao fim do processo, é recomendável verificar a instalação com um comando shell. Basta abrir o Prompt de Comando (cmd.exe) e executar os comandos abaixo.

docker –version

docker-compose –version

Depois docker pull wordpress 

já com o wordpress instalado via docker com o .yml baixo:

OBS: Copiar e salve na raiz com o nome docker-compose.yml

version: '3'
 
services:
  db:
    image: yobasystems/alpine-mariadb
    command: [
        '--default_authentication_plugin=mysql_native_password',
        '--character-set-server=utf8mb4',
        '--collation-server=utf8mb4_unicode_ci'
    ]
    volumes:
      - ./db_data:/var/lib/mysql
    environment:
      MYSQL_ROOT_PASSWORD: $MYSQL_PASSWORD
      MYSQL_DATABASE: $MYSQL_DATABASE
      MYSQL_USER: $MYSQL_USER
      MYSQL_PASSWORD: $MYSQL_PASSWORD
    env_file: .env
  wp:
    image: wpdiaries/wordpress-xdebug:6.2.0-php8.1-apache
    restart: always
    # build:
    #   dockerfile: Dockerfile # esta linha é realmente redundante aqui - você só precisará dela se quiser usar algum nome personalizado para seu Dockerfile
    #   context: ./xdebug # um caminho para um diretório contendo um Dockerfile ou uma URL para um repositório git.
    ports:
      - '80:80'
      - '433:433'
    volumes:
      - ./wordpress:/var/www/html
      - ./docker/php:/etc/apache2/sites-available/demoitarget.com.br.conf
      - ./docker/php:/etc/ssl/mycert.crt
      - ./docker/php:/etc/ssl/mycert.key
      - ./docker/php:/usr/local/etc/php/conf.d/uploads.ini
      - ./docker/php:/usr/local/etc/php/conf.d/opcache-recommended.ini, /usr/local/etc/php/conf.d/xdebug.ini
      - ./docker/php:/usr/local/etc/php/conf.d/error_reporting.ini
      - ./docker/php:/usr/local/etc/php/php.ini

    environment:
      WORDPRESS_DB_HOST: db:3306
      WORDPRESS_DB_USER: $MYSQL_USER
      WORDPRESS_DB_PASSWORD: $MYSQL_PASSWORD
      WORDPRESS_DB_NAME: $MYSQL_DATABASE
      WORDPRESS_TABLE_PREFIX: $TABLE_PREFIX
      WORDPRESS_WP_DEBUG: $WP_DEBUG
      # WORDPRESS_CONFIG_EXTRA:
      VIRTUAL_HOST: $VIRTUAL_HOST
      XDEBUG_CONFIG: client_host=192.168.1.2
    env_file: .env

  phpmyadmin:
    depends_on:
      - db
    image: phpmyadmin
    environment:
      PMA_HOST: db
      MYSQL_ROOT_PASSWORD: $MYSQL_PASSWORD
    restart: always
    ports:
      - '8081:80'
  mailcatcher:
    image: schickling/mailcatcher
    ports:
      - '1025:1025'
      - '1080:1080'
    environment:
      MAILCATCHER_PORT: 1025

volumes:
  db_data: # store database into a volume so that we can pause the containers  

  ```

## ⚙️ Dentro da pasta themes

faça o clone

```
git@github.com:fabioalexandre1911/framework-wordpress.git
```
### 🔩 Dentro da pasta framework-wordpress

code .

```
Após abrir o terminal e digitar: Yarn
```
Yarn Start ou npm start

depois 

docker compose up -d

## 📌 Visualizar Versão
[
http://localhost/


---
⌨️ Por [Fábio Sousa](https://github.com/fabioalexandre1911) 😊
