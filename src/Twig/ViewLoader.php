<?php namespace Com\JeRuen\Zan\View\Twig;
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/11/1
 * Time: 下午2:42
 */

use ZanPHP\Support\Singleton;
use Twig_Loader_Filesystem;
use Twig_Environment;

class ViewLoader
{
    use Singleton;

    private $loader = null;

    public function init($configs)
    {
        $loader = new Twig_Loader_Filesystem($configs['templateDir']);

        $this->loader = new Twig_Environment($loader, array(
            'cache' => $configs['templateCacheDir'],
            'debug' => true,
            'auto_reload' => true
        ));

        return $this->loader;
    }

    public function getLoader()
    {
        return $this->loader;
    }

}
