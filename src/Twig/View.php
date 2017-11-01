<?php namespace Com\JeRuen\Zan\View\Twig;

/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/11/1
 * Time: 上午10:56
 */

use Com\JeRuen\Zan\View\IView;

use Twig_Environment;

class View implements IView
{
    public static function display($tplPath, array $data = [])
    {
        /** @var Twig_Environment $loader */
        $loader = ViewLoader::getInstance()->getLoader();
        return $loader->load($tplPath)->render($data);
    }
}
