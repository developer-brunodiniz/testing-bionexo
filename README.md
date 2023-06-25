# Teste para a empresa bionexo

### Exercícios Automação:

1 - Acessar a página https://testpages.herokuapp.com/styled/tag/table.html e capturar todas as informações exibidas na tabela e armazenar em um banco de dados mysql

2 - Preencher o formulário através do link https://testpages.herokuapp.com/styled/basic-html-form-test.html e retornar se preenchimento foi ok ou não. ( pode inventar as informações a serem preenchidas)

3 - Baixar o arquivo através do link https://testpages.herokuapp.com/styled/download/download.html pelo botão “Direct Link Download” e salvar no seu disco local e renomear o arquivo para “Teste TKS”

4 - Realizar o upload do arquivo baixado no item 3 através do link https://testpages.herokuapp.com/styled/file-upload-test.html.

### Exercícios Leitura PDF:

1 - Realizar a leitura do pdf em anexo e armazenar em um excel ou csv. As informações necessárias para estratificar do PDF são: Registro ANS, Nome da Operadora, Código na Operadora, Nome do Contratado, Número do Lote, Número do Protocolo, Data do Protocolo, Código da Glosa do Protocolo, Número da Guia no Prestador, Número da Guia Atribuído pela Operadora, Senha, Nome do Beneficiário, Número da Carteira, Data Inicio do faturamento, Hora Inicio do Faturamento, Data Fim do Faturamento, Código da Glosa da Guia, Data de realização, Tabela, Código do Procedimento, Descrição, Grau Participação, Valor Informado, Quanti. Executada, Valor Processado, Valor Liberado, Valor Glosa, Código da Glosa, Valor Informado da Guia, Valor Processado da Guia, Valor Liberado da Guia, Valor Glosa da Guia, Valor Informado do Protocolo, Valor Processado do Protocolo, Valor Liberado do Protocolo, Valor Glosa do Protocolo, Valor Informado Geral, Valor Processado Geral, Valor Liberado Geral e Valor Glosa Geral.

### Executar o container para o projeto

```bash
docker-compose up -d --build --remove-orphans --force-recreate
```

### Entrar no container php para executar comandos do composer e artisan

```bash
docker container exec -it php-app bash
```

### Caso necessário acessar o container do php e gerar um novo key para o projeto

```bash
php artisan key:generate
```
