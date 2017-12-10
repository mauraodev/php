Olá Devs, muitas vezes você vai precisar trabalhar com XML no PHP, em alguns casos como trabalhar com algum webservice de cliente, importação de arquivos, etc...

Para facilitar a sua vida e a minha criei este artigo utilizando o simple xml do PHP.

O PHP tem outros métodos para se trabalhar com XML, mas iremos focar agora no simple xml, por ser mais simples de se trabalhar.

Como exemplo iremos utilizar o seguinte documento xml:

```php
<?xml version="1.0" encoding="iso-8859-1"?>
<catalogo>
    <livro>
        <nome>O Senhor dos Aneis</nome>
        <categoria>Literatura</categoria>
    </livro>
    <livro>
        <nome>O Hobbit</nome>
        <categoria>Literatura</categoria>
    </livro>
</catalogo>
```

Iremos salvar esse documento com o nome de livros.xml, na mesma pasta vamos criar o leitura.php, com o seguinte código:

```php
<?php
// Importar arquivo livros.xml
$xml = simplexml_load_file('livros.xml');

// Exibição do arquivo
print_r($xml);
```

Ao executar o código fonte iremos ver os livros O Senhor dos Aneis e o Hobbit.

Vamos melhorar nosso código percorrendo os livros e exibido apenas o nome.

```php
<?php
// Importar arquivo livros.xml
$xml = simplexml_load_file('livros.xml');

// Percorrendo os itens
foreach ($xml as $item) {
    print_r($item);
}
```

Legal ao executarmos o código fonte estamos exibido o nome e categoria de cada livro, mas queremos exibir apenas o nome do livro para isso vamos alterar o código da seguinte maneira.

```php
<?php
// Importar arquivo livros.xml
$xml = simplexml_load_file('livros.xml');

// Percorrendo os itens e exibindo apenas o nome
foreach ($xml as $item) {
    echo $item->nome;
}
```

Legal agora estamos exibindo apenas o nome de cada livro.

Outra forma de usar o simple xml é carregando ele através de uma string.

```php
<?php
$string = <<<XML
<?xml version="1.0" encoding="iso-8859-1"?>
<catalogo>
    <livro>
        <nome>O Senhor dos Aneis</nome>
        <categoria>Literatura</categoria>
    </livro>
    <livro>
        <nome>O Hobbit</nome>
        <categoria>Literatura</categoria>
    </livro>
</catalogo>
XML;

$xml = simplexml_load_string($string);

print_r($xml);



