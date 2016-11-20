# WP Dev Workflow
##### Manage Wordpress development workflow over local, staging and production servers.

Through constants defined in wp-config, you can disable plugins, disable the  loading of external files, set search engine visibility, display or hide the admin bar, display the server name and change the color of the admin bar, or literally anything else you can think of. All without touching the database, so you can push and pull without worrying.

## Multi Environment Config

The separation of config.php into the following:

 **wp-config.php**
 Determines the environment of the Wordpress installation. Define your hostnames here (if not using the CLI)

wp-config.**default**.php
Any WordPress config settings that are default to all environments.\

wp-config.**development**.php
Development environment config settings

wp-config.**staging**.php
Staging environment config settings

wp-config.**production**.php
Production environment config settings

Much of this is borrowed from [wordpress-multi-env-config](https://github.com/studio24/wordpress-multi-env-config).

This repository contains the standard config setup for WordPress (look inside the `config` folder), which supports multiple environments such as your local development copy, a test staging site, and the live production site. 

Using the multi-environment config you don't need to edit your config files between environments or update site URLs in your database, WordPress will just work!

### How it works

The system detects what environment the current website is in and loads the relevant config file for that environment.

A default config file is loaded first, which can contain any shared settings. This is `wp-config.default.php`

The environment-specific file is then loaded, this is `wp-config.{environment}.php` where `{environment}` is replaced by the environment name.

### Environment values

Environment values can be `production`, `staging` and `development`. They match to their corresponding `wp-config.{environment}.php` config file.
    
### Setting the environment

The current environment is detected in one of three ways:

 **1. Environment variable**
You can set an environment variable called WP_ENV to set which environment the website uses in your web server configuration.

This is commonly done via Apache in your virtual host declaration:

    SetEnv WP_ENV production

If you don't use Apache consult your web server documentation.

**2. Server hostname**

You can also edit the `wp-config.php` file and define what hostnames are used for which environments.

Just edit the PHP switch statement and enter the correct hostname (without http:// or the trailing slash) as the case value. You can then define which environment is used for that hostname via the `WP_ENV` constant.

For example to set [www.mywebsite.com](www.mywebsite.com) as the live production environment, `staging.mywebsite.com` as the staging environment and `mywebsite.dev` as the local development environment the code is:

    switch ($hostname) {
        case 'mywebsite.dev':
            define('WP_ENV', 'development');
            break;
        case 'staging.mywebsite.com':
            define('WP_ENV', 'staging');
            break;
        case 'www.mywebsite.com':
        default: 
            define('WP_ENV', 'production');
    }

You'll notice the live website URL is also the default case.

If you use localhost for your local test website, just set the development hostname case to `localhost`.

The name of your server environment will be displayed in the admin bar at browser widths greater than 1030px. If left undefined, the plugin will make no changes to the admin bar. 

If not defined as `production`, the plugin will enable 'Discourage search engines from indexing this site' to prevent your development and staging servers from being indexed. This option is not stored in the database, so your production server will still look to the actual setting on the Reading page.

**3. WP-CLI argument**

If you're using WP-CLI you can specify your environment via the --env argument. Usage is:

    --env=<environment>

For example:

    wp help --env=development    



## Admin Bar

Change the color of your admin bar and display the name of the current server environment. Green for local, orange for staging, and of course, red for production. You can also force the front end admin bar to hide, to display, and can even set it to display when logged out.

* **ENV_COLOR**: Determines the color of the admin bar. You can set this to any CSS color. If left undefined, will use the following defaults: 
    
    * PRODUCTION: red
    * STAGING: orange
    * DEVELOPMENT: green

* **ENV_ADMINBAR**: Show or hide the admin bar on the frontend. `FALSE` will force it to be hidden, `TRUE` will force it to display, `ALWAYS` will display the admin bar even when logged out. These settings will override the 'Show toolbar' setting in the 'Users > Your Profile' options panel and `add_filter('show_admin_bar', '__return_false');` in functions.php, but doesn't attempt to overcome any CSS based hiding of the admin bar.

**In wp-config.php:**

```
// set admin bar color to green
define('ENV_COLOR', 'green');

// show the admin bar even when logged out
define('ENV_ADMINBAR', 'always');
```

## Disable Plugins

Pass a serialized array in this constant to disable plugins. This does not store any data in the database, so plugins that are manually deactivated or activated through the admin panel will stay so.

In order for this feature to function properly, WP Local Toolbox must be installed as an mu-plugin. You can read more about mu-plugins here: https://codex.wordpress.org/Must_Use_Plugins. We're investigating ways to avoid this requirement; if you have any ideas we'd love to hear it!

* **ENV_DISABLED_PLUGINS**: A serialized array of plugins to disable.

**In wp-config.{environment}.php**:

```
// deactivate a set of plugins
define('ENV_DISABLED_PLUGINS', serialize(
    array(
        'hello-dolly.php',
        'w3-total-cache/w3-total-cache.php',
        'updraftplus/updraftplus.php',
        'wordpress-https/wordpress-https.php'
    )
));
```

## Post Update Notifications

Receive notifications when any page, post, or attachment is added or updated. Notifications can be received via email, or can be sent to a Slack channel via their Incoming WebHook API.

This is helpful in production to see if a client has submitted a new post, or in development to see if data is being added to the staging environment so you don't accidentally overwrite new posts when pushing databases around.

* **ENV_NOTIFY**: Define this constant as the email address where you'd like to be notified of post updates. You can specify either an email address or a Slack Incoming WebHook URL. You can set up a Slack Incoming WebHook URL here: https://my.slack.com/services/new/incoming-webhook/

* **ENV_NOTIFY_CHANNEL**: If ENV_NOTIFY is set to a Slack Incoming WebHook URL, you can specify the channel that the notification will be posted to. If left unset, it will post to the default channel specified in Slack's Incoming WebHooks settings page.

* **ENV_DISABLE_ATTACHMENT_NOTIFY**: If set, this will disable notifications for attachments.

**In wp-config.php**:

```
// send an email to someone@somewhere.com 
// whenever any post or page is updated
define('ENV_NOTIFY','someone@somewhere.com')

// or, send a notification to a Slack channel
define('ENV_NOTIFY', 'https://hooks.slack.com/services/etc');
define('ENV_NOTIFY_CHANNEL','#channel');
```

## Airplane Mode

Control loading of external files when developing locally. WP loads certain external files (fonts, gravatar, etc) and makes external HTTP calls. This isn't usually an issue, unless you're working in an environment without a web connection. This plugin removes / unhooks those actions to reduce load time and avoid errors due to missing files.

On and Off: Can be toggled from the admin bar by clicking 'Airplane Mode'. In the admin bar a ✗ or ✓ will indicate if Airplane Mode is enabled or disabled. 

* **ENV_AIRPLANE**: Set this to anything to enable the Airpane Mode toggle.

**In wp-config.php**:

```
// enable the Airplane Mode toggle
define('ENV_AIRPLANE', 'true');
```


## Notes

As a special thank you, this plugin will remove the ridiculous `Howdy, ` that is prepended to the username in the admin bar.

You're welcome.

## Credits

* WP Local Toolbox from [joeguilmette](https://github.com/joeguilmette): https://github.com/joeguilmette/wp-local-toolbox

* Plugin disabling from [Mark Jaquith](https://twitter.com/markjaquith): https://gist.github.com/markjaquith/1044546

    * Using this fork from [Andrey Savchenko](https://twitter.com/rarst): https://gist.github.com/Rarst/4402927

* Airplane Mode from [Andrew Norcross](https://twitter.com/norcross): https://github.com/norcross/airplane-mode

* Always showing the admin bar from [Jeff Star](https://twitter.com/perishable): http://digwp.com/2011/04/admin-bar-tricks/

* A healthy refactoring from [Jon Brown](https://twitter.com/jb510) of [9seeds](http://9seeds.com/)

* The environment switcher is inspired by [Stage Switcher Plugin](https://roots.io/switch-environments-wordpress-admin-bar/) from [Roots.io](https://roots.io/).

## Installation

This plugin does not work like other plugins, i.e. simply dropping into `wp-content/plugins/` folder will not work. It is imperative that the configuration files are placed correctly.

1. First make a backup of your existing `wp-config.php` file.
2. Copy the following files from the `plugins/wp-devworkflow/config` folder to the root of your WordPress installation:

    `wp-config.default.php
    wp-config.php`

3. Either set the website environments you wish to support via wp-config.php or via your webserver configuration.
4. Create one `wp-config.{environment}.php` file for each environment. You can use the sample files provided in this repository:

    `wp-config.development.php
    wp-config.production.php
    wp-config.staging.php`

5. Review your backup `wp-config.php` file and copy config settings to either the default config file or the environment config files as appropriate.
6. Update config settings across your config files as appropriate, for example database settings are usually different between environments.
7. Remember to update the authentication unique keys and salts in `wp-config.default.php`
8. After defining your environments, you must define constants in the `wp-config.{environment}.php` file.

You should now be able to load up the website in each different environment and everything should work just fine! It should now be safe to delete your backup `wp-config.php` file.

**Note:**
In order for the Disable Plugins feature to function properly, Dev Workflow must be installed as an mu-plugin. You can read more about mu-plugins here: https://codex.wordpress.org/Must_Use_Plugins. We're investigating ways to avoid this requirement; if you have any ideas we'd love to hear it!
