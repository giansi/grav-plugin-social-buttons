<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;

class SocialButtonsPlugin extends Plugin
{
    public static function getSubscribedEvents() {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0],
        ];
    }

    public function onPluginsInitialized()
    {
        if ($this->isAdmin()) {
            $this->active = false;
            return;
        }

        $this->enable([
            'onTwigTemplatePaths' => ['onTwigTemplatePaths', 0],
            'onTwigSiteVariables' => ['onTwigSiteVariables', 0],
        ]);
    }

    /**
     * Add current directory to twig lookup paths.
     */
    public function onTwigTemplatePaths()
    {
        $this->grav['twig']->twig_paths[] = __DIR__ . '/templates';
    }

    /**
     * if enabled on this page, load the JS + CSS theme.
     */
    public function onTwigSiteVariables()
    {
        $this->grav['assets']->addCss('plugin://socialbuttons/vendor/rrssb/css/rrssb.css', -999);
        $this->grav['assets']->addJs('plugin://socialbuttons/vendor/rrssb/js/rrssb.min.js', -999);

        $twig = $this->grav['twig'];

        if ( empty($this->grav['config']->get('plugins.socialbuttons.base_url_shared')) ) {
            $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
            $my_shared_host = $protocol . $_SERVER["HTTP_HOST"];
        } else {
            $my_shared_host = $this->grav['config']->get('plugins.socialbuttons.base_url_shared');
        }

        $twig->twig_vars['socialbuttons_domain'] = $my_shared_host;
        $twig->twig_vars['socialbuttons_buttons'] = $this->config->get('plugins.socialbuttons.buttons');
    }
}