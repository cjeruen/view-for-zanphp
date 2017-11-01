<?php namespace Com\JeRuen\Zan\View\Example;

/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/11/1
 * Time: 下午1:38
 */

use Com\JeRuen\Zan\View\Blade\View;
//use Com\JeRuen\Zan\View\Twig\View;
//use ZanPHP\HttpView\View;

use ZanPHP\Framework\Foundation\Domain\HttpController as Controller;

class BaseController extends Controller
{
    public function display($tpl)
    {
        $content = View::display($tpl, $this->viewData);
        return $this->output($content);
    }
}
