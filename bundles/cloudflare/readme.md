# Cloudflare for LaravelPHP #

Cloudflare changes several server vars that will cause core methods of Laravel to not work correctly.  This package fixes those problems.

## Install ##

Download the files to your ``bundles/cloudflare/`` folder.  In your ``paths.php`` file, at the very top, add the following:

```php
require_once(__DIR__.'/bundles/cloudflare/patch.php');
```

## Notes ##

* 07/14/2012 - I used to have this work as an actual bundle, where just having it installed and auto-started was enough to fix things.  But since Taylor started using the Symphony foundation again, it wasn't working anymore.  Moving the patch to the ``paths.php`` file solves the issue.