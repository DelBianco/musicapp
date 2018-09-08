# Musicapp

Veja o app rodando em http://musicapp.tk/

Sistema em Laravel de estudo (Meu primeiro sistema em laravel)


### Rodando Local

Clone o repositório

Rode

`composer install`

Os Seguintes parametros tem que ser setados no .ENV

Chaves do Spotify podem ser obtidas gratuitamente em: 
https://developer.spotify.com/dashboard/login

SPOTIFY_KEY -

SPOTIFY_SECRET - 

SPOTIFY_REDIRECT_URI = http://localhost:8000/callback

SCOUT_QUEUE = true

ALGOLIA_APP_ID 

ALGOLIA_SECRET

Chaves do Algolia tambem podem ser obtidas gratuitamente em: 
https://www.algolia.com

Roda a instalação do banco e da Seed com o user que esta em  database/seeds/UserTablesSeeder.php

`php artisan migrate:fresh --seed`

`php artisan serve`

as duas API's funcionam via localhost

--

## Tarefas:
- [X] Criar Entidades
    - [X] Artistas
    - [X] Albuns
    - [X] Musicas
    - [X] Usuarios (Automático via Artisan) 
    - [X] Revisar atributos das entidades de acordo com o DOC
        - [X] Artistas/Bandas   
        - [X] Criar o relacionamento "Many to Many" para Album e Songs (um album tem muitas musicas, mas uma musica pode estar em mais de um album (Coletâneas por exemplo))
        - [X] Musicas (Songs)
        - [X] Albums
        - [X] Users
    - [X] Alimentar com Faker e Seeder as entidades
- [X] Gerar "CRUD"
    - [X] Fazer CRUD (Create, Read, Update, Destroy ) das entidades (criar arquivos e rotas)
        - [X] CRUD Artistas
        - [X] CRUD Albums
        - [X] CRUD Musicas
    - [ ] Editar CRUD User (testar)
- [X] Criar politicas de Acesso 'Rules' (Public, User, Admin)
- [X] Layout
    - [X] Criar uma Home-Page
    - [X] Criar páginas em nível Público
        - [X] List Artists
        - [X] List Albums
        - [X] List Songs
        - [X] View Artist
        - [X] View Album
        - [X] View Music
- [X] Global Search
    - [X] Criar páginas em nível User
        - [X] Create/Edit Artist
        - [X] Create/Edit Album
        - [X] Create/Edit Songs
        - [X] Remove Artist/Album/Songs
    - [X] Criar páginas em nível Admin
        - [X] Create/Edit User
        - [X] Remove User