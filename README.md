[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/NetInventors/sw.ext.neti_facebook_sdk/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/NetInventors/sw.ext.neti_facebook_sdk/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/NetInventors/sw.ext.neti_php_excel/badges/build.png?b=master)](https://scrutinizer-ci.com/g/NetInventors/sw.ext.neti_php_excel/build-status/master)

# FacebookSDK for Shopware
> Simple wrapper plugin for [Facebook SDK](https://developers.facebook.com/docs/reference/php/) to use in multiple plugins.

* PluginKey: NetiFacebookSdk
* ProjectId: [000000-012-461](https://redmine.netinventors.de/projects/000000-012-461/)
* [Plugin in shopware store](http://store.shopware.com/detail/index/sArticle/163326)

## GitHub
* [GitHub Repository](https://github.com/NetInventors/sw.ext.neti_facebook_sdk/) 
* [ChangeLog](https://github.com/NetInventors/sw.ext.neti_facebook_sdk/commits)
* [Issues](https://github.com/NetInventors/sw.ext.neti_facebook_sdk/issues)

## Requirements:
* Shopware version >= 5.2.6

## Install 
We recommend installing the zip package either from [here](https://github.com/NetInventors/sw.ext.neti_facebook_sdk/releases/latest) or the [Shopware Community Store](http://store.shopware.com/detail/index/sArticle/163326)

**If you want to checkout from git be sure to name the directory "NetiFacebookSdk" and run `composer install` before using the plugin.**

## How to use / Example
```php
$facebook = Shopware()->Container()->get('neti_facebook_sdk.facebook_sdkfactory')->createSdk();
```

## Configuration:
* Just install

## How to report bugs / request features?
* [GitHub issue tracker](https://github.com/NetInventors/sw.ext.neti_facebook_sdk/issues)

## Get involved 
We highly appreciate if you want to add further functions and fix issues. Just fork our plugin and create a pull request.
For more information about contributing to this plugin, please see [CONTRIBUTING.md](CONTRIBUTING.md).

## License & Copyright
Copyright (c) 2016, Net Inventors - Agentur für digitale Medien GmbH

Please see [License file](LICENSE) for more information.

## Contact
**Net Inventors GmbH**  
Stahltwiete 23  
22761 Hamburg  
Germany  

T. 040 42934714-0 // F. 040 42934714-9  
www.netinventors.de // info@netinventors.de 
