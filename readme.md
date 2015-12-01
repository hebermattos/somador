# Deploy contínuo de aplicações [Laravel 5](http://laravel.com/) na [Umbler](https://www.umbler.com) utilizando [Snap CI](https://snap-ci.com)

De acordo com [Martin fowler](http://martinfowler.com/bliki/ContinuousDelivery.html), entrega contínua é uma prática de desenvolvimento onde o software é construido de um certo modo em que ele pode ser ser colocado em produção a qualquer momento.

Basicamente, você deve ser capaz de colocar uma versão em produção somente com um clique de botão, onde a versão desejada vai passar por várias etapas de testes em um pipeline de implatação, colocando a mesma em produção caso passe com sucesso em todas as etapas.

O deploy contínuo é um passo à frente. Cada integração de alterações no repositório de código fonte dispara um novo processo de deploy automaticamente, resultando em frequentes entregas de código em produção.

No nosso exemplo, vamos criar um pipeline de implantação que é disparado a cada push na branch master de nossa aplicação laravel hospedada no github. Para excutar os passos do deploy, e por fim publicar na [umbler](https://www.umbler.com), vamos utlizar o [Snap CI](https:/https://snap-ci.com), que é uma ferramenta [SaaS](https://en.wikipedia.org/wiki/Software_as_a_service) criada pela [Thoughtworks](https://www.thoughtworks.com/) que se integra naturalmente com o github.

![Snap-CI Pipeline]
(https://blog.snap-ci.com/assets/screenshots/trunk-based-development/pipeline-history-ed50984c905f1b33f9ca55d2806a8ec9.jpg)

Acima segue um exemplo de um pipeline no Snap-CI.

Nosso pipeline de implantação vai consistir em 4 etapas:

1. Testes de unidade
2. Deploy em ambiente de homologação
3. Testes de integração
4. Deploy em produção

### Testes Unitários

``` 
$ phpunit --configuration phpunit.xml
``` 

### Deploy em Homologação

``` 
$ . ./replace_var.sh
$ git remote add rcumbler ssh://rc.phpnaumbler.com.br@rc-phpnaumbler-com-br.umbler.net:9922/~/git/rc-phpnaumbler-com-br.git
$ git add .
$ git commit -m "deploy homologacao"
$ git push rcumbler master --force
$ ssh rc.phpnaumbler.com.br@rc.phpnaumbler-com-br.umbler.net -p 9922 'bash -s' < replace_path.sh
``` 

### Testes de Integração

``` 
$ phantomjs tests/teste_integracao.js
``` 

### Deploy em Produção

``` 
$ . ./replace_var.sh
$ git remote add rcumbler ssh://phpnaumbler.com.br@rc-phpnaumbler-com-br.umbler.net:9922/~/git/rc-phpnaumbler-com-br.git
$ git add .
$ git commit -m "deploy produção"
$ git push rcumbler master --force
$ ssh phpnaumbler.com.br@phpnaumbler-com-br.umbler.net -p 9922 'bash -s' < replace_path.sh
``` 

