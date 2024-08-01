# HDC Events

Bem-vindo ao HDC Events! Este projeto foi desenvolvido para facilitar a criação e gestão de eventos, utilizando as tecnologias Laravel no backend e Bootstrap no frontend. O sistema permite realizar operações CRUD (Create, Read, Update e Delete) para gerenciar eventos de maneira eficiente. Além disso, o projeto implementa a ferramenta JetStream para tornar o dashboard mais interativo e fornecer funcionalidades de autenticação e cadastro de usuários.

## Visão Geral

### Tecnologias Utilizadas
- **Backend**: Laravel
- **Frontend**: Bootstrap
- **Dashboard**: JetStream

### Funcionalidades Principais
- **CRUD de Eventos**: Criação, leitura, atualização e exclusão de eventos.
- **Autenticação e Cadastro**: Usuários podem se registrar e fazer login para gerenciar seus eventos.
- **Dashboard Interativo**: JetStream é utilizado para criar uma interface de usuário moderna e interativa.

## Instalação

### Pré-requisitos
- PHP >= 7.3
- Composer
- Node.js
- NPM/Yarn
- MySQL

### Passo a Passo

1. **Clone o repositório**
   ```bash
   git clone https://github.com/seu-usuario/curso_laravel.git
   cd hdc-events
   ```

2. **Instale as dependências do PHP**
   ```bash
   composer install
   ```

3. **Instale as dependências do Node.js**
   ```bash
   npm install
   ou
   yarn install
   ```

4. **Copie o arquivo de exemplo `.env` e configure suas variáveis de ambiente**
   ```bash
   cp .env.example .env
   ```

5. **Gere a chave da aplicação**
   ```bash
   php artisan key:generate
   ```

6. **Configure o banco de dados no arquivo `.env`**
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=hdc_events
   DB_USERNAME=seu_usuario
   DB_PASSWORD=sua_senha
   ```

7. **Execute as migrações do banco de dados**
   ```bash
   php artisan migrate
   ```

8. **Compile os assets do frontend**
   ```bash
   npm run dev
   ou
   yarn dev
   ```

9. **Inicie o servidor de desenvolvimento**
   ```bash
   php artisan serve
   ```

Acesse a aplicação em `http://localhost:8000`.

## Estrutura do Projeto

### Backend

- **Laravel**: Framework PHP utilizado para criar a lógica de backend e gerenciar a comunicação com o banco de dados.

### Frontend

- **Bootstrap**: Framework CSS utilizado para estilizar a interface do usuário, garantindo um design responsivo e moderno.

### Dashboard

- **JetStream**: Pacote Laravel que fornece funcionalidades avançadas de autenticação e uma interface de usuário dinâmica para o dashboard.

## Funcionalidades Detalhadas

### CRUD de Eventos
- **Criar Evento**: Permite aos usuários criar novos eventos preenchendo um formulário com detalhes como nome, descrição, data e local.
- **Listar Eventos**: Exibe uma lista de todos os eventos cadastrados, com opções para visualizar detalhes.
- **Editar Evento**: Permite aos usuários atualizar informações de um evento existente.
- **Deletar Evento**: Permite aos usuários excluir um evento da lista.

### Autenticação e Cadastro
- **Registro de Usuário**: Novo usuário pode se cadastrar fornecendo nome, email e senha.
- **Login**: Usuários existentes podem fazer login com email e senha.
- **Esqueci minha senha**: Opção para recuperação de senha via email.

### Dashboard Interativo
- **JetStream**: Fornece uma interface de usuário moderna com suporte a temas, integração com Tailwind CSS, e funcionalidades como gerenciamento de perfil e autenticação de dois fatores.
