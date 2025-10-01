# Projeto: Registro de Exercícios

## Objetivo do Sistema
Criar um sistema simples para **gerenciamento de atividades físicas**, permitindo que usuários registrem seus exercícios, acompanhem duração, calorias gastas e progresso.

## Equipe
- Antonio Leonardo
- Beatriz Rolim 
- Brenda Evelyn 
- Maria Letícia
- Morya Samyak
- Rogério Ferreira 

## 2. Features do MVP

### 2.1 Autenticação
- Registro de usuários (nome, e-mail, senha)
- Login e logout
- Middleware para proteger rotas de exercícios

### 2.2 Exercícios
- Adicionar novo exercício (nome da atividade, duração, calorias gastas, data)
- Listar exercícios do usuário logado
- Editar informações de um exercício
- Remover exercício
- Filtragem por data ou tipo de exercício

### 2.3 Interface
- Layout simples com Blade (Blade Components para header e footer)
- Página principal com lista de exercícios
- Formulários de criação e edição
- Alertas de sucesso ou erro

## 3. Estrutura do Projeto
O projeto está dentro da pasta AVP1-Frameworks/, utilizando o framework Laravel.

## 4. Requisitos
- Laragon
- PHP 8.x (incluso no Laragon)
- Composer
- Node.js e NPM
- MySQL (incluso no Laragon)

## 5. Configuração do Projeto

### 5.1 Clonar o Repositório
- cd C:\laragon\www
- git clone https://github.com/seu-repositorio/AVP1-Frameworks.git
- cd AVP1-Frameworks

### 5.2 Instalar Dependências PHP
- composer install

### 5.3 Instalar Dependências Frontend
- npm install

### 5.4 Criar o Arquivo .env
- Copie o exemplo: cp .env.example .env
- Edite o .env com suas credenciais do MySQL:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=registro_exercicios
DB_USERNAME=root
DB_PASSWORD=
```

### 5.5 Gerar a Key do Laravel
- php artisan key:generate

### 5.6 Rodar as Migrations
- php artisan migrate

## 6. Executando o Projeto

### 6.1 Iniciar o Servidor Laravel
- php artisan serve
- A aplicação estará disponível em:
```
http://127.0.0.1:8000
```

### 6.2 Rodar o Build do Frontend
- npm run dev

## 7. Acessando o phpMyAdmin no Laragon
```
http://localhost/phpmyadmin
```
- Usuário padrão: root
- Senha: (em branco, por padrão no Laragon)

### 8. Licença
Todos os direitos reservados.