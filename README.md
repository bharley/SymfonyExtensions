SymfonyExtensions
=================

This library adds some simple functionality that I find helpful when
creating Symfony 2 applications.

Installation
------------
To use this library, simply add **SymfonyExtensions** to your `composer.json`:
```js
{
    "require": {
        "blake/symfony-extensions": "*"
    }
}
```

Documentation
-------------
For now, this library provides some base classes that you can extend to get
some added functionality.

# Blake\SymfonyExtensions\Controller\Controller
* Provides a `#getRepository($className)` method that is a shortcut for `#getDoctrine()->getRepository($className)`

# Blake\SymfonyExtensions\Entity\Entity
* Provides magic getters and setters so you don't need to generate and maintain them.
