# Grav Social Buttons Plugin

`Social Buttons` is a [Grav](http://github.com/getgrav/grav) Plugin and allows to display social buttons, everywhere on your website.

# Installation

Installing the Social Buttons plugin can be done in one of two ways. Our GPM (Grav Package Manager) installation method enables you to quickly and easily install the plugin with a simple terminal command, while the manual method enables you to do so via a zip file. 

## GPM Installation (Preferred)

The simplest way to install this plugin is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm) through your system's Terminal (also called the command line).  From the root of your Grav install type:

    bin/gpm install socialbuttons

This will install the Social Buttons plugin into your `/user/plugins` directory within Grav. Its files can be found under `/your/site/grav/user/plugins/socialbuttons`.

## Manual Installation

To install this plugin, just download the zip version of this repository and unzip it under `/your/site/grav/user/plugins`. Then, rename the folder to `socialbuttons`. You can find these files either on [GitHub](https://github.com/getgrav/grav-plugin-social-buttons) or via [GetGrav.org](http://getgrav.org/downloads/plugins#extras).

You should now have all the plugin files under

    /your/site/grav/user/plugins/socialbuttons

# Usage

The `socialbuttons` plugin must be included into your theme. where you want to display the icons, as follows:

    {% include 'partials/socialbuttons.html.twig' with {'url' : page.url} %}

>>> Before working on the web site theme, be sure you inherited it, as well explaind in this [Grav blog post](http://getgrav.org/blog/theme-development-with-inheritance).

Do not forget to properly set up the [metas](http://learn.getgrav.org/content/headers#opengraph-metatag-examples) for Facebook and Twitter, for best contents sharing.

## Customization
To customize the plugin, you can just copy the `socialbuttons.yaml` file under the `user/config/plugins` folder - create that folder if misses - then change the information you need.

To display a hidden button, just set it to `true` and, vice versa, set it to `false` to hide it:

    enabled: true
    buttons:
      facebook: true
      twitter: true
      googleplus: true
      linkedin: true
      reddit: false
      youtube: false
      hackernews: false
      pinterest: true
      pocket: false
      tumblr: false
      vk: false
      github: false
      email: true

To display buttons in a different order than the default one, simply change the buttons position in this file. So if you wanr to display **Twitter** button before the **Facebook** one, just change the configuration as follows:

    enabled: true
    buttons:
      twitter: true
      facebook: true
      googleplus: true
      linkedin: true
      reddit: true
      youtube: false
      hackernews: false
      pinterest: false
      pocket: false
      tumblr: false
      vk: false
      github: false
      email: true

# Updating

As development for the Social Buttons plugin continues, new versions may become available that add additional features and functionality, improve compatibility with newer Grav releases, and generally provide a better user experience. Updating Social Buttons is easy, and can be done through Grav's GPM system, as well as manually.

## GPM Update (Preferred)

The simplest way to update this plugin is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm). You can do this with this by navigating to the root directory of your Grav install using your system's Terminal (also called command line) and typing the following:

    bin/gpm update socialbuttons

This command will check your Grav install to see if your Social Buttons plugin is due for an update. If a newer release is found, you will be asked whether or not you wish to update. To continue, type `y` and hit enter. The plugin will automatically update and clear Grav's cache.

## Manual Update

Manually updating Social Buttons is pretty simple. Here is what you will need to do to get this done:

* Delete the `your/site/user/plugins/socialbuttons` directory.
* Downalod the new version of the Social Buttons plugin from either [GitHub](https://github.com/giansi/grav-plugin-socialbuttons) or [GetGrav.org](http://getgrav.org/downloads/plugins#extras).
* Unzip the zip file in `your/site/user/plugins` and rename the resulting folder to `socialbuttons`.
* Clear the Grav cache. The simplest way to do this is by going to the root Grav directory in terminal and typing `bin/grav clear-cache`.

> Note: Any changes you have made to any of the files listed under this directory will also be removed and replaced by the new set. Any files located elsewhere (for example a YAML settings file placed in `user/config/plugins`) will remain intact.
