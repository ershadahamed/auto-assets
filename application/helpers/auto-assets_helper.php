<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Any assets, css, js and images should be added into order on what need to be loaded first.
 */

if (!function_exists('addCss')) {
    function addCss($csss = array(), $path = 'assets/css/')
    {
        $link = null;
        foreach ($csss as $css) {
            $link .= '<link type="text/css" rel="stylesheet" href="' . base_url() . $path . $css . '" />' . "\r\n";
        }
        return $link;
    }
}

if (!function_exists('addJs')) {
    function addJs($jss = array(), $path = 'assets/js/')
    {
        $script = null;
        foreach ($jss as $js) {
            $script .= '<script type="text/javascript" src="' . base_url() . $path . $js . '"/></script>' . "\r\n";
        }
        return $script;
    }
}

if (!function_exists('addImage')) {
    function addImage($src, $path = 'assets/images/')
    {
        return base_url() . $path . $src;
    }
}

if (!function_exists('addPlugin')) {
    function addPlugin($type, $plugins = array())
    {
        if ($type === "CSS") {
            return addCss($plugins, 'assets/plugin/');
        }
        if ($type === "JS") {
            return addJs($plugins, 'assets/plugin/');
        }
        if ($type === "CSS_URL") {
            $link = null;
            foreach ($plugins as $plugin) {
                $link .= '<link rel="stylesheet" href="' . $plugin . '" />' . "\r\n";
            }
            return $link;
        }
        if ($type === "JS_URL") {
            $script = null;
            foreach ($plugins as $plugin) {
                $script .= '<script type="text/javascript" src="' . $plugin . '"/></script>' . "\r\n";
            }
            return $script;
        }
        return;
    }
}

if (!function_exists('topAsset')) {
    function topAsset($assets = array())
    {
        $asset_out = null;
        foreach ($assets as $asset) {
            $asset_out .= $asset . "\r\n";
        }
        return $asset_out;
    }
}

if (!function_exists('btmAsset')) {
    function btmAsset($assets = array())
    {
        $asset_out = null;
        foreach ($assets as $asset) {
            $asset_out .= $asset . "\r\n";
        }
        return $asset_out;
    }
}
