<?php

require("../private/core/autoload.php");


/*
RewriteEngine On: This directive turns on the URL rewriting engine provided by Apache's mod_rewrite module.

RewriteCond %{REQUEST_FILENAME} !-f: This condition checks if the requested URL does not match an existing file in the file system.

RewriteCond %{REQUEST_FILENAME} !-d: This condition checks if the requested URL does not match an existing directory in the file system.

RewriteRule ^(.*)$ index.php?url=$1 [L,QSA]:

RewriteRule: This directive is used to define a URL rewriting rule.
^(.*)$: This regular expression pattern captures any URL.
index.php?url=$1: This is the substitution string. It rewrites the URL to index.php and appends the original URL path as a query parameter named url.
[L,QSA]: These flags modify the behavior of the rewrite rule:
L (Last): This flag indicates that if the rule matches, no further rules should be processed for this request.
QSA (Query String Append): This flag ensures that any existing query parameters in the original URL are preserved and appended to the rewritten URL.
Detailed Example:

Suppose you have a PHP application with the following directory structure:

/
|-- .htaccess
|-- index.php
|-- about.php
|-- contact.php
|-- css/
|   |-- style.css
|-- js/
|   |-- script.js
|-- images/
|   |-- logo.png
And let's say your .htaccess file contains the following directives:


RewriteEngine On

RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d

RewriteRule ^(.*)$ index.php?url=$1 [L,QSA]
Now, let's see how these directives work with an example URL:

Suppose a user requests the following URL:


http://example.com/about
The Apache server receives the request and checks if there is a file named about in the document root. Since there is no such file, it proceeds to the next condition.

Apache also checks if there is a directory named about. Again, since there is no such directory, it passes both conditions.

The RewriteRule is then applied:

The pattern ^(.*)$ matches the entire requested URL about.
The substitution index.php?url=$1 rewrites the URL to index.php?url=about.
The [L,QSA] flags indicate that this is the last rule to be applied and that any existing query parameters should be preserved and appended to the rewritten URL.
Finally, Apache serves the rewritten URL index.php?url=about to the PHP interpreter, which then loads index.php and processes the url parameter to determine what content to display.

So, in summary, the .htaccess file and its directives enable clean URLs and route all requests to the index.php file for further processing by the PHP application.
 */
