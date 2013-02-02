    <div class="container">
<h1 id="_php-a-lightweight-php-framework">_PHP - a lightweight php framework</h1>

<h2 id="installation">Installation</h2>

<h3 id="composer">Composer</h3>

<p>The easiest way to install is by using <a href="http://getcomposer.org">Composer</a></p>

<p>In your composer.json file:</p>

<pre><code>{
    "require": {
        "php": "&gt;=5.3.0",
        "kengoldfarb/underscore_php": "1.*",
    }
}
</code></pre>

<p>Alternately, you can just <a href="https://github.com/kengoldfarb/underscore_php/tags">Download the source</a></p>

<h2 id="getting-started">Getting Started</h2>

<p>This framework follows the MVC pattern with all routing occuring at the webserver level.</p>

<blockquote>
  <p>The best way to enjoy _PHP is by using it in conjunction with <a href="https://github.com/kengoldfarb/underscore_libs">_Libs</a> which can be installed by composer (this is there by default)</p>
</blockquote>

<pre><code>{
    "require": {
        "php": "&gt;=5.3.0",
        "kengoldfarb/underscore_libs": "1.*",
    }
}
</code></pre>

<h3 id="controllers-and-basic-routing">Controllers (and basic routing)</h3>

<p>Creating friendly urls is easy.</p>

<p><code>http://localhost/</code> maps to <code>controllers/defaultController.php [action=index]</code></p>

<p><code>http://localhost/hellothere</code> maps to <code>controllers/defaultController.php [action=hellothere]</code></p>

<p><code>http://localhost/lists</code> maps to <code>controllers/listsController.php [action=index]</code></p>

<p><code>http://localhost/lists/add-list</code> maps to <code>controllers/listsController.php [action=add-list]</code></p>

<p>and so on...</p>

<p>Just check out controllers/defaultController.php for examples.</p>

<blockquote>
  <p>For custom routing check out the .htaccess file and the nginx example config file</p>
</blockquote>

<h3 id="models">Models</h3>

<p>Models should be created in models/ and then used normally</p>

<pre><code>require_once _MODELS . 'MyModel.php';
$myModel = new MyModel();
</code></pre>

<h3 id="views">Views</h3>

<p>Views are included by the controller.  This allows you a lot of flexibility to create layouts as you see fit.</p>

<pre><code>include _VIEWS . 'header.php';
include _VIEWS . 'myview.php';
include _VIEWS . 'footer.php';
</code></pre>

<p>See the views/ directory and defaultController.php for examples</p>

<h3 id="config">Config</h3>

<h4 id="environments">Environments</h4>

<p>Environment specific configuration options can be defined in files located in <code>src/env/</code></p>

<p>Mapping your server name to an environment happens in <code>src/config/environments.php</code></p>

<h4 id="constants">Constants</h4>

<p>_PHP defines some handy constants that can be used throughout your code.</p>

<p><code>_WEBROOT</code> The full path to the web root directory (/path/to/project/src/www)</p>

<p><code>_MODELS</code> The full path to the web root directory (/path/to/project/src/www/models)</p>

<p><code>_CONTROLLERS</code> The full path to the web root directory (/path/to/project/src/www/controllers)</p>

<p><code>_VIEWS</code> The full path to the web root directory (/path/to/project/src/www/views)</p>

<h4 id="versioning">Versioning</h4>

<p>You can set a version in the <code>src/config/version.php</code> file.  This is particularly useful for cache busting.</p>

<p>Anything that comes in with a version number will be routed to the corresponding location.</p>

<p>For example:</p>

<p><code>http://local.underscorephp.com/v1.2.3/css/bootstrap-responsive.css</code> is the same as <code>http://local.underscorephp.com/css/bootstrap-responsive.css</code></p>

<p><code>http://local.underscorephp.com/v1.2.3/underscore_php</code> is the same as <code>http://local.underscorephp.com/underscore_php</code></p>

<h3 id="webserver-config">Webserver Config</h3>

<p>Check out the .htaccess file for apache.  Nginx coming soon...</p>

<h2 id="license">License</h2>

<p><a href="http://www.gnu.org/licenses/gpl.html">GNU General Public License Version 3</a></p>

    </div> <!-- /container -->

