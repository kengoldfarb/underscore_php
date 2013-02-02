# _PHP - a lightweight php framework

## Installation
### Composer
The easiest way to install is by using [Composer](http://getcomposer.org)

In your composer.json file:

```json
{
	"require": {
		"php": ">=5.3.0",
		"kengoldfarb/underscore_php": "1.*",
	}
}
```

Alternately, you can just [Download the source](https://github.com/kengoldfarb/underscore_php/tags)

## Getting Started
This framework follows the MVC pattern with all routing occuring at the webserver level.

> The best way to enjoy \_PHP is by using it in conjunction with [\_Libs](https://github.com/kengoldfarb/underscore_libs) which can be installed by composer (this is there by default)

```json
{
	"require": {
		"php": ">=5.3.0",
		"kengoldfarb/underscore_libs": "1.*",
	}
}
```

### Controllers (and basic routing)
Creating friendly urls is easy.

```http://localhost/``` maps to ```controllers/defaultController.php [action=index]```

```http://localhost/hellothere``` maps to ```controllers/defaultController.php [action=hellothere]```

```http://localhost/lists``` maps to ```controllers/listsController.php [action=index]```

```http://localhost/lists/add-list``` maps to ```controllers/listsController.php [action=add-list]```

and so on...

Just check out controllers/defaultController.php for examples.

> For custom routing check out the .htaccess file and the nginx example config file

### Models
Models should be created in models/ and then used normally

```php
require_once _MODELS . 'MyModel.php';
$myModel = new MyModel();
```

### Views
Views are included by the controller.  This allows you a lot of flexibility to create layouts as you see fit.

```php
include _VIEWS . 'header.php';
include _VIEWS . 'myview.php';
include _VIEWS . 'footer.php';
```

See the views/ directory and defaultController.php for examples

### Config
#### Environments
Environment specific configuration options can be defined in files located in ```src/env/```

Mapping your server name to an environment happens in ```src/config/environments.php```

#### Constants
_PHP defines some handy constants that can be used throughout your code.

```_WEBROOT``` The full path to the web root directory (/path/to/project/src/www)

```_MODELS``` The full path to the web root directory (/path/to/project/src/www/models)

```_CONTROLLERS``` The full path to the web root directory (/path/to/project/src/www/controllers)

```_VIEWS``` The full path to the web root directory (/path/to/project/src/www/views)

#### Versioning
You can set a version in the ```src/config/version.php``` file.  This is particularly useful for cache busting.

Anything that comes in with a version number will be routed to the corresponding location.

For example:

```http://local.underscorephp.com/v1.2.3/css/bootstrap-responsive.css``` is the same as ```http://local.underscorephp.com/css/bootstrap-responsive.css```

```http://local.underscorephp.com/v1.2.3/underscore_php``` is the same as ```http://local.underscorephp.com/underscore_php```

### Webserver Config
Check out the .htaccess file for apache.  Nginx coming soon...

## License
[GNU General Public License Version 3](http://www.gnu.org/licenses/gpl.html)