# Процессор строк  
  
Подсчет количества заглавных букв в строке
  
## Требования  
  
- PHP >= 7.4
  
## Установка  

```sh
composer require pavel-miasnov/first-composer-package
```

## Использование  

```php
<?php  
  
$processor = new StringProcessor();  
echo $processor->getCountCapitals('My strIng')' // 2
```