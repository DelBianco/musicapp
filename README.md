# Musicapp

Veja o app rodando em musicapp.tk

Sistema em Laravel de estudo (Meu primeiro sistema em laravel)

### Tarefas:
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
        - [ ] CRUD Artistas
        - [ ] CRUD Albums
        - [ ] CRUD Musicas
        - [ ] CRUD User
    - [ ] Verificar acesso ("Edit" e "New" só para quem tem Admin)
    - [ ] Verificar acesso Publico dessas informacoes
- [ ] Layout
    - [X] Criar uma Home-Page
    - [ ] Global Search
    - [ ] Verificar layout do CRUD/Admin