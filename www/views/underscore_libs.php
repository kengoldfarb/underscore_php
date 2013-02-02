

    <div class="container">
<h1 id="underscorephp-_libs">UnderscorePHP _Libs</h1>

<h3 id="a-set-of-useful-framework-agnostic-php-libraries-to-make-life-easier">A set of useful, framework-agnostic PHP libraries to make life easier</h3>

<p><a href="http://www.underscorephp.com">http://www.underscorephp.com</a></p>

<p>The main purpose of these libraries are to be useful and flexible.  Use the ones you want, don't
use the others.  Plug and play so to speak.</p>

<h2 id="installation">Installation</h2>

<p>There are 2 ways to install...</p>

<ol>
<li>Using the <a href="http://getcomposer.org/">composer</a> package manager
In your composer.json file add:</li>
</ol>

<pre><code>{
    "require": {
        "kengoldfarb/underscore_libs": "1.*"
    }
}
</code></pre>

<p>Then install it (from the same directory as composer.json):
    php composer.phar install</p>

<ol>
<li>Download the latest source</li>
</ol>

<h2 id="usage">Usage</h2>

<p>If you installed via composer:</p>

<pre><code>&lt;?php
require_once 'vendor/autoload.php';

use _\_Crypt;
</code></pre>

<p>Otherwise, you can just use include the _autoload.php to load all libraries:
<code>php
require_once 'kengoldfarb/_autoload.php';
</code></p>

<p>OR, just include the single library you want to use:
<code>php
require_once 'kengoldfarb/_libs/_Crypt.php';
</code></p>

<p>Then call the functions:
<code>php
$encryptedString = _Crypt::_encryptAESPKCS7('some string to encrypt');
</code></p>

<h2 id="license">License</h2>

<p><a href="http://www.gnu.org/licenses/gpl.html">GNU General Public License Version 3</a></p>



    </div> <!-- /container -->
