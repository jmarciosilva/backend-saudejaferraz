# SaúdeJá Ferraz — Backend API

Plataforma Inteligente de Saúde Pública Municipal.

O SaúdeJá Ferraz é uma iniciativa tecnológica e colaborativa criada com o objetivo de auxiliar cidadãos do município de Ferraz de Vasconcelos-SP a encontrar atendimento médico de forma mais rápida, organizada e eficiente.

O projeto nasceu após uma experiência real vivenciada durante atendimento no Hospital Regional de Ferraz de Vasconcelos, evidenciando problemas como:

* superlotação;
* filas extensas;
* ausência de informações em tempo real;
* deslocamentos desnecessários;
* dificuldade de atendimento para idosos, gestantes e crianças.

---

# Objetivo do Projeto

O objetivo do sistema é fornecer uma plataforma inteligente de apoio ao atendimento público de saúde através de:

* triagem inteligente pré-atendimento;
* painel público de filas;
* sistema colaborativo de lotação;
* informações em tempo real;
* direcionamento para unidades adequadas;
* apoio operacional à saúde pública municipal.

---

# MVP Inicial

A primeira versão do projeto será composta pelos seguintes módulos:

## 1. Triagem Simples

Fluxo de perguntas básicas para orientar o cidadão sobre qual unidade procurar:

* UBS;
* UPA;
* Hospital Regional;
* emergência;
* farmácia popular.

> IMPORTANTE:
> O sistema NÃO realiza diagnóstico médico.
> O sistema apenas auxilia no direcionamento do atendimento.

---

## 2. Painel de Filas

Painel público com:

* tempo médio de espera;
* lotação da unidade;
* especialidades disponíveis;
* situação da unidade;
* histórico de atualização.

---

## 3. Relato Colaborativo

Os próprios cidadãos poderão informar:

* lotação;
* tempo de espera;
* disponibilidade médica;
* falta de medicamentos;
* atendimento pediátrico.

Inspirado no conceito:

> "Waze da Saúde"

---

# Stack Tecnológica

## Backend

* PHP 8.3+
* Laravel 12
* MySQL 8
* Redis
* Laravel Sanctum
* Laravel Reverb
* Laravel Telescope
* L5 Swagger / OpenAPI
* Laravel Pint
* Predis

---

## Frontend (Projeto Futuro)

* Angular
* Angular PWA
* Tailwind CSS
* RxJS
* Angular Signals
* Firebase Cloud Messaging

---

# Arquitetura do Backend

O backend está sendo desenvolvido utilizando arquitetura modular visando:

* escalabilidade;
* manutenção facilitada;
* separação de responsabilidades;
* integração futura com órgãos públicos;
* padronização da API;
* documentação automática.

---

# Estrutura Atual da Aplicação

```txt
app/
├── DTOs/
├── Enums/
├── Exceptions/
├── Helpers/
├── Http/
├── OpenApi/
├── Repositories/
├── Services/
├── Traits/
```

---

# Estrutura de Responsabilidades

## Controllers

Responsáveis por:

* receber requisições;
* validar entradas;
* retornar respostas padronizadas.

---

## Services

Responsáveis por:

* regras de negócio;
* transações;
* integrações;
* processamento principal.

---

## Repositories

Responsáveis por:

* acesso ao banco de dados;
* queries;
* persistência.

---

## DTOs

Responsáveis por:

* transporte estruturado de dados;
* desacoplamento entre camadas.

---

## Enums

Responsáveis por:

* padronização de valores;
* redução de strings mágicas;
* melhoria da manutenção.

---

## Traits

Responsáveis por:

* reutilização de código;
* padronização de respostas;
* comportamentos compartilhados.

---

# Padrão de Resposta da API

Todas as respostas da API seguem padrão único:

## Sucesso

```json
{
  "success": true,
  "message": "Operação realizada com sucesso.",
  "data": [],
  "errors": null
}
```

---

## Erro

```json
{
  "success": false,
  "message": "Erro ao processar operação.",
  "data": null,
  "errors": []
}
```

---

# Padrões de Desenvolvimento

O projeto seguirá padrões rígidos de qualidade de código visando:

* estabilidade;
* legibilidade;
* rastreabilidade;
* manutenção futura.

---

## Regras obrigatórias

### Tratamento de exceções

Toda operação crítica deverá possuir:

* try/catch;
* logs;
* mensagens padronizadas;
* rollback em caso de falha.

---

### Transações

Operações sensíveis deverão utilizar:

```php
DB::beginTransaction();

try {

    DB::commit();

} catch (\Exception $e) {

    DB::rollBack();

    throw $e;
}
```

---

### Comentários no código

Os comentários deverão:

* ser escritos em Português do Brasil;
* focar na regra de negócio;
* auxiliar manutenção futura;
* evitar comentários redundantes.

---

# Documentação Swagger

A API possui documentação OpenAPI/Swagger integrada.

## URL local

```txt
http://127.0.0.1:8000/api/documentation
```

---

# Ferramentas de Desenvolvimento

## Laravel Telescope

Monitoramento de:

* requests;
* exceptions;
* queries;
* jobs;
* logs.

---

## Laravel Pint

Padronização automática do código PHP.

---

## Redis

Utilizado para:

* cache;
* filas;
* websocket;
* tempo real.

---

# API Pública

O projeto será preparado para disponibilização de API pública visando integração com:

* prefeitura;
* observatórios públicos;
* dashboards municipais;
* parceiros;
* pesquisas acadêmicas;
* outras aplicações públicas.

---

# Roadmap

## Fase 1

* Estrutura Laravel
* API REST
* Swagger/OpenAPI
* Cadastro de unidades
* Triagem simples
* Painel básico

## Fase 2

* Relatos colaborativos
* Sistema de reputação
* WebSocket em tempo real

## Fase 3

* Geolocalização
* Mapa de calor
* Alertas epidemiológicos

## Fase 4

* Integração municipal
* API pública
* Expansão regional

---

# Como executar o projeto

## Clonar repositório

```bash
git clone https://github.com/jmarciosilva/backend-saudejaferraz.git
```

---

## Entrar na pasta

```bash
cd backend-saudeja-ferraz
```

---

## Instalar dependências

```bash
composer install
```

---

## Configurar ambiente

```bash
cp .env.example .env
```

---

## Gerar chave da aplicação

```bash
php artisan key:generate
```

---

## Configurar banco de dados no .env

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=saudejaferraz
DB_USERNAME=root
DB_PASSWORD=
```

---

## Executar migrations

```bash
php artisan migrate
```

---

## Limpar cache

```bash
php artisan optimize:clear
```

---

## Gerar documentação Swagger

```bash
php artisan l5-swagger:generate
```

---

## Subir servidor local

```bash
php artisan serve
```

---

# Licença

Projeto open-source desenvolvido com objetivo social, educacional e tecnológico.

---

# Autor

José Márcio Ferreira da Silva

GitHub:
https://github.com/jmarciosilva

---

# Visão do Projeto

> “A tecnologia certa no momento certo pode transformar uma fila de 5 horas em 40 minutos.”
