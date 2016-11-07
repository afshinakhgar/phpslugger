# php-slugit
create url slug from a text and replace special character

### Install

```php
composer install
```
### Include it via Composer Autoloader
```php
require __DIR__ . '/vendor/autoload.php';
use PhpSlugger\PhpSlugger;

$phpSlugger = new PhpSlugger();
echo $phpSlugger->slugit('∆ € $ Þ λ  I am A web Developer'); // delta-euro-dollor-l-i-am-a-web-developer
```

