# Ncrypt : A 2-way encryption system

A simple PHP class to encrypt a string, and decrypt an encrypted string

## Steps

### Include the class

#### Option 1 (using Composer)

- Add the following to your `composer.json` file-
```json
{
    "require": {
        "mukto90/ncrypt": "dev-master"
    }
}
```
- Run `composer install` command.
- Include your autoloader file (if not already), like this-
```php
include 'vendor/autoload.php';
```

#### Option 2

- Copy `class.ncrypt.php` file from `ncrypt/src/` directory to your project.
- Include the class in your project file, like this-
```php
include 'src/class.ncrypt.php';
```

### Instantiate the class
```php
$ncrypt = new mukto90\Ncrypt;
```

### Configure (optional)
- Optionally set secret key, secret IV and cipher
```php
$ncrypt->set_secret_key( '^&-my-key-&^' );  // optional, but STRONGLY recommended
$ncrypt->set_secret_iv( '#@)-my-iv-#*$' );  // optional, but STRONGLY recommended
$ncrypt->set_cipher( 'AES-256-CBC' );       // optional
```

### How to encrypt a plain text/string
- Pass your string to `encrypt()` method-
```php
$encrypted = $ncrypt->encrypt( 'Hello World!' ); // output: SFpQVWk0WjFxdW5lSGFXaUdWUEx3Zz09
```

### How to decrypt an encrypted string
- Pass the already encrypted string to `decrypt()` method-
```php
$decrypted = $ncrypt->decrypt( 'SFpQVWk0WjFxdW5lSGFXaUdWUEx3Zz09' ); // output: Hello World!
```
## Requirement (minimum)
 - PHP 5.3.0
 - `php_openssl` library needs to be enabled. [See here](http://php.net/manual/en/openssl.installation.php)

## Author
[Nazmul Ahsan](https://nazmulahsan.me)

## Discussion
[Link](https://nazmulahsan.me/?p=570)