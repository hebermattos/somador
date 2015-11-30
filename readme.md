## Deploy contínuo de sites php na [umbler](https://www.umbler.com) utilizado [Snap CI](https:/https://snap-ci.com) <h2>

### Teste unitário

``` 
$ phpunit --configuration phpunit.xml
``` 

### Deploy em Homologação

``` 
$ git remote add rcumbler ssh://rc.phpnaumbler.com.br@rc-phpnaumbler-com-br.umbler.net:9922/~/git/rc-phpnaumbler-com-br.git
$ git add .
$ git commit -m "deploy homologacao"
$ git push rcumbler master --force
``` 

### Teste de Integração

``` 
$ phantomjs tests/teste_integracao.js
``` 

### Deploy em Produção

``` 
$ git remote add rcumbler ssh://phpnaumbler.com.br@rc-phpnaumbler-com-br.umbler.net:9922/~/git/rc-phpnaumbler-com-br.git
$ git add .
$ git commit -m "deploy producção"
$ git push rcumbler master --force
``` 

