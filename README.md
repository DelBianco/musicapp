# Musicapp

Veja o app rodando em musicapp.tk

Sistema em Laravel de estudo (Meu primeiro sistema em laravel)

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
- [ ] Gerar "CRUD"
    - [ ] Fazer CRUD (Create, Read, Update, Destroy ) das entidades (criar arquivos e rotas)
        - [X] CRUD Artistas
        - [ ] CRUD Albums
        - [ ] CRUD Musicas
        - [ ] CRUD User
- [ ] Criar politicas de Acesso 'Rules' (Public, User, Admin)
- [ ] Layout
    - [X] Criar uma Home-Page
    - [ ] Criar páginas em nível Público
        - [ ] List Artists
        - [ ] List Albums
        - [ ] List Songs
        - [ ] View Artist
        - [ ] View Album
        - [ ] Global Search
    - [ ] Criar páginas em nível User
        - [ ] Create/Edit Artist
        - [ ] Create/Edit Album
        - [ ] Create/Edit Songs
        - [ ] Remove Artist/Album/Songs
    - [ ] Criar páginas em nível Admin
        - [ ] Create/Edit User
        - [ ] Remove User