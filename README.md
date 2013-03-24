ZF2 BoilerApp Blog module
=====================

Created by Neilime

NOTE : This module is in heavy development, it's not usable yet.
If you want to contribute don't hesitate, I'll review any PR.

Introduction
------------

__BoilerApp Blog module__ is a Zend Framework 2 module

Requirements
------------

* [Zend Framework 2](https://github.com/zendframework/zf2) (latest master)

Installation
------------

### Main Setup

#### By cloning project

1. Clone this project into your `./vendor/` directory.

#### With composer

1. Add this project in your composer.json:

    ```json
    "require": {
        "zf2-boiler-app/app-blog": "dev-master"
    }
    ```

2. Now tell composer to download __ZF2 BoilerApp Blog module__ by running the command:

    ```bash
    $ php composer.phar update
    ```

#### Post installation

1. Enabling it in your `application.config.php` file.

    ```php
    return array(
        'modules' => array(
            // ...
            'BoilerAppBlog',
        ),
        // ...
    );
    ```

## Features

* Editable home page
* Feeds
* Social sharing
* News :
  - CRUD
	- Administration
	- Private / public access
* Articles :
	- CRUD
	- Administration
	- Private / public access
* Photo galleries :
	- CRUD
	- Administration
	- Private / public access
* Statistics
