<?php namespace Com\JeRuen\Zan\View\Example;
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/11/1
 * Time: 下午5:12
 */

class UserController extends BaseController
{
    public function blade()
    {
        $this->assign('str', 'zan');
        yield $this->display('index');
    }

    public function twig()
    {
        $this->assign('str', 'twig');
        yield $this->display('index.html');
    }

    public function zan()
    {
        $this->assign('str', 'zan');
        yield $this->display('Demo/test/test');
    }
}
