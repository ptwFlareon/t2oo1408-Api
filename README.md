# OO em PHP

## Objetivo
- Realizar implementação orientada a objetos em um ambiente WEB com a linguagem PHP, para evidenciar ao acadêmico a usabilidade do paradigma independente da linguagem.
## Específicos
- Conhecer o funcionamento de uma aplicação web
- Conhecer a organização básica de um projeto web
- Conhecer algumas PSRs
- Implementar uma simples API RestFull

## Conteúdos para consulta
- https://www.php-fig.org/psr/psr-1/
- https://www.php-fig.org/psr/psr-2/
- https://www.php-fig.org/psr/psr-4/
### Autoloading
- https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader-examples.md
## Outras informações
- O arquivo index.php  = nosso método main em java
- Utilizando o servidor web embutido no PHP (dentro da pasta public)
``` 
 php -S localhost:8080 index.php
```
- deixar a vida mais fácil, trabalhar com caminhos relativos a raiz do projeto
```
chdir(dirname(__DIR__));
```

- Evitar loop em chamadas para arquivos estáticos
```
if (php_sapi_name() === 'cli-server') {
    $path = realpath(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    if (__FILE__ !== $path && is_file($path)) {
        return false;
    }
    unset($path);
}
```
- conexão com banco utilizando PDO
```
PDO("mysql:host=localhost; port=3306; dbname=test",
                    "user", "password", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
```
- para alguns tipos de requisições específicas
```
file_get_contents('php://input');
```
- informações do servidor
```
$_SERVER
```
### Estrutura Básica
```
 App -> gateway -> tratar a requisição e direcionar para o local desejado
 Request -> traz os dados da requisição do usuário
 Response -> resposta ao usuário
 -
 /
  ../MyApp/
      ../config/
      ../src/
          ../Controller
          ../Model
          ../
      ../view/
  ../public/
        ../css/
        ../js/
        ../img/
        index.php
```
# Informações importantes
+ segue o mesmo conceito das aulas anteriores
+ este projeto não será concluído em um único dia
+ serão abordados vários temas do conteúdo do bimestre neste projeto
+ ao final o academico deve enviar um pull request com todas as implementações realizadas para avaliação
