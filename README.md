# Mage2 Module Gaiterjones InstantPage

    ``gaiterjones/module-instantpage``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
https://instant.page/ implementation for Magento 2.

instant.page uses just-in-time preloading — it preloads a page right before a user clicks on it.

This module enables preloading for menu links using data-instant-whitelist

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/Gaiterjones`
 - Enable the module by running `php bin/magento module:enable Gaiterjones_InstantPage`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require gaiterjones/module-instantpage`
 - enable the module by running `php bin/magento module:enable Gaiterjones_InstantPage`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration




## Specifications

 - Plugin
	- afterGetHtml - Magento\Theme\Block\Html\Topmenu > Gaiterjones\InstantPage\Plugin\Magento\Theme\Block\Html\Topmenu


## Attributes
