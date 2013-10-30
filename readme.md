#Samsui

Samsui is a factory library for building PHP objects useful for setting up test data in your applications. It is mainly inspired by [Rosie](https://github.com/bkeepers/rosie) for JavaScript and [factory_girl](https://github.com/thoughtbot/factory_girl) for Ruby.

> [Samsui women](https://en.wikipedia.org/wiki/Samsui_women) refers to a group of Chinese immigrants who came to Singapore to work in construction and industries. Their hardwork contributed to Singapore's development as a colony and young nation.

With Samsui, you can quickly build prototype application and generate as many data as you need for testing your prototype.

##Installation

Samsui is a PHP library that manages its dependencies using [Composer](http://getcomposer.org). You can directly use Samsui in your application through Composer as well:

    {
        "require": {
			"mauris/samsui": "1.0.*"
        }
    }

Then just run composer:

    $ php composer.phar install
