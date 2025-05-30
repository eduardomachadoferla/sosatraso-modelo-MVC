# 📘 Projeto SOS ATRASO

## 📌 Visão Geral

O **SOS ATRASO** é um sistema desenvolvido para **automatizar o registro de atrasos de alunos**, oferecendo à escola um controle interno mais eficiente e organizado. O projeto foi iniciado em 2024 pelos alunos **Celine, André e Pablo** e, em 2025, passou a ser continuado pelos gerentes de projeto **Leandro, Louize e Samuel**.

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

## 🔐 Gerar Senha de Administrador

Para criar a senha do primeiro administrador, execute o seguinte script PHP dentro da pasta admin no arquivo gerar-senha-adm.php no seu servidor local ou ferramenta online:

```php
<?php
$senha = 'admin'; // Substitua pela senha desejada
$hash = password_hash($senha, PASSWORD_DEFAULT);
echo $hash;
?>
