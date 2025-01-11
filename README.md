
# Sistema Urbano

Este é um sistema de gerenciamento urbano desenvolvido em PHP. O objetivo do projeto é permitir a adição e visualização de cidades e melhorias relacionadas a essas cidades.

## Funcionalidades

- **Adicionar cidade**: Permite cadastrar novas cidades.
- **Adicionar melhoria**: Permite adicionar melhorias para as cidades cadastradas.
- **Visualizar melhorias**: Exibe a lista de melhorias relacionadas a uma cidade.

## Requisitos

- [XAMPP](https://www.apachefriends.org/index.html) (ou outro servidor local com suporte a PHP e MySQL).
- PHP 7.x ou superior.
- Banco de dados MySQL ou MariaDB.
- Git (para versionamento e controle do código).

## Instalação

1. **Instalar o XAMPP**:
   - Faça o download e instale o [XAMPP](https://www.apachefriends.org/index.html) (recomendado) ou qualquer outro servidor local com suporte a PHP e MySQL.

2. **Clonar o Repositório**:
   - Faça um clone deste repositório para a sua máquina local usando Git:

   
   git clone https://github.com/beckersoffia/sistema-urbano.git
   

3. **Configuração do Banco de Dados**:
   - Abra o XAMPP e inicie os serviços Apache e MySQL.
   - Acesse o phpMyAdmin no seu navegador: [http://localhost/phpmyadmin](http://localhost/phpmyadmin).
   - Crie um novo banco de dados chamado `cidadess`.
   - Importe o arquivo `cidadess.sql` (que contém a estrutura das tabelas) para o banco de dados recém-criado.

4. **Configuração do Projeto**:
   - Coloque o repositório clonado na pasta `htdocs` do XAMPP (por padrão em `C:\xampp\htdocs`).

   Exemplo:
   
   C:\xampp\htdocs\sistema-urbano
   

5. **Configuração do arquivo de conexão**:
   - Abra o arquivo `conexao.php` e verifique se as configurações de conexão com o banco de dados estão corretas. Se estiver usando uma porta diferente, altere o valor de `$port` para a porta do seu MySQL, que pode ser 3306 ou 3307.

## Execução

1. Após a configuração, abra o navegador e acesse o projeto através do seguinte endereço:

   
   http://localhost/sistema-urbano
   

2. A página inicial exibirá a lista de cidades cadastradas. Você pode adicionar novas cidades e também visualizar as melhorias associadas a cada cidade.

## Estrutura do Projeto

- **conexao.php**: Conecta ao banco de dados MySQL.
- **index.php**: Exibe a lista de cidades cadastradas.
- **adicionar_cidade.php**: Página para adicionar novas cidades.
- **melhorias.php**: Exibe a lista de melhorias de uma cidade.
- **adicionar_melhoria.php**: Página para adicionar novas melhorias para uma cidade.

## Contribuição

Se você deseja contribuir para o projeto, siga estas etapas:

1. Faça um fork deste repositório.
2. Crie uma branch para a sua funcionalidade:

   
   git checkout -b minha-nova-funcionalidade
   

3. Realize as alterações e faça o commit:

   git commit -m "Adicionando uma nova funcionalidade"
 

4. Envie para o repositório remoto:

   git push origin minha-nova-funcionalidade
 

5. Abra um pull request para revisão.

## Licença

Este projeto está licenciado sob a [MIT License](LICENSE).


