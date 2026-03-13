# Sistema de Ordem de Serviços (OS)

Sistema web para **gestão de ordens de serviços**, desenvolvido com foco em **estudo, prática de arquitetura backend e demonstração de habilidades em Laravel**.

O sistema permite que empresas de assistência técnica ou prestação de serviços gerenciem clientes, equipamentos, ordens de serviço, peças, serviços realizados e histórico de atendimentos.

---

# 📌 Objetivo do Projeto

Este projeto foi desenvolvido como **portfólio profissional**, com o objetivo de demonstrar conhecimentos em:

* Modelagem de banco de dados
* Arquitetura MVC
* Regras de negócio
* CRUDs completos
* Relacionamentos Eloquent
* Autenticação e autorização
* Estruturação de projetos Laravel
* Uso de painel administrativo moderno

---

# 🧰 Stack de Desenvolvimento

### Backend

* PHP 8+
* Laravel

### Interface administrativa

* Filament Admin Panel

### Banco de dados

* MySQL

### Frontend (via Filament)

* Livewire
* TailwindCSS

### Outras ferramentas

* Composer
* Node.js / NPM
* Git

---

# ⚙️ Funcionalidades

O sistema permite:

### Gestão de Clientes

* Cadastro de clientes
* Edição e atualização
* Consulta de histórico

### Gestão de Equipamentos

* Registro de equipamentos
* Associação com clientes

### Ordens de Serviço

* Abertura de ordem de serviço
* Acompanhamento de status
* Diagnóstico técnico
* Registro de serviços executados
* Registro de peças utilizadas

### Controle de Serviços

* Cadastro de serviços
* Definição de preços

### Controle de Peças

* Cadastro de peças
* Controle de estoque
* Registro de peças utilizadas em serviços

### Histórico

* Histórico de alterações de status da OS
* Registro de atividades

### Dashboard

* Indicadores gerais do sistema
* Acompanhamento das ordens de serviço

---

# 🗂️ Estrutura do Projeto

Estrutura principal do projeto:

app/

* Models
* Services
* Policies
* Jobs
* Notifications

app/Http/

* Controllers
* Requests

database/

* migrations
* seeders

resources/

* views

---

# 🚀 Instalação do Projeto

### 1 - Clonar o repositório

```bash
git clone git@github.com:ZoomGuimaraes/techfix.git
```

```bash
cd techfix
```

---

### 2 - Instalar dependências

```bash
composer install
```

```bash
npm install
```

---

### 3 - Configurar ambiente

Copie o arquivo `.env.example`:

```bash
cp .env.example .env
```

Gerar a chave da aplicação:

```bash
php artisan key:generate
```

---
<!-- 
### 4 - Configurar banco de dados

Configure no arquivo `.env`:

DB_DATABASE=nome_do_banco
DB_USERNAME=usuario
DB_PASSWORD=senha

--- -->

### 4 - Rodar migrations e seeders

O primeiro usuário do sistema é criado automaticamente através de **Seeder**.

Execute:

```bash
php artisan migrate --seed
```

Isso irá:

* Criar todas as tabelas
* Criar o primeiro usuário administrador do sistema

---

### 5 - Instalar o Filament

```bash
php artisan filament:install
```

---

### 6 - Rodar o servidor

```bash
php artisan serve
```

---

# 🔐 Acesso ao Sistema

Após rodar os seeders, utilize o usuário criado automaticamente.

Exemplo:

Email:
[admin@gmail.com](mailto:admin@email.com)

Senha:
password

Acesse o painel administrativo:

```
http://localhost:8000/admin
```

---

# 📊 Roadmap do Projeto

Este projeto está sendo desenvolvido de forma progressiva:

### Fase 1 — Fundamentos

* CRUD de clientes
* CRUD de equipamentos
* CRUD de ordens de serviço
* Relacionamentos básicos

### Fase 2 — Regras de Negócio

* Serviços dentro da OS
* Peças utilizadas
* Cálculo automático de valores

### Fase 3 — Recursos Avançados

* Histórico de status
* Upload de arquivos
* Notificações

### Fase 4 — Recursos Profissionais

* API REST
* Testes automatizados
* Jobs e filas
* Relatórios

---

# 📚 Aprendizados Demonstrados

Este projeto demonstra conhecimento em:

* Laravel
* Filament Admin Panel
* Eloquent ORM
* Migrations e Seeders
* Arquitetura MVC
* Boas práticas de desenvolvimento

---

# 📄 Licença

Projeto desenvolvido para fins de **estudo e portfólio**.
