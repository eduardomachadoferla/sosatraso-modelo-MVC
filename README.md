# 📘 Projeto SOS ATRASO

## 📌 Visão Geral

O **SOS ATRASO** é um sistema desenvolvido para **automatizar o registro de atrasos de alunos**, oferecendo à escola um controle interno mais eficiente e organizado.
Por meio de um sistema simples e intuitivo, os alunos registram seus atrasos ao chegarem na escola. O sistema captura informações como nome, turma, motivo do atraso e horário de entrada, e gera um **ticket impresso** que serve como comprovante.

---

## 🎯 Objetivos

- Automatizar o processo de registro de atrasos.
- Facilitar a comunicação entre recepção, coordenação e responsáveis.
- Gerar relatórios precisos e organizados.
- Proporcionar maior controle, transparência e segurança nos registros.

---

## 💡 Justificativa

Acompanhar a frequência dos alunos de forma precisa permite identificar padrões, antecipar problemas e tomar decisões assertivas. Isso contribui para um ambiente escolar mais saudável, promovendo apoio a alunos com dificuldades e evitando faltas recorrentes.

---

## 🛠️ Tecnologias Utilizadas

- **Visual Studio Code**
- **PHP 8**
- **MySQL**
- **Apache**
- **Figma**
- **Canvas LMS** (para design e documentação)

---

## 📋 Funcionalidades Principais

- 📌 **Cadastro de Alunos**: com validação por número de carteirinha.  
- ⏱️ **Registro de Atrasos**: com seleção de motivo e hora automática.  
- 🔍 **Consulta de Atrasos**: com filtros por nome, turma e data.  
- 📑 **Relatórios**: exportação em PDF/CSV e agendamento automático.  
- 🔐 **Login e Controle de Acesso**: com níveis diferentes e autenticação em dois fatores.  
- 📊 **Histórico e Gráficos**: visualização dos dados por aluno.  
- 📤 **Notificações** *(em estudo, não sabemos se sera possivel)*: por SMS, e-mail ou WhatsApp para responsáveis e professores.

---
## 📁 Possível Estrutura do Diretório

```Estrutura
sosatraso/
├── app/
│   ├── Controllers/
│   │   ├── AdminController.php          # Controla ações gerais do admin
│   │   ├── AlunoController.php          # Lógica para alunos e atrasos
│   │   ├── AuthController.php           # Login, logout, autorização
│   │   ├── RelatorioController.php      # Geração de relatórios
│   │   ├── UploadController.php         # Upload de arquivos
│   │   ├── UsuarioController.php        # Gerencia usuários
│   │   └── ArquivoController.php        # Lida com arquivos e pastas
│   │
│   ├── Models/
│   │   ├── Admin.php                    # Model de administração
│   │   ├── Aluno.php                    # Model do aluno
│   │   ├── Usuario.php                  # Model do usuário
│   │   ├── DelayRecord.php              # Model para registros de atraso
│   │   ├── Relatorio.php                # Model para relatórios
│   │   └── Arquivo.php                  # Model para arquivos
│   │
│   ├── Views/
│   │   ├── admin/                       # Views relacionadas à área admin
│   │   │   ├── alunos/
│   │   │   ├── usuarios/
│   │   │   ├── auth/
│   │   │   ├── relatorios/
│   │   │   └── index.php                # Dashboard admin
│   │   │
│   │   ├── arquivo/                     # Views para arquivos
│   │   ├── auth/                       # Views para login/logout etc
│   │   ├── alunos/                     # Views para alunos e atrasos
│   │   └── layouts/                    # Layouts (header, footer, menus)
│   │
├── config/
│   ├── base.php                       # Config base do sistema
│   ├── conexao.php                    # Conexão com o banco de dados
│   └── autorizacao.php                # Arquivo para permissões/autenticação
│
├── public/                           # Pasta pública para assets e front controller
│   ├── css/                          # Arquivos CSS
│   ├── imagens/                      # Imagens usadas pelo sistema
│   ├── js/                          # Arquivos JavaScript
│   └── index.php                    # Front controller (entrada da aplicação)
│
├── storage/                         # Arquivos armazenados como uploads, logs etc
│   └── uploads/
│
├── tests/                          # Testes automatizados, unitários etc
│
├── vetor/                          # Vetores e imagens gráficas
│
├── .gitignore
├── composer.json
├── composer.lock
├── databases.sql                   # Dump do banco de dados
├── README.md                      # Documentação do projeto
├── copozer.json                   # Configuração extra (ex: editor, build)
├── settings.json                  # Configurações do projeto
└── upload.php                     # Script para upload (deve ir para controller)



````

## 🔐 Gerar Senha de Administrador

Para criar a senha do primeiro administrador, execute o seguinte script PHP dentro da pasta admin no arquivo gerar-senha-adm.php no seu servidor local ou ferramenta online:

```php
<?php
$senha = 'admin'; // Substitua pela senha desejada
$hash = password_hash($senha, PASSWORD_DEFAULT);
echo $hash;
?>

````
## 🔐 Adicionar usuario ADM no banco de dados

```
UPDATE usuarios SET senha = 'novo_hash_gerado' WHERE setor = 'admin';

