
# Legeartis.io Unified Search SDK v2.0
*Документация: [doc.legeartis.io](https://doc.legeartis.io)*

## Установка

Выполнить команду

    composer require legeartis/userch2lib

## Использование

Необходимо импортировать классы Config и UnifiedSearchService. Например:

```php
use Legeartis\UnifiedSearch\Config;
use Legeartis\UnifiedSearch\USService;


$service = new USService(new Config(['login' => $login, 'password' => $password]));
```

Далее можно использовать методы экземпляра USService для получения данных веб-сервиса:

```php
    print_r($service->user());
    print_r($service->search('блок WAUZZZ4M0HD042149'));
```




