# Grav Social Buttons Plugin

This Grav plugin allows to easily add the RRSSB (Ridiculously Responsive Social Sharing Buttons) social buttons to your web site.

## Installation
Installing the Social Buttons plugin can be done in one of two ways. The GPM (Grav Package Manager) installation method enables you to quickly and easily install the plugin with a simple terminal command, while the manual method enables you to do so via a zip file.

## GPM Installation (Preferred)
The simplest way to install this plugin is via the Grav Package Manager (GPM) through your system's Terminal (also called the command line). From the root of your Grav install type:

bin/gpm install socialbuttons
This will install the Social Buttons plugin into your /user/plugins directory within Grav. Its files can be found under /your/site/grav/user/plugins/socialbuttons.

## Manual Installation
To install this plugin, just download the zip version of this repository and unzip it under /your/site/grav/user/plugins. Then, rename the folder to socialbuttons. You can find these files either on GitHub or via GetGrav.org.

You should now have all the plugin files under

/your/site/grav/user/plugins/socialbuttons

## Updating
As development for the Social Buttons plugin continues, new versions may become available that add additional features and functionality, improve compatibility with newer Grav releases, and generally provide a better user experience. Updating Social Buttons is easy, and can be done through Grav's GPM system, as well as manually.

## GPM Update (Preferred)
The simplest way to update this plugin is via the Grav Package Manager (GPM). You can do this with this by navigating to the root directory of your Grav install using your system's Terminal (also called command line) and typing the following:

bin/gpm update socialbuttons
This command will check your Grav install to see if your Social Buttons plugin is due for an update. If a newer release is found, you will be asked whether or not you wish to update. To continue, type y and hit enter. The plugin will automatically update and clear Grav's cache.

## Manual Update
Manually updating Social Buttons is pretty simple. Here is what you will need to do to get this done:

Delete the your/site/user/plugins/socialbuttons directory.
Downalod the new version of the Social Buttons plugin from either GitHub or GetGrav.org.
Unzip the zip file in your/site/user/plugins and rename the resulting folder to socialbuttons.
Clear the Grav cache. The simplest way to do this is by going to the root Grav directory in terminal and typing bin/grav clear-cache.
Note: Any changes you have made to any of the files listed under this directory will also be removed and replaced by the new set. Any files located elsewhere (for example a YAML settings file placed in user/config/plugins) will remain intact.

## Usage
Include the socialbuttons plugin in your template. where you want to display the icons, as follows:

{% include 'partials/socialbuttons.html.twig' with {'url' : page.url} %}

If you are using a theme provided by the Grav community for your web site, be sure to inherit it, as well explaind in this Grav blog post, before adding this chunk of code to the theme itself.

Do not forget to properly set up the metas for Facebook and Twitter, to improve contents sharing.

## Customization
To customize the plugin, you can copy the socialbuttons.yaml file under the user/config/plugins folder. If that folder does not exist, you must create it by hand.

Each button has two options: one enables the button in the social toolbar, the other one defines the button label:

enabled: true
buttons:
    facebook: 
      enabled: true
      label: Facebook  
    twitter: 
      enabled: true
      label: Twitter  
    googleplus: 
      enabled: true
      label: Google+
    linkedin: 
      enabled: true
      label: Linkedin 
    reddit: 
      enabled: true
      label: Reddit  
    youtube: 
      enabled: false
      label: Youtube  
    hackernews: 
      enabled: false
      label: Hackernews  
    pinterest: 
      enabled: false
      label: Pinterest    
    pocket: 
      enabled: false
      label: Pocket     
    tumblr: 
      enabled: false
      label: Tumblr       
    vk: 
      enabled: false
      label: VK        
    github: 
      enabled: false
      label: Github 
    email: 
      enabled: true
      label: Email
To display a hidden button, just set it to true and, vice versa, set it to false to hide it:

When you need to display buttons in a different order than the default one, simply change the buttons position in this file. So if you want to display the Twitter button before the Facebook one, just change the configuration as follows:

enabled: true
buttons:
    twitter: 
      enabled: true
      label: Twitter  
    facebook: 
      enabled: true
      label: Facebook  
    googleplus: 
      enabled: true
      label: Google+
    linkedin: 
      enabled: true
      label: Linkedin 
    reddit: 
      enabled: true
      label: Reddit  
    youtube: 
      enabled: false
      label: Youtube  
    hackernews: 
      enabled: false
      label: Hackernews  
    pinterest: 
      enabled: false
      label: Pinterest    
    pocket: 
      enabled: false
      label: Pocket     
    tumblr: 
      enabled: false
      label: Tumblr       
    vk: 
      enabled: false
      label: VK        
    github: 
      enabled: false
      label: Github 
    email: 
      enabled: true
      label: Email
      
Buttons order is not configurable using the admin panel. If you need to display buttons in a different order than the default one, you should configure this file by hand.
