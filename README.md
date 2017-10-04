# Create project with Silex

### Create folder
```bash
$ cd /var/www
$ mkdir silex-gae
$ cd silex-gae
```

### Create package.json
```bash
$ npm init
# package name: (silex-gae) **enter
# version: (1.0.0) **enter
# description: **Create project with Silex for deploy to GAE
# entry point: (index.js) **index.php
# test command: **enter
# git repository: **https://github.com/prawee/silex-gae.git
# keywords: **GAE,Silex,RESTFul, API
# author: **Prawee Wongsa <prawee@hotmail.com>
# license: (ISC) **MIT
# {.....}
# Is this ok? (yes) **yes
```

### Installation Silex with Composer
```bash
$ composer require silex/silex:~2.0
# ./composer.json has been created
# Loading composer repositories with package information
# Updating dependencies (including require-dev)
# ...waiting..
# Writing lock file
# Generating autoload files
```

### Create bootstrap file
```bash
# nano index.php
```
```php
<?php
/*
 * Bootstrap file for initial project
 * @Author: Prawee Wongsa prawee@hotmail.com 
 * @Date: 2017-10-04 15:26:25 
 * @Last Modified by: Prawee Wongsa
 * @Last Modified time: 2017-10-04 16:03:29
 */

/*
 * Require vendor and dependencies
 */
require_once __DIR__.'/vendor/autoload.php';

/*
 * Create an instance
 */
$app = new Silex\Application();

/*
 * Configuration of instance
 * Set default developing mode is true
 */
$app['debug'] = true;

/*
 * Routing
 */
$app->get('/', function() {
    return 'Hi! Silex.';
});

/*
 * Run the application
 */
$app->run();
 ```

### Test
```bash
$ php -S localhost:8000
# Please look it on your browser =>  http://localhost:8000
```

### Deploy to Google app engine
```bash
$ gcloud auth login
$ gcloud config set project <your-project-id>
$ gcloud app deploy
```