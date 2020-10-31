# php-mailer
[![Latest Stable Version](https://poser.pugx.org/Hahalo/php-mailer/v)](//packagist.org/packages/Hahalo/php-mailer) [![Total Downloads](https://poser.pugx.org/Hahalo/php-mailer/downloads)](//packagist.org/packages/Hahalo/php-mailer) [![Latest Unstable Version](https://poser.pugx.org/Hahalo/php-mailer/v/unstable)](//packagist.org/packages/Hahalo/php-mailer) [![License](https://poser.pugx.org/Hahalo/php-mailer/license)](//packagist.org/packages/Hahalo/php-mailer)
[![Build Status](https://travis-ci.org/Hahalo/php-mailer.svg?branch=master)](https://travis-ci.org/Hahalo/php-mailer)
[![Coverage Status](https://coveralls.io/repos/github/Hahalo/php-mailer/badge.svg?branch=master)](https://coveralls.io/github/Hahalo/php-mailer?branch=master)

send email with smtp (support http proxy)


### Install
```shell
composer require Hahalo/php-mailer
```

### Usage
```php
<?php

$transport = new \Hahalo\Mailer\SMTPTransport(
    [
        'host' => 'smtp.gmail.com',
        'port' => 465,
        'encryption' => 'ssl',
        'username' => 'your username',
        'password' => 'your password',
        
        'httpProxy' => 'http://proxy.com:8080' //user http proxy
    ]
);

$mailer = new \Hahalo\Mailer\Mailer($transport);
$mailer->setFrom('from@example.com')
    ->setTo('to@example.com')
    ->setSubject('subject')
    ->setText('email from php mailer')
    ->send();

```
