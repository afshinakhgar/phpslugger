# php-slugit
create url slug from a text and replace special character

### Install

```php
composer install
```
##### Direct install from composer
```php
composer require afshinpersian/phpslugger
```
### Include it via Composer Autoloader
```php
require __DIR__ . '/vendor/autoload.php';
use PhpSlugger\PhpSlugger;

$phpSlugger = new PhpSlugger();
echo $phpSlugger->slugit('∆ € $ Þ λ  I am A web Developer'); // delta-euro-dollor-l-i-am-a-web-developer
```

##support
-  [jquery Slug Plugin text2slug](https://github.com/afshinpersian/text-to-slug)
