<?php namespace Com\JeRuen\Zan\View\Blade;

/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/11/1
 * Time: 上午10:56
 */
use Com\JeRuen\Zan\View\IView;

class View implements IView
{

    public static function display($tplPath, array $data = [])
    {
        /** @var \Illuminate\View\Factory $loader */
        $loader = ViewLoader::getInstance()->getLoader();

        $template = $loader->make($tplPath, $data)->render();

        return $template;
    }
}
